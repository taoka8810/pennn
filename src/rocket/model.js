import vertexShader from "./shader/vertexShader";
import fragmentShader from "./shader/fragmentShader";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader";
import { DRACOLoader } from "three/examples/jsm/loaders/DRACOLoader";
import * as THREE from "three";

// パス関係はこいつを通す
const path = "./wp-content/themes/pennn_theme/rocket";
const rocketButtonElement = document.getElementById("rocket-button");

window.addEventListener("DOMContentLoaded", init);

function init() {
  // renderer
  const renderer = new THREE.WebGLRenderer({
    canvas: document.querySelector(`#myRocket`),
    antialias: true,
  });

  // scene
  const scene = new THREE.Scene();
  scene.background = new THREE.Color(0x252526);

  // camera
  const fov = 45;
  const fovRad = (fov / 2) * (Math.PI / 180);
  let distance = innerHeight / 2 / Math.tan(fovRad);
  const camera = new THREE.PerspectiveCamera(
    fov,
    window.innerWidth / window.innerHeight,
    0.1,
    30000
  );
  camera.position.z = distance;

  // directionalLight
  const directionalLight = new THREE.DirectionalLight(0xfffff0, 0.5);
  directionalLight.position.set(0, window.innerHeight * 1.5, distance);
  directionalLight.castShadow = true;
  scene.add(directionalLight);

  // ambientLight
  const ambientLight = new THREE.AmbientLight(0x7f7fff, 1.0);
  scene.add(ambientLight);

  // texture
  const textureLoader = new THREE.TextureLoader();
  const rocketTexture = textureLoader.load(`${path}/images/rocket_texture.PNG`);
  rocketTexture.flipy = false;
  const stepTexture = textureLoader.load(`${path}/images/shader.png`);

  // material
  const material = new THREE.ShaderMaterial({
    lights: true,
    uniforms: {
      ...THREE.UniformsLib.lights,
      uTex: { value: rocketTexture },
      uStep: { value: stepTexture },
      uGlossiness: { value: 10 },
    },
    vertexShader: vertexShader,
    fragmentShader: fragmentShader,
  });

  const outlineMaterial = new THREE.MeshBasicMaterial({
    color: 0x763865,
  });

  // model
  const loader = new GLTFLoader();
  const dracoLoader = new DRACOLoader();
  dracoLoader.setDecoderPath(`${path}/draco/`);
  loader.setDRACOLoader(dracoLoader);
  let rocket;
  loader.load(`${path}/model/rocket.glb`, (gltf) => {
    rocket = gltf.scene;
    rocket.traverse((child) => {
      if (child.name == "トーラス_1") {
        child.material = outlineMaterial;
      } else {
        child.material = material;
      }
    });
    if (innerHeight / innerWidth < 1) {
      rocket.scale.set(distance / 15, distance / 15, distance / 15);
    } else {
      rocket.scale.set(
        distance / ((innerHeight / innerWidth) * 15),
        distance / ((innerHeight / innerWidth) * 15),
        distance / ((innerHeight / innerWidth) * 15)
      );
    }
    rocket.position.set((innerWidth / 1.5) * -1, (innerHeight / 1.5) * -1, 0);
    rocket.rotation.z = Math.atan(innerWidth / innerHeight) * -1;
    rocket.castShadow = true;
    rocket.receiveShadow = true;
    scene.add(rocket);
  });

  // frame animation
  function tick() {
    renderer.render(scene, camera);
    renderer.shadowMap.enabled = true;
    requestAnimationFrame(tick);
    renderer.physicallyCorrectLights = true;
    renderer.outputEncoding = THREE.sRGBEncoding;
    renderer.toneMapping = THREE.CustomToneMapping;
    renderer.gammaOutput = true;
    renderer.gammaInput = true;
  }
  tick();

  // rocket motion
  function rocketMotion() {
    if (rocket) {
      const quaternion = rocket.quaternion;
      const target = new THREE.Quaternion();
      const axis = new THREE.Vector3(0, 1, 0).normalize();
      target.setFromAxisAngle(axis, (Math.PI / 270) * -1);
      quaternion.multiply(target);
    }
    if (rocket) {
      if (rocket.position.x <= innerWidth) {
        rocket.position.x += innerWidth / 400;
        rocket.position.y += innerHeight / 400;
        window.requestAnimationFrame(rocketMotion);
      } else {
        rocketButtonElement.dataset.clicked = "false";
        rocket.position.x += 0;
        rocket.position.y += 0;
      }
    }
  }
  rocketButtonElement.addEventListener("click", function () {
    rocket.position.set((innerWidth / 1.5) * -1, (innerHeight / 1.5) * -1, 0);
    rocketMotion();
  });

  // window resize
  function onResize() {
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(window.innerWidth, window.innerHeight);
    camera.aspect = window.innerWidth / window.innerHeight;
    distance = window.innerHeight / 2 / Math.tan(fovRad);
    camera.position.z = distance;
    camera.updateProjectionMatrix();
  }
  onResize();
  window.addEventListener(`resize`, onResize);
}

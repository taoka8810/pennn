import * as THREE from "three";
import { OrbitControls } from "three/examples/jsm/controls/OrbitControls";
import { FontLoader } from "three/examples/jsm/loaders/FontLoader";
import { TextGeometry } from "three/examples/jsm/geometries/TextGeometry";

const path = "/wp-content/themes/pennn_theme";
window.addEventListener("DOMContentLoaded", init);

function init() {
  // scene
  const scene = new THREE.Scene();
  scene.background = new THREE.Color(0x252526);

  // axes
  // const axesHelper = new THREE.AxesHelper();
  // scene.add(axesHelper);

  // renderer
  const renderer = new THREE.WebGLRenderer({
    canvas: document.querySelector(`#myText`),
  });
  renderer.setSize(window.innerWidth, window.innerHeight);
  // camera
  const camera = new THREE.PerspectiveCamera(
    75,
    window.innerWidth / window.innerHeight,
    0.1,
    1000
  );
  camera.position.set(0, 0, 3);

  // orbit control
  const controls = new OrbitControls(camera, renderer.domElement);
  controls.enableZoom = false;
  controls.enableDamping = true;
  controls.dampingFactor = 0.05;

  // direction light
  const directionalLight = new THREE.DirectionalLight(0xffffff, 1);
  directionalLight.position.set(0, 1, 1);
  directionalLight.castShadow = true;
  scene.add(directionalLight);

  // font
  const fontLoader = new FontLoader();
  fontLoader.load(`${path}/json/Roboto Black_Regular.json`, (font) => {
    const textGeometry = new TextGeometry("404", {
      font: font,
      size: 1.5,
      height: 0.4,
      curveSegments: 10,
      bevelEnabled: true,
      bevelThickness: 0.03,
      bevelSize: 0.02,
      bevelOffset: 0,
      bevelSegments: 4,
    });
    textGeometry.center();

    const textMaterial = new THREE.MeshMatcapMaterial({ color: 0xffffff });
    const text = new THREE.Mesh(textGeometry, textMaterial);
    scene.add(text);
  });

  // Resize
  function onResize() {
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(window.innerWidth, window.innerHeight);
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
  }
  onResize();
  window.addEventListener(`resize`, onResize);

  // text rotation
  function rotateText() {
    scene.rotateY(0.006);
    scene.rotateX(-0.009);
    scene.rotateZ(0.005);
    controls.update();
  }

  // animate
  function animate() {
    rotateText();
    renderer.render(scene, camera);
    requestAnimationFrame(animate);
  }
  animate();
}

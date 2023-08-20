varying vec2 vUv;
varying vec3 vNormal;
varying vec3 vViewDir;

void main() {

    vec4 worldPosition = modelMatrix * vec4 (position, 1.0);
    vec4 viewPosition = viewMatrix * worldPosition;
    vec4 clipPosition = projectionMatrix * viewPosition;

    gl_Position = clipPosition;

    vNormal = normalize(normalMatrix * normal);
    vViewDir = normalize(-viewPosition.xyz);

    vUv = uv;
}

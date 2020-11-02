console.log("Create the scene");
var scene = new THREE.Scene();
console.log("Done");

console.log("Create the camera");
var camera = new THREE.PerspectiveCamera(75, window.innerWidth/window.innerHeight, 0.1, 1000);
camera.position.x = 0;
camera.position.y = 0;
camera.position.z = 10;
console.log("Done");

console.log("Create the renderer");
var renderer = new THREE.WebGLRenderer();
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);
console.log("Done");

console.log("Create a cone");
var geoCone= new THREE.CylinderGeometry(1.1, 0.1, 3, 18);
var matCone = new THREE.MeshPhongMaterial({color: 0xCC6622});
var meshCone = new THREE.Mesh(geoCone, matCone);
console.log("Done");

console.log("Create the first ice ball");
var geoIce1= new THREE.SphereGeometry(1, 18, 18);
var matIce1 = new THREE.MeshPhongMaterial({color: 0x669900});
var meshIce1 = new THREE.Mesh(geoIce1, matIce1);
meshIce1.position.y = 1.7;
console.log("Done");

console.log("Create the second ice ball");
var geoIce2= new THREE.SphereGeometry(0.8, 18, 18);
var matIce2 = new THREE.MeshPhongMaterial({color: 0xCCCCCC});
var meshIce2 = new THREE.Mesh(geoIce2, matIce2);
meshIce2.position.y = 1.0;
console.log("Done");

console.log("Setup the scene graph");
scene.add(meshCone);
meshCone.add(meshIce1);
meshIce1.add(meshIce2);
console.log("Done");

console.log("Create the floor");
var geoFloor = new THREE.PlaneGeometry(16, 12);
var matFloor = new THREE.MeshPhongMaterial({color: 0xCCCCCC, side: THREE.DoubleSide});
var meshFloor = new THREE.Mesh(geoFloor, matFloor);
meshFloor.rotation.x = Math.PI / 2;
meshFloor.position.y = -3;
scene.add(meshFloor);
console.log("Done");

console.log("Add a spotlight");
var spotLight = new THREE.SpotLight(0xffffff);
spotLight.position.set(-0, 30, 60);
spotLight.intensity = 0.6;
scene.add(spotLight);
console.log("Done");

console.log("Define the animation function");
function animate() 
{
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
}
animate();
console.log("Done");


 let scene = new THREE.Scene(); //creates a scene.
 let camera = new THREE.PerspectiveCamera (75, window.innerWidth / window.innerHeight , 0.1, 1000 ); //Perspective projection parameters

//Camera positions
    camera.position.x = 0;
    camera.position.y = 0;
    camera.position.z = 10;

//Creates the renderer.
 let renderer = new THREE.WebGLRenderer();
 renderer.setSize(window.innerWidth , window.innerHeight); //Size of the 2D projection
 document.body.appendChild(renderer.domElement); //Connecting to the canvas

//Creates the sphere.
 let geometry1 = new THREE.SphereGeometry(3, 18, 18); // Sphere shape geometry
 let material1 = new THREE.MeshPhongMaterial ({ color : 0xffffff }); // Advanced material with shading
//var material1 = new THREE.MeshPhysicalMaterial ({color: 0xffffff }); //a different type of material.
 let mesh1 = new THREE.Mesh (geometry1, material1); // Link up the geometry and the material to the mesh
 scene.add(mesh1);

//Creates the lighting.
 let spotLight = new THREE.SpotLight(0xffffff);
 spotLight.position.set(-0, 20, 100);
 spotLight.intensity = 0.6;
 scene.add(spotLight);

//Creates a light point in the scene. This disperses light in every direction, so it acts like a bulb.
//var pointLight = new THREE.PointLight(0xfc45ff, 15.0, 110, 2.0); //(colour, intensity, distance, decay)
//pointLight.position.set(-50, 50, 50); // (x, y, z);
//scene.add(pointLight);

function animate()
{
    requestAnimationFrame(animate);
    renderer.render(scene, camera);
}
animate();

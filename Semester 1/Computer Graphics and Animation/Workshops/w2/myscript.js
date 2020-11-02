 let scene = new THREE.Scene(); //creates a scene.
// scene.background = new THREE.Color( 'darkgray' );

 let camera = new THREE.PerspectiveCamera (75, window.innerWidth / window.innerHeight , 0.1, 1000 ); //Perspective projection parameters
//Camera positions
    camera.position.x = 0;
    camera.position.y = -10;
    camera.position.z = 80;

//Creates the renderer.
 let renderer = new THREE.WebGLRenderer();
 renderer.setSize(window.innerWidth , window.innerHeight); //Size of the 2D projection
 document.body.appendChild(renderer.domElement); //Connecting to the canvas

//Creates the spheres.
 let geometry1 = new THREE.SphereGeometry(16, 96, 96); // Sphere shape geometry
 let geometry2 = new THREE.SphereGeometry(12, 72, 72);

 //let geometryCone = new THREE.ConeGeometry(3.2, 12, 12);
 let geometryCone = new THREE.CylinderGeometry( 15, 0, 40, 40 );

 //Geometry circle
 let geometryCircle = new THREE.CircleGeometry ( 20, 360);

 //Materials
 let material1 = new THREE.MeshPhongMaterial ({ color : 0xffffff }); // Advanced material with shading
 let material2 = new THREE.MeshPhongMaterial({ color: 0xff0000});
 let materialCone = new THREE.MeshPhongMaterial({color: 0xD2B48C});
 let materialCircle = new THREE.MeshPhongMaterial ({ color : 0x88AA22, transparent: true, opacity: 0.6});
//var material1 = new THREE.MeshPhysicalMaterial ({color: 0xffffff }); //a different type of material.

//meshes
 let mesh1 = new THREE.Mesh (geometry1, material1); // Link up the geometry and the material to the mesh
 let mesh2 = new THREE.Mesh (geometry2, material2);
 let mesh3 = new THREE.Mesh (geometryCone, materialCone);
 let mesh4 = new THREE.Mesh (geometryCircle,materialCircle);

var geoCircleArray= [];
var matCircleArray= [];
var meshCircleArray= [];
var iCircleNumber= 30;

for (var i =0; i < iCircleNumber; i++)
{
    geoCircleArray.push( new THREE.CircleGeometry(4 * Math.random () * 4, 360) );
    matCircleArray.push( new THREE.MeshPhongMaterial({ color: Math.random () * 0xFFFFFF, transparent: true, opacity: Math.random () * 0.2 + 0.3}) );
    meshCircleArray.push( new THREE.Mesh(geoCircleArray[i], matCircleArray[i]));
    meshCircleArray[i].position.z = 20.0;
    meshCircleArray[i].position.x = i * Math.random() * -i;
    meshCircleArray[i].position.y = i * Math.random() * -i;

    scene.add(meshCircleArray[i]);
}


 mesh1.position.y = -10;
 mesh2.position.y = 8;
 mesh3.position.y = -33;
 mesh4.position.x = -40;
 mesh4.position.y = -20;
 mesh4.position.z = 20.0;

 scene.add(mesh1);
 scene.add(mesh2);
 scene.add(mesh3);
 scene.add(mesh4);


//Creates the lighting.
 let spotLight = new THREE.SpotLight(0xffffff);
 spotLight.position.set(-0, 20, 100);
 spotLight.intensity = 0.6;
 scene.add(spotLight);

//Creates a light point in the scene. This disperses light in every direction, so it acts like a bulb.
//var pointLight = new THREE.PointLight(0xffffff, 15.0, 110, 2.0); //(colour, intensity, distance, decay)
//pointLight.position.set(-50, 50, 50); // (x, y, z);
//scene.add(pointLight);

 var iFrame = 0;

function animate()
{
    requestAnimationFrame(animate);
    for (var i =0; i < iCircleNumber; i++) {
        meshCircleArray[i].position.y= Math.sin(iFrame/200 + i*10) * 6;
    }
    iFrame++;
    mesh1.position.x = Math.sin (iFrame /100 + 3.14) * 10;
    mesh2.position.x = Math.sin (iFrame /100 + 3.14) * 10;
    mesh3.position.x = Math.sin (iFrame /100 + 3.14) * 10;
    renderer.render(scene, camera);
}
animate();

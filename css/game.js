var camera, scene, renderer;
var geometry, material, mesh;

init();
animate();


function init() {

	camera = new THREE.PerspectiveCamera( 70, window.innerWidth / window.innerHeight, 0.01, 10 );
	camera.position.z = 1;

	scene = new THREE.Scene();

	geometry = new THREE.BoxGeometry( 0.2, 0.5, 0.5 );
	material = new THREE.MeshNormalMaterial();

	mesh = new THREE.Mesh( geometry, material );
	scene.add( mesh );

	renderer = new THREE.WebGLRenderer( { antialias: true } );
	renderer.setSize( window.innerWidth, window.innerHeight );
	document.body.appendChild( renderer.domElement );
}

function onDocumentMouseMove( event ) {
    mouseX = ( event.pageX / window.innerWidth ) * 2 - 1;
	mouseY = - ( event.pageY / window.innerHeight ) * 2 + 1;
    raycaster.setFromCamera( mouse.clone(), camera );   
    
    var objects = raycaster.intersectObjects(scene.children); 
}

function animate() {

	requestAnimationFrame( animate );

	mesh.rotation.x++;
	mesh.rotation.y += 2;

	mesh.position.x += 0.001;
	renderer.render( scene, camera );

}


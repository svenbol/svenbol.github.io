// init
/* To Display anything:: NEED :: a CAMERA to RENDER the SCENE */

	var scene = new THREE.Scene();
	var camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );/* camera: Field Of View(degrees) , aspect ratio ( w/h = responsive ) , near-clipping plane , far-clipping plane ; */
	var renderer = new THREE.WebGLRenderer();

		renderer.setSize( window.innerWidth, window.innerHeight );
		document.body.appendChild( renderer.domElement );

	var geometry = new THREE.geometry();
	var material = new THREE.MeshBasicMaterial({ color: 0x00ff00 }); // hex
	var cube = new THREE.Mesh(geometry,material);
			
		scene.add(cube); // coordinates: x=0 , y=0 , z=0
		camera.position.z = 5;


	// Render/Animate - Loop 

	function animate(){
		requestAnimationFrame(animate);
		render.render(scene,camera);
	}

	animate();


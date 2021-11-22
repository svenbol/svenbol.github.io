<?php

return "
<script>
	window.onload = function (){
		var checkbox = document.querySelectorAll('.checkPlantImg');
		for(let i=0; i < checkbox.length ; i++){
			checkbox[i].addEventListener('change', function(){
				var checkedItem = document.querySelectorAll('.checkPlantImg:checked');
				if(checkedItem.length > 1) this.checked = false;
			});
		}
	}
</script>
";
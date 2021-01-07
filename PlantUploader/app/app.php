<?php
echo "
	<script type='text/javascript'>
		document.onload = function(){
			var btn = document.getElementById('btnUpload');
			var target = document.getElementsByClassName('midFloat');

				btn.onmouseover = function(){
					target.style.background = 'linear-gradient(0deg, transparent 33%, rgba(25,150,25,0.66) 66%, rgba(75,250,75,0.66) 100%)';
					console.log('YOUR OVER THE ITEM');
				}


			$('#btnUpload').hover(function(){
				$('.midFloat').css('background','green');
			})
		}
	</script>
";
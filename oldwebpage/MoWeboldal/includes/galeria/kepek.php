<style type="text/css">
	
	.p-galeria {

		text-align: center;
		font-style: italic;
	}

</style>

<div id=galeria>

	<h3>Képeink</h3>

	<div class="container">
		
		<div class="row">
				
			<div class="col-12 col-s-12">
				
				<div id="easyPaginate">

				<?php

					$directory = 'images/galeria/';

					$scanned_directory = array_diff(scandir($directory), array('videos','..', '.'));

					foreach ($scanned_directory as $key => $value) {
						
						echo '<img class="kep-3" src="'.$directory.$scanned_directory[$key].'" >';

						echo "<br>";

					}

				 ?>

				</div>

		</div>

	</div>

</div>

<!--

<div class="container">

	<div class="row">

			<div class="col-12 col-s-12">

				<img class="kep-3" src="images/galeria/zaszlo.jpg">

				<p class="p-galeria">A Szövetség zászlaja</p>

			</div>

	</div>

</div>

<div class="container">

	<div class="row">

		<div class="col-12 col-s-12">

				<img class="kep-3" src="images/galeria/vezetok.jpg">

				<p class="p-galeria">2018-as vezető csapat</p>

		</div>

	</div>

</div> 

-->

<script src="js/jquery.min.js"></script>

<script src="js/jquery.easyPaginate.js"></script>

<script type="text/javascript">
	
	$('#easyPaginate').easyPaginate({
		paginateElement: 'img',
		elementsPerPage: 3,
		effect: 'default',
		firstButtonText: 'Első',
		lastButtonText: 'Utolsó',
	});

</script>

</div>
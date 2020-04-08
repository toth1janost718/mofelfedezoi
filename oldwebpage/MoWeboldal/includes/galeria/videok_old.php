<style type="text/css">
	
	.p-galeria {

		text-align: center;
		font-style: italic;
	}

</style>

<div id=galeria>

	<div class="container">

	<h3>Videóink</h3>

		<div class="row">

			<div class="col-12 col-s-12">

				<div id="easyPaginate">

					<div class="infobox">

						<?php

							$directory = 'images/galeria/videos/';

							$scanned_directory = array_diff(scandir($directory), array('videos','..', '.'));

							foreach ($scanned_directory as $key => $value) {
								
								echo '<video controls>

										 <source src="'.$directory.$scanned_directory[$key].'" type="video/mp4">

										</video>';

								echo "<br>";

							}

						 ?>

				 	</div>

				</div>

			</div>

		</div>

	</div>

	<script src="js/jquery.min.js"></script>

	<script src="js/jquery.easyPaginate.js"></script>

	<script type="text/javascript">
	
		$('#easyPaginate').easyPaginate({
			paginateElement: 'video',
			elementsPerPage: 1,
			effect: 'default',
			firstButtonText: 'Első',
			lastButtonText: 'Utolsó',
		});

	</script>

</div>
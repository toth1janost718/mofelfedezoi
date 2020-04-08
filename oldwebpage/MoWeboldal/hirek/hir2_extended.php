<div class="outline">

	<div class="container">
		
		<h2 class="CIM2">Örökség Serleg Elismerés</h2>

		<?php

					$directory = 'hirek/2019_januar/';

					$scanned_directory = array_diff(scandir($directory), array('..', '.'));

					foreach ($scanned_directory as $key => $value) {
						
						echo '<img class="kep-hir" src="'.$directory.$scanned_directory[$key].'" >';

						echo "<br>";

					}

		?>

	</div>

</div>
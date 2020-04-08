<?php include 'includes/header.php'; ?>

		<div class="row"><div class="col-3 hspace"></div></div>

		<div class="container">
			
		<div class="row">
			
				<div id="content" class="col-12 col-s-12 content-2">

					<header class="col-12">
						<nav>
							<ul>
								<li><a href="?kepek">Képek</a></li>
								<li><a href="?videok">Videók</a></li>
							</ul>
						</nav>
					</header>
		
		<?php
					
						if(isset($_GET['videok'])){
							
							include 'includes/galeria/videok.php';
							
						}else{
							
							include 'includes/galeria/kepek.php';
							
						}
					?>

				</div>
				
		</div>

		</div>
		
		<div class="row"><div class="col-3 hspace"></div></div>

<div class="container">				

<div class="row">

		<?php include 'includes/footer.php'; ?>
	
</div>

</div>
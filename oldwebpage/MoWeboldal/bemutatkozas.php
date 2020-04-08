<?php include 'includes/header.php'; ?>

		<div class="row"><div class="col-3 hspace"></div></div>

		<div class="container">
			
			<div class="row">
				
					<div id="content" class="col-12 col-s-12 content-2">

						<header class="col-12 col-s-12">
							<nav>
								<ul>
									<li><a href="?rolunk">Rólunk</a></li>
									<li><a href="?jelvenyek">Jelvényeink</a></li>
									<li><a href="?muzeum">Múzeumunk</a></li>
								</ul>
							</nav>
						</header>
			
			<?php
						
							if(isset($_GET['jelvenyek'])){
								
								include 'includes/bemutatkozas/jelvenyek.php';
								
							}else if(isset($_GET['muzeum'])){

								include 'includes/bemutatkozas/muzeum.php';

							}else{
								
								include 'includes/bemutatkozas/rolunk.php';
								
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
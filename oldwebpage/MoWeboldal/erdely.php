<?php include 'includes/header.php'; ?>

		<div class="row"><div class="col-3 hspace"></div></div>

		<div class="container">
			
			<div class="row">
				
					<div id="content" class="col-12 col-s-12 content-2">

						<header class="col-12 col-s-12">
							<nav>
								<ul>
									<li><a href="erdely.php?harmasfalu">Hármasfalu</a></li>
									<li><a href="erdely.php?kibed">Kibéd</a></li>
									<li><a href="erdely.php?sovarad">Sóvárad</a></li>
								</ul>
							</nav>
						</header>
			
						<?php
						
							if(isset($_GET['sovarad'])){
								
								include 'includes/csapatok/sovarad.php';
								
							}else if(isset($_GET['kibed'])) {
								
								include 'includes/csapatok/kibed.php';
								
							}else
								
								include 'includes/csapatok/harmasfalu.php'
								
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
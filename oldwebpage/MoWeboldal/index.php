


<?php include 'includes/header.php'; ?>

		<div class="row"><div class="col-12 col-s-12 hspace"></div></div>

		<div class="container">
			
			<div class="row">
				
					<div id="content" class="col-12 col-s-12 content">
						
					
						<?php
						
							if(isset($_GET['kapcsolat'])){
								
								include 'includes/kapcsolat.php';
								
							} else if(isset($_GET['hir1'])) {

								include 'hirek/hir1_extended.php';

							}else if(isset($_GET['hir2'])) {

								include 'hirek/hir2_extended.php';

							}else{
								
								include 'includes/home.php';
								
							}
						?>
						
					</div>
					
			</div>

		</div>
		
		<div class="row"><div class="col-12 col-s-12 hspace"></div></div>


		
     
    
		

				
<div class="container">

<div class="row">

		<?php include 'includes/footer.php'; ?>
	
</div>

</div>
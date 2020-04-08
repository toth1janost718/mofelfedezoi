<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Magyarország Felfedezői Szövetség</title>
		<link rel="shortcut icon" href="images/stags_logo.png" />
		<link rel="stylesheet" type="text/css" href="css/core.css">
		<link rel="stylesheet" type="text/css" href="css/rwd.css">
		<META NAME="Description" CONTENT="Pro Patria" />
		<meta charset="UTF-8" />

	</head>
	<body>
		
		<div class="row"><div class="col-3 vspace"></div></div>
		
		<div class="row">
		
			<div class="col-1 vspace"></div>
			
			<header class="col-2">
			
<!--				<h1 class="CIM">Magyarország Felfedezői Szövetség</h1> -->

				<?php
				
					if(isset($_GET['galeria'])){
							
						echo '<h1 class="CIM">Magyarország Felfedezői Szövetség</h1>';

					}else if(isset($_GET['kapcsolat'])){
							
						echo '<h1 class="CIM">Magyarország Felfedezői Szövetség</h1>';
							
					}else{
							
						echo '<h1 class="CIM">Örökségünk Magyarország</h1>';
							
					}
						
				?>
				<nav>
					<ul>
						<li><a href="index.php">Kezdőlap</a></li>
						<li><a href="bemutatkozas.php">Bemutatkozás</a></li>
						
						<!-- <li><a href="index.php?csapataink">Csapataink</a></li> -->
						
						<li><div class="dropdown">
						
							<button class="dropbtn">Csapataink</button>
							
								<div class="dropdown-content">
								  <a href="erdely.php">Erdély</a>
								  <a href="felvidek.php">Felvidék</a>
								  <a href="magyarorszag.php">Magyarország</a>
								</div>
							
						</div></li>
						
						
						
						<li><a href="index.php?galeria">Galéria</a></li>
						<li><a href="index.php?kapcsolat">Kapcsolat</a></li>
					</ul>
				</nav>
			</header>
			
			<div class="col-1 vspace"></div>
			
		</div>
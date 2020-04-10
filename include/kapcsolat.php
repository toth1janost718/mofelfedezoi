<!DOCTYPE html>
<html>

<?php
include_once 'head.php';
?>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<?php
				include_once 'header.php';
				?>
				<br>
				<h2>
					<p class="cim1"><b>Elnök:</b> <a href="mailto:morvai.richard@gmail.com"><u>Morvai Richhárd</u></a></p>
				</h2>
				<h3>
					<p class="cim1">Táborral és táborhely bérlésével kapcsolatos információk: <a href="mailto:gyurkapajtas@citromail.hu"><u>Balázs György</u></a></p>
				</h3>

				<h3>
					<p class="cim1"><b>Telefonszám: 30 / 320-26-42</b></p>
				</h3>





				<h3 class="cim2"><u>További kérdése van?</u></h3><br>

				<form method="post" action="../../include/koszonet">
					<div class="row gtr-uniform">
						<div class="col-6 col-12-xsmall">
							<input type="text" name="name" id="name" value="" placeholder="Név" required />
						</div>
						<div class="col-6 col-12-xsmall">
							<input type="email" name="email" id="email" value="" placeholder="E-mail " required />
						</div>
						<div class="col-6 col-12-xsmall	">
							<input type="text" name="telephone" id="telephone" value="" placeholder="Telefonszám" />
						</div>
						<div class="col-6 col-12-xsmall	">
							<input type="text" name="subject" id="subject" value="" placeholder="Tárgy" required />
						</div>

						<div class="col-12">
							<textarea name="message" id="message" placeholder="Írj nekünk.." rows="6" required></textarea>
						</div>

						<div class="col-12">
							<ul class="actions">
								<li><input type="submit" name="submit" value="Üzenet küldése" class="primary" /></li>
								<li><input type="reset" value="Üzenet törlése" /></li>
							</ul>
						</div>
					</div>
				</form>

				<h3>
					<p class="cim1"> A következő e-mail címen érdeklődhet még Szövetségünkről: <a href="mailto:info@magyarorszagfelfedezoi.hu">info@magyarorszagfelfedezoi.hu</a></p>
				</h3>
			</div>
		</div>

		<?php

		include_once 'sidebar.php';
		?>

		<?php
		include_once 'script.php';
		?>

	</div>

</body>

</html>
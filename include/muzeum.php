<!DOCTYPE HTML>
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
				<h2 style="text-align:center">A magyar történelem gyermekhőseinek emléket állító múzeum Sárospatakon</h1><br>
					<p>A Magyarország Felfedezői Szövetség vezetőképző központja Sárospatak, Bodroghalász nevű városrészében található. Miért esett a választás éppen Sárospatakra? Mert nincs Magyarországon még egy olyan hely, ahol annyi természeti és történelmi érték együtt lenne, mint ezen a tájon. A szövetség a Sárospatakon álló két hajdani parasztházat 1993-ban vásárolta. A házakat a szervezet tagjai jobbára a maguk erejéből újították fel, s gondozzák önzetlen segítséggel ma is. Az egyik ház szálláshelyül szolgál. A közvetlenül a Bodrog-folyó partjánál fekvő másik ház azonban ma Magyarország egyetlen, a magyar történelem gyermekhőseinek és a gyermekhősök emlékét őrző munkáknak emléket állító múzeumnak ad helyet. A három szobás kicsi múzeumunkban bőven talál írásokat, emléktárgyakat, képeket az ide látogató. Nyaranta pedig a táborok alkalmával a gyerekek bújnak be egy-egy órára, hogy például a választott próbájuk egyik feladataként kiválasszanak maguknak egy gyermekhőst, akit valamely tulajdonsága miatt követendő példának tartanak. A gyermekhősök múzeumának parkosított kertjében kopjafákkal övezve áll a Hármashalom.

					</p>
					<h5 style="text-align:center;font-style: italic"><strong>Képek a múzeum kiállításaiból</strong></h4><br>

						<div class="w3-content" style="max-width:800px">
							<img class="mySlides" src="../../images/rolunk/muzeum/kiallitas.png" style="width:80%;display:none">
							<img class="mySlides" src="../../images/rolunk/muzeum/rajz.png" style="width:80%">
							<img class="mySlides" src="../../images/rolunk/muzeum/zaszlo.png" style="width:80%;display:none">
							<img class="mySlides" src="../../images/rolunk/muzeum/ruha.png" style="width:80%;display:none">


							<div class="w3-row-padding w3-section">
								<div class="w3-col s2">
									<img class="demo w3-opacity w3-hover-opacity-off" src="../../images/rolunk/muzeum/kiallitas.png" style="width:80%;cursor:pointer" onclick="currentDiv(1)">
								</div>
								<div class="w3-col s2">
									<img class="demo w3-opacity w3-hover-opacity-off" src="../../images/rolunk/muzeum/rajz.png" style="width:80%;cursor:pointer" onclick="currentDiv(2)">
								</div>
								<div class="w3-col s2">
									<img class="demo w3-opacity w3-hover-opacity-off" src="../../images/rolunk/muzeum/zaszlo.png" style="width:80%;cursor:pointer" onclick="currentDiv(3)">
								</div>
								<div class="w3-col s2">
									<img class="demo w3-opacity w3-hover-opacity-off" src="../../images/rolunk/muzeum/ruha.png" style="width:80%;cursor:pointer" onclick="currentDiv(4)">
								</div>

							</div>
						</div>

			</div>



		</div>
		<?php
		include_once 'sidebar.php';
		?>


	</div>

	<?php
	include_once 'script.php';
	?>
	<script>
		function currentDiv(n) {
			showDivs(slideIndex = n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			if (n > x.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = x.length
			}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
			}
			x[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " w3-opacity-off";
		}
	</script>

</body>

</html>
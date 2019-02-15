<?php
	define("game", "Schaken"); //Yathzee Monopoly Schaken
	define("TF", false);
	define("number", 2);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<style type="text/css">

    </style>
	<header><?php  include 'parts/header.php'; ?></header>
<?php

	if (constant("game") == "Yathzee") {
		if(constant("TF") == true) {
			if (number >15 && number <30) {
				echo "<h1>Je wilt
						Yathzee
						spelen
						want je
						hebt
						tussen
						de 15 en
						30 minuten
						tijd</h1>
						";
			}elseif (number < 15 || number > 30) {
				echo "<h1>Je wilt
						Yathzee
						spelen
						want dat
						vindt je
						gewoon
						leuk</h1>";
			}else{}
		}elseif(constant("TF") == false) {
			if (constant("number") >100) {
				echo "<h1>Je wilt
						geen
						Yathzee
						spelen
						want je
						wilt meer
						dan 100x
						met een
						dobbelsteen
						gooien
						</h1>";
			}elseif (constant("number")<=100) {
				echo "<h1>Je wilt
						geen
						Yathzee
						spelen
						want je
						wilt
						minder
						dan 100
						punten
						halen</h1>";
			}
		}



	}elseif (constant("game") == "Monopoly"){
		if(constant("TF") == true) {
			if (constant("number") ==1) {
				echo "<h1>Je wilt
						Monopoly
						spelen
						want je
						hebt
						aan 1
						spelletje
						genoeg
						</h1>";
			}elseif (constant("number") >1) {
				echo "<h1>Je wilt
						Monopoly
						spelen
						want je
						houd er
						van om
						iedereen
						blut
						te maken</h1>";
			}

		}elseif(constant("TF") == false) {
			if (constant("number") ==2 || constant("number") >120) {
				echo "<h1>Je wilt
						Monopoly
						niet
						spelen
						want je
						hebt geen
						zin in een
						spel van
						2 uur</h1>";
			}else{
				echo "<h1>Je wilt
						Monopoly
						niet
						spelen
						want je
						houd niet
						van
						hotels</h1>";
			}

		}



	}elseif (constant("game") == "Schaken"){
		if(constant("TF") == true) {
			if (number == 2) {
				echo "<h1>Je wilt
						Schaken
						want je
						vindt
						zwart en
						wit
						leuk
						</h1>";
			}elseif (number <>2) {
				echo "<h1>Je wilt
						Schaken
						want
						je denkt
						slimmer
						dan mij
						te zijn</h1>";
			}
		}elseif(constant("TF") == false) {
			if (number <=1) {
				echo "<h1>Je wilt
						echt
						niet
						Schaken</h1>";
			}else{
				echo "<h1>Je wilt
						gewoon
						niet
						Schaken</h1>";
			}
		}



	}else{
		echo "?!?!?!?";
	}

	
?>
	<?php
 	 include 'parts/footer.php'
 	 ;?>
</body>
</html>
<?php 
$hello2 = "hello? ";
$world = " world!";
$hello = "learning php!!";
$hello = "hello world!!";
define("hi","hello world!?!?");
$hewo = array("hello" , "world");


?>

<html>
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
	<header>
	<?php 
	  include 'parts/header.php';
	 ?>
 </header>
	<h1>
		<?php
			echo ("hello world");
 		?>
	</h1>
	<h1>
		<?php
			echo constant("hi");
 		?>		
	</h1>
	<h1>
		<?php
			echo ($hello);
 		?>		
	</h1>
	<h1>
		<?php
			echo ($hello2 . $world);
 		?>		
	</h1>
		<h1>
		<?php
			echo  $hewo[0]." , " . $hewo[1];
 		?>		
	</h1>
	<?php
 	 include 'parts/footer.php'
 	 ;?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <style type="text/css">
        header{
            
        }
    </style>
    <header> <?php include 'parts/header.php'; ?></header>
	<h1>Lab 3b</h1>
<?php
$array =  array("3","5" ,"6","8","12");
foreach ($array as $cijfer) {
$getal = $cijfer;
echo "<h2> Tafel van ". $cijfer ."</h2><br>";
tafel($getal);
echo "<br>";
}


function tafel($getal){
for ($i=1; $i <= 10; $i++) { 
	echo($i ." X "  . $getal . " = " . ($getal * $i) ."<br>");
}

}

?>
<br>
<h1>Lab 3a</h1>
<?php
        $getal1 = rand(1,20);
        $getal2 = rand(1,20);

        echo $getal1." x ".$getal2." = ".($getal1 * $getal2)."<br>";
        echo $getal1." / ".$getal2." = ".($getal1 / $getal2)."<br>";
        echo $getal1." + ".$getal2." = ".($getal1 + $getal2)."<br>";
        echo $getal1." - ".$getal2." = ".($getal1 - $getal2)."<br>";


    ?>
    <?php
     include 'parts/footer.php'
     ;?>
</body>
</html>
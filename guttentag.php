	<?php
 
	date_default_timezone_set('Europe/Amsterdam');
	    $ochtend = date("06:00");
	   $middag = date("12:00");
	  $avond = date("18:00");
	 $nacht = date("00:00");
	$tijd = date("H:i:s");

if ($tijd >= $ochtend && $tijd < $middag) {
	$goede= 'morning';
}elseif ($tijd >= $middag && $tijd <  $avond) {
	$goede=	'afternoon';
}elseif ($tijd >= $avond && $tijd >  $nacht) {
	$goede=	'evening';
}elseif ($tijd >= $nacht && $tijd <  $ochtend) {
	$goede= 'night';
}
		?>
<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="1">
<head>
	<title></title>
			<style type="text/css">
			body{
				font-size: 32px;
				margin-top: 20%;
				text-align: center;
				color: red;
				background-size: 100%;
				background-repeat: no-repeat;
			}
			.morning{
				background-image: url("img/morning.png");
			}
			.afternoon{
				background-image: url("img/afternoon.png");
			}
			.evening{
				background-image: url("img/evening.png");
			}
			.night{
				background-image: url("img/night.png");
			}
		</style>
</head>
<body  class = "<?php echo $goede ?>">



	<h1>the time is <?php echo $tijd ?></h1>
	<h1>good <?php echo $goede ?></h1>
</body>
</html>
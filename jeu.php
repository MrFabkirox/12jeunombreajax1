<?php

	session_start();

	if(!isset($_SESSION['solution'])) {
		$_SESSION['solution'] = rand(0, 100);
		$_SESSION['nbessais'] = 0;
	}

	$num = intval($_GET['num']);
	echo($num);

	$_SESSION['nbessais'] ++;

	if($num == $_SESSION['solution']) {
		echo("bravo !, nombre was ".$_SESSION['solution']);

		$_SESSION['solution'] = rand(0, 100);
		$_SESSION['nbessais'] = 0;

	} elseif($num > $_SESSION['solution']) {
		echo("nb too big");
		$_SESSION['nbessais'] ++;
	} elseif($num < $_SESSION['solution']) {
		echo("nb too small");
		$_SESSION['nbessais'] ++;
	}

?>
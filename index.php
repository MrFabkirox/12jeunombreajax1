<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html> 
<head>

	<title>12jeunombreajax1, jeu</title>
	<script src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta content="text/html" charset="utf-8" />

</head>
<body>
<script>

	function showNum(elem) {
		document.getElementById('messageSpan').innerHTML = elem;
	}

	function displayNum() {
		var txt = $('#num').val();
		$.ajax({
			url : "jeu.php",
			data : {num : txt},
			type : 'GET',
			success : showNum
		});
	}
	

</script>


<div id="right"><?php include("menu.php"); ?></div>

<div id="left">

	<h3>12jeunombreajax1, jeu.html</h3>

	<div id="form">

		<input type="text" id="num" placeholder="tape a num" />
		<input type="submit" onclick="displayNum()" />

	</div>

	<p><span id="messageSpan">Message Span</span>

</div>


</body>

</html>
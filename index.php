<!DOCTYPE HTML>
<html>
	<head>
		<title>Badetemperatur</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="shortcut icon" type="image/png" href="images/avatar.png"/>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<span class="avatar"><img src="images/avatar.png" alt="" /></span>

						<script type="text/javascript">
							var api = 0.0;

							setInterval(function() {

								api = load('api/index.php');

							}, 1000);
							setInterval(function() {

								$('#api') = api;

							}, 10);
						</script>

						<h1>Badetemperaturen i Norge, Høvik:</h1>
						<h1><strong><div id="out_messages"><?php include 'api/index.php';?></div></strong></h1>
					</header>

					<footer id="footer">
						<p>&copy; 2018 <a href="https://github.com/harals">Harald S.</a> & <a href="https://github.com/coffeebunny">Vegard T. A.</a></p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#2048').click(function(){
				window.location="http://192.227.237.13:8002";
			})
			$('#surl').click(function(){
				window.location="http://192.227.237.13:8001";
			})
		});
	</script>
</head>
<body>
	<div class="container">
		<div class="cover">
			<div class="well well-lg">
				<h2 class="title">LARRY MCKUYDEE</h2>
				<img class="img-circle" src="https://igcdn-photos-g-a.akamaihd.net/hphotos-ak-xpf1/t51.2885-19/10963897_1622627271301142_181434659_a.jpg" width="140" height ="140">
				<!--p class="lead">Below is the link to the project, I have chosed number 2 and 3. Which is 2048 Game and URL Shortener</p-->
				<div class="selection">
					<label>2048 Game</label>
					<br/>
					<button id="2048" type="button" class="btn btn-lg">GO</button>
				</div>

				<div class="selection">
					<label>Shorten URL</label>
					<br/>
					<button id="surl" type="button" class="btn btn-lg">GO</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
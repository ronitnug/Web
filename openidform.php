<?php
	if (!isset($_POST['submit'])){
?>
<!doctype html>
<html lang="en">

	<head>
		<title>CrowdSporting</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<script src="js/login.js" type="text/javascript"></script>
		<script src="js/101.js" type="text/javascript"></script>

		<script type="text/javascript" src="js/cufon-yui.js"></script>
		<script type="text/javascript" src="js/Gotham_Light_300.font.js"></script>


		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/home.css">
		<link rel="stylesheet" href="css/101.css">
	</head>

	<body>
		<div class="header">
			<img src="img/crownlogo.png" alt="crown+logo" id="crownLogo">
			<span class="right">
				<span id="one0one">101</span><span id="spc"></span><span id="teamLogin">TEAM LOGIN</span>
			</span>
			<br id="line-ht">
		</div>

		<div id="one01Tab">
			<div id="slideWrapper">
				<img src="img/slide1.png" class="iPhone-screen" id="slide1">
				<img src="img/slide2.png" class="iPhone-screen" id="slide2">
				<img src="img/slide3.png" class="iPhone-screen" id="slide3">
				<img src="img/slide4.png" class="iPhone-screen" id="slide4">
				<img src="img/slide5.png" class="iPhone-screen" id="slide5">
				<div id="arrowWrapper">
					<img src="img/leftarrow.png" id="leftArrow" value="1">
					<img src="img/rightarrow.png" id="rightArrow" value="0">
				</div>
			</div>
		</div>

		<div id="loginTab">
			<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"id="phoneWrapper">
				<img src="img/iPhone.png" id="iPhone">
				<div id="textWrapper">
					<p>
						<input name="username" id="username" type="text" placeholder="Username"><br><br>
						<input id="password" type="password" placeholder="Password"><br><br>
						<button id="loginSubmit" type="submit">SUBMIT</button>
					</p>
				</div>
			</form>
		</div>
	</body>
</html>
<?php
} else {
	if (trim($_POST['username'] == '')){
		die("ERROR: Please enter a valid id");
	}
	
	require_once "Auth/OpenID/Consumer.php";
	require_once "Auth/OpenID/FileStore.php";

	session_start();

	$store = new Auth_OpenID_FileStore('./old_store');

	$consumer = new Auth OpenID Consumer($store);

	$auth = $consumer->begin($_POST['id']);
	if(!auth){
		die("ERROR: Please enter valid OpenID");
	}
	$url = $auth->redirectURL('http://cs.unc.edu/Courses/comp426-f13/ronitnug/Crowd/openidform.php', 'http://cs.unc.edu/Courses/comp426-f13/ronitnug/Crowd/return.php');
	header('Location: ', $url);

}
?>











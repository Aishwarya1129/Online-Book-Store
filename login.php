<!DOCTYPE html>
<html>
<head>
	<title>Log In | What the book! </title>
		<link rel="stylesheet" type="text/css" href="log.css" media="all" />
		
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="what-the-book.apps.googleusercontent.com">
</head>
<body>

		<div id="logo">
			<a href="index.php"><img src="logo.png" id="IMGSDA" height="50px" align="left" style="float:left"/>
            <div id ="title">What the book!</div></a>
		
		</div>
		
		<div id="header">
		<h1 >Log In</h1>
		<p id="con"> New to What the book! ?<a href="signup.php">Sign Up</a></p>
		</div>
		
		
		<div id="container">
		
		<div id="con1">
			<form  action="process_login.php" method="POST">
				
				<input type="text" name="usernm" placeholder="Username" autofocus/>
				<input type="password" name="pwd" placeholder="Password" />
				<label><input type="checkbox" name="ckbox" checked> Remember me </label>
				<br>
				<input type='submit' value=" Log In " id ="submit" style="background-color:#fff; color:#27a9e1" >
			</form>
			
			
		</div>
			
	   <!--
	
		<div id="vertical_line"></div>
		
		<div id="con2">
		<p id="alt"> Or sign in using your social account</p>
		<div class="g-signin2" data-onsuccess="onSignIn" data-width="300" data-height="50" data-longtitle="true"></div> -->
		
		</div>
</body>
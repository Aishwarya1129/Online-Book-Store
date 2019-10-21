<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up| What the book! </title>
		<link rel="stylesheet" type="text/css" href="signup.css" media="all" />
		
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="what-the-book.apps.googleusercontent.com">
</head>
<body>

		<div id="logo">
			<a href="index.php"><img src="logo.png" id="IMGSDA" height="50px" align="left" style="float:left"/>
            <div id ="title">What the book!</div> </a>
		
		</div>
		
		<div id="header">
		<h1 >Sign Up</h1>
		<p id="con">Already have an account?  <a href="login.php">Log In</a></p>
		</div>
		
		
		<div id="container">
		
		<div id="con1">
		
			<div id="entry">
				<br><br>
								<?php
										if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
										if(isset($_GET['ok']))
											{
												echo '<font color="blue">You are successfully Registered..</font>';
												echo '<br><br>';
											}
										
								?>		
			<form action="process_register.php" method="POST">
				<input type="text" name="fnm" placeholder="Name" autofocus/>
				<input type="text" name="unm" placeholder="Username" autofocus/>
				<input type="password" name="pwd" placeholder="Password" />
				<input type="password" name="cpwd" placeholder="Confirm Password" />
				<label><input type="radio"  value="Male" name="gender" id='m' style="  margin-left: 305px; margin-bottom: 20px;"> Male</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<label><input type="radio" value="Female" name="gender" id='f'>Female</label>
				<input type="email" name="mail" placeholder="Email"/>
				<input type="text" name="contact" placeholder="Contact No"/>
				<select style="width: 195px;" name="city">
														
							<option>Navi Mumbai
							<option>Baroda
							<option>Jamnagar
							<option>Rajkot
							<option>Porbandar
							<option>Anand
							<option>Surat
							<option>Surendranagar
							<option>Jamnagar
							<option>Junagadh
							<option>Amreli
							<option>Bhavnagar
							<option>Mehsana
															
														
				</select>
				
				<input type='submit' value=" Sign Up " id ="submit" style="background-color:#fff; color:#27a9e1" >
			</form>
			</div>
		</div>
			
		<!--	<div style="float=left;margin-left:200px">.</div>
		</div>
		
		<div id="vertical_line"></div>
		
		<div id="con2">
		<p id="alt"> Or sign in using your social account</p>
		<div class="g-signin2" data-onsuccess="onSignIn" data-width="300" data-height="50" data-longtitle="true"></div>
		
		</div>-->
</body>
<html>
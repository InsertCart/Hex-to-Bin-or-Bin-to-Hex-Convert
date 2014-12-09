<html>
<head>
	<title>HEX to BIN and BIN to HEX Convert Online</title>
	<meta name="viewport" content="width=device-width">
<meta name="Keywords" content="hex,bin,hexadecimal,binari,hex to bin,bin to hex">
<meta name="Description" content="Convert hex to Bin and Bin to Hex Value Online Tool">
<style>
body{
	background:url(http://s25.postimg.org/fd0ukanxb/back.jpg);
	font-family:monospace;
	}
#wrapper{
	height:650px;
	width:80%;
	margin:0 auto;
	border:1px solid #E2E2E2;
	background:#f9f9f9;
	padding:20px;
	}
h1{
	font-variant: small-caps;
	color: brown;
	font-size: 44px;
	}
header{
	height:20%;
	}
#content{
	height:80%;
	}
footer a{
	color:#FA5757;
	}
footer{
	height:20%;
	color:#fff;
	}
input[type="text"]{
	padding: 10px;
	border: 2px solid #E0E0E0;
	width: 30%;
	}
input[type="submit"]{
	padding: 10px;
	background:#FF3A3A;
	color:#fff;
	font-weight:bold;
	border:none;
	cursor:pointer;
	}
input[type="submit"]:hover{
	background:#333;
	}
.social img:hover{
	opacity: 0.6;
	}
.social img{
	padding:8px;
	width:35px;
	height:35px;
	}	
</style>
</head>

<body>
<div id="wrapper">
	<header><center><h1>Welcome to Converter</h1></center></header>
	
	<?php

		if (isset($_POST['subin']))
		{
			$first=$_POST['bin'];
			$hex=bin2hex($first); 
		}
		if (isset($_POST['subhex']))
		{
			$second=$_POST['hex'];
			$bin=hex2bin($second);
		}

	?>
	<center>
	<div id="content">
		<h2>Bin To Hex</h2>
		<form action="#" method="post">
			<input type="text" name="bin" placeholder="Enter Binary here..eg ABCD" value="<?php global $bin; echo $bin; ?>"/>
			<input type="submit" name="subin"  value="Submit" />		
		</form>
		Result in Hex:</br><textarea rows="4" cols="50"><?php Global $hex; echo $hex; ?></textarea>
		<h2> Hex to Bin </h2>
		<form action="#" method="post">
			<input type="text" name="hex" placeholder="Enter Hex here..eg 61626364" value="<?php global $hex; echo $hex; ?>" />		
			<input type="submit" name="subhex"  value="Submit" />
		</form>
		
			Result in Bin:</br><textarea rows="4" cols="50"><?php global $bin; echo $bin; ?></textarea>
	</div>
	<footer>This Script Made by <a href="http://www.wrock.org/">wRock.Org</a> | <a href="http://www.insertcart.com/">WordPress Theme</a>
	
		<div class="social">
			<a href="https://plus.google.com/+SandeepKumar?prsrc=5"><img src="http://s25.postimg.org/vb93r217f/googleplus.png" alt="Google+ Plus" /></a> 
			<a href="https://twitter.com/wrockorg"><img src="http://s25.postimg.org/f97141ifv/twitter.png" alt="Follow on Twitter" /></a>
			<a href="http://www.facebook.com/allnewtricks"><img src="http://s25.postimg.org/k94hbzo2j/facebook.png" alt="Like On Facebook" /></a>
			<a href="http://www.youtube.com/user/nparabh11aryan"><img src="http://s25.postimg.org/fbqwqvm3f/youtube.png" alt="Subscribe on YouTube" /></a>
		</div>
	</footer>
	</center>
	
</div>
</body>

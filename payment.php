<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks</title>
</head>
<style>
body {
    background-image: url("https://www.liveakhbar.in/wp-content/uploads/2021/03/Best-PayPal-alternatives-1.png");
    background-size: cover;
    background-repeat: no-repeat;


}
<style>
    * {
	margin: 0;
	padding: 0;
}
body {
	font-family: 'Poppins', sans-serif;
}
.wrapper {
	width: 1170px;
	margin: auto;
}

.nav-area {
	float: right;
	list-style: none;
	margin-top: 30px;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #fff;
	text-decoration: none;
	padding: 5px 20px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
}
.nav-area li a:hover {
	background: #fff;
	color: #333;
}
.logo {
	float: left;
}
.logo img {
	width: 30%;
	padding: 15px 0;
}
.welcome-text {
	position: absolute;
	width: 600px;
	height: 300px;
	margin: 20% 30%;
	text-align: center;
}
.welcome-text h1 {
	text-align: center;
	color: #fff;
	text-transform: uppercase;
	font-size: 60px;
}
.welcome-text h1 span {
	color: #FFD700;
}
.welcome-text a {
	border: 1px solid #fff;
	padding: 10px 25px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	margin-top: 20px;
	display: inline-block;
	color: #fff;
}
.welcome-text a:hover {
	background: #fff;
	color: #333;
}
/*resposive*/

@media (max-width:600px) {
	.wrapper {
		width: 100%;
	}
	.logo {
		float: none;
		width: 10%;
		text-align: center;
		margin: auto;
	}
	img {
		width:100px;
	}
	.nav-area {
		float: none;
		margin-top: 0;
	}
	.nav-area li a {
		padding: 5px;
		font-size: 11px;
	}
	.nav-area {
		text-align: center;
	}
	.welcome-text {
		width: 100%;
		height: auto;
		margin: 30% 0;
	}
	.welcome-text h1 {
		font-size: 30px;
	}
}

</style>

<body>
<body>
    <header>
    <div class="wrapper">
<ul class="nav-area">
<li><a href="#">Home</a></li>
<li><a href="aboutus.php">About Us</a></li>
<li><a href="contact.php">Contact</a></li>
</ul>
</div>
<input type='hidden' name='cancel_return' value='http://localhost/paypal_integration_php/paypal_cancel.php'> 
 
<input type='hidden' name='return' value='http://localhost/paypal_integration_php/paypal_success.php'>   
<input type="hidden" name="notify_url" value="http://localhost/PayPalDemo/PayPalDemoPayment.php" />      
<form action="https://www.sandbox.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="hosted_button_id" value="G9W7RUJETJEUL" />
<input type="image" style="position: relative;left:600px;bottom:-250px;"  src="https://www.paypalobjects.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_IN/i/scr/pixel.gif" width="1" height="1" />
</form>

</body>

</html>
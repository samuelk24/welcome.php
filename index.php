<!DOCTYPE html>
<html>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- META FOR IOS & HANDHELD -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<style type="text/stylesheet">
		@-webkit-viewport   { width: device-width; }
		@-moz-viewport      { width: device-width; }
		@-ms-viewport       { width: device-width; }
		@-o-viewport        { width: device-width; }
		@viewport           { width: device-width; }
	</style>
	<style type="text/css"> 
	.t3-row.top-menu-dropdown
	{ 
		font size:12px;
	}
	</style>
	<script type="text/javascript">
		//<![CDATA[
		if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
			var msViewportStyle = document.createElement("style");
			msViewportStyle.appendChild(
				document.createTextNode("@-ms-viewport{width:auto!important}")
			);
			document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
		}
		//]]>
	</script>

	<meta name="HandheldFriendly" content="true">
<meta name="apple-mobile-web-app-capable" content="YES">
<!-- //META FOR IOS & HANDHELD -->
<head>
	<title>Business website</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>



<header>
	<div class="row">
		<div class="logo"></div>
		<img src="images/logo.png">
		<ul class="main-nav">
			<li class="active"><a href="">HOME</a></li>
			<li><a href="products.html">PRODUCTS</a></li>
			<li><a href="services.html">SERVICES</a></li>
			<li><a href="aboutus.php">ABOUT US</a></li>
			<li><a href="contactus.php">CONTACT</a></li>
			<li><a href="login.php">LOGIN</a></li>
			<li><a href="faq.html">FAQ</a></li>
        </ul>
	</div>
</body>
         <?php
			include 'footer.php';
         ?>



</html>
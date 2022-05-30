<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu</title>
<style>
/*	MENU	*/
#body-menu {
	position: absolute;
	width: 1920px;
	height: 1080px;
	background-color: #d14454;
	overflow: hidden;
}

#cross {
	position: absolute;
	width: 58.987px;
	height: 43.5px;
	left: 1551px;
	top: 70px;
	overflow: visible;
	cursor: pointer;
}

#produit {
	left: 739px;
	top: 234px;
	position: absolute;
	overflow: visible;
	width: 443px;
	white-space: nowrap;
	line-height: 50px;
	margin-top: -2.5px;
	text-align: center;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 45px;
	color: rgba(255,255,255,1);
}

#perso {
	left: 739px;
	top: 334px;
	position: absolute;
	overflow: visible;
	width: 443px;
	white-space: nowrap;
	line-height: 50px;
	margin-top: -2.5px;
	text-align: center;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 45px;
	color: rgba(255,255,255,1);
}

#qui {
	left: 739px;
	top: 484px;
	position: absolute;
	overflow: visible;
	width: 443px;
	white-space: nowrap;
	line-height: 50px;
	margin-top: -2.5px;
	text-align: center;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 45px;
	color: rgba(255,255,255,1);
}

#contact {
	left: 739px;
	top: 584px;
	position: absolute;
	overflow: visible;
	width: 443px;
	white-space: nowrap;
	line-height: 50px;
	margin-top: -2.5px;
	text-align: center;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 45px;
	color: rgba(255,255,255,1);
}

#blog {
	left: 739px;
	top: 699px;
	position: absolute;
	overflow: visible;
	width: 443px;
	white-space: nowrap;
	line-height: 50px;
	margin-top: -2.5px;
	text-align: center;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 45px;
	color: rgba(255,255,255,1);
}

#instagram-menu {
	position: absolute;
	width: 55px;
	height: 55px;
	left: 814px;
	top: 835px;
	overflow: visible;
}

#facebook-menu {
	position: absolute;
	width: 50px;
	height: 50px;
	left: 935px;
	top: 840px;
	overflow: visible;
}

#youtube-menu {
	position: absolute;
	width: 49.704px;
	height: 37.284px;
	left: 1056.296px;
	top: 843.858px;
	overflow: visible;
}

</style>
<script>
	function fermerMenu() {
		history.go(-1);
	}
</script>
</head>
<body id="body-menu">
	
	<div id="cross" onclick=fermerMenu()>
		<img src="img/close.png"/>
	</div>

	<a href="produit"><div id="produit">
		Nos produits
	</div></a>
	
	<a href="liquide/ajouterliquide"><div id="perso">
	Personnaliser<br>
	votre e-tea vape
	</div></a>
	
	<a href="a_propos"><div id="qui">
	Qui sommes nous ?
	</div></a>

	<a href="contact"><div id="contact">
	Contact
	</div></a>

	<a href="blog"><div id="blog">
	E-tea blog
	</div></a>

	<div id=instagram-menu>
		<img src="img/image_2.png"/>
	</div>

	<div id=facebook-menu>
		<img src="img/facebook.png"/>
	</div>

	<div id=youtube-menu>
		<img src="img/youtube.png"/>
	</div>
</body>
</html>
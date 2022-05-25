<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-TEA VAPE</title>
<style>

/*	HEADER	*/
#header {
    background-color: #ffffff;
    position: fixed;
	overflow: visible;
	width: 1920px;
	height: 118px;
	left: 0px;
	top: 0px;
}

.menu {
    position: fixed;
    overflow: visible;
    width: 154px;
    height: 190px;
    left: 262px;
    top: 0px;
    background-color: #D14454;
}

.menu-icon {
	position: fixed;
	width: 84px;
	height: 36px;
	left: 297px;
	top: 50px;
	overflow: visible;
}

.menu-text {
	left: 305px;
	top: 118px;
	position: fixed;
	width: 70px;
	white-space: nowrap;
	text-align: center;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 25px;
	color: white;
}

.search {
    position: fixed;
    overflow: visible;
    width: 154px;
    height: 190px;
    left: 416px;
    top: 0px;
    background-color: #D14454;
    border-left: solid white;
}

.search-icon {
    overflow: visible;
	position: fixed;
	width: 69.551px;
	height: 69.551px;
	left: 465px;
	top: 69.225px;
	transform: matrix(1,0,0,1,0,0);
    fill: rgba(255,255,255,1);
}

.logo {
    position: fixed;
	overflow: visible;
    width: 195px;
    height: 190px;
    left: 573px;
    top: 0px;
    background-color: #ffffff;
}

.logo-img {
	position: fixed;
	overflow: visible;
	top: 10px;
	left: 595px;
}

.logo-text {
    left: 615px;
	top: 18px;
	position: fixed;
	overflow: visible;
	width: 107px;
	white-space: nowrap;
	text-align: left;
	font-family: Arial Rounded MT;
	font-style: normal;
	font-weight: bold;
	font-size: 20px;
	color: rgba(112,112,112,1);
}

.location {
    overflow: visible;
	position: fixed;
	width: 35.357px;
	height: 49.5px;
	left: 1284.972px;
	top: 33.81px;
	transform: matrix(1,0,0,1,0,0);
    fill: rgba(209,68,84,1);
}

.call {
    overflow: visible;
	position: fixed;
	width: 49.49px;
	height: 49.5px;
	left: 1365.51px;
	top: 33.655px;
}

.person {
    overflow: visible;
	position: fixed;
	width: 43.82px;
	height: 47.19px;
	left: 1460.18px;
	top: 34.81px;
}

.shopping {
    overflow: visible;
	position: fixed;
	width: 37.752px;
	height: 47.19px;
	left: 1604.248px;
	top: 35.966px;
	transform: matrix(1,0,0,1,0,0);
    fill: rgba(0,0,0,1);
}

/*	BODY	*/

.presentation {
	position: inherit;
	width: 1920px;
	height: 959px;
	left: 0px;
	top: 117px;
	overflow: visible;
	background-image: url('img/eliquid-g735595a75_1920.png')
}

.presentation-text {
	left: 960px;
	top: 300px;
	position: absolute;
	overflow: visible;
	width: 405px;
	white-space: nowrap;
	text-align: left;
	font-family: Arial Rounded MT;
	font-style: normal;
	font-weight: bold;
	font-size: 45px;
	color: rgba(255,255,255,1);
}

.presentation-btn {
	position: absolute;
	overflow: visible;
	width: 370px;
	height: 90px;
	left: 960px;
	top: 500px;
	fill: rgba(242,242,242,1);
}

.btn-text {
		top: 10px;
		position: absolute;
		overflow: visible;
		width: 323px;
		white-space: nowrap;
		text-align: center;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		color: rgba(22,20,20,1);
}

@-webkit-keyframes ani-mouse {
	0% {
	opacity: 1;
	top: 29%;
	}
	15% {
	opacity: 1;
	top: 50%;
	}
	50% {
	opacity: 0;
	top: 50%;
	}
	100% {
	opacity: 0;
	top: 29%;
	}
}
@-moz-keyframes ani-mouse {
	0% {
	opacity: 1;
	top: 29%;
	}
	15% {
	opacity: 1;
	top: 50%;
	}
	50% {
	opacity: 0;
	top: 50%;
	}
	100% {
	opacity: 0;
	top: 29%;
	}
}
@keyframes ani-mouse {
	0% {
	opacity: 1;
	top: 29%;
	}
	15% {
	opacity: 1;
	top: 50%;
	}
	50% {
	opacity: 0;
	top: 50%;
	}
	100% {
	opacity: 0;
	top: 29%;
	}
}
 .scroll-btn {
	display: block;
	position: absolute;
	left: 0;
	right: 0;
	text-align: center;
	top: 850px
}
.scroll-btn > * {
	display: inline-block;
	line-height: 18px;
	font-size: 13px;
	font-weight: normal;
	color: #7f8c8d;
	color: #ffffff;
	font-family: "proxima-nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
	letter-spacing: 2px;
}
.scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *.active {
	color: #ffffff;
}
.scroll-btn > *:hover,
.scroll-btn > *:focus,
.scroll-btn > *:active,
.scroll-btn > *.active {
	opacity: 0.8;
	filter: alpha(opacity=80);
}
.scroll-btn .mouse {
	position: relative;
	display: block;
	width: 35px;
	height: 55px;
	margin: 0 auto 20px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	border: 3px solid white;
	border-radius: 23px;
}
.scroll-btn .mouse > * {
	position: absolute;
	display: block;
	top: 29%;
	left: 50%;
	width: 8px;
	height: 8px;
	margin: -4px 0 0 -4px;
	background: white;
	border-radius: 50%;
	-webkit-animation: ani-mouse 2.5s linear infinite;
	-moz-animation: ani-mouse 2.5s linear infinite;
	animation: ani-mouse 2.5s linear infinite;
}

.liquide-img {
	position: absolute;
	width: 387px;
	height: 625px;
	left: 278px;
	top: 1157px;
	overflow: visible;
}

.personnaliser-title {
	left: 830px;
	top: 1148px;
	position: absolute;
	overflow: visible;
	width: 625px;
	white-space: nowrap;
	text-align: left;
	font-family: Arial Rounded MT;
	font-style: normal;
	font-weight: bold;
	font-size: 80px;
	color: rgba(0,0,0,1);
}

.personnaliser-text {
	left: 830px;
	top: 1475px;
	position: absolute;
	overflow: visible;
	width: 833px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(72,74,71,1);
}

.personnaliser-btn {
	position: absolute;
	overflow: visible;
	width: 260px;
	height: 80px;
	left: 830px;
	top: 1702px;
	fill: rgba(209,68,84,1);
}

.vente{
	left: 285px;
		top: 1872px;
		position: absolute;
		overflow: visible;
		width: 456px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial Rounded MT;
		font-style: normal;
		font-weight: bold;
		font-size: 45px;
		color: rgba(0,0,0,1);
}

.pdt1 {
	position: absolute;
		width: 407px;
		height: 699px;
		left: 0px;
		top: -28px;
		overflow: visible;
}

.pdt1-img {
	position: absolute;
	width: 398px;
	height: 555px;
	left: 9px;
	top: 1000px;
	overflow: visible;
}

.pdt1-titre {
	left: 41px;
		top: 608px;
		position: absolute;
		overflow: visible;
		width: 188px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial Rounded MT;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(0,0,0,1);
}

.pdt1-prix {
	left: 41px;
		top: 665px;
		position: absolute;
		overflow: visible;
		width: 107px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial Rounded MT;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(0,0,0,1);
}

.pdt1-style {
	transform: translate(-267px, -1836px) matrix(1,0,0,1,299,2370) rotate(90deg);
		transform-origin: center;
		left: 0px;
		top: 0px;
		position: absolute;
		overflow: visible;
		width: 86px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 107px;
		color: rgba(251,174,184,1);
}

.etvape-about {
	left: 278px;
		top: 2914px;
		position: absolute;
		overflow: visible;
		width: 505px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial Rounded MT;
		font-style: normal;
		font-weight: bold;
		font-size: 45px;
		color: rgba(0,0,0,1);
}

.actu {
	left: 278px;
		top: 3717px;
		position: absolute;
		overflow: visible;
		width: 326px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial Rounded MT;
		font-style: normal;
		font-weight: bold;
		font-size: 45px;
		color: rgba(0,0,0,1);
}

.avis {
	left: 278px;
	top: 4919px;
	position: absolute;
	overflow: visible;
	width: 614px;
	white-space: nowrap;
	text-align: left;
	font-family: Arial Rounded MT;
	font-style: normal;
	font-weight: bold;
	font-size: 45px;
	color: rgba(0,0,0,1);
}

.avis-verif {
	left: 278px;
		top: 5049px;
		position: absolute;
		overflow: visible;
		width: 170px;
		white-space: nowrap;
		text-align: left;
		font-family: Arial Rounded MT;
		font-style: normal;
		font-weight: bold;
		font-size: 30px;
		color: rgba(0,0,0,1);
}

.avis-img {
	position: absolute;
		width: 212px;
		height: 111px;
		left: 467px;
		top: 5002px;
		overflow: visible;
}

/*	A PROPOS */
#img-apropos {
	position: absolute;
	width: 1640px;
	height: 400px;
	left: 140px;
	top: 106px;
	overflow: visible;
	background-image: url('img/e-cigarette-1881957_1920.png')
}

#title-about {
	left: 530px;
	top: 586px;
	position: absolute;
	overflow: visible;
	width: 875px;
	white-space: nowrap;
	text-align: left;
	font-family: Arial Rounded MT;
	font-style: normal;
	font-weight: bold;
	font-size: 80px;
	color: rgba(0,0,0,1);
}
/*	FIN A PROPOS	*/

/*	BLOG	*/

#img-blog {
	position: absolute;
	width: 1640px;
	height: 400px;
	left: 140px;
	top: 106px;
	overflow: visible;
	background-image: url('img/eliquid-g735595a75_1920.png')
}

/*	FIN BLOG	*/

/*	FOOTER	*/

#footer {
    position: absolute;
	overflow: visible;
	width: 1920px;
	height: 357px;
	left: 0px;
	top: 5637px;
	background-color: #f2f2f2;
}

.footer-logo {
    position: absolute;
	width: 229px;
	height: 229px;
	left: 140px;
	top: 5637px;
	overflow: visible;
}

.logof-text {
    left: 70px;
	top: 25px;
	position: absolute;
	overflow: visible;
	width: 111px;
	white-space: nowrap;
	text-align: left;
	font-family: Arial Rounded MT;
	font-style: normal;
	font-weight: bold;
	font-size: 20px;
	color: rgba(112,112,112,1);
}

.liquidef {
    left: 416px;
    top: 5679px;
    position: absolute;
    overflow: visible;
    width: 170px;
    white-space: nowrap;
    text-align: left;
    font-family: Poppins;
    font-style: normal;
    font-weight: bold;
    font-size: 33px;
    color: rgba(22,20,20,1);
}

.fraise {
    left: 416px;
	top: 5745px;
	position: absolute;
	overflow: visible;
	width: 60px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.menthe {
	left: 416px;
	top: 5787px;
	position: absolute;
	overflow: visible;
	width: 76px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.passion {
	left: 416px;
	top: 5829px;
	position: absolute;
	overflow: visible;
	width: 77px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.savoirliquide {
	left: 416px;
	top: 5871px;
	position: absolute;
	overflow: visible;
	width: 137px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
	text-decoration: underline;
}

.accessoiresf {
	left: 692px;
	top: 5679px;
	position: absolute;
	overflow: visible;
	width: 203px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: bold;
	font-size: 33px;
	color: rgba(22,20,20,1);
}

.accessoire1 {
	left: 692px;
	top: 5745px;
	position: absolute;
	overflow: visible;
	width: 108px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.accessoire2 {
	left: 692px;
	top: 5781px;
	position: absolute;
	overflow: visible;
	width: 108px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.accessoire3 {
	left: 692px;
	top: 5817px;
	position: absolute;
	overflow: visible;
	width: 108px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.savoiraccessoire {
	left: 692px;
	top: 5871px;
	position: absolute;
	overflow: visible;
	width: 137px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
	text-decoration: underline;
}

.propos {
	left: 968px;
	top: 5679px;
	position: absolute;
	overflow: visible;
	width: 151px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: bold;
	font-size: 33px;
	color: rgba(22,20,20,1);
}

.marque {
	left: 968px;
	top: 5741px;
	position: absolute;
	overflow: visible;
	width: 111px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.mention{
	left: 968px;
	top: 5785px;
	position: absolute;
	overflow: visible;
	width: 169px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.cgv {
	left: 968px;
	top: 5827px;
	position: absolute;
	overflow: visible;
	width: 46px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.savoirpropos {
	left: 968px;
	top: 5871px;
	position: absolute;
	overflow: visible;
	width: 137px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
	text-decoration: underline;
}

.newsletter {
	left: 1244px;
	top: 5679px;
	position: absolute;
	overflow: visible;
	width: 180px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: bold;
	font-size: 33px;
	color: rgba(22,20,20,1);
}

.news1 {
	left: 1244px;
	top: 5740px;
	position: absolute;
	overflow: visible;
	width: 301px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.news2 {
	left: 1244px;
	top: 5765px;
	position: absolute;
	overflow: visible;
	width: 301px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.news3 {
	left: 1244px;
	top: 5793px;
	position: absolute;
	overflow: visible;
	width: 301px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.rgpd {
	left: 1244px;
	top: 5827px;
	position: absolute;
	overflow: visible;
	width: 46px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
}

.mail {
	position: absolute;
	overflow: visible;
	width: 276px;
	height: 50px;
	left: 1244px;
	top: 5882px;
	fill: rgba(255,255,255,1);
}

.mail-text {
	left: 1257px;
	top: 5894px;
	position: absolute;
	overflow: visible;
	width: 57px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(112,112,112,1);
}

.mail-button {
	position: absolute;
	overflow: visible;
	width: 74px;
	height: 48px;
	left: 0px;
	top: 0px;
	fill: rgba(209,68,84,1);
}

.instagram {
	position: absolute;
	width: 50px;
	height: 50px;
	left: 1730px;
	top: 5731px;
	overflow: visible;
}

.facebook {
	overflow: visible;
	position: absolute;
	width: 49.704px;
	height: 49.405px;
	left: 1730.296px;
	top: 5813.297px;
	transform: matrix(1,0,0,1,0,0);
	fill: rgba(66,103,178,1);
}

.youtube {
	overflow: visible;
	position: absolute;
	width: 49.704px;
	height: 37.284px;
	left: 1730.296px;
	top: 5894.716px;
	transform: matrix(1,0,0,1,0,0);
	fill: rgba(196,48,43,1);
}

</style>
</head>
<header id="header">
    <a href="menu"><div class="menu">
		<div class="menu-icon"><img src="img/align-left.png"/></div>
        <div class="menu-text">Menu</div>
    </div></a>

    <a href="search"><div class="search">
        <div class="search-icon"><img src="img/search.png"/></div>
    </div></a>
    <a href=".">
        <div class="logo">
            <div class="logo-img"><img src="img/Th_sans_fond.png"/></div>
            <div class="logo-text">E-tea Vape</div>
        </div>
    </a>
    <a href="contact"><div class="location"><img src="img/pin.png"/></div>
    <div class="call"><img src="img/call.png"/></div></a>
    <div class="person"><img src="img/person.png"/></div>
    <div class="shopping"><img src="img/shopping.png"/></div>
</header>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-TEA VAPE</title>
<style>

* { box-sizing: border-box; }
html { height: 100%; }
body {
    position: relative;
    margin: 0;
    height: 100%;
    background: linear-gradient(steelblue, beige);
    font-family: 'Lato', sans-serif;
    font-weight: 300;
    text-align: center;
}

main {
    position: absolute;
	top: 200px;
    margin: 0;
    height: 100%;
}

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
    fill: rgba(255,255,255,1);
}

.logo {
    position: fixed;
	overflow: visible;
    width: 195px;
    height: 190px;
    left: 570px;
    top: 0px;
    background-color: #ffffff;
}

.logo-text {
    left: 595px;
	top: 157px;
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
	transform: matrix(1,0,0,1,0,0);
    fill: rgba(112,112,112,1);
}

.person {
    overflow: visible;
	position: fixed;
	width: 43.82px;
	height: 47.19px;
	left: 1460.18px;
	top: 34.81px;
	transform: matrix(1,0,0,1,0,0);
    fill: rgba(112,112,112,1);
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
	position: absolute;
	width: 1920px;
	height: 959px;
	left: 0px;
	top: 117px;
	overflow: visible;
	background-image: url('img/eliquid-g735595a75_1920.png')
}

.select-produit {
	position: absolute;
	left: 1500px;
}




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
    left: 60px;
	top: 230px;
	position: absolute;
	overflow: visible;
	width: 111px;
	white-space: nowrap;
	text-align: left;
	font-family: Arial Rounded MT;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(0,0,0,1);
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

.card {
  width: 400px; /*1*/
  margin: 0px auto; /*2*/
  background-color: white; /*3*/
  box-shadow: 0px 5px 20px #999; /*4*/
  top: 200px;
  left: 162px;
}
.card a { /*5*/
  color: #333; 
  text-decoration: none;
}
.card:hover .card-image img { /*6*/
  width: 160%;
  filter: grayscale(0);
}

.card-image {
  height: 250px;/*1*/
  position: relative;/*2*/
  overflow: hidden;/*3*/
}
.card-image img {
  width: 150%;/*4*/
    /*5 - Méthode de centrage en fonction de la taille de l'image */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  filter: grayscale(1);/*6*/
    /*7 - Transition */
  transition-property: filter width; 
  transition-duration: .3s;
  transition-timing-function: ease;
}

.card-body {
    text-align:center;  /*1*/
  padding: 15px 20px; /*2*/
  box-sizing: border-box; /*3*/
}

.card-title, .card-excerpt {
  font-family: Poppins;
  text-align:center;
  text-transform:uppercase;
  font-weight: bold;
}

</style>
</head>
<header id="header">
    <a href="../menu"><div class="menu">
		<div class="menu-icon"><img src="../img/align-left.png"/></div>
        <div class="menu-text">Menu</div>
    </div></a>
    <a href="../search"><div class="search">
        <div class="search-icon"><img src="../img/search.png"/></div>
    </div></a>
    <a href="../">
        <div class="logo">
            <img src="../img/Th_sans_fond.png"/>
            <div class="logo-text">E-tea Vape</div>
        </div>
    </a>
    <a href="../contact"><div class="location"><img src="../img/map.png"/></div>
    <div class="call"><img src="../img/phone.png"/></div></a>
    <div class="person"><img src="../img/user.png"/></div>
    <div class="shopping"><img src="../img/shopping.png"/></div>
</header>
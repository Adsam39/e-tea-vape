<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-TEA VAPE</title>
<style>

body {
	padding-top: 120px;
}

/*	HEADER	*/
#header {
    background-color: #ffffff;
    position: fixed;
	overflow: visible;
	width: 1536px;
	height: 118px;
	left: 0px;
	top: 0px;
	z-index: 1000;
}

.menu {
    position: fixed;
    overflow: visible;
    width: 154px;
    height: 190px;
    left: 209.6px;
    top: 0px;
    background-color: #D14454;
}

.menu-icon {
	position: fixed;
	width: 84px;
	height: 36px;
	left: 237.6px;
	top: 50px;
	overflow: visible;
}

.menu-text {
	left: 244px;
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
    left: 332.8px;
    top: 0px;
    background-color: #D14454;
    border-left: solid white;
}

.search-icon {
    overflow: visible;
	position: fixed;
	width: 69.551px;
	height: 69.551px;
	left: 372px;
	top: 69.225px;
	transform: matrix(1,0,0,1,0,0);
    fill: rgba(255,255,255,1);
}

.logo {
    position: fixed;
	overflow: visible;
    width: 195px;
    height: 190px;
    left: 458.4px;
    top: 0px;
    background-color: #ffffff;
}

.logo-img {
	position: fixed;
	overflow: visible;
	top: 10px;
	left: 476px;
}

.logo-text {
    left: 492px;
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
	left:  1028px;
	top: 33.81px;
	transform: matrix(1,0,0,1,0,0);
    fill: rgba(209,68,84,1);
}

.call {
    overflow: visible;
	position: fixed;
	width: 49.49px;
	height: 49.5px;
	left: 1092.8px;
	top: 33.655px;
}

.person {
    overflow: visible;
	position: fixed;
	width: 43.82px;
	height: 47.19px;
	left: 1168px;
	top: 34.81px;
}

.shopping {
    overflow: visible;
	position: fixed;
	width: 37.752px;
	height: 47.19px;
	left: 1283.2px;
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
	overflow: visible;
	width: 405px;
	white-space: nowrap;
	text-align: left;
	font-family: Arial Rounded MT;
	font-style: normal;
	font-weight: bold;
	font-size: 45px;
	color: rgba(255,255,255,1);
	padding-top: 129px;
padding-left: 949px;
}

.presentation-btn {
	position: absolute;
	overflow: visible;
	width: 370px;
	height: 90px;
	left: 960px;
	top: 500px;
	fill: rgba(242,242,242,1);
	border-radius: 45px;
	background-color: #F2F2F2;
	cursor: pointer;
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
		left: 20px;
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
	border-radius: 45px;
	background-color: #D14454;
	cursor: pointer;
}

.btn-textperso {
	left: 55px;
		top: 17px;
		position: absolute;
		overflow: visible;
		width: 149px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		color: rgba(255,255,255,1);
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

.pdt1-img {
	position: absolute;
	width: 398px;
	height: 555px;
	left: 285px;
	top: 2000px;
	overflow: visible;
}

.pdt1-titre {
	left: 285px;
		top: 2600px;
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
	left: 285px;
		top: 2650px;
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

/*.pdt1-style {
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
}*/

.pdt2-img {
	position: absolute;
	width: 398px;
	height: 555px;
	left: 760px;
	top: 2000px;
	overflow: visible;
}

.pdt2-titre {
	left: 760px;
		top: 2600px;
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

.pdt2-prix {
	left: 760px;
		top: 2650px;
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

/*.pdt2-style {
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
}*/

.pdt3-img {
	position: absolute;
	width: 398px;
	height: 555px;
	left: 1225px;
	top: 2000px;
	overflow: visible;
}

.pdt3-titre {
	left: 1225px;
		top: 2600px;
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

.pdt3-prix {
	left: 1225px;
		top: 2650px;
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

/*.pdt3-style {
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
}*/

.btn-vente {
	position: absolute;
		overflow: visible;
		width: 398px;
		height: 80px;
		left: 781px;
		top: 2744px;
	background-color: rgba(242,242,242,1);
	border-radius: 40px;
	cursor: pointer;
}

.text-btnvente {
	left: 70px;
		top: 20px;
		position: absolute;
		overflow: visible;
		width: 250px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
		color: rgba(0,0,0,1);
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

.text-about {
	left: 278px;
	top: 3041px;
	position: absolute;
	overflow: visible;
	width: 1367px;
	white-space: nowrap;
	text-align: left;
	font-family: Poppins;
	font-style: normal;
	font-weight: normal;
	font-size: 20px;
	color: rgba(72,74,71,1);
}

.overlay-about {
	position: absolute;
		overflow: visible;
		width: 1920px;
		height: 188px;
		left: 0px;
		top: 3304px;
		background-color: rgba(251,174,184,1);
}

.logo-ecigarette {
	position: absolute;
		width: 292px;
		height: 256px;
		left: 293px;
		top: 3135px;
		overflow: visible;
}

.text-ecigarette {
	left: 428px;
		top: 3417px;
		position: absolute;
		overflow: visible;
		width: 94px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(0,0,0,1);
}

.logo-france {
	position: absolute;
		width: 192px;
		height: 181px;
		left: 705px;
		top: 3216px;
		overflow: visible;
}

.text-france {
	left: 724px;
		top: 3415px;
		position: absolute;
		overflow: visible;
		width: 154px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(0,0,0,1);
}

.logo-kawaii {
	position: absolute;
		width: 105px;
		height: 169px;
		left: 1112px;
		top: 3222px;
		overflow: visible;
}

.text-kawaii {
	left: 1088px;
		top: 3415px;
		position: absolute;
		overflow: visible;
		width: 149px;
		white-space: nowrap;
		text-align: center;
		font-family: Poppins;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(0,0,0,1);
}

.btn-about {
	position: absolute;
		overflow: visible;
		width: 334px;
		height: 80px;
		left: 793px;
		top: 3547px;
		fill: rgba(242,242,242,1);
		border-radius: 40px;
}

.text-btnabout {
	left: 60px;
		top: 20px;
		position: absolute;
		overflow: visible;
		width: 218px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
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
		/*padding-top: 2746px;
		padding-left: 200px;*/
}

/*slider*/

.blog-slider {
    width: 95%;
  position: relative;
    max-width: 800px;
    margin: auto;
    background: #fff;
    box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
    padding: 25px;
    border-radius: 25px;
    height: 400px;
  transition: all .3s;
  
   
  @media screen and (max-width: 992px) {
    max-width: 680px;
        height: 400px;
  }
  
  @media screen and (max-width: 768px) {
    min-height: 500px;
    height: auto;
    margin: 180px auto;
  }
  
  
  @media screen and (max-height: 500px) and (min-width: 992px) {
        height: 350px;
  }
  
  &__item {
    display: flex;
    align-items: center;
    
  @media screen and (max-width: 768px) {
    flex-direction: column;
  }
    
    &.swiper-slide-active {
      .blog-slider__img {
        img {
          opacity: 1;
        transition-delay: .3s;
        }
      }
      .blog-slider__content {
        > * {
      
        opacity: 1;
        transform: none;

      for($i=0;$i>15;$i++ ){
        &:nth-child(#{$i + 1}) {
          transition-delay: $i * 0.1 + 0.3s;
        }
      }

    }
      }
    }
    
  }
  
  &__img {
     // width: 40%;
    width: 300px;
    flex-shrink: 0;
    height: 300px;
    background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
    box-shadow: 4px 13px 30px 1px rgba(252, 56, 56, 0.2);
    border-radius: 20px;
    transform: translateX(-80px);
   
    overflow: hidden;
    
    &:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
      border-radius: 20px;
    opacity: 0.8;
}
    
    img {
      width: 100%;
    height: 100%;
    object-fit: cover;
      display: block;
       opacity: 0;
      border-radius: 20px;
    transition: all .3s;
    }
    
    
    @media screen and (max-width: 992px) {
      // width: 45%;
    }
    @media screen and (max-width: 768px) {
    transform: translateY(-50%);
      width: 90%;
  }
    @media screen and (max-width: 576px) {
      width: 95%;
    }
     @media screen and (max-height: 500px) and (min-width: 992px) {
        height: 270px;
  }
  }
  
  &__content {
    // width: 60%;
    padding-right: 25px;
    @media screen and (max-width: 992px) {
      // width: 55%;
    }
    @media screen and (max-width: 768px) {
          margin-top: -80px;
    text-align: center;
    padding: 0 30px;
    }
    
    @media screen and (max-width: 576px) {
      padding: 0
    }
    > * {
      opacity: 0;
      transform: translateY(25px);
      transition: all .4s;
      
      
    }
    
  }
  
  &__code {
    color: #7b7992;
    margin-bottom: 15px;
    display: block;
    font-weight: 500;
  }
  
  &__title {
    font-size: 24px;
    font-weight: 700;
    color: #0d0925;
    margin-bottom: 20px;
  }
  
  &__text {
    color: #4e4a67;
    margin-bottom: 30px;
    line-height: 1.5em;
  }
  
  &__button {
        display: inline-flex;
    background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
    padding: 15px 35px;
    border-radius: 50px;
    color: #fff;
    box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4);
    text-decoration: none;
    font-weight: 500;
        justify-content: center;
    text-align: center;
    letter-spacing: 1px;
    @media screen and (max-width: 576px) {
      width: 100%;
    }
    
  }
  .swiper-container-horizontal>.swiper-pagination-bullets, .swiper-pagination-custom, .swiper-pagination-fraction {
    bottom: 10px;
    left: 0;
    width: 100%;
    
}
  &__pagination {
   position: absolute;
    z-index: 21;
    right: 20px;
    width: 11px!important;
    text-align: center;
    left: auto!important;
    top: 50%;
    bottom: auto!important;
    transform: translateY(-50%);
    @media screen and (max-width: 768px) {
     transform: translateX(-50%);
          left: 50%!important;
      top: 205px;
    width: 100%!important;
    display: flex;
    justify-content: center;
    align-items: center;
    }
     &.swiper-pagination-bullets .swiper-pagination-bullet {
    margin: 8px 0;
       @media screen and (max-width: 768px) {
         margin: 0 5px;
       }
}
    
    .swiper-pagination-bullet {
    width: 11px;
    height: 11px;
    display: block;
    border-radius: 10px;
    background: #062744;
    opacity: 0.2;
      transition: all .3s;
      &-active {
    opacity: 1;
    background: #fd3838;
    height: 30px;
    box-shadow: 0px 0px 20px rgba(252, 56, 56, 0.3);
        
        @media screen and (max-width: 768px) {
          height: 11px;
          width: 30px;
        }
}
}
    
  }
  
}

.btn-actu {
	position: absolute;
		overflow: visible;
		width: 398px;
		height: 80px;
		left: 761px;
		top: 4749px;
		background-color: rgba(242,242,242,1);
		border-radius: 40px;
}

.text-btnactu {
	left: 80px;
		top: 20px;
		position: absolute;
		overflow: visible;
		width: 232px;
		white-space: nowrap;
		text-align: left;
		font-family: Poppins;
		font-style: normal;
		font-weight: bold;
		font-size: 25px;
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
.container {
  max-width: 800px;
  margin: 0 auto;
  padding-top: 2824px;
}

.slider img {
  max-width: 100%;
  display: none;
}
img.active {
  display: block;
  animation: fade 0.8s;
}
@keyframes fade {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.cont-btn {
  width: 100%;
  height: auto;
  border: 1px solid #000;
  box-shadow: 0 10px 10px rgba(0,0,0,0.3);
  display: flex;
  justify-content: center;
}
.btn-nav {
  font-size: 50px;
  margin: 0 15px;
  cursor: pointer;
}
</style>
<script>
const items = document.querySelectorAll('img');
const nbSlide = items.length;
const suivant = document.querySelector('.right');
const precedent = document.querySelector('.left');
let count = 0;

function slideSuivante(){
    items[count].classList.remove('active');

    if(count < nbSlide - 1){
        count++;
    } else {
        count = 0;
    }

    items[count].classList.add('active')
    console.log(count);
    
}
suivant.addEventListener('click', slideSuivante)


function slidePrecedente(){
    items[count].classList.remove('active');

    if(count > 0){
        count--;
    } else {
        count = nbSlide - 1;
    }

    items[count].classList.add('active')
    // console.log(count);
    
}
precedent.addEventListener('click', slidePrecedente)

function keyPress(e){
    console.log(e);
    
    if(e.keyCode === 37){
        slidePrecedente();
    } else if(e.keyCode === 39){
        slideSuivante();
    }
}
document.addEventListener('keydown', keyPress)
</script>
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
@include('header')
<body>
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slides -->
        <div class="carousel-item active" style="background-image: url(img/black.jpg)">
          <div class="carousel-container">
            <div class="container">
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Visiter</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->

<div id="pagewidth">
    <div id="header"><h1>Laravel - mon application</h1></div>
    <div id="maincol"><h2>Tp1. Initiation</h2>
	    Découverte des fonctionnalités de base de Laravel afin de concevoir une application de type CRUD en ORM
    </div>
    <div id="leftcol"> <h2>Menu</h2>
        <ul>
            @include('menuV')
        </ul>
    </div>
</div>

</body>
@include('footer')
</html>
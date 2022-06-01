@include('include.header')
<body id="globalbody">
    <div class="title-result">Résultat(s) de votre recherche <?php echo strip_tags($_POST["search"]) ?></div>
    <?php
        foreach($product as $products)
        {
            echo ("<div class='card'>
                <div class='card-image'>
                    <img src='img/sw.png'/>
                </div>
                <div class='card-body'>
                    <div class='card-title'>
                        $products->libellePdt
                    </div>
                    <div class='card-excerpt'>
                        $products->QteLiquide mL
                        $products->prixPdt €
                    </div>
                </div>
            </div><br>");
        }
    ?>
</body>
@include('include.footer')
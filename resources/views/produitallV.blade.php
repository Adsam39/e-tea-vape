@include('../include.header2')
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<body id="bodyproduit">
<select class="select-produit" name="cbofiltre">
    <option value="filtre">Filtre</option>
<?php
foreach($catAll as $unecateg) 
{
    echo ("<option value=$unecateg->idCat>$unecateg->libelleCat</option>");
}
?>
</select>
<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<?php
foreach($enregAll as $uneligne) 
{
    if($uneligne->Cat_id == 1)
    {
        echo ("
        <div class='col'>
        <div class='card shadow-sm'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='225' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><img src='img/e-cigarette-4338716.png'/></svg>

          <div class='card-body'>
            <p class='card-text'>$uneligne->libellePdt<br>$uneligne->QteLiquide mL $uneligne->prixPdt €</p>
            <div class='d-flex justify-content-between align-items-center'>
              <div class='btn-group'>
                <a href='produit/consulter/{$uneligne->idPdt}'><button type='button' class='btn btn-sm btn-outline-secondary'>View</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>");
    }
    if($uneligne->Cat_id ==2)
    {
        echo ("<div class='col'>
        <div class='card shadow-sm'>
          <svg class='bd-placeholder-img card-img-top' width='100%' height='225' xmlns='http://www.w3.org/2000/svg' role='img' aria-label='Placeholder: Thumbnail' preserveAspectRatio='xMidYMid slice' focusable='false'><img src='img/e-cigarette-4338716.png'/></svg>

          <div class='card-body'>
            <p class='card-text'>$uneligne->libellePdt<br>$uneligne->prixPdt €</p>
            <div class='d-flex justify-content-between align-items-center'>
              <div class='btn-group'>
                <a href='produit/consulter?id=$uneligne->idPdt'><button type='button' class='btn btn-sm btn-outline-secondary'>View</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>");
    }
    //echo $uneligne->libellePdt . " " .$uneligne->prixPdt . " €" . "<br />";
}
/*echo "Nb de produits : " . $enregCount . "<br />";
//echo "Cout stockage des Nuts : " . $enregNuts->prixPdt * $enregNuts->stockPdt . " €<br />";
echo "Produit avec stock le plus élevé : " . $enregMaxStock->libellePdt . " : " . $enregMaxStock->stockPdt ;*/
?>
        </div>
    </div>
</div>
</body>
@include('../include.footer2')
</html>
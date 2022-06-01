@include('../include.header2')
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
<?php
foreach($enregAll as $uneligne) 
{
    if($uneligne->Cat_id == 1)
    {
        echo ("<div class='card'>
                <div class='card-image'>
                    <img src='img/sw.png'/>
                </div>
                <div class='card-body'>
                    <div class='card-title'>
                        $uneligne->libellePdt
                    </div>
                    <div class='card-excerpt'>
                        $uneligne->QteLiquide mL
                        $uneligne->prixPdt €
                    </div>
                </div>
            </div><br>");
    }
    if($uneligne->Cat_id ==2)
    {
        echo ("<div class='card'>
                <div class='card-image'>
                    <img src='img/sw.png'/>
                </div>
                <div class='card-body'>
                    <div class='card-title'>
                        $uneligne->libellePdt
                    </div>
                    <div class='card-excerpt'>
                        $uneligne->prixPdt €
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
</body>
@include('../include.footer2')
</html>
@include('header2')
<main>
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
/*if("cbofiltre" == 1)
{
    foreach($enregAll as $uneligne) 
    {
        echo ("<a href=''>
                <div class='card'>
                    <div class='card-image'>
                        <img src='../img/sw.png'/>
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
                </div>
                </a>");
    //echo $uneligne->libellePdt . " " .$uneligne->prixPdt . " €" . "<br />";
    }
}
if("cbofiltre" == 2)
{
    foreach($enregAll as $uneligne) 
    {
        echo ("<a href=''><div class='card'>
                <div class='card-image'>
                    <img src='../img/sw.png'/>
                </div>
                <div class='card-body'>
                    <div class='card-title'>
                        $uneligne->libellePdt
                    </div>
                    <div class='card-excerpt'>
                        $uneligne->QteLiquide
                        $uneligne->prixPdt €
                    </div>
                </div>
            </div></a>");
    //echo $uneligne->libellePdt . " " .$uneligne->prixPdt . " €" . "<br />";
    }
}
else
{
    foreach($enregAll as $uneligne) 
    {
        echo ("<a href=''><div class='card'>
                <div class='card-image'>
                    <img src='../img/sw.png'/>
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
            </div></a>");
    //echo $uneligne->libellePdt . " " .$uneligne->prixPdt . " €" . "<br />";
    }
}*/
echo ("<div class='card'>");
foreach($enregAll as $uneligne) 
{
    echo ("<div>
            <div class='card-image'>
                <img src='../img/sw.png'/>
            </div>
            <div class='card-body'>
                <div class='card-title'>
                    $uneligne->libellePdt
                </div>
                <div class='card-excerpt'>
                    $uneligne->QteLiquide mL
                    $uneligne->prixPdt €
                </div>
            </div></div>");
    //echo $uneligne->libellePdt . " " .$uneligne->prixPdt . " €" . "<br />";
}
echo("</div>");
/*echo "Nb de produits : " . $enregCount . "<br />";
//echo "Cout stockage des Nuts : " . $enregNuts->prixPdt * $enregNuts->stockPdt . " €<br />";
echo "Produit avec stock le plus élevé : " . $enregMaxStock->libellePdt . " : " . $enregMaxStock->stockPdt ;*/
?>
</main>
@include('footer2')
</html>
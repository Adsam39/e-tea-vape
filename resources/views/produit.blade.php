@include('include.header6')
<body id="globalbody">
	<?php
		foreach($infos as $uneligne)
		{
			echo ("<img class='img-pdt' src='../../img/black.jpg'/>
			<div class='nom-pdt'>$uneligne->libellePdt</div>
			<div class='prix-pdt'>$uneligne->prixPdt</div>");
			for($i=0;$i<=20;$i++)
			{
				echo("<select class='qte-pdt' name='cboqte'>
						<option value='$i'>$i</option>
					  </select>");
			}
			echo("<button class='btn-panier'>Ajouter au panier</button>");
		}
	?>
</body>
@include('include.footer3')
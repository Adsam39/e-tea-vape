@include('include.header5')
<body id="bodyperso">
<br><br><br><br><br>
<form method="POST" action="ajouterliquidesave">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

Dose de gout : 
<input type="range" name="rangegout" id="goutInputId" value="50" min="0" max="100" oninput="goutOutputId.value = goutInputId.value">
<output id="goutOutputId">50</output>&emsp;
<i>La dose de vapeur est calculé automatiquement selon la dose de gout que vous choisissez</i>
<br>
Dose de nicotine :
<input type="range" name="rangenicotine" id="nicoInputId" value="50" min="0" max="100" oninput="nicoOutputId.value = nicoInputId.value">
<output id="nicoOutputId">50</output><br><br>
Quantité de liquide souhaité : 
<input type="radio" name="optqte" value="10" checked="checked"> 10 mL
<input type="radio" name="optqte" value="50"> 50 mL
<input type="radio" name="optqte" value="100"> 100 mL<br><br>
<input type="submit" value="Valider">
</form>

    <button class="btn-retour"><div class="text-btnretour"></div></button>
</body>
@include('include.footer2')
</html>
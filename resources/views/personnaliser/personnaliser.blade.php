@include('header5')
<body style="background-color: rgba(242,242,242,1);">
<br><br><br>
    <form method="POST" action="ajouterliquidesave">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />

    Dose de gout : <input type="range" list="tickmarks" name="rangegout">
<datalist id="tickmarks">
<option value="0" label="0%"></option>
<option value="10"></option>
<option value="20"></option>
<option value="30"></option>
<option value="40"></option>
<option value="50" label="50%"></option>
<option value="60"></option>
<option value="70"></option>
<option value="80"></option>
<option value="90"></option>
<option value="100" label="100%"></option>
</datalist>
<i>La dose de vapeur est calculé automatiquement selon la dose de gout que vous choisissez</i>

Dose de nicotine :
<input type="range" list="tickmarks" name="rangenicotine">
<datalist id="tickmarks">
<option value="0" label="0%"></option>
<option value="10"></option>
<option value="20"></option>
<option value="30"></option>
<option value="40"></option>
<option value="50" label="50%"></option>
<option value="60"></option>
<option value="70"></option>
<option value="80"></option>
<option value="90"></option>
<option value="100" label="100%"></option>
</datalist>

Quantité de liquide souhaité : 
<input type="radio" name="optqte" value="10" checked="checked"> 10 mL
<input type="radio" name="optqte" value="50"> 50 mL <br />
<input type="radio" name="optqte" value="100"> 100 mL <br />
<input type="submit" value="Valider">
</form>

    <button class="btn-retour"><div class="text-btnretour"></div></button>
</body>
@include('footer2')
</html>
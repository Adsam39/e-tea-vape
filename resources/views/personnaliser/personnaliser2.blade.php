@include('header5')
<body style="background-color: rgba(242,242,242,1);">
<form method="POST" action="ajoutergoutsave">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
<br><br><br><br><br>
<?php
foreach($enregAll as $uneligne) 
{
        echo ("<input type='checkbox' name='chkgout[]' value='$uneligne->IdGout'/>$uneligne->libelleGout");
}
?>
&emsp;<input type="submit" value="Valider">
</form>
<!--<div class="textmiel">Miel</div>
        <input type="checkbox" class="checkbox-miel" value="miel" name="chkmiel">

        <div class="textcitron">Citron</div>
        <input type="checkbox" class="checkbox-citron" value="citron" name="chkcitron">

        <div class="textfleur">Fleur de <br>cerisier</div>
        <input type="checkbox" class="checkbox-fleur" value="fleur" name="chkfleur">

        <div class="textfraise">Fraise</div>
        <input type="checkbox" class="checkbox-fraise" value="fraise" name="chkfraise">

        <div class="textcerise">Cerise Noire</div>
        <input type="checkbox" class="checkbox-cerise" value="cerise" name="chkcerise">

        <div class="text-thenoir">Thé noir</div>
        <input type="checkbox" class="checkbox-thenoir" value="noir" name="chknoir">

        <div class="textfruit">Fruit du <br>dragon</div>
        <input type="checkbox" class="checkbox-fruit" value="fruit" name="chkfruit">

        <div class="text-thevert">Thé vert</div>
        <input type="checkbox" class="checkbox-thevert" value="vert" name="chkvert">

        <button class="btn-suivant" name="btnsuivant"><div class="text-btnsuivant">Suivant</div></button>
    
    </form>

        <button class="btn-suivant" name="btnsuivant"><div class="text-btnsuivant">Suivant</div></button>
    </form>
        <div class="cat1"><img src="../img/cat-6047457_960_720-removebg-p.png"/></div>
    <svg class="cat1-bulle">
		<ellipse rx="148" ry="101" cx="148" cy="101"></ellipse>
	</svg>
    <div></div>
    <button class="btn-retour"><div class="text-btnretour"></div></button>-->
</body>
@include('footer2')
</html>
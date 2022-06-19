@include('include.header');
<form method="POST" action="log">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
<div style="text-align: center;">
Identifiant : <input type="text" name="txtid">
Mot de passe : <input type="password" name="txtmdp"></div>
<input type="submit" name="btnco">
</form>
@include('include.footer');
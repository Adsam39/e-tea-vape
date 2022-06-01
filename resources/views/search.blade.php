<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rechercher</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/app.js"></script>
</head>
<body id="body-search">
<div id="cross" onclick=fermerMenu()>
		<img src="img/close.png"/>
</div>
<form action="result" class="search-bar" method="POST">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
      <input type="search" placeholder="Rechercher produit" name="search">
      &emsp;<input type="submit" value="Valider">
</form>
</body>
</html>
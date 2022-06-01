<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rechercher</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/app.js"></script>
<style>
	/*  SEARCH  */

#body-search {
  position: absolute;
  width: 1920px;
  height: 1080px;
  background-color: #d14454;
  overflow: hidden;
}

.search-bar {
  margin-left: 425px;
  margin-top: 200px;
  padding: 1.5em;
  justify-content: center;
  max-width: 30em;
  display: flex;
}

.search {
  width: 100%;
  position: relative;
  display: flex;
}

.searchTerm {
  width: 100%;
  border: 3px solid #00B4CC;
  border-right: none;
  padding: 5px;
  height: 20px;
  border-radius: 5px 0 0 5px;
  outline: none;
  color: #9DBFAF;
  background-color: black;
}

.searchTerm:focus{
  color: #00B4CC;
}

.searchButton {
  width: 40px;
  height: 36px;
  border: 1px solid #00B4CC;
  background: #00B4CC;
  text-align: center;
  color: #fff;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  font-size: 20px;
}

/*Resize the wrap to see the search bar change!*/
.wrap{
  width: 30%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
</head>
<body id="body-search">
<div id="cross" onclick=fermerMenu()>
		<img src="img/close.png"/>
</div>
<form action="result" class="search-bar" method="POST">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
<div class="wrap">
   <div class="search">
      <input type="text" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" class="searchButton">
        <i class="fa fa-search"></i>
     </button>
   </div>
</div>
</form>
</body>
</html>
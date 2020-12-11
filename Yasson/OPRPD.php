<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>ЧерепОК</title>
	<?require 'db.php' ?>
</head>
<body>
	<div id="Wrapper">
	<header>
		<img src="IMG/Logo.png" width="155%">
	</header>
	<nav align="center">
		<a href="index.php">Главная &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="OPRPD.php">О нас&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="Zakaz.php">Оформить заказ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <a href="#">Контакты &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
	</nav>
	
	<div class="contentishe">
<div>
	<h1 align="center">ВИДЫ РАБОТ</h1>
</div>
<? $Sit=Get_Site();
	foreach ($Sit as $sites):?> 
<div id="productsite">
	<div id="prodtxt">
		<h4><? echo $sites["Sitename"]?></h4>
		<p><? echo $sites["SiteTEXT"]?></p>
	</div>
	<div id="prodimg">
		<img class="img1" src="<? echo $sites["SitePhoto"]?>";>
	</div>
</div>
<?endforeach;?>
</div>


	
	<footer>
		  <p align="center"> Номер телефона: 8 80 555 35 35                 Адрес: Улица чистилище дом 6 офис 66

ЕMail Vasapupkin@blablabla.su </p>
	</footer>
	</div>	
</body>
</html>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>ЧерепОК</title>
	<?require 'db.php'?>
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
		<Form method="POST" action="/obr.php">
		<div id="zaka">
			<div id="zak1" >
<ul>
	<li >
		<h4>Фамилия</h4> <input type="text" name="imia">
	</li>
	<li >
		<h4>Имя</h4> <input type="text" name="family">>
	</li>
	<li >
		<h4>Отчество</h4> <input type="text" name="Otec">
	</li>
	<li >
		<h4>Номер телефона</h4> <input type="text" name="mumer" placeholder="8 _ _ _  _ _ _  _ _ _ _">
	</li>
	<li >
		<h4>E-mail</h4> <input type="text" name="mil" placeholder="_____@_____">
	</li>
	<li >
		<h4>ФВид работы</h4> <input placeholder="" type="text" name="idsit">
	</li>
	<li >
		<h4>Технология разработки</h4> <input placeholder="" type="text" name="teh">
	</li>
	<li >
		<h4>Примерные сроки</h4> <input placeholder="" type="text" name="srok">
	</li>
</ul>
</div>
<div id="zak2" >
<P><h1>Краткое описание заказа</h1></P>
<textarea name="texti" cols="70" rows="30">  </textarea>
<input placeholder="Отправить " type="submit" name="but">
</div>
</div>
</Form>
	</div>



	
	<footer>
		  <p align="center"> Номер телефона: 8 80 555 35 35                 Адрес: Улица чистилище дом 6 офис 66

ЕMail Vasapupkin@blablabla.su </p>
	</footer>
	</div>	
</body>
</html>
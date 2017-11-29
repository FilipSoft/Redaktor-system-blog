<?php
session_start();
require_once('Db.php');
Db::connect("sql.endora.cz:3314","code","code","code1234");

if(!empty($_POST['meno']))   {
$logIn = Db::queryOne('
SELECT meno FROM us WHERE meno=? AND pass=SHA1(?) ',$_POST['meno'], $_POST['pass']."#kj9df5jsh2hj4");
	if($_POST['meno'] == $logIn['meno']){
		$_SESSION['prihlaseny'] = 1; 
		$_SESSION['meno'] = $_POST['meno'];
		header('Location: admin.php');
} 
	else echo('zlé používateľské meno alebo heslo');
} 
?>
<!DOCTYPE html>
<html>
      <head>
      <title></title>
      <meta charset="utf-8"/>
      <link rel="stylesheet" href="Style.css" type="text/css"/>
      </head>
      <body background="back.png">
<form method="POST">
<p>používateľské meno:<input type="text" name="meno"><br/>
	heslo:<input type="password" name="pass"><br/></p>
<input type="submit" value="login">
</form> 
		  <p>Ak ešte nemáš <a href="reg.php">Zaregistruj sa teraz! </a></p>
      </body>
</html> 

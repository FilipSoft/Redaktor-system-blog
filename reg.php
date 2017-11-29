<?php
session_start();
require_once('Db.php');
Db::connect('sql.endora.cz:3314','code','code','code1234'); 
$s = "" ;
if($_POST){

	if($_POST['rok'] != date('Y'))
		$s = "Zle vyplnený antispam" ; 
	
	   else if($_POST['pass'] != $_POST['pass2'])
	   $s = "heslá sa nezhodujú"; 
	   else{
	   $existuje = Db::querySingle('
	   SELECT COUNT(*)
	   FROM us
	   WHERE meno=?
	   Limit 1',$_POST['meno']
								  );
	   if($existuje)
	   $s ="použivateľ s touto prezívkou už existuje";
	   else{
		   Db::query('INSERT INTO us (meno,pass) 
		   VALUES (?,SHA1(?))  
		   ', $_POST['meno'],$_POST['pass']. "#kj9df5jsh2hj4");
		   $_SESSION['meno'] = $_POST['meno'];
		   $_SESSION['prihlaseny'] = 1;  
		   header('Location: admin.php');
	   } 
	   }
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
		  <p><?= $s ?></p> 
<form method="POST">
<p>meno/nick: <input type="text" name="meno"><br/>
	heslo: <input type="password" name="pass"><br/>
	heslo(znovu): <input type="password" name="pass2">  <br/>
    aktuálny rok (anti-spam): <input type="number" name="rok" ></p>
<input type="submit" value="Register" >
</form> 
		  <p>Máš už účet <a href="log.php">Prihlás sa</a></p> 
      </body>
</html> 
	

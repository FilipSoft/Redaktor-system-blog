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
      <title>Registrace | Blog</title>
      <meta charset="utf-8"/>
      <link rel="stylesheet" href="log.css" type="text/css"/>
      </head>
      <body>
       <div class="container text-center mt-3">
        <form method="POST">
              <table>
                <tr>
                    <td> Uživatelské jméno: </td>
                    <td> <input type="text" name="meno"><br/></td>
                </tr>
                
                <tr>
                    <td> Heslo: </td>
                    <td> <input type="password" name="pass"><br/></td>
                </tr>
                
                <tr>
                    <td> Heslo (znovu): </td>
                    <td> <input type="password" name="pass2"><br/></td>
                </tr>
                
                <tr>
                    <td> Aktuální rok (anti-spam): </td>
                    <td> <input type="number" name="rok"><br/></td>
                </tr>
                
                <tr>    
                    <td> <input type="submit" value="Registrovat" > <td>
                </tr>
              </table>
        </form> 
	    <p>Máš už účet? <a href="log.php">Přihlaš se! </a></p>
       </div>
     </body>
</html> 
	

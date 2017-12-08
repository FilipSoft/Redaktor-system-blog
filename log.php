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
    <title>Login | Blog</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="log.css">
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
                    <td> <input type="submit" value="Přihlaš se"> <td>
                    </tr>
                </table>
    </form> 
		  <p>Nemáš ještě účet? <a href="reg.php">Zaregistruj se ihned! </a></p>
          </div>
      </body>
</html> 

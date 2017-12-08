<?php
session_start();
require_once('Db.php');
Db::connect("localhost","code","root","");

	$admin = Db::queryOne('SELECT admin FROM us WHERE meno=?',$_SESSION['meno']);

if($admin['admin']== 1){
	if(!empty($_GET) && $_GET['Odhlásitse'] == 1){
		session_destroy();
header('Location: index.php');
		exit;
	}      
}
else header('Location: index.php');
?>

<!DOCTYPE html>
<html>
  <head>     
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
    <title>Admin | Blog</title>
  </head>
    <body style="background: url('assets/login.jpg');">
        <div class="container text-center mt-3">
            <div class="btn-group-vertical">
            <button><a href="edit.php">Úprava článků</a></button><br>
            <button><a href="zoznam.php">Články</a></button><br><br>
                <form method="Get">
		<input type="hidden" name="Odhlásitse" value="1"/>
		<input type="submit" value="Odhlásitse"/> 
              </form>
            </div>
        </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>

<?php
session_start();
require_once('Db.php');
Db::connect("sql.endora.cz:3314","code","code","code1234");

	$admin = Db::queryOne('SELECT admin FROM us WHERE meno=?',$_SESSION['meno']);

if($admin['admin']== 1){
	if(!empty($_GET) && $_GET['LogOut'] == 1){
		session_destroy();
header('Location: index.php');
		exit;
	}
	echo('<a href="edit.php">editor článkou</a><br/>
		<a href="zoznam.php">články</a><br/><br/>
		 <form method="Get">
		 <input type="hidden" name="LogOut" value="1"/>
		 <input type="submit" value="LogOut"/>
		 </form>
		'); 
}
else header('Location: index.php');
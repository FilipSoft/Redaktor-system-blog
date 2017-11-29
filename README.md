# 27.11 20:32 Added first design of homepage (POPCORN)
# 28.11 17:12 Runned domain http://warriors-of-code.mablog.eu (FilipSoft)
# 28.11 18:58 uploaded login file and register file (FilipSoft)
# //commend please do some DESING for LOG.PHP and REG.PHP if u want do it write YES (ALL)
# Can't access LOG.php and REG.php in Apache localhost (Popcorn)
getting Fatal error: Uncaught PDOException: SQLSTATE[HY000] [1045] Access denied for user 'code'@'ip-89-102-190-15.net.upcbroadband.cz' (using password: YES) in C:\xampp\htdocs\blog\Db.php:48 Stack trace: #0 C:\xampp\htdocs\blog\Db.php(48): PDO->__construct('mysql:host=sql....', 'code', 'code1234', Array) #1 C:\xampp\htdocs\blog\log.php(4): Db::connect('sql.endora.cz:3...', 'code', 'code', 'code1234') #2 {main} thrown in C:\xampp\htdocs\blog\Db.php on line 48

# on local host u need edit 4.th line
From Db::connect("sql.endora.cz:3314","code","code","code1234");
To Db::connect('127.0.0.1', 'is', 'root', '');
Wheen u will uploading it change it back 
Ps.: in php admin create db like on scree shoot (FilipSoft)

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Untitled Document</title>
</head>
<body>
<?php 
require 'connect.php';
$email = trim($_REQUEST['email']);
$insert_sql = "INSERT INTO users (email_addr)" ."VALUES('{$email}');";
mysql_query($insert_sql);
echo "<p>Новая запись вставлена в базу!</p>";
?>

</body>
</html>
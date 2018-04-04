<?php
mysql_connect("localhost", "mark", "12345")//выбираем имя хоста, логин и пароль пользователся БД
or die("<p>Ошибка подключения к базе данных! " . mysql_error() . "</p>");

mysql_select_db("tankapp")//подключаемся к БД tankapp
 or die("<p>Ошибка выбора базы данных! ". mysql_error() . "</p>");
?>
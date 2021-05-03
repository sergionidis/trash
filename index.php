<?php
print `ifconfig`;

#prueba de conexion a mariadb
mysql_connect(“dbserver”, “root”, “PasswordSecreta”) or die(mysql_error());
echo “Connected to MySQL<br />”;
#prueba de conexión a la base de datos.
mysql_select_db(“testdb”) or die(mysql_error());
echo “Connected to Database”;
?>
?>

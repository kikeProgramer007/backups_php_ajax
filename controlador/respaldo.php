<?php
//Datos de conexion
$db_host = 'localhost';
$db_name = 'datatable';
$db_user = 'root';
$db_pass = '';

//Obtenemos la fecha  y hora para identificar el respaldo
$fecha =  date("Ymd-His");

//Construimos  el nombre de archivo SQL Ejemplo: mibase_20220101-081120.sql
$slida_sql = $db_name.'_'.$fecha.'.sql';

//Comando para generar respaldo de Mysql
$dump = "mysqldump -h$db_host -u$db_user -p$db_pass $db_name > $slida_sql";
exec($dump);

//Descargar
header("Location: $slida_sql");

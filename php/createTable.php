<?php
$LoginSql = "CREATE TABLE  `login`.`connect_info` (
    `name` VARCHAR( 30 ) NOT NULL ,
    `mobile` VARCHAR( 10 ) NOT NULL 
    );
    ";

mysqli_query($conn, $LoginSql);

?>
<?php

define("DB_DSN", "mysql:host=localhost;dbname=ocean;charset=utf8");
define("DB_USER", "root");
define("DB_PASS", "123456");


try {
     
     $connection = new PDO(DB_DSN,DB_USER,DB_PASS);
     
     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
//     echo "<p>1. Congratulations!</p>";
} 
catch (PDOException $e) {
     die("<p>Database connection failed: </p>" . $e->getMessage());
}

?>

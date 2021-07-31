<?php
 //Establishing connection with the database
 define('DB_SERVER', 'localhost:3306');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', 'ayyappa2021');
 define('DB_DATABASE', 'users'); //where customers is the database
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

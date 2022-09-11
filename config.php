<?php
// this file contain database configuration 
// 1. PDO - Php Data Objects
// 2. mysqli 

define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','register');

//try to connect with database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


//check connection

if($conn==false){
    dir('Error: Database is not Connected');
}

?>
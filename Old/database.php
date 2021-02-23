<?php
	class DB {
    public function db_connect(){
    $dbhost = 'remotemysql.com';
    $dbname = 'FQ8Nmc0mjJ';
    $dbuser = 'FQ8Nmc0mjJ';
    $dbpass = '7M4LNvSfNp';
    
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
	return $conn;
    }
}
?>
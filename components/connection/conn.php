<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname = "db_payroll";

try{

    $conn = new PDO("mysql: host=$serverName;dbname=$dbname",$userName,$password);
    $conn-> exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed:". $e->getMessage();
}

?>
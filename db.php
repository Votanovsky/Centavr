<?php 


$dbhost = "localhost"; //-указание хоста
$dbname = "catalog"; //-указание бд
$username = "root"; //-имя 
$password = "root"; //-пароль

$db = new PDO("mysql:host=$dbhost; dbname=$dbname", $username, $password);

function get_page_all() {
    global $db;
    $page = $db -> query("SELECT * FROM credit");
    return $page;
}


?>
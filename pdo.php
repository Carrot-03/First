<?php
try{
    $dsn='mysql:host=localhost;dbname=user';
    $username='root';
$pdo=new PDO($dsn,$username);
var_dump($pdo);
}

catch(PDOException $e){
    echo $e->getMessage();
}

?>
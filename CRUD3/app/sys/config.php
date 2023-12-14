<?php
#primeiro controller a ser chamado por padrao
$index = "Autenticacao";

$host = "app/database/database.sqlite";
#$host = "localhost";
#$dbname = "database";
#$user = "root";
#$pass = "";

#$pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$pdo = new \PDO("sqlite:" . $host);

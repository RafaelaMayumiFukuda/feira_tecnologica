<?php
const hostname = 'localhost';
const username = 'root';
const password = '';
const database = 'feira';

$mysqli = new mysqli(hostname, username, password, database);

if($mysqli->error){
    die("Falha na conexão com o banco de dados.");
    echo "$mysqli->error";
}
?>
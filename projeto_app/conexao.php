<?php
$host = "seu-endpoint-rds-aqui";
$user = "seu-usuario";
$password = "sua-senha";
$dbname = "sua-database-se-houver"; //para apenas testar a conexão não precisa da database
session_start();

$conn = mysqli_connect($host, $user,$password, $dbname);


if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}
    echo "Conexão estabelecida com sucesso";

?>
<?php
$servidor = "localhost";
$usuario = "postgres";
$senha ="123456";


$conexao = pg_connect($servidor, $usuario, $senha) or
die ("Não foi possível conectar ao servidor PostGreSQL");
/
echo "Conexão efetuada com sucesso!!";
?>
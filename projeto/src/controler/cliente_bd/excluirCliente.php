<?php

require_once "../../protect.php";
require_once "../../conexao.php";

if(isset($_SESSION)){

$idCliente = isset($_GET['id']) ? $_GET['id'] : 0;

if($idCliente > 0){
   
    $sql_code = "DELETE FROM cliente  WHERE idcliente = '$idCliente'";

    $sql_query = $conexao->query($sql_code);
    header("Location: ../../../clientes.php");

} else {
    header("Location: ../../../index.php");
}

} else {
    header("Location: ../../../nao_permitido.php");
}
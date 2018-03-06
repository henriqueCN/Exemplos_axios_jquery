<?php

$nome = $_REQUEST['nome'];
$database = new mysqli('localhost','root',"henri9715",'teste_upload');

try{
    $sql = "select * from ususario where nome='$nome'";
    $result = $database -> query($sql);

    echo json_encode($result -> fetch_assoc());
}
catch (Exception $e)
{
    echo $e -> getMessage();
}

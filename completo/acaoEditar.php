<?php

require("./funcoes.php");

$novoFuncionario = [
    "id" => $_POST["id"],
    "first_name" => $_POST["first_name"],
    "last_name" => $_POST["last_name"],
    "email" => $_POST["email"],
    "gender" => $_POST["gender"],
    "ip_address" => $_POST["ip_address"],
    "country" => $_POST["country"],
    "department" => $_POST["department"]
];

// var_dump($novoFuncionario);exit;

editarFuncionario("./funcionarios.json", $novoFuncionario);

header("location: empresaX.php");


?>
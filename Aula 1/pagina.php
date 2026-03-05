<?php

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// exemplo simples de usuários
if ($usuario == "admin" && $senha == "1234") {
    echo "Bem-vindo " . $usuario . "<br>";
    echo "Cargo: Administrador";
}
elseif ($usuario == "joao" && $senha == "abcd") {
    echo "Bem-vindo " . $usuario . "<br>";
    echo "Cargo: Funcionário";
}
else {
    echo "Nome de usuário ou senha incorretos";
}

?>
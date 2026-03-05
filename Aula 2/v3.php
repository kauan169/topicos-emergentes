<?php

$produto = [
    "nome" => "teclado",
    "preco" => 120,
    "estoque" => 30
];

foreach ($produto as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

?>
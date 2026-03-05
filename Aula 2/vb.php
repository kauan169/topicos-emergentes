<?php

$cadastro = [
    [
        "nome" => "Lucas",
        "idade" => 18
    ],
    [
        "nome" => "Ana",
        "idade" => 17
    ]
];

foreach ($cadastro as $pessoa) {
    echo "Nome: " . $pessoa["nome"] . "<br>";
    echo "Idade: " . $pessoa["idade"] . "<br><br>";
}

?>
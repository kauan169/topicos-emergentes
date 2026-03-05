<?php

$alunos = [
    ["nome" => "João", "nota" => 7],
    ["nome" => "Maria", "nota" => 9],
    ["nome" => "Pedro", "nota" => 8]
];

$soma = 0;
$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];

    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}

$media = $soma / count($alunos);

echo "Média das notas: " . $media . "<br>";
echo "Maior nota: " . $maiorNota . "<br>";
echo "Aluno com maior nota: " . $melhorAluno;

?>
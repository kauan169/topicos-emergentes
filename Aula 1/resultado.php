<?php

$media = $_POST["media"];

if ($media <= 1.7) {

    echo "Média: " . $media . "<br>";
    echo "Você não pode realizar o exame.";

} elseif ($media >= 7.0) {

    echo "Média: " . $media . "<br>";
    echo "Você está APROVADO.";

} else {

    $nota_exame = (50 - (6 * $media)) / 4;

    echo "Média: " . $media . "<br>";
    echo "Você precisa tirar " . number_format($nota_exame, 2) . " no exame para ser aprovado.";

}

?>
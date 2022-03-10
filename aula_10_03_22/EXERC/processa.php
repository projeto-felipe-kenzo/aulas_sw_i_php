<?php
    //$num1 = 5;
    //$num2 = 10;

    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $divisão = 3;


    $media = $nota1 + $nota2 + $nota3 / $divisão;

    echo "<h1>Olá $nome a sua média é igual a ". $media;"</h1>"

    //echo "a soma de $num1 + $num2 é igual a $soma;
?>
<?php
    $idade = 15;
    $habilitacao = true;

    //APROVADO SE NOTA >6
    //REPROVADO SE NOTA <5
    //RECUPERAÇÃO SE NOTA ENTRE 5 E 6

    if ($idade>=18){
    //se idade for maior ou igual a 18, passa pra próxima etapa  

    //se vc tiver a habilitação, escreva:
        if($habilitacao==true) {
             echo "VOCÊ TEM PERMISSÃO E HABILITAÇÃO PRA DIRIGIR";
       }
        elseif ($habilitacao==false) {
        echo "VOCÊ NÃO TEM HABILITAÇÃO PRA DIRIGIR!";
       }
    //se vc n tiver a habilitação, escreva
    }


    elseif ($idade<18) {
       echo "VOCÊ NÃO TEM IDADE PRA DIRIGIR!";
    }
  
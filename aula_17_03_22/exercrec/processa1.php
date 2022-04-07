<?php
    $numero = $_POST['numero'];




    if ($numero > 0) { 
        echo "NÚMERO POSITIVO";
    }

    elseif ($numero < 0) { 
        echo "NÚMERO NEGATIVO";
    }

    else { 
        echo "NÚMERO IGUAL A ZERO";
    }

?>




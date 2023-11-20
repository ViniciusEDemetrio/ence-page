<?php
    $valor = "Olá mundo";
    $valorCriptografado = base64_encode($valor);

    echo "Valor original " . $valor ;
    echo "Valor criptofrado " . $valorCriptografado ;
?>
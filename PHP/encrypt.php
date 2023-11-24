<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Encrypt inicialization";
    
    if(isset($_POST['txtcrip'])){
    $txt = $_POST['txtcrip'];
    }
    
    if(isset($_POST['algo'])){
        $algo = $_POST['algo'];
    }

    $chave= "00000";

    //criptografar
    $cripto= openssl_encrypt($txt, $algo, $chave);

    ?>

</body>
</html>
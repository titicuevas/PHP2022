<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php 

function distintas($primera,$segunda){

$primera = strlen($_GET['primera']);
$segunda = strlen($_GET['segunda']);

$resultado = 
$distancia = 0;

if (!is_string($primero)&& !is_string($segunda)) {
    
}

for ($i=0; $i <$primera ; $primera++) { 
    
    if (primera[$i]!=$segunda[$i]) {
        $distancia +=1;
    }


}

return $distancia();
}



    ?>

    <p>La distancia Hamming entre esas dos cadena es <?= $res ?></p>
</body>
</html>
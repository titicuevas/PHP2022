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
require 'auxiliar.php';




    $op1 = trim($_GET['op1']);
    $op = trim($_GET['op']);
    $op2 = trim($_GET['op2']);

    $res = calcular_resultado($op1, $op, $op2);




    ?>

    <p>El resultado de <?= $op1, $op, $op2 ?> es <?= $res ?> </p>

    <a href="calculadora.html"><button>Volver</button></a>
</body>

</html>
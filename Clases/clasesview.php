<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $P1 = new Persona("99999999H", "Manolo", "manolo@gmail.com");
        $E1 = new Estudiante("11111111H", "Karim", "karimkarimero_ydads@163.com", "3435");
        $P1->setNombre("Mac. Arena");
        $E1->setNumExpediente("2568");
        $P1->mostrar();
        $E1->mostrar();
    ?>
</body>
</html>
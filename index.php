<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horóscopo</title>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <?php
        include "horoscopo.php";
        if(!isset($_GET['meses'])){
            $_GET['meses'] = '';
        }if(!isset($_GET['dias'])){
            $_GET['dias'] = '';
        }
        $signoGenerado = calcularSignoHoroscopo($_GET['meses'], $_GET['dias']);
    ?>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>
<div id='title'>

</div>
    <form method="get" action="index.php">
        <select name="meses" id="meses">
            <?php generarMeses($meses); ?>
        </select>

        <select name="dias" id="dias">
            <option value="15">Anterior al 20</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="25">Posterior al 23</option>
        </select>
        <button type="submit" name="calcular">Saber mi horóscopo</button>
    </form>

        <?php generarTextoHoroscopo(calcularSignoHoroscopo($_GET['meses'], $_GET['dias']), $signosHoroscopo);?>
    
</body>
</html>
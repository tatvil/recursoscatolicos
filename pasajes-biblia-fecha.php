<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasajes de la Biblia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <?php 
        include "funciones.php"; 
        $totalLibros=numLibros();

        $fecha_actual = strtotime(date("d-m-Y"));
        $anno_actual=date("Y");
        $anno=date("Y");
        $mes=date("m");
        $dia=date("d");
        $diasemana=date("w");
        $meses=array("domingo","lunes","martes","miercoles","jueves","viernes","sabado");

// Calculando el tiempo de adviento
        $navidad=$anno.'-12-25';
        $diasaRestar=date('w', strtotime($navidad))+21;
        $primerDomingoAdviento = date("d-m-Y",strtotime($navidad."- ".$diasaRestar." days")); //resto 4 semanas (28 días)

// Calcualdo ciclo
    if($fecha_actual < $primerDomingoAdviento) // El ciclo comienza en adviento
        {
            $anno=$anno_actual+1;
            $tiempo="Adviento"; //esto hay que depurarlo más para sacar la navidad y la semana santa
            $semanaActual = ceil(date("d",$fecha_actual-strtotime($primerDomingoAdviento))/7);
        }
    elseif ($fecha_actual == $navidad)
        {
            $tiempo="Navidad";
            $semanaActual=0;
        }

        switch ($anno%3) {
            case 0:
                $ciclo="C";
                break;
            case 1:
                $ciclo="A";
                break;
            case 2:
                $ciclo="B";
                break;
        }
        
        $evangeliodeldia=evangeliodeldia($ciclo,$tiempo,$semanaActual,$diasemana);
        $evangelio=$capitulo=$desde=$hasta=1;

        $evangelio = $evangeliodeldia[0];
        $capitulo = $evangeliodeldia[1];
        $desde = $evangeliodeldia[2];
        $hasta = $evangeliodeldia[3];
        $nombreEvangelio=librosBiblia($evangelio); 

        echo "<div class='container'>";
        echo "<h2> Lectura del ".$semanaActual."º ".$meses[$diasemana]." de ".$tiempo." ciclo ".$ciclo."</h2>";
        echo "<h5>".$dia."/".$mes."/".$anno_actual."</h5>";
        echo "<h3>".$nombreEvangelio.": ".$capitulo.".".$desde."-".$hasta."</h3>";

        leerBiblia($evangelio,$capitulo,$desde,$hasta);
        echo "</div>";

    ?>


</body>
</html>
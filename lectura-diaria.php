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
        $messincero=date("n");
        $dia=date("d");
        $diasincero=date("j");
        $diasemana=date("w");
        $meses=array("domingo","lunes","martes","miercoles","jueves","viernes","sabado");
        $mesesanno=array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

        switch ($anno%3) 
            {
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
        $numsemana=date("W");
        if ($diasemana==0) {$numsemana-=1;}
        echo "Numero semana: ".$numsemana."<br>";
        switch (true)
            {
                case $numsemana<1:
                    $tiempo="Navidad";
                    break;
                default:
                    $tiempo="Ordinario";
                    $numero=$numsemana-1;
                    break;
                    
            }
        echo "Tiempo: ".$tiempo." ".$numero."º ciclo: ".$ciclo."<br>";
        $evangeliodeldia=evangeliodeldia($ciclo,$tiempo,$numero,$diasemana);
        $evangelio=$capitulo=$desde=$hasta=1;

        $evangelio = $evangeliodeldia[0];
        $capitulo = $evangeliodeldia[1];
        $desde = $evangeliodeldia[2];
        $hasta = $evangeliodeldia[3];
        $nombreEvangelio=librosBiblia($evangelio); 
        $santodeldia=santodeldia($diasincero,$messincero);

        echo "<div class='container'>";
        echo "<h2> Lectura del ".ucfirst($meses[$diasemana])." ".$diasincero." de ".$mesesanno[$messincero-1]." de ".$anno_actual."</h2>";
        echo "<h3>".$santodeldia."Ciclo ".$ciclo."</h3>";

        echo "<h3>".$nombreEvangelio.": ".$capitulo.".".$desde."-".$hasta."</h3>";

        leerBiblia($evangelio,$capitulo,$desde,$hasta);
        echo "</div>";

    ?>

</body>
</html>
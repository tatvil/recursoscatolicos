<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasajes de la Biblia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php include "funciones.php"; 
    $totalLibros=numLibros();
    echo "Total libros=".$totalLibros;
    ?>

    <form action="" method="POST">
        <label for="Evangelio">Evangelio: </label><select id="evangelio" name="evangelio">   
            <?php
                for ($i=1;$i<=$totalLibros;$i++)
                    {echo ("<option value=".$i.">".librosBiblia($i)."</option>");}
            ?>
        </select>
        <label for="lname">Capitulo:</label>
        <input type="number" id="capitulo" name="capitulo" value="1">
        <input type="number" id="desde" name="desde" value="1">-
        <input type="number" id="hasta" name="hasta" value="20">

        <br><br><input type="submit" value="Buscar">
    </form> 

    <?php
        $evangelio=$capitulo=$desde=$hasta=1;
        if(isset($_POST['evangelio'])) {$evangelio = $_POST['evangelio'];}
        if(isset($_POST['capitulo'])) {$capitulo = $_POST['capitulo'];}
        if(isset($_POST['desde'])) {$desde = $_POST['desde'];}
        if(isset($_POST['hasta'])) {$hasta = $_POST['hasta'];}
        $nombreEvangelio=librosBiblia($evangelio); 
    echo "<h2>".$nombreEvangelio.": ".$capitulo.".".$desde."-".$hasta."</h2>";

    leerBiblia($evangelio,$capitulo,$desde,$hasta);

    ?>


</body>
</html>
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
    <?php include "funciones.php";   ?>

    <form action="" method="POST">
        <label for="lname">Termino a buscar:</label>
        <input type="text" id="termino" name="termino" value="Maria">

        <br><input type="submit" value="Buscar">
    </form> 

    <?php
        $termino="";
        if(isset($_POST['termino'])) {$termino = $_POST['termino'];}
         
        echo "<h2>Apariciones de ".$termino." en la biblia</h2>";
        echo busquedaTermino ($termino);
    ?>


</body>
</html>
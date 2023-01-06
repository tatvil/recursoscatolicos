<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lecturas diarias</title>
</head>
<body>
<?php
include "funciones.php";
$dia=date("d");
$mes=date("m");
$anno=date("Y");
$diasemana=date("w");
?>
<h4>LECTURA DIARIA</h4><br>
        <form action="" method="POST">
            <label for="fecha">Fecha:</label>
            <input type='date' name="fecha" id="fecha" value="<?php echo date('Y-m-d');?>"><br>           
            <label for="ciclo">Ciclo:</label>
            <select class="dropdown" name="ciclo" id="ciclo" value="C">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
            </select><br>
            <label for="tiempo">Tiempo:</label>
            <select class="dropdown" name="tiempo" id="tiempo" value="Ordinario">
                <option value="Ordinario">Ordinario</option>
                <option value="Cuaresma">Cuaresma</option>
                <option value="Pascua">Pascua</option>
                <option value="Adviento">Adviento</option>
                <option value="Navidad">Navidad</option>
            </select>
            <label for="numero">Numero:</label>
            <input type='number' name="numero" id="numero" min=1 max=34><br>     

            <label for="libro">Libro:</label>
            <select class="dropdown" name="libro" id="libro" value=46> 
                <?php echo rellenarLibrosBiblia (); ?>
            </select>  
            
            <label for="capitulo">Capitulo:</label>
            <input type='number' name="capitulo" id="capitulo" min=1 max=100><br>     

            <label for="desde">Desde:</label>
            <input type='number' name="desde" id="desde" min=1 max=100>    
            <label for="hasta"> - Hasta:</label>
            <input type='number' name="hasta" id="hasta" min=1 max=100><br>     

            <br><input type="submit" class="boton" value="Insertar">
        </form> 

    <?php  
        $fecha=$ciclo=$tiempo="";
        $numero=$libro=$capitulo=$desde=$hasta=0;  
        if(isset($_POST['fecha'])) {$fecha = $_POST['fecha'];$diasemana=date("w",strtotime($fecha));echo $diasemana;}

        if(isset($_POST['ciclo'])) {$ciclo = $_POST['ciclo'];}
        if(isset($_POST['tiempo'])) {$tiempo = $_POST['tiempo'];}
        if(isset($_POST['numero'])) {$numero = $_POST['numero'];}
        if(isset($_POST['libro'])) {$libro = $_POST['libro'];}
        if(isset($_POST['capitulo'])) {$capitulo = $_POST['capitulo'];}
        if(isset($_POST['desde'])) {$desde = $_POST['desde'];}
        if(isset($_POST['hasta'])) {$hasta = $_POST['hasta'];}
                                
        //Datos de configuracion de la base de datos
         $servername  = 'localhost';         
         $username   = 'root';  
         $password   = '';         
         $dbname   = 'recursos_catolicos';  
       
   
   // insertar datos mandados en argumentos en la base de datos //TABLA covid
       try {
           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           // set the PDO error mode to exception
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
           $sql = "INSERT INTO evangeliodeldia (ciclo, tiempo, numero, libro, capitulo, desde, hasta, diasemana) VALUES ('$ciclo','$tiempo', $numero, $libro, $capitulo, $desde, $hasta, $diasemana)";

           echo $sql;
           // use exec() because no results are returned
           $conn->exec($sql);
   //           echo "Nuevo dato covid añadido a la tabla"."<br>";
           } 
       catch(PDOException $e) 
           {
           echo $sql . "<br>" . $e->getMessage();
           }
       $conn = null;
         
?>
</body>
</html>
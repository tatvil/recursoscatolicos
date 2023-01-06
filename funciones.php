<?php

function leerBiblia ($libro, $capitulo, $inicio, $fin)
{
    require_once "config.php";
    $sql = "SELECT subindice, nombre FROM biblia WHERE libro_id=".$libro." AND capitulo=".$capitulo." AND subindice>=".$inicio." AND subindice<=".$fin;

    if($result = mysqli_query(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME), $sql))
      {
        if(mysqli_num_rows($result) > 0)
           {
                while($row = mysqli_fetch_array($result))
                {
                        echo "<sup>".$row['subindice']."</sup>".$row['nombre']." ";
                }
                echo "</div>";
            // Free result set
            mysqli_free_result($result);
        }
    else{
            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
    cerrarDB();
}

function leerBibliaRetorno ($libro, $capitulo, $inicio, $fin)
{
    require_once "config.php";
    $sql = "SELECT libros_biblia.nombre AS libro, biblia.subindice AS subindice, biblia.nombre AS nombre FROM biblia JOIN libros_biblia ON libros_biblia.numero=biblia.libro_id WHERE libros_biblia.numero=".$libro." AND biblia.capitulo=".$capitulo." AND biblia.subindice>=".$inicio." AND biblia.subindice<=".$fin;

    if($result = mysqli_query(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME), $sql))
      {
        if(mysqli_num_rows($result) > 0)
           {
               $cadena="";
                while($row = mysqli_fetch_array($result))
                {
                        $cadena.= "<sup>".$row['subindice']."</sup>".$row['nombre']." ";
                        $nombreLibro=$row['libro'];
                }
                $cadena.= "<footer class='blockquote-footer'>".$nombreLibro." ".$capitulo.".".$inicio."-".$fin."</footer></blockquote>";
            // Free result set
            mysqli_free_result($result);
        }
    else{
            $cadena= '<div class="alert alert-danger"><em>No records were found.</em></div>';
        }
    } else{
        $cadena="Oops! Something went wrong. Please try again later.";
    }
    return $cadena;
    cerrarDB();
}

function librosBiblia ($numero)
    {
        require_once "config.php";
        $sql = "SELECT * FROM libros_biblia WHERE numero=$numero";
        if($result = mysqli_query(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME), $sql))
            {
            if( mysqli_num_rows($result) > 0)
                {
                while($row = mysqli_fetch_array($result))
                    {
                        return $row['nombre'];
                    }
                
                // Free result set
            mysqli_free_result($result);
        }
    else{
            echo '<div class="alert alert-danger"><em>Evangelio no encontrado.</em></div>';
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
    cerrarDB();
    }

function numLibros ()
    {
        require_once "config.php";
        $sql = "SELECT * FROM libros_biblia";
;
        if($result = mysqli_query(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME), $sql))
        {
            return (mysqli_num_rows($result));
        } 
        else
        {
            echo "Oops! Something went wrong. Please try again later.";
        }
        cerrarDB();
    }

function evangeliodeldia ($ciclo,$tiempo,$numero,$diasemana)
    {
        require_once "config.php";
        $sql = "SELECT libro,capitulo,desde,hasta FROM evangeliodeldia WHERE ciclo='$ciclo' AND tiempo='$tiempo' AND numero=".$numero." AND diasemana=".$diasemana;
echo $sql;
        if($result = mysqli_query(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME), $sql))
        {
            if( mysqli_num_rows($result) > 0)
                {
                $cadena="";
                while($row = mysqli_fetch_array($result))
                    {
                        $evangelio=$row['libro'];
                        $capitulo=$row['capitulo'];
                        $desde=$row['desde'];
                        $hasta=$row['hasta'];
                    }
                return array($evangelio,$capitulo,$desde,$hasta);
                // Free result set
                mysqli_free_result($result);
                }
            else
                {
                echo '<div class="alert alert-danger"><em>Evangelio no encontrado.</em></div>';
                }
        }
        else
        {
            echo "Oops! Something went wrong. Please try again later.";
        }
        cerrarDB();
    }
    function santodeldia ($dia,$mes)
    {
        require_once "config.php";
        $sql = "SELECT nombre FROM festivos WHERE mes=".$mes." AND dia=".$dia;

        if($result = mysqli_query(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME), $sql))
        {
            if( mysqli_num_rows($result) > 0)
                {
                $cadena="";
                while($row = mysqli_fetch_array($result))
                    {
                        $cadena.=$row['nombre']."<br>";
                    }
                return $cadena;

                // Free result set
                mysqli_free_result($result);
                }
            else
                {
                echo '<div class="alert alert-danger"><em>Evangelio no encontrado.</em></div>';
                }
        }
        else
        {
            echo "Oops! Something went wrong. Please try again later.";
        }
        cerrarDB();
    }
function tablaLecturaDiaria ($anno,$mes)
    {
        if ($anno%3==1) {$ciclo="C";}
    }

function lecturadiaria ($anno,$mes,$dia)
    {
        require_once "config.php";

        $sql = "SELECT libro,capitulo,desde,hasta FROM lecturadiaria WHERE anno=".$anno." AND mes=".$mes." AND dia=".$dia;
echo $sql;
        if($result = mysqli_query(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME), $sql))
        {
            if( mysqli_num_rows($result) > 0)
                {
                $cadena="";
                while($row = mysqli_fetch_array($result))
                    {
                        $evangelio=$row['libro'];
                        $capitulo=$row['capitulo'];
                        $desde=$row['desde'];
                        $hasta=$row['hasta'];
                    }
echo $evangelio." ".$capitulo." ".$desde." ".$hasta;
                return array($evangelio,$capitulo,$desde,$hasta);
                // Free result set
                mysqli_free_result($result);
                }
            else
                {
                echo '<div class="alert alert-danger"><em>Evangelio no encontrado.</em></div>';
                }
        }
        else
        {
            echo "Oops! Something went wrong. Please try again later.";
        }
        cerrarDB();
    }

function cerrarDB ()
{
    // Close connection
    mysqli_close(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME));
}

function busquedaTermino ($termino)
    {
        require_once "config.php";
        $sql = "SELECT * FROM biblia WHERE nombre LIKE '%".$termino."%' ORDER BY libro_id, capitulo";

        if($result = mysqli_query(mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME), $sql))
        {
            if( mysqli_num_rows($result) > 0)
                {
                $cadena="";
                $libroOld="";
                $capituloOld=0;
                while($row = mysqli_fetch_array($result))
                    {
                        $libro=librosBiblia($row['libro_id']);
                        $capitulo=$row['capitulo'];
                        if ($libro!= $libroOld) 
                            {
                                $cadena.="<h2>".$libro."</h2>";
                                $libroOld=$libro;
                                $capituloOld=0;
                            }
                        if ($capitulo!= $capituloOld) 
                            {
                                $cadena.="<h5 style='align:left'>".$capitulo.". </h5>";
                                $capituloOld=$capitulo;
                            }
                        $cadena.="<sub>".$row['subindice']."</sub>".$row['nombre']."<br>";
                    }
                return $cadena;
                }
        } 
        else
        {
            echo "Oops! Something went wrong. Please try again later.";
        }
        
        cerrarDB();
    }

    function rellenarLibrosBiblia ()
          {
               //Datos de configuracion de la base de datos
               require_once "config.php";

            $cadena="";
            
            $sql = "SELECT numero, nombre
                            FROM libros_biblia
                            WHERE testamento='Nuevo'";
               
               if($result = mysqli_query(mysqli_connect('localhost', 'root', '', 'recursos_catolicos'), $sql))
               {
                   if( mysqli_num_rows($result) > 0)
                       {
                       $cadena="";
                       while($row = mysqli_fetch_array($result))
                           {
                               $cadena.="<option value='".$row['numero']."'>".$row['nombre']."</option>";
                           }
                           
                       }
               } 
 //              else
 //              {
 //                  echo "Oops! Something went wrong. Please try again later.";
 //              }
                return $cadena;              
               cerrarDB();  
          }

?>
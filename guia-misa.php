<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia para seguir la Misa</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<?php   
    include 'rezos.php' ;  
?>
<h1>Guia para seguir la Misa</h1>

<div class="en-pie">
    <h2>Ritos iniciales</h2>

    <h3>Antifonía de entrada</h3>

    <p class="cura">En el nombre del Padre, y del Hijo, y del Espíritu Santo.</p>
    <p class="respuesta">Amén</p>

    <p class="cura">El Señor esté con vosotros.</p>
    <p class="respuesta">Y con tu espíritu.</p>
    <p class="descripcion">El sacerdote lee la 'Antífona de entrada' de ese día.</p>

    <h2>Acto penitencial</h2>
    <p class="cura">Hermanos: Para celebrar dignamente estos sagrados misterios, reconozcamos nuestros pecados.</p>
    <p class="respuesta">Yo confieso ante Dios todopoderoso y ante vosotros hermanos, que he pecado mucho de pensamiento, palabra, obra y omisión.</p>
    <p class="respuesta">Por mi culpa, por mi culpa, por mi gran culpa.</p>
    <p class="respuesta">Por eso ruego a Santa María, siempre Virgen, a los ángeles, a los santos y a vosotros, hermanos, que intercedáis por mí ante Dios nuestro Señor.</p>
    <p class="cura">Dios todopoderoso tenga misericordia de nosotros, perdone nuestros pecados y nos lleve a la vida eterna.</p>
    <p class="respuesta">Amen</p>

    <h2>Kirie</h2>
    <p class="cura">Señor ten piedad.</p>
    <p class="respuesta">Señor ten piedad.</p>
    <p class="cura">Cristo ten piedad.</p>
    <p class="respuesta">Cristo ten piedad.</p>
    <p class="cura">Señor ten piedad.</p>
    <p class="respuesta">Señor ten piedad.</p>

    <?php rezar("gloria"); ?>
</div>

<div class="sentados">
    <h2>LITURGIA DE LA PALABRA</h2>

    <h3>Primera lectura</h3>

    <p class="descripcion"> Primera lectura del día</p>
    <p class="cura">Palabra de Dios.</p>
    <p class="respuesta">Te alabamos, Señor</p>

    <h3>Salmo responsorial</h3>

    <p class="descripcion"> Salmo responsorial que corresponda. Hay una parte denominada Salmo Responsorial que el pueblo repite intercaladamente. </p>

    <h3>Segunda lectura</h3>
    <p class="descripcion"> Segunda lectura que corresponda</p>
    <p class="cura">Palabra de Dios.</p>
    <p class="respuesta">Te alabamos, Señor</p>
    <p><i class="bi bi-music-note"></i>Aleluya, Aleluyaaa</p>
</div>

<div class="en-pie">
    <h2>EVANGELIO</h2>
    <p class="cura">Purifica mi corazón y mis labios, Dios todopoderoso, para que anuncie dignamente tu Evangelio.</p>
    <p class="cura">El Señor esté con vosotros.</p>
    <p class="respuesta">Y con tu espíritu.</p>
    <p class="descripcion">Lectura del Santo Evangelio según San [ ]</p>
    <p class="respuesta">Gloria a Ti, Señor.</p>
    <p class="cura">Palabra del Señor.</p>
    <p class="respuesta">Gloria a Ti, Señor Jesús.</p>
    <p class="cura">Que las palabras del Evangelio borren nuestros pecados.</p>
</div>

<div class="sentados">
    <h2>HOMILÍA</h2>
    <p class="descripcion">En este momento el sacerdote hablará sobre las cuestiones de doctrina que considere de interés. Debe decirse todos los domingos y fiestas de precepto. Al terminar es oportuno guardar un breve espacio de tiempo en silencio.</p>
</div>

<div class="en-pie">
    <h2>PROFESIÓN DE FE</h2>
    <?php rezar("credo"); ?>
    <h3> Oración de los fieles</h3>
    <p class="descripcion">Oración variable para los fieles</p>
    <p class="respuesta">Te rogamos, óyenos.</p>

    <h2>LITURGIA DE LA EUCARISTÍA</h2>
    <p class="descripcion">El sacerdote presenta a Dios los dones del pan y del vino que, por la Consagración, se convertirán en el Cuerpo y la Sangre del Señor. Esta parte se conoce como el 'Ofertorio'.</p>
</div>

<div class="sentados">
    <h2>Presentación de ofrendas</h2>
    <p class="cura">Bendito seas, Señor, Dios del Universo, por este pan, fruto de la tierra y del trabajo del hombre, que recibimos de tu generosidad y ahora te presentamos: él será para nosotros pan de vida.</p>
    <p class="respuesta">Bendito seas, por siempre, Señor.</p>
    <p class="cura">Por el misterio de esta agua y este vino, haz que compartamos la divinidad de quien se ha dignado participar de nuestra humanidad.</p>
    <p class="cura">Bendito seas, Señor, Dios del Universo, por este vino, fruto de la vid y del trabajo del hombre, que recibimos de tu generosidad y ahora te presentamos: él será para nosotros bebida de salvación.</p>
    <p class="respuesta">Bendito seas, por siempre, Señor.</p>
</div>

<div class="en-pie">
    <p class="cura">Orad, hermanos, para que este sacrificio mío y vuestro, sea agradable a Dios, Padre todopoderoso.</p>
    <p class="respuesta">El Señor reciba de tus manos este sacrificio, para alabanza y gloria de su nombre, para nuestro bien y el de toda su santa Iglesia.</p>

    <h3>Oración sobre ofrendas</h3>
    <p class="descripcion">El sacerdote lee la 'Oración sobre las ofrendas' prevista para ese día.</p>

    <h3>Plegraría eucaristica</h3>
    <p class="cura">El Señor esté con vosotros.</p>
    <p class="respuesta">Y con tu espíritu.</p>
    <p class="cura">Levantemos el corazón</p>
    <p class="respuesta">Lo tenemos levantado hacia el Señor.</p>
    <p class="cura">Demos gracias al Señor, nuestro Dios.</p>
    <p class="respuesta">Es justo y necesario.</p>

    <p class="descripcion">Prefacio correspondiente al día</p>
    <p class="respuesta">Santo, Santo, Santo es el Señor, Dios del Universo.</p>
    <p class="respuesta">Llenos están el cielo y la tierra de tu gloria.</p>
    <p class="respuesta">Hosanna en el cielo.</p>
    <p class="respuesta">Bendito el que viene en nombre del Señor.</p>
    <p class="respuesta">Hosanna en el cielo.</p>
</div>

<div class="rodillas">
    <h2>CONSAGRACIÓN</h2>
    <p class="cura">TOMAD Y COMED TODOS DE ÉL, PORQUE ESTO ES MI CUERPO, QUE SERÁ ENTREGADO POR VOSOTROS.</p>
    <p class="cura">TOMAD Y BEBED TODOS DE ÉL, PORQUE ÉSTE ES EL CÁLIZ DE MI SANGRE, SANGRE DE LA ALIANZA NUEVA Y ETERNA, QUE SERÁ DERRAMADA POR VOSOTROS Y POR MUCHOS PARA EL PERDÓN DE LOS PECADOS.</p>
    <p class="cura">HACED ESTO EN CONMEMORACIÓN MÍA.</p>
    <p class="cura">Éste es el sacramento de nuestra fe.</p>
</div>


<div class="en-pie">
    <p class="respuesta">Anunciamos tu muerte, proclamamos tu resurrección.¡Ven, Señor Jesús!</p>
    <p class="respuesta">Cada vez que comemos de este pan y bebemos de este cáliz, anunciamos tu muerte, Señor, hasta que vuelvas.
    <p class="cura">Por Cristo, con él y en él, a ti, Dios Padre omnipotente, en la unidad del Espíritu Santo, todo honor y toda gloria por los siglos de los siglos.</p>
    <p class="respuesta">Amén</p>

    <h3>RITO DE LA COMUNIÓN</h3>
    <p class="cura">Fieles a la recomendación del Salvador y siguiendo su divina enseñanza, nos atrevemos a decir:</p>
    <div class="respuesta"><?php rezar("padreNuestro");?></div>
    <p class="cura">Líbranos de todos los males, Señor y concédenos la paz en nuestros días, para que ayudados por tu misericordia, vivamos siempre libres de pecado y protegidos de toda perturbación, mientras esperamos la gloriosa venida de nuestro Salvador Jesucristo.</p>
    <p class="respuesta">Tuyo es el reino, tuyo el poder y la gloria, por siempre, Señor.</p>
    <p class="cura">Señor Jesucristo, que dijiste a tus apóstoles: 'La paz os dejo, mi paz os doy', no tengas en cuenta nuestros pecados, sino la fe de tu Iglesia y, conforme a tu palabra, concédele la paz y la unidad. Tú que vives y reinas por los siglos de los siglos.</p>
    <p class="respuesta">Amén.</p>
    <p class="cura">La paz del Señor esté siempre con vosotros.</p>
    <p class="respuesta">Y con tu espíritu.</p>
    <p class="cura">Daos fraternalmente la paz.</p>
    <p class="descripcion">Y todos, según la costumbre del lugar se dan la paz.</p>
    <p class="respuesta">Cordero de Dios, que quitas el pecado del mundo, ten piedad de nosotros.</p>
    <p class="respuesta">Cordero de Dios, que quitas el pecado del mundo, ten piedad de nosotros.</p>
    <p class="respuesta">Cordero de Dios, que quitas el pecado del mundo, danos la paz.</p>
    <p class="cura">Este es el Cordero de Dios, que quita el pecado del mundo. Dichosos los invitados a la cena del Señor.</p>
    <p class="respuesta">Señor, no soy digno de que entres en mi casa, pero una palabra tuya bastará para sanarme.</p>
    <p class="descripcion"> Comulgar</p>
    <p class="cura"> Oremos.</p>
    <p class="descripcion">Oración para después de la comunión' de ese día. </p>
    <p class="respuesta">Amén</p>

    <h2>RITO DE CONCLUSIÓN</h2>
    <p class="cura">El Señor esté con vosotros.</p>
    <p class="respuesta">Y con tu espíritu.</p>
    <p class="cura">La bendición de Dios todopoderoso, Padre, Hijo y Espíritu Santo, + descienda sobre vosotros.</p>
    <p class="respuesta">Amén.</p>
    <p class="cura">Podéis ir en paz.</p>
    <p class="respuesta">Demos gracias a Dios.</p>
</body>
</html>
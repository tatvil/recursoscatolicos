    <?php
        function rezar($nombre)
            {
                switch ($nombre) 
                   {
                    case "padreNuestro":
                        $titulo="Padre Nuestro";
                        $rezo="Padre nuestro, que estas en el cielo, santificado sea tu nombre, venga a nosotros tu reino, hágase tu voluntad, en la tierra como en el cielo. </p><p>Danos hoy nuestro pan de cada día, perdona nuestras ofensas, como también nosotros perdonamos a los que nos ofenden. No nos dejes caer en la tentación, y libranos del mal. </p><p>AMEN";  
                    break;
                    case "gloria": 
                        $titulo="Gloria";
                        $rezo="Gloria a Dios en el cielo,
                        y en la tierra paz a los hombres que ama el Señor.</p>
                        <p>Por tu inmensa gloria te alabamos, te bendecimos,
                        te adoramos, te glorificamos, te damos gracias,
                        Señor Dios, Rey celestial,</p>
                        <p>Dios Padre todopoderoso.
                        Señor, Hijo único, Jesucristo.
                        Señor Dios, Cordero de Dios, Hijo del Padre;
                        tú que quitas el pecado del mundo,</p>
                        <p>ten piedad de nosotros;
                        tú que quitas el pecado del mundo,
                        atiende nuestra súplica;
                        tú que estás sentado a la derecha del Padre,</p>
                        <p>ten piedad de nosotros;
                        porque sólo tú eres Santo,
                        sólo tú Señor,
                        sólo tú Altísimo Jesucristo,</p>
                        <p>con el Espíritu Santo
                        en la gloria de Dios Padre.
                        </p><p>AMEN";   
                        break;
                    case "invocacion": 
                        $titulo='Invocación';
                        $rezo='María, Madre de gracia, Madre de misericordia, defiéndenos de nuestros enemigos y ampáranos ahora y en la hora de nuestra muerte. </p><p>AMEN';   
                        break;
                    case "aveMaria": 
                        $titulo='Ave María';
                        $rezo='Dios te salve, María, llena eres de gracia, el Señor es contigo. Bendita tu eres entre todas las mujeres y bendito es el fruto del tu vientre, Jesús. </p><p>Santa María, Madre de Dios, ruega por nosotros pecadores, ahora y en la hora de nuestra muerte. </p><p>AMEN';   
                        break;
                    case "credo": 
                        $titulo="El Credo";
                        $rezo="<strong>Creo en Dios</strong>, Padre Todopoderoso, Creador del cielo y de la tierra</p>
                        <p><strong>Creo en Jesucristo</strong>, su único Hijo, Nuestro Señor, que fue concebido por obra y gracia del Espíritu Santo, nació de santa María Virgen, padeció bajo el poder de Poncio Pilato, fue crucificado muerto y sepultado, descendió a los infiernos, al tercer día resucitó de entre los muertos, subió a los cielos y está sentado a la derecha de Dios Padre Todopoderoso. Desde allí ha de venir a juzgar a vivos y a muertos.</p>
                        <p><strong>Creo en el Espíritu Santo</strong>, la santa Iglesia católica, la comunión de los santos, el perdón de los pecados, la resurrección de la carne y la vida eterna.</p>
                        <p>AMEN" ;   
                        break;
                    case "credoNiceno": 
                        $titulo='Credo Niceno';
                        $rezo='Creo en un solo Dios, <strong>Padre todopoderoso</strong>, Creador del cielo y de la tierra, de todo lo visible y lo invisible. </p>
                        <p>Creo en un solo Señor, <strong>Jesucristo</strong>, Hijo único de Dios, nacido del Padre antes de todos los siglos: Dios de Dios, Luz de Luz, Dios verdadero de Dios verdadero, engendrado, no creado, de la misma naturaleza del Padre, por quien todo fue hecho; que por nosotros, los hombres, y por nuestra salvación bajó del cielo, y por obra del Espíritu Santo se encarnó de María, la Virgen, y se hizo hombre; y por nuestra causa fue crucificado en tiempos de Poncio Pilato; padeció y fue sepultado, y resucitó al tercer día, según las Escrituras, y subió al cielo, y está sentado a la derecha del Padre; y de nuevo vendrá con gloria para juzgar a vivos y muertos, y su reino no tendrá fin. </p>
                        <p>Creo en el <strong>Espíritu Santo</strong>, Señor y dador de vida, que procede del Padre y del Hijo, que con el Padre y el Hijo recibe una misma adoración y gloria, y que habló por los profetas.</p> 
                        <p>Creo en la <strong>Iglesia</strong>, que es una, santa, católica y apostólica. Confieso que hay un solo Bautismo para el perdón de los pecados. Espero la resurrección de los muertos y la vida del mundo futuro.</p> <p>AMÉN.';
                        break;
                    case "laSalve": 
                        $titulo='La Salve';
                        $rezo='Dios  te Salve, Reina y madre de misericordia, vida, dulzura y esperanza nuestra, Dios te salve.</p>
                        <p>A ti llamamos los desterrados hijos de Eva; a ti suspiramos, gimiendo y llorando en este valle de lágrimas.</p>
                        <p>Ea, pues, Señora, abogada nuestra, vuelve a nosotros, esos tus ojos misericordiosos, y, después de este destierro, muéstranos a Jesús, fruto bendito de tu vientre.</p>
                        <p>¡Oh clementisima, oh piadosa, oh dulce virgen María!</p>
                        <p>Ruega por nosotros, Santa Madre de Dios, para que seamos dignos de alcanzar las promesas de nuestro Señor Jesucristo';   
                        break;
                   }
                echo "<h4>".$titulo."</h4>";
                echo "<p>".$rezo."</p>";
        
            }        
    ?>

<?php

session_start();

if (!isset($_SESSION['admin'])) {

    header('location:Sesion.php');

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="productos.css">
    <script src="https://kit.fontawesome.com/027f6cc223.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="logo">
        <a href="inicio.php"><i class="fa-solid fa-dragon"></i>Ezgames</a>
    </div>
    <nav>
        <div class="nav-wrapper nav">

            <ul class="right hide-on-med-and-down nav1">
                <li><a href="sass.html"><i class="material-icons left">home</i>inicio</a></li>
                <li><a href="badges.html"><i class="material-icons left">view_module</i>categorias</a></li>
                <li><a href="sass.html"><i class="material-icons left">local_offer</i>ofertas</a></li>
                <li><a href="sass.html"><i class="material-icons left">today</i>noticias</a></li>
            </ul>
            <div class="row">
                <div class="input-field search col s11">
                    <input id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons white-text">search</i></label>
                </div>
            </div>

            <div class="dropdown">
                <a class='dropdown-trigger btn transparent' href='#' data-target='dropdown1'><i
                        class="material-icons">menu</i></a>


                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="#!"><i class="material-icons right">forum</i>foro</a></li>
                    <li><a href="#!"><i class="material-icons right">language</i>idioma</a></li>
                    <li><a href="#!"><i class="material-icons right">info_outline</i>info</a></li>
                </ul>
            </div>

        </div>

    </nav>

    <section class="row">


        <div class="carousel col s7">
            <a class="carousel-item" href="#one!" data-title="Rise of the Tomb Raider"
                data-description="Rise of the Tomb Raider sigue la historia de la icónica heroína, Lara Croft, en su búsqueda de respuestas sobre la misteriosa organización conocida como Trinity, mientras explora paisajes exóticos y peligrosos. El juego se desarrolla en Siberia y presenta un entorno impresionante y detallado, con una combinación de elementos de supervivencia, exploración, acción y resolución de acertijos."
                data-price="precio 40$"
                data-info="Lara Croft, la intrépida aventurera y arqueóloga, regresa en Rise of the Tomb Raider para embarcarse en una emocionante odisea alrededor del mundo. Desde antiguas tumbas en lugares remotos hasta paisajes nevados en las montañas y selvas exuberantes, Lara se sumerge en la exploración de secretos ancestrales que han permanecido ocultos durante siglos.
                Una de las características más destacadas de este juego es su combate dinámico y estratégico. Lara ha evolucionado como luchadora y ahora tiene la capacidad de usar sigilo, armas de fuego y habilidades de caza para enfrentarse a una variedad de enemigos, desde humanos hostiles hasta criaturas mortales que acechan en la oscuridad. Cada enfrentamiento es una prueba de habilidad y estrategia, y los jugadores deben adaptarse a las circunstancias para sobrevivir.
                Pero Rise of the Tomb Raider no se trata solo de combate; también ofrece una experiencia intelectual desafiante. Los jugadores se enfrentan a intrincados acertijos y rompecabezas que deben resolver para avanzar en la historia y desbloquear nuevas áreas y tumbas secretas. Estos acertijos añaden una capa adicional de profundidad al juego y recompensan la creatividad y la resolución de problemas.
                La supervivencia es otro elemento clave en la narrativa de Lara. En este juego, debe cazar, recolectar recursos y mejorar su equipo para sobrevivir en un entorno extremadamente hostil. El frío, el hambre y las amenazas constantes son desafíos que deben superarse para prevalecer.
                La narrativa de Rise of the Tomb Raider es profunda y rica en desarrollo de personajes. A medida que Lara se enfrenta a desafíos físicos y emocionales, los jugadores son testigos de su crecimiento y evolución a lo largo del juego. Esta historia cautivadora sumerge a los jugadores en el mundo de Lara y crea un vínculo emocional con el personaje principal.
                El apartado visual es impresionante. El juego cuenta con gráficos espectaculares que hacen que tanto el entorno como los personajes cobren vida de manera realista. Los detalles en los paisajes, la iluminación y los efectos visuales crean una experiencia visual inmersiva que complementa perfectamente la narrativa Además de la historia principal, Rise of the Tomb Raider presenta tumbas opcionales que ofrecen a los jugadores desafíos adicionales. Estas tumbas están llenas de acertijos y peligros que desafían la lógica y la habilidad de resolución de problemas de los jugadores. La recompensa por completar estas tumbas es significativa y proporciona un incentivo adicional para los aventureros intrépidos.">
                <img src="img/img1.png"> </a>

            <a class="carousel-item" href="#two!" data-title="Grand theft auto v"
                data-description="Grand Theft Auto V (GTA 5) es un videojuego de acción y mundo abierto publicado por Rockstar Games. Este título, lanzado en 2013, ha dejado una huella en la industria de los videojuegos gracias a su asombroso mundo abierto, narrativa compleja y su exploración de temas de crimen y redención en un escenario impresionante, es una obra maestra que ha definido los juegos de mundo abierto y ha cautivado a jugadores de todo el mundo"
                data-price="Precio 45$"
                data-info="Sumérgete en la vasta y dinámica ciudad de Los Santos, una versión ficticia de Los Ángeles, en GTA 5. Los entornos urbanos, rurales y costeros te ofrecen un sinfín de oportunidades y secretos por descubrir en este mundo abierto enormemente detallado.
                El juego presenta una estructura narrativa única con tres protagonistas jugables. Experimenta la historia desde la perspectiva de Michael, un estafador en busca de redención; Franklin, un joven que busca ascender en el mundo del crimen; y Trevor, un psicópata impredecible con un toque de humor negro. La capacidad de cambiar entre estos tres personajes agrega diversidad a las misiones y situaciones a las que te enfrentarás.
                La narrativa de GTA 5 es compleja y apasionante, sumergiéndote en una serie de atracos, traiciones y dilemas morales. A través de la perspectiva de estos tres protagonistas, explorarás los oscuros recovecos del crimen organizado y los desafíos personales que enfrentan.
                Pero GTA 5 no se trata solo de la historia principal. Ofrece una diversidad de actividades secundarias que van más allá de los atracos, incluyendo carreras de autos emocionantes, deportes, actividades al aire libre y la oportunidad de comprar propiedades. La riqueza de opciones es impresionante y garantiza que siempre haya algo que hacer en Los Santos.
                La personalización y mejora son aspectos clave del juego. Puedes adaptar vehículos a tu gusto, adquirir propiedades y mejorar las habilidades de los personajes a medida que avanzas en el juego. Cada elección que haces afecta directamente tu experiencia en Los Santos y cómo te enfrentas a los desafíos.
                Además, GTA Online te permite explorar Los Santos junto con otros jugadores en un mundo en constante evolución. Colabora en misiones, compite en desafíos y personaliza tu personaje mientras disfrutas de un entorno multijugador expansivo.
                Los impactantes gráficos son una parte integral de la experiencia. La atención al detalle y la impresionante calidad gráfica hacen que Los Santos cobre vida de manera excepcional. Desde los rascacielos hasta las calles secundarias, el mundo del juego es visualmente sorprendente y te sumerge por completo en este universo ficticio.">
                <img src="img/img2.png"></a>

            <a class="carousel-item" href="#three!" data-title="the elder scrolls v: skyrim"
                data-description="The Elder Scrolls V: Skyrim es un videojuego de rol de acción desarrollado por Bethesda Game Studios y publicado por Bethesda Softworks. Lanzado en 2011, este juego ha ganado un lugar especial en el corazón de los amantes de los juegos de rol y es conocido por su inmersivo mundo de fantasía y la libertad que ofrece a los jugadores para explorar y forjar su propia historia en un reino lleno de misterios y peligros."
                data-price="Precio 32$"
                data-info="Skyrim es un mundo de fantasía expansivo que te transporta a la vasta y pintoresca región de Skyrim, una tierra nórdica cubierta de montañas, bosques y antiguas ruinas. En cada rincón del mundo, te esperan historias por descubrir y lugares asombrosos por explorar.
                Desde el inicio, los jugadores tienen la libertad de personalizar su propio personaje. Puedes elegir tu raza, género y habilidades, lo que afecta la forma en que experimentas el juego y cómo abordas los desafíos que se presentan en tu camino.
                La narrativa principal es una epopeya que gira en torno al retorno de los dragones a Skyrim y el papel del Sangre de Dragón, el personaje principal, en esta amenaza. La trama está repleta de giros emocionantes y personajes inolvidables que enriquecen la historia.
                Pero Skyrim no se limita a la historia principal. Ofrece una amplia variedad de misiones secundarias y actividades que enriquecen la experiencia del jugador. Desde investigar asesinatos y robar tesoros hasta involucrarse en conflictos entre facciones, el juego ofrece una diversidad de desafíos y aventuras.
                El sistema de habilidades y magia es una parte integral de la jugabilidad. Los jugadores pueden desarrollar sus habilidades en combate, sigilo, magia y artesanía a medida que avanzan en el juego. La magia desempeña un papel central en el mundo de Skyrim, con una amplia variedad de hechizos y escuelas de magia que permiten a los jugadores adoptar diferentes estilos de juego.
                La libertad es uno de los aspectos más destacados de Skyrim. Los jugadores pueden explorar el vasto mundo a su propio ritmo, eligiendo su propio camino y desenterrando secretos en cada rincón del reino. La sensación de inmersión es incomparable.
                La comunidad de modding ha enriquecido aún más la experiencia de juego. Se han creado innumerables modificaciones que agregan contenido nuevo y mejoras al juego, ampliando las posibilidades de personalización y aventura. Skyrim es un mundo que sigue evolucionando gracias a la creatividad de la comunidad de jugadores y modders.">
                <img src="img/img3.png"></a>

            <a class="carousel-item" href="#four!" data-title="call of duty: ghosts"
                data-description="Call of Duty: Ghosts es un videojuego de disparos en primera persona desarrollado por Infinity Ward y publicado por Activision. Fue lanzado en 2013 como la décima entrega principal de la exitosa serie Call of Duty. Aunque ha sido criticado por algunos fanáticos por sus cambios en la fórmula de la serie, sigue siendo un título significativo en el género de juegos de disparos."
                data-price="Precio 36$"
                data-info="Call of Duty: Ghosts se desarrolla en un futuro cercano en el que los Estados Unidos han sido devastados por un ataque orbital y han caído en la anarquía. En este escenario apocalíptico, el jugador forma parte de un grupo de fuerzas especiales conocido como los Ghosts. Su misión es luchar contra una fuerza paramilitar conocida como La Federación que ha emergido como una amenaza poderosa en este mundo caótico. La narrativa del juego gira en torno a la venganza y la lucha desesperada por la supervivencia en medio de un país destrozado y una sociedad al borde del colapso.
                El juego mantiene las mecánicas de juego características de la serie Call of Duty, con un énfasis en el combate en primera persona, la acción intensa y los tiroteos a alta velocidad. Los jugadores tendrán a su disposición una variedad impresionante de armas y equipo que podrán utilizar tanto en la emocionante campaña para un jugador como en el competitivo modo multijugador en línea. Este último ha sido un pilar fundamental en la serie y ofrece una amplia gama de mapas, modos de juego y opciones de personalización de personajes para satisfacer los diferentes estilos de juego de la comunidad.
                El juego también introduce el modo Squads, una adición interesante que permite a los jugadores formar equipos de soldados personalizables. Estos equipos pueden enfrentarse a desafíos controlados por la inteligencia artificial o competir contra otros jugadores en partidas competitivas. Esta característica agrega una nueva capa de estrategia y diversión al juego.
                En cuanto a los aspectos visuales, Call of Duty: Ghosts impresiona con gráficos de alta calidad que aprovechan al máximo la tecnología de las consolas de la generación en la que se lanzó. Los escenarios del juego están detallados y los efectos visuales son impresionantes, lo que sumerge al jugador en un mundo postapocalíptico vívido y lleno de acción.">
                <img src="img/img4.png"></a>

            <a class="carousel-item" href="#five!" data-title="Doom Eternal"
                data-description="Doom Eternal es un videojuego de disparos en primera persona desarrollado por id Software y publicado por Bethesda Softworks. Es la secuela del exitoso reinicio de la serie Doom lanzado en 2016 y se lanzó en 2020. El juego es conocido por su acción implacable, su estilo de juego frenético y su temática de demonios y el infierno."
                data-price=" Precio 50$"
                data-info="Doom Eternal es un juego que se caracteriza por su acción frenética y violenta. Los jugadores asumen el papel del Doom Slayer, un guerrero endurecido que se enfrenta valientemente a oleadas de demonios y criaturas del infierno. Armado con un impresionante arsenal de armas brutales, el Doom Slayer es el último defensor de la humanidad contra las fuerzas del mal.
                A pesar de su enfoque en la acción desenfrenada, el juego también ofrece elementos de exploración y plataformas. Esto permite a los jugadores buscar secretos y rutas alternativas a través de los niveles, lo que agrega una capa adicional de profundidad al juego.
                La variedad de armas disponibles es asombrosa, desde escopetas hasta lanzallamas, cada una con un uso específico para enfrentar a los diferentes tipos de enemigos que acechan en las profundidades del infierno. Además, los jugadores pueden desbloquear mejoras tanto para sus armas como para las habilidades del Doom Slayer, lo que añade una dimensión estratégica a la jugabilidad.
                Doom Eternal presenta una amplia variedad de enemigos demoníacos, cada uno con sus propias tácticas y debilidades. La estrategia y la rapidez de reflejos son clave para derrotar a estos adversarios, lo que añade un nivel adicional de desafío al juego.
                La historia sigue al Doom Slayer mientras lucha incansablemente por detener una invasión demoníaca en la Tierra. A medida que avanzas en el juego, descubrirás más sobre el lore y la mitología de Doom, lo que añade profundidad al mundo y la narrativa del juego.
                En cuanto al modo multijugador, Doom Eternal incluye modos como Battlemode, donde un jugador asume el papel del Doom Slayer y se enfrenta a dos jugadores que controlan demonios en partidas asimétricas, lo que agrega una dinámica única al juego.
                Los gráficos de Doom Eternal son impactantes y detallados. Dan vida a los horrores del infierno y los escenarios postapocalípticos de una manera impresionante, lo que sumerge a los jugadores en un mundo de pesadillas repleto de acción y violencia sin censura. En resumen, Doom Eternal es un juego que ofrece una experiencia intensa y emocionante para aquellos que buscan acción inquebrantable y combate despiadado en el infierno.">
                <img src="img/img5.png"></a>

            <a class="carousel-item" href="#six!" data-title="Resident evil 2: remake"
                data-description="Resident Evil 2 Remake es un videojuego de supervivencia y horror en tercera persona desarrollado y publicado por Capcom. Lanzado en 2019, el juego es una reinvención del clásico Resident Evil 2 lanzado en 1998, y ha sido ampliamente elogiado por su capacidad para capturar la esencia del juego original mientras proporciona gráficos mejorados y una jugabilidad moderna."
                data-price="precio 60$"
                data-info="Resident Evil 2 Remake es un juego que ha llevado a cabo mejoras sustanciales tanto en gráficos como en jugabilidad. Los gráficos realistas y el sistema de juego actualizado con controles modernos, cámaras sobre el hombro y una atmósfera envolvente sumergen a los jugadores en el aterrador mundo de Resident Evil.
                El juego presenta dos historias interconectadas, lo que significa que los jugadores pueden experimentar la trama desde la perspectiva de dos personajes: Leon S. Kennedy y Claire Redfield. Cada uno de ellos tiene su propia campaña repleta de desafíos y eventos únicos que añaden una dimensión adicional a la narrativa.
                La supervivencia y el terror son elementos fundamentales en Resident Evil 2 Remake. Se mantiene el enfoque característico de la serie en la supervivencia, lo que significa que los recursos son limitados y los enemigos, que incluyen zombis y criaturas mutadas, son extremadamente mortales. Esto crea una constante sensación de peligro y tensión.
                El juego incluye puzles y desafíos que los jugadores deben resolver para avanzar en la trama, lo que añade profundidad y variedad a la experiencia de juego. Estos acertijos desafiantes requieren pensamiento estratégico y habilidades de resolución de problemas.
                La exploración desempeña un papel crucial en Resident Evil 2 Remake. La Raccoon City, donde se desarrolla la historia, es un lugar amplio y peligroso que los jugadores deben explorar para descubrir secretos, recursos y pistas que les ayudarán a resolver el misterio que envuelve la ciudad. Cada rincón oscuro y callejón estrecho puede ocultar tanto peligro como respuestas.
                Los gráficos de alta calidad del juego son impresionantes y contribuyen a la creación de una atmósfera inquietante. Cada detalle se ha cuidado meticulosamente, lo que sumerge a los jugadores en un mundo de pesadilla.
                A pesar de ser un remake, Resident Evil 2 Remake se mantiene fiel a la historia original de Resident Evil 2 y captura la esencia del clásico. Al mismo tiempo, introduce mejoras significativas que hacen que la experiencia sea fresca y emocionante, tanto para los fanáticos de la serie como para los nuevos jugadores. En resumen, este juego es una obra maestra del género de terror y supervivencia que aporta una nueva vida a un título querido por los aficionados.">
                <img src="img/img6.png"></a>

            <a class="carousel-item" href="#seven!" data-title="Nier automata"
                data-description="NieR Automata es un videojuego de acción y rol desarrollado por PlatinumGames y publicado por Square Enix. Lanzado en 2017, el juego es conocido por su narrativa profunda y su estilo de juego único que combina acción rápida con elementos de rol. La historia y el mundo del juego exploran temas existenciales y filosóficos en un entorno postapocalíptico."
                data-price="precio 48$"
                data-info="En un futuro distante, NieR: Automata presenta una historia intrigante en un mundo postapocalíptico donde la humanidad ha sido expulsada de la Tierra por máquinas invasoras. Los jugadores asumen el papel de 2B, una androide de combate, y su compañero 9S en una lucha desesperada por recuperar el planeta y desvelar sus misterios.
                La jugabilidad en NieR: Automata es versátil y emocionante. El juego combina acción intensa con elementos de rol, permitiendo a los jugadores personalizar a sus personajes, mejorar sus habilidades y experimentar con una amplia variedad de armas y habilidades. La versatilidad en el combate es clave para enfrentar las numerosas amenazas que se interponen en el camino.
                La narrativa del juego es compleja y ramificada. A medida que los jugadores avanzan en la historia, se enfrentan a múltiples finales y toman decisiones cruciales que influyen en la dirección de la narrativa y en la percepción de los acontecimientos. Cada elección tiene consecuencias significativas, lo que brinda una sensación de inmersión en la historia.
                La exploración es una parte integral de la experiencia en NieR: Automata. Los jugadores pueden sumergirse en un vasto mundo abierto que abarca desde desiertos desolados hasta ciudades en ruinas, en su búsqueda de secretos, misiones secundarias y personajes intrigantes. Cada rincón del mundo del juego es una invitación a descubrir y aprender más sobre su historia.
                La música es un elemento destacado en NieR: Automata. La banda sonora, compuesta por Keiichi Okabe, ha sido elogiada por su emotividad y capacidad para crear una atmósfera única en el juego. La música se convierte en una parte integral de la experiencia y contribuye en gran medida a la inmersión del jugador.
                Más allá de su acción y aventura, el juego explora temas filosóficos y existenciales profundos. La identidad, la conciencia y la lucha por la supervivencia en un mundo sin sentido son temas centrales que desafían la mente del jugador y lo invitan a reflexionar sobre cuestiones fundamentales de la existencia.
                La estética visual de NieR: Automata es única y evoca una mezcla de escenarios postapocalípticos y personajes diseñados de manera distintiva. Cada elemento del juego, desde el diseño de los personajes hasta los paisajes desolados, contribuye a la creación de un mundo visualmente impactante.
                En conjunto, NieR: Automata ofrece una experiencia de juego profunda y emocionante que combina una narrativa intrigante, una jugabilidad versátil, una banda sonora memorable y una exploración apasionante. El juego se destaca por su capacidad para desafiar la mente y el corazón de los jugadores, invitándolos a explorar los misterios de un mundo postapocalíptico en constante cambio.">
                <img src="img/img7.png"></a>

            <a class="carousel-item" href="#eight!" data-title="Fallout new vegas"
                data-description="Fallout: New Vegas es un videojuego de rol de acción desarrollado por Obsidian Entertainment y publicado por Bethesda Softworks. Lanzado en 2010, el juego es una entrada en la famosa serie Fallout y se desarrolla en un mundo postapocalíptico en el yermo del suroeste de los Estados Unidos. Ofrece una narrativa rica, decisiones morales y un vasto mundo abierto para explorar."
                data-price="precio 34$"
                data-info="En un mundo postapocalíptico, en la región del Mojave Wasteland, cerca de Las Vegas, se desarrolla la acción de Fallout: New Vegas. Aquí, los jugadores se sumergen en un vasto y desolado paisaje que incluye desiertos expansivos, ciudades en ruinas y lugares misteriosos poblados por mutantes y facciones en constante conflicto.
                Este juego se distingue por su narrativa ramificada, lo que significa que cada elección que los jugadores toman influye en el mundo y en el desarrollo de la historia. Esta característica fomenta la rejugabilidad, ya que las decisiones de los jugadores pueden llevar a diferentes resultados y desenlaces.
                Fallout: New Vegas ofrece a los jugadores una libertad significativa para elegir su enfoque en la resolución de conflictos. Pueden optar por el diálogo pacífico, la diplomacia, el sigilo o la violencia, lo que permite una amplia gama de estilos de juego y enfoques estratégicos.
                La adhesión a diferentes facciones y alianzas es una parte esencial del juego. Los jugadores pueden unirse a diversas facciones, cada una con sus propios objetivos y códigos morales, lo que agrega profundidad a las elecciones éticas y morales que deben tomar a lo largo de la historia.
                El sistema de habilidades en el juego permite a los jugadores mejorar y personalizar las habilidades de su personaje a medida que avanzan en la trama. Esto les brinda la capacidad de especializarse en áreas específicas, ya sea en combate, sigilo o persuasión en las conversaciones.
                La exploración y la recolección de objetos y armas son esenciales para la supervivencia en el yermo. Los jugadores deben buscar recursos y materiales para fabricar objetos y personalizar armas que se adapten a su estilo de juego y les permitan enfrentar los desafíos del entorno postapocalíptico.
                El juego presenta una ambientación única que combina elementos retrofuturistas de la década de 1950 con tecnología futurista y una estética postapocalíptica. Esta combinación crea un mundo visualmente intrigante que aporta una atmósfera distintiva al juego.">
                <img src="img/img8.png"></a>

            <a class="carousel-item" href="#nine!" data-title="Battlefield 4"
                data-description="Battlefield 4 es un videojuego de disparos en primera persona desarrollado por DICE y publicado por Electronic Arts. Lanzado en 2013, es la decimotercera entrega de la exitosa serie Battlefield- El juego se destaca por su enfoque en la guerra moderna y su multijugador en línea que permite batallas épicas en entornos altamente destructibles."
                data-price="precio 47$"
                data-info="Battlefield 4 nos sumerge en un escenario de guerra moderna que abarca desde rascacielos en Shanghai hasta entornos navales y desiertos desafiantes. En este juego, los jugadores tienen a su disposición una amplia variedad de armas y vehículos militares de última generación que añaden una nueva dimensión a la lucha en el campo de batalla.
                La característica más destacada de Battlefield 4 es su multijugador a gran escala, que permite partidas con un impresionante máximo de 64 jugadores en plataformas de consola y PC. Los modos de juego, como Conquista, Asalto, Operaciones y muchos más, ofrecen una variedad de desafíos estratégicos y tácticos que mantienen a los jugadores en vilo.
                Uno de los sellos distintivos de la serie Battlefield es la capacidad de destruir completamente el entorno. Los jugadores pueden derribar edificios, destruir vehículos y cambiar dinámicamente el campo de batalla. Esta destructibilidad añade un nivel de realismo y dinamismo al juego que pocos otros títulos pueden igualar.
                La personalización es clave en Battlefield 4. Los jugadores pueden adaptar su equipo, armas y vehículos para que se ajusten a su estilo de juego. Además, a medida que avanzan en el juego, tienen la oportunidad de desbloquear nuevos elementos y mejoras que les permiten perfeccionar su estrategia.
                Aunque la serie Battlefield no se ha centrado tradicionalmente en la narrativa, Battlefield 4 introduce una campaña para un jugador que sigue al sargento Daniel Recker y su equipo en un conflicto internacional. Aunque el multijugador sigue siendo el enfoque principal, la campaña ofrece una experiencia de juego adicional que lleva a los jugadores a través de una emocionante historia.
                Los vehículos son una parte integral de la experiencia en Battlefield 4. Los jugadores pueden tomar el control de una amplia variedad de vehículos, desde tanques y aviones de combate hasta helicópteros y embarcaciones de guerra. Esta diversidad de vehículos agrega una nueva capa de estrategia al juego.
                Además, Battlefield 4 se destaca por sus gráficos de alta calidad. El juego aprovecha al máximo la potencia de las consolas de última generación y las capacidades de PC para crear escenarios realistas y detallados que sumergen a los jugadores en el mundo de la guerra moderna.">
                <img src="img/img9.png"></a>

            <a class="carousel-item" href="#ten!" data-title="Assasin's creed III "
                data-description="Assassin's Creed III es un videojuego de acción y aventuras desarrollado por Ubisoft y lanzado en 2012. El juego presenta un escenario único en la época de la Revolución Americana. Los jugadores asumen el papel de Connor Kenway, un asesino mestizo de nativo americano y británico, en su lucha contra los Templarios y su participación en los eventos históricos de la revolución."
                data-price="precio 53$"
                data-info="Assassin's Creed III es un viaje fascinante a un entorno histórico único: la Revolución Americana. Los jugadores se sumergen en un período crucial de la historia mientras experimentan eventos destacados, como la Batalla de Bunker Hill y el asalto al Fuerte Ticonderoga.
                Este título introduce una serie de mejoras significativas en la jugabilidad. Los nuevos movimientos de combate y navegación permiten a los jugadores escalar árboles y utilizar armas de fuego, lo que agrega fluidez y dinamismo al combate. La experiencia se siente más inmersiva y emocionante.
                Un elemento distintivo de Assassin's Creed III es la navegación naval, que lleva a los jugadores a secuencias emocionantes en barcos de guerra. Tienen la oportunidad de tomar el mando de estos barcos y participar en batallas navales épicas que añaden una dimensión estratégica a la narrativa.
                La historia sigue a Connor en su búsqueda de venganza y justicia en medio de la lucha entre los Asesinos y los Templarios. A lo largo del juego, los jugadores se ven envueltos en una narrativa intrigante llena de giros y revelaciones que mantienen su interés en todo momento.
                El mundo abierto de Assassin's Creed III es extenso y diverso. Los jugadores pueden explorar una amplia variedad de entornos, desde las bulliciosas ciudades de Boston y Nueva York hasta los densos bosques y los asentamientos coloniales que conforman la América de la Revolución.
                La economía también desempeña un papel interesante en el juego. Los jugadores pueden gestionar su economía personal y participar en el comercio de bienes, lo que añade una dimensión económica al juego y les permite prosperar en este mundo histórico.
                Además, Assassin's Creed III incluye un modo multijugador que permite a los jugadores enfrentarse entre sí en partidas sigilosas y estratégicas, lo que agrega una capa adicional de diversión y desafío.
                El apartado visual es impresionante, ya que el juego se destaca por sus gráficos de alta calidad y escenarios detallados que recrean la época histórica con precisión. Cada rincón del mundo de Assassin's Creed III está diseñado con esmero, lo que brinda una experiencia visual cautivadora.">
                <img src="img/img10.png"></a>
        </div>

        <div class="info col s5">
            <h4 id="image-title"></h4>
            <p id="image-description"></p>
            <h5 id="image-price"></h5><br>
            <button id="generate-invoice">comprar</button>
        </div>

    </section>
    <div class="info2">
        <h5>Informacion</h5>
        <p id="image-info"></p>
    </div>

    <footer class="footer">
        <div class="contain">
            <div class="row">

                <div class="col s12 m3">
                    <h5>Sobre Nosotros</h5>
                    <ul>
                        <li><a href="#">Historia</a></li>
                        <li><a href="#">Misión</a></li>
                        <li><a href="#">Vision</a></li>
                        <li><a href="#">Equipo de desarrollo</a></li>
                    </ul>
                </div>


                <div class="col s12 m3">
                    <h5>Contacto y Ayuda</h5>
                    <ul>
                        <li><a href="#">Contáctanos</a></li>
                        <li><a href="#">Soporte en Línea</a></li>
                        <li><a href="#">Preguntas Frecuentes</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                    </ul>
                </div>


                <div class="col s12 m3">
                    <h5>variedades</h5>
                    <ul>
                        <li><a href="#">Últimas Novedades</a></li>
                        <li><a href="#">Eventos y Anuncios</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Beta tester</a></li>
                        <li><a href="#">Actualizaciones</a></li>
                    </ul>
                </div>

               
                <div class="col s12 m3">
                    <h5>Redes Sociales</h5>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>

     
        <div class="contain2">
            <div class="row">
                <div class="col s12 center-align">
                    <div class="copyright">
                        &copy; 2023 Easygenz. Todos los derechos reservados.
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
    </script>


    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.dropdown-trigger');
        var instances = M.Dropdown.init(elems, {});
    });


    document.addEventListener('DOMContentLoaded', function() {
        var carousels = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(carousels, {});

        var imageTitle = document.getElementById('image-title');
        var imageDescription = document.getElementById('image-description');
        var imagePrice = document.getElementById('image-price')
        var imageInfo = document.getElementById('image-info')

        var firstSlide = document.querySelector('.carousel-item:first-child');
        var title = firstSlide.getAttribute('data-title');
        var description = firstSlide.getAttribute('data-description');
        var price = firstSlide.getAttribute('data-price')
        var info = firstSlide.getAttribute('data-info')

        imageTitle.textContent = title || '';
        imageDescription.textContent = description || '';
        imagePrice.textContent = price || '';
        imageInfo.textContent = info || '';

        var carouselInstance = M.Carousel.getInstance(carousels[0]);

        carouselInstance.options.onCycleTo = function(data) {
            var title = data.getAttribute('data-title');
            var description = data.getAttribute('data-description');
            var price = data.getAttribute('data-price')
            var info = data.getAttribute('data-info')

            imageTitle.textContent = title || '';
            imageDescription.textContent = description || '';
            imagePrice.textContent = price || '';
            imageInfo.textContent = info || '';

        };

        
        $('#generate-invoice').click(function() {
            var currentSlide = $('.carousel-item.active');
            var title = currentSlide.data('title');
            var description = currentSlide.data('description');
            var price = currentSlide.data('price');
            var info = currentSlide.data('info')

           
            window.location.href = 'factura.php?title=' + title + '&price=' + price;
        });
    });
    </script>
</body>


</html>
-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-05-2018 a las 21:01:35
-- Versión del servidor: 5.6.38
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `museo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colecciones`
--

CREATE TABLE `colecciones` (
  `id_coleccion` int(11) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colecciones`
--

INSERT INTO `colecciones` (`id_coleccion`, `nombre`) VALUES
(1, '1950'),
(2, '1960'),
(3, '1980');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `IP` varchar(20) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Fecha` varchar(20) NOT NULL,
  `Comentario` varchar(20000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`IP`, `Nombre`, `Correo`, `Fecha`, `Comentario`) VALUES
('null', 'Alberto Rodriguez', 'alberto@ugr.es', '20/5/2018 | 20:06', '**** soy Alberto'),
('null', 'Alicia Rodriguez', 'alicia@ugr.es', '20/5/2018 | 20:02', 'como estas'),
('194.153.205.26', 'Cecilia   ', 'correo2@gmail.com', '3/4/2018  18:11', ' Me fascina este coche.'),
('172.16.4.205', 'Jose', 'jose@gmail.com', '5/1/2018  22:14', 'Es interesante, siempre creí que este coche era egipcio.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE `obras` (
  `indice` int(11) NOT NULL,
  `id_coleccion` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `autor` text NOT NULL,
  `anio` text NOT NULL,
  `fecha_public` text NOT NULL,
  `fecha_modif` text NOT NULL,
  `texto` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`indice`, `id_coleccion`, `titulo`, `autor`, `anio`, `fecha_public`, `fecha_modif`, `texto`, `imagen`) VALUES
(1, 3, 'VW escarabajo 87\'', ' Béla Barényi', '1938-2003', '23/04/2018', '23/04/2018', '<p>El Volkswagen Tipo 1 (denominación oficial actual, aunque atribuida posteriormente a su primer lanzamiento en el mercado), también es conocido entre otros muchos nombres como Escarabajo, Vocho o Fusca en distintos países hispanohablantes.\r\n\r\nFue uno de los coches preferidos durante décadas por conductores de todo el mundo, debido a su economía de mantenimiento y a su reducido gasto de combustible. El Volkswagen Escarabajo es un coche reconocido a nivel mundial, representativo de la marca Volkswagen hasta el punto de que casi cualquier persona que lo vea sabe inmediatamente que es un Volkswagen por su inconfundible aspecto, después en los 60 fueron más grandes y más ovaladas.\r\n\r\nTécnicamente Volkswagen Tipo 1 es un automóvil de bajo coste. Producido por el fabricante alemán Volkswagen entre los años 1938 y 1978 en Alemania, y después se siguió fabricando en México hasta 2003, ha sido el automóvil con más tiempo de producción en la historia. Fue el primer automóvil de la marca, y se construyeron y vendieron más de 21 millones de unidades.1?\r\n\r\nInicialmente, en 1938, a este modelo de automóvil se lo denominó KdF-Wagen (Kraft durch Freude Wagen, en alemán, «El coche de la fuerza mediante la alegría»). Durante la Segunda Guerra Mundial (1939-1945) Alemania produjo muy pocos ejemplares con la auténtica carrocería de este modelo. La producción se concentró sobre todo en adaptar su estructura a los modelos militares Kübelwagen y Schwimmwagen, pero una vez terminada la guerra se retomó la producción en cadena a gran escala a partir de 1945 y el modelo alcanzó desde entonces gran popularidad y prestigio mundialmente. Durante muchos años, y hasta épocas recientes, este modelo se utilizó como taxi en la Ciudad de México.\r\n\r\nA lo largo de diferentes países y lenguas se le atribuyeron los nombres populares de Volkswagen o Käfer (literalmente, en alemán, \'coche del pueblo\' y \'escarabajo\'), Beetle (literalmente, en inglés, \'escarabajo\'), Coccinelle (en francés, literalmente \'mariquita\') etc. En los países hispanohablantes se lo denomina de diferentes maneras, Volkswagen Vocho, Volkswagen Sedán, Pichirilo, Escarabajo, Peta, Sapo, Poncho, etc.\r\n\r\nEs un automóvil de cuatro plazas con motor trasero y tracción trasera, disponible con carrocerías sedán y descapotable de dos puertas. El Escarabajo es un coche de culto en numerosas subculturas, como la hippie y el tuneo. En todo el mundo existen numerosos clubes de propietarios y fanes de este modelo.\r\n\r\nEn 1999, en las votaciones realizadas en Las Vegas por especialistas internacionales para designar el Automóvil más influyente del siglo XX, quedó en cuarto lugar.</p>', './imagenes/coche1.png'),
(2, 1, 'Mercedes 52\'', 'Mercedes-Benz', '1951–1955', '23/04/2018', '23/04/2018', '<p>El Mercedes-Benz W187 es un automóvil de lujo de tamaño completo producido por Mercedes-Benz de 1951 a 1955. Presentado en el Salón del Automóvil de Frankfurt en abril de 1951, funcionaba con un solo árbol de levas en cabeza , motor M180 de seis cilindros en línea y disponible como berlina , coupé y cabriolet , todos designados con el nombre del modelo 220 .\r\n\r\nA pesar de su reputación anterior a la Segunda Guerra Mundial como fabricante de automóviles de lujo , en los años inmediatamente posteriores a la guerra, Mercedes-Benz produjo solo turismos de cuatro cilindros . El W187 Mercedes-Benz 220 y el buque insignia W186 Mercedes-Benz 300 Adenauer presentados juntos en 1951 fueron los primeros Mercedes que contaron una vez más con motores de seis cilindros .</p>\r\n\r\n<p>Historia \r\nModelos \r\nEl estilo fue similar al del Mercedes-Benz 170S, excepto que los faros autoestables de 170 fueron para los 220 integrados en los guardabarros para un aspecto un poco más moderno. Se construyeron dos modelos diferentes de cabriolets , concebidos como autos deportivos exclusivos de carácter exclusivo, pero estos solo vendieron 1,278 y 997 para la \"A\" (2 puertas, 2/3 asientos) y \"B\" (2 puertas, 4 asiento) versiones, respectivamente.\r\n\r\nEn diciembre de 1953, justo cuando los modelos de salón y descapotable \"B\" estaban a punto de ser reemplazados, un \"Cabriolet A\" derivado W187 Coupé fue anunciado para 1954. El departamento de ventas de Mercedes-Benz dejó saber que este desarrollo fue una respuesta directa a las solicitudes urgentes de las principales celebridades de la época. Durante 1953, el fabricante reemplazó el parabrisas convencionalmente plano en el \"Cabriolet A\" de 2/3 plazas con una pantalla ligeramente curvada, que también se abrió paso en el nuevo coupé: esta era una forma de resaltar la naturaleza deportiva de ambos modelos. Sin embargo, el coupé que alguna vez se equipó, como muchos, con un techo corredizo de acero, se vendió a finales de 1953 por 22,000 marcas, casi el doble del precio de la \"limusina\" W187 estándar, y solo 85 de los cupés W187 se vendieron realmente .\r\n\r\nEntre agosto de 1952 y mayo de 1953, se produjeron para la policía 41 cuerpos especiales \"OTP\" [4] con cuerpo W187 220s.</p>', './imagenes/cocheclasico2.png'),
(3, 2, 'Aston Martin DB6', ' Aston Martin ', '1965-1970 ', '23/04/2018', '23/04/2018', '<p>El Aston Martin DB6 es un gran turismo fabricado por el fabricante británico de automóviles Aston Martin . Producido desde septiembre de 1965 hasta enero de 1971, el DB6 tuvo la producción más larga hasta esa fecha de cualquier modelo de Aston Martin. [4] El DB6 sucedió al Aston Martin DB5 y presentó aerodinámica y especificación mejoradas sobre su predecesor.</p>\r\n<p>Historia y diseño \r\nDespués de que Aston Martin rechazó las propuestas para un reemplazo para su DB5 de Touring of Milan , la decisión fue enfocarse en su propio auto de desarrollo, registrado 4 YMC. La prueba del túnel de viento , que comenzó en febrero de 1965, mostró que el desarrollo era necesario para contrarrestar una tendencia hacia la sustentación aerodinámica [un resultado del estilo de fastback] que causa una tracción reducida de la rueda trasera a alta velocidad. [5] Las fases finales de desarrollo se basaron en el chasis DB5, adecuadamente alargado y titulado MP 219 , con spoiler labial trasero y cola abreviada de Kammback incorporada anteriormente en prototipos de carreras deportivas. La decisión fue hecha para producir MP 219como el Aston Martin DB6, aunque el prototipo del eje trasero de Dion fue rechazado, Aston siguió trabajando con su configuración de eje vivo bien ubicada que reduce el tiempo de comercialización, el costo y la complejidad.\r\n\r\nPresentado en el Salón del Automóvil de Londres de 1965, el DB6 ya era un diseño anticuado [6], notable como el primer modelo diseñado después de una reubicación de fábrica de Feltham a Newport Pagnell . El DB6 tiene un parecido con su predecesor, el DB5; Las diferencias más notables son la distancia entre ejes, el perfil lateral, los paragolpes delanteros y traseros divididos y los paneles traseros que incorporan la parte trasera trasera de Kammback. La cola, combinada con el eje trasero reubicado y la distancia entre ejes alargada de 3.75 pulgadas (95 mm), proporciona más estabilidad a alta velocidad. Aunque de moda, el diseño de estilo Kamm en la parte trasera era similar al Ferrari 250- no resultó popular entre la clientela de Aston conservadora y orientada a la tradición cuando se presentó el DB6. El rendimiento fue satisfactorio: pruebas de carretera del día observaron la velocidad máxima del modelo Vantage entre 236 km / h (148 mph) y 148 mph (238 km / h), con John Bolster a bordo de un Vantage spec DB6 alcanzando un promedio bidireccional de 152 mph (245 km / h). [7]\r\n\r\nEl DB6 continuó con los amortiguadores traseros ajustables para cabina de Armstrong Selectaride de alta tecnología disponibles en el DB5. [8] Otros aspectos destacados incluyen la adopción de ventanas de cuarto de entrada en la puerta delantera, una pala de aire de enfriador de aceite baja en la cenefa delantera, paragolpes en cada esquina, grupos de lámparas de cola revisados; además, el deflector afectó las proporciones generales del DB6, con un aumento en la longitud de aproximadamente dos pulgadas.</p>', './imagenes/cocheclasico1.png'),
(4, 2, 'Fiat 1500', 'Fiat', ' 1961-1967', '23/04/2018', '23/04/2018', '<p>Los Fiat 1300 y Fiat 1500, concebidos con el código interno de la marca como proyecto 116, son dos automóviles de turismo producidos por el fabricante italiano Fiat entre los años 1961 y 1967.1? Es denominado un auto bólido.</p>\r\n\r\n<p>Inicialmente, el 1300 y el 1500 compartían la misma base y se diferenciaban únicamente en la cilindrada de sus motores, tal como indica la denominación comercial de ambos modelos.\r\n\r\nEstaban disponibles como berlina y familiar y la línea de su carrocería monocasco, de gran habitabilidad dado lo compacto de sus dimensiones y estética americanizada, muy elegante y proporcionada, recordaba en cierto modo a la del Chevrolet Corvair.\r\n\r\nSupusieron la primera incursión de Fiat en el segmento de los cinco plazas y en muchos aspectos se les puede considerar los verdaderos suscesores de los Fiat 1400/1900, sobre el papel sustituidos por los seis plazas Fiat 1800/2100 de implantación minoritaria y que compartían gran cantidad de elementos mecánicos con los 1300/1500\r\n\r\nLas motorizaciones, de elevado rendimiento y prestaciones privilegiadas frente a la concurrencia, tenían una capacidad de 1295 cc y 1481 cc respectivamente y pertenecían a la familia de motores modulares de Fiat iniciada con los bloques de seis cilindros en línea de la gama Fiat 1800/2100 de 1959. Contaban con cigüeñal de tres apoyos y su diseño modular les permitía compartir carrera (79.5 mm), variando únicamente el diámetro de los cilindros que también es compartido con los motores de seis cilidros, siendo de 77 mm para los motores de 2100 y 1500 cc (por 72 mm en los 1800 y 1300 cc). Rompían con la tradición italiana de las bajas cilindradas motivada por su legislación, estando diseñados desde el principio para alojarse en carrocerías medias. Por esta razón se trataba de una mecánicas muy compactas pese a ser motores de carrera larga.\r\n\r\nLa distribución se llevaba a cabo mediante un único árbol de levas montado en bloque que sin embargo, mediante un elaborado sistema de taqués, era capaz de mandar las válvulas situadas en V sobre la cámara de combustión hemisférica formando un diseño avanzadísimo en su momento -típico de Lampredi–.\r\n\r\nEl esquema de suspensiones era muy moderno para la época; la delantera independiente a base de triángulos superpuestos, muelles helicoidales, amortiguadores hidraúlicos telescópicos, y barra estabilizadora. En la parte posterior era de concepción más convencional con el típico esquema hotchkiss mediante un eje rígido con amortiguadores hidraúlicos telescópicos y ballestas como elemento elástico con la única novedad de añadir una barra estabilizadora.\r\n\r\nFueron concebidos a partir de cero, sin apenas herencia de otras gamas anteriores, por lo que aunque sobre el papel pudieran parecer convencionales, contaban con sofisticados avances como los frenos de disco a las cuatro ruedas y sobre todo, representaron la democratización del uso en coches de gran serie de técnicas avanzadas, aunque no revolucionarias y de acabados de elevada calidad. Precisamente ese esmero en los acabados lastraba levemente sus precios por lo que fueron sustituidos por los Fiat 124, más moderno y barato de producir y marginalmente por el Fiat 125 realizado íntegramente sobre la plataforma del 1500 \"C\", versión de batalla larga del 1300/1500, aunque con un nuevo puente trasero inspirado en el del Fiat Dino y elementos de carrocería procedentes del 124.</p>', './imagenes/fiat1500.png'),
(5, 1, 'Fiat 500', 'Dante Giacosa', '1957-1975', '23/04/2018', '23/04/2018', '<p>El Fiat 500, es un automóvil fabricado por la empresa italiana Fiat entre los años 1957 y 1975.\r\n\r\n        Lanzado a la venta como el Nuevo 500, fue promocionado como un coche urbano barato y práctico, con el fin de afrontar los altos niveles de congestión en las ciudades italianas. El Fiat 500, cariñosamente llamado en Italia \"Cinquino\", \"Topolino\" en Colombia, \"Fito\" en Chile, es sin dudas uno de los automóviles italianos más famosos.</p> \r\n<p>Todo procede de una idea de Benito Mussolini en el año 1930, el Duce había convocado al Senador del fascismo Giovanni Agnelli para informarle de la \"improrrogable necesidad\" de motorizar a los Italianos con un vehículo económico que no superase el costo de 500.000 liras.\r\n\r\n        Una idea de gran impacto de propaganda, que el apenas electo primer ministro, Hitler se apresuró a copiar, convocando a Ferdinand Porsche e intimándolo a realizar un automóvil por un costo no superior a los 1000 marcos alemanes; aquel que sería famoso con el nombre de Volkswagen Escarabajo.</p> \r\n\r\n        <h4>Introducción histórica</h4>\r\n       <p>Todo procede de una idea de Benito Mussolini en el año 1930, el Duce había convocado al Senador del fascismo Giovanni Agnelli para informarle de la \"improrrogable necesidad\" de motorizar a los Italianos con un vehículo económico que no superase el costo de 500.000 liras.\r\n        Una idea de gran impacto de propaganda, que el apenas electo primer ministro, Hitler se apresuró a copiar, convocando a Ferdinand Porsche e intimándolo a realizar un automóvil por un costo no superior a los 1000 marcos alemanes; aquel que sería famoso con el nombre de Volkswagen Escarabajo.</p> \r\n\r\n        <h4>El 500 que no nació</h4>\r\n        <p>Preocupado por el complicado encargo, al cual hubiera deseado renunciar, Agnelli dejó la cuestión a los proyectistas de la oficina técnica de Fiat, que se dividieron en dos corrientes de pensamiento opuestas. La primera consideraba posible conseguirlo con tecnología y esquemas ya utilizados por la Fiat, ahorrando empleados y materiales. La segunda, evaluando que la empresa turinesa no se encontrara en situación de fabricar un producto adecuado en poco tiempo, proponía confiar el proyecto a Oreste Lardone, un técnico fabuloso, que había realizado otros prototipos de vehículos económicos para Italia.\r\n\r\n        En principio la decisión de la dirección de Fiat, fue la de seguir adelante con ambas hipótesis de trabajo, encargando a la oficina técnica un proyecto de modelo siguiendo los estándares de la empresa, y a la vez, le contrata a Oreste Lardone, asignándole un reto sumamente difícil y un pequeño grupo de técnicos y obreros.\r\n\r\n       Lardone no puede creer, el disponer de todo el potencial de Fiat para llevar adelante sus propias ideas. En principio el nuevo automóvil deberá tener cuatro plazas y se moverá mediante motor de dos cilindros 500 cc, refrigerado por agua / aire, y dotado de tracción delantera.\r\n\r\n        Dante Giacosa está presente el verano de 1931 cuando el prototipo del 500 Tutto Avanti está listo para la primera salida, el proyectista y el senador Agnelli, impaciente por verificar el producto y telegrafiar la buena noticia a Mussolini. En un antecesor del Fiat 500, después de recorrer tranquilamente algunos kilómetros, se produjo un incendio durante una subida que fuerza a los ocupantes a saltar a tierra. El incidente seguramente se debió a un hecho mecánico superficial, pero el senador prohibió la fabricación de automóviles Fiat de tracción delantera, mientras Lardone recibe inmediatamente el beneplácito.\r\n\r\n       El proyecto del pequeño vehículo proseguirá sin entusiasmo hasta octubre de 1932, cuando el Duce visita la factoría de improviso.\r\n\r\n       El verdadero motivo de la repentina falta de ideas, de la oficina de proyectos (Antonio Fessia e Tranquillo Zerbi) se debía a que estaban todavía convencidos de que el modelo correcto era aquel prohibido de Ladrone, y probablemente no quisieron seguir un proyecto claramente erróneo, solo por respaldar la insustancial fobia del senador.\r\n\r\n       El mismo Fessia confía el encargo a Dante Giacosa, un joven ingeniero que era por ese entonces su asistente en la proyección del Balilla, considerándolo el hombre justo para realizar aquello que la dirección de la empresa esperaba.</p> ', './imagenes/fiat500.png'),
(6, 2, 'Ford Mustang', ' Philip T. Clark, Joe Oros Roberto Naranjo Perez', '1964 - presente', '23/04/2018', '23/04/2018', '<p>El Ford Mustang es un automóvil deportivo de la casa estadounidense Ford. Se basó inicialmente en la segunda generación del modelo estadounidense Ford Falcon, un vehículo del segmento D.1? Fue introducido al mercado el 17 de abril de 1964.2? El Mustang de 1965 fue el modelo más exitoso desde el Ford A.,3? así mismo Mustang es la tercera saga de Ford más antigua, cuyos modelos han sufrido numerosas transformaciones hasta llegar a la actual sexta generación.\r\n\r\nEl Mustang dio origen a una nueva clase de vehículo estadounidense denominado «pony car» — un coupé deportivo con largo capó delantero y corta parte trasera. —4? Ha tenido entre sus máximos rivales al Chevrolet Camaro de GM,5? el Javelin de AMC,6?el Dodge Challenger, y el renovado Plymouth Barracuda de Chrysler.7? También ha inspirado a modelos como el Toyota Celica y Ford Capri, que fueron importados posteriormente a Estados Unidos.</p>\r\n\r\n<p>Historia\r\nAunque se diga lo contrario, en aquella época y después de la segunda guerra mundial que dejó a Europa en condiciones lamentables, el mercado estadounidense gozaba de grandes automóviles con potencia, buen diseño, comportamiento, alta tecnología y prestaciones, mientras que en Europa, en los años cincuenta, marcas como Audi no producían ningún vehículo. No fue hasta los años ochenta cuando el mercado Europeo se niveló con el estadounidense siendo esto último de todas formas superior.8?\r\n\r\n\r\nPrimer prototipo del Ford mustang 1962.\r\nFord presentó el Thunderbird, que nació para competir directamente con el Chevrolet Corvette, el clásico superdeportivo estadounidense. El Thunderbird caló hondo en los clientes de la época, pero a comienzos de los años 60 comenzó a perder atractivo. Dado este motivo, Lee Iacocca, presidente de la Ford Motor Company junto a su equipo de Ford, comenzó a diseñar el sustituto del Thunderbird, el cual debía superar los estándares de este vehículo.\r\n\r\nEn 1961 Lee Iacocca vicepresidente de Ford Motor Company fundó el Comité Fairlane, el cual el punto de reunión era el mismo, el hotel Fairlane, la cual era para iniciar la búsqueda del auto casi perfecto. Como punto de partida, el coche debía ser más ligero comparado con vehículos pesados de 2 toneladas que se usaban en esa época, tenía que ser sencillo, económicamente accesible, y con todas las comodidades típicas de un vehículo de clase media, por lo tanto debía tener, asientos individuales, suaves acabados y palanca de cambios en el suelo. Regularmente, para atraer la mayor cantidad de público posible, este auto debería tener todas las opciones disponibles de accesorios, tipos de carrocería, color del coche, motor, transmisión manual o automática, etc.\r\n\r\nAnte la enorme cantidad de variantes del nuevo modelo, no hubo el tiempo suficiente para crear una base mecánica relativamente nueva. Varios elementos del chasis y suspensión fueron recuperados del Ford Falcon, y algunas otras partes de otros más modelos de la marca. Terminado los trabajos de diseño, se comenzó una labor de mucha importancia: el famoso marketing o mercadotecnia. Una forma de promoción fueron las \"fotos secretas\" del modelo a prueba, que aumentaron notablemente el interés por conocer el nuevo diamante de Ford. De esta manera se lanzó el Ford Mustang 64 1/2 durante la Feria Mundial de Nueva York el 17 de abril de 1964.</p>', './imagenes/fordmustang.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paginasinfo`
--

CREATE TABLE `paginasinfo` (
  `pagina` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `informacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paginasinfo`
--

INSERT INTO `paginasinfo` (`pagina`, `nombre`, `informacion`) VALUES
(1, 'Sobre nosotros', '<p>Bienvenidos al museo de automóvil</p>\r\n<p>Somos una empresa que comenzó con dos hermanos, Alberto Rodríguez y Alicia Rodríguez allá por 2018</p>\r\n<p>Actualmente somos la empresa ARS</p>\r\n<p>Somos unos \"locos\" del motor, y durante 20 años hemos estado recopilando coches para poder ofrecerlos al público y que conoscan más sobre estas maravillosas máquinas que aparte de transportarnos, nos ofrecen lujo y comodidad, acorde a cada año </p>\r\n<p>Actualmente somos la empresa ARS</p>\r\n<p>Esperamos disfruten con estas maravillas que les ofrecemos.</p>'),
(2, 'Contacto', 'Calle Periodista Daniel Saucedo Aranda, s/n • 18071 Granada\r\n\r\n958 24 28 02 • e-mail: ars@correo.ugr.es'),
(3, 'Localización museo', 'https://goo.gl/maps/FfzsBPpZW182'),
(4, 'Precios entrada', '<h2>Entrada individual general.</h2>\r\n<p>1. Se establece una entrada individual general al Museo Nacional del Prado, que\r\nincluye tanto el acceso a la Colección permanente como a las exposiciones temporales\r\nque, en su caso, sean coetáneas el día de la visita.\r\n2. El precio de la entrada individual general se establece en 15 euros.\r\n3. La adquisición de una entrada individual general da derecho a una única visita al\r\nMuseo, con validez de un día.</p>\r\n<p>4. Cuando se ofrezca al visitante exposiciones temporales complementarias a la\r\nvisita a la Colección permanente, la Dirección del Museo, en virtud de las características\r\nde éstas, podrá fijar mediante Resolución y previa aprobación de la Comisión Permanente\r\ndel Real Patronato del Museo Nacional del Prado, el precio de la entrada individual general\r\nal Museo.</p>\r\n\r\n<h2>Modalidades de entrada individual general.</h2>\r\n<p>1. Además de la entrada individual general descrita en el artículo 1, se definen\r\ndistintas modalidades de entrada individual general como medidas de fomento de la visita.\r\nTodas ellas, entradas de tarifa única a las que no se les aplicará ninguno de los tipos de\r\nreducción o de gratuidad que se contemplan en los artículos 3 y 6.\r\n2. En los casos en los que se modifique el precio de la entrada individual general al\r\nMuseo de acuerdo con lo indicado en el artículo 1.4, la totalidad de las modalidades de\r\nentrada individual general descritas en el artículo 2.3 de este artículo, verán modificado su\r\nprecio en la misma cuantía, salvo la entrada definida en el apartado 3. a) siguiente, que\r\nverá modificado su precio en el doble de dicha cuantía.\r\n3. Se definen las siguientes modalidades de entrada individual general:\r\na) Entrada individual general «2 visitas»:\r\n1. Esta entrada permite realizar dos visitas al Museo Nacional del Prado en días\r\ndiferentes dentro de un periodo de un año, a partir del día de la primera visita.\r\n2. El precio de la entrada individual general «2 visitas» se establece en 22 euros.\r\nb) Entrada individual general más ejemplar del libro «La guía del Prado»:\r\n1. El precio de la entrada individual general más ejemplar del libro La Guía del Prado\r\nse establece en 24 euros.\r\nc) Entrada individual general con validez de un año desde la fecha de compra:\r\n1. El precio de la entrada individual general con validez de un año desde la fecha de\r\ncompra se establece en 15 euros.\r\nd) Entrada individual general bonificada:\r\n1. Con el fin de promocionar la visita al Museo, se establece una bonificación como\r\nherramienta para incentivar la venta, en una única operación, de paquetes de entradas con\r\nacceso individual.</p>'),
(5, 'Colecciones', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabras`
--

CREATE TABLE `palabras` (
  `ID` int(10) NOT NULL,
  `Palabra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `palabras`
--

INSERT INTO `palabras` (`ID`, `Palabra`) VALUES
(1, 'polla'),
(2, 'pito'),
(3, 'pene'),
(4, 'culo'),
(5, 'caca'),
(6, 'hola'),
(7, 'pis'),
(8, 'picha'),
(9, 'puta'),
(10, 'putilla'),
(11, 'puton');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `tipo_usuario` varchar(30) NOT NULL,
  `contrasenia` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`tipo_usuario`, `contrasenia`, `correo`, `usuario`) VALUES
('1', 'adriana', 'adriana@ugr.es', 'La Adriana de Cogollos'),
('4', 'alberto', 'alberto@ugr.es', 'Alberto Rodriguez'),
('3', 'alicia', 'alicia@ugr.es', 'Alicia Rodriguez'),
('1', '99800b85d3383e3a2fb45eb7d0066a', 'ars@ugr.es', 'albertito'),
('1', 'nueva', 'jose@ugr.es', 'joselinNuevo'),
('2', 'marta', 'marta@ugr.es', 'Marta Rosa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colecciones`
--
ALTER TABLE `colecciones`
  ADD PRIMARY KEY (`id_coleccion`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`Correo`);

--
-- Indices de la tabla `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`indice`);

--
-- Indices de la tabla `paginasinfo`
--
ALTER TABLE `paginasinfo`
  ADD PRIMARY KEY (`pagina`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colecciones`
--
ALTER TABLE `colecciones`
  MODIFY `id_coleccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2019 a las 21:46:07
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `readzonedb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE `books` (
  `id_book` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `autor` varchar(50) NOT NULL,
  `imagen` text NOT NULL,
  `total_likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_book`, `tipo`, `titulo`, `descripcion`, `autor`, `imagen`, `total_likes`) VALUES
(1, 'Novela', 'Againts the Gods', 'Un joven estÃ¡ siendo perseguido por varias personas porque Ã©l poseÃ­a un tesoro Ãºnico. Debido a ello decidiÃ³ saltar desde un acantilado para no dejar que ninguno de ellos lo obtuviera, en el momento en el que cayÃ³ despertÃ³ en el cuerpo de un niÃ±o con el mismo nombre en otro mundo. Afortunadamente, el tesoro con el que salto se mantuvo con el.', 'Mars Gravity', './imagenes/libros/22.jpg', 2),
(2, 'Novela', 'Tales of Demons and Gods', 'Nie Li, el mÃ¡s fuerte espiritista demonÃ­aco. En su vida pasada estuvo en la cima del mundo marcial sin embargo, perdiÃ³ la vida durante su batalla con el Sabio Emperador, y fue devuelto al pasado cuando tenÃ­a 13 aÃ±os. Aunque Ã©l es el mÃ¡s dÃ©bil de su clase, con ayuda de los vastos conocimientos que acumulÃ³ en su vida anterior, se transformara en un guerrero como ninguno.', 'Mad Snail', './imagenes/libros/1.jpg', 1),
(3, 'Novela', 'Martial God Azure', 'En tÃ©rminos de potencial: incluso si no eres un genio,puedes aprender tÃ©cnicas y habilidades marciales incluso puedes aprender sin un instructor.\r\nEn tÃ©rminos de fuerza:incluso si tienes un millÃ³n de tesoros,nunca podrÃ¡s vencer mi grandiosa fuerza mundial espiritista.\r\nÂ¿QuÃ© quien soy yo? Todas las cosas vivientes me llaman Asura. Como sea, no sabia nada de eso.asÃ­ que como Asura,me convertÃ­ en Dios marcial.', 'Kindhearted Bee', './imagenes/libros/2.jpg', 0),
(4, 'Novela', 'El SeÃ±or de los Anillos', 'En la Tierra Media, el SeÃ±or Oscuro SaurÃ³n ordenÃ³ a los Elfos que forjaran los Grandes Anillos de Poder. Tres para los reyes Elfos, siete para los SeÃ±ores Enanos, y nueve para los Hombres Mortales. Pero SaurÃ³n tambiÃ©n forjÃ³, en secreto, el Anillo Ãšnico, que tiene el poder de esclavizar toda la Tierra Media. Con la ayuda de sus amigos y de valientes aliados, el joven hobbit Frodo emprende un peligroso viaje con la misiÃ³n de destruir el Anillo Ãšnico. Pero el malvado Sauron ordena la persecuciÃ³n del grupo, compuesto por Frodo y sus leales amigos hobbits, un mago, un hombre, un elfo y un enano. La misiÃ³n es casi suicida pero necesaria, pues si Sauron con su ejÃ©rcito de orcos lograra recuperar el Anillo, serÃ­a el final de la Tierra Media. ', 'J. R. R. Tolkien', './imagenes/libros/4.png', 0),
(5, 'Novela', 'Harry Potter', 'El dÃ­a en que cumple once aÃ±os, Harry Potter se entera de que es hijo de dos destacados hechiceros, de los que ha heredado poderes mÃ¡gicos. En la escuela Hogwarts de Magia y HechicerÃ­a, donde se educa con otros niÃ±os que tambiÃ©n tienen poderes especiales, aprenderÃ¡ todo lo necesario para ser mago. ', ' J. K. Rowling', './imagenes/libros/25.jpg', 3),
(6, 'Manga', 'One Piece', 'Una historia Ã©pica de piratas, donde narra la historia de \"Monkey D. Luffy\" quien cuado tenia 7 aÃ±os, comiÃ³ accidentalmente una \"Akuma no mi\"(Futa del diablo) la cual le dio poderes de goma. Por otra parte \"Gol D. Roger\" conocido como \"El rey de los Piratas\" quien fuera ejecutado por la Marine, hablÃ³ antes de morir, acerca de su famoso tesoro \"One Piece\" escondido en la \"Gran line\". Esta noticia desato la gran era de la piratas lanzando a incontables piratas a ese lugar, en busca de \"One Piece\" el tesoro perdido. Diez aÃ±os despuÃ©s, Luffy inspirado en \"Gol D. Roger\" y un pirata de nombre Akagami no Shanks (Shanks el pelirrojo) se convierte en pirata deseando ser el prÃ³ximo \"Rey de los Piratas\" y zarpar para conocer amigos y tener aventuras con ellos, teniendo como meta encontrar el \"One Piece\".\r\n', 'EiichirÅ Oda', './imagenes/libros/3.jpg', 2),
(7, 'Manga', 'Fairy Tail', 'Fairy Tail cuenta la historia de un joven mago llamado Natsu en la bÃºsqueda de su maestro y padre adoptivo Igneel que resulta ser un dragÃ³n. Por ello se uniÃ³ a Fairy Tail, un gremio de magos que es famoso por los destrozos y daÃ±os que provocan en diversas ciudades (lo cual no deberÃ­a ser asÃ­). El mundo de Fairy Tail gira alrededor de los magos (los cuales poco tienen que ver con la idea general del mago comÃºn) que realizan encargos a cambio de dinero, similar a un cazarecompensas. Natsu conoce a Lucy, una guapa muchacha cuyo sueÃ±o era ingresar a un gremio de magos, especÃ­ficamente, a Fairy Tail, lo cual consigue gracias a la ayuda de Natsu. De ahÃ­ en adelante, la historia sigue los movimientos de esta pareja de magos los cuales se ven envueltos en un sin nÃºmero de aventuras antes de conseguir la meta final de encontrar a Igneel.', 'Hiro Mashima', './imagenes/libros/4.jpg', 1),
(8, 'Manga', 'Bleach', 'Kurosaki Ichigo es un estudiante de instituto de 15 aÃ±os, que tiene una peculiaridad: es capaz de ver, oÃ­r y hablar con fantasmas. Pero no sabe hasta dÃ³nde puede abarcar la clasificaciÃ³n de espÃ­ritus, ni lo que conlleva el saberlo. Un buen dÃ­a, una extraÃ±a chica de pequeÃ±a estatura que viste ropas negras de samurai entra en su cuarto. Se llama Rukia Kuchiki, y es una Shinigami (Dios de la Muerte). Ante la incredulidad de Ichigo, le explica que su trabajo es mandar a las almas buenas o plus a un lugar llamado la Sociedad de Almas, y eliminar a las almas malignas o hollows. Luego junto a Inoue Orihime, Ishida Ury y Sado Yasutora se veran envueltos en diferentes batallas, las cuales iran desarrollando sus diferentes habilidades que le otorgaran a cada uno su importancia en la serie.', 'Tite Kubo', './imagenes/libros/8.png', 0),
(9, 'Manga', 'Shokugeki no Souma', 'El sueÃ±o de Yukihira Souma es convertirse en un chef de tiempo completo en el restorÃ¡n de su padre y sobrepasar su habilidad culinaria. Cuando Yukihira se gradÃºa de secundaria, su padre, Yukihira Jouichirou, cierra su restorÃ¡n para ir a cocinar a europa. Aunque derrotado, el espÃ­ritu luchador de Souma es reavivado por un desafÃ­o de Jouchirou, el cual es sobrevivir en una escuela de Ã©lite culinario donde solo el 10% de los estudiantes logra graduarse. Â¿PodrÃ¡ Souma lograrlo?', 'YÅ«to Tsukuda', './imagenes/libros/9.png', 1),
(10, 'Manga', 'Tokyo Ghoul', 'ExtraÃ±os asesinatos se estÃ¡n sucediendo uno tras otro en Tokyo. Debido a las pruebas encontradas en las escenas, la policÃ­a concluye que los ataques son obra de ghouls que se comen a las personas. Kaneki y Hide, dos compaÃ±eros de clase, llegan a la conclusiÃ³n de que si nadie ha visto nunca a esos necrÃ³fagos es porque toman la apariencia de seres humanos para ocultarse. Poco sabÃ­an entonces de que su teorÃ­a serÃ­a mÃ¡s cierta de lo que pensaban cuando Kaneki es herido de gravedad por un monstruo y comienza a atraerle cada vez mÃ¡s la carne humanaâ€¦', 'Sui Ishida', './imagenes/libros/10.png', 0),
(11, 'Comic', 'The Walking Dead', 'Herido por una bala durante el cumplimiento de su deber, el agente de policÃ­a de Kentucky Rick Grimes despierta en el hospital tras pasar meses en coma solo para encontrar su ciudad plagada de cadÃ¡veres andantes. Con el Ã¡nimo de volver a encontrar a su familia, el hombre viaja a Atlanta, Georgia en busca de su esposa e hijo, y los encuentra en un pequeÃ±o campamento de sobreviviente en las afueras de la ciudad en ruinas. Liderando a este pequeÃ±o grupo de personas, Rick harÃ¡ hasta lo imposible por continuar con vida y poco a poco se ira dando cuenta que existen cosas mucho peores que los cadÃ¡veres ansiosos de carne fresca.', 'Robert Kirkman, Tony Moore', './imagenes/libros/24.png', 1),
(12, 'Comic', 'CapitÃ¡n AmÃ©rica', 'Un joven enclenque Steve Rogers estaba decidido en ayudar en la guerra. Pero no fue apto para el servicio.\r\nSte Rogers se presentÃ³ a unas pruebas con el profesor Reinstein para convertirse en un supersoldado. Un nazi disparÃ³ al profesor y Ã©l fue el Ãºnico supersoldado.\r\nEl gobierno lo convirtiÃ³ en el CapitÃ¡n AmÃ©rica, un idealista americano. Su escudo mÃ¡s tarde fue cambiado a uno circular.', 'Marvel Comics', './imagenes/libros/12.png', 1),
(13, 'Comic', 'Spiderman', 'Un tÃ­mido estudiante se vuelve en un luchador contra el crimen, desde que la picadura de una araÃ±a mutante le da poderes extraordinarios.', 'Marvel Comics', './imagenes/libros/13.png', 2),
(14, 'Comic', 'Viuda Negra', 'La primera y mÃ¡s conocida Viuda Negra, es una agente rusa entrenada como espÃ­a, artista marcial y francotiradora, y equipada con un arsenal de armas de alta tecnologÃ­a, que incluye un par de armas energÃ©ticas montadas en la muÃ±eca y apodada \"Piquete de la Viuda\". No usa vestimenta durante sus primeras apariciones, sino simplemente ropa de noche y un velo. Romanova eventualmente se transforma en estadounidense por razones que incluyen su amor por el arquero convertido en superhÃ©roe, Hawkeye.', 'Marvel Comics', './imagenes/libros/14.png', 0),
(15, 'Comic', 'Batman', 'Cinta basada en el cÃ³mic homÃ³nimo. La oscura y peligrosa ciudad de Gotham tan sÃ³lo se halla protegida por su corrupto cuerpo de policÃ­a. A pesar de los esfuerzos del fiscal del distrito Harvey Dent y el comisionado de policÃ­a Jim Gordon, la ciudad es cada vez mÃ¡s insegura hasta que aparece Batman, el SeÃ±or de la Noche. La reputada periodista Vicky Vale intentarÃ¡ descubrir el secreto que se oculta tras el hombre murciÃ©lago.', 'Marvel Comics', './imagenes/libros/15.png', 1),
(16, 'Novela', 'Tate no Yusha no Nariagari', 'Naofumi Iwatani un joven universitario y otaku, se ve transportado repentinamente a un mundo desconocido despuÃ©s de leer un libro de fantasÃ­a que encontrÃ³ por casualidad. Ã‰l, junto a otras tres personas, ha sido invocado como uno de los HÃ©roes Legendarios que salvaran al mundo de las \"Oleadas de la Calamidad\". Desde ese momento, Naofumi, como el â€œHÃ©roe del Escudoâ€ deberÃ¡ prepararse para cumplir con su destino.', 'Yusagi Aneko', './imagenes/libros/17.jpg', 2),
(17, 'Novela', 'Sword Art Online', 'El jugador solitario Kirito, quien habÃ­a tenido la fortuna de jugar la versiÃ³n beta, fue atrapado junto con muchos otros jugadores de Sword Art Online (SAO) en el interior del juego. Sin poder salir, la Ãºnica manera de vivir es ganar. La muerte en el juego significa la muerte en el mundo real, debido a la manipulaciÃ³n del NerveGear, la consola que simula los controles de los personajes en el juego mediante la reorientaciÃ³n de las seÃ±ales cerebrales. Para salir del juego es necesario derrotar al jefe final en el piso 100. Dos aÃ±os mÃ¡s tarde, de los originales 10.000 jugadores que ingresaron, sÃ³lo 6.000 permanecen y 74 pisos han sido despejados.', 'Reki Kawahara', './imagenes/libros/16.png', 0),
(18, 'Manga', 'One Punch-Man', 'Â¡Sigue la vida de un hÃ©roe promedio que gana todas sus peleas con un solo puÃ±o! Esto es causa de un montÃ³n de frustraciÃ³n y ahora ya no se siente la adrenalina y la emociÃ³n de una dura pelea. Tal vez ese riguroso entrenamiento para volverse fuerte no valiÃ³ la pena. DespuÃ©s de todo, Â¿QuÃ© tiene de bueno tener un poder tan aplastante?', 'One', './imagenes/libros/18.jpg', 0),
(20, 'Manga', 'Darling in the FranXX', 'La historia se desarrolla en un futuro distante donde la tierra esta arruinada y la humanidad se ha establecido en un fuerte mobil llamado Ciudad Plantation. Los pilotos producidos dentro de Plantation viven en Mistilteinn tambiÃ©n conocida como \"la jaula de pÃ¡jaros,\" los niÃ±os viven ahÃ­ ignorando por completo el mundo exterior o la libertad del cielo. Sus vidas consisten en realizar misiones en contra de sus enemigos, quienes son unas formas de vida gigantes y misteriosas llamadas Kyouryuu y son los niÃ±os quienes pilotean los robots FranXX los cuales deben enfrentarse a ellos. Para los niÃ±os montar a los FranXX no es mas que una prueba de su existencia. Un chico llamado cÃ³digo 016, fue alguna vez conocido como un prodigio, sin embargo, se ha quedado detrÃ¡s y su existencia parece ser innecesaria. \"No pilotear un FranXX es lo mismo que dejar de existir.\" Un dÃ­a, una misteriosa chica conocida como \"Zero Two\" aparece frente a el, con dos cuernos en su cabeza...', 'Kentaro Yabuki', './imagenes/libros/19.png', 0),
(21, 'Comic', 'Capitana Marvel', 'Carol Susan Jane Danvers comenzÃ³ su carrera en la fuerza aÃ©rea de Estados Unidos y llegÃ³ hasta el puesto de jefe de seguridad de Cabo CaÃ±averal. AllÃ­ se vio relacionada con el CapitÃ¡n Marvel, un soldado Kree que desertarÃ­a de sus funciones para proteger a la Tierra de su propio mundo.', 'Marvel Comics', './imagenes/libros/20.jpg', 0),
(22, 'Comic', 'Superman', 'Cuando Clark madurÃ³, la gravedad de la Tierra (mÃ¡s leve que la de Krypton) y los rayos de su sol amarillo le dieron poderes mucho mÃ¡s allÃ¡ de los de la gente normal, poderes que explorÃ³ durante un viaje alrededor del mundo en busca de pistas acerca de su origen. MÃ¡s tarde, diseÃ±Ã³ un disfraz basado en lo que habÃ­a aprendido de su herencia kryptoniana y adoptÃ³ el nombre que le dio la reportera Lois Lane, luchando por la verdad y la justicia como \"Superman\". Ocultando su identidad de Superman, concienzuda tarea, Clark (que habÃ­a desarrollado un gusto por el periodismo) consiguiÃ³ un trabajo en el Daily Planet de Metropolis. AhÃ­, Ã©l y Lois comenzaron como rivales pero se hicieron compaÃ±eros.', 'Marvel Comics', './imagenes/libros/21.jpg', 0),
(26, 'Novela', 'Overlord', 'En el aÃ±o 2126, se decide descontinuar el DMMORPG Yggdrasil, un juego que ha sido el mÃ¡s popular durante los Ãºltimos doce aÃ±os, pero que ha caÃ­do en desuso con el tiempo. El dÃ­a que debÃ­an cerrarse los servidores del juego, Momonga, lÃ­der del gremio Ainz Ooal Gown, una vez compuesto por 41 miembros y acreditado como uno de los gremios mÃ¡s fuertes del juego, decide permanecer en lÃ­nea hasta que el juego sea cerrado a modo de despedida de ese lugar tan especial para Ã©l.', 'Maruyama Kugane', './imagenes/libros/5.jpg', 0),
(49, 'Manga', 'Tester libro manga update', 'update desc tester', 'autor tester update', './imagenes/libros/Dafault.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books_chapter`
--

CREATE TABLE `books_chapter` (
  `id_cap_libro` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `capitulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `books_chapter`
--

INSERT INTO `books_chapter` (`id_cap_libro`, `id_book`, `capitulo`) VALUES
(8, 49, './imagenes/capitulos/Tester libro manga update/2/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books_genders`
--

CREATE TABLE `books_genders` (
  `id_librogenero` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_genero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `books_genders`
--

INSERT INTO `books_genders` (`id_librogenero`, `id_book`, `id_genero`) VALUES
(28, 16, 1),
(29, 16, 2),
(30, 16, 9),
(31, 16, 15),
(48, 18, 1),
(49, 18, 2),
(50, 18, 4),
(51, 18, 13),
(60, 21, 1),
(61, 21, 4),
(62, 21, 9),
(82, 17, 1),
(83, 17, 2),
(84, 17, 9),
(85, 17, 14),
(89, 22, 1),
(90, 22, 4),
(91, 22, 9),
(105, 1, 5),
(106, 1, 15),
(107, 1, 16),
(135, 11, 1),
(136, 11, 2),
(137, 11, 4),
(138, 11, 6),
(139, 11, 8),
(140, 11, 9),
(141, 11, 12),
(142, 11, 14),
(143, 11, 16),
(144, 5, 1),
(145, 5, 2),
(146, 5, 9),
(147, 5, 12),
(148, 5, 14),
(232, 2, 1),
(233, 2, 2),
(234, 2, 9),
(235, 2, 14),
(236, 3, 1),
(237, 3, 2),
(238, 3, 6),
(239, 3, 9),
(240, 3, 14),
(241, 3, 15),
(248, 4, 1),
(249, 4, 4),
(250, 4, 6),
(251, 4, 9),
(252, 4, 12),
(253, 4, 14),
(254, 6, 1),
(255, 6, 2),
(256, 6, 9),
(257, 7, 1),
(258, 7, 2),
(259, 7, 9),
(260, 7, 14),
(261, 8, 1),
(262, 8, 4),
(263, 8, 6),
(264, 8, 14),
(267, 9, 3),
(268, 9, 7),
(269, 10, 1),
(270, 10, 4),
(271, 10, 6),
(272, 10, 8),
(273, 10, 12),
(274, 10, 14),
(277, 12, 1),
(278, 12, 4),
(279, 13, 1),
(280, 13, 3),
(281, 13, 4),
(282, 13, 14),
(283, 14, 1),
(284, 14, 4),
(285, 15, 1),
(286, 15, 4),
(294, 20, 1),
(295, 20, 3),
(296, 20, 4),
(297, 20, 8),
(298, 20, 9),
(299, 20, 13),
(300, 20, 14),
(301, 26, 1),
(302, 26, 2),
(303, 26, 3),
(304, 26, 6),
(305, 26, 8),
(306, 26, 9),
(307, 26, 12),
(308, 26, 16),
(350, 49, 1),
(351, 49, 16),
(352, 49, 7),
(353, 49, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books_genders_values`
--

CREATE TABLE `books_genders_values` (
  `id_book_gender` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `valores` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books_likes`
--

CREATE TABLE `books_likes` (
  `id_book_score` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books_score`
--

CREATE TABLE `books_score` (
  `id_book_score` int(11) NOT NULL,
  `like_libro` int(11) NOT NULL,
  `dislike_libro` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `books_score`
--

INSERT INTO `books_score` (`id_book_score`, `like_libro`, `dislike_libro`, `id_user`, `id_book`) VALUES
(1, 1, 0, 9, 6),
(2, 0, 1, 9, 7),
(3, 1, 0, 9, 15),
(4, 1, 0, 9, 1),
(5, 1, 0, 1, 2),
(6, 0, 0, 1, 11),
(7, 0, 1, 1, 1),
(8, 1, 0, 1, 6),
(9, 1, 0, 3, 11),
(10, 0, 0, 15, 1),
(11, 1, 0, 9, 16),
(13, 0, 1, 15, 2),
(15, 1, 0, 3, 16),
(16, 1, 0, 9, 5),
(17, 1, 0, 1, 5),
(18, 1, 0, 3, 5),
(19, 1, 0, 3, 7),
(20, 0, 1, 16, 5),
(21, 0, 0, 16, 1),
(22, 0, 0, 18, 5),
(23, 1, 0, 21, 1),
(24, 1, 0, 9, 9),
(25, 0, 0, 22, 1),
(26, 0, 1, 22, 11),
(27, 1, 0, 9, 12),
(28, 0, 0, 9, 26),
(29, 1, 0, 9, 13),
(30, 0, 1, 9, 11),
(31, 1, 0, 1, 13),
(32, 0, 1, 28, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE `genders` (
  `id_genero` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`id_genero`, `nombre`) VALUES
(1, 'AcciÃ³n'),
(2, 'Aventura'),
(3, 'Comedia'),
(4, 'Ciencia FicciÃ³n'),
(5, 'Ciberpunk'),
(6, 'Drama'),
(7, 'Deporte'),
(8, 'Thriller'),
(9, 'Fantasia'),
(10, 'Militar'),
(11, 'Historia'),
(12, 'Misterio'),
(13, 'Mecha'),
(14, 'Romance'),
(15, 'ReencarnaciÃ³n'),
(16, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_books`
--

CREATE TABLE `list_books` (
  `id_list` int(11) NOT NULL,
  `nombre_lista` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_book` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `list_books`
--

INSERT INTO `list_books` (`id_list`, `nombre_lista`, `id_user`, `id_book`) VALUES
(62, 'Lista usuario 1 2', 16, NULL),
(67, 'Lista nueva 3', 18, NULL),
(79, 'lsita nueva 2', 21, NULL),
(164, 'Lista 1', 22, NULL),
(168, 'Lista 1', 22, 1),
(170, 'Lista 1', 22, NULL),
(172, 'Lista 1', 22, NULL),
(176, 'Lista 2', 22, NULL),
(177, 'Lista 2', 22, NULL),
(178, 'Lista 2', 22, 9),
(207, 'Lista 2 admin', 9, NULL),
(208, 'Lista 1 admin', 9, 1),
(209, 'Lista 1 admin', 9, 5),
(211, 'Lista 2 tester', 28, NULL),
(213, 'Lista 2 tester', 28, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `fecha_cumpleanos` date NOT NULL,
  `imagen_perfil` text NOT NULL,
  `pregunta` varchar(100) NOT NULL,
  `respuesta` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `nombre`, `correo`, `contrasena`, `sexo`, `fecha_cumpleanos`, `imagen_perfil`, `pregunta`, `respuesta`, `estado`) VALUES
(1, 'Cristian', 'cristian.urrea4@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hombre', '1970-01-01', './imagenes/perfiles/5334107-wallpaper-mountain.jpg', '', '', 0),
(3, 'Miyuki update', 'miyuki@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'mujer', '2019-04-16', './imagenes/perfiles/maxresdefault.jpg', '', '', 0),
(4, 'test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 'hombre', '0000-00-00', './imagenes/perfiles/Logo-TMB.svg.png', '', '', 0),
(5, 'juan', 'juan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '2019-01-22', './imagenes/perfiles/Logo-TMB.svg.png', '', '', 0),
(6, 'pablo', 'pablo@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', './imagenes/perfiles/logo-meetmaps.jpg', '', '', 0),
(7, 'test2', 'test2@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '', '', '', 0),
(8, 'Oriol', 'oriollasalle@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', './imagenes/perfiles/descarga.png', '', '', 0),
(9, 'Admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2019-05-21', './imagenes/perfiles/descarga.png', '', '', 0),
(10, 'Meetmaps', 'meetmaps@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', '', '', '', 0),
(11, 'prueba', 'prueba@p.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', './imagenes/perfiles/descarga.png', '', '', 0),
(12, 'testeo', 'testeo@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', './imagenes/perfiles/cue_localization__269496.png', '', '', 0),
(13, 'Saul', 'saul@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '0000-00-00', './imagenes/perfiles/default.png', 'Â¿Cual es el nombre de tu mascota?', 'mascota', 0),
(14, 'pepe', 'pepe@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '', '0000-00-00', './imagenes/perfiles/default.png', 'Â¿Cual es el nombre de tu mascota?', 'mascota1', 0),
(15, 'Tatsuya', 'tatsuya@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '', '2019-02-08', './imagenes/perfiles/1.png', 'Â¿Cual es el nombre de tu mejor amigo?', 'Daniel', 0),
(16, 'Usuario nuevo', 'usertest@gmail.com', '202cb962ac59075b964b07152d234b70', '', '2014-12-10', './imagenes/perfiles/3.png', 'Â¿Cual es el nombre de tu mejor amigo?', 'Antonio', 0),
(17, 'asd', 'asd@1', 'c4ca4238a0b923820dcc509a6f75849b', '', '0000-00-00', './imagenes/perfiles/default.png', 'Â¿Cual es el nombre de tu mascota?', '1', 0),
(18, 'testeo4 update', 'testeo4@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '2015-02-11', './imagenes/perfiles/4.png', 'Â¿En que ciudad naciste?pregunta3', 'Barcelona', 0),
(19, 'Jordi', 'jordi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '0000-00-00', './imagenes/perfiles/default.png', 'Â¿Cual es el nombre de tu mascota?', 'Mascota', 0),
(20, 'testeo55 update', 'testeo55@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '2019-04-16', './imagenes/perfiles/7.png', 'Â¿Cual es el nombre de tu mascota?', 'Pepe', 1),
(21, 'dasdasd eeee', 'asdasd@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '', '2019-04-23', './imagenes/perfiles/1.png', 'Â¿Cual es el nombre de tu mascota?', '123', 0),
(22, 'kirito 2', 'kirito@gmail.com', '202cb962ac59075b964b07152d234b70', '', '2014-05-22', './imagenes/perfiles/5.png', 'Â¿Cual es el nombre de tu mascota?', 'mascota kirito', 0),
(27, 'prueva33', 'prueva33@gmail.com', 'c20ad4d76fe97759aa27a0c99bff6710', '', '0000-00-00', './imagenes/perfiles/default.png', 'Â¿Cual es el nombre de tu mascota?', 'mascota', 0),
(28, 'Tester Editado', 'tester@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2019-05-02', './imagenes/perfiles/default.png', 'Â¿Cual es el nombre de tu mascota?', 'mascota', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_book`);

--
-- Indices de la tabla `books_chapter`
--
ALTER TABLE `books_chapter`
  ADD PRIMARY KEY (`id_cap_libro`),
  ADD KEY `id_book` (`id_book`);

--
-- Indices de la tabla `books_genders`
--
ALTER TABLE `books_genders`
  ADD PRIMARY KEY (`id_librogenero`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `books_genders_values`
--
ALTER TABLE `books_genders_values`
  ADD PRIMARY KEY (`id_book_gender`),
  ADD KEY `id_book` (`id_book`);

--
-- Indices de la tabla `books_likes`
--
ALTER TABLE `books_likes`
  ADD PRIMARY KEY (`id_book_score`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `books_score`
--
ALTER TABLE `books_score`
  ADD PRIMARY KEY (`id_book_score`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `list_books`
--
ALTER TABLE `list_books`
  ADD PRIMARY KEY (`id_list`),
  ADD KEY `id_book` (`id_book`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `books_chapter`
--
ALTER TABLE `books_chapter`
  MODIFY `id_cap_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `books_genders`
--
ALTER TABLE `books_genders`
  MODIFY `id_librogenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=354;

--
-- AUTO_INCREMENT de la tabla `books_genders_values`
--
ALTER TABLE `books_genders_values`
  MODIFY `id_book_gender` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `books_likes`
--
ALTER TABLE `books_likes`
  MODIFY `id_book_score` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `books_score`
--
ALTER TABLE `books_score`
  MODIFY `id_book_score` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `list_books`
--
ALTER TABLE `list_books`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `books_chapter`
--
ALTER TABLE `books_chapter`
  ADD CONSTRAINT `books_chapter_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`);

--
-- Filtros para la tabla `books_genders`
--
ALTER TABLE `books_genders`
  ADD CONSTRAINT `books_genders_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `books_genders_ibfk_2` FOREIGN KEY (`id_genero`) REFERENCES `genders` (`id_genero`);

--
-- Filtros para la tabla `books_genders_values`
--
ALTER TABLE `books_genders_values`
  ADD CONSTRAINT `books_genders_values_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`);

--
-- Filtros para la tabla `books_likes`
--
ALTER TABLE `books_likes`
  ADD CONSTRAINT `books_likes_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `books_likes_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `books_score`
--
ALTER TABLE `books_score`
  ADD CONSTRAINT `books_score_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `books_score_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `list_books`
--
ALTER TABLE `list_books`
  ADD CONSTRAINT `list_books_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `list_books_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

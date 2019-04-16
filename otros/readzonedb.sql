-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2019 a las 18:02:19
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
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_book`, `tipo`, `titulo`, `descripcion`, `autor`, `imagen`) VALUES
(1, 'Novela', 'Againts the Gods', 'Un joven estÃ¡ siendo perseguido por varias personas porque Ã©l poseÃ­a un tesoro Ãºnico. Debido a ello decidiÃ³ saltar desde un acantilado para no dejar que ninguno de ellos lo obtuviera, en el momento en el que cayÃ³ despertÃ³ en el cuerpo de un niÃ±o con el mismo nombre en otro mundo. Afortunadamente, el tesoro con el que salto se mantuvo con el.', '', './imagenes/libros/1.png'),
(2, 'Novela', 'Tales of Demons and Gods', 'Nie Li, el mÃ¡s fuerte espiritista demonÃ­aco. En su vida pasada estuvo en la cima del mundo marcial sin embargo, perdiÃ³ la vida durante su batalla con el Sabio Emperador, y fue devuelto al pasado cuando tenÃ­a 13 aÃ±os. Aunque Ã©l es el mÃ¡s dÃ©bil de su clase, con ayuda de los vastos conocimientos que acumulÃ³ en su vida anterior, se transformara en un guerrero como ninguno.\r\n\r\n', '', './imagenes/libros/2.png'),
(3, 'Novela', 'Martial God Azure', 'En tÃ©rminos de potencial: incluso si no eres un genio,puedes aprender tÃ©cnicas y habilidades marciales incluso puedes aprender sin un instructor.\r\nEn tÃ©rminos de fuerza:incluso si tienes un millÃ³n de tesoros,nunca podrÃ¡s vencer mi grandiosa fuerza mundial espiritista.\r\nÂ¿QuÃ© quien soy yo? Todas las cosas vivientes me llaman Asura. Como sea, no sabia nada de eso.asÃ­ que como Asura,me convertÃ­ en Dios marcial.', '', './imagenes/libros/3.png'),
(4, 'Novela', 'El SeÃ±or de los Anillos', 'En la Tierra Media, el SeÃ±or Oscuro SaurÃ³n ordenÃ³ a los Elfos que forjaran los Grandes Anillos de Poder. Tres para los reyes Elfos, siete para los SeÃ±ores Enanos, y nueve para los Hombres Mortales. Pero SaurÃ³n tambiÃ©n forjÃ³, en secreto, el Anillo Ãšnico, que tiene el poder de esclavizar toda la Tierra Media. Con la ayuda de sus amigos y de valientes aliados, el joven hobbit Frodo emprende un peligroso viaje con la misiÃ³n de destruir el Anillo Ãšnico. Pero el malvado Sauron ordena la persecuciÃ³n del grupo, compuesto por Frodo y sus leales amigos hobbits, un mago, un hombre, un elfo y un enano. La misiÃ³n es casi suicida pero necesaria, pues si Sauron con su ejÃ©rcito de orcos lograra recuperar el Anillo, serÃ­a el final de la Tierra Media. ', '', './imagenes/libros/4.png'),
(5, 'Novela', 'Harry Potter', 'El dÃ­a en que cumple once aÃ±os, Harry Potter se entera de que es hijo de dos destacados hechiceros, de los que ha heredado poderes mÃ¡gicos. En la escuela Hogwarts de Magia y HechicerÃ­a, donde se educa con otros niÃ±os que tambiÃ©n tienen poderes especiales, aprenderÃ¡ todo lo necesario para ser mago. ', '', './imagenes/libros/5.png'),
(6, 'Manga', 'One Piece', 'Una historia Ã©pica de piratas, donde narra la historia de \"Monkey D. Luffy\" quien cuado tenia 7 aÃ±os, comiÃ³ accidentalmente una \"Akuma no mi\"(Futa del diablo) la cual le dio poderes de goma. Por otra parte \"Gol D. Roger\" conocido como \"El rey de los Piratas\" quien fuera ejecutado por la Marine, hablÃ³ antes de morir, acerca de su famoso tesoro \"One Piece\" escondido en la \"Gran line\". Esta noticia desato la gran era de la piratas lanzando a incontables piratas a ese lugar, en busca de \"One Piece\" el tesoro perdido. Diez aÃ±os despuÃ©s, Luffy inspirado en \"Gol D. Roger\" y un pirata de nombre Akagami no Shanks (Shanks el pelirrojo) se convierte en pirata deseando ser el prÃ³ximo \"Rey de los Piratas\" y zarpar para conocer amigos y tener aventuras con ellos, teniendo como meta encontrar el \"One Piece\".\r\n', '', './imagenes/libros/6.png'),
(7, 'Manga', 'Fairy Tail', 'Fairy Tail cuenta la historia de un joven mago llamado Natsu en la bÃºsqueda de su maestro y padre adoptivo Igneel que resulta ser un dragÃ³n. Por ello se uniÃ³ a Fairy Tail, un gremio de magos que es famoso por los destrozos y daÃ±os que provocan en diversas ciudades (lo cual no deberÃ­a ser asÃ­). El mundo de Fairy Tail gira alrededor de los magos (los cuales poco tienen que ver con la idea general del mago comÃºn) que realizan encargos a cambio de dinero, similar a un cazarecompensas. Natsu conoce a Lucy, una guapa muchacha cuyo sueÃ±o era ingresar a un gremio de magos, especÃ­ficamente, a Fairy Tail, lo cual consigue gracias a la ayuda de Natsu. De ahÃ­ en adelante, la historia sigue los movimientos de esta pareja de magos los cuales se ven envueltos en un sin nÃºmero de aventuras antes de conseguir la meta final de encontrar a Igneel.', '', './imagenes/libros/7.png'),
(8, 'Manga', 'Bleach', 'Kurosaki Ichigo es un estudiante de instituto de 15 aÃ±os, que tiene una peculiaridad: es capaz de ver, oÃ­r y hablar con fantasmas. Pero no sabe hasta dÃ³nde puede abarcar la clasificaciÃ³n de espÃ­ritus, ni lo que conlleva el saberlo. Un buen dÃ­a, una extraÃ±a chica de pequeÃ±a estatura que viste ropas negras de samurai entra en su cuarto. Se llama Rukia Kuchiki, y es una Shinigami (Dios de la Muerte). Ante la incredulidad de Ichigo, le explica que su trabajo es mandar a las almas buenas o plus a un lugar llamado la Sociedad de Almas, y eliminar a las almas malignas o hollows. Luego junto a Inoue Orihime, Ishida Ury y Sado Yasutora se veran envueltos en diferentes batallas, las cuales iran desarrollando sus diferentes habilidades que le otorgaran a cada uno su importancia en la serie.', '', './imagenes/libros/8.png'),
(9, 'Manga', 'Shokugeki no Souma', 'El sueÃ±o de Yukihira Souma es convertirse en un chef de tiempo completo en el restorÃ¡n de su padre y sobrepasar su habilidad culinaria. Cuando Yukihira se gradÃºa de secundaria, su padre, Yukihira Jouichirou, cierra su restorÃ¡n para ir a cocinar a europa. Aunque derrotado, el espÃ­ritu luchador de Souma es reavivado por un desafÃ­o de Jouchirou, el cual es sobrevivir en una escuela de Ã©lite culinario donde solo el 10% de los estudiantes logra graduarse. Â¿PodrÃ¡ Souma lograrlo?', '', './imagenes/libros/9.png'),
(10, 'Manga', 'Tokyo Ghoul', 'ExtraÃ±os asesinatos se estÃ¡n sucediendo uno tras otro en Tokyo. Debido a las pruebas encontradas en las escenas, la policÃ­a concluye que los ataques son obra de ghouls que se comen a las personas. Kaneki y Hide, dos compaÃ±eros de clase, llegan a la conclusiÃ³n de que si nadie ha visto nunca a esos necrÃ³fagos es porque toman la apariencia de seres humanos para ocultarse. Poco sabÃ­an entonces de que su teorÃ­a serÃ­a mÃ¡s cierta de lo que pensaban cuando Kaneki es herido de gravedad por un monstruo y comienza a atraerle cada vez mÃ¡s la carne humanaâ€¦', '', './imagenes/libros/10.png'),
(11, 'Comic', 'The Walking Dead', 'Herido por una bala durante el cumplimiento de su deber, el agente de policÃ­a de Kentucky Rick Grimes despierta en el hospital tras pasar meses en coma solo para encontrar su ciudad plagada de cadÃ¡veres andantes. Con el Ã¡nimo de volver a encontrar a su familia, el hombre viaja a Atlanta, Georgia en busca de su esposa e hijo, y los encuentra en un pequeÃ±o campamento de sobreviviente en las afueras de la ciudad en ruinas. Liderando a este pequeÃ±o grupo de personas, Rick harÃ¡ hasta lo imposible por continuar con vida y poco a poco se ira dando cuenta que existen cosas mucho peores que los cadÃ¡veres ansiosos de carne fresca.', '', './imagenes/libros/11.png'),
(12, 'Comic', 'CapitÃ¡n AmÃ©rica', 'Un joven enclenque Steve Rogers estaba decidido en ayudar en la guerra. Pero no fue apto para el servicio.\r\nSte Rogers se presentÃ³ a unas pruebas con el profesor Reinstein para convertirse en un supersoldado. Un nazi disparÃ³ al profesor y Ã©l fue el Ãºnico supersoldado.\r\nEl gobierno lo convirtiÃ³ en el CapitÃ¡n AmÃ©rica, un idealista americano. Su escudo mÃ¡s tarde fue cambiado a uno circular.', '', './imagenes/libros/12.png'),
(13, 'Comic', 'Spiderman', 'Un tÃ­mido estudiante se vuelve en un luchador contra el crimen, desde que la picadura de una araÃ±a mutante le da poderes extraordinarios.', '', './imagenes/libros/13.png'),
(14, 'Comic', 'Viuda Negra', 'La primera y mÃ¡s conocida Viuda Negra, es una agente rusa entrenada como espÃ­a, artista marcial y francotiradora, y equipada con un arsenal de armas de alta tecnologÃ­a, que incluye un par de armas energÃ©ticas montadas en la muÃ±eca y apodada \"Piquete de la Viuda\". No usa vestimenta durante sus primeras apariciones, sino simplemente ropa de noche y un velo. Romanova eventualmente se transforma en estadounidense por razones que incluyen su amor por el arquero convertido en superhÃ©roe, Hawkeye.', '', './imagenes/libros/14.png'),
(15, 'Comic', 'Batman', 'Cinta basada en el cÃ³mic homÃ³nimo. La oscura y peligrosa ciudad de Gotham tan sÃ³lo se halla protegida por su corrupto cuerpo de policÃ­a. A pesar de los esfuerzos del fiscal del distrito Harvey Dent y el comisionado de policÃ­a Jim Gordon, la ciudad es cada vez mÃ¡s insegura hasta que aparece Batman, el SeÃ±or de la Noche. La reputada periodista Vicky Vale intentarÃ¡ descubrir el secreto que se oculta tras el hombre murciÃ©lago.', '', './imagenes/libros/15.png'),
(16, 'Manga', 'nuevo', 'nuevo test', 'test auto', './imagenes/libros/logo-meetmaps.jpg');

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
(1, 1, './imagenes/capitulos/Againts the Gods/2/'),
(2, 12, './imagenes/capitulos/CapitÃ¡n AmÃ©rica/1/');

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
(1, 1, 6),
(2, 2, 6),
(3, 2, 6),
(4, 5, 6),
(5, 5, 6),
(6, 5, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books_likes`
--

CREATE TABLE `books_likes` (
  `id_book_score` int(11) NOT NULL,
  `id_book` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `books_likes`
--

INSERT INTO `books_likes` (`id_book_score`, `id_book`, `id_user`) VALUES
(1, 1, 1);

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
(1, 1, 0, 9, 1),
(2, 0, 1, 1, 1),
(3, 1, 0, 3, 1),
(4, 1, 0, 3, 8),
(5, 0, 1, 9, 8),
(6, 1, 0, 9, 5);

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
(8, 'Ecchi'),
(9, 'Fantasia'),
(10, 'Harem'),
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
(1, 'Lista 1', 1, NULL),
(2, 'Lista 1', 1, 1),
(3, 'Lista 1', 1, 2),
(4, 'Lista 1', 1, 12),
(5, 'Lista 1', 1, 6),
(7, 'Lista 1 miyuki', 3, NULL),
(8, 'Lista 2', 1, 14),
(9, 'Lista 2', 1, 11),
(10, 'Lista 2', 1, 3),
(11, 'Lista 2', 1, 9),
(12, 'Lita Dani', 1, NULL),
(13, 'Lita Dani', 1, 9),
(14, 'Lista 1 new', 6, NULL),
(15, 'Lista 2', 6, NULL),
(16, 'Lista 1 Oriol', 8, NULL),
(17, 'Lista 1 Oriol', 8, 11),
(18, 'Lista 2 oriol', 8, NULL),
(19, 'Lista 2 oriol', 8, 2),
(20, 'Lista 1 Oriol', 8, 1),
(21, '', 8, 7),
(22, 'Lista 1 Oriol', 8, 4),
(23, 'dsad', 12, NULL),
(24, 'dsad', 12, NULL),
(25, 'Testeo lista', 12, NULL),
(26, 'Testeo lista', 12, 7),
(27, 'Lista 1', 9, NULL),
(28, 'Lista 1', 9, 1),
(29, 'Lista 1', 9, 5);

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
  `imagen_perfil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `nombre`, `correo`, `contrasena`, `sexo`, `fecha_cumpleanos`, `imagen_perfil`) VALUES
(1, 'Cristian', 'cristian.urrea4@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'hombre', '1970-01-01', './imagenes/perfiles/5334107-wallpaper-mountain.jpg'),
(3, 'Miyuki', 'miyuki@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'mujer', '0000-00-00', './imagenes/perfiles/maxresdefault.jpg'),
(4, 'test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 'hombre', '0000-00-00', './imagenes/perfiles/Logo-TMB.svg.png'),
(5, 'juan', 'juan@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '2019-01-22', './imagenes/perfiles/Logo-TMB.svg.png'),
(6, 'pablo', 'pablo@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', './imagenes/perfiles/logo-meetmaps.jpg'),
(7, 'test2', 'test2@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', ''),
(8, 'Oriol', 'oriollasalle@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', './imagenes/perfiles/descarga.png'),
(9, 'Admin', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '0000-00-00', './imagenes/perfiles/descarga.png'),
(10, 'Meetmaps', 'meetmaps@gmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', ''),
(11, 'prueba', 'prueba@p.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', './imagenes/perfiles/descarga.png'),
(12, 'testeo', 'testeo@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '0000-00-00', './imagenes/perfiles/cue_localization__269496.png');

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
  MODIFY `id_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `books_chapter`
--
ALTER TABLE `books_chapter`
  MODIFY `id_cap_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `books_genders`
--
ALTER TABLE `books_genders`
  MODIFY `id_librogenero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT de la tabla `books_likes`
--
ALTER TABLE `books_likes`
  MODIFY `id_book_score` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `books_score`
--
ALTER TABLE `books_score`
  MODIFY `id_book_score` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `list_books`
--
ALTER TABLE `list_books`
  MODIFY `id_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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

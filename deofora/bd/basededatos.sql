-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema DEOFORA
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `DEOFORA` ;

-- -----------------------------------------------------
-- Schema DEOFORA
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `DEOFORA` DEFAULT CHARACTER SET utf8 ;
USE `DEOFORA` ;

-- -----------------------------------------------------
-- Table `DEOFORA`.`USUARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DEOFORA`.`USUARIO` (
  `id_usuario` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DEOFORA`.`DISCOS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DEOFORA`.`DISCOS` (
  `id_disco` INT NOT NULL AUTO_INCREMENT,
  `artista` VARCHAR(45) NULL,
  `titulo` VARCHAR(45) NULL,
  `precio` VARCHAR(45) NULL,
  `stock` VARCHAR(45) NULL,
  `imagen` VARCHAR(45) NULL,
  `formato` VARCHAR(45) NULL,
  `descripcion` LONGTEXT NULL,
  PRIMARY KEY (`id_disco`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DEOFORA`.`ARTISTA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DEOFORA`.`ARTISTA` (
  `id_artista` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `descripcion` LONGTEXT NULL,
  `foto` VARCHAR(45) NULL,
  `video` VARCHAR(300) NULL,
  `album` VARCHAR(45) NULL,
  PRIMARY KEY (`id_artista`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `DEOFORA`.`DISCOS`
-- -----------------------------------------------------
START TRANSACTION;
USE `DEOFORA`;
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (1, 'MENTIRA', 'Autointitulado', '5', '400', 'mentiraEP.jpg', 'EP', 'Mentira es aquello que vivimos. El día que pasamos esperando el autobús llegar, pagando el alquiler, en relaciones que fuimos enseñados a mantener. Mentira es esquizofrenica, enferma, disimulada. Mentira es la ciudad que ayudamos a levantar y que mentimos para que siga en pié. Grabado en São Paulo, en el estudio Tyranossom por Ricardo Brilhante. Mezclado por el profesor, Pedro Carvalho. Masterizado por Daniel Frutos. Arte por Pedro S. Keppler.');
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (2, 'CHROMA', 'Cuerpos Dóciles', '9', '56', 'chroma.jpg', 'LP', 'Grabado, mezclado y masterizado en La Cova de La Bestia por Frutos en septiembre de 2015. Dê o Fora Discos en Barcelona deofora@gmail.com ');
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (3, 'V/A SUB', NULL, '25', '24', 'sub.jpg', 'LP DOBLE', NULL);
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (4, 'RAKTA', 'III', '10', '6', 'rakta3.jpg', 'LP', 'Rakta se marca su segundo LP, ahora con una nueva formación y siguiendo otros moldes para componer su atmósfera seductora.');
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (5, 'CADAVER EM TRANSE', NULL, '10', '15', 'cadaver.jpg', 'LP', NULL);
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (6, 'RAKTA', 'Intenção', '5', '125', 'raktaEP.jpg', 'EP', '');
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (7, 'RAKTA', NULL, '12', '61', 'raktaLP.jpg', 'LP', 'Disco originalmente editado por Dama da Noite Discos y Nada Nada Discos, de São Paulo Brasil.');
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (8, 'BURACO NEGRO', NULL, '4.5', '57', 'buraco.jpg', 'K7', 'Producción coactiva-voluntária de informaciones personales para que grandes corporaciones construyan algoritmos de norma social. Ejecuciones encargadas a millares de kilómetros de distancia por medio de drones no-tripulados: Acuerdos diplomáticos que tienen como intención sabotear el potencial insurreccional en un tiempo de crisis continua; Vigilancia en alta definición siendo transmitida a mili segundos; Mecanización de las relaciones humanas por medio de aprobaciones silenciosas de comportamiento. El proceso colonizador y civilizador no quiere más la conquista de un territorio y de sus recursos, pero sigue a través de la inseminación gradual, que utiliza de medios que combinan control social, confusión mental y tecnología de punta. Un estado de apatía, impotencia y ansiedad en nuestras mentes. Todo esto ha influenciado lo que hay en esta demo. Estamos lejos de un contra ataque, pero cerca de una usurpación de estas ideas para algo que podemos relacionar mas allá de la paralización y afasia ofrecidas por el capitalismo. Si nuestro mundo es de saturación y multiplicidad sofocantes, hemos decidido crear el vacío con un Buraco Negro (Agujero Negro).');
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (9, 'VERTIGO', 'Vínculos', '10', '400', 'VertigoLP.jpg', 'LP', 'Vértigo, grupo barcelonés que mezcla las experiencias de personas de otros rincones del mundo, donde reflejan los sentimiento de como es vivir en esta ciudad bajonera que es Barcelona en su música. Vértigo nos encanta con su sonido crudo, apasionado y que a veces, sonará hasta romántico. De las vísceras escuchamos sus cantos que emergen nuestros pulsos hacía nuevas posibilidades.Grabado en el Sonic Riot Studio. Grabado, mezclado y masterizado por Paco Delgado. Diseño de portada y contraportada por Patri. ');
INSERT INTO `DEOFORA`.`DISCOS` (`id_disco`, `artista`, `titulo`, `precio`, `stock`, `imagen`, `formato`, `descripcion`) VALUES (10, 'CROSTA', 'Refugis', '5', '255', 'CrostaLP.jpg', 'EP', 'Crosta nos ha regalado el privilegio de editar sus últimas grabaciones realizadas en 2013 al tiempo que la banda se despedía. Parecía que una manera de entender el punk, sin soberbia pero cargada de convicción y honestidad, con tanta sencillez como fuerza, se marchaba con ellas. Cuatro años han pasado desde entonces y sin embargo tenemos la absoluta certeza de que sus palabras y sonidos son de máxima actualidad. Todo acaba, sí, pero «en un segundo todo puede cambiar». Gracias.Crosta eran Xavi, Ian y Mar. Grabado, mezclado y masterizado por Daniel Frutos.');

COMMIT;


-- -----------------------------------------------------
-- Data for table `DEOFORA`.`ARTISTA`
-- -----------------------------------------------------
START TRANSACTION;
USE `DEOFORA`;
INSERT INTO `DEOFORA`.`ARTISTA` (`id_artista`, `nombre`, `descripcion`, `foto`, `video`, `album`) VALUES (1, 'RAKTA', 'Tres chicas y una aplastante fuerza sónica. Atmósferas rotundas que se arremolinan en tus oídos. El punk llevado a niveles extrasensoriales. La belleza del caos a punto de caer. El ruido como segunda voz. Así es RAKTA, el poderoso trío de chicas originario de Sao Paulo, Brasil. RAKTA, que en sánscrito significa “rojo”, comenzó como un cuarteto a finales del 2011. Tras la salida de Laura, la guitarrista, el grupo continuó sin ese elemento que al final le imprimió un sonido distintivo y con mayores posibilidades creativas. Así han permanecido hasta ahora, con la salida de su segunda grabación, titulada paradójicamente III, a través de Iron Lung Records (Estados Unidos), Nada Nada Discos/ Dama da Noite Discos (Brasil) y Dê o Fora (España). “Nuestra manera de destruir es construyendo, utilizando nuestra energía para transformar de forma efectiva. Ser una banda de chicas es maravilloso, con todos sus desafios y glorias”, expresa Paula Rebellato, vocalista y tecladista de la banda completada por Carla Boregas (bajo) y Nathalia Viccari (batería).', 'rakta.jpg', 'https://www.youtube.com/embed/zrmwfucPA8A?rel=0&amp;showinfo=0', NULL);
INSERT INTO `DEOFORA`.`ARTISTA` (`id_artista`, `nombre`, `descripcion`, `foto`, `video`, `album`) VALUES (2, 'VÉRTIGO', 'Hacemos punk melódico a medio tiempo. Al principio sí que nos inspiramos en bandas de punk melódicas que nos gustan, muchas escandinavas como No hope for the kids, Ebba Grön, Masshysteri, pero a día de hoy nuestras influencias se han ido diversificando y son menos explícitas. Obviamente la música que escuchamos nos influye, pero no buscamos sonar de una determinada manera, a un estilo concreto, sino que vamos probando ideas que van tomando forma en el local. Nos juntamos hacia finales del verano de 2013. En diciembre de ese año sacamos una demo k7 autoeditada de seis temas y en junio de 2015 un EP de cuatro canciones editado por Tadpole Records (UK).', 'vertigo.jpg', 'https://www.youtube.com/embed/dhw6Tgm72AA?rel=0&amp', null);
INSERT INTO `DEOFORA`.`ARTISTA` (`id_artista`, `nombre`, `descripcion`, `foto`, `video`, `album`) VALUES (3, 'MENTIRA', 'MENTIRA es el tipo de música que pones en el tocadiscos y te preguntas si lo que escuchas es una broma o no. Desde un punto de vista lo es. Desde otro no lo es. La broma está en el sesgo de la inexperiencia, una forma de entender la música como algo al alcance de todos. En cierto modo, dará risa a los músicos educados que buscan ritmos, armonías y sonidos perfectos en general. Puede que no sea tan gracioso ponerlo en palabras - ninguna broma es divertida si tiene que explicarse - pero vamos a aceptarlo, la diversión comienza cuando lo que hacemos es una crítica hacia nosotros mismos. Ahí es donde probablemente te ríes de eso.', 'mentira.jpg', 'https://www.youtube.com/embed/PtJ_6fVktsk?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen', null);
INSERT INTO `DEOFORA`.`ARTISTA` (`id_artista`, `nombre`, `descripcion`, `foto`, `video`, `album`) VALUES (4, 'CROSTA', 'El underground barcelonés lejos de caer en el aburrimiento sigue dando sorpresas como la de Crosta, trío de punk marcial y sudoroso que consigue hermanar el post-punk de finales de los setenta con la entrega del primer hardcore norteamericano de los ochenta. Las melodías, guitarras y líneas de bajo de los catalanes son puro Joy Division, Siouxsie And The Banshees, los The Cure de canciones como “Object” e incluso se permiten guiños a Parálisis Permanente; mientras que la entrega de su batería (no se los pierdan en directo), que también hace las veces de cantante en algunos temas, los hermana con Minor Threat. Todo esto hace que canciones como “Morir de fàstic”, “Nus a la gola” o “Perdre el control” sean verdaderos himnos a corear con el puño en alto, de esos que te quitan veinte años de encima y que te remueven cosas dentro.', 'crosta.jpg', 'https://www.youtube.com/embed/FLCpzSkqC54?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen', null); 

COMMIT;


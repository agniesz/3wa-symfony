-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 24 Juillet 2014 à 17:42
-- Version du serveur: 5.5.37-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `symfony`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE IF NOT EXISTS `acteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateNaissance` date NOT NULL,
  `sexe` tinyint(1) NOT NULL,
  `nationalite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bigraphie` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Contenu de la table `acteur`
--

INSERT INTO `acteur` (`id`, `prenom`, `nom`, `dateNaissance`, `sexe`, `nationalite`, `bigraphie`, `image`) VALUES
(1, 'Kad', 'Merad', '1968-03-27', 1, 'française', 'Né d''un père algérien et d''une mère française, il a deux frères et une sœur. Il est divorcé d''Emmanuelle Cosso-Mérad, parolière et écrivain, avec qui il vivait depuis 1992. Ensemble, ils ont eu un fils, Khalil, né en 2004. Depuis 2014, il vivrait une relation avec Julia Vignali1.\r\n\r\nBatteur et chanteur dans plusieurs groupes rock à l''adolescence, il commence à monter sur scène au Club Méditerranée, avec la troupe Gigolo Brothers. Puis, c''est le théâtre, dirigé par Jacqueline Duc, où il interprète des pièces classiques.\r\n\r\nEn 1990, il entre chez Lankhor et il aura pour travail de mettre les disquettes de jeux dans les boîtes. Cela lui permettra de faire la connaissance de Sylvian Bruchon (scénariste de plusieurs jeux Lankhor) qui est un grand amateur de théâtre, et qui lui proposera en 1992 de jouer dans sa pièce Histoires Camiques.\r\n\r\nEn 1991, il entre sur Oüi FM, la radio rock parisienne, où il rencontre Olivier Baroux, avec qui il forme, à l''antenne, le duo comique Kad et Olivier. Le 12 mars 1992, le duo entame sa propre émission : Le Rock''n''roll circus, émission composée de sketchs humoristiques (Mais qui a tué Paméla Rose ?, Teddy porc fidèle…). Tous les mercredis soirs, l''émission devenait Le Rock''n''roll circus Live, diffusée en public depuis le Monte Cristo puis le Globo. Kad crée seul le Ziggy Show, antenne libre les soirs de semaine. Puis aidés par Jean-Luc Delarue, c''est la télévision avec la série Les 30 dernières minutes.\r\n\r\nIls vont ensuite animer sur la chaîne câblée Comédie !, entre 1999 et 2001, La Grosse émission. Parallèlement, il commence à enchaîner des petits rôles au cinéma jusqu''à leur première grosse œuvre cinématographique : Mais qui a tué Pamela Rose ?, film réalisé en 2003 par Éric Lartigau et coécrit avec Olivier.\r\n\r\nIl a reçu, en 2007, le César du meilleur acteur dans un second rôle pour sa performance dans le long métrage Je vais bien, ne t''en fais pas de Philippe Lioret. Il apparaît également dans le clip de AaRON -U-Turn (lili) qui est la chanson phare du film.\r\n\r\nLe 2 mars 2007, il fait sa première apparition télévisuelle avec les Enfoirés sur TF1 et participe aux concerts de 2008 (où il se blesse le 26 janvier en coulisse) pour toute la série de concerts, à ceux de 2009 à Paris Bercy (concerts du dimanche et lundi), de 2010 (concerts du samedi et dimanche) qui ont eu lieu au Palais Nikaia de Nice, et de 2011 à Montpellier (concerts du jeudi au dimanche). Il participe également au Bal des Enfoirés en 2012.\r\n\r\nL''AFM et France Télévisions annoncent dans un communiqué que Kad Merad sera le parrain du Téléthon 2007 accompagné de Liane Foly.\r\n\r\nSympathisant socialiste, il a soutenu Ségolène Royal lors de l''élection présidentielle de 20072.', 'merad1.jpg'),
(2, 'Fabrice', 'Luchini', '1951-11-01', 1, 'française', 'Fabrice Luchini est issu d''une famille d''immigrés italiens, marchands de fruits et légumes. Il grandit dans le quartier de la Goutte-d''or à Paris XVIIIe. Il n''est pas attiré par l''école et sa mère le place comme apprenti coiffeur à 13 ans dans un salon chic de l''avenue Montaigne ; il adopte le nom de Fabrice pour exercer son métier de garçon coiffeur. Il cultive parallèlement, en autodidacte, son goût prononcé pour la littérature (Balzac, Flaubert, Proust, Céline). Il est, en outre, passionné par la musique soul et James Brown, et animateur il fréquente les discothèques. C''est d''ailleurs sur la piste du drugstore d''Angoulême qu''il est découvert en 1968 par Philippe Labro, alors en repérage pour son film1 Tout peut arriver, et lui offre son premier rôle (1969). Fabrice Luchini décide de suivre des cours d''art dramatique chez Jean-Laurent Cochet, puis rencontre Éric Rohmer qui lui donne une certaine notoriété avec Le Genou de Claire en 1970, Perceval le Gallois en 1978 et Les Nuits de la pleine lune en 1984.\r\n\r\nIl tourne avec Oshima, Zucca, Klapisch, Lelouch et Molinaro. Mais c''est son rôle dans La Discrète de Christian Vincent en 1990 qui le fait connaître du grand public. Il devient dans les années 1990 un acteur très demandé par le cinéma français et campe de nombreux rôles de composition comme dans Le Retour de Casanova en 1992 aux côtés d''Alain Delon et Elsa ; dans Tout ça... pour ça ! , rôle pour lequel il est récompensé par le César du meilleur acteur dans un second rôle en 1994 ; dans Le Colonel Chabert aux côtés de Gérard Depardieu, Fanny Ardant et André Dussollier ; dans Beaumarchais, l''insolent pour lequel il est nommé pour le César du meilleur acteur en 1997.\r\n\r\nIl s''adonne aussi, notamment grâce à Jean-Laurent Cochet, au théâtre, sa véritable passion, « seul lieu où s''exprime la vie, la nourriture de la vie, ce qu''aucune école n''enseignera jamais ». Il partage son activité entre le cinéma et la scène et rencontre un important succès en déclamant des textes de La Fontaine, de Nietzsche, de Céline (avec Voyage au bout de la nuit), de Paul Valéry, de Philippe Muray ou de Roland Barthes.\r\n\r\nOn a chez lui, plus que chez beaucoup d''acteurs français, le sentiment que son jeu et même sa personnalité ont évolué au fil des ans, que lui-même s''est épanoui, s''est peu à peu trouvé à travers la galerie des personnages successivement interprétés. Il sait être l''opposé de ce qu''il fut : à l''antenne, voire à l''écran, il se lâche, improvise, en fait des tonnes, se singe lui-même (comme le faisait un De Funès par exemple) ou, au besoin et à volonté, réendosse sa peau d''avant, redevenant l''introverti, l''homme bien élevé, gentil, posé qu''il donnait l''impression d''être au début de sa carrière.', 'luchini1.jpg'),
(3, 'Bérénice', 'Bejo,', '1976-07-07', 0, 'française', 'À l''âge de trois ans, Bérénice Bejo et ses parents quittent l''Argentine alors en pleine dictature militaire, pour aller vivre en France. Très tôt Miguel Bejo, son père2, réalisateur argentin, la plonge dans la culture cinématographique et l''inscrit dans des cours de théâtre. Elle vit alors près de Rambouillet, ville où elle passe le baccalauréat C (en y incluant l''option théâtre facultative) au lycée Louis-Bascan.\r\n\r\nElle partage sa vie avec le réalisateur Michel Hazanavicius avec qui elle a deux enfants : Lucien, né le 25 juin 2008, et Gloria, née le 18 septembre 20113.', 'bejo1jpg'),
(4, 'Sandrine', 'Kiberlain', '1968-02-25', 0, 'française', 'Ses quatre grands-parents sont des Juifs polonais installés en France en 19331. Née Sandrine Kiberlajn, elle est la fille d''un expert comptable et auteur, David Decca, qui a connu sa femme dans un atelier de théâtre. Après avoir eu son baccalauréat, elle est admise en classe libre au Cours Florent de 1987 à 1989 puis au Conservatoire national supérieur d''art dramatique de 1989 à 1992.\r\n\r\nElle est nommée pour le César du meilleur espoir féminin en 1995 pour Les Patriotes, qu''elle remporte en 1996 pour En avoir (ou pas). L''année suivante, son interprétation dans Un héros très discret lui vaut une nomination pour le César de la meilleure actrice dans un second rôle. Elle a également été nommée trois fois pour le César de la meilleure actrice en 1999 pour À vendre, en 1998 pour Le Septième Ciel et en 2011 pour Mademoiselle Chambon. Elle a enfin reçu le prix Romy-Schneider en 1995. Elle a été membre du jury du festival de Cannes en 2001.\r\n\r\nElle est aussi une actrice de théâtre. En 1997, elle reçoit le Molière de la révélation théâtrale pour Le Roman de Lulu, une pièce écrite par son père qu''elle monte avec succès.\r\n\r\nElle a sorti le 14 mars 2005 son 1er album en tant que chanteuse : Manquait plus qu’ça (vendu à plus de 100 000 exemplaires) et participe depuis quelques années déjà à la grande tournée des Enfoirés.\r\n\r\nAprès une période de silence, elle revient en 2007 avec deux films (Très bien, merci et La Vie d''artiste) et un nouvel album à l''automne 2007.\r\n\r\nLe 1er octobre 2007, elle sort son deuxième album Coupés bien net et bien carré qui comporte le single La Chanteuse. Auteur de tous les textes, elle ', 'kiberlain1.jpg'),
(5, 'Leonardo', 'DiCaprio', '1974-11-11', 1, 'Américaine', 'Leonardo DiCaprio, né le 11 novembre 1974 à Los Angeles, est un acteur, scénariste et producteur de cinéma américain.\r\n\r\nGrandissant dans les quartiers populaires de Los Angeles tels que Los Feliz puis Hollywood, le jeune Leonardo DiCaprio prend comme modèle son demi-frère aîné, Adam Farrar, qui commence dès l''enfance une carrière d''acteur. Il décide alors de se lancer lui aussi, encouragé par ses parents. Il montre rapidement un talent évident pour la comédie et se voit proposer des rôles à la télévision, puis au cinéma. Après avoir été choisi parmi de très nombreux candidats pour jouer face à son acteur préféré Robert De Niro dans Blessures secrètes, il se fait particulièrement remarquer grâce à son film suivant, Gilbert Grape, en interprétant le rôle du jeune frère déficient intellectuel de Johnny Depp, rôle pour lequel il est nommé à l''Oscar du meilleur acteur dans un second rôle à l''âge de 19 ans.', 'dicaprio1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE IF NOT EXISTS `Categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `Categorie`
--

INSERT INTO `Categorie` (`id`, `titre`) VALUES
(1, 'horreur'),
(2, 'comédie');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `synopsis` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `dateCreation` date NOT NULL,
  `note` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_8244BE22BCF5E72D` (`categorie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Contenu de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `synopsis`, `description`, `dateCreation`, `note`, `image`, `categorie_id`) VALUES
(1, 'Loup-Garou', 'Un homme solitaire accueille une baby-sitter dans sa grande bastide du sud de la France. L’enfant n’est pas là, il doit arriver demain, après-demain, bientôt. La jeune femme a peur de cet homme menteur, charmant, cet ogre qui peu à peu l’obsède. Il lui parle, l’envoûte, puis la rejette, se moque d’elle, la ridiculise, pour mieux la fasciner ensuite, comme un serpent avec sa proie.\r\n(1h10min)', 'Genre:	 Drame', '2014-07-23', 3, 'loup-garou.jpg', NULL),
(2, 'La Planète des singes : l''affrontement', 'Une nation de plus en plus nombreuse de singes évolués, dirigée par César, est menacée par un groupe d’humains qui a survécu au virus dévastateur qui s''est répandu dix ans plus tôt.\r\n(2h11min)', 'Genres:	 Science fiction , Action', '2014-07-30', 4, 'planète-des-singes-laffrontement.jpg', NULL),
(6, 'New York Melody', 'Gretta et son petit ami de longue date décident d''emménager à New York afin de réaliser leur rêve : devenir célèbre grâce à la musique. Mais celui-ci décroche un contrat solo et quitte Gretta. Le cœur brisé celle-ci n''a pas d''autres solutions que chanter dans des bars.\r\n(1h44min)', 'Genres:	 Drame , Romance , Comédie musicale', '2014-07-30', 2, 'new-york-melody.jpg', NULL),
(7, 'Mister Babadook', 'Depuis la mort brutale de son mari, Amelia lutte pour ramener à la raison son fils de 6 ans, Samuel, devenu complètement incontrôlable et qu''elle n''arrive pas à aimer. Quand un livre de contes intitulé ''Mister Babadook'' se retrouve mystérieusement dans leur maison, Samuel est convaincu que le ''Babadook'' est la créature qui hante ses cauchemars.\r\n(1h34min)', 'Genre:	 Epouvante-horreur', '2014-07-30', 3, 'mister-babadook.jpg', NULL),
(10, 'Planes 2', 'Quand Dusty apprend que son moteur est endommagé et qu’il ne pourra peut-être plus jamais participer à une course, il décide de changer de voie et de se lancer dans la guerre contre le feu au sein d’une équipe improbable en charge de la protection du parc national de Piston Peak.\r\n(1h24min)', 'Genres:	 Animation , Comédie', '2014-07-23', 2, 'planes-2.jpg', NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `FK_8244BE22BCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `Categorie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

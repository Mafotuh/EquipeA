-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 17 Août 2015 à 22:33
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `equipe2`
--
CREATE DATABASE IF NOT EXISTS `equipe2` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `equipe2`;

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` longtext,
  `contenu` longtext,
  `status` tinyint(1) DEFAULT NULL,
  `dates` datetime DEFAULT CURRENT_TIMESTAMP,
  `admin_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`,`admin_ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  KEY `fk_actualite_admin1_idx` (`admin_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`ID`, `titre`, `contenu`, `status`, `dates`, `admin_ID`) VALUES
(1, 'Lâ€™EMPLOI Dâ€™AVENIR', 'Le dynamisme de lâ€™association provient de ses bÃ©nÃ©voles, tous motivÃ©s dans leurs actions au sein de lâ€™Equipe-a. Seulement le but Ã©tant de permettre Ã  lâ€™association de sâ€™Ã©panouir durablement, un problÃ¨me sâ€™est posÃ©, la rÃ©partition des taches qui necessitent un travail continu et rigoureux, en effet, jusquâ€™a prÃ©sent ce sont les membres du bureau qui se sont toujours impliquÃ©s comme dans un vrai travail qui ont permis, avec lâ€™aide indispensable des bÃ©nÃ©voles, la rÃ©alisation des plus grandes actions actuelles, seulement ce modÃ¨le nâ€™est pas durable, il faut detailler les tÃ¢ches prÃ©cises et crÃ©er des postes stables aux missions claires. \r\n\r\nEt câ€™est pour cela que lâ€™emploi dâ€™avenir est apparu comme une Ã©vidence, permettant ainsi dâ€™avoir un premier salariÃ© dans lâ€™association qui ouvrirait la porte vers lâ€™agrandissement de lâ€™association.', 1, '2015-08-17 16:58:31', 1),
(2, 'ENTRE-AIDE', 'LE PARRAINAGE ET LE DEVELOPPEMENT DE LA JEUNESSE : ENTRE-AIDE\r\n\r\nLa jeunesse est le moteur de lâ€™association, ce sont les jeunes que lâ€™Equipe-a encadre aujourdâ€™hui qui seront demain les grands qui Ã  leur tour encadrerons les nouveaux venus dans lâ€™Equipe-a\r\n\r\nLE PARRAINAGE : ENTRE-AIDE\r\nLâ€™idÃ©e de dÃ©part\r\nPour garder le dynamisme et les valeurs de lâ€™association, certains critÃ¨res sont obligatoires afin dâ€™en faire parti :\r\n-Avoir un travail ou des Ã©tudes\r\n-Avoir un sport\r\n-Comprendre les valeurs de tolÃ©rance, respect et partage qui sont le fondement de lâ€™Equipe-a\r\n\r\nCependant, lâ€™association viendra en aide aux personnes souhaitant la rejoindre et qui ne remplissent pas ces critÃ¨res, notamment au niveau de lâ€™emploi, directement ou par des partenariat avec la mission locale et dâ€™autre organismes adaptÃ©s\r\n\r\nCe qui a dÃ©coulÃ© de ce mode de fonctionnement est que de nombreux jeunes voulaient joindre lâ€™Equipe-a pour cette aide personnalisÃ©e et qui se veut trÃ¨s humaine, puis par la suite ces membres que lâ€™association avait aidÃ© sâ€™engageaient avec une motivation et une Ã©nergie qui permettent aux diffÃ©rentes actions de lâ€™Equipe-a dâ€™avoir ce dynamisme et cet impact.\r\nPar la suite, lâ€™association apporte Ã  chaque adhÃ©rent un suivi scolaire, professionnel et personnel pour lâ€™aider Ã  dÃ©velopper au mieux ses capacitÃ©s et rÃ©soudre les Ã©ventuels problÃ¨mes de la vie, tout cela Ã  la maniÃ¨re dâ€™une grande famille.\r\n\r\nLa notion de parrainage est donc trÃ¨s importante, car chaque jeune que lâ€™association aura aidÃ©, aidera Ã  son tour un futur membre de lâ€™Equipe-a', 1, '2015-08-17 16:59:23', 1),
(3, 'Lâ€™ENCADREMENT SPORTIF', 'Lâ€™ENCADREMENT SPORTIF : EQUIPE-A SPORT\r\n\r\nEquipe-a aide les jeunes Ã  acquÃ©rir et Ã  conserver de bonnes conditions physiques et mentales. Cela passe principalement par un travail autour de la connaissance et du dÃ©passement de soi ainsi que des valeurs qui entourent le sport. Ces jeunes bÃ©nÃ©ficient dâ€™une aide et dâ€™un encadrement, que ce soit dans la recherche de clubs professionnels ou tout simplement en les aidants Ã  garder la forme ; au travers de divers ateliers, activitÃ©s et entrainements.\r\n\r\nLâ€™Equipe-a Sport Ã  lieu de faÃ§on hebdomadaire le lundi de 19h Ã  21h avec de 10 Ã  30 jeunes selon les pÃ©riodes de lâ€™annÃ©e, Ã  la maniÃ¨re dâ€™un cours Ã  deux vitesses chaque jeunes choisit sa classe, amateur ou pro, en effet se programme se veut destiner, Ã  travers du coaching et diffÃ©rents exercices, Ã  tout le public jeune, de celui qui veut commencer le sport Ã  celui qui joue dans des clubs professionnels.', 1, '2015-08-17 17:25:20', 1),
(4, 'DEVELOPPEMENT ARTISTIQUE', 'DEVELOPPEMENT ARTISTIQUE : COLLECTIF EQUIPE-A\r\n\r\nChaque annÃ©e, parmi les jeunes artistes de lâ€™Equipe-a, le groupe le plus talentueux est encadrÃ© pour lui permettre de dÃ©velopper un projet artistique professionnel. Un autre groupe aura en charge la gestion artistique de tous les artistes de lâ€™association, au programme des cours de danse, des sÃ©ances de coaching et des passages en studio.\r\n\r\nChaque annÃ©e, entre les dÃ©part et les arrivÃ©es de nouveaux membres, lâ€™Equipe-a compte en moyenne une vingtaines de jeunes talents.', 1, '2015-08-17 17:26:08', 1),
(5, ' DECOUVERTE DE NOUVEAUX TERRITOIRES', 'DECOUVERTE DE NOUVEAUX TERRITOIRES : EQUIPE-A TOUR\r\n\r\nQuand vient le dÃ©but de lâ€™Ã©tÃ© dans lâ€™Equipe-a, nous organisons un grand dÃ©part en vacances dâ€™une semaine Ã  travers la France et parfois mÃªme au delÃ  de ses frontiÃ¨res pour une dizaine de jeunes de lâ€™association.\r\n\r\nA travers cet Equipe-a Tour, nous permettons aux jeunes en amont de participer Ã  lâ€™organisation dâ€™un sÃ©jour. La gestion des frais de carburants, de la nourriture, la communication avec les auberges de jeunesses, hÃ´tels, la sÃ©curitÃ© lors du voyage sont des points que nous abordons et leur inculquons afin quâ€™ils puissent dâ€™une part comprendre les tenants et aboutissants dâ€™un tel voyage et dâ€™autre part quâ€™ils puissent en organisÃ© un Ã  leur tour, pour lâ€™association ou avec leurs amis et famille.\r\n\r\nAu delÃ  de la partie thÃ©orique, ce voyage permet de dÃ©couvrir de nouveaux paysages, des cultures diffÃ©rentes (mÃªme au sein du mÃªme pays), de comprendre lâ€™importance de lâ€™esprit dâ€™Ã©quipe et surtout dâ€™apprendre Ã  vivre ensemble pendant plusieurs jours, car pour de nombreux jeunes, la notion de communautÃ© , ce voyage leur permet de mieux agir en sociÃ©tÃ©.\r\nBien entendu le but est aussi de sâ€™amuser, ce voyage qui sâ€™apparente dans les premiers jours Ã  un Â«roadtripÂ» permet de visiter diffÃ©rents lieux cÃ©lÃ¨bres, des zoos, dÃ©couvrir des attractions impraticable en rÃ©gion parisienne comme le skysurf. Le but Ã©tant que ces vacances soit tant profitable sur le plan intellectuel que sur le besoin de dÃ©compresser de la rÃ©gion parisienne, de penser vraiment Ã  autre chose pendant une semaine.', 1, '2015-08-17 17:28:21', 1),
(6, 'MANIFESTATIONS CULTURELLES ET SPORTIVES', 'Lâ€™ORGANISATION DE MANIFESTATIONS CULTURELLES ET SPORTIVES : EQUIPE-A EVENT\r\n\r\nNotre volontÃ© dâ€™intÃ©grer un volet Ã©vÃ©nementiel Ã  nos deux autres domaines dâ€™intervention, dÃ©coule du fait que la plupart des jeunes que nous rencontrons nâ€™ont pas accÃ¨s Ã  des Ã©vÃ©nements qui rÃ©pondent Ã  leurs besoins. \r\n\r\nCâ€™est la raison pour laquelle nous souhaitons pouvoir organiser des Ã©vÃ©nements, qui mettront en scÃ¨ne les talents que nous voulons illuminer. Nos Ã©vÃ©nements entrent dans la dynamique EQUIPE-A, Ã  savoir, fÃ©dÃ©rer les jeunes autours des valeurs qui entourent la culture artistique et sportive', 1, '2015-08-17 17:30:04', 1),
(7, 'EXPLOSIF SHOW', 'EXPLOSIF SHOW\r\n\r\nLâ€™Explosif Show est une vitrine, une vitrine pour montrer chaque annÃ©e de quoi lâ€™Equipe-a est capable, une vitrine pour tous les nouveaux artistes qui souhaitent sâ€™exprimer Ã  cotÃ© de stars, une vitrine pour les arts et sports Ã©mergents, et surtout une vitrine sur la population, car cet Ã©vÃ©nement rÃ©unit des personnes d&#039;Ã¢ges, dâ€™origines, de cultures et de milieux complÃ¨tement diffÃ©rents dans le joie et le plaisir de la dÃ©couverte\r\n\r\nLâ€™Explosif Show a vu le jour en 2009 et est depuis rÃ©alisÃ© chaque annÃ©e au Gymnase de lâ€™Arche GuÃ©don Ã  Torcy. Il sâ€™adresse Ã  tous les artistes, amateurs, et professionnels de danse, de chant, de sport et de mode dâ€™Ile de France ou dâ€™autres dÃ©partements. Ce Ã©vÃ©nement est toujours trÃ¨s attendu, il rÃ©uni Ã  chaque fois plus de 1000 personnes. Lâ€™Explosif Show comporte des stands de prÃ©vention, dâ€™animation, une buvette ainsi que dÃ©filÃ© de jeunes crÃ©ateurs pour permettre dâ€™informer et distraire les spectateurs en attendant le dÃ©but du show.\r\nLe spectacle dure ensuite deux heures au cours desquelles se succÃ¨dent artistes et sportifs de toute la France puis plusieurs figures emblÃ©matiques de la jeunesse viennent conclure la manifestation.\r\n\r\nCette manifestation sert aussi de plate-forme dâ€™Ã©changes entre lâ€™association (en tant quâ€™accompagnatrice de projets), les jeunes Ã  la recherche dâ€™aides et les professionnels du monde artistique Ã  la recherche de Â« graines de stars Â»', 1, '2015-08-17 17:30:32', 1),
(8, 'SUMMER AMBIANCE', 'NÃ©e dâ€™une idÃ©e composÃ©e de 3 mots, Soleil, Plage, Fun, le Summer Ambiance est lâ€™Ã©vÃ©nement de lâ€™Ã©tÃ© par excellence, il rÃ©unit dans une base de loisirs familles et amis autour dâ€™activitÃ©s diverses et variÃ©es telle que des scÃ¨nes dâ€™artistes locaux, des tournois de volley ball, des Ã©preuves semblants sortir tout droit de Koh Lanta\r\n\r\nEn quelques chiffres\r\n11 artistes sur scÃ¨ne\r\n8 activitÃ©s \r\n110 participants\r\n400 personnes touchÃ©es', 1, '2015-08-17 17:39:46', 1),
(9, 'APPELS A PROJET : ET ACTION', 'Forte de plusieurs annÃ©es dâ€™expÃ©rience, sur le plan pratique et thÃ©orique, dÃ©veloppÃ©es par ces membres, lâ€™Equipe-a est aujourdâ€™hui capable dâ€™intervenir en tant que prestataire auprÃ¨s des structures et organismes professionnels.\r\nLes champs dâ€™actions privilÃ©giÃ©s sont lâ€™organisation dâ€™Ã©vÃ©nements, la rÃ©alisation de photos/vidÃ©os ainsi que lâ€™enseignement de la danse et du chant Ã  travers des cours structurÃ©s et adaptÃ©s.\r\n\r\nBREF, Jâ€™HABITE EN SEINE ET MARNE\r\nTrÃ¨s vite lâ€™association a compris que pour propulser des artistes et valoriser ses Ã©vÃ©nements la vidÃ©o est un point essentiel. Aussi, depuis 3 ans lâ€™Equipe-a a dÃ©veloppÃ© un pole photo/vidÃ©o, lui permettant de rÃ©pondre a des appels Ã  projet tel que celui-ci, proposer par le Conseil General de Seine et Marne : Habiter en Seine et Marne.\r\nEt grÃ¢ce aux compÃ©tences vidÃ©o et le partenariat avec les Foolek Rabco pour le jeu dâ€™acteur, le rÃ©sultat a su Ãªtre jeune, comique tout en restant professionnel', 1, '2015-08-17 17:40:18', 1),
(10, 'OMAC BY NIGHT', 'Nous sommes heureux de pouvoir apporter, grÃ¢ce Ã  notre expÃ©rience et le matÃ©riel que nous avons acquis au fur et Ã  mesure des annÃ©es, des animations sonores et lumineuses qui permettent vraiment de donner une autre ambiance dans la salle et ainsi divertir rÃ©ellement les participants.\r\nSoirÃ©e organisÃ© par lâ€™Omac de Torcy', 1, '2015-08-17 17:41:15', 1);

-- --------------------------------------------------------

--
-- Structure de la table `actualite_has_media`
--

CREATE TABLE IF NOT EXISTS `actualite_has_media` (
  `actualite_ID` int(11) NOT NULL,
  `media_ID` int(11) NOT NULL,
  PRIMARY KEY (`actualite_ID`,`media_ID`),
  KEY `fk_actualite_has_media_media1_idx` (`media_ID`),
  KEY `fk_actualite_has_media_actualite1_idx` (`actualite_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `civilite` varchar(45) DEFAULT NULL,
  `nom_ad` varchar(45) DEFAULT NULL,
  `prenom_ad` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `dates` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`ID`, `civilite`, `nom_ad`, `prenom_ad`, `login`, `pass`, `dates`) VALUES
(1, 'Mr', 'Maftouh', 'Hassane', 'vecto', 'pass', '2015-08-16 21:48:07');

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `message` longtext,
  `dates` datetime DEFAULT CURRENT_TIMESTAMP,
  `profile_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`,`profile_ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  KEY `fk_chat_profile1_idx` (`profile_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `sujet` varchar(45) DEFAULT NULL,
  `message` longtext,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `lu` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`ID`, `nom`, `prenom`, `adresse`, `ville`, `cp`, `email`, `tel`, `sujet`, `message`, `date`, `lu`) VALUES
(1, 'Maftouh', 'Hassane', '18 Avenue Albert Thomas', 'chatenay malabry', 92290, 'maftouh@outlook.com', '0743454898', 'Message au Prince Williame', 'Que serais l&#039;Angleterre si vous nâ€™Ã©tiez pas nÃ© ? ', '2015-08-17 23:42:33', 1);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(45) DEFAULT NULL,
  `benevole` int(11) DEFAULT NULL,
  `artiste` int(11) DEFAULT NULL,
  `visiteur` int(11) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `status` tinyint(1) DEFAULT NULL,
  `date_eve` datetime DEFAULT NULL,
  `date_crea` datetime DEFAULT CURRENT_TIMESTAMP,
  `admin_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`,`admin_ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  KEY `fk_evenement_admin1_idx` (`admin_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`ID`, `titre`, `benevole`, `artiste`, `visiteur`, `youtube`, `contenu`, `status`, `date_eve`, `date_crea`, `admin_ID`) VALUES
(1, 'Battle logobi', 33, 28, 621, '27000', 'EvÃ©nement Battle logobi', 1, '2014-05-23 09:34:00', '2015-08-17 17:45:08', 1),
(2, 'Explosif show 1', 53, 36, 758, '27875', 'Explosif show 1', 1, '0000-00-00 00:00:00', '2015-08-17 21:35:15', 1),
(3, 'Explosif show 2', 84, 52, 1096, '19679', 'Explosif show 2', 1, '0000-00-00 00:00:00', '2015-08-17 21:36:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `evenement_has_media`
--

CREATE TABLE IF NOT EXISTS `evenement_has_media` (
  `evenement_ID` int(11) NOT NULL,
  `media_ID` int(11) NOT NULL,
  PRIMARY KEY (`evenement_ID`,`media_ID`),
  KEY `fk_evenement_has_media_media1_idx` (`media_ID`),
  KEY `fk_evenement_has_media_evenement1_idx` (`evenement_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `event_inscr`
--

CREATE TABLE IF NOT EXISTS `event_inscr` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `profile_ID` int(11) NOT NULL,
  `event_sport_ID` int(11) NOT NULL,
  `date_inscr` date DEFAULT NULL,
  PRIMARY KEY (`ID`,`profile_ID`,`event_sport_ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  KEY `fk_event_inscr_profile1_idx` (`profile_ID`),
  KEY `fk_event_inscr_event_sport1_idx` (`event_sport_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `event_inscr`
--

INSERT INTO `event_inscr` (`ID`, `profile_ID`, `event_sport_ID`, `date_inscr`) VALUES
(5, 1, 1, NULL),
(12, 1, 3, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `event_sport`
--

CREATE TABLE IF NOT EXISTS `event_sport` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` longtext,
  `description` longtext,
  `lieu` longtext,
  `nbr_part` int(11) DEFAULT NULL,
  `date_event` date DEFAULT NULL,
  `dete_creation` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT NULL,
  `admin_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`,`admin_ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  KEY `fk_event_sport_admin1_idx` (`admin_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `event_sport`
--

INSERT INTO `event_sport` (`ID`, `titre`, `description`, `lieu`, `nbr_part`, `date_event`, `dete_creation`, `status`, `admin_ID`) VALUES
(1, 'Natation forestHILL', 'Concours de Nataion sur les parque aquatique de Forest-HILL ', 'Velizy', 20, '2015-08-09', '2015-08-17 00:00:00', 1, 1),
(2, 'Visite du MusÃ© d&#039;Orsay', 'Participer au visite prestigieuse du musÃ© d&#039;Orsay', 'Paris', 30, '2015-08-16', '2015-08-17 22:40:55', 1, 1),
(3, 'Tire Ã  l&#039;Arc ', 'Jeux de tire Ã  l&#039;Arc dans un stand de Golf', 'Igny', 4, '2015-08-25', '2015-08-17 23:58:12', 1, 1),
(4, 'Vacance Non-Stop', 'Veiller l&#039;Ã©tÃ© jusqu&#039;au dernier minute officielle de l&#039;Ã©tÃ©', 'ile de France', 50, '2015-08-31', '2015-08-18 00:28:38', 1, 1),
(5, 'OMAC BY NIGHT', 'SoirÃ©e dansante ', 'Torcy', 100, '2016-02-08', '2015-08-18 00:32:38', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `event_sport_has_media`
--

CREATE TABLE IF NOT EXISTS `event_sport_has_media` (
  `event_sport_ID` int(11) NOT NULL,
  `media_ID` int(11) NOT NULL,
  PRIMARY KEY (`event_sport_ID`,`media_ID`),
  KEY `fk_event_sport_has_media_media1_idx` (`media_ID`),
  KEY `fk_event_sport_has_media_event_sport1_idx` (`event_sport_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` longtext,
  `url` longtext,
  `dates` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `moderation`
--

CREATE TABLE IF NOT EXISTS `moderation` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `admin_ID` int(11) NOT NULL,
  `profile_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`,`admin_ID`,`profile_ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  KEY `fk_moderation_admin1_idx` (`admin_ID`),
  KEY `fk_moderation_profile1_idx` (`profile_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(45) DEFAULT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `poid` int(11) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `force` int(11) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `dates` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  UNIQUE KEY `login_UNIQUE` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `profile`
--

INSERT INTO `profile` (`ID`, `genre`, `nom`, `prenom`, `age`, `poid`, `taille`, `force`, `adresse`, `ville`, `cp`, `tel`, `email`, `login`, `pass`, `dates`, `status`) VALUES
(1, 'Mr', 'Maftouh', 'Hassane', 27, 75, 174, NULL, '18 Avenue Albert Thomas (Chez Aboudou)', 'chatenay malabry', 92290, '0752506394', 'maftouh.hassane@gmail.com', 'vecto', 'graph', '2015-08-16 21:41:29', 1),
(2, 'Mr', 'Pamela', 'Anderson', 45, 64, 169, NULL, '10th William Street', 'Oklahoma_City', 73123, '+1-877-458-7876', 'Pamela@lovelylady.biz', 'pamela', 'anderson', '2015-08-16 21:54:18', 1),
(3, 'Mr', 'Morgan', 'Freeman', 99, 70, 170, NULL, '12 mandela Bridge', 'Philadelphia', 19019, '+1-202-342-8976', 'Freeman@Showbiz.tv', 'morgan', 'freeman', '2015-08-16 21:59:14', 1),
(4, 'Mme', 'Angelina', 'Joli', 42, 59, 171, NULL, '9th Mille street', 'Atlanta', 30305, '+1-405-430-9809', 'joli@thelife.us', 'angelina', 'joli', '2015-08-16 22:04:16', 1);

-- --------------------------------------------------------

--
-- Structure de la table `profile_has_event_sport`
--

CREATE TABLE IF NOT EXISTS `profile_has_event_sport` (
  `profile_ID` int(11) NOT NULL,
  `event_sport_ID` int(11) NOT NULL,
  PRIMARY KEY (`profile_ID`,`event_sport_ID`),
  KEY `fk_profile_has_event_sport_event_sport1_idx` (`event_sport_ID`),
  KEY `fk_profile_has_event_sport_profile1_idx` (`profile_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `raison`
--

CREATE TABLE IF NOT EXISTS `raison` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `raison` longtext,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `role_ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`,`role_ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  UNIQUE KEY `pass_UNIQUE` (`pass`),
  KEY `fk_User_role_idx` (`role_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD CONSTRAINT `fk_actualite_admin1` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `actualite_has_media`
--
ALTER TABLE `actualite_has_media`
  ADD CONSTRAINT `fk_actualite_has_media_actualite1` FOREIGN KEY (`actualite_ID`) REFERENCES `actualite` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_actualite_has_media_media1` FOREIGN KEY (`media_ID`) REFERENCES `media` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `fk_chat_profile1` FOREIGN KEY (`profile_ID`) REFERENCES `profile` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `fk_evenement_admin1` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `evenement_has_media`
--
ALTER TABLE `evenement_has_media`
  ADD CONSTRAINT `fk_evenement_has_media_evenement1` FOREIGN KEY (`evenement_ID`) REFERENCES `evenement` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evenement_has_media_media1` FOREIGN KEY (`media_ID`) REFERENCES `media` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `event_inscr`
--
ALTER TABLE `event_inscr`
  ADD CONSTRAINT `fk_event_inscr_event_sport1` FOREIGN KEY (`event_sport_ID`) REFERENCES `event_sport` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_inscr_profile1` FOREIGN KEY (`profile_ID`) REFERENCES `profile` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `event_sport`
--
ALTER TABLE `event_sport`
  ADD CONSTRAINT `fk_event_sport_admin1` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `event_sport_has_media`
--
ALTER TABLE `event_sport_has_media`
  ADD CONSTRAINT `fk_event_sport_has_media_event_sport1` FOREIGN KEY (`event_sport_ID`) REFERENCES `event_sport` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_event_sport_has_media_media1` FOREIGN KEY (`media_ID`) REFERENCES `media` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `moderation`
--
ALTER TABLE `moderation`
  ADD CONSTRAINT `fk_moderation_admin1` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_moderation_profile1` FOREIGN KEY (`profile_ID`) REFERENCES `profile` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `profile_has_event_sport`
--
ALTER TABLE `profile_has_event_sport`
  ADD CONSTRAINT `fk_profile_has_event_sport_event_sport1` FOREIGN KEY (`event_sport_ID`) REFERENCES `event_sport` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_profile_has_event_sport_profile1` FOREIGN KEY (`profile_ID`) REFERENCES `profile` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_User_role` FOREIGN KEY (`role_ID`) REFERENCES `admin` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

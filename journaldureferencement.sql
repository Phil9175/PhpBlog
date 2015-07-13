-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 13 Juillet 2015 à 19:45
-- Version du serveur :  5.5.38-log
-- Version de PHP :  5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `journaldureferencement`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
`id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text,
  `statut` varchar(45) DEFAULT NULL,
  `meta_title` varchar(77) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `date_publication` datetime DEFAULT NULL,
  `date_last_modification` datetime DEFAULT NULL,
  `type_page` varchar(45) DEFAULT NULL,
  `idmembre` int(11) DEFAULT NULL,
  `article_url` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `statut`, `meta_title`, `meta_description`, `date_publication`, `date_last_modification`, `type_page`, `idmembre`, `article_url`) VALUES
(1, 'DAF Conseil s’attaque aux réseaux constructeurs', 'DAF Conseil s???attaque aux réseaux constructeurs par Frédéric MARTY La firme Daf Conseil présente une solution complémentaire aux DMS. Baptisée Repair suite, cette dernière centralise les données et possède différentes applications comme un module de prise de rendez-vous en ligne, une réception active sur tablette, un module de gestion, de chiffrage et de facturation, une assistance technique online, un carnet d???entretien sur smartphone et l???outil de CRM Cap Services. Cet ensemble se destine aux têtes de réseaux indépendants mais aussi aux réseaux constructeurs. Une nouvelle cible pour Daf Conseil, qui s???est allié à l???italien Tekné Consulting pour élaborer cette solution sous la marque commune Automy. L???originalité du système repose sur les nombreux reportings possibles pour une tête de réseau ou un groupe de distribution. La solution de réception active basée sur une tablette classique permet de mettre en place concrètement ce type de service dans des ateliers sans passer par un hypothétique système apporté par un constructeur. Ce portail fonctionne à la carte selon les besoins de chaque structure et reste ouvert à tous les services du marché. « Nous souhaitons que cet ensemble puisse s???interfacer avec tous les DMS, CRM et autres services web » explique Jacques de Leissègues, président de DAF Conseil. Repair Suite sera présenté officiellement dans le cadre du prochain salon Equip Auto (13-17 octobre 2015, Paris Nord Villepinte). L’info en continu Toyota présente son Avensis millésime 2015 25 juin 2015 par Alice THUOT Constructeurs Dans la même rubrique : La location longue durée continue de séduire Le CNPA met en place une commission jeunes entrepreneurs Accord entre le SNISA-Feda et la FNAA La Feda passe à l???offensive GNFA : un nouveau conseil d’administration au c??ur des problématiques automobiles RCI Banque épargne au Royaume-Uni', 'published', 'DAF Conseil s’attaque aux réseaux constructeurs title', 'DAF Conseil s’attaque aux réseaux constructeur description', '2015-07-01 00:00:00', '2015-07-07 00:00:00', 'article.layout', 0, 'daf-attaque-constructeurs'),
(2, 'Vidéo : un drame évité de justesse aux essais du rallye d’Allemagne', 'La scène est surréaliste et les conséquences auraient pu être terribles pour tout le monde.Dans sa pr?paration du prochain rallye WRC d’Allemagne, l’?quipe Hyundai s’est rendue dans la r?gion de l’?preuve pour y faire rouler ses i20 WRC.\r\n\r\nMais alors que les routes avaient ?t? ferm?es, un agriculteur visiblement pas au courant a fait une incursion tr?s remarqu?e sur la route avec son tracteur, juste au moment o? la i20 WRC de Thierry Neuville arrivait à fond.\r\n\r\nLe pilote a heureusement eu le temps de sauter sur les freins pour ?viter la collision, mais la sc?ne est pour le moins cocasse.', 'published', 'Vidéo : un drame évité de justesse aux essais du rallye d’Allemagne', 'Vidéo : un drame évité de justesse aux essais du rallye d’Allemagne', '2015-07-07 00:00:00', '2015-07-15 00:00:00', 'article.layout', 0, 'video-un-drame-evite-de-justesse-aux-essais-du-rallye-dallemagne'),
(3, 'F1 – Les essais devraient débuter en mars en 2016', 'Les équipes ne devraient faire que deux séances d’essais privés avant le début de la saison en 2016. Elles ne devraient débuter que le 1er mars. Ces dernières années, les essais privés en début d’année ont commencé le 1er février, un mois et demi avant le début de la saison.En 2016, la saison débutera au début du mois d’avril, deux semaines plus tard que ce qui se fait habituellement. Pour s’y adapter, les équipes ont décidé de revoir leur programme d’essais.Selon Motorsport.com, elles ont choisi de débuter les essais le 1er mars, un mois plus tard que celle année et un mois seulement avant le début de la saison, mais avec deux séances, contre trois habituellement, ce qui permettra de ne pas avoir un programme compressé. Pas de roulage le week-end Le calendrier prévu pour le moment serait d’avoir deux séances sur le circuit de Barcelone, du 1er au 4 mars puis du 15 au 18 mars, à chaque fois du mardi au vendredi.Contrairement aux dernières années, il ne devrait pas y avoir d’essais le week-end. Cela permet au circuit d’avoir un plus grand nombre de spectateurs, mais c’est également synonyme d’un personnel plus important et le coût est plus fort pour les équipes.Avec un début des essais un mois plus tard, les équipes auront plus de temps développement et il ne devrait pas y avoir de présentations de monoplaces avant la fin du mois de février. F1 – Le calendrier des essais hivernaux F1 – Le calendrier devrait évoluer en 2016 F1 – De nouveaux essais à Barcelone F1 – Des moteurs plus bruyants dès 2016 F1 – Gasly impatient de tester la Toro Rosso F1 – Gasly va tester la Toro Rosso F1 – Sainz mène, accident pour Alonso F1 – Verstappen mène, Vettel sort', 'published', 'F1 – Les essais devraient débuter en mars en 2016', 'F1 – Les essais devraient débuter en mars en 2016', '2015-07-15 00:00:00', '2015-07-22 00:00:00', 'article.layout', 0, 'f1-les-essais-devraient-debuter-en-mars-en-2016'),
(4, 'F1 – Alonso satisfait de ses essais', 'Jeudi 25 juin 2015 – 08:38 Fernando Alonso est ravi d’avoir pu beaucoup rouler au Red Bull Ring. Le pilote McLaren a testé les nouveautés aérodynamiques et il a travaillé sur le moteur. Fernando Alonso a travaillé sur le nouvel ensemble aérodynamique mercredi, dont le nouveau nez plus court. Après quatre abandons consécutifs, il est ravi d’avoir beaucoup roulé et donc recueilli beaucoup de données.« Cette journée était positive, » estime l’Espagnol. « La chose la plus importante était de faire quelques tours dans la voiture après les problèmes que nous avons eus dans les dernières courses. »« Nous avons réussi à faire plus de 100 tours, et avec les tours de Stoffel (…), je pense que nous terminons les essais avec de bonnes informations. Maintenant, nous devons revenir à l’usine et tout analyser, mais nous avons clairement beaucoup de données pour progresser. Je suis assez satisfait de la façon dont les essais se sont passés. » McLaren a travaillé sur l’aérodynamique et le moteur McLaren a surtout testé ses nouveautés aérodynamiques dans la matinée et l’équipe a cherché a mieux exploiter le groupe propulseur Honda dans l’après-midi, ce qu’elle avait aussi fait avec Stoffel Vandoorne le premier jour.« Notre but était (…) de rester sur cette lancée positive (…), et nous y sommes clairement arrivés, » estime Dave Redding, le manager de l’équipe. « La séance de la matinée a débuté avec des contrôles de données et de réglages de systèmes puis nous avons fait des essais de corrélation aéro, donc le nouveau nez plus court. »« La séance de l’après-midi a été dédiée à de nouveaux essais aéro de plusieurs nouveaux composants de carrosserie, d’évaluations de pneus, et de nouveaux tests d’utilisation du groupe propulseur. »« Les deux journées des essais ont été productives, et elles ont surtout montré de la fiabilité, et nous sommes maintenant munis de beaucoup de données utiles et d’un retour d’informations utile des deux pilotes. » F1 – Vettel gagne, Red Bull titrée F1 – Hamilton s’étonne des choix d’Alonso F1 – McLaren adapte son programme après l’accident F1 – Les pénalités d’Alonso, Ricciardo et Kvyat F1 – Alonso devrait être pénalisé F1 – Alonso veut se consacrer à 2016 F1 – Un nouveau nez sur la McLaren F1 – Pas de gain de puissance chez Honda', 'published', 'F1 – Alonso satisfait de ses essais', 'F1 – Alonso satisfait de ses essais', '2015-07-15 00:00:00', '2015-07-22 00:00:00', 'article.layout', 0, 'f1-alonso-satisfait-de-ses-essais'),
(5, 'Mon premier titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque sapien lectus, vitae rutrum ante sollicitudin in. Cras accumsan ullamcorper vestibulum. Sed sit amet dolor non neque vulputate bibendum. Vestibulum placerat in nisl vel pretium. Cras commodo sollicitudin erat, at egestas ex lobortis vel. Nulla dapibus sollicitudin nisl eu aliquam. Donec interdum scelerisque suscipit. Donec quis nibh lorem. Sed cursus mattis tellus, a tempus ligula feugiat vitae. Integer faucibus sodales felis id iaculis.In varius convallis lobortis. Vivamus eget molestie nulla, in sodales velit. Fusce a turpis nec risus faucibus rutrum. Suspendisse sit amet velit id tellus commodo porttitor. In interdum quis ipsum ac luctus. Praesent sollicitudin, odio nec tincidunt scelerisque, eros ante varius massa, vitae congue ligula nisi vitae orci. Maecenas eros urna, pellentesque nec feugiat eu, venenatis sed tellus. Cras non sem eu sapien interdum consequat.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Mon premier titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque sapien lectus, vitae rutrum ante sollicitudin in. Cras accumsan ullamcorper vestibulum. Sed sit amet dolor non neque vulputate bibendum. Vestibulum placerat in nisl vel pretium. Cras commodo sollicitudin erat, at egestas ex lobortis vel. Nulla dapibus sollicitudin nisl eu aliquam. Donec interdum scelerisque suscipit. Donec quis nibh lorem. Sed cursus mattis tellus, a tempus ligula feugiat vitae. Integer faucibus sodales felis id iaculis.In varius convallis lobortis. Vivamus eget molestie nulla, in sodales velit. Fusce a turpis nec risus faucibus rutrum. Suspendisse sit amet velit id tellus commodo porttitor. In interdum quis ipsum ac luctus. Praesent sollicitudin, odio nec tincidunt scelerisque, eros ante varius massa, vitae congue ligula nisi vitae orci. Maecenas eros urna, pellentesque nec feugiat eu, venenatis sed tellus. Cras non sem eu sapien interdum consequat.', 'published', '', '', '2015-07-13 19:35:09', '2015-07-13 19:35:09', 'article.layout', 1, 'Mon-premier-titre');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
`idcategorie` int(11) NOT NULL,
  `nom_categorie` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
`idcommentaire` int(11) NOT NULL,
  `texte` text,
  `date_publication` datetime DEFAULT NULL,
  `page_idpage` int(11) NOT NULL,
  `membre_idmembre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `media`
--

CREATE TABLE `media` (
`idmedia` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `emplacement` varchar(255) DEFAULT NULL,
  `page_idpage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `page_categorie`
--

CREATE TABLE `page_categorie` (
`idpage_categorie` int(11) NOT NULL,
  `page_idpage` int(11) NOT NULL,
  `categorie_idcategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
`id` int(11) NOT NULL,
  `pseudo` varchar(55) NOT NULL,
  `email` varchar(210) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `can_modify_categories` tinyint(1) DEFAULT NULL,
  `can_modify_user` tinyint(1) DEFAULT NULL,
  `can_modify_page` tinyint(1) DEFAULT NULL,
  `can_modify_commentaire` tinyint(1) DEFAULT NULL,
  `can_modify_media` tinyint(1) DEFAULT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `date_inscription`, `password`, `can_modify_categories`, `can_modify_user`, `can_modify_page`, `can_modify_commentaire`, `can_modify_media`, `token`) VALUES
(1, 'ppg', 'philgranger@orange.fr', '2015-04-02 00:00:00', 'b0b9029e6e88fcf7d4d5196b1478cde5c9eb14e7', 1, 1, 1, 1, 1, 'c1e47bf04e43475a4d5245a301c427a3f9c83ab4');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_page_membre1_idx` (`idmembre`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
 ADD PRIMARY KEY (`idcategorie`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
 ADD PRIMARY KEY (`idcommentaire`), ADD KEY `fk_commentaire_page_idx` (`page_idpage`), ADD KEY `fk_commentaire_membre1_idx` (`membre_idmembre`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
 ADD PRIMARY KEY (`idmedia`), ADD KEY `fk_media_page1_idx` (`page_idpage`);

--
-- Index pour la table `page_categorie`
--
ALTER TABLE `page_categorie`
 ADD PRIMARY KEY (`idpage_categorie`), ADD KEY `fk_page_categorie_page1_idx` (`page_idpage`), ADD KEY `fk_page_categorie_categorie1_idx` (`categorie_idcategorie`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
MODIFY `idcategorie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
MODIFY `idcommentaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `media`
--
ALTER TABLE `media`
MODIFY `idmedia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `page_categorie`
--
ALTER TABLE `page_categorie`
MODIFY `idpage_categorie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

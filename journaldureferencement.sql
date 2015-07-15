-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Mer 15 Juillet 2015 à 15:39
-- Version du serveur :  5.5.42-log
-- Version de PHP :  5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `article_url` text,
  `tags` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `statut`, `meta_title`, `meta_description`, `date_publication`, `date_last_modification`, `type_page`, `idmembre`, `article_url`, `tags`) VALUES
(1, 'DAF Conseil s''attaque aux rÃ©seaux constructeurs', '<p style="font-family: ''Luxi sans'', ''Lucida Grande'', Lucida, ''Lucida Sans Unicode'', sans-serif; margin: 10px 0px 0px; padding: 0px; font-size: 13px; line-height: 18px;">La firme&nbsp;<strong>Daf Conseil</strong>&nbsp;prÃ©sente une solution complÃ©mentaire aux<strong>DMS</strong>. BaptisÃ©e&nbsp;<strong>Repair suite</strong>, cette derniÃ¨re centralise les donnÃ©es et possÃ¨de diffÃ©rentes applications comme un module de prise de rendez-vous en ligne, une rÃ©ception active sur tablette, un module de gestion, de chiffrage et de facturation, une assistance technique online, un carnet dâ€™entretien sur smartphone et lâ€™outil de&nbsp;<strong>CRM Cap Services</strong>. Cet ensemble se destine aux tÃªtes de rÃ©seaux indÃ©pendants mais aussi aux rÃ©seaux constructeurs. Une nouvelle cible pour Daf Conseil, qui sâ€™est alliÃ© Ã  lâ€™italien&nbsp;<strong>TeknÃ© Consulting</strong>&nbsp;pour Ã©laborer cette solution sous la marque commune&nbsp;<strong>Automy</strong>.</p><p style="font-family: ''Luxi sans'', ''Lucida Grande'', Lucida, ''Lucida Sans Unicode'', sans-serif; margin: 10px 0px 0px; padding: 0px; font-size: 13px; line-height: 18px;">Lâ€™originalitÃ© du systÃ¨me repose sur les nombreux reportings possibles pour une tÃªte de rÃ©seau ou un groupe de distribution. La solution de rÃ©ception active basÃ©e sur une tablette classique permet de mettre en place concrÃ¨tement ce type de service dans des ateliers sans passer par un hypothÃ©tique systÃ¨me apportÃ© par un constructeur. Ce portail fonctionne Ã  la carte selon les besoins de chaque structure et reste ouvert Ã  tous les services du marchÃ©.&nbsp;<i>Â«&nbsp;Nous souhaitons que cet ensemble puisse sâ€™interfacer avec tous les DMS, CRM et autres services web&nbsp;Â»</i>&nbsp;explique&nbsp;<strong>Jacques de LeissÃ¨gues</strong>, prÃ©sident de DAF Conseil. Repair Suite sera prÃ©sentÃ© officiellement dans le cadre du prochain salon&nbsp;<strong>Equip Auto</strong>&nbsp;(13-17 octobre 2015, Paris Nord Villepinte).</p>', 'published', '', '', NULL, '2015-07-15 15:33:15', 'article.layout', 1, 'DAF-Conseil-s-attaque-aux-r%C3%A9seaux-constructeurs', 'test'),
(2, 'VidÃ©o : un drame Ã©vitÃ© de justesse aux essais du rallye d''Allemagne ', '<div><br></div><div><div class="chapo" style="margin: 0px 0px 10px; padding: 0px; list-style-type: none; outline: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">La scÃ¨ne est surrÃ©aliste et les consÃ©quences auraient pu Ãªtre terribles pour tout le monde.</div><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">Dans sa prÃ©paration du prochain rallye WRC d''Allemagne, l''Ã©quipe&nbsp;</span><strong style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><u style="margin: 0px; padding: 0px; list-style-type: none; outline: none;"><a href="http://www.turbo.fr/hyundai/" target="_blank" style="margin: 0px; padding: 0px; list-style-type: none; outline: none; text-decoration: none; color: rgb(51, 51, 51);">Hyundai</a></u></strong><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;s''est rendue dans la rÃ©gion de l''Ã©preuve pour y faire rouler ses i20 WRC.</span><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">Mais alors que les routes avaient Ã©tÃ© fermÃ©es, un agriculteur visiblement pas au courant a fait une incursion trÃ¨s remarquÃ©e sur la route avec son tracteur, juste au moment oÃ¹ la i20 WRC de Thierry Neuville arrivait Ã  fond.</span><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">Le pilote a heureusement eu le temps de sauter sur les freins pour Ã©viter la collision, mais la scÃ¨ne est pour le moins cocasse.</span><span style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none;"></span><br></div><div><br></div>&lt;iframe width="560" height="315" src="https://www.youtube.com/embed/c31qcSJsHLM" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;', 'published', '', '', '2015-07-07 00:00:00', '2015-07-14 12:20:17', 'article.layout', 1, 'Vid%C3%A9o-%3A-un-drame-%C3%A9vit%C3%A9-de-justesse-aux-essais-du-rallye-d-Allemagne-', ''),
(3, 'F1 - LES ESSAIS DEVRAIENT DÃ‰BUTER EN MARS EN 2016', '<p class="chapo" style="float: left; font-size: 1.1em; font-style: italic; margin: 15px 0px; text-align: justify; width: 630px; color: rgb(53, 64, 79); font-family: Helvetica, Arial, sans-serif;">Les Ã©quipes ne devraient faire que deux sÃ©ances d''essais privÃ©s avant le dÃ©but de la saison en 2016. Elles ne devraient dÃ©buter que le 1er mars.</p><p style="float: left; font-size: 16px; margin-top: 15px; text-align: justify; width: 630px; color: rgb(53, 64, 79); font-family: Helvetica, Arial, sans-serif; line-height: 18.3999996185303px;">Ces derniÃ¨res annÃ©es, les essais privÃ©s en dÃ©but d''annÃ©e ont commencÃ© le 1er fÃ©vrier, un mois et demi avant le dÃ©but de la saison.<br><br>En 2016, la saison&nbsp;<a href="http://news.sportauto.fr/news/1493312/f1-australie-2016-calendrier-f1-2016-debut-saison-andrew-westacott-Toro-Rosso" target="_blank" style="color: rgb(53, 64, 79); font-weight: bold;">dÃ©butera au dÃ©but du mois d''avril</a>, deux semaines plus tard que ce qui se fait habituellement. Pour s''y adapter, les Ã©quipes ont dÃ©cidÃ© de revoir leur programme d''essais.<br><br>Selon Motorsport.com, elles ont choisi de dÃ©buter les essais le 1er mars, un mois plus tard que celle annÃ©e et un mois seulement avant le dÃ©but de la saison, mais avec deux sÃ©ances, contre trois habituellement, ce qui permettra de ne pas avoir un programme compressÃ©.</p><h3 style="float: left; font-size: 1.2em; margin: 10px 0px; color: rgb(186, 193, 196); font-weight: bolder; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;">PAS DE ROULAGE LE WEEK-END</h3><div id="adslvr_wrapper_video_container_81817" style="color: rgb(53, 64, 79); font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 18.3999996185303px; padding: 0px; overflow: hidden; margin: 0px auto; text-align: center; width: 1px; height: 1px; position: relative;"><div id="video_container_81817" style="width: 1px; height: 1px; position: relative;"></div></div><p style="float: left; font-size: 16px; margin-top: 15px; text-align: justify; width: 630px; color: rgb(53, 64, 79); font-family: Helvetica, Arial, sans-serif; line-height: 18.3999996185303px;">Le calendrier prÃ©vu pour le moment serait d''avoir deux sÃ©ances sur le circuit de Barcelone, du 1er au 4 mars puis du 15 au 18 mars, Ã  chaque fois du mardi au vendredi.<br><br>Contrairement aux derniÃ¨res annÃ©es, il ne devrait pas y avoir d''essais le week-end. Cela permet au circuit d''avoir un plus grand nombre de spectateurs, mais c''est Ã©galement synonyme d''un personnel plus important et le coÃ»t est plus fort pour les Ã©quipes.<br><br>Avec un dÃ©but des essais un mois plus tard, les Ã©quipes auront plus de temps dÃ©veloppement et il ne devrait pas y avoir de prÃ©sentations de monoplaces avant la fin du mois de fÃ©vrier.</p>', 'published', '', '', '2015-07-15 00:00:00', '2015-07-14 12:21:35', 'article.layout', 1, 'F1---LES-ESSAIS-DEVRAIENT-D%C3%89BUTER-EN-MARS-EN-2016', ''),
(4, 'F1 – Alonso satisfait de ses essais', 'Jeudi 25 juin 2015 – 08:38 Fernando Alonso est ravi d’avoir pu beaucoup rouler au Red Bull Ring. Le pilote McLaren a testé les nouveautés aérodynamiques et il a travaillé sur le moteur. Fernando Alonso a travaillé sur le nouvel ensemble aérodynamique mercredi, dont le nouveau nez plus court. Après quatre abandons consécutifs, il est ravi d’avoir beaucoup roulé et donc recueilli beaucoup de données.« Cette journée était positive, » estime l’Espagnol. « La chose la plus importante était de faire quelques tours dans la voiture après les problèmes que nous avons eus dans les dernières courses. »« Nous avons réussi à faire plus de 100 tours, et avec les tours de Stoffel (…), je pense que nous terminons les essais avec de bonnes informations. Maintenant, nous devons revenir à l’usine et tout analyser, mais nous avons clairement beaucoup de données pour progresser. Je suis assez satisfait de la façon dont les essais se sont passés. » McLaren a travaillé sur l’aérodynamique et le moteur McLaren a surtout testé ses nouveautés aérodynamiques dans la matinée et l’équipe a cherché a mieux exploiter le groupe propulseur Honda dans l’après-midi, ce qu’elle avait aussi fait avec Stoffel Vandoorne le premier jour.« Notre but était (…) de rester sur cette lancée positive (…), et nous y sommes clairement arrivés, » estime Dave Redding, le manager de l’équipe. « La séance de la matinée a débuté avec des contrôles de données et de réglages de systèmes puis nous avons fait des essais de corrélation aéro, donc le nouveau nez plus court. »« La séance de l’après-midi a été dédiée à de nouveaux essais aéro de plusieurs nouveaux composants de carrosserie, d’évaluations de pneus, et de nouveaux tests d’utilisation du groupe propulseur. »« Les deux journées des essais ont été productives, et elles ont surtout montré de la fiabilité, et nous sommes maintenant munis de beaucoup de données utiles et d’un retour d’informations utile des deux pilotes. » F1 – Vettel gagne, Red Bull titrée F1 – Hamilton s’étonne des choix d’Alonso F1 – McLaren adapte son programme après l’accident F1 – Les pénalités d’Alonso, Ricciardo et Kvyat F1 – Alonso devrait être pénalisé F1 – Alonso veut se consacrer à 2016 F1 – Un nouveau nez sur la McLaren F1 – Pas de gain de puissance chez Honda', 'published', 'F1 – Alonso satisfait de ses essais', 'F1 – Alonso satisfait de ses essais', '2015-07-15 00:00:00', '2015-07-22 00:00:00', 'article.layout', 0, 'f1-alonso-satisfait-de-ses-essais', ''),
(5, 'Mon premier titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque sapien lectus, vitae rutrum ante sollicitudin in. Cras accumsan ullamcorper vestibulum. Sed sit amet dolor non neque vulputate bibendum. Vestibulum placerat in nisl vel pretium. Cras commodo sollicitudin erat, at egestas ex lobortis vel. Nulla dapibus sollicitudin nisl eu aliquam. Donec interdum scelerisque suscipit. Donec quis nibh lorem. Sed cursus mattis tellus, a tempus ligula feugiat vitae. Integer faucibus sodales felis id iaculis.In varius convallis lobortis. Vivamus eget molestie nulla, in sodales velit. Fusce a turpis nec risus faucibus rutrum. Suspendisse sit amet velit id tellus commodo porttitor. In interdum quis ipsum ac luctus. Praesent sollicitudin, odio nec tincidunt scelerisque, eros ante varius massa, vitae congue ligula nisi vitae orci. Maecenas eros urna, pellentesque nec feugiat eu, venenatis sed tellus. Cras non sem eu sapien interdum consequat.', 'unpublished', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ''),
(6, 'Mon premier titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque sapien lectus, vitae rutrum ante sollicitudin in. Cras accumsan ullamcorper vestibulum. Sed sit amet dolor non neque vulputate bibendum. Vestibulum placerat in nisl vel pretium. Cras commodo sollicitudin erat, at egestas ex lobortis vel. Nulla dapibus sollicitudin nisl eu aliquam. Donec interdum scelerisque suscipit. Donec quis nibh lorem. Sed cursus mattis tellus, a tempus ligula feugiat vitae. Integer faucibus sodales felis id iaculis.In varius convallis lobortis. Vivamus eget molestie nulla, in sodales velit. Fusce a turpis nec risus faucibus rutrum. Suspendisse sit amet velit id tellus commodo porttitor. In interdum quis ipsum ac luctus. Praesent sollicitudin, odio nec tincidunt scelerisque, eros ante varius massa, vitae congue ligula nisi vitae orci. Maecenas eros urna, pellentesque nec feugiat eu, venenatis sed tellus. Cras non sem eu sapien interdum consequat.', 'unpublished', '', '', '2015-07-13 19:35:09', '2015-07-13 19:35:09', 'article.layout', 1, 'Mon-premier-titre', ''),
(7, 'dfsdfsfdsdf', 'Vestibulum tincidunt turpis a dui finibus, at ullamcorper sapien elementum. Pellentesque interdum tortor non lacus venenatis efficitur. Cras eleifend faucibus ultricies. Nulla lacinia magna ac metus hendrerit, ac viverra nunc fringilla. Cras ultrices fermentum ligula, interdum feugiat nisi tincidunt non. Nullam fringilla, velit ut volutpat venenatis, augue justo lacinia diam, nec ultrices est libero eget nisl. Nam et congue ex. Fusce nec nisi quis massa hendrerit varius a quis mi. Sed a enim quam. Duis faucibus nibh vel ante fermentum vulputate. Morbi quis ipsum et odio venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.', 'unpublished', '', '', '2015-07-13 21:37:32', '2015-07-13 21:37:32', 'article.layout', 1, 'dfsdfsfdsdf', ''),
(8, '222', 'Vestibulum tincidunt turpis a dui finibus, at ullamcorper sapien elementum. Pellentesque interdum tortor non lacus venenatis efficitur. Cras eleifend faucibus ultricies. Nulla lacinia magna ac metus hendrerit, ac viverra nunc fringilla. Cras ultrices fermentum ligula, interdum feugiat nisi tincidunt non. Nullam fringilla, velit ut volutpat venenatis, augue justo lacinia diam, nec ultrices est libero eget nisl. Nam et congue ex. Fusce nec nisi quis massa hendrerit varius a quis mi. Sed a enim quam. Duis faucibus nibh vel ante fermentum vulputate. Morbi quis ipsum et odio venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.', 'unpublished', '', '', '2015-07-13 21:37:45', '2015-07-13 21:37:45', 'article.layout', 1, '222', ''),
(9, '78342678254', 'amus et lacus vitae ante imperdiet lobortis. Fusce consequat, enim sit amet egestas consequat, metus ligula ultrices arcu, eu commodo massa tellus ut ante. Praesent vitae pharetra eros. Sed laoreet sit amet erat ac ultricies. Proin vitae felis eu lectus cursus sagittis at a risus. Nullam venenatis auctor neque, eu sagittis risus interdum eu.Vestibulum ullamcorper vulputate lobortis. Donec commodo auctor urna, sit amet pellentesque est auctor eu. Sed justo tellus, rhoncus quis ullamcorper id, ullauere iaculis gravida. Vivamus sed li venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.Ut vitae mi nisl. Cras vulputate turpis nunc, ac consectetur mi lacinia a. Etiam at neque a est tempus luctus vitae eu elit. Aenean vestibulum tempor aliquet. Maecenas id lorem arcu. Donec aliquam, enim non ultrices molestie, libero sapien commodo odio, quis aliquet massa diam nec nulla. Etiam luctus, lacus sed hendrerit te', 'unpublished', '', '', '2015-07-13 21:38:12', '2015-07-13 21:38:12', 'article.layout', 1, '78342678254', ''),
(10, 'DERNIER', 'amus et lacus vitae ante imperdiet lobortis. Fusce consequat, enim sit amet egestas consequat, metus ligula ultrices arcu, eu commodo massa tellus ut ante. Praesent vitae pharetra eros. Sed laoreet sit amet erat ac ultricies. Proin vitae felis eu lectus cursus sagittis at a risus. Nullam venenatis auctor neque, eu sagittis risus interdum eu.Vestibulum ullamcorper vulputate lobortis. Donec commodo auctor urna, sit amet pellentesque est auctor eu. Sed justo tellus, rhoncus quis ullamcorper id, ullamcorper non neque. Aliquam aliquet erat vel purus auctor, a efficitur felis semper. Donec urna nulla, ullamcorper et consectetur eu, porta sit amet ante. Proin felis nulla, tincidunt id dignissim sit amet, sagittis tristique odio. Integer augue erat, congue ut tristique at, dictum eu nibh. Morbi turpis lorem, tristique ut iaculis in, mollis id risus. Ut quis ligula velit. In sit amet pulvinar sem, id consequat purus. Nam sed sem risus. Proin venenatis commodo aliquam. Quisque aliquet sem posuere iaculis gravida. Vivamus sed ligula urna. In odio nisi, molestie in rutrum at, pellentesque nec enim.Vestibulum tincidunt turpis a dui finibus, at ullamcorper sapien elementum. Pellentesque interdum tortor non lacus venenatis efficitur. Cras eleifend faucibus ultricies. Nulla lacinia magna ac metus hendrerit, ac viverra nunc fringilla. Cras ultrices fermentum ligula, interdum feugiat nisi tincidunt non. Nullam fringilla, velit ut volutpat venenatis, augue justo lacinia diam, nec ultrices est libero eget nisl. Nam et congue ex. Fusce nec nisi quis massa hendrerit varius a quis mi. Sed a enim quam. Duis faucibus nibh vel ante fermentum vulputate. Morbi quis ipsum et odio venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.Ut vitae mi nisl. Cras vulputate turpis nunc, ac consectetur mi lacinia a. Etiam at neque a est tempus luctus vitae eu elit. Aenean vestibulum tempor aliquet. Maecenas id lorem arcu. Donec aliquam, enim non ultrices molestie, libero sapien commodo odio, quis aliquet massa diam nec nulla. Etiam luctus, lacus sed hendrerit tem', 'unpublished', '', '', '2015-07-13 21:40:05', '2015-07-13 21:40:05', 'article.layout', 1, 'DERNIER', ''),
(11, 'sdfsdf', 'amus et lacus vitae ante imperdiet lobortis. Fusce consequat, enim sit amet egestas consequat, metus ligula ultrices arcu, eu commodo massa tellus ut ante. Praesent vitae pharetra eros. Sed laoreet sit amet erat ac ultricies. Proin vitae felis eu lectus cursus sagittis at a risus. Nullam venenatis auctor neque, eu sagittis risus interdum eu.Vestibulum ullamcorper vulputate lobortis. Donec commodo auctor urna, sit amet pellentesque est auctor eu. Sed justo tellus, rhoncus quis ullamcorper id, ullamcorper non neque. Aliquam aliquet erat vel purus auctor, a efficitur felis semper. Donec urna nulla, ullamcorper et consectetur eu, porta sit amet ante. Proin felis nulla, tincidunt id dignissim sit amet, sagittis tristique odio. Integer augue erat, congue ut tristique at, dictum eu nibh. Morbi turpis lorem, tristique ut iaculis in, mollis id risus. Ut quis ligula velit. In sit amet pulvinar sem, id consequat purus. Nam sed sem risus. Proin venenatis commodo aliquam. Quisque aliquet sem posuere iaculis gravida. Vivamus sed ligula urna. In odio nisi, molestie in rutrum at, pellentesque nec enim.Vestibulum tincidunt turpis a dui finibus, at ullamcorper sapien elementum. Pellentesque interdum tortor non lacus venenatis efficitur. Cras eleifend faucibus ultricies. Nulla lacinia magna ac metus hendrerit, ac viverra nunc fringilla. Cras ultrices fermentum ligula, interdum feugiat nisi tincidunt non. Nullam fringilla, velit ut volutpat venenatis, augue justo lacinia diam, nec ultrices est libero eget nisl. Nam et congue ex. Fusce nec nisi quis massa hendrerit varius a quis mi. Sed a enim quam. Duis faucibus nibh vel ante fermentum vulputate. Morbi quis ipsum et odio venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.Ut vitae mi nisl. Cras vulputate turpis nunc, ac consectetur mi lacinia a. Etiam at neque a est tempus luctus vitae eu elit. Aenean vestibulum tempor aliquet. Maecenas id lorem arcu. Donec aliquam, enim non ultrices molestie, libero sapien commodo odio, quis aliquet massa diam nec nulla. Etiam luctus, lacus sed hendrerit tem', 'unpublished', '', '', '2015-07-13 21:43:58', '2015-07-13 21:43:58', 'article.layout', 1, 'sdfsdf', ''),
(12, 'Mon presdfsfsdfmier titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer leo metus, congue sed malesuada nec, luctus quis nibh. Proin vel felis turpis. Nulla vitae eleifend nulla. Donec vel eros ultricies, tincidunt massa posuere, semper metus. Aenean consequat sit amet mi nec faucibus. Proin efficitur molestie diam laoreet semper. Praesent a tincidunt ex, a egestas dolor. Vestibulum pulvinar arcu vel purus mollis consectetur. Donec efficitur ex a velit tincidunt, ac sodales leo molestie.Etiam sit amet sem nec eros egestas accumsan. Nunc rhoncus, lectus ac viverra maximus, lorem felis gravida ante, nec rutrum nisi quam vel tortor. Curabitur quis diam quis justo venenatis mattis at vitae risus. Curabitur elementum sapien neque, non congue dolor mollis a. Donec non mi metus. Morbi malesuada nisl vitae pharetra tempor. Quisque quam ligula, vestibulum sit amet est nec, iaculis ultricies nibh.', 'unpublished', '', '', '2015-07-13 23:55:53', '2015-07-13 23:55:53', 'article.layout', 1, 'Mon-presdfsfsdfmier-titre', '');

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
(1, 'ppg', 'philgranger@orange.fr', '2015-04-02 00:00:00', 'b0b9029e6e88fcf7d4d5196b1478cde5c9eb14e7', 1, 1, 1, 1, 1, 'f303207304ca8c5f5f0327374d5268dceaef9a45');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_page_membre1_idx` (`idmembre`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idcommentaire`),
  ADD KEY `fk_commentaire_page_idx` (`page_idpage`),
  ADD KEY `fk_commentaire_membre1_idx` (`membre_idmembre`);

--
-- Index pour la table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`idmedia`),
  ADD KEY `fk_media_page1_idx` (`page_idpage`);

--
-- Index pour la table `page_categorie`
--
ALTER TABLE `page_categorie`
  ADD PRIMARY KEY (`idpage_categorie`),
  ADD KEY `fk_page_categorie_page1_idx` (`page_idpage`),
  ADD KEY `fk_page_categorie_categorie1_idx` (`categorie_idcategorie`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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

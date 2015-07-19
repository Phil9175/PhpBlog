-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jul 19, 2015 at 02:09 PM
-- Server version: 5.5.42-log
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journaldureferencement`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text,
  `statut` varchar(45) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `date_publication` datetime DEFAULT NULL,
  `date_last_modification` datetime DEFAULT NULL,
  `type_page` varchar(45) DEFAULT NULL,
  `idmembre` int(11) DEFAULT NULL,
  `article_url` text,
  `tags` text NOT NULL,
  `keyword` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `titre`, `contenu`, `statut`, `meta_title`, `meta_description`, `date_publication`, `date_last_modification`, `type_page`, `idmembre`, `article_url`, `tags`, `keyword`) VALUES
(1, 'DAF Conseil s''attaque aux rÃ©seaux constructeurs', '<p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif">La firme&nbsp;<strong>Daf Conseil</strong>&nbsp;pr&eacute;sente une solution compl&eacute;mentaire aux&nbsp;<strong>DMS</strong>. Baptis&eacute;e&nbsp;<strong>Repair suite</strong>, cette derni&egrave;re centralise les donn&eacute;es <img alt="" src="/view/kcfinder/upload/images/arton6759.jpg" style="float:left; height:143px; width:250px" />et poss&egrave;de diff&eacute;rentes applications comme un module de prise de rendez-vous en ligne, une r&eacute;ception active sur tablette, un module de gestion, de chiffrage et de facturation, une assistance technique online, un carnet d&rsquo;entretien sur smartphone et l&rsquo;outil de&nbsp;<strong>CRM Cap Services</strong>. Cet ensemble se destine aux t&ecirc;tes de r&eacute;seaux ind&eacute;pendants mais aussi aux r&eacute;seaux constructeurs. Une nouvelle cible pour Daf Conseil, qui s&rsquo;est alli&eacute; &agrave; l&rsquo;italien&nbsp;<strong>Tekn&eacute; Consulting</strong>&nbsp;pour &eacute;laborer cette solution sous la marque commune&nbsp;<strong>Automy</strong>.</span></p>\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;<br />\r\n<br />\r\n<br />\r\n<br />\r\n&nbsp;\r\n<p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif">L&rsquo;originalit&eacute; du syst&egrave;me repose sur les nombreux reportings possibles pour une t&ecirc;te de r&eacute;seau ou un groupe de distribution. La solution de r&eacute;ception active bas&eacute;e sur une tablette classique permet de mettre en place concr&egrave;tement ce type de service dans des ateliers sans passer par un hypoth&eacute;tique syst&egrave;me apport&eacute; par un constructeur. Ce portail fonctionne &agrave; la carte selon les besoins de chaque structure et reste ouvert &agrave; tous les services du march&eacute;.&nbsp;<em>&laquo;&nbsp;Nous souhaitons que cet ensemble puisse s&rsquo;interfacer avec tous les DMS, CRM et autres services web&nbsp;&raquo;</em>&nbsp;explique&nbsp;<strong>Jacques de Leiss&egrave;gues</strong>, pr&eacute;sident de DAF Conseil. Repair Suite sera pr&eacute;sent&eacute; officiellement dans le cadre du prochain salon&nbsp;<strong>Equip Auto</strong>&nbsp;(13-17 octobre 2015, Paris Nord Villepinte).</span></p>\r\n', 'published', 'dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', 'dfgdfg', NULL, '2015-07-19 12:34:39', 'article.layout', 1, 'DAF-Conseil-s-attaque-aux-r%C3%A9seaux-constructeurs', 'daf; voiture; daf conseil;crm cap services; dms; automobile; autos', 'daf'),
(2, 'VidÃ©o : un drame Ã©vitÃ© de justesse aux essais du rallye d''Allemagne ', '<div><br></div><div><div class="chapo" style="margin: 0px 0px 10px; padding: 0px; list-style-type: none; outline: none; font-weight: bold; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">La scÃ¨ne est surrÃ©aliste et les consÃ©quences auraient pu Ãªtre terribles pour tout le monde.</div><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">Dans sa prÃ©paration du prochain rallye WRC d''Allemagne, l''Ã©quipe&nbsp;</span><strong style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><u style="margin: 0px; padding: 0px; list-style-type: none; outline: none;"><a href="http://www.turbo.fr/hyundai/" target="_blank" style="margin: 0px; padding: 0px; list-style-type: none; outline: none; text-decoration: none; color: rgb(51, 51, 51);">Hyundai</a></u></strong><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;s''est rendue dans la rÃ©gion de l''Ã©preuve pour y faire rouler ses i20 WRC.</span><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">Mais alors que les routes avaient Ã©tÃ© fermÃ©es, un agriculteur visiblement pas au courant a fait une incursion trÃ¨s remarquÃ©e sur la route avec son tracteur, juste au moment oÃ¹ la i20 WRC de Thierry Neuville arrivait Ã  fond.</span><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><span style="font-family: Arial, Helvetica, sans-serif; font-size: 11px;">Le pilote a heureusement eu le temps de sauter sur les freins pour Ã©viter la collision, mais la scÃ¨ne est pour le moins cocasse.</span><span style="margin: 0px; padding: 0px; list-style-type: none; outline: none; font-family: Arial, Helvetica, sans-serif; font-size: 11px;"><br style="margin: 0px; padding: 0px; list-style-type: none; outline: none;"></span><br></div><div><br></div>&lt;iframe width="560" height="315" src="https://www.youtube.com/embed/c31qcSJsHLM" frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;', 'published', '', '', '2015-07-07 00:00:00', '2015-07-14 12:20:17', 'article.layout', 1, 'Vid%C3%A9o-%3A-un-drame-%C3%A9vit%C3%A9-de-justesse-aux-essais-du-rallye-d-Allemagne-', '', ''),
(3, 'F1 - LES ESSAIS DEVRAIENT DÃ‰BUTER EN MARS EN 2016', '<p class="chapo" style="float: left; font-size: 1.1em; font-style: italic; margin: 15px 0px; text-align: justify; width: 630px; color: rgb(53, 64, 79); font-family: Helvetica, Arial, sans-serif;">Les Ã©quipes ne devraient faire que deux sÃ©ances d''essais privÃ©s avant le dÃ©but de la saison en 2016. Elles ne devraient dÃ©buter que le 1er mars.</p><p style="float: left; font-size: 16px; margin-top: 15px; text-align: justify; width: 630px; color: rgb(53, 64, 79); font-family: Helvetica, Arial, sans-serif; line-height: 18.3999996185303px;">Ces derniÃ¨res annÃ©es, les essais privÃ©s en dÃ©but d''annÃ©e ont commencÃ© le 1er fÃ©vrier, un mois et demi avant le dÃ©but de la saison.<br><br>En 2016, la saison&nbsp;<a href="http://news.sportauto.fr/news/1493312/f1-australie-2016-calendrier-f1-2016-debut-saison-andrew-westacott-Toro-Rosso" target="_blank" style="color: rgb(53, 64, 79); font-weight: bold;">dÃ©butera au dÃ©but du mois d''avril</a>, deux semaines plus tard que ce qui se fait habituellement. Pour s''y adapter, les Ã©quipes ont dÃ©cidÃ© de revoir leur programme d''essais.<br><br>Selon Motorsport.com, elles ont choisi de dÃ©buter les essais le 1er mars, un mois plus tard que celle annÃ©e et un mois seulement avant le dÃ©but de la saison, mais avec deux sÃ©ances, contre trois habituellement, ce qui permettra de ne pas avoir un programme compressÃ©.</p><h3 style="float: left; font-size: 1.2em; margin: 10px 0px; color: rgb(186, 193, 196); font-weight: bolder; text-transform: uppercase; font-family: Helvetica, Arial, sans-serif;">PAS DE ROULAGE LE WEEK-END</h3><div id="adslvr_wrapper_video_container_81817" style="color: rgb(53, 64, 79); font-family: Helvetica, Arial, sans-serif; font-size: 16px; line-height: 18.3999996185303px; padding: 0px; overflow: hidden; margin: 0px auto; text-align: center; width: 1px; height: 1px; position: relative;"><div id="video_container_81817" style="width: 1px; height: 1px; position: relative;"></div></div><p style="float: left; font-size: 16px; margin-top: 15px; text-align: justify; width: 630px; color: rgb(53, 64, 79); font-family: Helvetica, Arial, sans-serif; line-height: 18.3999996185303px;">Le calendrier prÃ©vu pour le moment serait d''avoir deux sÃ©ances sur le circuit de Barcelone, du 1er au 4 mars puis du 15 au 18 mars, Ã  chaque fois du mardi au vendredi.<br><br>Contrairement aux derniÃ¨res annÃ©es, il ne devrait pas y avoir d''essais le week-end. Cela permet au circuit d''avoir un plus grand nombre de spectateurs, mais c''est Ã©galement synonyme d''un personnel plus important et le coÃ»t est plus fort pour les Ã©quipes.<br><br>Avec un dÃ©but des essais un mois plus tard, les Ã©quipes auront plus de temps dÃ©veloppement et il ne devrait pas y avoir de prÃ©sentations de monoplaces avant la fin du mois de fÃ©vrier.</p>', 'published', '', '', '2015-07-15 00:00:00', '2015-07-14 12:21:35', 'article.layout', 1, 'F1---LES-ESSAIS-DEVRAIENT-D%C3%89BUTER-EN-MARS-EN-2016', '', ''),
(4, 'F1 - ALONSO SATISFAIT DE SES ESSAIS', '<p>Fernando Alonso est ravi d&#39;avoir pu beaucoup rouler au Red Bull Ring. Le pilote McLaren a test&eacute; les nouveaut&eacute;s a&eacute;rodynamiques et il a travaill&eacute; sur le moteur.</p><br />\r\n<br /><br />\r\n&nbsp;<br /><br />\r\n&nbsp;<br />\r\n<p>Fernando Alonso a travaill&eacute; sur le nouvel ensemble a&eacute;rodynamique mercredi, dont le nouveau nez plus court. Apr&egrave;s quatre abandons cons&eacute;cutifs, il est ravi d&#39;avoir beaucoup roul&eacute; et donc recueilli beaucoup de donn&eacute;es.<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n&laquo;&nbsp;Cette journ&eacute;e &eacute;tait positive,&nbsp;&raquo; estime l&#39;Espagnol. &laquo;&nbsp;La chose la plus importante &eacute;tait de faire quelques tours dans la voiture apr&egrave;s les probl&egrave;mes que nous avons eus dans les derni&egrave;res courses.&nbsp;&raquo;<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n&laquo;&nbsp;Nous avons r&eacute;ussi &agrave; faire plus de 100 tours, et avec les tours de Stoffel (...), je pense que nous terminons les essais avec de bonnes informations. Maintenant, nous devons revenir &agrave; l&#39;usine et tout analyser, mais nous avons clairement beaucoup de donn&eacute;es pour progresser. Je suis assez satisfait de la fa&ccedil;on dont les essais se sont pass&eacute;s.&nbsp;&raquo;</p><br />\r\n<br /><br />\r\n&nbsp;<br /><br />\r\n&nbsp;<br />\r\n<h3>MCLAREN A TRAVAILL&Eacute; SUR L&#39;A&Eacute;RODYNAMIQUE ET LE MOTEUR</h3><br />\r\n<br /><br />\r\n&nbsp;<br /><br />\r\n&nbsp;<br />\r\n<p>McLaren a surtout test&eacute; ses nouveaut&eacute;s a&eacute;rodynamiques dans la matin&eacute;e et l&#39;&eacute;quipe a cherch&eacute; a mieux exploiter le groupe propulseur Honda dans l&#39;apr&egrave;s-midi, ce qu&#39;elle avait aussi fait avec Stoffel Vandoorne le premier jour.<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n&laquo;&nbsp;Notre but &eacute;tait (...) de rester sur cette lanc&eacute;e positive (...), et nous y sommes clairement arriv&eacute;s,&nbsp;&raquo; estime Dave Redding, le manager de l&#39;&eacute;quipe. &laquo;&nbsp;La s&eacute;ance de la matin&eacute;e a d&eacute;but&eacute; avec des contr&ocirc;les de donn&eacute;es et de r&eacute;glages de syst&egrave;mes puis nous avons fait des essais de corr&eacute;lation a&eacute;ro, donc le nouveau nez plus court. &raquo;<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n&laquo;&nbsp;La s&eacute;ance de l&#39;apr&egrave;s-midi a &eacute;t&eacute; d&eacute;di&eacute;e &agrave; de nouveaux essais a&eacute;ro de plusieurs nouveaux composants de carrosserie, d&#39;&eacute;valuations de pneus, et de nouveaux tests d&#39;utilisation du groupe propulseur.&nbsp;&raquo;<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n<br /><br />\r\n&laquo;&nbsp;Les deux journ&eacute;es des essais ont &eacute;t&eacute; productives, et elles ont surtout montr&eacute; de la fiabilit&eacute;, et nous sommes maintenant munis de beaucoup de donn&eacute;es utiles et d&#39;un retour d&#39;informations utile des deux pilotes.&nbsp;&raquo;</p><br />\r\n', 'published', 'F1 - ALONSO SATISFAIT DE SES ESSAIS', 'F1 - ALONSO SATISFAIT DE SES ESSAIS', '2015-07-15 00:00:00', '2015-07-18 11:50:31', 'article.layout', 1, 'F1---ALONSO-SATISFAIT-DE-SES-ESSAIS', 'test', ''),
(5, 'Mon premier titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque sapien lectus, vitae rutrum ante sollicitudin in. Cras accumsan ullamcorper vestibulum. Sed sit amet dolor non neque vulputate bibendum. Vestibulum placerat in nisl vel pretium. Cras commodo sollicitudin erat, at egestas ex lobortis vel. Nulla dapibus sollicitudin nisl eu aliquam. Donec interdum scelerisque suscipit. Donec quis nibh lorem. Sed cursus mattis tellus, a tempus ligula feugiat vitae. Integer faucibus sodales felis id iaculis.In varius convallis lobortis. Vivamus eget molestie nulla, in sodales velit. Fusce a turpis nec risus faucibus rutrum. Suspendisse sit amet velit id tellus commodo porttitor. In interdum quis ipsum ac luctus. Praesent sollicitudin, odio nec tincidunt scelerisque, eros ante varius massa, vitae congue ligula nisi vitae orci. Maecenas eros urna, pellentesque nec feugiat eu, venenatis sed tellus. Cras non sem eu sapien interdum consequat.', 'unpublished', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', ''),
(6, 'Mon premier titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque sapien lectus, vitae rutrum ante sollicitudin in. Cras accumsan ullamcorper vestibulum. Sed sit amet dolor non neque vulputate bibendum. Vestibulum placerat in nisl vel pretium. Cras commodo sollicitudin erat, at egestas ex lobortis vel. Nulla dapibus sollicitudin nisl eu aliquam. Donec interdum scelerisque suscipit. Donec quis nibh lorem. Sed cursus mattis tellus, a tempus ligula feugiat vitae. Integer faucibus sodales felis id iaculis.In varius convallis lobortis. Vivamus eget molestie nulla, in sodales velit. Fusce a turpis nec risus faucibus rutrum. Suspendisse sit amet velit id tellus commodo porttitor. In interdum quis ipsum ac luctus. Praesent sollicitudin, odio nec tincidunt scelerisque, eros ante varius massa, vitae congue ligula nisi vitae orci. Maecenas eros urna, pellentesque nec feugiat eu, venenatis sed tellus. Cras non sem eu sapien interdum consequat.', 'unpublished', '', '', '2015-07-13 19:35:09', '2015-07-13 19:35:09', 'article.layout', 1, 'Mon-premier-titre', '', ''),
(7, 'dfsdfsfdsdf', 'Vestibulum tincidunt turpis a dui finibus, at ullamcorper sapien elementum. Pellentesque interdum tortor non lacus venenatis efficitur. Cras eleifend faucibus ultricies. Nulla lacinia magna ac metus hendrerit, ac viverra nunc fringilla. Cras ultrices fermentum ligula, interdum feugiat nisi tincidunt non. Nullam fringilla, velit ut volutpat venenatis, augue justo lacinia diam, nec ultrices est libero eget nisl. Nam et congue ex. Fusce nec nisi quis massa hendrerit varius a quis mi. Sed a enim quam. Duis faucibus nibh vel ante fermentum vulputate. Morbi quis ipsum et odio venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.', 'unpublished', '', '', '2015-07-13 21:37:32', '2015-07-13 21:37:32', 'article.layout', 1, 'dfsdfsfdsdf', '', ''),
(8, '222', 'Vestibulum tincidunt turpis a dui finibus, at ullamcorper sapien elementum. Pellentesque interdum tortor non lacus venenatis efficitur. Cras eleifend faucibus ultricies. Nulla lacinia magna ac metus hendrerit, ac viverra nunc fringilla. Cras ultrices fermentum ligula, interdum feugiat nisi tincidunt non. Nullam fringilla, velit ut volutpat venenatis, augue justo lacinia diam, nec ultrices est libero eget nisl. Nam et congue ex. Fusce nec nisi quis massa hendrerit varius a quis mi. Sed a enim quam. Duis faucibus nibh vel ante fermentum vulputate. Morbi quis ipsum et odio venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.', 'unpublished', '', '', '2015-07-13 21:37:45', '2015-07-13 21:37:45', 'article.layout', 1, '222', '', ''),
(9, '78342678254', 'amus et lacus vitae ante imperdiet lobortis. Fusce consequat, enim sit amet egestas consequat, metus ligula ultrices arcu, eu commodo massa tellus ut ante. Praesent vitae pharetra eros. Sed laoreet sit amet erat ac ultricies. Proin vitae felis eu lectus cursus sagittis at a risus. Nullam venenatis auctor neque, eu sagittis risus interdum eu.Vestibulum ullamcorper vulputate lobortis. Donec commodo auctor urna, sit amet pellentesque est auctor eu. Sed justo tellus, rhoncus quis ullamcorper id, ullauere iaculis gravida. Vivamus sed li venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.Ut vitae mi nisl. Cras vulputate turpis nunc, ac consectetur mi lacinia a. Etiam at neque a est tempus luctus vitae eu elit. Aenean vestibulum tempor aliquet. Maecenas id lorem arcu. Donec aliquam, enim non ultrices molestie, libero sapien commodo odio, quis aliquet massa diam nec nulla. Etiam luctus, lacus sed hendrerit te', 'unpublished', '', '', '2015-07-13 21:38:12', '2015-07-13 21:38:12', 'article.layout', 1, '78342678254', '', ''),
(10, 'DERNIER', 'amus et lacus vitae ante imperdiet lobortis. Fusce consequat, enim sit amet egestas consequat, metus ligula ultrices arcu, eu commodo massa tellus ut ante. Praesent vitae pharetra eros. Sed laoreet sit amet erat ac ultricies. Proin vitae felis eu lectus cursus sagittis at a risus. Nullam venenatis auctor neque, eu sagittis risus interdum eu.Vestibulum ullamcorper vulputate lobortis. Donec commodo auctor urna, sit amet pellentesque est auctor eu. Sed justo tellus, rhoncus quis ullamcorper id, ullamcorper non neque. Aliquam aliquet erat vel purus auctor, a efficitur felis semper. Donec urna nulla, ullamcorper et consectetur eu, porta sit amet ante. Proin felis nulla, tincidunt id dignissim sit amet, sagittis tristique odio. Integer augue erat, congue ut tristique at, dictum eu nibh. Morbi turpis lorem, tristique ut iaculis in, mollis id risus. Ut quis ligula velit. In sit amet pulvinar sem, id consequat purus. Nam sed sem risus. Proin venenatis commodo aliquam. Quisque aliquet sem posuere iaculis gravida. Vivamus sed ligula urna. In odio nisi, molestie in rutrum at, pellentesque nec enim.Vestibulum tincidunt turpis a dui finibus, at ullamcorper sapien elementum. Pellentesque interdum tortor non lacus venenatis efficitur. Cras eleifend faucibus ultricies. Nulla lacinia magna ac metus hendrerit, ac viverra nunc fringilla. Cras ultrices fermentum ligula, interdum feugiat nisi tincidunt non. Nullam fringilla, velit ut volutpat venenatis, augue justo lacinia diam, nec ultrices est libero eget nisl. Nam et congue ex. Fusce nec nisi quis massa hendrerit varius a quis mi. Sed a enim quam. Duis faucibus nibh vel ante fermentum vulputate. Morbi quis ipsum et odio venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.Ut vitae mi nisl. Cras vulputate turpis nunc, ac consectetur mi lacinia a. Etiam at neque a est tempus luctus vitae eu elit. Aenean vestibulum tempor aliquet. Maecenas id lorem arcu. Donec aliquam, enim non ultrices molestie, libero sapien commodo odio, quis aliquet massa diam nec nulla. Etiam luctus, lacus sed hendrerit tem', 'unpublished', '', '', '2015-07-13 21:40:05', '2015-07-13 21:40:05', 'article.layout', 1, 'DERNIER', '', ''),
(11, 'sdfsdf', 'amus et lacus vitae ante imperdiet lobortis. Fusce consequat, enim sit amet egestas consequat, metus ligula ultrices arcu, eu commodo massa tellus ut ante. Praesent vitae pharetra eros. Sed laoreet sit amet erat ac ultricies. Proin vitae felis eu lectus cursus sagittis at a risus. Nullam venenatis auctor neque, eu sagittis risus interdum eu.Vestibulum ullamcorper vulputate lobortis. Donec commodo auctor urna, sit amet pellentesque est auctor eu. Sed justo tellus, rhoncus quis ullamcorper id, ullamcorper non neque. Aliquam aliquet erat vel purus auctor, a efficitur felis semper. Donec urna nulla, ullamcorper et consectetur eu, porta sit amet ante. Proin felis nulla, tincidunt id dignissim sit amet, sagittis tristique odio. Integer augue erat, congue ut tristique at, dictum eu nibh. Morbi turpis lorem, tristique ut iaculis in, mollis id risus. Ut quis ligula velit. In sit amet pulvinar sem, id consequat purus. Nam sed sem risus. Proin venenatis commodo aliquam. Quisque aliquet sem posuere iaculis gravida. Vivamus sed ligula urna. In odio nisi, molestie in rutrum at, pellentesque nec enim.Vestibulum tincidunt turpis a dui finibus, at ullamcorper sapien elementum. Pellentesque interdum tortor non lacus venenatis efficitur. Cras eleifend faucibus ultricies. Nulla lacinia magna ac metus hendrerit, ac viverra nunc fringilla. Cras ultrices fermentum ligula, interdum feugiat nisi tincidunt non. Nullam fringilla, velit ut volutpat venenatis, augue justo lacinia diam, nec ultrices est libero eget nisl. Nam et congue ex. Fusce nec nisi quis massa hendrerit varius a quis mi. Sed a enim quam. Duis faucibus nibh vel ante fermentum vulputate. Morbi quis ipsum et odio venenatis efficitur. Nunc blandit facilisis diam ac posuere. Pellentesque congue id quam ut vestibulum.Ut vitae mi nisl. Cras vulputate turpis nunc, ac consectetur mi lacinia a. Etiam at neque a est tempus luctus vitae eu elit. Aenean vestibulum tempor aliquet. Maecenas id lorem arcu. Donec aliquam, enim non ultrices molestie, libero sapien commodo odio, quis aliquet massa diam nec nulla. Etiam luctus, lacus sed hendrerit tem', 'unpublished', '', '', '2015-07-13 21:43:58', '2015-07-13 21:43:58', 'article.layout', 1, 'sdfsdf', '', ''),
(12, 'Mon presdfsfsdfmier titre', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer leo metus, congue sed malesuada nec, luctus quis nibh. Proin vel felis turpis. Nulla vitae eleifend nulla. Donec vel eros ultricies, tincidunt massa posuere, semper metus. Aenean consequat sit amet mi nec faucibus. Proin efficitur molestie diam laoreet semper. Praesent a tincidunt ex, a egestas dolor. Vestibulum pulvinar arcu vel purus mollis consectetur. Donec efficitur ex a velit tincidunt, ac sodales leo molestie.Etiam sit amet sem nec eros egestas accumsan. Nunc rhoncus, lectus ac viverra maximus, lorem felis gravida ante, nec rutrum nisi quam vel tortor. Curabitur quis diam quis justo venenatis mattis at vitae risus. Curabitur elementum sapien neque, non congue dolor mollis a. Donec non mi metus. Morbi malesuada nisl vitae pharetra tempor. Quisque quam ligula, vestibulum sit amet est nec, iaculis ultricies nibh.', 'unpublished', '', '', '2015-07-13 23:55:53', '2015-07-13 23:55:53', 'article.layout', 1, 'Mon-presdfsfsdfmier-titre', '', ''),
(13, 'Nouveau titre', '<p>ergergergegrthr</p><br />\r\n<br />\r\n<p></p><br />\r\n<br />\r\n<p>thr</p><br />\r\n<br />\r\n<p>rt</p><br />\r\n<br />\r\n<p>hrhr</p><br />\r\n', 'unpublished', 'Nouveau titre', 'Nouvelle description', '2015-07-17 18:39:37', '2015-07-17 18:39:37', 'article.layout', 1, 'Nouveau-titre', 'Nouveau titre', ''),
(14, 'Nouveau titre', 'regerg', 'unpublished', 'sfdsf', 'gregre', '2015-07-17 18:43:43', '2015-07-17 18:43:43', 'article.layout', 1, 'Nouveau-titre', 'Nouveau titre', '');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idcategorie` int(11) NOT NULL,
  `nom_categorie` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
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
-- Table structure for table `media`
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
-- Table structure for table `page_categorie`
--

CREATE TABLE `page_categorie` (
  `idpage_categorie` int(11) NOT NULL,
  `page_idpage` int(11) NOT NULL,
  `categorie_idcategorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
  `token` text
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `date_inscription`, `password`, `can_modify_categories`, `can_modify_user`, `can_modify_page`, `can_modify_commentaire`, `can_modify_media`, `token`) VALUES
(1, 'ppg', 'philgranger@orange.fr', '2015-04-02 00:00:00', 'b0b9029e6e88fcf7d4d5196b1478cde5c9eb14e7', 1, 1, 1, 1, 1, 'cebb1caefdd7ba24a5b9537fd10e40199b8df343'),
(2, 'ssf', 'stevesaintfleur@orange.fr', '2015-04-13 00:00:00', 'b0b9029e6e88fcf7d4d5196b1478cde5c9eb14e7', 0, 1, 0, 1, 1, ''),
(3, 'oualid', 'oualid@orange.fr', '2015-06-18 00:00:00', 'b0b9029e6e88fcf7d4d5196b1478cde5c9eb14e7', 0, 0, 0, 1, 0, ''),
(4, 'oierhgoiehg', 'dsfsdf@orange.fr', '2015-07-17 18:55:39', '421720b557fa58f44362c37e64e4ec40250edc88', 1, 0, 1, 0, 0, ''),
(6, 'ergrthtrhtrgoiehg', 'dsdfsdfdsff@orange.fr', '2015-07-17 18:55:39', '421720b557fa58f44362c37e64e4ec40250edc88', 0, 1, 0, 1, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `fk_page_membre1_idx` (`idmembre`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idcategorie`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idcommentaire`),
  ADD KEY `fk_commentaire_page_idx` (`page_idpage`),
  ADD KEY `fk_commentaire_membre1_idx` (`membre_idmembre`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`idmedia`),
  ADD KEY `fk_media_page1_idx` (`page_idpage`);

--
-- Indexes for table `page_categorie`
--
ALTER TABLE `page_categorie`
  ADD PRIMARY KEY (`idpage_categorie`),
  ADD KEY `fk_page_categorie_page1_idx` (`page_idpage`),
  ADD KEY `fk_page_categorie_categorie1_idx` (`categorie_idcategorie`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idcategorie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idcommentaire` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `idmedia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `page_categorie`
--
ALTER TABLE `page_categorie`
  MODIFY `idpage_categorie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

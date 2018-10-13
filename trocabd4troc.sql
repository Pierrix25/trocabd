-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Client :  mysql51-50.perso
-- Généré le :  Sam 27 Août 2016 à 19:12
-- Version du serveur :  5.5.46-0+deb7u1-log
-- Version de PHP :  5.4.45-0+deb7u4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `trocabd4troc`
--

-- --------------------------------------------------------

--
-- Structure de la table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL,
  `talbum` varchar(255) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  `dateparu` varchar(50) DEFAULT NULL,
  `depotlegal` varchar(20) DEFAULT NULL,
  `histoire` varchar(1592) DEFAULT NULL,
  `integrale` int(10) DEFAULT NULL,
  `isbn` varchar(255) DEFAULT NULL,
  `issn` varchar(255) DEFAULT NULL,
  `nbrepage` varchar(5) DEFAULT NULL,
  `editeur_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `serie_id` int(11) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `note` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=657 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `album`
--

INSERT INTO `album` (`id`, `talbum`, `commentaire`, `dateparu`, `depotlegal`, `histoire`, `integrale`, `isbn`, `issn`, `nbrepage`, `editeur_id`, `genre_id`, `serie_id`, `photo1`, `photo2`, `utilisateur_id`, `note`) VALUES
(1, 'Astérix le gaulois', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'Exemple01.jpg', 'Exemple01.jpg', 0, 0),
(2, 'La serpe d or', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'Exemple02.jpg', 'Exemple02.jpg', 0, 0),
(3, 'Astérix et les Goths', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Exemple03.jpg', ' ', 0, 0),
(4, 'Astérix Gladiateur', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'Exemple04.jpg', 'Exemple04.jpg', 0, 0),
(5, 'Le tour de Gaule', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'Exemple05.jpg', 'Exemple05.jpg', 0, 0),
(6, 'Le jour du soleil noir', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'Exemple06.jpg', 'Exemple06.jpg', 0, 0),
(7, 'Là où va l indien', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'Exemple07.jpg', 'Exemple07.jpg', 0, 0),
(8, 'Toutes les larmes de l enfer', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'Exemple08.jpg', 'Exemple08.jpg', 0, 0),
(9, 'SPADS', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'Exemple09.jpg', 'Exemple09.jpg', 0, 0),
(10, 'Astérix et Cléopatre', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco06.jpg', 'dos_BEL22950_22950.jpg', 0, 0),
(11, 'Le combat des chefs', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco07.jpg', 'asterix7v_22952.jpg', 0, 0),
(12, 'Astérix chez les Bretons', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco08.jpg', 'asterix08v_22953.jpg', 0, 0),
(13, 'Astérix et les Normands', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco09.jpg', 'asterix9v_22954.jpg', 0, 0),
(14, 'Astérix Légionnaire', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix10.jpg', 'asterixlegionnaire10dargaudv.jpg', 0, 0),
(15, 'Le bouclier Arverne', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco11.jpg', 'Verso_Asterix_11_bel22956_22956.jpg', 0, 0),
(16, 'Astérix aux jeux Olympiques', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco12.jpg', 'asterix12v_22957.jpg', 0, 0),
(17, 'Astérix et le chaudron', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix13.jpg', 'Asterix13_v_32521.jpg', 0, 0),
(18, 'Astérix en Hispanie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco14.jpg', 'asterix14v_22959.jpg', 0, 0),
(19, 'La zizanie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix15couv.jpg', 'Asterix15_v_22960.jpg', 0, 0),
(20, 'Astérix chez les Helvètes', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco16.jpg', 'asterix16v_22961.jpg', 0, 0),
(21, 'Le domaine des dieux', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix17.jpg', 'Asterix17_v_22962.jpg', 0, 0),
(22, 'Les lauriers de César', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco18.jpg', 'asterix18v.jpg', 0, 0),
(23, 'Le devin', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco19.jpg', 'Asterix19_v_89.jpg', 0, 0),
(24, 'Astérix en Corse', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco20.jpg', 'asterix20v_90.jpg', 0, 0),
(25, 'Le cadeau de César', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco21.jpg', 'asterix21v.jpg', 0, 0),
(26, 'La grande traversée', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix22.jpg', 'asterix22v_94.jpg', 0, 0),
(27, 'Obélix et compagnie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'Asterix23.jpg', 'asterix23v_96.jpg', 0, 0),
(28, 'Astérix chez les Belges', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix24.jpg', 'asterix24v_99.jpg', 0, 0),
(29, 'Le grand Fossé', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix25.jpg', 'Asterix25_v_100.jpg', 0, 0),
(30, 'L odyssée d Astérix', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix26eo.jpg', 'asterix26v_101.jpg', 0, 0),
(31, 'Le fils d Astérix', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix27.jpg', 'Verso_Asterix_27_bel102_102.jpg', 0, 0),
(32, 'Astérix chez Rahazade', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix28.jpg', 'asterix28v_104.jpg', 0, 0),
(33, 'La rose et le glaive', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix29.jpg', 'asterix29v_105.jpg', 0, 0),
(34, 'La galère d Obélix', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix30.jpg', 'Asterix30_v_984.jpg', 0, 0),
(35, 'Astérix et Latraviata', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix31.jpg', 'asterix31v_2160.jpg', 0, 0),
(36, 'Astérix et la rentrée gauloise', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterixhorsserie01hs.jpg', 'Asterix_HS01v_106.jpg', 0, 0),
(37, 'Le ciel lui tombe sur la tête', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'Asterix33.jpg', 'asterix33v_51223.jpg', 0, 0),
(38, 'L anniversaire d Astérix & Obélix - Le livre d or', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'Asterix34_21102009_193555.jpg', 'Asterix34_21102009_193555.jpg', 0, 0),
(39, '«Avons-nous les bons pneus ?»', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'AvonsnousLesBonsPneus.jpg', ' ', 0, 0),
(40, ' Et patati et patata... ', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 0, 'etpatatietpatata01.JPG', 'etpatatietpatatav_26894.jpg', 0, 0),
(41, ' Invincible ', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Couv_118211.jpg', ' ', 0, 0),
(42, 'Les  Makrel  en folie!...', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'HorsSerieFouyaya2_24062005.jpg', ' ', 0, 0),
(43, ' 0  n égale pas zéro', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ONegalePasZero1mr_09102005.jpg', ' ', 0, 0),
(44, 'Tome 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'S1_08052007.jpg', ' ', 0, 0),
(45, 'Tome 2', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'S2_08052007.jpg', ' ', 0, 0),
(46, 'Tome 3', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'S3_08052007.jpg', ' ', 0, 0),
(47, '(A)Mère', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'amere_1_41191.jpg', ' ', 0, 0),
(48, 'Rouge total', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii05couv.JPG', 'xiii05_verso.jpg', 0, 0),
(49, 'Le dossier Jason Fly', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii06couv.JPG', 'xiii06_verso.jpg', 0, 0),
(50, 'La nuit du 3 août', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii07couv.JPG', 'xiii07_verso.jpg', 0, 0),
(51, 'Treize contre un', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii08couv.JPG', 'xiii08_verso.jpg', 0, 0),
(52, 'Pour Maria', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii09couv.JPG', 'xiii09_verso.jpg', 0, 0),
(53, 'El cascador', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii10couv.JPG', 'xiii10_verso.jpg', 0, 0),
(54, 'Trois montres d argent', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii11couv.JPG', 'xiii11_verso.jpg', 0, 0),
(55, 'Le jugement', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii12couv.JPG', 'xiii12_verso.jpg', 0, 0),
(56, 'The XIII mystery - L enquête', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii13.jpg', 'xiii13_verso.jpg', 0, 0),
(57, 'Secret défense', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii14.jpg', 'xiii14_verso.jpg', 0, 0),
(58, 'Lachez les chiens !', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii15.jpg', 'xiii15_verso.jpg', 0, 0),
(59, 'Opération Montecristo', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii16couv.JPG', 'xiii16_verso.jpg', 0, 0),
(60, 'L or de Maximilien', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'XIII17.jpg', 'xiii17_verso.jpg', 0, 0),
(61, 'La version Irlandaise', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii18.jpg', 'xiii18v.jpg', 0, 0),
(62, 'Le dernier round', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 24, 0, 'xiii19couv.jpg', 'xiii19v.jpg', 0, 0),
(63, 'À 18 ans sous les balles au Vercors', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 29, 16, 27, 'A18AnsSousLesBallesAuVercors_02022008_092228.jpg', 'AuVercors_v_71290.jpg', 0, 0),
(64, 'À B.', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 43, 0, 28, 'AB._04062007_105832.jpg', 'AB._04062007_105832.jpg', 0, 0),
(65, 'Prends ta place !', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ALaDecouverteDesMetiersDesIndustriesAlimentaire1f_24012005.jpg', ' ', 0, 0),
(66, 'L affaire Bassière', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 18, 0, 0, 'AffaireBassiereL_21012008_152949.jpg', 'AffaireBassiereL_21012008_152949.jpg', 0, 0),
(67, 'L affaire se Corse', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 64, 0, 0, 'affairesecrose_36951.jpg', 'affairesecrosev_36951.jpg', 0, 0),
(68, 'L afrique de papa', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 21, 0, 0, 'Couv_113003.jpg', 'Verso_113003.jpg', 0, 0),
(69, 'Coffret 3 tomes', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ClassiquesDeAgathaChristieLes_12092005.jpg', ' ', 0, 0),
(70, 'Le Secret de Chimneys', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachistieproust01.jpg', 'agathachristie01v.jpg', 0, 0),
(71, 'Mort sur le Nil', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristieproust02.jpg', 'agathachristie02v.jpg', 0, 0),
(72, 'Dix Petits Nègres', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristieproust03.jpg', 'agathachristie03v.jpg', 0, 0),
(73, 'Le Crime de L Orient-Express', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristiecouv01a.jpg', 'agathachristie04v.jpg', 0, 0),
(74, 'Mister Brown', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristieproust05.jpg', 'agathachristie05v.jpg', 0, 0),
(75, 'La Nuit qui ne finit pas', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristiecouv07.jpg', 'agathachristie06v.jpg', 0, 0),
(76, 'Le Crime du Golf', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristieproust07.jpg', 'agathachristie07v.jpg', 0, 0),
(77, 'Le Meurtre de Roger Ackroyd', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristieproust08.jpg', 'agathachristie08v.jpg', 0, 0),
(78, 'L Affaire Protheroe', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristie09.jpg', 'agathachristie09v.jpg', 0, 0),
(79, 'L homme au complet marron', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'AgathaChristie10_17062005.jpg', 'agathachristie10v.jpg', 0, 0),
(80, 'Le Train Bleu', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'AgathaChristie11.jpg', 'agathachristie11v.jpg', 0, 0),
(81, 'Meurtre en Mésopotamie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'AgathaChristie12_10122005.jpg', 'agathachristie12v.jpg', 0, 0),
(82, 'Les Quatre', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'aghatachristie13couv.jpg', 'agathachristie13v.jpg', 0, 0),
(83, 'Témoin indésirable', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'AgathaChristie14_20112006.jpg', 'agathachristie14v.jpg', 0, 0),
(84, 'Le crime d halloween', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristie15.jpg', 'agathachristie15v.jpg', 0, 0),
(85, 'Cartes sur table', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristieep16_87043.jpg', 'agathachristieep16v_87043.jpg', 0, 0),
(86, 'Témoin muet', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'AgathaChristie17_28062009_165132.jpg', 'AgathaChristie17_28062009_165132.jpg', 0, 0),
(87, 'Cinq petits cochons', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristie18_93658.jpg', 'agathachristie18v_93658.jpg', 0, 0),
(88, 'La maison du péril', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'agathachristie19_100649.jpg', 'agathachristie19v_100649.jpg', 0, 0),
(89, 'Les oiseaux du lac Stymphale', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 32, 25, 33, 'AGATHACHRISTIE_20EP_112341.jpg', 'AGATHACHRISTIE_20EPv_112341.jpg', 0, 0),
(90, 'Lucky Luke à 50 ans', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'LuckyLuke_21052006.jpg', ' ', 0, 0),
(91, 'Histoire d un dessin animé', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLukeHistoireDA_02032004.jpg', 'Verso_33705.jpg', 0, 0),
(92, 'La ballade des Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Luckylukelaballadedesdalton_17122002.jpg', ' ', 0, 0),
(93, 'Le cuisinier français', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 49, 30, 34, 'LuckyLuke72_08032003.jpg', 'luckylukehsgv.jpg', 0, 0),
(94, 'Tous à l ouest', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 49, 30, 34, 'LuckyLukehs_18032008_193043.jpg', 'luckylukehstousalouestv_72826.jpg', 0, 0),
(95, 'La mine d or de Dick Digger', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckyluke01_241.jpg', 'luckyluke01v_241.jpg', 0, 0),
(96, 'Rodéo', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'luckyluke02eo_5955.jpg', ' ', 0, 0),
(97, 'Arizona', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'luckyluke03.jpg', ' ', 0, 0),
(98, 'Sous le ciel de l Ouest', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckyluke04.jpg', 'luckyluke04v.jpg', 0, 0),
(99, 'Lucky Luke contre Pat Poker', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckyluke5_03112002.jpg', 'luckyluke05v.jpg', 0, 0),
(100, 'Hors-la-loi', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckylukedupuis06eo.jpg', 'luckyluke06v.jpg', 0, 0),
(101, 'L elixir du docteur Doxey', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckyluke7_03112002.jpg', 'luckyluke07v.jpg', 0, 0),
(102, 'Lucky Luke et Phil Defer', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckylukecouv08eo.jpg', 'luckyluke08v.jpg', 0, 0),
(103, 'Des rails sur la prairie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckyluke09couv.jpg', 'luckyluke09v.jpg', 0, 0),
(104, 'Alerte aux Pieds-Bleus', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckyluke10_03112002.jpg', 'luckyluke10v.jpg', 0, 0),
(105, 'Lucky Luke contre Joss Jamon', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckyluke11_03112002.jpg', 'luckyluke11v.jpg', 0, 0),
(106, 'Les cousins Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke12.jpg', 'luckyluke12v.jpg', 0, 0),
(107, 'Le juge', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke13.jpg', 'luckyluke13v.jpg', 0, 0),
(108, 'Ruée sur l Oklahoma', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke14.jpg', 'luckyluke14v.jpg', 0, 0),
(109, 'L évasion des Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckyluke15eo_4014.jpg', 'luckyluke15v.jpg', 0, 0),
(110, 'En remontant le Mississipi', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckyluke16couv.jpg', 'luckyluke16v.jpg', 0, 0),
(111, 'Sur la piste des Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke17DupuisRecto.jpg', 'luckyluke17v.jpg', 0, 0),
(112, 'A l ombre des derricks', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke18.jpg', 'luckyluke18v.jpg', 0, 0),
(113, 'Les rivaux de Painful Gulch', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'LuckyLuke19.jpg', ' ', 0, 0),
(114, 'Billy the Kid', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke20.jpg', 'luckyluke20v.jpg', 0, 0),
(115, 'Les collines noires', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'luckylucke21.jpg', ' ', 0, 0),
(116, 'Les Dalton dans le blizzard', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckylukedupuis22eo.jpg', 'luckyluke22v.jpg', 0, 0),
(117, 'Les Dalton courent toujours', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke23.jpg', 'Verso_5960.jpg', 0, 0),
(118, 'La caravane', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckylucke24.jpg', 'luckyluke24v.jpg', 0, 0),
(119, 'La ville fantôme', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'LuckyLuke25.jpg', ' ', 0, 0),
(120, 'Les Dalton se rachètent', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke26.jpg', 'luckyluke26v.jpg', 0, 0),
(121, 'Le 20ème de cavalerie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke27.jpg', 'luckyluke27v_254.jpg', 0, 0),
(122, 'L escorte', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckylucke28.jpg', 'luckyluke28v.jpg', 0, 0),
(123, 'Des barbelés sur la prairie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke29.jpg', 'luckyluke29v.jpg', 0, 0),
(124, 'Calamity Jane', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'luckylucke30.jpg', 'luckyluke30v.jpg', 0, 0),
(125, 'Tortillas pour les Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 34, 'LuckyLuke31.jpg', 'luckyluke31v.jpg', 0, 0),
(126, '7 histoires complètes - Série 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke42EODargaud.jpg', 'luckyluke42v_26225.jpg', 0, 0),
(127, 'Le cavalier blanc', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckylukec43.jpg', 'luckyluke43v.jpg', 0, 0),
(128, 'La guérison des Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckyluke44_5976.jpg', 'luckyluke44eov_5976.jpg', 0, 0),
(129, 'L empereur Smith', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke45.jpg', 'luckyluke45v.jpg', 0, 0),
(130, 'Le fil qui chante', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke46.jpg', 'luckyluke46v.jpg', 0, 0),
(131, 'Le magot des Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckyluckecouv47.jpg', 'luckyluke47v.jpg', 0, 0),
(132, 'Le bandit manchot', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckylucke48couv.jpg', 'luckyluke48v.jpg', 0, 0),
(133, 'La corde du pendu', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke49.jpg', 'luckyluke49v.jpg', 0, 0),
(134, 'Sarah Bernhardt', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckyluke49couv.jpg', 'Verso_32375.jpg', 0, 0),
(135, 'Daisy Town', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke51DargaudRecto.jpg', 'Verso_5984.jpg', 0, 0),
(136, 'Fingers', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'luckyluke52.jpg', ' ', 0, 0),
(137, 'Le Daily Star', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckylucke54.jpg', 'luckyluke53v.jpg', 0, 0),
(138, 'La fiancée de Lucky Luke', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke54.jpg', 'luckyluke54v.jpg', 0, 0),
(139, 'La ballade des Dalton et autres histoires', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke55.jpg', 'luckyluke55v.jpg', 0, 0),
(140, 'Le ranch maudit', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke56.jpg', 'luckyluke56v.jpg', 0, 0),
(141, 'Nitroglycérine', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke57.jpg', 'luckyluke57v.jpg', 0, 0),
(142, 'L alibi', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke58.jpg', 'luckyluke58v.jpg', 0, 0),
(143, 'Le Pony Express', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckyluke59couv.JPG', 'luckyluke59v.jpg', 0, 0),
(144, 'L amnésie des Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 50, 30, 34, 'LuckyLuke60.jpg', 'luckyluke60v.jpg', 0, 0),
(145, 'Chasse aux fantômes', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 50, 30, 34, 'luckyluke61couv.jpg', 'luckyluke61v.jpg', 0, 0),
(146, 'Les Dalton à la noce', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 50, 30, 34, 'LuckyLuke62.jpg', 'luckyluke62v.jpg', 0, 0),
(147, 'Le pont sur le Mississipi', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 50, 30, 34, 'LuckyLuke63.jpg', 'luckyluke63v.jpg', 0, 0),
(148, 'Belle Starr', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 50, 30, 34, 'luckyluke64couv.jpg', 'luckyluke64v.jpg', 0, 0),
(149, 'Le Klondike', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 50, 30, 34, 'LuckyLuke65.JPG', 'luckyluke65v_5998.jpg', 0, 0),
(150, 'O.K. Corral', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 50, 30, 34, 'luckyluke66couv.jpg', 'luckyluke66v.jpg', 0, 0),
(151, 'Marcel Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 50, 30, 34, 'LuckyLuke67.JPG', 'luckyluke67v.jpg', 0, 0),
(152, 'Le prophète', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 49, 30, 34, 'luckyluke68couv.jpg', 'luckyluke68v.jpg', 0, 0),
(153, 'L artiste peintre', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 49, 30, 34, 'luckyluke70couv.jpg', 'luckyluke69v_6002.jpg', 0, 0),
(154, 'La légende de l ouest', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 49, 30, 34, 'luckylucke71.jpg', 'luckyluke70v.jpg', 0, 0),
(155, 'Un bricoleur averti en vaut deux', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 67, 17, 35, 'bcommebricoleur01_76546.jpg', 'bcommebricoleur01v_76546.jpg', 0, 0),
(156, 'Gags de poche n°21', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'BouleEtBill1hs8_15062009_182555.jpg', 'BouleEtBill1hs8_15062009_182555.jpg', 0, 0),
(157, 'Bill a disparu', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Boule&BillBillADisparuSup_30042003.jpg', ' ', 0, 0),
(158, 'L Album de Famille', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'BouleetBillAlbumdeFamille_23112003.JPG', ' ', 0, 0),
(159, 'Boule et Bill font la fête', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'boule&billhs04.jpg', ' ', 0, 0),
(160, 'Bill a du cachet', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 14, 17, 2, 'Robabilladucachet_04112002.JPG', 'bouleetbillhs05v.jpg', 0, 0),
(161, 'Envois de toutes les couleurs', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 2, 'bouleetbillenvoisdetouteslescouleur_17564.jpg', 'bouleetbillhs06v.jpg', 0, 0),
(162, 'Best of', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'bouleetbillbestof_08092003.JPG', ' ', 0, 0),
(163, 'Best of', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'BouleEtBill1hs9_04102009_154338.jpg', 'BouleEtBill1hs9_04102009_154338.jpg', 0, 0),
(164, 'Kid Comix #10', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Couv_113649.jpg', 'Verso_113649.jpg', 0, 0),
(165, 'Boule contre les mini-requins', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'BouleEtBill10mr_10102005.jpg', 'boulebill00mrv.jpg', 0, 0),
(166, '60 gags de Boule et Bill n°1', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'bouleetbill01.jpg', ' ', 0, 0),
(167, '60 gags de Boule et Bill n°2', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Boule_et_Bill_02_5892.jpg', ' ', 0, 0),
(168, '60 gags de Boule et Bill n°3', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'bouleetbill03.jpg', 'boulebill03v.jpg', 0, 0),
(169, '60 gags de Boule et Bill n°4', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_04_3447.jpg', 'boulebill04v.jpg', 0, 0),
(170, '60 gags de Boule et Bill n°5', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_05_3448.jpg', 'boulebill05v.jpg', 0, 0),
(171, '60 gags de Boule et Bill n°6', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_06_5893.jpg', 'boulebill06v.jpg', 0, 0),
(172, 'Des gags de Boule et Bill', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'bouleetbill07.jpg', 'boulebill07v.jpg', 0, 0),
(173, 'Papa, Maman, Boule et moi', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_08_3450.jpg', 'boulebill08v.jpg', 0, 0),
(174, 'Une vie de chien', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'BouleetBill109.jpg', 'boulebill09v.jpg', 0, 0),
(175, 'Attention, chien marrant!', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_10_5894.jpg', 'BouleEtBill110v_5894.jpg', 0, 0),
(176, 'Jeux de Bill', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_11_3452.jpg', 'boulebill11v.jpg', 0, 0),
(177, 'Ce coquin de cocker', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_12_5895.jpg', 'boulebill12v.jpg', 0, 0),
(178, 'Carnet de Bill', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Boule_et_Bill_13_5896.jpg', ' ', 0, 0),
(179, 'Ras le Bill !', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_14_120.jpg', 'boulebill14v.jpg', 0, 0),
(180, 'Bill nom d un chien !', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_15_121.jpg', 'boulebill15v.jpg', 0, 0),
(181, 'Souvenirs de famille', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_16_3453.jpg', 'boulebill16v.jpg', 0, 0),
(182, 'Tu te rappelles, Bill ?', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_17_5897.jpg', 'Boule_et_Bill_17v_5897.jpg', 0, 0),
(183, 'Bill est maboul', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_18_122.jpg', 'Boule_et_Bill_18v_122.jpg', 0, 0),
(184, 'Boule et Bill globe-trotters', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_19_3454.jpg', 'Boule_et_Bill_19v_3454.jpg', 0, 0),
(185, 'Strip-Cocker', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_20_5898.jpg', 'Boule_et_Bill_20v_5898.jpg', 0, 0),
(186, 'Billets de Bill', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Boule_et_Bill_21_5899.jpg', 'Boule_et_Bill_21v_5899.jpg', 0, 0),
(187, '22 ! v la Boule & Bill !', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 2, 'Boule_et_Bill_22_5900.jpg', 'boulebill22v.jpg', 0, 0),
(188, ' Faut rigoler!', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 2, 'Boule_et_Bill_23_5901.jpg', 'boulebill23v.jpg', 0, 2),
(189, 'Bwouf Allo Bill?', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 2, 'Boule_et_Bill_24_5902.jpg', 'Boule_et_Bill_24v_5902.jpg', 0, 0),
(190, 'Les quatre saisons', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 2, 'BouleetBill28_01012004.jpg', 'boulebill28v.jpg', 0, 0),
(191, 'Quel cirque !', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 2, 'Boule_et_Bill_26_30145.jpg', 'Boule_et_Bill_26v_30145.jpg', 0, 0),
(192, 'La bande à Bill', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 2, 'Boule_et_Bill_27_47202.jpg', 'Boule_et_Bill_27v_47202.jpg', 0, 0),
(193, 'Astérix le gaulois', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix01_22940.jpg', 'asterix01v_22940.jpg', 0, 0),
(194, 'La serpe d or', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix02eo_22942.jpg', 'asterix02eov_22942.jpg', 0, 0),
(195, 'Astérix et les Goths', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Couv_22944.jpg', ' ', 0, 0),
(196, 'Astérix Gladiateur', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco04.jpg', 'asterix4v_22946.jpg', 0, 0),
(197, 'Le tour de Gaule', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco05.jpg', 'Verso_Asterix_5_bel22948_22948.jpg', 0, 0),
(198, 'Astérix et Cléopatre', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco06.jpg', 'dos_BEL22950_22950.jpg', 0, 0),
(199, 'Le combat des chefs', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco07.jpg', 'asterix7v_22952.jpg', 0, 0),
(200, 'Astérix chez les Bretons', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco08.jpg', 'asterix08v_22953.jpg', 0, 0),
(201, 'Astérix et les Normands', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco09.jpg', 'asterix9v_22954.jpg', 0, 0),
(202, 'Astérix Légionnaire', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix10.jpg', 'asterixlegionnaire10dargaudv.jpg', 0, 0),
(203, 'Le bouclier Arverne', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco11.jpg', 'Verso_Asterix_11_bel22956_22956.jpg', 0, 0),
(204, 'Astérix aux jeux Olympiques', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco12.jpg', 'asterix12v_22957.jpg', 0, 0),
(205, 'Obélix et compagnie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'Asterix23.jpg', 'asterix23v_96.jpg', 0, 0),
(206, 'Astérix chez les Belges', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix24.jpg', 'asterix24v_99.jpg', 0, 0),
(207, 'Le grand Fossé', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix25.jpg', 'Asterix25_v_100.jpg', 0, 0),
(208, 'L odyssée d Astérix', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix26eo.jpg', 'asterix26v_101.jpg', 0, 0),
(209, 'Le fils d Astérix', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix27.jpg', 'Verso_Asterix_27_bel102_102.jpg', 0, 0),
(210, 'Astérix chez Rahazade', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix28.jpg', 'asterix28v_104.jpg', 0, 0),
(211, 'La rose et le glaive', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix29.jpg', 'asterix29v_105.jpg', 0, 0),
(212, 'La galère d Obélix', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix30.jpg', 'Asterix30_v_984.jpg', 0, 0),
(213, 'Astérix et Latraviata', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterix31.jpg', 'asterix31v_2160.jpg', 0, 0),
(214, 'Cap Zéro', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'TanguyetLaverdure07.jpg', 'tanguyetlaverdure07_v_1449.jpg', 0, 0),
(215, 'Pirates du ciel', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TanguyEtLaverdure08EODargaud.jpg', ' ', 0, 0),
(216, 'Les anges noirs', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TanguyetLaverdure09Dargaud.jpg', ' ', 0, 0),
(217, 'Mission speciale', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'tanguyetlaverdure10.jpg', 'TanguyEtLaverdure10_v_5196.jpg', 0, 0),
(218, 'Destination Pacifique', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'TanguyetLaverdure11.jpg', 'tanguyetlaverdure11dargaudv_4412.jpg', 0, 0),
(219, 'Menace sur Mururoa', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'tanguyetlaverdure12.jpg', 'tanguyetlaverdure12_v_1451.jpg', 0, 0),
(220, 'Lieutenant Double Bang', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'TanguyetLaverdure13Dargaud.jpg', 'tanguyetlaverdure13_v_5197.jpg', 0, 0),
(221, 'Baroud sur le désert', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'tanguyetlaverdure14.jpg', 'tanguyetlaverdure14dargaudv_1450.jpg', 0, 0),
(222, 'Les vampires attaquent la nuit', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'TanguyetLaverdure15Dargaud.jpg', 'tanguyetlaverdure15dargaudv_1448.jpg', 0, 0),
(223, 'La terreur vient du ciel', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TanguyetLaverdure16Dargaud.jpg', ' ', 0, 0),
(224, 'Mission dernière chance', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'tanguyetlaverdure17.jpg', 'tanguyetlaverdure17_v_1291.jpg', 0, 0),
(225, 'Un DC.8 a diparu', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'tanguyetlaverdure18.jpg', 'tanguyetlaverdure18dargaudv_5198.jpg', 0, 0),
(226, 'La mystérieuse escadre Delta', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 33, 5, 3, 'tanguyetlaverdure19_c_2004.jpg', 'tanguyetlaverdure19_v_2004.jpg', 0, 0),
(227, 'Opération Tonnerre', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 56, 5, 3, 'tanguyetlaverdure20_c_1293.jpg', 'tanguyetlaverdure20_v_1293.jpg', 0, 0),
(228, 'Premières missions', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 39, 5, 3, 'tanguyetlaverdure21_c_1294.jpg', 'tanguyetlaverdure21_v_1294.jpg', 0, 0),
(229, 'Station brouillard', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tanguyetlaverdure22_c_5199.jpg', ' ', 0, 0),
(230, 'Plan de vol pour l enfer', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 39, 5, 3, 'tanguyetlaverdure23_c_2005.jpg', 'tanguyetlaverdure23_v_2005.jpg', 0, 0),
(231, 'L espion venu du ciel', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tanguyetlaverdure24_c_5200.jpg', ' ', 0, 0),
(232, 'Survol interdit', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tanguyetlaverdure25_c_5201.jpg', ' ', 0, 0),
(233, 'Prisonniers des serbes', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'Tanguylaverdure26_05102002.jpg', 'tanguyetlaverdure2619v.jpg', 0, 0),
(234, 'Opération opium', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'tanguyetlaverdure27.jpg', 'tanguyetlaverdure27v.jpg', 0, 0),
(235, 'Tomes 1 à 4 grand format', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'BaladeAuBoutDuMondecof_30012005.jpg', ' ', 0, 0),
(236, 'L intégrale', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'balade_18012002.jpg', ' ', 0, 0),
(237, 'Intégrale 40 ans - Cycle 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, '84456_c.jpg', ' ', 0, 0),
(238, 'Intégrale du second cycle', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'balade02_18012002.jpg', ' ', 0, 0),
(239, 'Intégrale du troisième cycle', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'BALADE03_18012002.JPG', ' ', 0, 0),
(240, 'Balade, feuille observation clinique', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'BaladeAuBoutDuMondepf_07042004.jpg', ' ', 0, 0),
(241, 'La prison', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumondecouv01.jpg', 'ballademonde14p.jpg', 0, 0),
(242, 'Le grand pays', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumonde02.JPG', 'ballademonde24p.jpg', 0, 0),
(243, 'Rabal le guérisseur', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'Baladeauboutdumonde_11_5361.jpg', 'Baladeauboutdumonde_11v_5361.jpg', 0, 0),
(244, 'L œil du poisson', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumonde12_5362.jpg', 'ballademonde124p.jpg', 0, 0),
(245, 'Les pierres levées', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'Baladeauboutdumonde_13_29304_29304.jpg', 'ballademonde134p.jpg', 0, 0),
(246, 'Pierres invoquées', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumondecouv14.jpg', 'ballademonde144p.jpg', 0, 0),
(247, 'Pierres envoutées', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumonde15couv.JPG', 'ballademonde154p.jpg', 0, 0),
(248, 'Pierres de vérité', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'BaladeAuBoutDuMonde16_20062008_183143.jpg', 'BaladeAuBoutDuMonde16_20062008_183143.jpg', 0, 0),
(249, 'Coffret  1-2-3+Dans le secret du triangle', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TriangleSecretco01_06012002.jpg', ' ', 0, 0),
(250, 'Coffret T1 à T7', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TriangleSecretCoffret_05072003.jpg', ' ', 0, 0),
(251, 'Coffret  4-5-6-7   ex-libris', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TriangleSecretLetl_26042004.jpg', ' ', 0, 0),
(252, 'Dans le secret du triangle', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TriangleSecretHS.jpg', ' ', 0, 0),
(253, 'Géométrie mortelle', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'trianglesecretcouvhs2.jpg', ' ', 0, 0),
(254, 'L intégrale', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 5, 'trianglesecretint01_52532.jpg', 'trianglesecretint01v_52532.jpg', 0, 0),
(255, 'Intégrale 40 ans', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 5, 'trianglesecretint_83823.jpg', 'trianglesecretintverso_83823.jpg', 0, 0),
(256, 'Portfolio - Le Triangle Secret - Glénat', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TriangleSecretLepf_14112004.jpg', ' ', 0, 0),
(257, 'Le testament du fou', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 5, 'trianglesecret01.jpg', 'trianglesecret01v.jpg', 0, 0),
(258, 'Le jeune homme au suaire', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 5, 'trianglesecret02.jpg', 'trianglesecret02v.jpg', 0, 0),
(259, 'De cendre et d or', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 5, 'trianglesecret03.jpg', 'trianglesecret03v.jpg', 0, 0),
(260, 'L Évangile oublié', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 5, 'trianglesecret04.jpg', 'trianglesecret04v.jpg', 0, 0),
(261, 'L infâme mensonge', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 5, 'trianglesecret05.jpg', 'trianglesecret05v.jpg', 0, 0),
(262, 'La diligence', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckyluke32couv.jpg', 'luckyluke32v.jpg', 0, 0),
(263, 'Le Pied-Tendre', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckylukec33.jpg', 'Verso_256.jpg', 0, 0),
(264, 'Dalton city', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'luckyluke34lombard.jpg', ' ', 0, 0),
(265, 'Jesse James', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'luckylukec35.jpg', ' ', 0, 0),
(266, 'Western Circus', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckylukecouv36dargaud.jpg', 'luckyluke36v.jpg', 0, 0),
(267, 'Canyon Apache', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckyluke37.jpg', 'Verso_5970.jpg', 0, 0),
(268, 'Ma Dalton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLukeMaDalton_16012004.jpg', 'luckyluke38v.jpg', 0, 0),
(269, 'Chasseur de primes', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'luckylukec39.jpg', 'luckyluke39v.jpg', 0, 0),
(270, 'Le grand duc', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke40.jpg', 'luckyluke40v.jpg', 0, 0),
(271, 'L héritage de Rantanplan', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 30, 34, 'LuckyLuke41.jpg', 'Verso_43047.jpg', 0, 0),
(272, 'C est au pied du bricoleur qu on voit le mur', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 67, 17, 35, 'bcommebricoleur02_76547.jpg', 'bcommebricoleur02v_76547.jpg', 0, 0),
(273, 'Les experts bricoleurs ami-amis', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 67, 17, 35, 'bcommebricoleur03_87424.jpg', 'bcommebricoleur03v_87424.jpg', 0, 0),
(274, 'B stories', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'BStories_14122008_172650.jpg', ' ', 0, 0),
(275, 'Walnut Grave', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ButchCassidy1_08022006.jpg', ' ', 0, 0),
(276, 'El Paso', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ButchCassidy2_22012007.jpg', ' ', 0, 0),
(277, 'Tome 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ButterflyInTheAir1_20062006.jpg', ' ', 0, 0),
(278, 'Tome 2', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ButterflyInTheAir2_29082006.jpg', ' ', 0, 0),
(279, 'Tome 3', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ButterflyInTheAir3_17102006.jpg', ' ', 0, 0),
(280, 'Tome 4', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ButterflyInTheAir4_17012007.jpg', ' ', 0, 0),
(281, 'Best of - En vadrouille', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 2, 'Couv_105389.jpg', 'Verso_105389.jpg', 0, 0),
(282, 'Boule et bill en famille', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 2, 'Couv_102419.jpg', 'Verso_102419.jpg', 0, 0),
(283, 'Astérix et le chaudron', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix13.jpg', 'Asterix13_v_32521.jpg', 0, 0),
(284, 'Astérix en Hispanie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco14.jpg', 'asterix14v_22959.jpg', 0, 0),
(285, 'La zizanie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix15couv.jpg', 'Asterix15_v_22960.jpg', 0, 0),
(286, 'Astérix chez les Helvètes', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco16.jpg', 'asterix16v_22961.jpg', 0, 0),
(287, 'Le domaine des dieux', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix17.jpg', 'Asterix17_v_22962.jpg', 0, 0),
(288, 'Les lauriers de César', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco18.jpg', 'asterix18v.jpg', 0, 0),
(289, 'Le devin', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco19.jpg', 'Asterix19_v_89.jpg', 0, 0),
(290, 'Astérix en Corse', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco20.jpg', 'asterix20v_90.jpg', 0, 0),
(291, 'Le cadeau de César', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterixco21.jpg', 'asterix21v.jpg', 0, 0),
(292, 'La grande traversée', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 19, 'asterix22.jpg', 'asterix22v_94.jpg', 0, 0),
(293, 'Astérix et la rentrée gauloise', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'asterixhorsserie01hs.jpg', 'Asterix_HS01v_106.jpg', 0, 0),
(294, 'Le ciel lui tombe sur la tête', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'Asterix33.jpg', 'asterix33v_51223.jpg', 0, 0),
(295, 'L anniversaire d Astérix & Obélix - Le livre d or', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 46, 17, 19, 'Asterix34_21102009_193555.jpg', 'Asterix34_21102009_193555.jpg', 0, 0),
(296, 'L avion qui tuait ses pilotes', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TanguyEtLaverdureLAvionQuiTuaitSesPilotes.jpg', ' ', 0, 0),
(297, 'L école des Aigles', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TanguyetLaverdure01.jpg', ' ', 0, 0),
(298, 'Pour l honneur des cocardes', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TanguyEtLaverdure2_12082006.jpg', ' ', 0, 0),
(299, 'Danger dans le ciel', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tanguy3_03112002.jpg', ' ', 0, 0),
(300, 'Escadrille des cigognes', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tanguy4_03112002.jpg', ' ', 0, 0),
(301, 'Mirage sur l Orient', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tanguylaverdure05_38625.jpg', ' ', 0, 0),
(302, 'Canon bleu ne répond plus', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 3, 'tanguyetlaverdure06_c_1230.jpg', 'tanguyetlaverdure06_v_1230.jpg', 0, 0),
(303, 'Le bâtard', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumonde03couv.JPG', 'ballademonde34p.jpg', 0, 0),
(304, 'La pierre de folie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'Baladeauboutdumonde_04_112.jpg', 'Baladeauboutdumonde_04v_112.jpg', 0, 0),
(305, 'Ariane', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'balladeauboutdumonde05_113.jpg', 'Baladeauboutdumonde_05v_113.jpg', 0, 0),
(306, 'A-Ka-Tha', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumondecouv06.JPG', 'Baladeauboutdumonde_06v_1427.jpg', 0, 4),
(307, 'La voix des maîtres', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumonde07_651.jpg', 'Baladeauboutdumonde_07v_651.jpg', 0, 0),
(308, 'Maharani', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumonde08_5358.jpg', 'ballademonde84p.jpg', 0, 0),
(309, 'Les Véritables', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'baladeauboutdumonde09.jpg', 'Baladeauboutdumonde_09v_5359.jpg', 0, 0),
(310, 'Blanche', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 12, 4, 'balladeauboutdumonde10.jpg', 'Baladeauboutdumonde_10v_5360.jpg', 0, 0),
(311, 'La Parole perdue', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 5, 'trianglesecret06.jpg', 'trianglesecret06v.jpg', 0, 0),
(312, 'L imposteur', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 5, 'trianglesecretcouv07.jpg', 'trianglesecret07v.jpg', 0, 0),
(313, 'Hertz', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 6, 'Hertz_30082006.jpg', 'trianglesecrethertz01v.jpg', 0, 0),
(314, 'Intégrale', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, '79795_c.jpg', ' ', 0, 0),
(315, 'Deir el Médineh', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 7, 'GardiensSang2-couv_104681.jpg', 'GardiensSang2-verso_104681.jpg', 0, 0),
(316, 'Le crâne de Cagliostro', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 8, 'TriangleSecret_GardiensDuSang_01_84466.jpg', 'TriangleSecret_GardiensDuSang_01_VER_84466.jpg', 0, 0),
(317, 'Deir el Médineh', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 8, 'GardiensSang2-couv_104681.jpg', 'GardiensSang2-verso_104681.jpg', 0, 0),
(318, 'Intégrale', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, '79795_c.jpg', ' ', 0, 0),
(319, 'L Enquête', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 7, 'inrilenquete.jpg', 'trianglesecretinrihslenquetev.jpg', 0, 0),
(320, 'Le Suaire', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 7, 'inricouv01.JPG', 'inri01v.jpg', 0, 0),
(321, 'La liste rouge', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 7, 'inri02couv.jpg', 'inri02v.jpg', 0, 0),
(322, 'Le Tombeau d Orient', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 7, 'inri03.jpg', 'inri03v.jpg', 0, 0),
(323, 'Résurrection', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 11, 7, 'inri04.JPG', 'inri04v.jpg', 0, 0),
(324, 'Livre 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 9, 'Couv_115605.jpg', 'Verso_115605.jpg', 0, 0),
(325, 'Livre 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 10, 'Couv_115605.jpg', 'Verso_115605.jpg', 0, 0),
(326, 'Tetralogie', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TroisiemeTestamentLecof_20122004.jpg', ' ', 0, 0),
(327, 'Le troisième testament', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 9, 'troisiemetestamentint_68529.jpg', 'troisiemetestamentintv_68529.jpg', 0, 0),
(328, 'Marc ou le réveil du Lion', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'troisiemetestamentcouv01.jpg', ' ', 0, 0),
(329, 'Matthieu ou le visage de l Ange', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 9, 'troisiemetestamentcouv02.jpg', 'troisiemetestament02v.jpg', 0, 0),
(330, 'Luc ou le souffle du taureau', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 9, 'troisiemetestamentcouv03.jpg', 'troisieme03v_2098.jpg', 0, 0),
(331, 'Jean ou le jour du corbeau', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 9, 'troisiemetestamentcouv04.jpg', 'troisiemetestament04v.jpg', 0, 0),
(332, 'Le best of de la BD - 9', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TuniquesBleuesLes_20082005.jpg', ' ', 0, 0),
(333, 'et si je vous racontais ... les Tuniques Bleues', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TuniquesBleuesHS01_13102002.jpg', ' ', 0, 0),
(334, 'Flash Back', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'TuniquesBleuesLeshs2_27022005.jpg', ' ', 0, 0),
(335, 'L hommage aux Tuniques Bleues', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniques_bleues_hs_02_103266.jpg', 'tuniques_bleues_hommagev_103266.jpg', 0, 0),
(336, 'Un chariot dans l Ouest', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues01.jpg', 'tuniquesbleues01v.jpg', 0, 0),
(337, 'Du nord au sud', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquebleueseocouv02.jpg', 'tuniquesbleues02v.jpg', 0, 0),
(338, 'Et pour quinze cents dollars en plus', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues03couv.jpg', 'tuniquesbleues03v.jpg', 0, 0),
(339, 'Outlaw', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquebleueseocouv04.jpg', 'tuniquesbleues04v_34997.jpg', 0, 0),
(340, 'Les déserteurs', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquebleueseocouv05.jpg', 'tuniquesbleues05v.jpg', 0, 0),
(341, 'La prison de Robertsonville', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'TuniquesBleues06.jpg', 'tuniquesbleues06v.jpg', 0, 0),
(342, 'Les bleus de la marine', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleueseocouv07.jpg', 'tuniquesbleues07v.jpg', 0, 0),
(343, 'Les cavaliers du ciel', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquebleueseocouv08.jpg', 'tuniquesbleues08v.jpg', 0, 0),
(344, 'La grande patrouille', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues9couv_37639.jpg', 'tuniquesbleues9v_37639.jpg', 0, 0),
(345, 'Des bleus et des tuniques', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquebleueseocouv10.jpg', 'tuniquesbleues10v.jpg', 0, 0),
(346, 'Des bleus en noir et blanc', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquebleueseocouv11.jpg', 'tuniquesbleues11v.jpg', 0, 0),
(347, 'Les bleus tournent cosaques', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleuesc12.jpg', 'tuniquesbleues12v.jpg', 0, 0),
(348, 'Les bleus dans la gadoue', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues13.jpg', 'TuniquesBleues13v_34998.jpg', 0, 0),
(349, 'Le blanc-bec', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tuniquebleueseocouv14.jpg', ' ', 0, 0),
(350, 'Rumberley', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleuescouv15eo.jpg', 'tuniquesbleues15v.jpg', 0, 0),
(351, 'Bronco Benny', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquebleueseocouv16.jpg', 'tuniquesbleues16v.jpg', 0, 0),
(352, 'El Padre', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues17.jpg', 'tuniquesbleues17v.jpg', 0, 0),
(353, 'Blue Retro', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues18.jpg', 'tuniquesbleues18v.jpg', 0, 0),
(354, 'Le David', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquebleueseocouv19.jpg', 'tuniquesbleues19v.jpg', 0, 0),
(355, 'Black Face', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues20.jpg', 'tuniquesbleues20v.jpg', 0, 0),
(356, 'Les cinq salopards', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleuescouverture21.jpg', 'tuniquesbleues21v.jpg', 0, 0),
(357, 'Des bleus et des dentelles', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues22.jpg', 'tuniquesbleues22v.jpg', 0, 0),
(358, 'Les cousins d en face', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleuesles23couv.JPG', 'tuniquesbleues23v.jpg', 0, 0),
(359, 'Baby blue', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues24.jpg', 'tuniquesbleues24v.jpg', 0, 0),
(360, 'Des bleus et des bosses', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues25.jpg', 'tuniquesbleues25v.jpg', 0, 0),
(361, 'L or du Québec', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues26.jpg', 'tuniquesbleues26v.jpg', 0, 0),
(362, 'Bull Run', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues27.jpg', 'tuniquesbleues27v.jpg', 0, 0),
(363, 'Les bleus de la balle', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues28.jpg', 'tuniquesbleues28v.jpg', 0, 0),
(364, 'En avant l amnésique', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues29.jpg', 'tuniquesbleues29v.jpg', 0, 0),
(365, 'La rose de Bantry', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues30.jpg', 'tuniquesbleues30v.jpg', 0, 0),
(366, 'Drummer Boy', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues31.jpg', 'tuniquesbleues31v.jpg', 0, 0),
(367, 'Les bleus en folie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Tuniquesbleues32.jpg', 'tuniquesbleues32v.jpg', 0, 0),
(368, 'Grumbler et fils', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues33.jpg', 'tuniquesbleues33v.jpg', 0, 0),
(369, 'Vertes années', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues34.jpg', 'tuniquesbleues34v.jpg', 0, 0),
(370, 'Captain Nepel', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues35couv.jpg', 'tuniquesbleues35v.jpg', 0, 0),
(371, 'Quantrill', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues36couv.jpg', 'TuniquesBleuesLes36v_535.JPG', 0, 0),
(372, 'Duel dans la manche', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues37couv.jpg', 'tuniquesbleues37v.jpg', 0, 0),
(373, 'Les planqués', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues38couv.jpg', 'tuniquesbleues38v.jpg', 0, 0),
(374, 'Puppet blues', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues39couv.jpg', 'tuniques39dos_1252.jpg', 0, 0),
(375, 'Les hommes de paille', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues40couv.jpg', 'tuniquesbleues40v.jpg', 0, 0),
(376, 'Les bleus en cavale', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues41couv.jpg', 'tuniquesbleues41v.jpg', 0, 0),
(377, 'Qui veut la peau du Général ?', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues42couv.jpg', 'TuniquesBleuesLes42v_5327.JPG', 0, 0),
(378, 'Des bleus et du blues', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues43couv.jpg', 'tuniquesbleues43v.jpg', 0, 0),
(379, 'L oreille de Lincoln', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues44.jpg', 'tuniquesbleues44v.jpg', 0, 0),
(380, 'Emeutes à New York', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues45couv.jpg', 'tuniquesbleues45v.jpg', 0, 0),
(381, 'Requiem pour un bleu', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues46_01042003.jpg', 'tuniquesbleues46v.jpg', 0, 0),
(382, 'Les Nancy Hart', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleuescouv47.jpg', 'tuniquesbleues47v.jpg', 0, 0),
(383, 'Arabesque', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues48couv.jpg', 'tuniquesbleues48v.jpg', 0, 0),
(384, 'La vallée des bannis', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirouetfantasio41_2795.jpg', ' ', 0, 0);
INSERT INTO `album` (`id`, `talbum`, `commentaire`, `dateparu`, `depotlegal`, `histoire`, `integrale`, `isbn`, `issn`, `nbrepage`, `editeur_id`, `genre_id`, `serie_id`, `photo1`, `photo2`, `utilisateur_id`, `note`) VALUES
(385, 'Spirou à Moscou', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2796.jpg', 'Verso_2796.jpg', 0, 0),
(386, 'Vito la déveine', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2797.jpg', 'Verso_2797.jpg', 0, 0),
(387, 'Le rayon noir', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Spiroufantasio44.jpg', 'spirou44v.jpg', 0, 0),
(388, 'Luna fatale', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2799.jpg', 'Verso_2799.jpg', 0, 0),
(389, 'Machine qui rêve', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasio46_2800.jpg', 'spirouetfantasio46v.jpg', 0, 0),
(390, 'Paris sous-Seine', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_38349.jpg', 'Verso_38349.jpg', 0, 0),
(391, 'L Homme qui ne voulait pas mourir', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_50163.jpg', 'Verso_50163.jpg', 0, 0),
(392, 'Spirou et Fantasio à Tokyo', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasio49_57818.jpg', 'spirouetfantasio49v.jpg', 0, 0),
(393, 'Aux sources du Z', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_79695.jpg', 'Verso_79695.jpg', 0, 0),
(394, 'Mariage à Fort Bow', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleuesles49.jpg', 'tuniquesbleues49v.jpg', 0, 0),
(395, 'La traque', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'TuniquesBleuesLes50_01092006.jpg', 'tuniquesbleues50v.jpg', 0, 0),
(396, 'Stark sous toutes les coutures', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues51.jpg', 'tuniquesbleues51v.jpg', 0, 0),
(397, 'Des bleus dans le brouillard', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues52_76838.jpg', 'tuniquesbleues52v_76838.jpg', 0, 0),
(398, 'Sang bleu chez les Bleus', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'tuniquesbleues53_96776.jpg', 'tuniquesbleues53v_96776.jpg', 0, 0),
(399, 'Miss Walker', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 30, 11, 'Couv_114339.jpg', 'Verso_114339.jpg', 0, 0),
(400, 'Flash Back', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirouflashback_20092003.jpg', ' ', 0, 0),
(401, 'Le best of de la BD - 10', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasiobestofdelabd10.jpg', 'spirouetfantasiobestofdelabd10v.jpg', 0, 0),
(402, 'L héritage', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasiohs1.jpg', 'spirouetfantasiohs01v_2753.jpg', 0, 0),
(403, 'Radar le robot', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirou02hs.JPG', 'spirouetfantasiohs2v_2752.jpg', 0, 0),
(404, 'La Voix sans maître (et 5 autres aventures)', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'SpirouEtFantasioHS3.jpg', 'spirouetfantasiohs3v_28782.jpg', 0, 0),
(405, 'Fantasio et le fantôme (et 4 autres aventures)', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'SpirouEtFantasioHS4_29760.jpg', 'spirouhs04v_29760.jpg', 0, 0),
(406, '4 aventures de Spirou et Fantasio', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasio01_18732.jpg', 'spirouetfantasio01v_18732.jpg', 0, 0),
(407, 'Il y a un sorcier à Champignac', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirouetfantasiocouv02.jpg', ' ', 0, 0),
(408, 'Les chapeaux noirs', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasio03eobelge_18733.jpg', 'spirouetfantasio03eobelgev_18733.jpg', 0, 0),
(409, 'Spirou et les héritiers', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'SpirouEtFantasio4_13082006.jpg', ' ', 0, 0),
(410, 'Les voleurs du Marsupilami', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirouetfantasiocouv05.jpg', ' ', 0, 0),
(411, 'La corne de rhinocéros', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Spirou&Fantasio6Lacor_28012004.jpg', ' ', 0, 0),
(412, 'Le dictateur et le champignon', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirou7_14092002.jpg', ' ', 0, 0),
(413, 'La mauvaise tête', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirouetfantasiocouv08.jpg', ' ', 0, 0),
(414, 'Le repaire de la murène', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Spirou&Fantasio9Lerep_28012004.jpg', ' ', 0, 0),
(415, 'Les pirates du silence', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Spirou&FantasioLespira_28012004.jpg', ' ', 0, 0),
(416, 'Le gorille a bonne mine', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spiroucouv11.jpg', ' ', 0, 0),
(417, 'Le nid des marsupilamis', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spiroucouv12.jpg', ' ', 0, 0),
(418, 'Le voyageur du mésozoïque', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Spirou&Fantasio13Levo_28012004.jpg', ' ', 0, 0),
(419, 'Le prisonnier du Bouddha', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirouetfantasio14eo.jpg', ' ', 0, 0),
(420, 'Z comme Zorglub', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Spirou&Fantasio15ZcommeZorglubC_15102003.jpg', 'spirouetfantasio15v.jpg', 0, 0),
(421, 'L ombre du Z', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spiroucouv16.jpg', 'spirouetfantasio16v.jpg', 0, 0),
(422, 'Spirou et les hommes-bulles', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirou17_14092002.jpg', ' ', 0, 0),
(423, 'QRN sur Bretzelburg', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirouetfantasio18eo.jpg', ' ', 0, 0),
(424, 'Panade à Champignac', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'SpirouEtFantasio19.jpg', 'spirouetfantasio19v.jpg', 0, 0),
(425, 'Le faiseur d or', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirouco20.jpg', ' ', 0, 0),
(426, 'Du glucose pour Noémie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasio21.jpg', 'spirouetfantasio21v_2775.jpg', 0, 0),
(427, 'L abbaye truquée', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Spiroufantasio22.jpg', ' ', 0, 0),
(428, 'Tora Torapa', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Spiroufantasio23.jpg', ' ', 0, 0),
(429, 'Tembo Tabou', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spiroucouv24.jpg', 'spirou24v.jpg', 0, 0),
(430, 'Le gri-gri du Niokolo-Koba', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'spirouetfantasio25.jpg', ' ', 0, 0),
(431, 'Du cidre pour les étoiles', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasio26.jpg', 'Verso_2780.jpg', 0, 0),
(432, 'L Ankou', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Spiroufantasio27.jpg', 'spirouetfantasio27v_2781.jpg', 0, 0),
(433, 'Kodo le tyran', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasio28.jpg', 'spirouetfantasio28v_2782.jpg', 0, 0),
(434, 'Des haricots partout', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2783.jpg', 'Verso_2783.jpg', 0, 0),
(435, 'La ceinture du grand froid', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2784.jpg', 'Verso_2784.jpg', 0, 0),
(436, 'La boîte noire', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2785.jpg', 'Verso_2785.jpg', 0, 0),
(437, 'Les faiseurs de silence', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2786.jpg', 'Verso_2786.jpg', 0, 0),
(438, 'Virus', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetantasio33eo.jpg', 'spirouetfantasio33v_37042.jpg', 0, 0),
(439, 'Aventure en Australie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2788.jpg', 'Verso_2788.jpg', 0, 0),
(440, 'Qui arrêtera Cyanure ?', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2789.jpg', 'Verso_2789.jpg', 0, 0),
(441, 'L horloger de la comète', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'spirouetfantasio36.jpg', 'spirouetfantasio36v_42349.jpg', 0, 0),
(442, 'Le réveil du Z', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2791.jpg', 'Verso_2791.jpg', 0, 0),
(443, 'La jeunesse de Spirou', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_42795.jpg', 'Verso_42795.jpg', 0, 0),
(444, 'Spirou à New-York', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_19531.jpg', 'Verso_19531.jpg', 0, 0),
(445, 'La frousse aux trousses', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_2794.jpg', 'Verso_2794.jpg', 0, 0),
(446, 'Alerte aux Zorkons', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 5, 12, 'Couv_114380.jpg', 'Verso_114380.jpg', 0, 0),
(447, 'Suspense au  Paul Ricard ', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'MichelVaillantUnExploitDe02_29149.jpg', 'MichelVaillantUnExploitDe2_05102007_155759_29149.jpg', 0, 0),
(448, 'Le héros du Paul Ricard', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 60, 5, 13, 'michelvaillant02pub_23516.jpg', 'michelvaillant02pubv_23516.jpg', 0, 0),
(449, 'Duel au Paul Ricard', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'Couv_100033.jpg', 'Verso_100033.jpg', 0, 0),
(450, 'Défi au Paul Ricard', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 60, 5, 13, 'michelvaillant05pub_23517.jpg', 'michelvaillant05pubv_23517.jpg', 0, 0),
(451, 'Piège pour Steve Warson', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelvaillantpiegepourstevewarsonpub.JPG', ' ', 0, 0),
(452, 'Pleins feux sur Michel Vaillant et Steve Warson!', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelpf.jpg', ' ', 0, 0),
(453, 'Une Escort pour Michel Vaillant', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 34, 5, 13, 'michelvaillant09pub_23518.jpg', 'michelvaillant09pubv_23518.jpg', 0, 0),
(454, 'Le défi ATC', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'MichelVaillant_01082006.jpg', ' ', 0, 0),
(455, 'La rage de gagner', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelvaillantragedegagner_09022003.jpg', ' ', 0, 0),
(456, 'Le Plein d infos - La fièvre de Bercy - Le Sponsor', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelvaillantelfpub_15092003.JPG', ' ', 0, 0),
(457, 'Les champions de Thalys', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Couv_112970.jpg', ' ', 0, 0),
(458, 'Opération Armada', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Couv_112972.jpg', ' ', 0, 0),
(459, 'Le plein d info', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Couv_112971.jpg', ' ', 0, 0),
(460, 'Special camions, (route de nuit, catégorie poids lourds)', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 38, 5, 13, 'Couv_109920.jpg', 'Verso_109920.jpg', 0, 0),
(461, 'Duels de champions', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'MichelVaillant42pu_74963.jpg', ' ', 0, 0),
(462, 'Duel sur glace', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Couv_112969.jpg', ' ', 0, 0),
(463, 'Le Monde de la BD - 29', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'mondebd29a_08052004.jpg', ' ', 0, 0),
(464, 'Warm-Up !', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 15, 5, 13, 'MichelVaillanths_09022005.jpg', 'warmupv_43898.jpg', 0, 0),
(465, 'Le grand défi / Le pilote sans visage', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 44, 5, 13, 'MichelVaillant60anslombard1et2.JPG', 'michelvaillant1plus2v.jpg', 0, 0),
(466, 'Spécial Michel Vaillant', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelvaillantspvaillant.jpg', ' ', 0, 0),
(467, 'Spécial Steve Warson', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 13, 'Couv_109927.jpg', 'Verso_109927.jpg', 0, 0),
(468, 'Spécial Moto', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelvaillantspecialmoto_09022003.jpg', ' ', 0, 0),
(469, 'Spécial 20e anniversaire', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 13, 'mv20ans.jpg', 'Verso_4078.jpg', 0, 0),
(470, 'Pré-Grille', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelvaillantpregrille_09022003.jpg', ' ', 0, 0),
(471, 'Le grand défi', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant01.JPG', 'michelvail01v.jpg', 0, 0),
(472, 'Le pilote sans visage', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'MichelVaillant2d_19012005.jpg', 'michelvail02av.jpg', 0, 0),
(473, 'Le circuit de la peur', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvail03.jpg', 'michelvail03v.jpg', 0, 0),
(474, 'Route de nuit', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillantcouv04.jpg', 'michelvail04v.jpg', 0, 0),
(475, 'Le 13 est au départ', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant05eo.jpg', 'michelvail05v.jpg', 0, 0),
(476, 'La trahison de Steve Warson', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvail06.jpg', 'michelvail06v.jpg', 0, 0),
(477, 'Les casse-cou', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillantcouv07.jpg', 'michelvail07v.jpg', 0, 0),
(478, 'Le 8e pilote', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvail08.jpg', 'michelvail08v.jpg', 0, 0),
(479, 'Le retour de Steve Warson', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvail09.jpg', 'michelvail09v.jpg', 0, 0),
(480, 'L honneur du Samouraï', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvail10.jpg', 'michelvail10v.jpg', 0, 0),
(481, 'Suspense à Indianapolis', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant11.JPG', 'michelvail11v.jpg', 0, 0),
(482, 'Les Chevaliers de Königsfeld', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvail12.jpg', 'michelvail12v.jpg', 0, 0),
(483, 'Concerto pour pilotes', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant13couv.jpg', 'michelvail13v.jpg', 0, 0),
(484, 'Mach 1 pour Steve Warson', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillantcouv14eo.jpg', 'michelvail14v.jpg', 0, 0),
(485, 'Le cirque infernal', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'MichelVaillant15w_31012005.jpg', 'michelvail15v.jpg', 0, 0),
(486, 'Km. 357', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant16.jpg', 'michelvail16v.jpg', 0, 0),
(487, 'Le fantôme des 24 heures', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillantcouv17eo.jpg', 'michelvail17v.jpg', 0, 0),
(488, 'De l huile sur la piste!', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant18.JPG', 'michelvail18v.jpg', 0, 0),
(489, '5 filles dans la course!', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillantcouv19.jpg', 'michelvail19v.jpg', 0, 0),
(490, 'Rodéo sur 2 roues', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 13, 'michelvaillantcouv20.jpg', 'michelvail20v.jpg', 0, 0),
(491, 'Massacre pour un moteur!', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 13, 'michelvaillantcouv21.jpg', 'michelvail21v.jpg', 0, 0),
(492, 'Rush', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillantcouv22.jpg', 'michelvail22v.jpg', 0, 0),
(493, 'Série noire', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 13, 'michelvaillant23.JPG', 'michelvail23v.jpg', 0, 0),
(494, 'Cauchemar', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant24.jpg', 'michelvail24v.jpg', 0, 0),
(495, 'Des filles et des moteurs', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant25.jpg', 'michelvail25v.jpg', 0, 0),
(496, 'Champion du monde', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 13, 'michelvaillant26couv_284.jpg', 'michelvaillant26v_284.jpg', 0, 0),
(497, 'Dans l enfer du safari', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant27.jpg', 'michelvail27v.jpg', 0, 0),
(498, 'Le secret de Steve Warson', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 5, 13, 'michelvaillant28.jpg', 'michelvail28v.jpg', 0, 0),
(499, 'San Francisco Circus', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelvail29.jpg', ' ', 0, 0),
(500, 'Les jeunes Loups', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 13, 'michelvaillantcouv30.JPG', 'michelvail30v.jpg', 0, 0),
(501, 'La révolte des rois', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 13, 'michelvail31.jpg', 'michelvail314p.jpg', 0, 0),
(502, 'Le prince blanc', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelvaillant32.jpg', ' ', 0, 0),
(503, 'La silhouette en colère', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 13, 'michelvail33.jpg', 'michelvail334p.jpg', 0, 0),
(504, 'K.O. pour Steve Warson', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 33, 5, 13, 'michelvaillant34couv.jpg', 'michelvail344p.jpg', 0, 0),
(505, 'Le galérien', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 33, 5, 13, 'michelvaillant35couv_61941.jpg', 'michelvail354p.jpg', 0, 0),
(506, 'Un pilote a disparu', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'michelvail36.jpg', ' ', 0, 0),
(507, 'Tomes 1-2', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 35, 6, 14, 'Couv_114618.jpg', 'Verso_114618.jpg', 0, 0),
(508, 'Tomes 3-4-5', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 35, 6, 14, 'Couv_118557.jpg', 'Verso_118557.jpg', 0, 0),
(509, 'Les chantiers d une aventure', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'passagersduvenths.jpg', ' ', 0, 0),
(510, 'Bourgeon à la Hune', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 6, 14, 'PassagersDuVentHS2.JPG', 'passagersduvenths02.jpg', 0, 0),
(511, 'Le chemin de l Atchafalaya', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 1, 6, 14, 'Couv_117962.jpg', 'Verso_117962.jpg', 0, 0),
(512, 'La fille sous la dunette', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 6, 14, 'passagersduvent01_302.jpg', 'passagersduvent01v_302.jpg', 0, 0),
(513, 'Le ponton', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 6, 14, 'passagerduventcouv02eo.jpg', 'passagersduvents02v_303.jpg', 0, 0),
(514, 'Le comptoir de Juda', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 6, 14, 'passagerduventcouv03eo.jpg', 'passagersduvents03v_304.jpg', 0, 0),
(515, 'L heure du serpent', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 6, 14, 'passagersduvent04.jpg', 'passagersduvents04v_305.jpg', 0, 0),
(516, 'Le bois d ébène', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 6, 14, 'passagersduvent05_306.jpg', 'passagersduvents05v_306.jpg', 0, 0),
(517, 'La Petite Fille Bois-Caïman - Livre 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 1, 6, 14, 'PassagersDuVent_06_93413.jpg', 'PassagersDuVent_06_VER_93413.jpg', 0, 0),
(518, 'La Petite Fille Bois-Caïman - Livre 2', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 1, 6, 14, 'Couv_99109.jpg', 'Verso_99109.jpg', 0, 0),
(519, '«Avons-nous les bons pneus ?»', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'AvonsnousLesBonsPneus.jpg', ' ', 0, 0),
(520, ' Et patati et patata... ', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 17, 0, 'etpatatietpatata01.JPG', 'etpatatietpatatav_26894.jpg', 0, 0),
(521, 'Et patati et patata', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'etpatatietpatata.jpg', ' ', 0, 0),
(522, 'Les  Makrel  en folie!...', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'HorsSerieFouyaya2_24062005.jpg', ' ', 0, 0),
(523, ' 0  n égale pas zéro', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ONegalePasZero1mr_09102005.jpg', ' ', 0, 0),
(524, 'Tout Tintin', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 13, 5, 0, 'Tintin_ToutTintin_INT_84084.jpg', 'Tintin_ToutTintin_INT_VER_84084.jpg', 0, 0),
(525, 'Tintin au pays des Soviets', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 13, 5, 0, 'TintinActuelSoviets.jpg', 'Verso_32556.jpg', 0, 0),
(526, 'Tintin au Congo', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel02_22012004.jpg', ' ', 0, 0),
(527, 'Tintin en Amérique', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel03_22012004.jpg', ' ', 0, 0),
(528, 'Les cigares du pharaon', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel04_22012004.jpg', ' ', 0, 0),
(529, 'Le lotus bleu', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel05_22012004.jpg', ' ', 0, 0),
(530, 'L oreille cassée', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel06_22012004.jpg', ' ', 0, 0),
(531, 'L île noire', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel07_22012004.jpg', ' ', 0, 0),
(532, 'Le sceptre d Ottokar', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel08_22012004.jpg', ' ', 0, 0),
(533, 'Le Crabe aux pinces d or', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Tintin9_04052004.jpg', ' ', 0, 0),
(534, 'L étoile mystérieuse', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel10_22012004.jpg', ' ', 0, 0),
(535, 'Le secret de la licorne', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel11_22012004.jpg', ' ', 0, 0),
(536, 'Le trésor de Rackham le Rouge', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel12_22012004.jpg', ' ', 0, 0),
(537, 'Les 7 boules de cristal', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel13_22012004.jpg', ' ', 0, 0),
(538, 'Le temple du soleil', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel14_22012004.jpg', ' ', 0, 0),
(539, 'Au pays de l or noir', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel15_22012004.jpg', ' ', 0, 0),
(540, 'Objectif lune', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel16_22012004.jpg', ' ', 0, 0),
(541, 'On a marché sur la lune', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel17_22012004.jpg', ' ', 0, 0),
(542, 'L affaire Tournesol', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel18_22012004.jpg', ' ', 0, 0),
(543, 'Coke en stock', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel19_22012004.jpg', ' ', 0, 0),
(544, 'Tintin au Tibet', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel20_22012004.jpg', ' ', 0, 0),
(545, 'Les bijoux de la Castafiore', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel21_22012004.jpg', ' ', 0, 0),
(546, 'Vol 714 pour Sydney', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel22_22012004.jpg', ' ', 0, 0),
(547, 'Tintin et les picaros', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'tintinactuel23_22012004.jpg', ' ', 0, 0),
(548, 'Tintin et l alph-art', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 13, 5, 0, 'tintinactuel24_22012004.jpg', 'Verso_32579.jpg', 0, 0),
(549, 'Titeuf de poche...', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'titeufpochecouv_36447.jpg', ' ', 0, 0),
(550, 'Le guide du zizi sexuel', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'titeufguidezizisexuel_11040.jpg', 'titeufguidezizisexuelv_11040.jpg', 0, 0),
(551, 'Petite poésie des saisons', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'titeufhspoesiedesaisons_51651.jpg', 'titeufhspetitepoesiedessaisonv.jpg', 0, 0),
(552, 'Portraits de Titeuf', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 17, 17, 15, 'Titeufhs_12092004.jpg', 'titeufhs04v_39160.jpg', 0, 0),
(553, 'Ecouter c est l aventure...', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Titeufhs5_24072008_173336.jpg', ' ', 0, 0),
(554, 'Intégrale 40 ans', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, '88982_c.jpg', ' ', 0, 0),
(555, 'Titeuf à Lausanne', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 10, 17, 15, 'Couv_114987.jpg', 'Verso_114987.jpg', 0, 0),
(556, 'Dieu, le sexe et les bretelles', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'titeuf01.jpg', ' ', 0, 0),
(557, 'L Amour, c est pô propre...', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'titeuf02.jpg', 'titeuf02v_2335.jpg', 0, 0),
(558, 'Ça épate les filles...', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'Titeuf03.jpg', 'titeuf03_verso.jpg', 0, 0),
(559, 'C est pô juste...', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'Titeuf04.jpg', 'titeuf04v_2333.jpg', 0, 0),
(560, 'et le derrière des choses', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'Titeuf05.jpg', 'titeuf05_verso.jpg', 0, 0),
(561, 'Tchô, monde cruel', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'titeuf06.jpg', 'titeuf06v_1119.jpg', 0, 0),
(562, 'Le miracle de la vie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'titeuf07.jpg', 'titeuf07_verso.jpg', 0, 0),
(563, 'Lâchez-moi le slip !', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'Titeuf08.jpg', 'titeuf08_verso.jpg', 0, 0),
(564, 'La loi du préau', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'titeuf09.jpg', 'titeuf09_verso.jpg', 0, 0),
(565, 'Nadia se marie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'titeufcouv10.jpg', 'titeuf10_verso.jpg', 0, 0),
(566, 'Mes meilleurs copains', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'titeuf11couv_58500.jpg', 'titeuf11_verso.jpg', 0, 0),
(567, 'Le sens de la vie', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 17, 15, 'titeuf12_77215.jpg', 'titeuf12v_77215.jpg', 0, 0),
(568, 'Le démon inconnu d Hergé (ou le génie de Georges Remi)', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 26, 9, 16, 'LeDemonInconnuHerge_41557.jpg', 'LeDemonInconnuHerge_VER_41557.jpg', 0, 0),
(569, 'George Sprott (1894-1975)', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Couv_131330.jpg', ' ', 0, 0),
(570, 'Forget - Chott (Mouchot)', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'DocHop11_29012009_115639.jpg', ' ', 0, 0),
(571, 'Erik - Forget - Dubouillon', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'DocHop1213_29012009_115636.jpg', ' ', 0, 0),
(572, 'Will - Forget - Mondet - Bouchard (Actualité BD)', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'DocHop64_29012009_165916.jpg', ' ', 0, 0),
(573, 'Dossier Vampires - George Pratt - Tom Palmer', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'DocScarce37_10032009_154557.jpg', ' ', 0, 0),
(574, 'Les forgerons blancs', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'alarecherchedelalicorne02.jpg', ' ', 0, 0),
(575, 'La gorge du loup', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 7, 0, 40, 'Couv_117418.jpg', 'Verso_117418.jpg', 0, 0),
(576, '@enfer.Zcom', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 44, 24, 41, 'alvinnorge01.jpg', 'alvinnorge01v.jpg', 0, 0),
(577, 'Morphing Amer', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 44, 24, 41, 'alvinnorge02.jpg', 'alvinnorge02v.jpg', 0, 0),
(578, 'La forge de guerre', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'warhammer01_87027.jpg', ' ', 0, 0),
(579, 'La malédiction des worgens', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Couv_124632.jpg', ' ', 0, 0),
(580, 'Les forges d Egothyk', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 65, 3, 0, 'Couv_123398.jpg', 'Verso_123398.jpg', 0, 0),
(581, 'La forge de Vulcain', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 28, 0, 'yokotsuno03_22225.jpg', 'yokotsuno03v.jpg', 0, 0),
(582, 'Maintient le cap', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'philtraerecou03.JPG', ' ', 0, 0),
(583, 'Lucyber', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 44, 24, 41, 'alvinnorge3_16102002.jpg', 'alvinnorge03v.jpg', 0, 0),
(584, 'Shangaï Hypothèse', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 44, 24, 41, 'alvinnorgec04.jpg', 'alvinnorge04v.jpg', 0, 0),
(585, 'Quantum', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 44, 24, 41, 'AlvinNorge05.jpg', 'alvinnorge05v.jpg', 0, 0),
(586, 'Georges Brassens', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 31, 7, 42, 'Brassens-couv_111149.jpg', 'Brassens-verso_111149.jpg', 0, 0),
(587, 'La confrérie des chevaliers de l orge', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 16, 43, 'colleclaconfreriedeschevaliersdelorge_20082002.JPG', 'laconfreriedeschevaliersdelorgeverso_17877.jpg', 0, 0),
(588, 'George Dandin', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Commedia5_16022008_135034.jpg', ' ', 0, 0),
(589, 'La forêt qui dansait', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'damoisellegorge01.jpg', ' ', 0, 0),
(590, 'Vingt roseaux', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'damegorge02.JPG', ' ', 0, 0),
(591, 'Le dernier visiteur de George Sand', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'DernierVisiteurDeGeorgeSandLe_04112006.jpg', ' ', 0, 0),
(592, 'Le magicien d orge', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 24, 17, 47, 'ducotedechezpoje18.jpg', 'ducotedechezpoje18v.jpg', 0, 0),
(593, 'E pericoloso sporgersi', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'epericolosocouv.JPG', ' ', 0, 0),
(594, 'Forget-me-not', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 13, 21, 49, 'Forgetmenot_15102004_39929.jpg', 'forgetmenotv.jpg', 0, 0),
(595, 'Le rouge gorge sifflera trois fois !...', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 40, 13, 50, 'Couv_118244.jpg', 'Verso_118244.jpg', 0, 0),
(596, 'Adolescente, j aimais déjà dominer les autres...', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 53, 10, 51, 'George_27072009_005159.jpg', 'George_27072009_005159.jpg', 0, 0),
(597, 'George Dandin', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, '113263_c.jpg', ' ', 0, 0),
(598, 'George Sprott, 1894-1975', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, '96639_c.jpg', ' ', 0, 0),
(599, 'Bubble-gum & croquettes', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 65, 17, 54, 'GeorgesEtMoi01.jpg', 'georgesetmoi01v_59142.jpg', 0, 0),
(600, 'Georges Caplan vous parle...', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 59, 0, 55, 'georgescaplanvousparle01_68272.jpg', 'georgescaplanvousparle01v_68272.jpg', 0, 0),
(601, 'Georges et Louis racontent', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 6, 17, 56, 'Couv_21153.jpg', 'Verso_21153.jpg', 0, 0),
(602, 'Introduction à la psychologie de bazar', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 6, 17, 56, 'Couv_21155.jpg', 'Verso_21155.jpg', 0, 0),
(603, 'La fin du monde', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 6, 17, 56, 'Couv_21154.jpg', 'Verso_21154.jpg', 0, 0),
(604, 'La Reine des mouches', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'georges&louis04_07122002.jpg', ' ', 0, 0),
(605, 'La planète des moules', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'GeorgesEtLouisRomanciers5_26042004.jpg', ' ', 0, 0),
(606, 'Panique au bout du fil', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 6, 17, 56, 'georgesetlouuisromanciers06_58917.jpg', 'georgesetlouuisromanciers06v_58917.jpg', 0, 0),
(607, 'Premier couplet', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'GeorgesFrog1_06072006.jpg', ' ', 0, 0),
(608, 'Rent party', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'GeorgesFrog2_09062007_001610.jpg', ' ', 0, 0),
(609, 'Amateur Night', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 25, 0, 57, 'georgesfrog03_89229.jpg', 'georgesfrog03v_89229.jpg', 0, 0),
(610, 'American dream', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 25, 0, 57, 'Couv_108318.jpg', 'Verso_108318.jpg', 0, 0),
(611, 'La machine perplexe', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Giletgeorges01_04082002.JPG', ' ', 0, 0),
(612, 'Le maître des robots', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'giletgeorges02_04082002.JPG', ' ', 0, 0),
(613, 'Les hommes transparents', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'giletgeorges03_04082002.JPG', ' ', 0, 0),
(614, 'Les rêveries d Hélène Georges', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 54, 0, 59, 'Couv_122258.jpg', 'Verso_122258.jpg', 0, 0),
(615, 'La vraie vie d Hélène Georges', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 54, 0, 59, 'Couv_122259.jpg', 'Verso_122259.jpg', 0, 0),
(616, 'Les 7 morts de Mlle Harington', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 25, 0, 'henrigeorgesmidi01.jpg', 'henrigeorgesmidi01v_9089.jpg', 0, 0),
(617, 'L aigle chantera 3 fois', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 25, 0, 'henrigeorgesmidi02.jpg', 'henrigeorgesmidi02v_9090.jpg', 0, 0),
(618, 'Les 5 lumières de Varek', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 25, 0, 'henrigeorgesmidi03_31499.jpg', 'henrigeorgesmidi03v_31499.jpg', 0, 0),
(619, 'Gorgeous Characters Guide', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'HikaruNoGohs_16052006.jpg', ' ', 0, 0),
(620, 'Le soutien-gorge bleu', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 19, 5, 63, 'inoxydables04.jpg', 'inoxydables4verso_10298.jpg', 0, 0),
(621, 'L égorgeoir', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 67, 25, 64, 'Couv_9375.jpg', 'Verso_9375.jpg', 0, 0),
(622, 'La légion Saint-Georges', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Couv_121952.jpg', ' ', 0, 0),
(623, 'Charles, 1854 / Margrit, 1886', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'maitresdelorge01_02022003.jpg', ' ', 0, 0),
(624, 'Adrien, 1917 / Noël, 1932', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'maitresdelorge03_02022003.jpg', ' ', 0, 0),
(625, 'Julienne, 1950 / Jay, 1973', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'maitresdelorge05_02022003.jpg', ' ', 0, 0),
(626, 'Frank, 1997 / Les Steenfort', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'maitresdelorge07_02022003.jpg', ' ', 0, 0),
(627, 'Les Maîtres de l Orge - Intégrale 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'maitresorgeint1.jpg', ' ', 0, 0),
(628, 'Les Maîtres de l Orge - Intégrale 2', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'maitresorgeint2.jpg', ' ', 0, 0),
(629, 'Intégrale', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'maitresdelorgeintnb_26062003.jpg', ' ', 0, 0),
(630, 'Charles, 1854', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 0, 'maitredelorgecouv01.jpg', 'maitredelorge01v_272.jpg', 0, 0),
(631, 'Margrit, 1886', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 0, 'maitredelorgecouv02.jpg', 'maitredelorge02v_273.jpg', 0, 0),
(632, 'Adrien, 1917', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 0, 'maitredelorgecouv03.jpg', 'maitredelorge03v_625.jpg', 0, 0),
(633, 'Noël, 1932', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 0, 'maitredelorgecouv04.jpg', 'maitredelorge04v_787.jpg', 0, 0),
(634, 'Julienne, 1950', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 0, 'maitredelorgecouv05.jpg', 'maitredelorge05v_921.jpg', 0, 0),
(635, 'Jay, 1973', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 0, 'maitredelorgecouv06.jpg', 'maitredelorge06v_1098.jpg', 0, 0),
(636, 'Frank, 1997', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 0, 'maitredelorgecouv07.jpg', 'maitredelorge07v_1379.jpg', 0, 0),
(637, 'Les Steenfort', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 5, 0, 'maitredelorgecouv08.jpg', 'maitredelorge08v_1794.jpg', 0, 0),
(638, 'Pour une gorgée de vulnéraire', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 37, 30, 67, 'MinettosDesperados03.jpg', 'minettosdesperados03v_9149.jpg', 0, 0),
(639, 'Mister George 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 44, 0, 68, 'mistergeorge01.jpg', 'mistergeorge1v_28502.jpg', 0, 0),
(640, 'Mister George 2', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 44, 0, 68, 'mistergeorges02.jpg', 'mistergeorge02v_36098.jpg', 0, 0),
(641, 'Morgenrot', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'Morgenrot_04022007.jpg', ' ', 0, 0),
(642, 'La terre regorge de trésors', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'OnclePicsou76_04032007.jpg', ' ', 0, 0),
(643, 'Tome 1', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'OrgeLogre1_11022005.jpg', ' ', 0, 0),
(644, 'Kirbi Flint - La gorge du condor (+ Sunday)', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'PistesSauvages1_11122008_144856.jpg', ' ', 0, 0),
(645, 'Valley forge, valley forge', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 57, 8, 73, 'PunisherMaxComics13_18052009_102256.jpg', 'PunisherMaxComics13_18052009_102256.jpg', 0, 0),
(646, 'Le masque de la peur', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'remiforgetcouv01.JPG', ' ', 0, 0),
(647, 'L herbe du pendu', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'remiforgetcouv02.JPG', ' ', 0, 0),
(648, 'L épée sur la gorge', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 48, 24, 75, 'richochetcouv27.jpg', 'richochet27v.jpg', 0, 0),
(649, 'Songe et les forges de la guerre', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'songecouv.jpg', ' ', 0, 0),
(650, 'T.N.T. contre mister Georges', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'ttp_mistergeorges_1_26934.JPG', ' ', 0, 0),
(651, 'Un chat dans la gorge', ' ', ' ', ' ', ' ', 0, ' ', ' ', '0', 30, 2, 78, 'uneviedechien05.jpg', 'uneviedechien05v.jpg', 0, 0),
(652, 'La vie compliquée de Georges le tueur', ' ', ' ', ' ', ' ', 0, ' ', ' ', ' ', 0, 0, 0, 'viecompliqueedegeorgesletue_04102003.jpg', ' ', 0, 0),
(653, 'Ceux qui restent', '', '2014-01-01', '2014-01-01', '', NULL, '978-2-5050-1993-0', '', '56', 19, 17, 0, 'lesvieuxfourneaux_1_recto.jpg', 'lesvieuxfourneaux_1_recto.jpg', 43, 0),
(654, 'Ceux qui restent', '', '2014-01-01', '2014-01-01', '', NULL, '978-2-5050-1993-0', '', '56', 19, 17, 0, NULL, NULL, 43, 0),
(655, 'Ceux qui restent', '', '2014-01-01', '2014-01-01', '<p>Pierrot, Mimile et Antoine, trois septuag&eacute;naires, amis d''enfance, ont  bien compris que vieillir est le seul moyen connu de ne pas mourir.  Quitte &agrave; tra&icirc;ner encore un peu ici-bas, ils sont bien d&eacute;termin&eacute;s &agrave; le  faire avec style : un oeil tourn&eacute; vers un pass&eacute; qui fout le camp,  l''autre qui scrute un avenir de plus en plus incertain, un pied dans la  tombe et la main sur le coeur. Une com&eacute;die sociale aux parfums de lutte  des classes et de choc des g&eacute;n&eacute;rations, qui commence sur les chapeaux de  roues par un road-movie vers la Toscane, au cours duquel Antoine va  tenter de montrer qu''il n''y a pas d''&acirc;ge pour commettre un crime</p>', NULL, '978-2-5050-1993-0', '', '56', 19, 17, 82, 'lesvieuxfourneaux_1_recto.jpg', NULL, 43, 5),
(656, 'Bonny and Pierrot', '', '2014-01-01', '2014-01-01', '<p>D&eacute;j&agrave; le deuxi&egrave;me tome des Vieux Fourneaux ! Lupano et Cauuet d&eacute;crivent  avec toujours autant de dr&ocirc;lerie la chute libre de notre soci&eacute;t&eacute;.  Restent Mimile, Antoine, Pierrot et ses anars malvoyants pour redresser  la barre. Un versement inattendu de la &laquo; finance carnassi&egrave;re &raquo; arrive &agrave;  point nomm&eacute;, mais r&eacute;veille &eacute;galement de douloureux souvenirs pour  Pierrot. Sa muse libertaire, Ann Bonny, r&eacute;appara&icirc;t... Wilfrid Lupano et  Paul Cauuet persistent et signent des sc&egrave;nes et dialogues savoureux qui  resteront dans les m&eacute;moires !</p>', NULL, '978-2-5050-6163-2', '', '56', 19, 17, 82, 'lesvieuxfourneaux_2_recto.jpg', NULL, 43, 5);

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE IF NOT EXISTS `auteur` (
  `id` int(11) NOT NULL,
  `coloriste` tinyint(1) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  `dateNaissance` varchar(10) DEFAULT NULL,
  `dessinateur` tinyint(1) DEFAULT NULL,
  `lieuNaissance` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `pays_id` int(11) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `scenariste` tinyint(1) DEFAULT NULL,
  `surnom` varchar(255) DEFAULT NULL,
  `web1` varchar(255) DEFAULT NULL,
  `web2` varchar(255) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=257 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `auteur`
--

INSERT INTO `auteur` (`id`, `coloriste`, `commentaire`, `dateNaissance`, `dessinateur`, `lieuNaissance`, `nom`, `pays_id`, `photo1`, `photo2`, `prenom`, `scenariste`, `surnom`, `web1`, `web2`, `utilisateur_id`) VALUES
(1, 0, '  ', '  ', 0, '  ', '<N&B', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(2, 0, '  ', '  ', 0, '  ', '<Collectif>', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(3, 0, ' D e s s i n a t e u r   e t   s c é n a r i s t e ,   1 9 2 6 - 1 9 7 7   -   F r a n c e   \r   \r   N é   l e   1 4   a o û t   1 9 2 6   à   P a r i s ,   R e n é   G o s c i n n y   p a s s e   s o n   e n f a n c e   e n   A r g e n t i n e ,   e n t ', '1926-08-14', 1, ' ', 'Goscinny', 4, 'Exemple01.jpg', ' ', 'René', 1, ' ', 'http://www.goscinny.net/', '  ', 0),
(4, 0, '  ', '  ', 0, '  ', 'Uderzo', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(5, 0, '  ', '  ', 0, '  ', '<Quadrichromie>', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(6, 0, ' S i g n e   a u s s i   s o u s   l e   p s e u d o :   V a n a m   ( V o i r   f i c h e   d a n s   l a   b é d é t h è q u e ) \r   \r   \r   R o m a n c i e r   e t   s c é n a r i s t e   j u s q u '' a u   b o u t   d e s   o n g l e s ,   r a c o n t ', '1939-01-16', 0, ' ', 'Van Hamme', 15, 'Exemple04.jpg', ' ', 'Jean', 1, ' ', 'http://www.bdcouvertes.com/bdcouvertes/VanHamme/vanhamme.htm', '  ', 0),
(7, 0, '  ', '  ', 0, '  ', 'Van Cutsen', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(8, 0, '  ', '  ', 0, '  ', 'Van Cutsen', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(9, 0, '  ', '  ', 0, '  ', 'Studio Legrain', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(10, 1, ' N é   e n   r é g i o n   p a r i s i e n n e ,   M i c h e l   J a n v i e r   a   d é b u t é   c o m m e   i l l u s t r a t e u r   r é a l i s t e   e n   1 9 7 7   ( L e s   G u i d e s   V e r t s   M i c h e l i n ,   L a r o u s s e ,   S é l e ', '1954-01-02', 1, ' ', 'Janvier', 4, 'janvier.jpg', ' ', 'Michel', 0, ' ', 'www.twipac.com/m.janvier', '  ', 0),
(11, 0, '  ', '  ', 0, '  ', 'Mébarki', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(12, 0, '  ', '  ', 0, '  ', 'Studio 56', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(13, 0, '  ', '  ', 0, '  ', 'Mebarki', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(14, 0, ' A l o r s   q u '' i l   e s t   e n c o r e   é t u d i a n t ,   A l e x i s   ( d e   s o n   v r a i   n o m   D o m i n i q u e   V a l l e t )   p u b l i e   d é j à   d e s   d e s s i n s   d '' h u m o u r   d a n s   d e s   r e v u e s   f r a ', '1946-09-18', 1, ' ', 'Vallet', 4, 'alexis.jpg', ' ', 'Dominique', 1, ' ', 'http://www.lambiek.net/fr/alexis.html', '  ', 0),
(15, 0, '  ', '  ', 0, '  ', 'Bernard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(16, 0, '  ', '  ', 0, '  ', 'Rochefort', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(17, 0, '  ', '  ', 0, '  ', 'Tijo', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(18, 0, '  ', '  ', 0, '  ', 'Devos', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(19, 0, '  ', '  ', 0, '  ', 'Mizushiro', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(20, 0, '  ', '  ', 0, '  ', '<Indéterminé>', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(21, 0, '  ', '  ', 0, '  ', 'Terrier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(22, 0, '  ', '  ', 0, '  ', 'Pace', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(23, 0, '  ', '  ', 0, '  ', 'Giraud', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(24, 0, '  ', '  ', 0, '  ', 'Champeval', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(25, 0, '  ', '  ', 0, '  ', 'Morandière', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(26, 0, '  ', '  ', 0, '  ', 'Poireau', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(27, 1, ' L e w i s   T r o n d h e i m   e s t   n é   e n   1 9 6 4 .   A p r è s   u n e   e n f a n c e   s a n s   h i s t o i r e s   à   F o n t a i n e b l e a u ,   i l   f a i t   u n   a n   d '' a r m é e   e n   A l l e m a g n e   p u i s   s u i t   ', '1964-01-01', 1, ' ', 'Chabosy', 4, 'Trondheim.jpg', ' ', 'Laurent', 1, ' ', 'www.lewistrondheim.com', '  ', 0),
(28, 0, '  ', '  ', 0, '  ', 'Konture', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(29, 0, '  ', '  ', 0, '  ', 'Killoffer', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(30, 0, '  ', '  ', 0, '  ', 'Menu', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(31, 0, '  ', '  ', 0, '  ', 'Barthélémy', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(32, 0, ' X a v i e r   F a u c h e \r   N é   l e   3 0   a v r i l   1 9 4 6   à   P a r i s   ( F r a n ç a i s   d '' o r i g i n e   é c o s s a i s e ) \r   S c é n a r i s t e - R o m a n c i e r \r   \r   X a v i e r   F a u c h e   a   t o u j o u r s   s u   ', '1946-04-30', 1, ' ', 'Fauche', 4, 'FaucheXavier.jpg', ' ', 'Xavier', 1, ' ', 'http://www.unebulleenplus.fr', '  ', 0),
(33, 1, ' M a r c   B o u r g n e   e s t   n é   à   V e r s a i l l e s   l e   1 1   m a r s   1 9 6 7 .   L e   G r a n d   N o r d   a m é r i c a i n   e n   g é n é r a l ,   e t   l '' A l a s k a   e n   p a r t i c u l i e r ,   l u i   f o u r n i s s e ', '1967-03-11', 1, ' ', 'Bourgne', 4, 'bourgne.jpg', ' ', 'Marc', 1, ' ', 'www.marc.bourgne.opalebd.com', '  ', 0),
(34, 0, '  ', '  ', 0, '  ', 'Chagnaud', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(35, 0, '  ', '  ', 0, '  ', 'Mitildjian', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(36, 0, '  ', '  ', 0, '  ', 'Lambert', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(37, 0, '  ', '  ', 0, '  ', 'Manook', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(38, 1, ' V o u s   s a u r e z   t o u t   s u r   l u i   e n   v i s i t a n t   s o n   s i t e .   A   a u s s i   p a r t i c i p é   a u   c o l l e c t i f   A m i a n t e ,   c h r o n i q u e   d '' u n   c r i m e   s o c i a l ,   é d i t é   c h e z   ', '1966-01-01', 1, ' ', 'Cordoba', 4, 'cordoba_juan_maria.jpg', ' ', 'Juan Maria', 0, ' ', 'monsite.wanadoo.fr/bdcordoba', '  ', 0),
(39, 1, ' P h o t o      D u p u i s \r   \r   A u t e u r   i l l u s t r a t e u r   i n d é p e n d a n t ,   H i p p o l y t e ,   a l i a s   F r a n k   M e y n e t ,   e s t   u n   a n c i e n   é l è v e   d e   l '' é c o l e   É m i l e   C o h l   d e   L', '1976-08-27', 1, ' ', 'Meynet', 4, 'hippolyte.jpg', ' ', 'Frank', 1, ' ', 'www.hippolyteartwork.com', '  ', 0),
(40, 0, '  ', '  ', 0, '  ', 'Rivière', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(41, 0, '  ', '  ', 0, '  ', 'Miniac', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(42, 0, '  ', '  ', 0, '  ', 'Suhner', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(43, 0, '  ', '  ', 0, '  ', 'Blocteur', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(44, 0, '  ', '  ', 0, '  ', 'Vergult', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(45, 0, '  ', '  ', 0, '  ', 'Leclercq', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(46, 0, '  ', '  ', 0, '  ', 'Piskic', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(47, 0, '  ', '  ', 0, '  ', 'Lachard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(48, 0, '  ', '  ', 0, '  ', 'Ongalro', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(49, 0, '  ', '  ', 0, '  ', 'Maury', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(50, 0, '  ', '  ', 0, '  ', 'Maron', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(51, 0, '  ', '  ', 0, '  ', 'El Baïri', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(52, 0, '  ', '  ', 0, '  ', 'Ercan', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(53, 0, '  ', '  ', 0, '  ', 'Chandre', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(54, 0, '  ', '  ', 0, '  ', 'Paillou', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(55, 0, '  ', '  ', 0, '  ', 'Poelaert', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(56, 0, '  ', '  ', 0, '  ', 'Marek', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(57, 0, '  ', '  ', 0, '  ', 'O''Griafa', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(58, 0, '  ', '  ', 0, '  ', 'Charrier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(59, 0, ' P h o t o      M a n u e l   F .   P i c a u d   /   A u r a c a n . c o m \r   \r   D i d i e r   Q u e l l a - G u y o t   e s t   n é   l e   7   j u i l l e t   1 9 5 5   à   R o c h e f o r t - s u r - M e r .   I l   h a b i t e   d é s o r m a i s  ', '1955-07-07', 0, ' ', 'Quella-Guyot', 4, 'Photo_6697.jpg', ' ', 'Didier', 1, ' ', 'didier.quella-guyot.over-blog.com', '  ', 0),
(60, 0, '  ', '  ', 0, '  ', 'Jollet', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(61, 0, '  ', '  ', 0, '  ', 'Bouchard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(62, 0, '  ', '  ', 0, '  ', 'De Bévère', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(63, 0, '  ', '  ', 0, '  ', 'Studio Leonardo', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(64, 0, '  ', '  ', 0, '  ', 'Guylouis', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(65, 0, '  ', '  ', 0, '  ', 'Darmenton', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(66, 0, '  ', '  ', 0, '  ', 'Ducasse', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(67, 0, '  ', '  ', 0, '  ', 'Guillaume', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(68, 0, '  ', '  ', 0, '  ', 'Henry', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(69, 0, '  ', '  ', 0, '  ', 'Olivier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(70, 0, '  ', '  ', 0, '  ', 'Raymond', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(71, 0, '  ', '  ', 0, '  ', 'De Groot', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(72, 0, '  ', '  ', 0, '  ', 'Van Banda', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(73, 0, '  ', '  ', 0, '  ', 'Léturgie', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(74, 0, '  ', '  ', 0, '  ', 'Vidal', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(75, 0, '  ', '  ', 0, '  ', 'Leonardo', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(76, 0, '  ', '  ', 0, '  ', 'Le Pennetier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(77, 0, '  ', '  ', 0, '  ', 'Adam', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(78, 0, '  ', '  ', 0, '  ', 'Nordmann', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(79, 0, '  ', '  ', 0, '  ', 'Laudrain', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(80, 0, '  ', '  ', 0, '  ', 'Astier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(81, 0, '  ', '  ', 0, '  ', 'Mattioli', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(82, 0, '  ', '  ', 0, '  ', 'Brémaud', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(83, 0, '  ', '  ', 0, '  ', 'Vermot-Desroches', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(84, 1, ' P h o t o      M i c h e l   D i m m o c k \r   \r   A p r è s   u n   b r e f   p a s s a g e   d a n s   l e   m u l t i m é d i a   e t   l e   m o n d e   d u   w e b - d e s i g n ,   K n e s s   s '' o r i e n t e   e n   2 0 0 3   v e r s   l a   c o', '1980-01-08', 1, ' ', 'Le Logeais', 4, 'kness.jpg', ' ', 'Karine', 1, ' ', 'www.kness.net', '  ', 0),
(85, 1, ' P h o t o      P a q u e t \r   \r   B r u n o   D u h a m e l   e s t   n é   e n   1 9 7 5 .   I l   s '' i n s c r i t   e n   a t e l i e r   B D   à   l a   s o r t i e   d u   b a c   ( à   l a   F a c   d '' a r t s   p l a s t i q u e s   S a i n t -', '1975-01-01', 1, ' ', 'Duhamel', 4, 'Duhamel.jpg', ' ', 'Bruno', 1, ' ', 'www.hibbouk.com', '  ', 0),
(86, 0, '  ', '  ', 0, '  ', 'Croix', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(87, 0, '  ', '  ', 0, '  ', 'Li', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(88, 0, '  ', '  ', 0, '  ', 'Gong', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(89, 0, '  ', '  ', 0, '  ', 'Roba', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(90, 0, '  ', '  ', 0, '  ', 'Léonardo', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(91, 0, ' A n d r é - P a u l   D u c h â t e a u   e s t   n é   à   T o u r n a i   ( B e l g i q u e ) ,   l e   8   m a i   1 9 2 5 .   E n f a n t ,   i l   l i t   a v e c   p a s s i o n   l e s   e n q u ê t e s   d u   d é t e c t i v e   j a p o n a i s ', '1925-05-08', 0, ' ', 'Duchâteau', 15, 'duchateauandrepaul.jpg', ' ', 'André-Paul', 1, ' ', 'www.digibulles.com/Duchateau', '  ', 0),
(92, 0, '  ', '  ', 0, '  ', 'Thomas', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(93, 0, '  ', '  ', 0, '  ', 'Rosy', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(94, 0, ' R a o u l   C a u v i n   e s t   n é   l e   2 6   s e p t e m b r e   1 9 3 8   à   A n t o i n g ,   e n   B e l g i q u e .   A u   t e r m e   d e   5   a n s   d '' é t u d e s   d e   l i t h o g r a p h i e   p u b l i c i t a i r e ,   i l   d é ', '1938-09-26', 0, ' ', 'Cauvin', 15, 'cauvin.jpg', ' ', 'Raoul', 1, ' ', 'bullesbleues.pagesperso-orange.fr', '  ', 0),
(95, 0, '  ', '  ', 0, '  ', 'Verron', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(96, 0, ' N é   à   L i è g e   l e   3 0   o c t o b r e   1 9 2 4 ,   m o r t   à   S a i n t - C l o u d   ( H a u t s - d e - S e i n e )   l e   1 0     j u i l l e t   1 9 8 9 . \r   J e a n - M i c h e l   C h a r l i e r ,   j u r i s t e   d e   f o r m a ', '1924-10-30', 0, ' ', 'Charlier', 15, 'CharlierJM.jpg', ' ', 'Jean-Michel', 1, ' ', 'www.jmcharlier.com', '  ', 0),
(97, 0, '  ', '  ', 0, '  ', 'Gillain', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(98, 0, '  ', '  ', 0, '  ', 'Thos', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(99, 0, '  ', '  ', 0, '  ', 'Serres', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(100, 0, '  ', '  ', 0, '  ', 'Coutelis', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(101, 0, '  ', '  ', 0, '  ', 'Chagnaud', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(102, 0, '  ', '  ', 0, '  ', 'Laidin', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(103, 0, '  ', '  ', 0, '  ', 'Fernandez', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(104, 0, '  ', '  ', 0, '  ', 'Charrance', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(105, 0, '  ', '  ', 0, '  ', 'Garreta', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(106, 0, '  ', '  ', 0, '  ', 'Fournier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(107, 0, '  ', '  ', 0, '  ', 'Vicomte', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(108, 0, '  ', '  ', 0, '  ', 'Quilici', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(109, 0, '  ', '  ', 0, '  ', 'Hérenguel', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(110, 0, '  ', '  ', 0, '  ', 'Faure', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(111, 0, '  ', '  ', 0, '  ', 'Robert', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(112, 0, '  ', '  ', 0, '  ', 'Lencot', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(113, 0, '  ', '  ', 0, '  ', 'Quillet', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(114, 0, '  ', '  ', 0, '  ', 'Laval', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(115, 0, '  ', '  ', 0, '  ', 'Convard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(116, 0, '  ', '  ', 0, '  ', 'Falque', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(117, 0, '  ', '  ', 0, '  ', 'Paul', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(118, 0, '  ', '  ', 0, '  ', 'Kraehn', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(119, 1, ' P h o t o      M a n u e l   F .   P i c a u d \r   \r   N é   l e   1 1   m a r s   1 9 5 9   à   P a r i s ,   É r i c   S t a l n e r   e n t a m e   s a   c a r r i è r e   B D   a v e c   s o n   f r è r e   a î n é   J e a n - M a r c   e n   d é m a', '1959-03-11', 1, ' ', 'Stalner', 4, 'EricStalnerMFPicaud.jpg', ' ', 'Éric', 1, ' ', 'stalner.blogspot.com', '  ', 0),
(120, 0, '  ', '  ', 0, '  ', 'Juillard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(121, 1, ' N é   e n   A f r i q u e ,   i l   e s t   l e   d e s s i n a t e u r   d e   l a   s é r i e   c u l t i s s i m e   T r a m p   d o n t   l e   9 è m e   t o m e   s o r t   e n   2 0 0 9 .   P a t r i c k   J u s s e a u m e   e s t   p r i n c i p ', '1951-10-28', 1, ' ', 'Jusseaume', 4, 'PatrickJusseaume.jpg', ' ', 'Patrick', 0, ' ', 'www.jusseaume.fr', '  ', 0),
(122, 0, '  ', '  ', 0, '  ', 'Wachs', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(123, 0, '  ', '  ', 0, '  ', 'Chaillet', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(124, 0, '  ', '  ', 0, '  ', 'Martinez', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(125, 0, '  ', '  ', 0, '  ', 'Révillon', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(126, 0, '  ', '  ', 0, '  ', 'Perez', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(127, 0, '  ', '  ', 0, '  ', 'Dorison', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(128, 1, ' L e   j e u n e   a u t e u r   s ’ e s t   d ’ e m b l é e   f a i t   r e m a r q u e r   a v e c   s a   p r e m i è r e   s é r i e   l e   T r o i s i è m e   T e s t a m e n t   r é a l i s é e   a v e c   X a v i e r   D o r i s o n   d o n t   G ', '1974-11-02', 1, ' ', 'Alice', 4, 'AlexAlice.jpg', ' ', 'Alex', 1, ' ', 'www.alexalice.com', '  ', 0),
(129, 0, '  ', '  ', 0, '  ', 'Lapierre', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(130, 0, '  ', '  ', 0, '  ', 'Recht', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(131, 0, '  ', '  ', 0, '  ', 'Lambillotte', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(132, 0, '  ', '  ', 0, '  ', 'Salvérius', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(133, 0, '  ', '  ', 0, '  ', 'Mortier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(134, 0, '  ', '  ', 0, '  ', 'Geurts', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(135, 0, ' N é   l e   3   j a n v i e r   1 9 2 4   à   E t t e r b e e k   ( B r u x e l l e s ,   B e l g i q u e ) ,   A n d r é   F r a n q u i n ,   a p r è s   u n e   a n n é e   d e   c o u r s   d e   d e s s i n   à   S t - L u c   ( B r u x e l l e s ) ', '1924-01-03', 1, ' ', 'Franquin', 15, 'franquinandre.jpg', ' ', 'André', 1, ' ', 'http://www.bdcouvertes.com/bdstory/', '  ', 0),
(136, 0, '  ', '  ', 0, '  ', 'Velter', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(137, 0, '  ', '  ', 0, '  ', 'Broca', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(138, 1, ' 1 9 5 7   :   N a i s s a n c e   d '' Y v e s   C h a l a n d   l e   3   a v r i l   à   L y o n . \r   1 9 7 4   :   À   1 7   a n s ,   i l   p u b l i e   s e s   p r e m i è r e s   p l a n c h e s   d a n s   l e   f a n z i n e   B i b l i p o p . ', '1957-04-03', 1, ' ', 'Chaland', 4, 'chaland.jpg', ' ', 'Yves', 1, ' ', 'http://www.yveschaland.com/', '  ', 0),
(139, 0, '  ', '  ', 0, '  ', 'Fournier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(140, 0, '  ', '  ', 0, '  ', 'Gillain', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(141, 0, '  ', '  ', 0, '  ', 'Salmon', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(142, 0, '  ', '  ', 0, '  ', 'Maltaite', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(143, 0, '  ', '  ', 0, '  ', 'De Mesmaeker', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(144, 1, ' 1 9 3 1   :   M i c h e l   R e g n i e r   n a î t   l e   5   m a i   1 9 3 1 ,   à   I x e l l e s ,   f a u b o u r g   d e   B r u x e l l e s .   I l   g r a n d i t   c e p e n d a n t   à   H e r s t a l ,   d a n s   l a   b a n l i e u e   d e ', '1931-05-05', 1, ' ', 'Regnier', 15, 'RegnierMichelGreg.jpg', ' ', 'Michel', 1, ' ', 'michel.greg.free.fr', '  ', 0),
(145, 0, '  ', '  ', 0, '  ', 'Goossens', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(146, 0, '  ', '  ', 0, '  ', 'Vandevelde', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(147, 0, '  ', '  ', 0, '  ', 'Studio L', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(148, 0, '  ', '  ', 0, '  ', 'De', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(149, 0, '  ', '  ', 0, '  ', 'De Becker', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(150, 0, '  ', '  ', 0, '  ', 'Morvan', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(151, 0, '  ', '  ', 0, '  ', 'Munuera', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(152, 0, '  ', '  ', 0, '  ', 'Lerolle', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(153, 0, '  ', '  ', 0, '  ', 'Glogo', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(154, 1, ' P h o t o      J J   P r o c u r e u r \r   \r   N é   à   G r a n o l l e r s ,   p r è s   d e   B a r c e l o n e ,   l e   8   j u i n   1 9 7 8 ,   P e d r o   C o l o m b o   v i t   t o u j o u r s   e n   E s p a g n e ,   m a i s   a u j o u r d ''', '1978-06-08', 1, ' ', 'Colombo', 0, 'colombo_pedro_j.jpg', ' ', 'Pedro J.', 1, ' ', 'pedrojcolombo.blogspot.com', '  ', 0),
(155, 0, '  ', '  ', 0, '  ', 'Le Saout', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(156, 0, '  ', '  ', 0, '  ', 'Vehlmann', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(157, 1, ' Y o a n n …   e s t   n é   e n   1 9 7 1 ,   l e   8   o c t o b r e   à   A l e n ç o n   d a n s   l ’ O r n e …   u n e   j e u n e s s e   p a s s é e   à   d e s s i n e r   c h e z   l u i   l e   m e r c r e d i   a p r è s - m i d i ,   o u   à ', '1971-10-08', 1, ' ', 'Chivard', 4, 'ChivardYoann.jpg', ' ', 'Yoann', 1, ' ', 'http://www.mysteryo.com/', '  ', 0),
(158, 0, '  ', '  ', 0, '  ', 'Boulard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(159, 0, '  ', '  ', 0, '  ', 'Blanchard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(160, 0, '  ', '  ', 0, '  ', 'Graton', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(161, 0, '  ', '  ', 0, '  ', 'Studio Jean Graton', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(162, 0, ' N é   à   B r u x e l l e s   l e   1 2   m a i   1 9 6 1 .   P h i l i p p e   e s t   é v i d e m m e n t   l e   f i l s   d e   J e a n   G r a t o n   !   T r è s   t ô t ,   P h i l i p p e   G r a t o n   c u l t i v e   u n   g o û t   p r o n o ', '1961-05-12', 0, ' ', 'Graton', 15, 'GratonPhilippe.jpg', ' ', 'Philippe', 1, ' ', 'www.michelvaillant.com', '  ', 0),
(163, 0, '  ', '  ', 0, '  ', 'Brichau', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(164, 0, '  ', '  ', 0, '  ', 'Lippens', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(165, 0, '  ', '  ', 0, '  ', 'Bouchez', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(166, 0, '  ', '  ', 0, '  ', 'Castilla', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(167, 0, '  ', '  ', 0, '  ', 'Bourgeon', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(168, 0, '  ', '  ', 0, '  ', 'Thiébaut', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(169, 0, ' C ’ e s t   l e   2 2   m a i   1 9 0 7   q u e   n a q u i t   G e o r g e s   R e m i   à   E t t e r b e e k ,   c o m m u n e   d e   B r u x e l l e s .   L e   j e u n e   g a r ç o n   c o m m e n c e   s e s   é t u d e s   s e c o n d a i r e s ', '1907-05-22', 1, ' ', 'Remi', 15, 'herge.jpg', ' ', 'Georges', 1, ' ', 'http://www.multimania.com/herge/', '  ', 0),
(170, 0, '  ', '  ', 0, '  ', 'Chappuis', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(171, 0, '  ', '  ', 0, '  ', 'Bruller', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(172, 0, '  ', '  ', 0, '  ', 'Poletti', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(173, 0, '  ', '  ', 0, '  ', 'Chevrier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(174, 0, '  ', '  ', 0, '  ', 'Chevrier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(175, 0, '  ', '  ', 0, '  ', 'Portevin', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(176, 0, '  ', '  ', 0, '  ', 'Gallant', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(177, 0, '  ', '  ', 0, '  ', 'Ruiz', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(178, 0, '  ', '  ', 0, '  ', 'Mirallès', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(179, 1, ' C h r i s   ( C h r i s t i a n )   L a m q u e t   e s t   n é   l e   1 0   j a n v i e r   1 9 5 4   à   A n d e n n e   ( B e l g i q u e ) .   I l   e n t r e   e n   1 9 7 4   a u   s t u d i o   d ’ E d o u a r d   A i d a n s   o ù   i l   p a r ', '1954-01-10', 1, ' ', 'Lamquet', 15, 'christian_lamquet.jpg', ' ', 'Chris', 1, ' ', 'http://www.lelombard.com/catalogue/auteurs.cfm?Query_ID=142627', '  ', 0),
(180, 0, '  ', '  ', 0, '  ', 'Correa', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(181, 0, '  ', '  ', 0, '  ', 'Frelin', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(182, 0, '  ', '  ', 0, '  ', 'Venanzi', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(183, 0, '  ', '  ', 0, '  ', 'Poquelin', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(184, 0, '  ', '  ', 0, '  ', 'Léturgie', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(185, 0, '  ', '  ', 0, '  ', 'Loïs', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(186, 0, '  ', '  ', 0, '  ', 'Oger', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(187, 0, '  ', '  ', 0, '  ', 'Paty', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(188, 0, '  ', '  ', 0, '  ', 'David', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(189, 0, '  ', '  ', 0, '  ', 'Jacquette', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(190, 1, ' I s s u   d '' u n e   f a m i l l e   d '' a r t i s t e s ,   M a r c - R e n i e r   W a r n a u t s ,   q u i   a d o p t e   s o n   p r é n o m   c o m m e   p s e u d o n y m e ,   s u i t   t r o i s   a n s   d '' é t u d e s   à   l '' I n s t i t ', '1958-10-29', 1, ' ', 'Warnauts', 15, 'Photo_867.jpg', ' ', 'Marc-Renier', 1, ' ', 'marc.renier.free.fr', '  ', 0),
(191, 0, '  ', '  ', 0, '  ', 'Carpentier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(192, 0, '  ', '  ', 0, '  ', 'Carpentier', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(193, 0, '  ', '  ', 0, '  ', 'Rousseau', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(194, 0, '  ', '  ', 0, '  ', 'Tsuruta', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(195, 0, '  ', '  ', 0, '  ', 'Molinari', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(196, 0, '  ', '  ', 0, '  ', 'Bagage', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(197, 0, '  ', '  ', 0, '  ', 'Fournel', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(198, 0, '  ', '  ', 0, '  ', 'Dupuis', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(199, 1, ' P h o t o      P a q u e t \r   \r   N é   e n   1 9 7 1   e n   F r a n c e .   D i   M a r t i n o   e s t   t o m b é   d a n s   l a   b a n d e   d e s s i n é e   t o u t   p e t i t   a v e c   P i f ,   S p i r o u   e t   T i n t i n ,   c '' e s t', '1971-01-01', 1, ' ', 'Di Martino', 4, 'dimartino.jpg', ' ', 'Richard', 1, ' ', 'zeveryrichblog.blogspot.com', '  ', 0),
(200, 0, ' N é   à   R o u e n   e n   1 9 7 0   p e n d a n t   u n e   é c l a i r c i e . \r   P a r t   d e   c e t t e   v i l l e   a v a n t   q u e   l a   p l u i e   n e   r e v i e n n e   e t   d e v i e n t   u n   s a t e l l i t e   p a r i s i e n . ', '1970-05-20', 1, ' ', 'Ozanam', 4, 'Photo_4055.jpg', ' ', 'Antoine', 1, ' ', 'www.antoine-ozanam.com', '  ', 0),
(201, 0, '  ', '  ', 0, '  ', 'Eluasti', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(202, 1, ' P h o t o      P h i l i p p e   D e s c r o i x \r   \r   R é v é l é   d a n s   l e   n e u v i è m e   a r t   a v e c   l e   p r e m i e r   t o m e   l e   M y s t è r e   d e   l a   T r a c t i o n   2 2   d e   l a   n o u v e l l e   s é r i e  ', '1967-01-01', 1, ' ', 'Van Der Zuiden', 15, 'Photo_14761.jpg', ' ', 'Emilio', 1, ' ', 'malecallclub.blogspot.com', '  ', 0),
(203, 1, ' N é   à   S a l o n - d e - P r o v e n c e   e n   1 9 5 4 ,   p r e m i e r s   d e s s i n s   à   P i o n n i e r s   e n   1 9 7 3 ,   i l   f a i t   e n s u i t e   u n   p a s s a g e   é c l a i r   d a n s   P i l o t e   a v a n t   d '' a p p ', '1954-05-16', 1, ' ', 'Goossens', 4, 'Goossens_11122005.jpg', ' ', 'Daniel', 1, ' ', 'www.danielgoossens.com', '  ', 0),
(204, 0, '  ', '  ', 0, '  ', 'Gillot', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(205, 0, '  ', '  ', 0, '  ', 'Drac', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(206, 1, ' N é   l e   2 9   j u i n   1 9 4 6   à   E r q u e l i n n e s ,   M a r c   W a s t e r l a i n   q u i t t e   l '' a c a d é m i e   d e s   B e a u x - A r t s   d e   M o n s   p o u r   s u i v r e   d e s   c o u r s   d e   b a n d e   d e s s i ', '1946-06-29', 1, ' ', 'Wasterlain', 15, 'Photo_916.jpg', ' ', 'Marc', 1, ' ', 'wasterlain.cubitusbd.com', '  ', 0),
(207, 0, '  ', '  ', 0, '  ', 'Delobel', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(208, 0, '  ', '  ', 0, '  ', 'Georges', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(209, 0, '  ', '  ', 0, '  ', 'Roumegoux', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(210, 0, '  ', '  ', 0, '  ', 'Bosser', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(211, 0, '  ', '  ', 0, '  ', 'Hotta', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(212, 0, '  ', '  ', 0, '  ', 'Obata', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(213, 0, '  ', '  ', 0, '  ', 'Alcazar', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(214, 0, '  ', '  ', 0, '  ', 'Parras', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(215, 0, '  ', '  ', 0, '  ', 'Tran-Lê', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(216, 0, '  ', '  ', 0, '  ', 'Barquins', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(217, 1, ' A y a n t   d é b u t é   à   P i l o t e   d è s   1 9 6 3 ,   P i e r r e   G u i l m a r d   c o l l a b o r e   à   S p i r o u   p u i s   à   T i n t i n ,   e t   r é a l i s e   u n   g r a n d   n o m b r e   d e   s é r i e s   p o u r   l e s ', '1945-08-13', 1, ' ', 'Guilmard', 4, 'Photo_889.gif', ' ', 'Pierre', 1, ' ', 'pierreguilmard.ifrance.com', '  ', 0),
(218, 0, '  ', '  ', 0, '  ', 'Monpierre', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(219, 0, '  ', '  ', 0, '  ', 'Buchwalder', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(220, 0, '  ', '  ', 0, '  ', 'Vallès', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(221, 0, '  ', '  ', 0, '  ', 'Alluard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(222, 0, '  ', '  ', 0, '  ', 'Ruffner', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(223, 1, ' C r o m w e l l ,   p r o v o c a t e u r   d a n s   l ’ â m e ,   e s t   f i l s   d ’ o f f i c i e r   d e   l a   L é g i o n   É t r a n g è r e .   I n t e r d i t   d e   b a n d e   d e s s i n é e ,   i l   s é j o u r n e   c h e z   l e s   ', '1959-09-09', 1, ' ', 'David', 4, 'Cromwell_16042002.jpg', ' ', 'Didier', 1, ' ', 'cromwellnothanks.blogspot.com', '  ', 0),
(224, 0, '  ', '  ', 0, '  ', 'Le Tendre', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(225, 0, '  ', '  ', 0, '  ', 'Labiano', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(226, 0, '  ', '  ', 0, '  ', 'Smulkowski', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(227, 0, '  ', '  ', 0, '  ', 'Richard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(228, 0, '  ', '  ', 0, '  ', 'Houde', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(229, 0, '  ', '  ', 0, '  ', 'Studio Walt Disney', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(230, 0, '  ', '  ', 0, '  ', 'Visonneau', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(231, 0, '  ', '  ', 0, '  ', 'Poitevin', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(232, 0, '  ', '  ', 0, '  ', 'Ennis', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(233, 0, '  ', '  ', 0, '  ', 'Parlov', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(234, 0, '  ', '  ', 0, '  ', 'Loughridge', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(235, 0, '  ', '  ', 0, '  ', 'Oriol', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(236, 1, ' N é   e n   j a n v i e r   1 9 5 8   à   T o u l o u s e ,   i l   e n t a m e   d e s   é t u d e s   d ’ A r t s   P l a s t i q u e s   à   A i x - e n - P r o v e n c e   p u i s   s e   l a n c e   c o m m e   m a q u e t t i s t e   p u b l i c i ', '1958-01-05', 1, ' ', 'Carrère', 4, 'Carrere.jpg', ' ', 'Serge', 1, ' ', 'sergecarrere.blogspot.com', '  ', 0),
(237, 0, '  ', '  ', 0, '  ', 'Carrère', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(238, 0, '  ', '  ', 0, '  ', 'Gascard', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(239, 0, '  ', '  ', 0, '  ', 'Son', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(240, 0, '  ', '  ', 0, '  ', 'O''Hare', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(241, 0, '  ', '  ', 0, '  ', 'Wolinski', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(242, 0, '  ', '  ', 0, '  ', 'Abnett', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(243, 0, '  ', '  ', 0, '  ', 'Ekedal', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(244, 0, '  ', '  ', 0, '  ', 'Ruffolo', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(245, 0, '  ', '  ', 0, '  ', 'Neilson', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(246, 0, ' P a s s i o n n é   d e   d e s s i n ,   d e   j e u x   v i d é o ,   d e   m a n g a   e t   d e   c i n é m a ,   i l   s e   l a n c e   e n   a u t o d i d a c t e   d a n s   l a   b a n d e   d e s s i n é e .   S e s   r é f é r e n c e s   s o ', '1971-01-01', 1, ' ', 'Moulière', 4, 'Ludolullabi.jpg', ' ', 'Ludovic', 0, ' ', 'www.ludolullabi.com', '  ', 0),
(247, 0, '  ', '  ', 0, '  ', 'Washington', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(248, 0, '  ', '  ', 0, '  ', 'Waugh', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(249, 0, '  ', '  ', 0, '  ', 'Terrasson', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(250, 0, '  ', '  ', 0, '  ', 'Cara', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(251, 0, '  ', '  ', 0, '  ', 'Mysday', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(252, 0, '  ', '  ', 0, '  ', 'Leloup', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(253, 0, '  ', '  ', 0, '  ', 'Désert', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(254, 0, '  ', '  ', 0, '  ', 'Cerise', 0, '  ', '  ', '  ', 0, '  ', '  ', '  ', 0),
(255, NULL, '', NULL, NULL, NULL, 'LUPANO', 0, '', '', 'Wilfrid', 1, '', '', '', 43),
(256, 1, '', NULL, 1, NULL, 'CAUUET', 0, '', '', 'Paul', NULL, '', '', '', 43);

-- --------------------------------------------------------

--
-- Structure de la table `auteuralbum`
--

CREATE TABLE IF NOT EXISTS `auteuralbum` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `auteur_id` int(11) NOT NULL,
  `dessinateur` tinyint(1) NOT NULL,
  `scenariste` tinyint(1) NOT NULL,
  `coloriste` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1348 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `auteuralbum`
--

INSERT INTO `auteuralbum` (`id`, `album_id`, `auteur_id`, `dessinateur`, `scenariste`, `coloriste`) VALUES
(1, 193, 4, 1, 0, 0),
(2, 193, 3, 0, 1, 0),
(3, 193, 5, 0, 0, 1),
(4, 0, 4, 1, 0, 0),
(5, 0, 3, 0, 1, 0),
(6, 0, 5, 0, 0, 1),
(7, 195, 4, 1, 0, 0),
(8, 195, 3, 0, 1, 0),
(9, 195, 5, 0, 0, 1),
(10, 196, 4, 1, 0, 0),
(11, 196, 3, 0, 1, 0),
(12, 196, 5, 0, 0, 1),
(13, 197, 4, 1, 0, 0),
(14, 197, 3, 0, 1, 0),
(15, 197, 5, 0, 0, 1),
(16, 6, 8, 1, 0, 0),
(17, 6, 6, 0, 1, 0),
(18, 6, 8, 0, 0, 1),
(19, 0, 8, 1, 0, 0),
(20, 0, 6, 0, 1, 0),
(21, 0, 8, 0, 0, 1),
(22, 0, 8, 1, 0, 0),
(23, 0, 6, 0, 1, 0),
(24, 0, 8, 0, 0, 1),
(25, 9, 8, 1, 0, 0),
(26, 9, 6, 0, 1, 0),
(27, 9, 8, 0, 0, 1),
(28, 198, 4, 1, 0, 0),
(29, 198, 3, 0, 1, 0),
(30, 198, 5, 0, 0, 1),
(31, 199, 4, 1, 0, 0),
(32, 199, 3, 0, 1, 0),
(33, 199, 5, 0, 0, 1),
(34, 200, 4, 1, 0, 0),
(35, 200, 3, 0, 1, 0),
(36, 200, 5, 0, 0, 1),
(37, 201, 4, 1, 0, 0),
(38, 201, 3, 0, 1, 0),
(39, 201, 5, 0, 0, 1),
(40, 202, 4, 1, 0, 0),
(41, 202, 3, 0, 1, 0),
(42, 202, 5, 0, 0, 1),
(43, 203, 4, 1, 0, 0),
(44, 203, 3, 0, 1, 0),
(45, 203, 5, 0, 0, 1),
(46, 204, 4, 1, 0, 0),
(47, 204, 3, 0, 1, 0),
(48, 204, 5, 0, 0, 1),
(49, 283, 4, 1, 0, 0),
(50, 283, 3, 0, 1, 0),
(51, 283, 5, 0, 0, 1),
(52, 284, 4, 1, 0, 0),
(53, 284, 3, 0, 1, 0),
(54, 284, 5, 0, 0, 1),
(55, 285, 4, 1, 0, 0),
(56, 285, 3, 0, 1, 0),
(57, 285, 5, 0, 0, 1),
(58, 286, 4, 1, 0, 0),
(59, 286, 3, 0, 1, 0),
(60, 286, 5, 0, 0, 1),
(61, 287, 4, 1, 0, 0),
(62, 287, 3, 0, 1, 0),
(63, 287, 5, 0, 0, 1),
(64, 288, 4, 1, 0, 0),
(65, 288, 3, 0, 1, 0),
(66, 288, 5, 0, 0, 1),
(67, 289, 4, 1, 0, 0),
(68, 289, 3, 0, 1, 0),
(69, 289, 5, 0, 0, 1),
(70, 290, 4, 1, 0, 0),
(71, 290, 3, 0, 1, 0),
(72, 290, 5, 0, 0, 1),
(73, 291, 4, 1, 0, 0),
(74, 291, 3, 0, 1, 0),
(75, 291, 5, 0, 0, 1),
(76, 292, 4, 1, 0, 0),
(77, 292, 3, 0, 1, 0),
(78, 292, 5, 0, 0, 1),
(79, 205, 4, 1, 0, 0),
(80, 205, 3, 0, 1, 0),
(81, 205, 5, 0, 0, 1),
(82, 206, 4, 1, 0, 1),
(83, 207, 4, 1, 1, 1),
(84, 0, 4, 1, 1, 1),
(85, 0, 4, 1, 1, 0),
(86, 210, 4, 1, 1, 0),
(87, 211, 4, 1, 1, 0),
(88, 0, 4, 1, 1, 0),
(89, 213, 4, 1, 1, 0),
(90, 293, 4, 1, 0, 1),
(91, 294, 4, 1, 1, 0),
(92, 0, 4, 1, 0, 1),
(93, 519, 2, 1, 1, 0),
(94, 0, 14, 1, 1, 0),
(95, 0, 16, 1, 0, 0),
(96, 0, 15, 0, 1, 0),
(97, 0, 20, 0, 0, 1),
(98, 0, 17, 1, 1, 0),
(99, 0, 18, 1, 1, 0),
(100, 643, 19, 1, 1, 0),
(101, 278, 19, 1, 1, 0),
(102, 279, 19, 1, 1, 0),
(103, 47, 21, 1, 1, 0),
(104, 48, 8, 1, 0, 0),
(105, 48, 6, 0, 1, 0),
(106, 48, 8, 0, 0, 1),
(107, 49, 8, 1, 0, 0),
(108, 49, 6, 0, 1, 0),
(109, 49, 8, 0, 0, 1),
(110, 50, 8, 1, 0, 0),
(111, 50, 6, 0, 1, 0),
(112, 50, 8, 0, 0, 1),
(113, 51, 8, 1, 0, 0),
(114, 51, 6, 0, 1, 0),
(115, 51, 8, 0, 0, 1),
(116, 52, 8, 1, 0, 0),
(117, 52, 6, 0, 1, 0),
(118, 52, 8, 0, 0, 1),
(119, 53, 8, 1, 0, 0),
(120, 53, 6, 0, 1, 0),
(121, 53, 8, 0, 0, 1),
(122, 0, 8, 1, 0, 0),
(123, 0, 6, 0, 1, 0),
(124, 0, 8, 0, 0, 1),
(125, 55, 8, 1, 0, 0),
(126, 55, 6, 0, 1, 0),
(127, 55, 8, 0, 0, 1),
(128, 0, 8, 1, 0, 0),
(129, 0, 6, 0, 1, 0),
(130, 0, 8, 0, 0, 1),
(131, 57, 8, 1, 0, 0),
(132, 57, 6, 0, 1, 0),
(133, 57, 8, 0, 0, 1),
(134, 58, 8, 1, 0, 0),
(135, 58, 6, 0, 1, 0),
(136, 58, 8, 0, 0, 1),
(137, 59, 8, 1, 0, 0),
(138, 59, 6, 0, 1, 0),
(139, 59, 8, 0, 0, 1),
(140, 0, 8, 1, 0, 0),
(141, 0, 6, 0, 1, 0),
(142, 0, 8, 0, 0, 1),
(143, 61, 23, 1, 0, 0),
(144, 61, 6, 0, 1, 0),
(145, 61, 24, 0, 0, 1),
(146, 62, 8, 1, 0, 0),
(147, 62, 6, 0, 1, 0),
(148, 62, 8, 0, 0, 1),
(149, 63, 25, 1, 1, 0),
(150, 64, 28, 1, 0, 0),
(151, 64, 27, 0, 1, 0),
(152, 64, 1, 0, 0, 1),
(153, 65, 33, 1, 0, 0),
(154, 65, 32, 0, 1, 0),
(155, 65, 101, 0, 0, 1),
(156, 0, 36, 1, 0, 0),
(157, 0, 35, 0, 1, 0),
(158, 0, 1, 0, 0, 1),
(159, 0, 38, 1, 0, 0),
(160, 0, 37, 0, 1, 0),
(161, 0, 20, 0, 0, 1),
(162, 0, 39, 1, 1, 1),
(163, 69, 41, 1, 0, 0),
(164, 69, 40, 0, 1, 0),
(165, 69, 20, 0, 0, 1),
(166, 70, 42, 1, 0, 0),
(167, 70, 40, 0, 1, 0),
(168, 70, 43, 0, 0, 1),
(169, 71, 41, 1, 0, 0),
(170, 71, 40, 0, 1, 0),
(171, 71, 44, 0, 0, 1),
(172, 72, 45, 1, 0, 1),
(173, 0, 41, 1, 0, 0),
(174, 0, 40, 0, 1, 0),
(175, 0, 44, 0, 0, 1),
(176, 74, 45, 1, 0, 1),
(177, 75, 45, 1, 0, 1),
(178, 76, 46, 1, 0, 1),
(179, 77, 47, 1, 1, 0),
(180, 0, 25, 1, 1, 0),
(181, 0, 51, 1, 0, 0),
(182, 0, 50, 0, 1, 0),
(183, 0, 52, 0, 0, 1),
(184, 80, 46, 1, 1, 1),
(185, 81, 53, 1, 0, 1),
(186, 82, 54, 1, 1, 0),
(187, 83, 53, 1, 1, 1),
(188, 0, 53, 1, 1, 1),
(189, 85, 45, 1, 1, 0),
(190, 86, 56, 1, 1, 0),
(191, 87, 58, 1, 0, 0),
(192, 87, 57, 0, 1, 0),
(193, 87, 5, 0, 0, 1),
(194, 88, 60, 1, 0, 0),
(195, 88, 59, 0, 1, 0),
(196, 88, 55, 0, 0, 1),
(197, 89, 56, 1, 1, 0),
(198, 90, 62, 1, 0, 0),
(199, 90, 32, 0, 1, 0),
(200, 90, 63, 0, 0, 1),
(201, 0, 62, 1, 0, 0),
(202, 0, 3, 0, 1, 0),
(203, 0, 20, 0, 0, 1),
(204, 92, 62, 1, 0, 0),
(205, 92, 3, 0, 1, 0),
(206, 92, 20, 0, 0, 1),
(207, 93, 65, 1, 0, 0),
(208, 93, 64, 0, 1, 0),
(209, 93, 66, 0, 0, 1),
(210, 0, 2, 1, 0, 1),
(211, 0, 62, 1, 1, 0),
(212, 96, 62, 1, 1, 0),
(213, 97, 62, 1, 1, 0),
(214, 0, 62, 1, 1, 0),
(215, 99, 62, 1, 1, 0),
(216, 100, 62, 1, 1, 0),
(217, 0, 62, 1, 1, 0),
(218, 102, 62, 1, 1, 0),
(219, 103, 62, 1, 0, 0),
(220, 103, 3, 0, 1, 0),
(221, 103, 5, 0, 0, 1),
(222, 104, 62, 1, 1, 0),
(223, 105, 62, 1, 0, 0),
(224, 105, 3, 0, 1, 0),
(225, 105, 5, 0, 0, 1),
(226, 106, 62, 1, 0, 0),
(227, 106, 3, 0, 1, 0),
(228, 106, 20, 0, 0, 1),
(229, 107, 62, 1, 0, 0),
(230, 107, 3, 0, 1, 0),
(231, 107, 5, 0, 0, 1),
(232, 0, 62, 1, 0, 0),
(233, 0, 3, 0, 1, 0),
(234, 0, 5, 0, 0, 1),
(235, 0, 62, 1, 0, 0),
(236, 0, 3, 0, 1, 0),
(237, 0, 5, 0, 0, 1),
(238, 110, 62, 1, 0, 0),
(239, 110, 3, 0, 1, 0),
(240, 110, 5, 0, 0, 1),
(241, 111, 62, 1, 0, 0),
(242, 111, 3, 0, 1, 0),
(243, 111, 5, 0, 0, 1),
(244, 0, 62, 1, 0, 0),
(245, 0, 3, 0, 1, 0),
(246, 0, 20, 0, 0, 1),
(247, 113, 62, 1, 0, 0),
(248, 113, 3, 0, 1, 0),
(249, 113, 20, 0, 0, 1),
(250, 114, 62, 1, 0, 0),
(251, 114, 3, 0, 1, 0),
(252, 114, 5, 0, 0, 1),
(253, 115, 62, 1, 0, 0),
(254, 115, 3, 0, 1, 0),
(255, 115, 20, 0, 0, 1),
(256, 116, 62, 1, 0, 0),
(257, 116, 3, 0, 1, 0),
(258, 116, 5, 0, 0, 1),
(259, 117, 62, 1, 0, 0),
(260, 117, 3, 0, 1, 0),
(261, 117, 20, 0, 0, 1),
(262, 118, 62, 1, 0, 0),
(263, 118, 3, 0, 1, 0),
(264, 118, 20, 0, 0, 1),
(265, 119, 62, 1, 0, 0),
(266, 119, 3, 0, 1, 0),
(267, 119, 20, 0, 0, 1),
(268, 120, 62, 1, 0, 0),
(269, 120, 3, 0, 1, 0),
(270, 120, 20, 0, 0, 1),
(271, 121, 62, 1, 0, 0),
(272, 121, 3, 0, 1, 0),
(273, 121, 5, 0, 0, 1),
(274, 0, 62, 1, 0, 0),
(275, 0, 3, 0, 1, 0),
(276, 0, 5, 0, 0, 1),
(277, 123, 62, 1, 0, 0),
(278, 123, 3, 0, 1, 0),
(279, 123, 20, 0, 0, 1),
(280, 124, 62, 1, 0, 0),
(281, 124, 3, 0, 1, 0),
(282, 124, 20, 0, 0, 1),
(283, 125, 62, 1, 0, 0),
(284, 125, 3, 0, 1, 0),
(285, 125, 5, 0, 0, 1),
(286, 126, 62, 1, 0, 0),
(287, 126, 3, 0, 1, 0),
(288, 126, 20, 0, 0, 1),
(289, 127, 62, 1, 0, 0),
(290, 127, 3, 0, 1, 0),
(291, 127, 20, 0, 0, 1),
(292, 128, 62, 1, 0, 0),
(293, 128, 3, 0, 1, 0),
(294, 128, 20, 0, 0, 1),
(295, 0, 62, 1, 0, 0),
(296, 0, 3, 0, 1, 0),
(297, 0, 20, 0, 0, 1),
(298, 130, 62, 1, 0, 0),
(299, 130, 3, 0, 1, 0),
(300, 130, 20, 0, 0, 1),
(301, 131, 62, 1, 1, 0),
(302, 132, 62, 1, 0, 0),
(303, 132, 71, 0, 1, 0),
(304, 132, 20, 0, 0, 1),
(305, 133, 62, 1, 0, 0),
(306, 133, 2, 0, 1, 0),
(307, 133, 5, 0, 0, 1),
(308, 134, 62, 1, 0, 0),
(309, 134, 32, 0, 1, 0),
(310, 134, 20, 0, 0, 1),
(311, 135, 62, 1, 0, 0),
(312, 135, 3, 0, 1, 0),
(313, 135, 20, 0, 0, 1),
(314, 136, 62, 1, 0, 0),
(315, 136, 72, 0, 1, 0),
(316, 136, 20, 0, 0, 1),
(317, 137, 62, 1, 0, 0),
(318, 137, 184, 0, 1, 0),
(319, 137, 20, 0, 0, 1),
(320, 138, 62, 1, 0, 0),
(321, 138, 74, 0, 1, 0),
(322, 138, 20, 0, 0, 1),
(323, 139, 62, 1, 0, 0),
(324, 139, 2, 0, 1, 0),
(325, 139, 20, 0, 0, 1),
(326, 140, 62, 1, 0, 0),
(327, 140, 2, 0, 1, 0),
(328, 140, 75, 0, 0, 1),
(329, 141, 62, 1, 0, 0),
(330, 141, 72, 0, 1, 0),
(331, 141, 63, 0, 0, 1),
(332, 0, 62, 1, 0, 0),
(333, 0, 64, 0, 1, 0),
(334, 0, 63, 0, 0, 1),
(335, 143, 62, 1, 0, 0),
(336, 143, 32, 0, 1, 0),
(337, 143, 63, 0, 0, 1),
(338, 0, 62, 1, 0, 0),
(339, 0, 184, 0, 1, 0),
(340, 0, 63, 0, 0, 1),
(341, 145, 62, 1, 0, 0),
(342, 145, 72, 0, 1, 0),
(343, 145, 63, 0, 0, 1),
(344, 146, 62, 1, 0, 0),
(345, 146, 184, 0, 1, 0),
(346, 146, 63, 0, 0, 1),
(347, 147, 62, 1, 0, 0),
(348, 147, 32, 0, 1, 0),
(349, 147, 63, 0, 0, 1),
(350, 148, 62, 1, 0, 0),
(351, 148, 32, 0, 1, 0),
(352, 148, 63, 0, 0, 1),
(353, 149, 62, 1, 0, 0),
(354, 149, 76, 0, 1, 0),
(355, 149, 63, 0, 0, 1),
(356, 150, 62, 1, 0, 0),
(357, 150, 32, 0, 1, 0),
(358, 150, 63, 0, 0, 1),
(359, 151, 62, 1, 0, 0),
(360, 151, 71, 0, 1, 0),
(361, 151, 63, 0, 0, 1),
(362, 152, 62, 1, 0, 0),
(363, 152, 78, 0, 1, 0),
(364, 152, 63, 0, 0, 1),
(365, 0, 62, 1, 0, 0),
(366, 0, 71, 0, 1, 0),
(367, 0, 63, 0, 0, 1),
(368, 0, 62, 1, 0, 0),
(369, 0, 78, 0, 1, 0),
(370, 0, 63, 0, 0, 1),
(371, 155, 79, 1, 1, 0),
(372, 156, 89, 1, 1, 0),
(373, 157, 2, 1, 0, 1),
(374, 0, 89, 1, 1, 0),
(375, 159, 2, 1, 1, 0),
(376, 160, 89, 1, 1, 0),
(377, 161, 89, 1, 0, 0),
(378, 161, 2, 0, 1, 0),
(379, 161, 20, 0, 0, 1),
(380, 163, 89, 1, 1, 0),
(381, 163, 89, 1, 1, 0),
(382, 164, 89, 1, 1, 0),
(383, 165, 89, 1, 0, 0),
(384, 165, 93, 0, 1, 0),
(385, 165, 5, 0, 0, 1),
(386, 166, 89, 1, 1, 0),
(387, 167, 89, 1, 1, 0),
(388, 168, 89, 1, 1, 0),
(389, 169, 89, 1, 1, 0),
(390, 170, 89, 1, 1, 0),
(391, 171, 89, 1, 1, 0),
(392, 172, 89, 1, 1, 0),
(393, 173, 89, 1, 1, 0),
(394, 174, 89, 1, 1, 0),
(395, 175, 89, 1, 1, 0),
(396, 176, 89, 1, 1, 0),
(397, 177, 89, 1, 1, 0),
(398, 178, 89, 1, 1, 0),
(399, 179, 89, 1, 1, 0),
(400, 0, 89, 1, 1, 0),
(401, 181, 89, 1, 1, 0),
(402, 182, 89, 1, 1, 0),
(403, 183, 89, 1, 1, 0),
(404, 184, 89, 1, 1, 0),
(405, 185, 89, 1, 1, 0),
(406, 186, 89, 1, 1, 0),
(407, 0, 89, 1, 1, 0),
(408, 0, 89, 1, 1, 0),
(409, 189, 89, 1, 1, 0),
(410, 190, 89, 1, 1, 0),
(411, 191, 95, 1, 0, 0),
(412, 191, 2, 0, 1, 0),
(413, 191, 66, 0, 0, 1),
(414, 192, 95, 1, 0, 0),
(415, 192, 2, 0, 1, 0),
(416, 192, 66, 0, 0, 1),
(417, 193, 4, 1, 0, 0),
(418, 193, 3, 0, 1, 0),
(419, 193, 5, 0, 0, 1),
(420, 0, 4, 1, 0, 0),
(421, 0, 3, 0, 1, 0),
(422, 0, 5, 0, 0, 1),
(423, 195, 4, 1, 0, 0),
(424, 195, 3, 0, 1, 0),
(425, 195, 5, 0, 0, 1),
(426, 196, 4, 1, 0, 0),
(427, 196, 3, 0, 1, 0),
(428, 196, 5, 0, 0, 1),
(429, 197, 4, 1, 0, 0),
(430, 197, 3, 0, 1, 0),
(431, 197, 5, 0, 0, 1),
(432, 198, 4, 1, 0, 0),
(433, 198, 3, 0, 1, 0),
(434, 198, 5, 0, 0, 1),
(435, 199, 4, 1, 0, 0),
(436, 199, 3, 0, 1, 0),
(437, 199, 5, 0, 0, 1),
(438, 200, 4, 1, 0, 0),
(439, 200, 3, 0, 1, 0),
(440, 200, 5, 0, 0, 1),
(441, 201, 4, 1, 0, 0),
(442, 201, 3, 0, 1, 0),
(443, 201, 5, 0, 0, 1),
(444, 202, 4, 1, 0, 0),
(445, 202, 3, 0, 1, 0),
(446, 202, 5, 0, 0, 1),
(447, 203, 4, 1, 0, 0),
(448, 203, 3, 0, 1, 0),
(449, 203, 5, 0, 0, 1),
(450, 204, 4, 1, 0, 0),
(451, 204, 3, 0, 1, 0),
(452, 204, 5, 0, 0, 1),
(453, 205, 4, 1, 0, 0),
(454, 205, 3, 0, 1, 0),
(455, 205, 5, 0, 0, 1),
(456, 206, 4, 1, 0, 1),
(457, 207, 4, 1, 1, 1),
(458, 0, 4, 1, 1, 1),
(459, 0, 4, 1, 1, 0),
(460, 210, 4, 1, 1, 0),
(461, 211, 4, 1, 1, 0),
(462, 0, 4, 1, 1, 0),
(463, 213, 4, 1, 1, 0),
(464, 214, 4, 1, 0, 0),
(465, 214, 96, 0, 1, 0),
(466, 214, 5, 0, 0, 1),
(467, 215, 4, 1, 0, 0),
(468, 215, 96, 0, 1, 0),
(469, 215, 20, 0, 0, 1),
(470, 216, 140, 1, 0, 0),
(471, 216, 96, 0, 1, 0),
(472, 216, 20, 0, 0, 1),
(473, 217, 140, 1, 0, 0),
(474, 217, 96, 0, 1, 0),
(475, 217, 5, 0, 0, 1),
(476, 218, 140, 1, 0, 0),
(477, 218, 96, 0, 1, 0),
(478, 218, 5, 0, 0, 1),
(479, 219, 140, 1, 0, 0),
(480, 219, 96, 0, 1, 0),
(481, 219, 5, 0, 0, 1),
(482, 220, 140, 1, 0, 0),
(483, 220, 96, 0, 1, 0),
(484, 220, 5, 0, 0, 1),
(485, 221, 140, 1, 0, 0),
(486, 221, 96, 0, 1, 0),
(487, 221, 5, 0, 0, 1),
(488, 222, 140, 1, 0, 0),
(489, 222, 96, 0, 1, 0),
(490, 222, 5, 0, 0, 1),
(491, 223, 140, 1, 0, 0),
(492, 223, 96, 0, 1, 0),
(493, 223, 20, 0, 0, 1),
(494, 224, 140, 1, 0, 0),
(495, 224, 96, 0, 1, 0),
(496, 224, 5, 0, 0, 1),
(497, 225, 140, 1, 0, 0),
(498, 225, 96, 0, 1, 0),
(499, 225, 5, 0, 0, 1),
(500, 226, 140, 1, 0, 0),
(501, 226, 96, 0, 1, 0),
(502, 226, 5, 0, 0, 1),
(503, 227, 99, 1, 0, 0),
(504, 227, 96, 0, 1, 0),
(505, 227, 5, 0, 0, 1),
(506, 228, 140, 1, 0, 0),
(507, 228, 96, 0, 1, 0),
(508, 228, 20, 0, 0, 1),
(509, 229, 140, 1, 0, 0),
(510, 229, 96, 0, 1, 0),
(511, 229, 20, 0, 0, 1),
(512, 0, 99, 1, 0, 0),
(513, 0, 96, 0, 1, 0),
(514, 0, 20, 0, 0, 1),
(515, 0, 99, 1, 0, 0),
(516, 0, 96, 0, 1, 0),
(517, 0, 20, 0, 0, 1),
(518, 232, 100, 1, 0, 0),
(519, 232, 96, 0, 1, 0),
(520, 232, 101, 0, 0, 1),
(521, 233, 103, 1, 0, 0),
(522, 233, 102, 0, 1, 0),
(523, 233, 104, 0, 0, 1),
(524, 234, 105, 1, 0, 0),
(525, 234, 102, 0, 1, 0),
(526, 234, 104, 0, 0, 1),
(527, 235, 107, 1, 0, 0),
(528, 235, 139, 0, 1, 0),
(529, 235, 108, 0, 0, 1),
(530, 0, 107, 1, 0, 0),
(531, 0, 139, 0, 1, 0),
(532, 0, 108, 0, 0, 1),
(533, 237, 107, 1, 0, 1),
(534, 238, 109, 1, 0, 0),
(535, 238, 139, 0, 1, 0),
(536, 238, 108, 0, 0, 1),
(537, 239, 110, 1, 0, 0),
(538, 239, 139, 0, 1, 0),
(539, 239, 111, 0, 0, 1),
(540, 240, 109, 1, 0, 0),
(541, 240, 139, 0, 1, 0),
(542, 240, 20, 0, 0, 1),
(543, 241, 107, 1, 0, 0),
(544, 241, 139, 0, 1, 0),
(545, 241, 111, 0, 0, 1),
(546, 242, 107, 1, 0, 0),
(547, 242, 139, 0, 1, 0),
(548, 242, 108, 0, 0, 1),
(549, 243, 110, 1, 0, 1),
(550, 0, 110, 1, 0, 0),
(551, 0, 139, 0, 1, 0),
(552, 0, 111, 0, 0, 1),
(553, 245, 114, 1, 0, 1),
(554, 246, 114, 1, 0, 1),
(555, 247, 114, 1, 0, 0),
(556, 247, 139, 0, 1, 0),
(557, 247, 111, 0, 0, 1),
(558, 248, 114, 1, 0, 0),
(559, 248, 139, 0, 1, 0),
(560, 248, 111, 0, 0, 1),
(561, 249, 116, 1, 0, 0),
(562, 249, 115, 0, 1, 0),
(563, 249, 117, 0, 0, 1),
(564, 250, 116, 1, 0, 0),
(565, 250, 115, 0, 1, 0),
(566, 250, 20, 0, 0, 1),
(567, 251, 124, 1, 0, 0),
(568, 251, 115, 0, 1, 0),
(569, 251, 117, 0, 0, 1),
(570, 252, 2, 1, 0, 1),
(571, 253, 2, 1, 0, 1),
(572, 0, 2, 1, 0, 0),
(573, 0, 115, 0, 1, 0),
(574, 0, 5, 0, 0, 1),
(575, 554, 2, 1, 0, 0),
(576, 554, 115, 0, 1, 0),
(577, 554, 117, 0, 0, 1),
(578, 256, 120, 1, 0, 1),
(579, 257, 123, 1, 0, 0),
(580, 257, 115, 0, 1, 0),
(581, 257, 117, 0, 0, 1),
(582, 258, 119, 1, 0, 0),
(583, 258, 115, 0, 1, 0),
(584, 258, 117, 0, 0, 1),
(585, 0, 118, 1, 0, 0),
(586, 0, 115, 0, 1, 0),
(587, 0, 117, 0, 0, 1),
(588, 0, 121, 1, 0, 0),
(589, 0, 115, 0, 1, 0),
(590, 0, 117, 0, 0, 1),
(591, 0, 120, 1, 0, 0),
(592, 0, 115, 0, 1, 0),
(593, 0, 117, 0, 0, 1),
(594, 262, 62, 1, 0, 0),
(595, 262, 3, 0, 1, 0),
(596, 262, 5, 0, 0, 1),
(597, 263, 62, 1, 0, 0),
(598, 263, 3, 0, 1, 0),
(599, 263, 20, 0, 0, 1),
(600, 264, 62, 1, 0, 0),
(601, 264, 3, 0, 1, 0),
(602, 264, 5, 0, 0, 1),
(603, 265, 62, 1, 0, 0),
(604, 265, 3, 0, 1, 0),
(605, 265, 20, 0, 0, 1),
(606, 266, 62, 1, 0, 0),
(607, 266, 3, 0, 1, 0),
(608, 266, 20, 0, 0, 1),
(609, 267, 62, 1, 0, 0),
(610, 267, 3, 0, 1, 0),
(611, 267, 20, 0, 0, 1),
(612, 268, 62, 1, 0, 0),
(613, 268, 3, 0, 1, 0),
(614, 268, 20, 0, 0, 1),
(615, 269, 62, 1, 0, 0),
(616, 269, 3, 0, 1, 0),
(617, 269, 20, 0, 0, 1),
(618, 270, 62, 1, 0, 0),
(619, 270, 3, 0, 1, 0),
(620, 270, 20, 0, 0, 1),
(621, 0, 62, 1, 0, 0),
(622, 0, 3, 0, 1, 0),
(623, 0, 20, 0, 0, 1),
(624, 0, 79, 1, 1, 0),
(625, 273, 79, 1, 1, 1),
(626, 274, 81, 1, 1, 1),
(627, 275, 83, 1, 0, 0),
(628, 275, 82, 0, 1, 0),
(629, 275, 84, 0, 0, 1),
(630, 276, 83, 1, 0, 0),
(631, 276, 85, 0, 1, 0),
(632, 276, 86, 0, 0, 1),
(633, 643, 87, 1, 1, 0),
(634, 278, 87, 1, 1, 0),
(635, 279, 87, 1, 1, 0),
(636, 280, 87, 1, 1, 0),
(637, 281, 89, 1, 1, 0),
(638, 282, 89, 1, 1, 0),
(639, 283, 4, 1, 0, 0),
(640, 283, 3, 0, 1, 0),
(641, 283, 5, 0, 0, 1),
(642, 284, 4, 1, 0, 0),
(643, 284, 3, 0, 1, 0),
(644, 284, 5, 0, 0, 1),
(645, 285, 4, 1, 0, 0),
(646, 285, 3, 0, 1, 0),
(647, 285, 5, 0, 0, 1),
(648, 286, 4, 1, 0, 0),
(649, 286, 3, 0, 1, 0),
(650, 286, 5, 0, 0, 1),
(651, 287, 4, 1, 0, 0),
(652, 287, 3, 0, 1, 0),
(653, 287, 5, 0, 0, 1),
(654, 288, 4, 1, 0, 0),
(655, 288, 3, 0, 1, 0),
(656, 288, 5, 0, 0, 1),
(657, 289, 4, 1, 0, 0),
(658, 289, 3, 0, 1, 0),
(659, 289, 5, 0, 0, 1),
(660, 290, 4, 1, 0, 0),
(661, 290, 3, 0, 1, 0),
(662, 290, 5, 0, 0, 1),
(663, 291, 4, 1, 0, 0),
(664, 291, 3, 0, 1, 0),
(665, 291, 5, 0, 0, 1),
(666, 292, 4, 1, 0, 0),
(667, 292, 3, 0, 1, 0),
(668, 292, 5, 0, 0, 1),
(669, 293, 4, 1, 0, 1),
(670, 294, 4, 1, 1, 0),
(671, 0, 4, 1, 0, 1),
(672, 0, 140, 1, 0, 1),
(673, 0, 4, 1, 0, 0),
(674, 0, 96, 0, 1, 0),
(675, 0, 5, 0, 0, 1),
(676, 0, 4, 1, 0, 0),
(677, 0, 96, 0, 1, 0),
(678, 0, 5, 0, 0, 1),
(679, 299, 4, 1, 0, 0),
(680, 299, 96, 0, 1, 0),
(681, 299, 5, 0, 0, 1),
(682, 300, 4, 1, 0, 0),
(683, 300, 96, 0, 1, 0),
(684, 300, 5, 0, 0, 1),
(685, 0, 4, 1, 0, 0),
(686, 0, 96, 0, 1, 0),
(687, 0, 5, 0, 0, 1),
(688, 302, 4, 1, 0, 0),
(689, 302, 96, 0, 1, 0),
(690, 302, 5, 0, 0, 1),
(691, 303, 107, 1, 0, 0),
(692, 303, 139, 0, 1, 0),
(693, 303, 108, 0, 0, 1),
(694, 304, 107, 1, 0, 0),
(695, 304, 139, 0, 1, 0),
(696, 304, 108, 0, 0, 1),
(697, 305, 109, 1, 0, 0),
(698, 305, 139, 0, 1, 0),
(699, 305, 108, 0, 0, 1),
(700, 306, 109, 1, 0, 0),
(701, 306, 139, 0, 1, 0),
(702, 306, 108, 0, 0, 1),
(703, 307, 109, 1, 0, 0),
(704, 307, 139, 0, 1, 0),
(705, 307, 108, 0, 0, 1),
(706, 308, 109, 1, 0, 0),
(707, 308, 139, 0, 1, 0),
(708, 308, 108, 0, 0, 1),
(709, 309, 110, 1, 0, 1),
(710, 310, 110, 1, 0, 1),
(711, 311, 122, 1, 0, 0),
(712, 311, 115, 0, 1, 0),
(713, 311, 117, 0, 0, 1),
(714, 0, 116, 1, 0, 0),
(715, 0, 115, 0, 1, 0),
(716, 0, 117, 0, 0, 1),
(717, 313, 2, 1, 0, 0),
(718, 313, 115, 0, 1, 0),
(719, 313, 117, 0, 0, 1),
(720, 629, 116, 1, 0, 1),
(721, 317, 116, 1, 0, 0),
(722, 317, 126, 0, 1, 0),
(723, 317, 117, 0, 0, 1),
(724, 316, 116, 1, 0, 0),
(725, 316, 115, 0, 1, 0),
(726, 316, 117, 0, 0, 1),
(727, 317, 116, 1, 0, 0),
(728, 317, 115, 0, 1, 0),
(729, 317, 117, 0, 0, 1),
(730, 629, 116, 1, 0, 1),
(731, 0, 116, 1, 0, 0),
(732, 0, 126, 0, 1, 0),
(733, 0, 115, 0, 0, 1),
(734, 320, 116, 1, 0, 0),
(735, 320, 115, 0, 1, 0),
(736, 320, 117, 0, 0, 1),
(737, 321, 122, 1, 0, 0),
(738, 321, 115, 0, 1, 0),
(739, 321, 117, 0, 0, 1),
(740, 0, 122, 1, 0, 0),
(741, 0, 115, 0, 1, 0),
(742, 0, 117, 0, 0, 1),
(743, 323, 116, 1, 0, 0),
(744, 323, 115, 0, 1, 0),
(745, 323, 117, 0, 0, 1),
(746, 325, 128, 1, 0, 0),
(747, 325, 127, 0, 1, 0),
(748, 325, 129, 0, 0, 1),
(749, 325, 130, 1, 0, 0),
(750, 325, 128, 0, 1, 0),
(751, 325, 129, 0, 0, 1),
(752, 326, 128, 1, 0, 1),
(753, 327, 128, 1, 0, 0),
(754, 327, 127, 0, 1, 0),
(755, 327, 20, 0, 0, 1),
(756, 328, 128, 1, 0, 1),
(757, 0, 128, 1, 0, 1),
(758, 330, 128, 1, 0, 1),
(759, 331, 128, 1, 0, 1),
(760, 332, 131, 1, 0, 0),
(761, 332, 94, 0, 1, 0),
(762, 332, 90, 0, 0, 1),
(763, 333, 131, 1, 0, 0),
(764, 333, 94, 0, 1, 0),
(765, 333, 20, 0, 0, 1),
(766, 400, 131, 1, 0, 0),
(767, 400, 94, 0, 1, 0),
(768, 400, 90, 0, 0, 1),
(769, 0, 2, 1, 0, 1),
(770, 0, 132, 1, 0, 0),
(771, 0, 94, 0, 1, 0),
(772, 0, 5, 0, 0, 1),
(773, 337, 132, 1, 0, 0),
(774, 337, 94, 0, 1, 0),
(775, 337, 20, 0, 0, 1),
(776, 338, 132, 1, 0, 0),
(777, 338, 94, 0, 1, 0),
(778, 338, 5, 0, 0, 1),
(779, 339, 132, 1, 0, 0),
(780, 339, 94, 0, 1, 0),
(781, 339, 20, 0, 0, 1),
(782, 340, 131, 1, 0, 0),
(783, 340, 94, 0, 1, 0),
(784, 340, 20, 0, 0, 1),
(785, 341, 131, 1, 0, 0),
(786, 341, 94, 0, 1, 0),
(787, 341, 20, 0, 0, 1),
(788, 342, 131, 1, 0, 0),
(789, 342, 94, 0, 1, 0),
(790, 342, 20, 0, 0, 1),
(791, 343, 131, 1, 0, 0),
(792, 343, 94, 0, 1, 0),
(793, 343, 5, 0, 0, 1),
(794, 344, 132, 1, 0, 0),
(795, 344, 94, 0, 1, 0),
(796, 344, 20, 0, 0, 1),
(797, 345, 132, 1, 0, 0),
(798, 345, 94, 0, 1, 0),
(799, 345, 20, 0, 0, 1),
(800, 346, 131, 1, 0, 0),
(801, 346, 94, 0, 1, 0),
(802, 346, 5, 0, 0, 1),
(803, 347, 131, 1, 0, 0),
(804, 347, 94, 0, 1, 0),
(805, 347, 20, 0, 0, 1),
(806, 348, 131, 1, 0, 0),
(807, 348, 94, 0, 1, 0),
(808, 348, 20, 0, 0, 1),
(809, 349, 131, 1, 0, 0),
(810, 349, 94, 0, 1, 0),
(811, 349, 20, 0, 0, 1),
(812, 350, 131, 1, 0, 0),
(813, 350, 94, 0, 1, 0),
(814, 350, 20, 0, 0, 1),
(815, 351, 131, 1, 0, 0),
(816, 351, 94, 0, 1, 0),
(817, 351, 5, 0, 0, 1),
(818, 352, 131, 1, 0, 0),
(819, 352, 94, 0, 1, 0),
(820, 352, 75, 0, 0, 1),
(821, 353, 131, 1, 0, 0),
(822, 353, 94, 0, 1, 0),
(823, 353, 20, 0, 0, 1),
(824, 354, 131, 1, 0, 0),
(825, 354, 94, 0, 1, 0),
(826, 354, 20, 0, 0, 1),
(827, 355, 131, 1, 0, 0),
(828, 355, 94, 0, 1, 0),
(829, 355, 20, 0, 0, 1),
(830, 356, 131, 1, 0, 0),
(831, 356, 94, 0, 1, 0),
(832, 356, 5, 0, 0, 1),
(833, 357, 131, 1, 0, 0),
(834, 357, 94, 0, 1, 0),
(835, 357, 5, 0, 0, 1),
(836, 0, 131, 1, 0, 0),
(837, 0, 94, 0, 1, 0),
(838, 0, 5, 0, 0, 1),
(839, 359, 131, 1, 0, 0),
(840, 359, 94, 0, 1, 0),
(841, 359, 5, 0, 0, 1),
(842, 360, 131, 1, 0, 0),
(843, 360, 94, 0, 1, 0),
(844, 360, 20, 0, 0, 1),
(845, 0, 131, 1, 0, 0),
(846, 0, 94, 0, 1, 0),
(847, 0, 5, 0, 0, 1),
(848, 362, 131, 1, 0, 0),
(849, 362, 94, 0, 1, 0),
(850, 362, 75, 0, 0, 1),
(851, 363, 131, 1, 0, 0),
(852, 363, 94, 0, 1, 0),
(853, 363, 5, 0, 0, 1),
(854, 0, 131, 1, 0, 0),
(855, 0, 94, 0, 1, 0),
(856, 0, 75, 0, 0, 1),
(857, 365, 131, 1, 0, 0),
(858, 365, 94, 0, 1, 0),
(859, 365, 75, 0, 0, 1),
(860, 366, 131, 1, 0, 0),
(861, 366, 94, 0, 1, 0),
(862, 366, 75, 0, 0, 1),
(863, 367, 131, 1, 0, 0),
(864, 367, 94, 0, 1, 0),
(865, 367, 75, 0, 0, 1),
(866, 368, 131, 1, 0, 0),
(867, 368, 94, 0, 1, 0),
(868, 368, 75, 0, 0, 1),
(869, 369, 131, 1, 0, 0),
(870, 369, 94, 0, 1, 0),
(871, 369, 75, 0, 0, 1),
(872, 370, 131, 1, 0, 0),
(873, 370, 94, 0, 1, 0),
(874, 370, 75, 0, 0, 1),
(875, 371, 131, 1, 0, 0),
(876, 371, 94, 0, 1, 0),
(877, 371, 75, 0, 0, 1),
(878, 372, 131, 1, 0, 0),
(879, 372, 94, 0, 1, 0),
(880, 372, 75, 0, 0, 1),
(881, 373, 131, 1, 0, 0),
(882, 373, 94, 0, 1, 0),
(883, 373, 75, 0, 0, 1),
(884, 374, 131, 1, 0, 0),
(885, 374, 94, 0, 1, 0),
(886, 374, 75, 0, 0, 1),
(887, 375, 131, 1, 0, 0),
(888, 375, 94, 0, 1, 0),
(889, 375, 75, 0, 0, 1),
(890, 376, 131, 1, 0, 0),
(891, 376, 94, 0, 1, 0),
(892, 376, 75, 0, 0, 1),
(893, 377, 131, 1, 0, 0),
(894, 377, 94, 0, 1, 0),
(895, 377, 75, 0, 0, 1),
(896, 378, 131, 1, 0, 0),
(897, 378, 94, 0, 1, 0),
(898, 378, 75, 0, 0, 1),
(899, 0, 131, 1, 0, 0),
(900, 0, 94, 0, 1, 0),
(901, 0, 75, 0, 0, 1),
(902, 380, 131, 1, 0, 0),
(903, 380, 94, 0, 1, 0),
(904, 380, 75, 0, 0, 1),
(905, 381, 131, 1, 0, 0),
(906, 381, 94, 0, 1, 0),
(907, 381, 75, 0, 0, 1),
(908, 382, 131, 1, 0, 0),
(909, 382, 94, 0, 1, 0),
(910, 382, 75, 0, 0, 1),
(911, 383, 131, 1, 0, 0),
(912, 383, 94, 0, 1, 0),
(913, 383, 75, 0, 0, 1),
(914, 384, 134, 1, 0, 0),
(915, 384, 146, 0, 1, 0),
(916, 384, 149, 0, 0, 1),
(917, 385, 134, 1, 0, 0),
(918, 385, 146, 0, 1, 0),
(919, 385, 149, 0, 0, 1),
(920, 386, 134, 1, 0, 0),
(921, 386, 146, 0, 1, 0),
(922, 386, 149, 0, 0, 1),
(923, 387, 134, 1, 0, 0),
(924, 387, 146, 0, 1, 0),
(925, 387, 149, 0, 0, 1),
(926, 388, 134, 1, 0, 0),
(927, 388, 146, 0, 1, 0),
(928, 388, 149, 0, 0, 1),
(929, 389, 134, 1, 0, 0),
(930, 389, 146, 0, 1, 0),
(931, 389, 149, 0, 0, 1),
(932, 390, 151, 1, 0, 0),
(933, 390, 150, 0, 1, 0),
(934, 390, 152, 0, 0, 1),
(935, 0, 151, 1, 0, 0),
(936, 0, 150, 0, 1, 0),
(937, 0, 152, 0, 0, 1),
(938, 392, 151, 1, 0, 0),
(939, 392, 150, 0, 1, 0),
(940, 392, 152, 0, 0, 1),
(941, 393, 151, 1, 0, 0),
(942, 393, 150, 0, 1, 0),
(943, 393, 152, 0, 0, 1),
(944, 394, 131, 1, 0, 0),
(945, 394, 94, 0, 1, 0),
(946, 394, 75, 0, 0, 1),
(947, 395, 131, 1, 0, 0),
(948, 395, 94, 0, 1, 0),
(949, 395, 90, 0, 0, 1),
(950, 396, 131, 1, 0, 0),
(951, 396, 94, 0, 1, 0),
(952, 396, 90, 0, 0, 1),
(953, 397, 131, 1, 0, 0),
(954, 397, 94, 0, 1, 0),
(955, 397, 90, 0, 0, 1),
(956, 398, 131, 1, 0, 0),
(957, 398, 94, 0, 1, 0),
(958, 398, 75, 0, 0, 1),
(959, 399, 131, 1, 0, 0),
(960, 399, 94, 0, 1, 0),
(961, 399, 75, 0, 0, 1),
(962, 400, 134, 1, 0, 0),
(963, 400, 133, 0, 1, 0),
(964, 400, 1, 0, 0, 1),
(965, 401, 135, 1, 1, 0),
(966, 0, 135, 1, 1, 0),
(967, 403, 135, 1, 1, 0),
(968, 404, 136, 1, 0, 0),
(969, 404, 2, 0, 1, 0),
(970, 404, 5, 0, 0, 1),
(971, 405, 138, 1, 0, 0),
(972, 405, 2, 0, 1, 0),
(973, 405, 20, 0, 0, 1),
(974, 406, 135, 1, 1, 0),
(975, 407, 135, 1, 1, 0),
(976, 408, 135, 1, 1, 0),
(977, 409, 135, 1, 1, 0),
(978, 410, 135, 1, 1, 0),
(979, 411, 135, 1, 1, 0),
(980, 412, 135, 1, 1, 0),
(981, 413, 135, 1, 1, 0),
(982, 414, 135, 1, 1, 0),
(983, 415, 135, 1, 1, 0),
(984, 416, 135, 1, 1, 0),
(985, 417, 135, 1, 1, 0),
(986, 418, 135, 1, 0, 0),
(987, 418, 144, 0, 1, 0),
(988, 418, 5, 0, 0, 1),
(989, 419, 135, 1, 0, 0),
(990, 419, 144, 0, 1, 0),
(991, 419, 5, 0, 0, 1),
(992, 420, 135, 1, 0, 0),
(993, 420, 144, 0, 1, 0),
(994, 420, 5, 0, 0, 1),
(995, 0, 135, 1, 0, 0),
(996, 0, 144, 0, 1, 0),
(997, 0, 20, 0, 0, 1),
(998, 422, 135, 1, 1, 0),
(999, 423, 135, 1, 0, 0),
(1000, 423, 144, 0, 1, 0),
(1001, 423, 5, 0, 0, 1),
(1002, 424, 135, 1, 1, 0),
(1003, 0, 139, 1, 1, 0),
(1004, 426, 139, 1, 1, 1),
(1005, 0, 139, 1, 1, 1),
(1006, 428, 139, 1, 1, 0),
(1007, 429, 135, 1, 0, 0),
(1008, 429, 144, 0, 1, 0),
(1009, 429, 20, 0, 0, 1),
(1010, 430, 139, 1, 1, 0),
(1011, 431, 139, 1, 1, 0),
(1012, 0, 139, 1, 1, 0),
(1013, 433, 139, 1, 1, 0),
(1014, 434, 139, 1, 1, 0),
(1015, 435, 137, 1, 0, 0),
(1016, 435, 94, 0, 1, 0),
(1017, 435, 20, 0, 0, 1),
(1018, 436, 137, 1, 0, 0),
(1019, 436, 94, 0, 1, 0),
(1020, 436, 20, 0, 0, 1),
(1021, 437, 137, 1, 0, 0),
(1022, 437, 94, 0, 1, 0),
(1023, 437, 20, 0, 0, 1),
(1024, 438, 134, 1, 0, 0),
(1025, 438, 146, 0, 1, 0),
(1026, 438, 147, 0, 0, 1),
(1027, 439, 134, 1, 0, 1),
(1028, 440, 134, 1, 0, 0),
(1029, 440, 146, 0, 1, 0),
(1030, 440, 20, 0, 0, 1),
(1031, 0, 134, 1, 0, 0),
(1032, 0, 146, 0, 1, 0),
(1033, 0, 20, 0, 0, 1),
(1034, 442, 134, 1, 0, 0),
(1035, 442, 146, 0, 1, 0),
(1036, 442, 148, 0, 0, 1),
(1037, 443, 134, 1, 0, 0),
(1038, 443, 146, 0, 1, 0),
(1039, 443, 147, 0, 0, 1),
(1040, 444, 134, 1, 0, 0),
(1041, 444, 146, 0, 1, 0),
(1042, 444, 149, 0, 0, 1),
(1043, 445, 134, 1, 0, 0),
(1044, 445, 146, 0, 1, 0),
(1045, 445, 20, 0, 0, 1),
(1046, 446, 157, 1, 0, 0),
(1047, 446, 156, 0, 1, 0),
(1048, 446, 158, 0, 0, 1),
(1049, 0, 162, 1, 1, 0),
(1050, 448, 162, 1, 1, 0),
(1051, 449, 162, 1, 1, 0),
(1052, 450, 162, 1, 1, 0),
(1053, 451, 162, 1, 1, 0),
(1054, 452, 162, 1, 1, 0),
(1055, 453, 162, 1, 1, 0),
(1056, 454, 162, 1, 1, 0),
(1057, 455, 162, 1, 1, 0),
(1058, 0, 162, 1, 1, 0),
(1059, 457, 162, 1, 1, 0),
(1060, 458, 162, 1, 0, 0),
(1061, 458, 162, 0, 1, 0),
(1062, 458, 161, 0, 0, 1),
(1063, 0, 162, 1, 0, 0),
(1064, 0, 162, 0, 1, 0),
(1065, 0, 161, 0, 0, 1),
(1066, 460, 162, 1, 1, 0),
(1067, 461, 162, 1, 1, 0),
(1068, 462, 162, 1, 0, 0),
(1069, 462, 162, 0, 1, 0),
(1070, 462, 161, 0, 0, 1),
(1071, 463, 162, 1, 1, 0),
(1072, 464, 162, 1, 1, 0),
(1073, 465, 162, 1, 1, 0),
(1074, 466, 162, 1, 1, 0),
(1075, 467, 162, 1, 1, 0),
(1076, 468, 162, 1, 1, 0),
(1077, 469, 162, 1, 1, 0),
(1078, 470, 162, 1, 1, 0),
(1079, 471, 162, 1, 1, 0),
(1080, 472, 162, 1, 1, 0),
(1081, 473, 162, 1, 1, 0),
(1082, 474, 162, 1, 1, 0),
(1083, 475, 162, 1, 1, 0),
(1084, 476, 162, 1, 1, 0),
(1085, 477, 162, 1, 1, 0),
(1086, 478, 162, 1, 1, 0),
(1087, 479, 162, 1, 1, 0),
(1088, 0, 162, 1, 1, 0),
(1089, 481, 162, 1, 1, 0),
(1090, 482, 162, 1, 1, 0),
(1091, 483, 162, 1, 1, 0),
(1092, 484, 162, 1, 1, 0),
(1093, 485, 162, 1, 1, 1),
(1094, 486, 162, 1, 1, 0),
(1095, 487, 162, 1, 1, 0),
(1096, 0, 162, 1, 1, 0),
(1097, 489, 162, 1, 1, 0),
(1098, 490, 162, 1, 1, 0),
(1099, 491, 162, 1, 1, 0),
(1100, 492, 162, 1, 1, 0),
(1101, 493, 162, 1, 1, 0),
(1102, 494, 162, 1, 1, 0),
(1103, 495, 162, 1, 1, 0),
(1104, 496, 162, 1, 1, 0),
(1105, 0, 162, 1, 1, 0),
(1106, 498, 162, 1, 1, 0),
(1107, 499, 162, 1, 1, 0),
(1108, 500, 162, 1, 1, 0),
(1109, 501, 162, 1, 1, 0),
(1110, 502, 162, 1, 1, 0),
(1111, 503, 162, 1, 1, 0),
(1112, 504, 162, 1, 1, 0),
(1113, 505, 162, 1, 1, 0),
(1114, 506, 162, 1, 1, 0),
(1115, 507, 167, 1, 1, 1),
(1116, 508, 167, 1, 1, 1),
(1117, 0, 168, 0, 1, 1),
(1118, 510, 167, 1, 1, 0),
(1119, 0, 167, 1, 0, 1),
(1120, 512, 167, 1, 1, 1),
(1121, 513, 167, 1, 1, 1),
(1122, 514, 167, 1, 1, 1),
(1123, 0, 167, 1, 1, 1),
(1124, 0, 167, 1, 1, 1),
(1125, 517, 167, 1, 1, 1),
(1126, 518, 167, 1, 1, 1),
(1127, 519, 2, 1, 1, 0),
(1128, 0, 14, 1, 1, 0),
(1129, 521, 14, 1, 1, 0),
(1130, 0, 17, 1, 1, 0),
(1131, 0, 18, 1, 1, 0),
(1132, 524, 169, 1, 1, 0),
(1133, 525, 169, 1, 1, 0),
(1134, 526, 169, 1, 1, 0),
(1135, 527, 169, 1, 1, 0),
(1136, 528, 169, 1, 1, 0),
(1137, 529, 169, 1, 1, 0),
(1138, 0, 169, 1, 1, 0),
(1139, 0, 169, 1, 1, 0),
(1140, 0, 169, 1, 1, 0),
(1141, 0, 169, 1, 1, 0),
(1142, 0, 169, 1, 1, 0),
(1143, 535, 169, 1, 1, 0),
(1144, 536, 169, 1, 1, 0),
(1145, 537, 169, 1, 1, 0),
(1146, 538, 169, 1, 1, 0),
(1147, 0, 169, 1, 1, 0),
(1148, 540, 169, 1, 1, 0),
(1149, 541, 169, 1, 1, 0),
(1150, 0, 169, 1, 1, 0),
(1151, 543, 169, 1, 1, 0),
(1152, 544, 169, 1, 1, 0),
(1153, 545, 169, 1, 1, 0),
(1154, 546, 169, 1, 1, 0),
(1155, 547, 169, 1, 1, 0),
(1156, 0, 169, 1, 1, 0),
(1157, 549, 170, 1, 1, 1),
(1158, 550, 170, 1, 0, 1),
(1159, 551, 170, 1, 1, 1),
(1160, 552, 2, 1, 1, 1),
(1161, 0, 170, 1, 0, 1),
(1162, 554, 170, 1, 1, 1),
(1163, 555, 170, 1, 0, 0),
(1164, 555, 20, 0, 1, 0),
(1165, 555, 1, 0, 0, 1),
(1166, 556, 170, 1, 1, 0),
(1167, 0, 170, 1, 1, 1),
(1168, 558, 170, 1, 1, 1),
(1169, 0, 170, 1, 1, 1),
(1170, 560, 170, 1, 1, 1),
(1171, 561, 170, 1, 1, 1),
(1172, 562, 170, 1, 1, 1),
(1173, 563, 170, 1, 1, 1),
(1174, 564, 170, 1, 1, 1),
(1175, 565, 170, 1, 1, 1),
(1176, 566, 170, 1, 1, 0),
(1177, 567, 170, 1, 1, 0),
(1178, 0, 20, 1, 0, 0),
(1179, 0, 175, 0, 1, 0),
(1180, 0, 1, 0, 0, 1),
(1181, 569, 176, 1, 1, 1),
(1182, 570, 2, 1, 1, 0),
(1183, 571, 2, 1, 1, 0),
(1184, 572, 2, 1, 1, 0),
(1185, 573, 2, 1, 1, 0),
(1186, 574, 178, 1, 0, 0),
(1187, 574, 177, 0, 1, 0),
(1188, 574, 5, 0, 0, 1),
(1189, 575, 2, 1, 1, 1),
(1190, 576, 179, 1, 1, 1),
(1191, 577, 179, 1, 1, 1),
(1192, 578, 243, 1, 0, 0),
(1193, 578, 242, 0, 1, 0),
(1194, 578, 244, 0, 0, 1),
(1195, 579, 246, 1, 0, 1),
(1196, 0, 250, 1, 0, 0),
(1197, 0, 249, 0, 1, 0),
(1198, 0, 251, 0, 0, 1),
(1199, 581, 252, 1, 1, 0),
(1200, 582, 253, 1, 1, 0),
(1201, 583, 179, 1, 1, 1),
(1202, 584, 179, 1, 1, 0),
(1203, 585, 179, 1, 1, 0),
(1204, 586, 180, 1, 1, 1),
(1205, 0, 182, 1, 0, 0),
(1206, 0, 181, 0, 1, 0),
(1207, 0, 1, 0, 0, 1),
(1208, 597, 184, 1, 0, 0),
(1209, 597, 183, 0, 1, 0),
(1210, 597, 185, 0, 0, 1),
(1211, 589, 187, 1, 0, 0),
(1212, 589, 186, 0, 1, 0),
(1213, 589, 223, 0, 0, 1),
(1214, 590, 187, 1, 0, 0),
(1215, 590, 186, 0, 1, 0),
(1216, 590, 223, 0, 0, 1),
(1217, 591, 190, 1, 0, 0),
(1218, 591, 189, 0, 1, 0),
(1219, 591, 20, 0, 0, 1),
(1220, 0, 192, 1, 0, 0),
(1221, 0, 94, 0, 1, 0),
(1222, 0, 192, 0, 0, 1),
(1223, 593, 193, 1, 1, 0),
(1224, 594, 194, 1, 1, 0),
(1225, 595, 195, 1, 1, 0),
(1226, 0, 198, 1, 1, 0),
(1227, 597, 199, 1, 0, 1),
(1228, 598, 176, 1, 1, 1),
(1229, 599, 201, 1, 0, 1),
(1230, 600, 202, 1, 1, 0),
(1231, 601, 203, 1, 1, 0),
(1232, 602, 203, 1, 1, 0),
(1233, 603, 203, 1, 1, 0),
(1234, 604, 203, 1, 1, 0),
(1235, 605, 203, 1, 1, 0),
(1236, 606, 203, 1, 1, 1),
(1237, 607, 204, 1, 1, 0),
(1238, 608, 204, 1, 1, 0),
(1239, 609, 204, 1, 1, 0),
(1240, 610, 204, 1, 1, 0),
(1241, 611, 206, 1, 1, 0),
(1242, 612, 206, 1, 1, 0),
(1243, 613, 206, 1, 1, 0),
(1244, 0, 208, 1, 1, 0),
(1245, 0, 208, 1, 1, 0),
(1246, 616, 209, 1, 0, 0),
(1247, 616, 115, 0, 1, 0),
(1248, 616, 210, 0, 0, 1),
(1249, 0, 209, 1, 0, 0),
(1250, 0, 115, 0, 1, 0),
(1251, 0, 210, 0, 0, 1),
(1252, 618, 209, 1, 0, 0),
(1253, 618, 115, 0, 1, 0),
(1254, 618, 210, 0, 0, 1),
(1255, 619, 212, 1, 0, 0),
(1256, 619, 211, 0, 1, 0),
(1257, 619, 1, 0, 0, 1),
(1258, 620, 214, 1, 0, 0),
(1259, 620, 213, 0, 1, 0),
(1260, 620, 215, 0, 0, 1),
(1261, 0, 217, 1, 1, 1),
(1262, 622, 218, 1, 1, 0),
(1263, 623, 220, 1, 0, 0),
(1264, 623, 6, 0, 1, 0),
(1265, 623, 221, 0, 0, 1),
(1266, 624, 220, 1, 0, 0),
(1267, 624, 6, 0, 1, 0),
(1268, 624, 221, 0, 0, 1),
(1269, 625, 220, 1, 0, 0),
(1270, 625, 6, 0, 1, 0),
(1271, 625, 221, 0, 0, 1),
(1272, 626, 220, 1, 0, 0),
(1273, 626, 6, 0, 1, 0),
(1274, 626, 221, 0, 0, 1),
(1275, 0, 220, 1, 0, 0),
(1276, 0, 6, 0, 1, 0),
(1277, 0, 221, 0, 0, 1),
(1278, 0, 220, 1, 0, 0),
(1279, 0, 6, 0, 1, 0),
(1280, 0, 221, 0, 0, 1),
(1281, 629, 220, 1, 0, 0),
(1282, 629, 6, 0, 1, 0),
(1283, 629, 1, 0, 0, 1),
(1284, 630, 220, 1, 0, 0),
(1285, 630, 6, 0, 1, 0),
(1286, 630, 221, 0, 0, 1),
(1287, 631, 220, 1, 0, 0),
(1288, 631, 6, 0, 1, 0),
(1289, 631, 221, 0, 0, 1),
(1290, 632, 220, 1, 0, 0),
(1291, 632, 6, 0, 1, 0),
(1292, 632, 221, 0, 0, 1),
(1293, 633, 220, 1, 0, 0),
(1294, 633, 6, 0, 1, 0),
(1295, 633, 221, 0, 0, 1),
(1296, 634, 220, 1, 0, 0),
(1297, 634, 6, 0, 1, 0),
(1298, 634, 221, 0, 0, 1),
(1299, 635, 220, 1, 0, 0),
(1300, 635, 6, 0, 1, 0),
(1301, 635, 221, 0, 0, 1),
(1302, 636, 220, 1, 0, 0),
(1303, 636, 6, 0, 1, 0),
(1304, 636, 221, 0, 0, 1),
(1305, 637, 220, 1, 0, 0),
(1306, 637, 6, 0, 1, 0),
(1307, 637, 221, 0, 0, 1),
(1308, 638, 223, 1, 0, 0),
(1309, 638, 222, 0, 1, 0),
(1310, 638, 112, 0, 0, 1),
(1311, 639, 225, 1, 0, 0),
(1312, 639, 224, 0, 1, 0),
(1313, 639, 226, 0, 0, 1),
(1314, 640, 225, 1, 0, 0),
(1315, 640, 189, 0, 1, 0),
(1316, 640, 226, 0, 0, 1),
(1317, 641, 228, 1, 0, 0),
(1318, 641, 227, 0, 1, 0),
(1319, 641, 20, 0, 0, 1),
(1320, 642, 229, 1, 1, 1),
(1321, 643, 231, 1, 0, 1),
(1322, 644, 2, 1, 1, 0),
(1323, 645, 233, 1, 0, 0),
(1324, 645, 232, 0, 1, 0),
(1325, 645, 234, 0, 0, 1),
(1326, 646, 237, 1, 0, 0),
(1327, 646, 235, 0, 1, 0),
(1328, 646, 237, 0, 0, 1),
(1329, 0, 237, 1, 0, 0),
(1330, 0, 235, 0, 1, 0),
(1331, 0, 237, 0, 0, 1),
(1332, 0, 238, 1, 0, 0),
(1333, 0, 91, 0, 1, 0),
(1334, 0, 20, 0, 0, 1),
(1335, 649, 239, 1, 0, 1),
(1336, 650, 20, 1, 1, 0),
(1337, 651, 240, 1, 1, 0),
(1338, 652, 241, 1, 1, 0),
(1339, 654, 255, 0, 1, 0),
(1340, 654, 256, 1, 0, 0),
(1341, 654, 256, 0, 0, 1),
(1342, 655, 255, 0, 1, 0),
(1343, 655, 256, 1, 0, 1),
(1344, 655, 256, 1, 0, 1),
(1345, 656, 255, 0, 1, 0),
(1346, 656, 256, 1, 0, 1),
(1347, 656, 256, 1, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentairealbum`
--

CREATE TABLE IF NOT EXISTS `commentairealbum` (
  `id` int(11) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `note` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentairealbum`
--

INSERT INTO `commentairealbum` (`id`, `commentaire`, `note`, `album_id`, `utilisateur_id`, `created_at`, `updated_at`) VALUES
(1, 'Une valeur sûre !!!', 2, 188, 45, '2014-10-05 18:11:13', '2014-10-05 18:11:13'),
(2, 'Un scénario génial... un univers intriguant', 4, 306, 45, '2014-10-05 18:12:37', '2014-10-05 18:12:37'),
(3, 'Adorable et inoubliable cadeau de mes collègues de la WAF !\n\nTout y est : Un Pierrot, 3 Papy rebelles et indociles.\n\nMerci à l''équipe la plus créative, réactive et... récréative (!?). ;-) ', 5, 655, 43, '2015-05-09 23:46:42', '2015-05-09 23:46:42'),
(4, 'Le 2ème volet offert lui aussi par les Wafistes ! \n\nUne confirmation du 1er et l''envie de découvrir la suite... au prochain pot de départ ? ;-)', 5, 656, 43, '2015-05-09 23:47:48', '2015-05-09 23:47:48');

-- --------------------------------------------------------

--
-- Structure de la table `communaute`
--

CREATE TABLE IF NOT EXISTS `communaute` (
  `id` int(11) NOT NULL,
  `ncommunaute` varchar(25) DEFAULT NULL,
  `devise` varchar(50) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL COMMENT 'id du créateur de la communauté',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `communaute`
--

INSERT INTO `communaute` (`id`, `ncommunaute`, `devise`, `description`, `utilisateur_id`, `created_at`, `updated_at`) VALUES
(9, 'Les pionniers', 'Les vents ne sont favorables qu''à ceux qui savent ', 'La communauté des découvreurs de TROCABD', 45, '2012-04-09 22:32:51', '2012-04-09 22:32:51');

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE IF NOT EXISTS `editeur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `adresse1` varchar(255) DEFAULT NULL,
  `adresse2` varchar(255) DEFAULT NULL,
  `cp` varchar(255) DEFAULT NULL,
  `pays_id` int(11) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `editeur`
--

INSERT INTO `editeur` (`id`, `nom`, `adresse1`, `adresse2`, `cp`, `pays_id`, `photo1`, `photo2`, `site`, `tel`, `ville`, `utilisateur_id`) VALUES
(1, '12bis', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'AEMEGBD', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'AGEFAFORIA', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Album', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Asuka', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Audie', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Aventures et Voyages', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Bachi-Bouzouk', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Bayard Éditions', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'BD-FIL et Payot', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Bonne Presse', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Caraïbéditions', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Casterman', ' ', ' ', ' ', 0, ' ', ' ', ' ', ' ', ' ', NULL),
(14, 'CBBD', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'CBBD & La Poste Belge', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Chevron', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Christian Desbois Éditions', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Conseil général de l''Orne', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Dargaud', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Delcourt', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Des bulles dans l''océan', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Désormeaux', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Drawn and Quarterly', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Dupuis', ' ', ' ', ' ', 0, ' ', ' ', ' ', ' ', ' ', NULL),
(25, 'Editions Carabas', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Editions Dervy', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Editions du Café', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Editions du patrimoine', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Éditions du Signe', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Editions Hors Collection', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Éditions Nocturne', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'Emmanuel Proust Editions', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Fleurus', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Ford', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'France Loisirs', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'Futuropolis', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Glénat', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'Graton éditeur', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Hachette', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Impéria', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'La boîte à bulles', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'La main tendue vaudoise', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'L''association', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Le Lombard', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'Le Square', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'Les Editions Albert René', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'Les éditions Jocelyn Houde', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'Lombard', ' ', ' ', ' ', 0, ' ', ' ', ' ', ' ', ' ', NULL),
(49, 'Lucky Comics', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Lucky Productions', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Magnard', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Mécanique Générale', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Media 1000', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Michel Lagarde', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Milan', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Novedi', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'Panini Comics', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'Panini Editions', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Paquet', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Paul Ricard', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Présence', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Renault Edition', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Saga', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'Semic', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'Soleil Productions', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Tonkam', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Vents d''Ouest', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'Xiao Pan', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'Marsu Productions', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(11) NOT NULL,
  `nom` varchar(60) NOT NULL DEFAULT 'null'
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id`, `nom`) VALUES
(1, 'Adaptation'),
(2, 'Animalier'),
(3, 'Anticipation'),
(4, 'Art-illustration'),
(5, 'Aventure'),
(6, 'Aventure historique'),
(7, 'Biographie'),
(8, 'Comics'),
(9, 'Documentaire'),
(10, 'Érotique'),
(11, 'Esotérique'),
(12, 'Fantastique'),
(13, 'Guerre'),
(14, 'Heroïc Fantasy'),
(15, 'Histoire'),
(16, 'Historique'),
(17, 'Humoristique'),
(18, 'Independant'),
(19, 'Jeunesse'),
(20, 'Man hua'),
(21, 'Manga'),
(22, 'Manga - Shojo'),
(23, 'Métiers'),
(24, 'Polar/Thriller'),
(25, 'Policier'),
(26, 'Revue d''études'),
(27, 'Revue d''études et d''information'),
(28, 'Science-fiction'),
(29, 'Western'),
(30, 'Western humoristique');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `communaute_id` int(11) DEFAULT NULL,
  `membre` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `utilisateur_id`, `communaute_id`, `membre`, `created_at`, `updated_at`) VALUES
(16, 45, 9, 1, '2012-04-09 22:32:51', '2012-04-09 22:32:51'),
(17, 58, 9, 0, '2012-04-09 22:34:40', '2012-04-09 22:34:40'),
(18, 61, 9, 0, '2012-04-09 22:34:44', '2012-04-09 22:34:44'),
(19, 57, 9, 0, '2012-04-09 22:34:45', '2012-04-09 22:34:45'),
(20, 52, 9, 0, '2012-04-11 21:44:58', '2012-04-11 21:44:58'),
(21, 62, 9, 0, '2012-04-11 21:45:00', '2012-04-11 21:45:00'),
(22, 54, 9, 0, '2012-04-11 21:45:02', '2012-04-11 21:45:02'),
(23, 56, 9, 0, '2012-04-11 21:45:03', '2012-04-11 21:45:03'),
(24, 59, 9, 0, '2012-04-11 21:45:06', '2012-04-11 21:45:06'),
(25, 60, 9, 0, '2012-04-11 21:45:10', '2012-04-11 21:45:10'),
(26, 55, 9, 0, '2012-04-11 21:45:12', '2012-04-11 21:45:12'),
(27, 53, 9, 0, '2012-04-11 21:45:14', '2012-04-11 21:45:14');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `commentaire` varchar(255) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `commentaire`, `utilisateur_id`, `created_at`, `updated_at`) VALUES
(13, '<img src="/images/lyonStartup.jpg" style="float:left;" /> www.trocabd.com est éliminé au 2ème tour de <strong>Lyon Startup </strong> : L''aventure se poursuit avec d''autres partenaires !!!\n', 43, '2015-05-10 00:03:20', '2015-05-10 00:03:20'),
(10, '<strong>NOUVEAU !!!!!!!!!!!!</strong><br>\nVous pouvez maintenant ajouter des BD : Ecrivez-nous pour obtenir les habilitations nécessaires : <strong>trocatout@gmail.com</strong>\n<br><br>\nVous pouvez aussi commenter et noter les BD sur chaque fiche !!<br><b', 43, '2014-10-08 21:16:17', '2014-10-08 21:16:17'),
(11, '<img src="/images/lyonStartup.jpg" style="float:left;" /> www.trocabd.com est sélectionné pour le 2ème tour de <strong>Lyon Startup </strong> : L''aventure se poursuit !!!\n', 43, '2014-11-09 10:39:31', '2014-11-09 10:39:31'),
(12, '<img src="/images/lyonStartup.jpg" style="float:left;" /> www.trocabd.com est éliminé au 2ème tour de <strong>Lyon Startup </strong> : L''aventure se poursuit avec d''autres partenaires !!!\n', 43, '2015-02-18 00:19:01', '2015-02-18 00:19:01'),
(14, '<strong>Attention </strong> : Dernières BD ajoutées et commentées. Merci !!!!!!!\n', 43, '2015-05-10 00:08:43', '2015-05-10 00:08:43'),
(15, '<p><strong>Attention </strong> : Derni&egrave;res BD ajout&eacute;es et comment&eacute;es. Merci !!!!!!!</p>', 43, '2015-05-10 00:30:24', '2015-05-10 00:30:24');

-- --------------------------------------------------------

--
-- Structure de la table `offrecible`
--

CREATE TABLE IF NOT EXISTS `offrecible` (
  `id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `utilisateurcible_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offresource`
--

CREATE TABLE IF NOT EXISTS `offresource` (
  `id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `utilisateursource_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL DEFAULT 'null'
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `nom`) VALUES
(0, 'Inconnu'),
(2, 'ALLEMAGNE'),
(3, 'ANGLETERRE'),
(4, 'FRANCE'),
(5, 'Arabie'),
(6, 'Danemark'),
(7, 'Portugal'),
(8, 'Israel'),
(9, 'Hongrie'),
(10, 'Irlande'),
(11, 'Pologne'),
(12, 'Espagne'),
(13, 'Bulgarie'),
(14, 'REPUBLIQUE-TCHEQUE'),
(15, 'BELGIQUE'),
(16, 'SUISSE'),
(17, 'MEXIQUE'),
(18, 'JAPON'),
(19, 'NORVÈGE'),
(20, 'MAROC'),
(21, 'PAYS-BAS'),
(22, 'BENIN'),
(23, 'GABON'),
(24, 'EGYPTE'),
(25, 'CORÉE'),
(26, 'LITUANIE'),
(27, 'CANADA'),
(28, 'SUEDE'),
(29, 'CHINE'),
(30, 'LUXEMBOURG'),
(31, 'IRAN'),
(32, 'RUSSIE'),
(33, 'TUNISIE'),
(34, 'SLOVAQUIE'),
(35, 'VIÊT-NAM'),
(36, 'HAÏTI'),
(37, 'TAIWAN'),
(38, 'CHILI'),
(39, 'ARGENTINE'),
(40, 'AUSTRALIE'),
(41, 'VENEZUELA'),
(42, 'GRECE'),
(43, 'ETATS UNIS'),
(44, 'Italie'),
(45, 'Hollande'),
(46, 'Finlande'),
(47, 'TCHÈCOSLOVAQUIE'),
(48, 'ROUMANIE'),
(49, 'INDE'),
(50, 'TURQUIE'),
(51, 'ISLANDE'),
(52, 'CANTON'),
(53, 'CROATIE');

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

CREATE TABLE IF NOT EXISTS `possede` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `album_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `possede`
--

INSERT INTO `possede` (`id`, `utilisateur_id`, `album_id`, `created_at`, `updated_at`) VALUES
(75, 43, 654, '2015-05-08 19:21:35', '2015-05-08 19:21:35'),
(74, 43, 653, '2015-05-08 19:17:41', '2015-05-08 19:17:41');

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE IF NOT EXISTS `serie` (
  `id` int(11) NOT NULL,
  `histoire` varchar(255) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  `photo1` varchar(255) DEFAULT NULL,
  `photo2` varchar(255) DEFAULT NULL,
  `siteWeb1` varchar(255) DEFAULT NULL,
  `siteWeb2` varchar(255) DEFAULT NULL,
  `utilisateur_id` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `serie`
--

INSERT INTO `serie` (`id`, `histoire`, `nom`, `commentaire`, `photo1`, `photo2`, `siteWeb1`, `siteWeb2`, `utilisateur_id`) VALUES
(1, ' ', 'Butterfly in the air', ' ', ' ', ' ', ' ', ' ', 0),
(2, ' ', 'Boule et Bill -1-', ' ', ' ', ' ', ' ', ' ', 0),
(3, ' ', 'Tanguy et Laverdure', ' ', ' ', ' ', ' ', ' ', 0),
(4, ' ', 'Balade au Bout du monde', ' ', ' ', ' ', ' ', ' ', 0),
(5, ' ', 'Triangle secret (Le)', ' ', ' ', ' ', ' ', ' ', 0),
(6, ' ', 'Triangle secret (Le) - Hertz', ' ', ' ', ' ', ' ', ' ', 0),
(7, ' ', 'Triangle secret (Le) - I.N.R.I', ' ', ' ', ' ', ' ', ' ', 0),
(8, ' ', 'Triangle secret (Le) - Les Gardiens du Sang', ' ', ' ', ' ', ' ', ' ', 0),
(9, ' ', 'Troisième testament (Le)', 'Dieu apparut un jour à Julius de Samarie et lui confia un coffre. Il lui dit : ''''Ce coffre représente tout ce qu''un homme doit connaître''''. Je te le confie. Quitte ta terre et les tiens pour chercher l''endroit le plus secret du monde. Là, sans jamais l''av', 'troisiemetestamentp.jpg', ' ', 'http://julius.glenatbd.com/', ' ', 0),
(10, ' ', 'Troisième testament (Le) - Julius', 'Le Troisième Testament avait révolutionné la bande dessinée historique en associant, pour la première fois, grande aventure et quête ésotérique. Sept ans après, les scénaristes Alex Alice et Xavier Dorison remontent aux sources de la légende, sur les trac', 'troisiemetestamentjuliuplanche_.jpg', ' ', 'http://www.glenatbd.com/bd/le-troisieme-testament-julius-livre-1-9782723464475.htm', ' ', 0),
(11, ' ', 'Tuniques Bleues (Les)', ' ', ' ', ' ', ' ', ' ', 0),
(12, ' ', 'Spirou et Fantasio', 'Un grand classique. Des personnages mythiques, le Marsupilami, du très grand Franquin, surtout à partir du n° 11. La série des Zorglub et QRN sur Bretezlburg sont des grands moments de la BD.', 'SpirouFantasioP.jpg', ' ', 'http://www.bdcouvertes.com/spirou/', ' ', 0),
(13, ' ', 'Michel Vaillant', ' ', ' ', ' ', ' ', ' ', 0),
(14, ' ', 'Passagers du vent (Les)', ' ', ' ', ' ', ' ', ' ', 0),
(15, ' ', 'Titeuf', ' ', ' ', ' ', ' ', ' ', 0),
(16, ' ', '(AUT) Hergé', ' ', ' ', ' ', ' ', ' ', 0),
(17, ' ', '(AUT) Seth', ' ', ' ', ' ', ' ', ' ', 0),
(18, ' ', '(DOC) HOP!', ' ', ' ', ' ', ' ', ' ', 0),
(19, ' ', 'Astérix', ' ', ' ', ' ', ' ', ' ', 0),
(20, ' ', ' Avons-nous les bons pneus ? ', ' ', ' ', ' ', ' ', ' ', 0),
(21, ' ', ' Et patati et patata... ', ' ', ' ', ' ', ' ', ' ', 0),
(22, ' ', ' Invincible ', ' ', ' ', ' ', ' ', ' ', 0),
(23, ' ', ' Makrel  en folie!... (Les)', ' ', ' ', ' ', ' ', ' ', 0),
(24, ' ', ' O  n égale pas zéro', ' ', ' ', ' ', ' ', ' ', 0),
(25, ' ', '$', ' ', ' ', ' ', ' ', ' ', 0),
(26, ' ', '(A)Mère', ' ', ' ', ' ', ' ', ' ', 0),
(27, ' ', 'À 18 ans sous les balles au Vercors', ' ', ' ', ' ', ' ', ' ', 0),
(28, ' ', 'À B.', ' ', ' ', ' ', ' ', ' ', 0),
(29, ' ', 'À la découverte des métiers des industries alimentaire', ' ', ' ', ' ', ' ', ' ', 0),
(30, ' ', 'Affaire Bassière (L )', ' ', ' ', ' ', ' ', ' ', 0),
(31, ' ', 'Affaire se Corse (L )', ' ', ' ', ' ', ' ', ' ', 0),
(32, ' ', 'Afrique de papa (L )', ' ', ' ', ' ', ' ', ' ', 0),
(33, ' ', 'Agatha Christie', ' ', ' ', ' ', ' ', ' ', 0),
(34, ' ', 'Lucky Luke', ' ', ' ', ' ', ' ', ' ', 0),
(35, ' ', 'B comme bricoleur', ' ', ' ', ' ', ' ', ' ', 0),
(36, ' ', 'B stories', ' ', ' ', ' ', ' ', ' ', 0),
(37, ' ', 'Butch Cassidy', ' ', ' ', ' ', ' ', ' ', 0),
(38, ' ', '(DOC) Scarce', ' ', ' ', ' ', ' ', ' ', 0),
(39, ' ', 'À la recherche de la Licorne', ' ', ' ', ' ', ' ', ' ', 0),
(40, ' ', 'Akim-Color', ' ', ' ', ' ', ' ', ' ', 0),
(41, ' ', 'Alvin Norge', ' ', ' ', ' ', ' ', ' ', 0),
(42, ' ', 'BD Chanson', ' ', ' ', ' ', ' ', ' ', 0),
(43, ' ', 'Collection histoires et mystères', ' ', ' ', ' ', ' ', ' ', 0),
(44, ' ', 'Commedia', ' ', ' ', ' ', ' ', ' ', 0),
(45, ' ', 'Damoiselle Gorge', ' ', ' ', ' ', ' ', ' ', 0),
(46, ' ', 'Dernier visiteur de George Sand (Le)', ' ', ' ', ' ', ' ', ' ', 0),
(47, ' ', 'Du côté de chez Poje', ' ', ' ', ' ', ' ', ' ', 0),
(48, ' ', 'E pericoloso sporgersi', ' ', ' ', ' ', ' ', ' ', 0),
(49, ' ', 'Forget-me-not', ' ', ' ', ' ', ' ', ' ', 0),
(50, ' ', 'Garry pacifique', 'Série de 44 numéros parue de juillet 1953 à juin 1968.\r Format 21 x 27 cm.\r Elle conte les exploits du sergent Garry héros de la guerre du Pacifique.\r \r ', 'PlancheS_26122.jpg', ' ', 'http://r.leone.free.fr/', ' ', 0),
(51, ' ', 'George', ' ', ' ', ' ', ' ', ' ', 0),
(52, ' ', 'George Dandin', ' ', ' ', ' ', ' ', ' ', 0),
(53, ' ', 'George Sprott', ' ', ' ', ' ', ' ', ' ', 0),
(54, ' ', 'Georges & moi', ' ', ' ', ' ', ' ', ' ', 0),
(55, ' ', 'Georges Caplan vous parle...', ' ', ' ', ' ', ' ', ' ', 0),
(56, ' ', 'Georges et Louis romanciers', ' ', ' ', ' ', ' ', ' ', 0),
(57, ' ', 'Georges Frog', ' ', ' ', ' ', ' ', ' ', 0),
(58, ' ', 'Gil et Georges par Wasterlain (Les aventures de...)', ' ', ' ', ' ', ' ', ' ', 0),
(59, ' ', 'Hélène Georges', ' ', ' ', ' ', ' ', ' ', 0),
(60, ' ', 'Phil Traère', ' ', ' ', ' ', ' ', ' ', 0),
(61, ' ', 'Henri Georges Midi (Les aventures d )', ' ', ' ', ' ', ' ', ' ', 0),
(62, ' ', 'Hikaru no go', ' ', ' ', ' ', ' ', ' ', 0),
(63, ' ', 'Inoxydables (Les)', ' ', ' ', ' ', ' ', ' ', 0),
(64, ' ', 'Java des Gaspards (La)', ' ', ' ', ' ', ' ', ' ', 0),
(65, ' ', 'Legion Saint-Georges (La)', ' ', ' ', ' ', ' ', ' ', 0),
(66, ' ', 'Maîtres de l orge (Les)', ' ', ' ', ' ', ' ', ' ', 0),
(67, ' ', 'Minettos Desperados', ' ', ' ', ' ', ' ', ' ', 0),
(68, ' ', 'Mister George', ' ', ' ', ' ', ' ', ' ', 0),
(69, ' ', 'Morgenrot', ' ', ' ', ' ', ' ', ' ', 0),
(70, ' ', 'Oncle Picsou', ' ', ' ', ' ', ' ', ' ', 0),
(71, ' ', 'Orge l Ogre', ' ', ' ', ' ', ' ', ' ', 0),
(72, ' ', 'Pistes sauvages', ' ', ' ', ' ', ' ', ' ', 0),
(73, ' ', 'Punisher (Max Comics)', ' ', ' ', ' ', ' ', ' ', 0),
(74, ' ', 'Rémi Forget (une aventure de)', ' ', ' ', ' ', ' ', ' ', 0),
(75, ' ', 'Ric Hochet', ' ', ' ', ' ', ' ', ' ', 0),
(76, ' ', 'Songe', ' ', ' ', ' ', ' ', ' ', 0),
(77, ' ', 'Tintin - Pastiches, parodies & pirates', ' ', ' ', ' ', ' ', ' ', 0),
(78, ' ', 'Une vie de chien', ' ', ' ', ' ', ' ', ' ', 0),
(79, ' ', 'Vie compliquée de Georges le tueur (La)', ' ', ' ', ' ', ' ', ' ', 0),
(80, ' ', 'Warhammer', ' ', ' ', ' ', ' ', ' ', 0),
(81, ' ', 'World of Warcraft', ' ', ' ', ' ', ' ', ' ', 0),
(82, '', 'Les vieux fourneaux', '', '', '', NULL, NULL, 43);

-- --------------------------------------------------------

--
-- Structure de la table `sf_faq_category`
--

CREATE TABLE IF NOT EXISTS `sf_faq_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `activate` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_faq_category`
--

INSERT INTO `sf_faq_category` (`id`, `name`, `description`, `activate`, `created_at`) VALUES
(3, 'Inscription', NULL, 1, '2011-07-13 23:12:00'),
(4, 'Contribution', NULL, 1, '2011-07-13 23:12:00');

-- --------------------------------------------------------

--
-- Structure de la table `sf_faq_faq`
--

CREATE TABLE IF NOT EXISTS `sf_faq_faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answer` text,
  `category_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_faq_faq`
--

INSERT INTO `sf_faq_faq` (`id`, `question`, `answer`, `category_id`, `created_at`) VALUES
(4, 'Est-ce que je suis obligé de m''inscrire ?', 'NON !!! Vous pouvez visiter , rechercher des BD, consulter les informations sur celles-ci.\r\n\r\nEn revanch,e pour troquer, il faut s''inscrire !', 3, '2011-07-13 23:10:00'),
(5, 'Combien coûte l''inscription ?', 'Le site est gratuit.', 3, '2011-07-13 23:10:00'),
(6, 'Est-ce que je peux contribuer au fonctionnement du site ?', 'OUI !!!! vous êtes d''ailleurs le bienvenu surtout si vous aimez le design.... \r\n\r\nPour prendre contact avec nous sélectionnez le lien "Ecrivez-nous" dans le menu.', 4, '2011-07-13 23:10:00');

-- --------------------------------------------------------

--
-- Structure de la table `sf_guard_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_guard_group`
--

INSERT INTO `sf_guard_group` (`id`, `name`, `description`) VALUES
(1, 'admin', NULL),
(2, 'troqueur', 'Groupe des troqueurs'),
(3, 'manager', 'gestionnaire de catalogue');

-- --------------------------------------------------------

--
-- Structure de la table `sf_guard_group_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_group_permission` (
  `group_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_guard_group_permission`
--

INSERT INTO `sf_guard_group_permission` (`group_id`, `permission_id`) VALUES
(1, 1),
(3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `sf_guard_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_permission` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_guard_permission`
--

INSERT INTO `sf_guard_permission` (`id`, `name`, `description`) VALUES
(1, 'admin', NULL),
(2, 'troqueur', 'Permissions pour les troqueurs'),
(3, 'manager', 'gestionnaire de catalogue');

-- --------------------------------------------------------

--
-- Structure de la table `sf_guard_remember_key`
--

CREATE TABLE IF NOT EXISTS `sf_guard_remember_key` (
  `user_id` int(11) NOT NULL,
  `remember_key` varchar(32) DEFAULT NULL,
  `ip_address` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_guard_remember_key`
--

INSERT INTO `sf_guard_remember_key` (`user_id`, `remember_key`, `ip_address`, `created_at`) VALUES
(43, 'bf9de162e7590f64391d38e843a006de', '89.156.44.165', '2016-08-13 22:22:03');

-- --------------------------------------------------------

--
-- Structure de la table `sf_guard_user`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `algorithm` varchar(128) NOT NULL DEFAULT 'sha1',
  `salt` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `is_super_admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_guard_user`
--

INSERT INTO `sf_guard_user` (`id`, `username`, `algorithm`, `salt`, `password`, `created_at`, `last_login`, `is_active`, `is_super_admin`) VALUES
(38, 'steffle', 'sha1', '67aa6afb8215e4890d20733befe8f788', '22502d5841bbac141f7c5737f4064633b20b8bc3', '2014-12-09 08:37:08', '2014-12-09 08:37:08', 1, 0),
(2, 'loginessaibis', 'sha1', 'b1d9b4de8e920f535f9b532439d71595', 'aa3ce2dc83b2e99fb66f4d247c04ac52ac77a561', '2013-06-09 10:59:13', NULL, 1, 0),
(3, 'troc3', 'sha1', '4f56a22c3751dd0621e99f0207e4251c', '8e9844d003914faa66a72b9bc9647ed8cd758a52', '2013-06-09 10:59:13', '2013-06-19 11:45:10', 1, 0),
(4, 'loginessai', 'sha1', 'bb12e99e6429205e63fbec76f664b56d', '37f88b13df0441e8170d61b96254d3d5c25cead0', '2013-06-09 10:59:13', NULL, 1, 0),
(5, 'troc2', 'sha1', '9f69349925e3b5653604f60c8ded84df', '82ca56da7bbab4db18d745223352922716ce7381', '2013-06-09 10:59:13', '2014-10-05 18:05:01', 1, 0),
(6, 'trocautre', 'sha1', 'e0135e26de256d3902971a6f532f1a92', '385904fdb9c0956b6e5c32833f6ca32ee86db707', '2013-06-09 10:59:13', NULL, 1, 0),
(7, 'trocatout', 'sha1', 'b1fb212b2539e850aba6a07aac854fa4', 'd741a6fe559adad3219dec5fcac9ef8908c3a0e4', '2013-06-09 10:59:13', '2014-09-14 21:16:08', 1, 0),
(8, 'trocadmin', 'sha1', '1edbfdc39f7e7142c38fb8086cd7e5cd', '41e6bd1474899c168147e19bbd299b03b3004884', '2013-06-09 10:59:13', '2015-05-10 00:30:11', 1, 0),
(9, 'trocessai', 'sha1', 'b09ebfc61e8833a15b4965416709061e', '6323bb1a2eebb8fd0cd2fd038b4e8b67aa5adce6', '2013-06-09 10:59:13', '2015-05-09 10:24:11', 1, 0),
(10, 'erick', 'sha1', 'd3282ae22a6249c4b89633c704d1d7a5', 'cec0ed4f7c3f4ceb1754636374606686e34cace6', '2013-06-09 10:59:13', NULL, 1, 0),
(11, 'bouh23', 'sha1', 'aeeec2cf0a1ce299c534e6385a0bab1f', '602e21d0a484957a221b2794b2c59b24906c8fb4', '2013-06-09 10:59:13', NULL, 1, 0),
(12, 'Alice', 'sha1', '72ef8397daa8eb656c1b796d912b7373', '8c7cd57c42a4c6772bef866a4f836f8facbb3f22', '2013-06-09 10:59:13', NULL, 1, 0),
(13, 'clovis25160', 'sha1', 'dfa714ab09cc9610711ce84f6e5bfc34', '582ac493cbd97d2cefa2b56aa6fb4917ff6e67da', '2013-06-09 10:59:13', NULL, 1, 0),
(14, 'Biscotte', 'sha1', 'f0323c728d4c47e83414d17e5d65f40c', '0bdafe05482ac416278f998488453997646c91de', '2013-06-09 10:59:13', NULL, 1, 0),
(15, 'Grosplif', 'sha1', 'e2b35c2139f080396e78cfdcfd266835', '2d3ead2ea5eb33f97e93da0ca1484178ab7dd87f', '2013-06-09 10:59:13', NULL, 1, 0),
(16, 'belj', 'sha1', '93c73bbe9292548ce2910cff1176699f', '4199a19d04f8868acf5f580108b9208d8a72f815', '2013-06-09 10:59:13', NULL, 1, 0),
(17, 'dragonball', 'sha1', '30fef2c1805764c30163d0b7a4bf9757', '10489fafd727f6d56fb2afbd74a0fa66a3f624ba', '2013-06-09 10:59:13', NULL, 1, 0),
(18, 'dpires', 'sha1', '13fa503fc4d51e488e3b40835de924ab', 'e19f5a3e6490bbbe7c0639659fd5a40aec931e8e', '2013-06-09 10:59:13', NULL, 1, 0),
(19, 'Gorkh', 'sha1', '5327d7689b826bab90a17ab82f0d5cdb', '7497bb16aab2cd6c03a26e645a96ceb8ac30dee9', '2013-06-09 10:59:13', NULL, 1, 0),
(20, 'tnntwister', 'sha1', '57da3243d0e9ad52498f967883827917', '6e4cf59603f9f2c7fe7a7a880f30452df7f8ac14', '2013-06-09 10:59:14', NULL, 1, 0),
(21, 'aveyron', 'sha1', '0a24d2b2d45d4c935086108c6471f017', 'b5903061597b515743a7ee6170004b06bbf82b9c', '2013-06-09 10:59:14', NULL, 1, 0),
(22, 'Mindkiller', 'sha1', 'ecd711316568795398fa97dab47b1f4c', '0b5e1188c823ed94beb0ce533d966a668e941edc', '2013-06-09 10:59:14', NULL, 1, 0),
(23, 'romain.da.nasci', 'sha1', 'a822188ab1a55dca8532a3bd959c3bf4', '723d283e1b9a8b6516c902fd1ac39e0a58599aad', '2013-06-09 10:59:14', NULL, 1, 0),
(24, 'freismuth', 'sha1', '1e8b93769951cfd471b99563d15f617f', '40ed9feef4731ba491cde859c2a6802cb13ee4e9', '2013-06-09 10:59:14', NULL, 1, 0),
(25, 'autressai', 'sha1', '6c50744a5aa73c8a19245933288cd522', '9fd0bc8b777d4e23bebaa6ef6d269afd0179d322', '2013-06-09 10:59:14', '2013-07-03 20:56:11', 1, 0),
(26, 'Antoine', 'sha1', 'abff57fb772c3b844dccbd9cb3d441f1', '5f86ed832569a4bef0890b7695d7670a2947e390', '2013-06-09 10:59:14', NULL, 1, 0),
(27, 'derfel', 'sha1', 'df36e54e9fca18fa44a527482bd0a825', '7d4933918d6530f9787ae9d7f95f0da4bd49c200', '2013-06-09 10:59:14', NULL, 1, 0),
(28, 'fcarrega', 'sha1', 'd57df8cbad770b8474dd09004ed8db52', '3026b4dd2da8ab6bc541b79dc0f9900781da0d1a', '2013-06-09 10:59:14', NULL, 1, 0),
(29, 'borgesjere', 'sha1', '07ef20a4c59dcb135c5fac5e79421160', '6e1a048ee5734a95cd37ea2ca588d013f9e4a974', '2013-06-09 10:59:14', NULL, 1, 0),
(30, 'triggy', 'sha1', 'c6c5c1fd5143fc485f72d63c576c1d95', 'acb07e8c7cca1126e3cf041ad5f723cc6abb4ba8', '2013-06-09 10:59:14', NULL, 1, 0),
(31, 'darthmass', 'sha1', '674eb30d81fe2cc2f467b3b519c98dba', '6e37db9ce6176512f2edb07bdb53a820213e554d', '2013-06-09 10:59:14', NULL, 1, 0),
(32, 'GCAD', 'sha1', '4eb4313de3626b41df27fbb99f48e482', '0e42f13dcff6e96e8baf63de45fc6a561dcd1c27', '2013-06-09 10:59:14', '2013-07-26 21:43:43', 1, 0),
(33, '', 'sha1', '', '', '2013-06-27 06:44:38', NULL, 1, 0),
(34, 'gastine', 'sha1', '7489aef4a8a2e7c59933be14d50ae654', '2203c3cb6337fc82d3b045514011fa553c4a50aa', '2013-11-23 16:33:41', '2013-11-23 16:33:41', 1, 0),
(36, 'xenopus', 'sha1', '004d1180e8cd138ffd6d63577e712258', '8dabd6db089e05634f38abb02352442d95baed5e', '2014-03-21 13:34:49', '2014-03-21 13:34:50', 1, 0),
(37, 'causeret', 'sha1', 'eb9db2f140e965fe7d30b667ca1b2f38', '0da2fbc1f55880ecf360a4c84e0cfc810ff5adf0', '2014-06-29 18:35:02', '2014-06-29 18:35:03', 1, 0),
(39, 'trocabd2014', 'sha1', '13f83ffec29e99c38845fbc992ab89db', '77694729a61bbe355ed31a538c2d995a95278766', '2014-12-11 21:11:49', '2014-12-11 21:11:49', 1, 0),
(40, 'rocdazur', 'sha1', '3caa0593eae9ad53d40d6fb243592f5a', '058848b36c5e5f1d8311ba808de44661cd4edd85', '2014-12-31 11:18:46', '2015-02-07 17:45:00', 1, 0),
(41, 'Kewee', 'sha1', '5d7fff8a7d588206bad3868a2147a083', '8e2c71770c8435198e355d1d83decd700b7a88ba', '2015-01-23 00:07:48', '2015-01-23 01:30:56', 1, 0),
(42, 'lionlibellule', 'sha1', 'd4eabd3f357fd0c98a428c46c041f3c5', '18fffadb80c766b6c0d456e0989372d337f22e5f', '2015-10-28 23:01:55', '2015-11-21 20:44:52', 1, 0),
(43, 'discozek', 'sha1', '0e4caae236ddf45b852d02743aa94c63', 'b9ee8b8a7477294dab82db535b474b1c82307fb8', '2016-08-13 22:19:50', '2016-08-13 22:22:51', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `sf_guard_user_group`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_guard_user_group`
--

INSERT INTO `sf_guard_user_group` (`user_id`, `group_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 1),
(8, 3),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sf_guard_user_permission`
--

CREATE TABLE IF NOT EXISTS `sf_guard_user_permission` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_guard_user_permission`
--

INSERT INTO `sf_guard_user_permission` (`user_id`, `permission_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 1),
(8, 3),
(9, 2),
(10, 2),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sf_simple_cms_page`
--

CREATE TABLE IF NOT EXISTS `sf_simple_cms_page` (
  `id` int(11) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `tree_left` int(11) NOT NULL,
  `tree_right` int(11) NOT NULL,
  `tree_parent` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `template` varchar(100) DEFAULT NULL,
  `is_published` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_simple_cms_page`
--

INSERT INTO `sf_simple_cms_page` (`id`, `slug`, `tree_left`, `tree_right`, `tree_parent`, `topic_id`, `template`, `is_published`, `created_at`, `updated_at`) VALUES
(1, 'home', 1, 14, NULL, NULL, 'home', 1, '2013-02-27 17:01:31', '2013-03-01 18:04:22'),
(2, 'about-slots', 4, 9, 1, NULL, 'simplePage', 1, '2013-02-27 17:01:31', '2013-02-27 17:01:32'),
(3, 'about-slots/images', 5, 6, 2, NULL, 'simplePage', 1, '2013-02-27 17:01:31', '2013-02-27 17:01:32'),
(4, 'about-slots/components', 7, 8, 2, NULL, 'simplePage', 1, '2013-02-27 17:01:31', '2013-02-27 17:01:32'),
(5, 'faq', 10, 11, 1, NULL, 'simplePage', 1, '2013-02-27 17:01:31', '2013-03-03 18:39:18'),
(6, 'lorem', 12, 13, 1, NULL, 'simplePage', 1, '2013-02-27 17:01:31', '2013-02-27 17:01:32'),
(7, 'news', 2, 3, 1, NULL, 'simplePage', 1, '2013-03-01 18:04:22', '2013-03-06 23:27:49');

-- --------------------------------------------------------

--
-- Structure de la table `sf_simple_cms_slot`
--

CREATE TABLE IF NOT EXISTS `sf_simple_cms_slot` (
  `page_id` int(11) NOT NULL,
  `culture` varchar(7) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'Text',
  `value` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_simple_cms_slot`
--

INSERT INTO `sf_simple_cms_slot` (`page_id`, `culture`, `name`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'en', 'title', 'Text', 'Welcome to sfSimpleCMS', '2013-02-27 17:01:31', '2013-02-27 17:01:31'),
(1, 'en', 'slot1', 'RichText', 'You have successfully installed the sfSimpleCMS plugin.', '2013-02-27 17:01:31', '2013-02-27 17:01:31'),
(1, 'en', 'slot2', 'RichText', '<p>You can now Start using the Content Management features of this plugin.</p>\n<p>Start by navigating across pages to discover the way the page controller works, and follow the instructions given on every page. The test data is given as an inline help.</p>\n<p>If you encounter a problem or a bug, please report it to the symfony forum, under the "Plugins" category, at the following address: <a href="http://www.symfony-project.com/forum/index.php/f/12/">http://www.symfony-project.com/forum/index.php/f/12/</a>.</p>\n<p>Feel free to edit/erase any of the default pages, and have fun!.</p>', '2013-02-27 17:01:31', '2013-02-27 17:01:31'),
(1, 'en', 'slot3', 'Modular', 'test1:\n  component: sfSimpleCMS/latestPages', '2013-02-27 17:01:31', '2013-02-27 17:01:31'),
(2, 'en', 'title', 'Text', 'About Slots', '2013-02-27 17:01:31', '2013-02-27 17:01:31'),
(2, 'en', 'slot1', 'Text', 'In sfSimpleCMS, pages are made of slots. According to the template you choose, there can be various <i>types</i> and <i>number</i> of slots.', '2013-02-27 17:01:31', '2013-02-27 17:01:31'),
(2, 'en', 'slot2', 'RichText', '<p>This is the main slot of the page. As it is defined as a Rich Text slot, the HTML that it contains is <i>rendered</i> in the frontend. The previous slot (the article overview) is defined as a SimpleText, so the HTML code it contains is escaped.</p>\n<p>Each slot is an <b>editable part of the page</b>. To edit a slot, first switch to edit mode by clicking the "edit" link in the "Edition Tools" floating box. The page then reloads, and slots now appear in a blue frame. Double-clicking a slot shows a form to edit its content. According to the type of the slot, the form does not show the same controls. A SimpleText slot, for instance, is edited in a simple textarea, while a RichText slot is edited in a WYSIWYG JavaScript editor.</p>\n<p>After changing the content of a slot, just clieck on the "update" button. The slot will return to preview, and the content will be updated in the backend without reloading the page - the content is saved.</p>\n<p>You can choose to change a slot type, for instance to switch from SimpleText to RichText. To do so, you need to be in edit mode and to edit a slot. At the end of the form, before the validation button, you will find a "Type" drop-down. Select the new type for the slot, validate the form, and you''re done.</p>\n<p>Here you will find details about some special slot types:</p>\n<ul>\n  <li><a class="cms_page_navigation" href="about-slots/images">Image slots</a></li>\r\n  <li><a class="cms_page_navigation" href="about-slots/components">Component slots</a></li>\r\n</ul>', '2013-02-27 17:01:31', '2013-02-27 17:01:31'),
(2, 'en', 'slot3', 'Php', 'This slot is a bit particular: it results from the execution of some PHP code. Double-click it in edit mode to see the source: you will see that it is a slot of type PHP.<br/>\n<div align="center">Today''s date is <?php echo date(''Y-m-d'') ?>.</div>', '2013-02-27 17:01:31', '2013-02-27 17:01:31'),
(2, 'en', 'slot4', 'RichText', '<p>The <i>Related Content</i> and the <i>References</i> headers above are not editable, because they are part of the template. A template is just an arrangement of slots with some HTML code in it. A template defines both a type of content, and a specific layout.</p>\n<p>You can modify existing templates or add new ones. For instance, to change this page''s template, switch to ''edit'' mode and, in the "Page properties" pane, choose another template in the "Template" dropdown list.</p>', '2013-02-27 17:01:31', '2013-02-27 17:01:31'),
(3, 'en', 'title', 'Text', 'About Image Slots', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(3, 'en', 'slot1', 'Text', 'A special type of slot allows you to insert an image instead of text.', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(3, 'en', 'slot2', 'RichText', '<p>The next slot contains an image because it is of type "Image". Edit it to see how to change the image.</p>\n<p>You can easily extend the sfSimpleCMSPlugin to add new slot types. By writing custom slot types, you will better define the components of a content type. For instance, if you want to display recipes, you probably an <i>Ingredients</i> slot type, as well as some searchable slots like <i>Difficulty</i> and <i>Type</i>, which should be enumerables defined in their own slot type.</p>', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(3, 'en', 'slot3', 'Image', 'src: /sfSimpleCMSPlugin/images/coffee_machine.png', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(4, 'en', 'title', 'Text', 'About Modular Slots', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(4, 'en', 'slot1', 'Text', 'If your application offers components, they can be used to fill the content of a slot.', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(4, 'en', 'slot2', 'RichText', '<p>The next slot results from the execution of a component because it is of type "List of component". Edit it to see how to change the image.</p>\n<p>By using components inside pages, you can add dynamically generated data to pages that would otherwise need manual modification. This is very useful to display lists of pages or comments, user ratings, feeds from other sources, etc. As you can call any component, even with parameters, there is <b>no limit</b> to the type of data that you can insert in a CMS page. Even data taken from the database, a web service or a third-party website can be integrated that way.</p>', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(4, 'en', 'slot3', 'Modular', 'test1:\n  component: sfSimpleCMS/latestPages', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(5, 'en', 'title', 'Text', 'Frequently Asked Questions', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(5, 'en', 'slot1', 'RichText', '<ul>\n  <li><a href="#faq1">Can I change the layout/template/slot type/whatever?</a></li>\r\n  <li><a href="#faq2">When will you add [my favorite feature]?</a></li>\r\n</ul>', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(5, 'en', 'slot2', 'RichText', '<h3 name="faq1">Can I change the layout/template/slot type/whatever?</h3>\n<p>You can change everything, either programatically or by using the onine interface. The elements that concern the application structure (e.g. templates, slot types) are to be modified programatically. This makes their deployment easier (no need to synchronize databases, just files). Other elements (like page titles) can be edited online, directly in production.</p>\n<h3 name="faq2">When will you add [my favorite feature]?</h3>\n<p>Probably not that soon. The sfSimpleCMSPlugin is designed to be simple, fast and easy to adapt. Most of the complicated stuff that full-featured CMS engines offer can already be done within sfSimpleCMS one way or another.</p>', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(6, 'en', 'title', 'Text', 'Lorem Ipsum', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(6, 'en', 'slot1', 'Text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(6, 'en', 'slot2', 'Text', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\n\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\n\nExcepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\n\nDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(6, 'en', 'slot3', 'RichText', '<ul>\n  <li><a href="#" href="#">dolor sit amet</a></li>\r\n  <li><a href="#" href="#">consectetur adipisicing elit</a></li>\r\n  <li><a href="#" href="#">sed do eiusmod tempor </a></li>\r\n  <li><a href="#" href="#">incididunt ut labore et dolore magna aliqua</a></li>\r\n</ul>', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(6, 'en', 'slot4', 'RichText', 'Ut enim, <i>ad minim veniam</i>, quis nostrud exercitation.', '2013-02-27 17:01:32', '2013-02-27 17:01:32'),
(7, 'en', 'title', 'RichText', 'News du 03/03/2013', '2013-03-03 18:29:40', '2013-03-03 18:29:40'),
(7, 'en', 'slot1', 'RichText', '<p>Int&eacute;gration d''un CMS pour publier des informations sur le site.</p>', '2013-03-03 18:30:29', '2013-03-06 23:24:58'),
(7, 'en', 'slot2', 'RichText', 'Vous trouverez dans cette rubriques les nouvelles concernant Trocabd.com', '2013-03-03 18:31:15', '2013-03-03 18:31:15'),
(7, 'en', 'slot3', 'RichText', '', '2013-03-06 23:27:49', '2013-03-06 23:27:49');

-- --------------------------------------------------------

--
-- Structure de la table `sf_simple_forum_category`
--

CREATE TABLE IF NOT EXISTS `sf_simple_forum_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `stripped_name` varchar(255) DEFAULT NULL,
  `description` text,
  `rank` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_simple_forum_category`
--

INSERT INTO `sf_simple_forum_category` (`id`, `name`, `stripped_name`, `description`, `rank`, `created_at`) VALUES
(5, 'Concept', NULL, 'Discussion autour du concept du site', 1, '2011-01-02 15:21:23'),
(7, 'Fonctionnalités', NULL, 'Discussions autour des fonctionnalités qui pourraient être apportées au site', 0, '2011-07-13 23:28:05'),
(8, 'Graphisme', NULL, 'Faites des propositions sur le graphisme du site', 0, '2011-07-13 23:28:32'),
(9, 'Base de données', NULL, 'Faites des propositions sur la gestion des BD affichées : comment enrichir la base de données ?', 0, '2011-07-13 23:29:07');

-- --------------------------------------------------------

--
-- Structure de la table `sf_simple_forum_forum`
--

CREATE TABLE IF NOT EXISTS `sf_simple_forum_forum` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `rank` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `stripped_name` varchar(255) DEFAULT NULL,
  `latest_post_id` int(11) DEFAULT NULL,
  `nb_posts` int(11) DEFAULT NULL,
  `nb_topics` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sf_simple_forum_forum`
--

INSERT INTO `sf_simple_forum_forum` (`id`, `name`, `description`, `rank`, `category_id`, `created_at`, `updated_at`, `stripped_name`, `latest_post_id`, `nb_posts`, `nb_topics`) VALUES
(13, 'Le concept du troc à BD', 'Donnez ici votre avis sur le concept proposé par ce site.... ', 0, 5, '2011-07-13 23:23:12', '2011-07-13 23:41:57', 'concept', NULL, NULL, NULL),
(14, 'Anomalies', 'Signalez les anomalies rencontrees', 6, 7, '2011-07-13 23:35:52', '2011-07-13 23:35:52', 'Les anomalies', NULL, NULL, NULL),
(15, 'Fournisseur de base de données', 'Faites vos propositions pour alimenter la base de données', 0, 9, '2011-07-13 23:37:27', '2011-07-13 23:42:53', 'Source de donnees', NULL, NULL, NULL),
(16, 'Template Symfony', 'Frabriquez, proposez votre aide pour améliorer le graphisme', 0, 8, '2011-07-13 23:38:24', '2011-07-13 23:38:24', 'Template', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sf_simple_forum_post`
--

CREATE TABLE IF NOT EXISTS `sf_simple_forum_post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `topic_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `forum_id` int(11) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sf_simple_forum_topic`
--

CREATE TABLE IF NOT EXISTS `sf_simple_forum_topic` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `is_sticked` int(11) DEFAULT '0',
  `is_locked` int(11) DEFAULT '0',
  `forum_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `latest_post_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `stripped_title` varchar(255) DEFAULT NULL,
  `nb_posts` int(11) DEFAULT '0',
  `nb_views` int(11) DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sf_simple_forum_topic_view`
--

CREATE TABLE IF NOT EXISTS `sf_simple_forum_topic_view` (
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `troc`
--

CREATE TABLE IF NOT EXISTS `troc` (
  `id` int(11) NOT NULL,
  `utilisateursource_id` int(11) DEFAULT NULL,
  `utilisateurcible_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `etat_id` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `login` varchar(15) DEFAULT NULL,
  `mdp` varchar(10) DEFAULT NULL,
  `rue2` varchar(50) DEFAULT NULL,
  `rue3` varchar(50) DEFAULT NULL,
  `rue4` varchar(50) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `lon` decimal(9,7) DEFAULT NULL,
  `lat` decimal(9,7) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `question` varchar(50) DEFAULT NULL,
  `reponse` varchar(20) DEFAULT NULL,
  `nbVisiteur` double DEFAULT NULL,
  `nbUtilisateur` double DEFAULT NULL,
  `derniereConnexion` datetime DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `login`, `mdp`, `rue2`, `rue3`, `rue4`, `cp`, `ville`, `lon`, `lat`, `email`, `question`, `reponse`, `nbVisiteur`, `nbUtilisateur`, `derniereConnexion`, `userid`, `created_at`, `updated_at`) VALUES
(51, 'autre essai', 'mon prénom', 'loginessaibis', 'loginessai', 'mon adresse', '', '', '34000', 'Montpellier ', 3.9011747, 43.6047275, 'essai@yahoo.fr', NULL, NULL, 0, 0, NULL, 2, '2011-09-14 23:44:09', '2013-06-09 10:59:13'),
(49, 'troc3', 'troc3', 'troc3', '251066', 'chez moi', '', '', '08000', 'Charleville-Mézières', 4.7260960, 49.7620850, 'trocatout@gmail.com', NULL, NULL, 0, 0, '2013-06-19 11:45:10', 3, '2011-07-29 22:43:45', '2013-06-19 11:45:10'),
(50, 'essai', 'prénom ', 'loginessai', 'loginessai', 'mon adresse', '', '', '68000', 'Colmar', 7.3585120, 48.0793589, 'essai@yahoo.fr', NULL, NULL, 0, 0, NULL, 4, '2011-09-14 23:42:25', '2013-06-09 10:59:13'),
(48, 'troc2', 'troc2', 'troc2', '251066', 'chez moi', '', '', '07000', 'Privas', 4.5990390, 44.7352690, 'trocatout@gmail.com', NULL, NULL, 0, 0, '2014-10-05 18:05:01', 5, '2011-07-29 22:36:43', '2014-10-05 18:05:01'),
(47, 'trocautre', 'trocautre', 'trocautre', 'trocautre', 'chez moi', '', '', '01250', 'Bohas-Meyriat-Rignat', 5.3844310, 46.1379720, 'trocatout@gmail.com', NULL, NULL, 0, 0, NULL, 6, '2011-07-29 22:29:00', '2013-06-09 10:59:13'),
(46, 'trocatout', 'trocatout', 'trocatout', '251066', 'ma rue', '', '', '06500', 'Menton', 7.4975400, 43.7744810, 'trocatout@gmail.com', NULL, NULL, 0, 0, '2014-09-14 21:16:08', 7, '2011-07-27 22:11:35', '2014-09-14 21:16:08'),
(43, 'trocadmin', 'trocatout', 'trocadmin', '251066', 'chez moi', '', '', '75000', 'Paris', 5.8930764, 43.4939456, 'trocatout@gmail.com', NULL, NULL, 0, 0, '2015-05-10 00:30:11', 8, NULL, '2015-05-10 00:30:11'),
(45, 'trocessai', 'myTrocessai', 'trocessai', 'trocessai', 'chez moi', '', '', '01000', 'Bourg-en-Bresse', 5.2192460, 46.2027900, 'trocatout@gmail.com', NULL, NULL, 0, 0, '2012-09-19 21:09:08', 9, '2011-07-27 22:02:38', '2013-06-09 10:59:13'),
(52, 'Gribouille', 'Eric', 'erick', '251066', 'Montée du rocher', '', '', '78100', 'Saint-Germain-en-Laye', 2.0937610, 48.8989080, 'egribouille@yahoo.fr', NULL, NULL, 0, 0, NULL, 10, '2012-01-12 22:18:50', '2013-06-09 10:59:13'),
(53, 'test', 'test', 'bouh23', 'testtest', 'test', '', '', 'test', 'test', 2.0937610, 48.8989080, 'bouh23@gmail.com', NULL, NULL, 0, 0, NULL, 11, '2012-01-18 23:57:35', '2013-06-09 10:59:13'),
(54, 'HERMANN-PEPIN', 'Alice', 'Alice', 'hibou7_!', '25 rue du petit marais', '', '', '35500', 'Cesson-Sévigné', -1.6023082, 48.1191913, 'alice.hermann@free.fr', NULL, NULL, 0, 0, NULL, 12, '2012-01-23 21:23:11', '2013-06-09 10:59:13'),
(55, 'simonet', 'clovis', 'clovis25160', 'poklimoli', '1A rue des hirondellels', '', '', '25160', 'LABERGEMENT STE MARIE', 6.2823160, 46.7743810, 'clovissimonet@hotmail.fr', NULL, NULL, 0, 0, NULL, 13, '2012-02-04 11:23:55', '2013-06-09 10:59:13'),
(56, 'Panissard', 'Amélie', 'Biscotte', 'zanimo', 'pré a croix', '', '', '74540', 'Mûres', 6.0368850, 45.8052149, 'braverly@hotmail.com', NULL, NULL, 0, 0, '2012-12-10 11:09:55', 14, '2012-02-05 13:31:39', '2013-06-09 10:59:13'),
(57, 'Gabela', 'Vincent', 'Grosplif', 'Santiago75', '116 avenue de la république', '', '', '77100', 'MEAUX', 2.8792550, 48.9593960, 'vincent.gabela@socgen.com', NULL, NULL, 0, 0, NULL, 15, '2012-02-07 16:36:07', '2013-06-09 10:59:13'),
(58, 'BELAVAL', 'Jacques', 'belj', 'belaval', '262 Chemln de Pousinies', '', '', '82410', 'St Etienne de Tulmont', 1.4612200, 44.0483819, 'j.belaval@free.fr', NULL, NULL, 0, 0, NULL, 16, '2012-02-11 07:25:48', '2013-06-09 10:59:13'),
(59, 'pereira', 'paul', 'dragonball', 'kecekicepa', '21 jump street', '', '', '31000', 'toulouse', 1.4442050, 43.6046256, 'pereira31000@gmail.com', NULL, NULL, 0, 0, NULL, 17, '2012-02-21 08:16:12', '2013-06-09 10:59:13'),
(60, 'PIRES', 'Didier', 'dpires', 'vepadian', '92 rue de l''église', '', '', '95280', 'Jouy le Moutier', 2.0472090, 49.0156950, 'pub.pires@gmail.com', NULL, NULL, 0, 0, NULL, 18, '2012-02-22 18:09:28', '2013-06-09 10:59:13'),
(61, 'Gabrillargues', 'Axel', 'Gorkh', 'gamorr', '30 rue Molière', '', '', '92120', 'Montrouge', 2.3173840, 48.8163630, 'gsaxel@gmail.com', NULL, NULL, 0, 0, NULL, 19, '2012-02-25 18:35:42', '2013-06-09 10:59:14'),
(62, 'GUILLOIS', 'François-Xavier', 'tnntwister', 'saidin', '9, rue du Belvédère', '', '', '74150', 'Rumilly', 5.9423570, 45.8671370, 'fxguillois@gmail.com', NULL, NULL, 0, 0, NULL, 20, '2012-03-16 23:25:54', '2013-06-09 10:59:14'),
(63, 'Veyron', 'Adrien', 'aveyron', 'aveyron', 'ma rue', '', '', '08000', 'Charleville-Mézières', 4.7260960, 49.7620850, 'aveyron@yahoo.fr', NULL, NULL, 0, 0, '2012-04-20 22:09:40', 21, '2012-04-20 22:08:53', '2013-06-09 10:59:14'),
(64, 'Forges', 'Yoann', 'Mindkiller', 'btb400cest', 'Appartement de l''Ecole', 'Le Bourg', '', '42520', 'Lupé', 4.7070540, 45.3736790, 'yoann.forges@live.fr', NULL, NULL, 0, 0, '2012-05-28 10:05:01', 22, '2012-05-28 10:05:01', '2013-06-09 10:59:14'),
(65, 'DA NASCIMENTO', 'ROMAIN', 'romain.da.nasci', 'romain1987', '97 bd de magenta', '6eme étage droite', '', '75010', 'PARIS', 2.3603689, 48.8785618, 'romain.da.nascimento@gmail.com', NULL, NULL, 0, 0, '2012-07-25 13:33:18', 23, '2012-07-25 13:33:18', '2013-06-09 10:59:14'),
(66, 'freismuth', 'didier', 'freismuth', 'dfs1967', '7 allée des Romarins', 'Les Jardins de La Durande', '', '83260', 'LA CRAU', -0.8170560, 46.5490820, 'didier.freismuth@laposte.net', NULL, NULL, 0, 0, '2012-07-27 20:55:32', 24, '2012-07-27 20:55:32', '2013-06-09 10:59:14'),
(67, 'autreessai', 'autreessai', 'autressai', '251066', 'chez moi', '', '', '42000', 'montbrison', 4.2532370, 45.3003190, 'moi@yahoo.fr', NULL, NULL, 0, 0, '2013-07-03 20:56:11', 25, '2012-09-04 18:56:43', '2014-04-28 23:22:13'),
(68, 'Delesalle', 'Antoine', 'Antoine', 'celianecam', '6 rue de la charmille', '', '', '61600', 'Saint-Maurice du Désert', -0.3182516, 48.5783343, 'antoine.delesalle1@voila.fr', NULL, NULL, 0, 0, '2012-09-05 12:58:14', 26, '2012-09-05 12:58:14', '2013-06-09 10:59:14'),
(69, 'GASTAL', 'BENOIT', 'derfel', 'ben0803', '38 Rue de la charpenterie', '', '', '45000', 'ORLEANS', 1.9157977, 47.9108329, 'derfel45@gmail.com', NULL, NULL, 0, 0, '2012-09-19 17:42:50', 27, '2012-09-19 17:42:50', '2013-06-09 10:59:14'),
(70, 'Carrega', 'Fabrice', 'fcarrega', 'ykjmmo', '6 rue des Immeubles Industriels', '', '', '75011', 'Paris', 2.3811530, 48.8579930, 'fabrice.carrega@arizuka.com', NULL, NULL, 0, 0, '2012-09-26 13:22:06', 28, '2012-09-26 13:22:06', '2013-06-09 10:59:14'),
(71, 'borges', 'jeremy', 'borgesjere', 'amoije', 'trevernic', '', '', '56870', 'baden', -2.9182840, 47.6196680, 'borgesjere@hotmail.com', NULL, NULL, 0, 0, '2012-11-04 15:48:59', 29, '2012-11-04 15:48:59', '2013-06-09 10:59:14'),
(72, 'trigo', 'laurent', 'triggy', 'nul419', 'rue des déportés 13', '', '', '1480', 'tubize', 4.3280582, 50.6924588, 'trigolau1001@yahoo.fr', NULL, NULL, 0, 0, '2012-12-08 18:17:15', 30, '2012-12-08 18:16:43', '2013-06-09 10:59:14'),
(73, 'massaux', 'François', 'darthmass', 'anaiis', 'corniche des marseillais', '', '', '05700', 'SERRES', 0.9684533, 42.9368555, 'massseke@gmail.com', NULL, NULL, 0, 0, '2013-04-14 00:30:58', 31, '2012-12-19 23:08:11', '2013-06-09 10:59:14'),
(76, 'CADES', 'Gérard', 'GCAD', '251066', '50 cours Berriat', '', '', '38000', 'Grenoble', 5.7165413, 45.1894298, 'chezmoi@gmail.com', NULL, NULL, 0, 0, '2013-07-26 21:43:43', 32, '2013-04-11 00:31:34', '2014-04-28 23:22:13'),
(78, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0.0000000, 0.0000000, NULL, NULL, NULL, 0, 0, '2013-06-27 06:44:38', 33, '2013-06-27 06:44:39', '2015-11-11 09:05:42'),
(79, 'MAYET', 'Vincent', 'gastine', 'arnold', '6,bd du champ de mars', '', '', '38160', 'SAINT MARCELLIN', 5.3193852, 45.1526888, 'vinsmay-ecommerce@yahoo.fr', NULL, NULL, 0, 0, '2013-11-23 16:33:40', 34, '2013-11-23 16:33:41', '2013-11-23 16:33:41'),
(80, 'LEVY', 'Laëtitia', 'tendretoile', 'Amitier', '4 Rue des Potiers', '', '', '82600', 'VERDUN SUR GARONNE', 1.2355760, 43.8541340, 'tendretoile@neuf.fr', NULL, NULL, 0, 0, '2014-01-12 19:13:04', 35, '2014-01-11 18:04:12', '2014-01-12 19:13:04'),
(81, 'Honoré', 'Paul', 'xenopus', 'xenobd', 'Mas des trappistes', '', '', '30500', 'Saint Julien de Cassagnas', 4.1963940, 44.2117680, 'paul.honore@gmail.com', NULL, NULL, 0, 0, '2014-03-21 13:34:49', 36, '2014-03-21 13:34:50', '2014-03-21 13:34:50'),
(82, 'causeret', 'marie', 'causeret', 'cuellar', '4, rue du Bassin', '', '', '34080', 'MONTPELLIER', 3.8299106, 43.6167208, 'marie.poubelle@gmail.com', NULL, NULL, 0, 0, '2014-06-29 18:35:02', 37, '2014-06-29 18:35:03', '2014-06-29 21:30:05'),
(83, 'Blaysat', 'stephane', 'steffle', 'steffle', '4 place de la mairie', '', '', '21230', 'longecourt les culetre', 4.5544230, 47.1594910, 'stephane.blaysat@laposte.net', NULL, NULL, 0, 0, '2014-12-09 08:37:08', 38, '2014-12-09 08:37:08', '2014-12-19 21:03:26'),
(84, 'Gerard', 'Hélène', 'trocabd2014', 'trocabd201', 'rue Jules Destrée 15B', '', 'rue Jules Destrée', '5060', 'Velaine-sur-Sambre', 4.6140200, 50.4674000, 'helenegerard@live.be', NULL, NULL, 0, 0, '2014-12-11 21:11:49', 39, '2014-12-11 21:11:49', '2014-12-19 21:03:26'),
(85, 'guardiola', 'alain', 'rocdazur', 'symi83', '43 rue Louis Blériot', 'les terrasses du Blavet', '', '83520', 'Roquebrune sur Argens', 6.6317461, 43.4358570, 'guardiolaalain@orange.fr', NULL, NULL, 0, 0, '2015-02-07 17:45:00', 40, '2014-12-31 11:18:46', '2015-02-07 17:45:00'),
(86, 'Da Silva', 'Sabine', 'Kewee', 'cr3v3tt3s', '10 rue turenne', '', '', '13110', 'port de bouc', 4.9859310, 43.4054490, 'kewee@free.fr', NULL, NULL, 0, 0, '2015-01-23 01:30:56', 41, '2015-01-23 00:07:48', '2015-01-26 20:55:28'),
(87, 'Gefflot', 'Lionel', 'lionlibellule', 'papillon', '31,rue des tamaris', '', '', '77700', 'Coupvray', 2.7941710, 48.8921520, 'gefflotlionel@cegetel.net', NULL, NULL, 0, 0, '2015-11-21 20:44:52', 42, '2015-10-28 23:01:55', '2015-11-21 20:44:52'),
(88, 'BOZEK', 'Xavier', 'discozek', 'Stratocast', '26 rue de la valeriane', '26 rue de la valeriane', '', '57000', '57000 - METZ', 0.0000000, 0.0000000, 'bozek.xavier@yahoo.fr', NULL, NULL, 0, 0, '2016-08-13 22:22:51', 43, '2016-08-13 22:19:50', '2016-08-13 22:22:51');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurcible`
--

CREATE TABLE IF NOT EXISTS `utilisateurcible` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `troc_id` int(11) DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateursource`
--

CREATE TABLE IF NOT EXISTS `utilisateursource` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `troc_id` int(11) DEFAULT NULL,
  `note` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `album`
--
ALTER TABLE `album`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `auteuralbum`
--
ALTER TABLE `auteuralbum`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentairealbum`
--
ALTER TABLE `commentairealbum`
  ADD PRIMARY KEY (`id`),
  ADD KEY `commentairealbum_commentairealbum_FK_2` (`album_id`),
  ADD KEY `commentairealbum_commentairealbum_FK_3` (`utilisateur_id`);

--
-- Index pour la table `communaute`
--
ALTER TABLE `communaute`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `editeur_FI_1` (`pays_id`),
  ADD KEY `editeur_FI_2` (`utilisateur_id`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_news_FK_1` (`utilisateur_id`);

--
-- Index pour la table `offrecible`
--
ALTER TABLE `offrecible`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `offrecible_FI_1` (`album_id`),
  ADD KEY `offrecible_FI_2` (`utilisateurcible_id`);

--
-- Index pour la table `offresource`
--
ALTER TABLE `offresource`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `offresource_FI_1` (`album_id`),
  ADD KEY `offresource_FI_2` (`utilisateursource_id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `possede`
--
ALTER TABLE `possede`
  ADD PRIMARY KEY (`id`),
  ADD KEY `possede_FI_1` (`utilisateur_id`),
  ADD KEY `possede_FI_2` (`album_id`);

--
-- Index pour la table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `serie_FI_1` (`utilisateur_id`);

--
-- Index pour la table `sf_faq_category`
--
ALTER TABLE `sf_faq_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sf_faq_faq`
--
ALTER TABLE `sf_faq_faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sf_faq_faq_FI_1` (`category_id`);

--
-- Index pour la table `sf_guard_group`
--
ALTER TABLE `sf_guard_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sf_guard_group_name_unique` (`name`);

--
-- Index pour la table `sf_guard_group_permission`
--
ALTER TABLE `sf_guard_group_permission`
  ADD PRIMARY KEY (`group_id`,`permission_id`),
  ADD KEY `sf_guard_group_permission_FI_2` (`permission_id`);

--
-- Index pour la table `sf_guard_permission`
--
ALTER TABLE `sf_guard_permission`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sf_guard_permission_name_unique` (`name`);

--
-- Index pour la table `sf_guard_remember_key`
--
ALTER TABLE `sf_guard_remember_key`
  ADD PRIMARY KEY (`user_id`,`ip_address`);

--
-- Index pour la table `sf_guard_user`
--
ALTER TABLE `sf_guard_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sf_guard_user_username_unique` (`username`);

--
-- Index pour la table `sf_guard_user_group`
--
ALTER TABLE `sf_guard_user_group`
  ADD PRIMARY KEY (`user_id`,`group_id`),
  ADD KEY `sf_guard_user_group_FI_2` (`group_id`);

--
-- Index pour la table `sf_guard_user_permission`
--
ALTER TABLE `sf_guard_user_permission`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `sf_guard_user_permission_FI_2` (`permission_id`);

--
-- Index pour la table `sf_simple_cms_page`
--
ALTER TABLE `sf_simple_cms_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sf_simple_cms_page_slug_unique` (`slug`),
  ADD KEY `sf_simple_cms_page_FI_1` (`tree_parent`);

--
-- Index pour la table `sf_simple_cms_slot`
--
ALTER TABLE `sf_simple_cms_slot`
  ADD PRIMARY KEY (`page_id`,`culture`,`name`);

--
-- Index pour la table `sf_simple_forum_category`
--
ALTER TABLE `sf_simple_forum_category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sf_simple_forum_forum`
--
ALTER TABLE `sf_simple_forum_forum`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sf_simple_forum_forum_stripped_name_unique` (`stripped_name`),
  ADD KEY `sf_simple_forum_forum_FI_1` (`category_id`),
  ADD KEY `sf_simple_forum_forum_FI_2` (`latest_post_id`);

--
-- Index pour la table `sf_simple_forum_post`
--
ALTER TABLE `sf_simple_forum_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sf_simple_forum_post_FI_1` (`topic_id`),
  ADD KEY `sf_simple_forum_post_FI_2` (`user_id`),
  ADD KEY `sf_simple_forum_post_FI_3` (`forum_id`);

--
-- Index pour la table `sf_simple_forum_topic`
--
ALTER TABLE `sf_simple_forum_topic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sf_simple_forum_topic_FI_1` (`forum_id`),
  ADD KEY `sf_simple_forum_topic_FI_2` (`latest_post_id`),
  ADD KEY `sf_simple_forum_topic_FI_3` (`user_id`);

--
-- Index pour la table `sf_simple_forum_topic_view`
--
ALTER TABLE `sf_simple_forum_topic_view`
  ADD PRIMARY KEY (`user_id`,`topic_id`),
  ADD KEY `sf_simple_forum_topic_view_FI_2` (`topic_id`);

--
-- Index pour la table `troc`
--
ALTER TABLE `troc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `troc_FI_1` (`utilisateursource_id`),
  ADD KEY `troc_FI_2` (`utilisateurcible_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurcible`
--
ALTER TABLE `utilisateurcible`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `utilisateurcible_FI_1` (`utilisateur_id`),
  ADD KEY `utilisateurcible_FI_2` (`troc_id`);

--
-- Index pour la table `utilisateursource`
--
ALTER TABLE `utilisateursource`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `utilisateursource_FI_1` (`utilisateur_id`),
  ADD KEY `utilisateursource_FI_2` (`troc_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=657;
--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=257;
--
-- AUTO_INCREMENT pour la table `auteuralbum`
--
ALTER TABLE `auteuralbum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1348;
--
-- AUTO_INCREMENT pour la table `commentairealbum`
--
ALTER TABLE `commentairealbum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `communaute`
--
ALTER TABLE `communaute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `offrecible`
--
ALTER TABLE `offrecible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `offresource`
--
ALTER TABLE `offresource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT pour la table `possede`
--
ALTER TABLE `possede`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT pour la table `serie`
--
ALTER TABLE `serie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT pour la table `sf_faq_category`
--
ALTER TABLE `sf_faq_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `sf_faq_faq`
--
ALTER TABLE `sf_faq_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `sf_guard_group`
--
ALTER TABLE `sf_guard_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `sf_guard_permission`
--
ALTER TABLE `sf_guard_permission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `sf_guard_user`
--
ALTER TABLE `sf_guard_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `sf_simple_cms_page`
--
ALTER TABLE `sf_simple_cms_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `sf_simple_forum_category`
--
ALTER TABLE `sf_simple_forum_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `sf_simple_forum_forum`
--
ALTER TABLE `sf_simple_forum_forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `sf_simple_forum_post`
--
ALTER TABLE `sf_simple_forum_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `sf_simple_forum_topic`
--
ALTER TABLE `sf_simple_forum_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `troc`
--
ALTER TABLE `troc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT pour la table `utilisateurcible`
--
ALTER TABLE `utilisateurcible`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `utilisateursource`
--
ALTER TABLE `utilisateursource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

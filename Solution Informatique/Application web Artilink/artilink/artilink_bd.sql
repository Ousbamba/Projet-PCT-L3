-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 10:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artilink_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `nom_prenom` varchar(255) NOT NULL,
  `num_tel` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `nom_prenom`, `num_tel`, `mdp`) VALUES
(NULL, '', 'artilink', '2250140402040', '$2y$10$wSBFEmTE7.l/CGYT1XKzA.I3vGX3j6tn0PmcwT9DNJ3FsR/czgqp2'),
(NULL, '0e7a5d5e83db2a2d9950', 'Artilink', '2250140402040', '$2y$10$wSBFEmTE7.l/CGYT1XKzA.I3vGX3j6tn0PmcwT9DNJ3FsR/czgqp2');

-- --------------------------------------------------------

--
-- Table structure for table `ajout_boutik`
--

CREATE TABLE `ajout_boutik` (
  `id` int(11) DEFAULT NULL,
  `id_artisan` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `desc_article` varchar(500) NOT NULL,
  `img` varchar(250) NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ajout_boutik`
--

INSERT INTO `ajout_boutik` (`id`, `id_artisan`, `titre`, `desc_article`, `img`, `date_pub`) VALUES
(0, '40', 'ESTHETIQUE', 'ESSAI', '82c2f2428b3859c706b0.jpg', '0000-00-00 00:00:00'),
(9, '34', 'ESTHETIQUE', 'HJ', '80feaa8283264dcf6be9.jpg', '0000-00-00 00:00:00'),
(1, '41', 'Collier', 'collier en perle traditionnel', 'bfea7edc34e4e628e6b4.jpeg', '0000-00-00 00:00:00'),
(9, '41', 'collier de Mariage', 'pour un mariage', '763ec06846262dc56dc1.jpg', '0000-00-00 00:00:00'),
(6, '42', 'Porte', 'creation et réparation', '4ed694f3fb7f8ed61bcf.jpeg', '0000-00-00 00:00:00'),
(0, '42', 'Cuisine', 'placard de cuisine ', '473f127d0540b4d068a3.jpg', '0000-00-00 00:00:00'),
(69, '43', 'Portable', 'portable Iphone', 'fd132e541f1e23b13c33.jpeg', '0000-00-00 00:00:00'),
(0, '43', 'television', 'télévision écran plasma', '485031e79b570dc0e9cc.jpeg', '0000-00-00 00:00:00'),
(0, '43', 'Réfrigérateur ', 'grand réfrigérateur  pour la cuisine', '8eb41f4722dc896b087c.jpg', '0000-00-00 00:00:00'),
(2, '44', 'Coquet de telephone', 'protège portable', '22f083240104e7e5ebc6.jpg', '0000-00-00 00:00:00'),
(0, '44', 'coquet de plusieurs portable', 'Tres simple et class', '3ed45782c7cb8c766c2c.jpg', '0000-00-00 00:00:00'),
(0, '45', 'Fruits frais', 'Savourez mes succulants fruits', '378d7b075d167a86fcae.png', '0000-00-00 00:00:00'),
(9557, '46', 'De bons fruits frais', 'Les meilleurs fruits frais du marché', 'be50ba9889f01693d427.jpg', '0000-00-00 00:00:00'),
(0, '46', 'Des belles pommes croquantes', 'Venez savourer mes pommes ', 'f066a763391b71d2cf66.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contactez_nous`
--

CREATE TABLE `contactez_nous` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactez_nous`
--

INSERT INTO `contactez_nous` (`id`, `nom`, `email`, `messages`) VALUES
(1, 'bamba ous', 'ous@gmail.com', 'Salut.'),
(2, 'Bamba', 'ousbamba@gmail.com', 'Salut'),
(3, 'Bamba', 'ousbamba@gmail.com', 'Salut'),
(4, 'Ous', 'ousbam@gmail.com', 'Bonsoir M !'),
(5, 'Ous', 'ousbam@gmail.com', 'Bonsoir M !'),
(6, 'Ous', 'ousbam@gmail.com', 'Bonsoir M !'),
(7, 'tata titi', 'titi@gmail.com', 'Bonsoir'),
(8, 'tata titi', 'titi@gmail.com', 'Bonsoir'),
(9, 'tata titi', 'titi@gmail.com', 'Salut'),
(10, 'tata titi', 'titi@gmail.com', 'Salut'),
(11, 'ANNICK', 'karidja.diabate@uvci.edu.ci', 'hty'),
(12, 'DIABATE karidja', 'karidja.diabate@uvci.edu.ci', 'bonjour'),
(13, 'MIA', 'karidja.diaae@uvci.edu.ci', 'DE');

-- --------------------------------------------------------

--
-- Table structure for table `contactez_nous_arti`
--

CREATE TABLE `contactez_nous_arti` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `messages` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactez_nous_arti`
--

INSERT INTO `contactez_nous_arti` (`id`, `nom`, `email`, `messages`) VALUES
(1, 'Bamba', 'ousbamba@gmail.com', 'Bonsoir Mr, j&#039;ai un probleme.'),
(2, 'bamba ous', 'ous@gmail.com', 'Salut, ma page ne fonctionne pas correctement.'),
(3, 'bamba ous', 'ous@gmail.com', 'Salut.'),
(4, 'S', 'alexandrekdouffi@gmail.com', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `inscri_artisan`
--

CREATE TABLE `inscri_artisan` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `metier` varchar(500) NOT NULL,
  `experiences` int(11) NOT NULL,
  `num_tel` varchar(15) NOT NULL,
  `num_what` varchar(15) NOT NULL,
  `type_piece` varchar(100) NOT NULL,
  `num_piece` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  `terms` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inscri_artisan`
--

INSERT INTO `inscri_artisan` (`id`, `user_id`, `nom`, `prenom`, `sexe`, `metier`, `experiences`, `num_tel`, `num_what`, `type_piece`, `num_piece`, `mdp`, `ville`, `images`, `terms`, `date`) VALUES
(15, 'qPz9g2hRWtWm6FhmocHR', 'Racine', 'Diarra', 'femme', 'agroalimentaire, alimentation, restauration ', 5, '+225 07081', '+225 07081', 'passeport', 'CI002393040', 'f3b24cdd53c1412d9e849e286386bfcc0b280e07', 'abidjan', '4Dzah80QJJ56misG16PL.jpg', 'on', '2024-08-04 06:16:32'),
(14, 'Im178IxV5grm15SfDAZP', 'Racine', 'Diarra', 'femme', 'agroalimentaire, alimentation, restauration ', 12, '+225 07081', '+225 07081', 'extrait_naissance', 'CI002393040', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'bouake', 'ghpg2suAIczVa7ovx1pl.jpg', 'on', '2024-08-04 06:16:32'),
(13, '2P87ToagLdQhxxe2jh3j', 'Racine', 'kone', 'femme', 'couture', 1, '0748004319', '0748004319', 'extrait_naissance', 'CI0202020202', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'bouake', 'R0xsklTBlgTVfK8V02mY.jpg', 'on', '2024-08-04 06:16:32'),
(11, 'CwIyFF7J6g7FkWdH94Pc', 'Bamba Moussa', 'Abdel-Rahim Anas', 'homme', 'agroalimentaire, alimentation, restauration ', 23, '0600300300', '0600300300', 'cni', 'CI002393040489', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'abidjan', 'B9Xk7BkDPCzVjALsYFPB.jpg', 'on', '2024-08-04 06:16:32'),
(12, '0xVsKxVheaROSEaaMRRM', 'Racine', 'Adama', 'homme', 'artisanat d’art et de décoration', 33, '0909999998', '0404040404', 'passeport', 'CI002393040', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'abidjan', 'cjDkJJ620ch6yO34VpoO.jpg', 'on', '2024-08-04 06:16:32'),
(10, 'hkczJauBwiNRfFXUUkG3', 'titi', 'tata', 'homme', 'artisanat d’art et de décoration', 4, '0909999998', '0909999998', 'extrait_naissance', 'CI0202020202', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'abidjan', 'teOKsIj9dvGsMLvvRY6w.png', 'on', '2024-08-04 06:16:32'),
(16, 'RoA2UOShLhztGxSdr56b', 'Racine', 'Diarra', 'femme', 'agroalimentaire, alimentation, restauration ', 12, '0708141383', '0708141383', 'passeport', 'CI002393040', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'abidjan', 'VgtJpFugpiingRBOPehx.jpg', 'on', '2024-08-04 06:16:32'),
(17, 'Xza6S3kWNgA1cl4cHbG6', 'Adama', 'ad', 'homme', 'maçonnerie ', 1, '0779394218', '0779394218', 'extrait_naissance', 'CI002393040489', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'abidjan', 'cUorPHHeDUy6c908D35d.jpg', 'on', '2024-08-04 06:16:32'),
(18, 'b04c493b9471c63d54f9', 'DIABATE', 'KARIDJA', 'homme', 'bijouterie', 2, '2250787856389', '2250787856389', 'attestation_identite', '3843521882115', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'abidjan', '59d02dd594ab6c5e77c2.JPG', 'on', '2024-08-04 06:16:32'),
(19, 'fc4ebed6a8f7adfba2d7', 'ANNICK', 'N&#039;DRI', 'homme', 'hygiène et soins corporels ', 7, '2250787856389', '2250787856389', 'passeport', '3843521882115', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'bouake', '606cd8a2bc1077662b77.JPG', 'on', '2024-08-04 06:16:32'),
(20, 'ffd79d82658562bda634', 'DIABATE', 'KARIDJA Wilma', 'homme', 'couture', 2, '2250787856389', '2250787856389', 'cni', '3843521882115', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'abidjan', 'db6116ddce7c4026323a.JPG', 'on', '2024-08-04 08:42:25'),
(23, '722aa2f67408fc5588a6', 'DIA', 'KARI', 'femme', 'audiovisuel et communication ', 12, '0504124412', '0504124412', 'cni', '3843521882115', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'abidjan', 'a3eacc6bafb37d380b16.JPG', 'on', '2024-08-04 09:05:08'),
(25, '5a22b5730461b443bd90', 'DIABATE', 'KIA', 'homme', 'electronique (réparateur TV, portable, etc)', 12, '2250103080876', '2250103080876', 'cni', '3843521882117', 'ab874467a7d1ff5fc71a4ade87dc0e098b458aae', 'bouake', '8509af584ac4bba2ced0.JPG', 'on', '2024-08-04 09:18:47'),
(26, '12f6f0c7eeea5528c6c4', 'DIABATE', 'KIO', 'homme', 'spécialiste en froid', 13, '2250787856389', '2250787856389', 'passeport', '3843521882117', 'fea7f657f56a2a448da7d4b535ee5e279caf3d9a', 'abidjan', '471a4b12ab30ad037125.PNG', 'on', '2024-08-04 09:24:20'),
(27, '6ecf35e130ade2d63a0b', 'DIABATE', 'MAH', 'femme', 'electronique (réparateur TV, portable, etc) ', 2, '0787856389', '0787856389', 'extrait_naissance', '3843521882115', '2e8c0277e396fabf683e56c8b7fa7e6dad68c679', 'abidjan', 'd248f5f8c7ed101f31e1.jpg', 'on', '2024-08-04 20:58:55'),
(28, 'a3b59fa5e4f26a32986b', 'ANNICK', 'KARIDJA Wilma', 'homme', 'audiovisuel et communication ', 12, '2252020102000', '2252020102000', 'passeport', '3843521882117', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'abidjan', 'e42f0a3da5cbc5af6ec7.jpg', 'on', '2024-08-05 00:56:01'),
(29, '369f708233add9319658', 'DIABATE', 'N&#039;DRI', 'homme', 'bijouterie', 12, '2250304221023', '2250304221023', 'cni', '3843521882115', '2e8c0277e396fabf683e56c8b7fa7e6dad68c679', 'abidjan', 'de61fc24bc56cb9b24ba.jpg', 'on', '2024-08-05 00:59:11'),
(31, '9e38fcd4cab753886cc3', 'Banga', 'Christy', 'homme', 'audiovisuel et communication ', 45, '2250807060504', '2250807060504', 'cni', '3843521882119', '$2y$10$KVCOsBdwFBmOlyk.q0mYb.Hyrcu7B44rgGiqsR3VNks0eUN48vcLS', 'abidjan', '0e2e1900dede61b60144.jpg', 'on', '2024-08-05 01:18:29'),
(32, '85c11347f18047fb7dc5', 'DIABATE', 'karid', 'homme', 'coiffure', 2, '2250505052505', '2250505052505', 'cni', '3843521882114', '$2y$10$gyMXkRWD/CqfbEjro./0peLC20t1ZBUBv4c5l5KGd/HTq.lBAf.4C', 'abidjan', '17d3d4d923d480ea57d8.jpg', 'on', '2024-08-05 09:54:12'),
(33, 'b9d2563d2df0aa3fca53', 'DIABATE', 'KARIDJA Wilma', 'femme', 'menuiserie/charpenterie', 3, '2252030405060', '2252030405060', 'cni', '3843521882119', '$2y$10$6c5yQAYWTv5qci1xA0KiEOtbzPH836Pi9awpZ/2JicXAMiPGCWb5.', 'abidjan', 'da7a6d524364e7a6e5de.jpg', 'on', '2024-08-05 12:14:38'),
(34, '955bc090d1e1be33885f', 'DIABATE', 'NIAL', 'homme', 'audiovisuel et communication ', 2, '2250101203040', '2250101203040', 'cni', '3843521882116', '$2y$10$YyGjYx08wQnEUuQMeD9AEutFm.b3a28cS6NdCRYtxjx1mSpz3KQD2', 'bouake', '2ab3f451254a4a68ca6a.jpg', 'on', '2024-08-05 15:14:07'),
(35, 'e75b3eb309ce53050cfb', 'WILMA', 'DIABATE', 'homme', 'agroalimentaire, alimentation, restauration ', 5, '2250787856384', '2250787856384', 'cni', '3843521882116', '$2y$10$sDRZ/A5mkQKtDmWWHpKh9eT8rCT4iBCVeEH30sYnh2XKQmxl09Nqi', 'abidjan', '46726acd7f6acf153c6c.JPG', 'on', '2024-08-05 17:20:06'),
(36, '4949d7f360973fe138fb', 'nia', 'de', 'homme', 'boucherie', 3, '2250787856380', '2250787856380', 'cni', '3843521882117', '$2y$10$q6Ng4CM6YzAXW/I0Hrs.9OM.ibty.s3dcs6fJXZLMaCjPgCCDt3qq', 'bouake', 'd65584328789b52e760a.png', 'on', '2024-08-05 17:57:46'),
(37, '008bc9fe39fe142c4ab2', 'sd', 'df', 'homme', 'boucherie', 2, '2250787856381', '2250787856381', 'cni', '3843521882119', '$2y$10$8x1mBVsovCcsCPsfIDfGFOhqAt2.R9q/eZP/rFD2wvmBWIOwszJ8O', 'abidjan', '936e213fdc2d52beb36e.png', 'on', '2024-08-05 18:06:53'),
(38, 'bdabc6e4337b3be4bf55', 'ksl', 'sd', 'femme', 'tapisserie', 2, '2250787856345', '2250787856345', 'cni', '3843521882115', '$2y$10$sY60U/3e0Orxwk2NQeGmPeHwJBcAf.cs2o/4ruhfmncWhHO0DfYPq', 'abidjan', '1f32203059a91c7b8b19.png', 'on', '2024-08-05 18:17:01'),
(39, '4ab54c2b919326092f42', '2250748004319', 'Racine', 'femme', 'bijouterie', 4, '2250748004319', '225', 'extrait_naissance', 'CI0878843', '$2y$10$KOF7mxtPjP8TxTM4UAu3S./jGnyHvz5Qu6/QfKhfapCl6wArOCxrm', 'abidjan', '3c0969448b9231492487.jpg', 'on', '2024-08-06 01:10:18'),
(40, '2043d5e5e4698a0000c6', 'DIABATE', 'karid', 'homme', 'audiovisuel et communication ', 5, '2250787856289', '2250787856289', 'cni', '3843521882119', '$2y$10$L9r65yCTHRCPT3SuGT5vYelQ6SuvLYGM2ZtJNqJMrDjVzFawhjAhe', 'bouake', '35cedb88b35203db57cc.jpg', 'on', '2024-08-06 03:08:09'),
(41, 'b0d277e69eb86ac99ca3', 'SIA', 'MIRIAM', 'femme', 'bijouterie', 7, '+2250787856389', '+2250787856389', 'cni', '3843521883117', '$2y$10$sbMURaMvmYsIXDjdNU5O9OgNuqVUwjJ1XuNPqib310ZpcGt.bijDu', 'abidjan', '195d618e47ac661fac02.jpg', 'on', '2024-08-06 04:57:12'),
(42, 'ffaa7b30d78d9d17302b', 'Coulibaly', 'Aziz', 'homme', 'menuiserie/charpenterie', 4, '+2250120304050', '+2250120304050', 'extrait_naissance', '3843521882316', '$2y$10$V6zNyu70WpdDsIEuVX/S7.V5I9erSxPwkvqV3I8egeI5pp6e.YgM6', 'bouake', 'dac26d5c73b51ba33ccf.jpg', 'on', '2024-08-06 05:25:13'),
(43, '0e7a5d5e83db2a2d9950', 'Diallo', 'Aroun', 'homme', 'electronique (réparateur TV, portable, etc) ', 5, '+2250120102316', '+2250120102316', 'passeport', '3843521882114', '$2y$10$wSBFEmTE7.l/CGYT1XKzA.I3vGX3j6tn0PmcwT9DNJ3FsR/czgqp2', 'abidjan', '367752c7ae5430584a6d.png', 'on', '2024-08-06 05:30:23'),
(44, '41210f9124e702e95b42', 'DIAB', 'Zeynab', 'femme', 'artisanat d’art et de décoration', 5, '+2250203045060', '+2250203045060', 'attestation_identite', '4843521882117', '$2y$10$zzg.1WclF2pPlBdHBHwm0OACn1dl3i5DfYm2ZzyFGtfavWlShhwmC', 'abidjan', '231771da2ec3a51c02b4.jpg', 'on', '2024-08-06 05:37:55'),
(45, '52f63afbf497fbc44183', 'Gnahoré', 'Emmanuella', 'femme', 'vente de marchandises', 5, '2250708141383', '2250708141383', 'extrait_naissance', 'CI0878843', '$2y$10$S1sIKs6Fknwo8UuW4bNEceSHO2J0CQkVngsTxDgP.M5wMdoASPKMC', 'abidjan', 'e843b4b5812cc760dfc0.png', 'on', '2024-08-06 09:15:54'),
(46, '7945176df4f83b6eb403', 'Traoré', 'Mariam', 'femme', 'vente de marchandises', 1, '0710004659', '0710004659', 'extrait_naissance', 'CI010101', '$2y$10$4RCdnjjcy4lSjpBYtbm90OPGvHQBQuxj453S1SEMA4oTRJ84UF9qy', 'bouake', '78a1ca4cc0759726d1ed.jpg', 'on', '2024-08-06 20:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `nom_prenom` varchar(50) NOT NULL,
  `num_tel` varchar(15) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `terms` varchar(12) NOT NULL DEFAULT 'on'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `nom_prenom`, `num_tel`, `mdp`, `terms`) VALUES
(2, 'SUgjQQZbPLd2ptOokRE2', 'Kone abi', '0506711849', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'on'),
(3, 'HTStqC9JJUji5BeGBqYV', 'Jean kone', '0102014455', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'on'),
(4, 'NphevwBwALRamffQJryy', 'Fanny Abou', '0402441230', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'on'),
(5, 'ERcVulKhUpStCVf4Oam0', 'Kone Moussa', '0101020304', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'on'),
(6, 'Uv58Z5ortNpHo2edFYlW', 'Bamba karim', '0809010101', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'on'),
(7, 'Oiw2MlxDZH6nu45BkARX', 'baba', '0405067070', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(8, '4eN6FYJ4ZGEF2T505wXu', 'Abdel-Rahim Anas Bamba Moussa', '0101030303', '$2y$10$kFppQwn.iOr0BEaFC3xKFer6iwgj5rsRx2oqOApJUgQyPbLHam3lW', 'on'),
(9, '332VliWlbStlO17pZhFk', 'tata titi', '0909999998', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'on'),
(10, 'MqKUGSYcdNd2HkVoepJ7', 'Abdel-Rahim Anas Bamba Moussa', '0606040404', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'on'),
(11, '6d26e032b22463d038e3', 'kadhy diabate', '2250506667694', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(12, '9ab15cc3265618b93af9', 'kadhy diabate', '0506667694', '8cb2237d0679ca88db6464eac60da96345513964', 'on'),
(13, 'f2c2e619c2f80693567c', 'kadhy diabate', '0022507878563', 'dc4dd44d3465997a4a04fd070df0bf24b75f9cff', 'on'),
(14, 'ae564c2eb05172ea029e', 'kadhy diabate', '2250101200101', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'on'),
(15, '8da2b7aa1e28a2eab38d', 'MARIA DIABATE', '2252020102020', '85568b20c3315286c4dfebb330b25146f92bed66', 'on'),
(16, '32eb61b7d4289da6bb7d', 'MARIA DIABATE', '2251212121212', '7b52009b64fd0a2a49e6d8a939753077792b0554', 'on'),
(17, '94c1e84e2f0d3cf281b6', 'MIA', '2250120304050', '6f0179c78c19c896abf478785283768080523714', 'on'),
(18, '1c13ef582144b7066f95', 'MARIA DIABA', '2250708941033', '1966e694bad90686516f99cdf432800fdca39290', 'on'),
(19, 'e6572d1b7f75cf2d0dc3', 'LIA', '2250708823641', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(20, '69ff2c47f90d1a262f1f', 'NINI', '2250140402040', '85568b20c3315286c4dfebb330b25146f92bed66', 'on'),
(21, '3fdacf58bc3e22c460da', 'kadhy diabate', '2251020102010', 'b1d5781111d84f7b3fe45a0852e59758cd7a87e5', 'on'),
(22, 'f990f0339f3e3c81503c', 'ATI', '2252020202020', 'fea7f657f56a2a448da7d4b535ee5e279caf3d9a', 'on'),
(23, '72ce83d9bf5cd4ecd457', 'TIAS', '2250102030405', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'on'),
(24, '3602fc2433f369b2d06b', 'ok', '2250908070605', '7e79a3af2634de6635e59c9404d251b3955d39f9', 'on'),
(25, 'cb48bba3c3222090d92f', 'sia mia', '2251213141516', '011c945f30ce2cbafc452f39840f025693339c42', 'on'),
(26, '900712f953c0f4a2a8c9', 'mimi', '2250506070809', 'd435a6cdd786300dff204ee7c2ef942d3e9034e2', 'on'),
(27, '6fc7d7ac9ad67c258310', 'TY', '2250304050607', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'on'),
(28, '7527ff746ef305e07e9a', 'MARIA DIABATE', '2250203040506', 'f0ee73df9003ca43916e249abfbefc5a983b346f', 'on'),
(29, '4fc896941e9e9fe09802', 'pi', '2251314151617', '445cd2fd3273962bdf09425109a2d09f7170e837', 'on'),
(30, '1720d8a5426f36a6ec9f', 'KIAC', '2253040506070', '445cd2fd3273962bdf09425109a2d09f7170e837', 'on'),
(31, '6c50ae49dce03274f8ee', 'MIA', '2259080706050', '445cd2fd3273962bdf09425109a2d09f7170e837', 'on'),
(32, '8cdd679ec1e9fb7953d3', 'MIK', '2250506060606', '445cd2fd3273962bdf09425109a2d09f7170e837', 'on'),
(33, '000045f934b1bb005633', 'chisty', '2250103059242', '445cd2fd3273962bdf09425109a2d09f7170e837', 'on'),
(34, '5cae5b3b13a753cee239', 'jd', '2252010202020', '$2y$10$7N1wui9HF2FYND9FLwSiJ.wSwmxNgg222VYaRyXM1nD8sWFzr/DHW', 'on'),
(35, 'd31a1b73dcc430931311', 'yannick banga', '2250768118988', '76fbeec969ca5e8c53c03baa1a8cd03f1007b16f', 'on'),
(36, 'ad92566c2140b996123f', 'yann', '2251234567890', '$2y$10$mPIwDFr1Qmsoo.V9vJTqj.d/uXH0asucE495IaEFwYdOxlMaHuwfe', 'on'),
(37, '2a8d6dc7ad800151d84f', 'anvoh', '2250789456123', '$2y$10$5fFdrvqaVdU.DU4WORHR5eVKIzya4H9SRWLZSjORE2QITSHdvbdty', 'on'),
(38, 'e3bcdbcd2594f8fdb268', 'KAH', '2253030103030', '$2y$10$qp7ER9hSak./IXCii4mTfOllXx9OqkMXcmiZuglSiZzN.jaxKoR1i', 'on'),
(39, '32015980d8788f4bc550', 'KA', '2250787856388', '$2y$10$3dE4cHo1CHXzv/ROk7lTkOz4wkLmWPgOis87xozWCZhzFnb3SD49K', 'on'),
(40, 'd79104a4884e514785d5', 'LK', '2250787856385', '$2y$10$.1.gq.MCIO5O9Q1uwIED9ufGwdOELU.DlLmlye691i0YY0FlOu0Ra', 'on'),
(41, 'b2bef1a8fb4ba571851c', 'Goulizan Racine', '2250748004319', '$2y$10$k8Ti0RWxTr7/bLn3cQNGP.Sg9m5Ph5ArrUf4hX2HVZYDG.M0FD24q', 'on'),
(42, '61367b10f5097e7e3abd', 'kia', '2250787856189', '$2y$10$jI1pKIZJwd5Hv7LAoJ2ODOjyEFUZvfiRiq63tGkh.GZYiB9gPNzcC', 'on'),
(44, 'b93b5db25daaf9c461ec', 'Racine Yao', '+2250748004319', '$2y$10$BIki07acS9q5MRczyMXdZeLP9xsN1HCVCWgjqqEAsxgZVA7B70IKG', 'on'),
(45, '67d68c2cee18e0b266cd', 'Adjoua Dominique', '2250101010101', '$2y$10$yG.909PtDCxeSmFT4z3na.VrPQRcju33S/xaqMiL2gFnwmjcw4sMK', 'on');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactez_nous`
--
ALTER TABLE `contactez_nous`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactez_nous_arti`
--
ALTER TABLE `contactez_nous_arti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inscri_artisan`
--
ALTER TABLE `inscri_artisan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactez_nous`
--
ALTER TABLE `contactez_nous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactez_nous_arti`
--
ALTER TABLE `contactez_nous_arti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inscri_artisan`
--
ALTER TABLE `inscri_artisan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

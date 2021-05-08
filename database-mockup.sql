-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 08 mai 2021 à 08:59
-- Version du serveur :  10.3.28-MariaDB-cll-lve
-- Version de PHP : 7.3.6

USE mabiofa

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `c1528924c_clients`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(11) NOT NULL,
  `cat_nom` varchar(255) NOT NULL,
  `id_dep` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_cmd` int(11) NOT NULL,
  `cmd_date` datetime NOT NULL,
  `cmd_statut` varchar(255) NOT NULL,
  `id_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commandeskeys`
--

CREATE TABLE `commandeskeys` (
  `id` int(11) NOT NULL,
  `cmd_key` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commandeskeys`
--

INSERT INTO `commandeskeys` (`id`, `cmd_key`, `user_id`) VALUES
(35, '00-42526f626572746f303602', 24);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `id_compte` int(11) NOT NULL,
  `solde` float NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `id_dep` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `elementsCommandes`
--

CREATE TABLE `elementsCommandes` (
  `id_element_cmd` int(11) NOT NULL,
  `id_cmd` int(11) DEFAULT NULL,
  `id_prod` int(11) NOT NULL,
  `quantite` float NOT NULL,
  `prix_total` float NOT NULL,
  `prix_unitaire` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `nom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`nom`, `tel`, `login`, `password`, `id`) VALUES
('robert', '06 93 54 25', 'roberto', '12345', 1),
('ali', 'traore', 'traore@gmail.comm', '23456', 2);

-- --------------------------------------------------------

--
-- Structure de la table `extramenu`
--

CREATE TABLE `extramenu` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `extramenu`
--

INSERT INTO `extramenu` (`id`, `nom`, `prix`, `stock`, `categorie`) VALUES
(2, 'citrone', '200', '24', 'fruits');

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `annee` year(4) NOT NULL,
  `id_rayon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id_film`, `nom`, `type`, `description`, `annee`, `id_rayon`) VALUES
(30, 'Terminator', 'action', 'Film de combat tres tres interessant', 1998, 2),
(31, 'Terminator', 'action', 'Film de combat tres tres interessant', 1998, 2),
(33, 'carlos', 'yembrima', 'pc', 2000, 2);

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `manager`
--

INSERT INTO `manager` (`id`, `nom`, `tel`, `login`, `password`) VALUES
(4, 'administrteur', '06 20 55 08', 'admin', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `newsleter`
--

CREATE TABLE `newsleter` (
  `id` int(11) NOT NULL,
  `mail` varchar(45) NOT NULL,
  `date_heure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `newsleter`
--

INSERT INTO `newsleter` (`id`, `mail`, `date_heure`) VALUES
(1, '0', 'yembrima.bcr@gmail.com'),
(2, '0', 'yembrima.bcr@gmail.com'),
(3, '0', 'yembrima.bcr@gmail.com'),
(4, '0', 'yembrima.bcr@gmail.com'),
(5, '0', 'yembrima.bcr@gmail.com'),
(6, '0', 'yembrima.bcr@gmail.com'),
(7, '0', 'yembrima.bcr@gmail.com'),
(8, '0', 'yembrima.bcr@gmail.com'),
(9, '0', 'adam17.abou@gmail.com'),
(10, '0', 'yembrima.bcr@gmail.com'),
(11, '0', 'yembrima.bcr@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `prod_id` int(11) NOT NULL,
  `prod_nom` varchar(255) NOT NULL,
  `prod_description` text NOT NULL,
  `prod_prix` float NOT NULL,
  `id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rayon`
--

CREATE TABLE `rayon` (
  `id_rayon` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `id_employe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rayon`
--

INSERT INTO `rayon` (`id_rayon`, `intitule`, `description`, `id_employe`) VALUES
(2, 'film', 'gnxmfn', 1);

-- --------------------------------------------------------

--
-- Structure de la table `recharges`
--

CREATE TABLE `recharges` (
  `id_recharge` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `montant` varchar(255) NOT NULL,
  `dateRecharge` varchar(255) NOT NULL,
  `moyen` varchar(255) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `numero` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recharges`
--

INSERT INTO `recharges` (`id_recharge`, `id_user`, `montant`, `dateRecharge`, `moyen`, `statut`, `numero`) VALUES
(1, 24, 'undefined', '21-04-18 a 20:09:26', 'T-Money', 'yes', ''),
(2, 24, 'undefined', '21-04-18 a 20:12:11', 'T-Money', 'yes', ''),
(3, 24, '200', '21-04-18 a 20:12:29', 'T-Money', 'yes', '20993889'),
(4, 24, '200', '21-04-18 a 20:16:51', 'T-Money', 'yes', '20993889'),
(5, 24, '200', '21-04-18 a 20:18:50', 'T-Money', 'yes', '20993889'),
(6, 24, 'undefined', '21-04-18 a 20:19:00', 'FLOOZ', 'yes', '8888888'),
(7, 24, '444', '21-04-18 a 20:19:49', 'FLOOZ', 'yes', '8888888'),
(8, 24, '444', '21-04-18 a 20:20:29', 'FLOOZ', 'yes', '8888888'),
(9, 24, '444', '21-04-18 a 20:20:43', 'FLOOZ', 'yes', '8888888'),
(10, 24, '444', '21-04-18 a 20:23:13', 'FLOOZ', 'yes', '8888888'),
(11, 24, '444', '21-04-18 a 20:23:25', 'T-Money', 'yes', '20993889'),
(12, 24, '444', '21-04-18 a 20:23:49', 'T-Money', 'yes', '20993889'),
(13, 24, '444', '21-04-18 a 20:41:49', 'T-Money', 'yes', '20993889'),
(14, 24, 'undefined', '21-04-18 a 20:42:21', 'T-Money', 'yes', '20993889'),
(15, 24, 'undefined', '21-04-18 a 20:42:34', 'T-Money', 'yes', '20993889'),
(16, 29, 'undefined', '21-04-18 a 20:54:55', 'T-Money', 'NO', '20993889'),
(17, 29, '444', '21-04-18 a 21:01:22', 'T-Money', 'yes', '20993889'),
(19, 22, '100000', '21-04-18 a 21:42:08', 'FLOOZ', 'NO', '92889567'),
(20, 22, '100000', '21-04-18 a 21:59:09', 'T-Money', 'NO', '92889567'),
(21, 22, '10000', '21-04-19 a 07:12:09', 'T-Money', 'NO', '92889567'),
(22, 22, '100000', '21-04-19 a 15:25:22', 'T-Money', 'yes', '92889567'),
(23, 22, '100000', '21-04-20 a 23:17:32', 'T-Money', 'NO', '9875643'),
(24, 22, '100000', '21-04-20 a 23:17:36', 'T-Money', 'NO', '9875643'),
(25, 22, '20000', '21-05-01 a 13:42:08', 'T-Money', 'yes', '92889567');

-- --------------------------------------------------------

--
-- Structure de la table `solomenu`
--

CREATE TABLE `solomenu` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `solomenu`
--

INSERT INTO `solomenu` (`id`, `nom`, `prix`, `stock`, `categorie`) VALUES
(2, 'citrone', '200', '28', 'fruits'),
(3, 'banane', '300', '34', ' fruit'),
(5, 'Mangue', '300', '7', 'Fruits'),
(6, ' citronnelle ', '200', '9 ', 'vÃ©gÃ©taux '),
(7, ' citronnelle ', '200', '9 ', 'vÃ©gÃ©taux '),
(8, 'Fraise', '900', '30', 'Fruits'),
(9, 'Fraise', '900', '30', 'Fruits');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `mot_de_passe` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `civilite` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID`, `username`, `mot_de_passe`, `email`, `birthday`, `civilite`, `adresse`) VALUES
(1, 'robert', 'bimbim', 'bango@gmail.com', '18/09/2000', 'homme', 'sale'),
(2, 'Bangou', '6fb0394b969258c4f33b92bbe8c601462bb5455b', 'bangou.yembrima@essti.ac.ma', '1/Janvier/1988', 'Homme', 'Rabat,MAROC'),
(11, 'Jonas', '8625edf98728fb1e82d04574ede9b17756173c0c', 'bangou.yembrima@essti.ac.ma', '1/Janvier/1988', ' ', 'sale'),
(12, 'Jonas', '8625edf98728fb1e82d04574ede9b17756173c0c', 'bangou.yembrima@essti.ac.ma', '1/Janvier/1988', ' ', 'sale'),
(13, 'Jonas', '8625edf98728fb1e82d04574ede9b17756173c0c', 'bangou.yembrima@essti.ac.ma', '1/Janvier/1988', ' ', 'sale'),
(14, 'anna', '8625edf98728fb1e82d04574ede9b17756173c0c', 'bangou.yembrima@essti.ac.ma', '1/Janvier/1988', ' ', 'Rabat,MAROC'),
(15, 'Bangou', '8625edf98728fb1e82d04574ede9b17756173c0c', 'bangou.yembrima@essti.ac.ma', '1/Janvier/1988', ' ', 'Rabat,MAROC'),
(16, 'Bangou', '8625edf98728fb1e82d04574ede9b17756173c0c', 'bangou.yembrima@essti.ac.ma', '1/Janvier/1988', ' ', 'Rabat,MAROC'),
(17, 'prisca', '680254bad1d7ca0d65ec46aaa315d363abf6a50a', 'bangou.yembrima@essti.ac.ma', '1/Janvier/1988', ' ', 'Rabat,MAROC'),
(18, 'nougat', '2aa0d7e548f27b9ddf77f2ec669f1f0def48b12b', 'nougat@essti.ac.ma', '1/Janvier/1988', ' ', 'Rabat,MAROC'),
(19, 'yembrima', 'df57de7a8da91e2ad914f1d803e475a474ace6a7', 'anna.yembrima@essti.ac.ma', '1/Janvier/1988', ' ', 'Rabat,MAROC'),
(20, 'brice', '8cb2237d0679ca88db6464eac60da96345513964', 'bangou.yembrima@essti.ac.ma', '1/Janvier/1988', ' ', 'Rabat,MAROC');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `identifiant` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot de passe` varchar(255) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `commune` varchar(255) NOT NULL,
  `quartier` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `date_d_inscription` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `identifiant`, `email`, `mot de passe`, `telephone`, `commune`, `quartier`, `rue`, `statut`, `date_d_inscription`, `token`, `key`) VALUES
(5, 'Bangou', 'yembrima', 'doctor', 'yembrima.bcr@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '+22660965139', 'Rabat', 'Doha', '17', 'a deja lu ', '17-01-21,10-55-23', '605f6d58368ee', ''),
(7, 'Kantchoa', 'ThÃ©rÃ¨se', 'Maman', 'reineyarbondja@gmail.com', '3d13275432ad0315f66a661e435e7b79a6ba221b', '91924796', 'LomÃ©', 'TÃ©lÃ©ssu', '', 'non lu', '17-01-21,11-30-30', '0', ''),
(8, 'ADAM', 'Abou', 'Sandra17@Fati', 'adam17.abou@gmail.com', 'ab0916b67e0b848152c853f11260dfd99d754572', '+22892889567', 'AgoÃ¨ nyivÃ©', 'LogopÃ©', 'Rue des pommiers', 'a deja lu ', '18-01-21,04-28-34', '60412066758d0', ''),
(9, 'YARBONDJA ', 'TiÃ©bimpo ', '1998', 'Leroiyarbondja21@gmail.com ', '3c4a80dbdfac57d174d1cab8d11d03ad91888820', '70215920', 'AgoÃ¨', 'LogopÃ© ', '', 'non lu', '20-01-21,11-23-33', '0', ''),
(10, 'YARBONDJA ', 'TiÃ©bimpo ', 'RCLYDIA', 'Leroiyarbondja21@gmail.com ', '3c4a80dbdfac57d174d1cab8d11d03ad91888820', '70215920', 'AgoÃ¨', 'LogopÃ© ', '', 'non lu', '20-01-21,11-26-32', '0', ''),
(12, 'PILAZI', 'Lidaou', 'Fatly', 'lydiapilazi13@gmail.com', '9147343d9851d9a4727fab30d6594b416109e55a', '96495871', 'AgoÃ¨ assiyeye', 'Anokui', '', 'a deja lu ', '21-01-21,06-39-42', '0', ''),
(13, 'KABISSA', 'KIBALO', 'Kab5527', 'kabissaalain1998@gmail.com', '23a36b475fa8dfafdc38fe16b31d6fa81ff49f25', '+212654116106', 'Rabat', 'Agdal', 'Rue ouest Ziz', 'a deja lu ', '21-01-21,08-47-22', '606ccf75b9603', ''),
(14, 'Kolani ', 'Dameyable', 'Kolani18', 'kolanialphonse@gmail.com ', '1782dd9473a725974ccfec7fee3eefdc2b5b7427', '97678227', 'LomÃ©', 'Agbalepedo ', '', 'a deja lu ', '21-01-21,09-00-47', '0', ''),
(15, 'Kamanpene', 'Labatibe Martin', '91986680', 'Kamanpenemartin@gmail.com', 'c0fd83f3094096a75e8d1efcacc148891e72e88e', '91986680', 'LomÃ©', 'Agbalepedo', '', 'non lu', '21-01-21,09-05-37', '0', ''),
(17, 'SEDIA', 'Ruben', 'Dozo', 'Leroiyarbondja21@gmail.com ', '7c222fb2927d828af22f592134e8932480637c0d', '90 93 78 40', 'Cotonou', 'Cocotomey ', '', 'a deja lu ', '30-01-21,12-03-52', '0', ''),
(18, 'YARBONDJA ', 'David', 'Leroi', 'Leroiyarbondja21@gmail.com ', '7c222fb2927d828af22f592134e8932480637c0d', '90 93 78 40', 'Cotonou', 'Cocotomey ', '', 'a deja lu ', '30-01-21,12-05-11', '0', ''),
(19, 'KABISSA', 'KIBALO', 'KIBALO ALAIN KABISSA', 'KIBALO ALAIN KABISSA', 'ace60c2d9662c48f3b4f72ed3bdff8805b575127', '+212654116106', 'Rabat', 'Agdal', 'Rue ouest Ziz', 'a deja lu ', '30-01-21,10-20-26', '0', ''),
(22, 'Adam', 'Abou', 'admin', 'adam17.abou@gmail.com', '56c4feb08716340b299d058888221d5a727ec698', '92889567', 'Agoe nyive', 'Logope', 'Pommier', 'a deja lu ', '3-02-21,07-52-53', '60412066758d0', ''),
(23, 'Malick', 'david', '1mda', 'channel mali la gmail.com', '60549134b0a667c3c016a5b5557ea2f32845a58d', '97455456', 'MÃ¨notin', 'catimini', '', 'a deja lu ', '10-02-21,01-27-04', '0', ''),
(24, 'BANGOU', 'yembrima', 'Roberto06', 'anna.yembrima@essti.ac.ma', '8cb2237d0679ca88db6464eac60da96345513964', '71687730', 'Sale', 'Doha', '12', 'non lu', '15-02-21,08-16-21', '0', ''),
(25, 'Carlos', 'Carlos', 'Carlos', 'Carlos@carlos', '8cb2237d0679ca88db6464eac60da96345513964', '344775533', 'Rrrr', 'Ggg', 'Hheee', 'non lu', '28-03-21,08-12-24', '', ''),
(26, 'hgfkuyjh', 'mhjg,jm', 'jkb.b', 'anna.yembrima@essti.ac.ma', '8cb2237d0679ca88db6464eac60da96345513964', 'kj.bjk', 'bkj', 'bkj.', 'vkfvyujk', 'non lu', '3-04-21,04-24-27', '', ''),
(27, 'ubkj', 'jbh,nm', 'kbj', 'anna.yembrima@essti.ac.ma', '8cb2237d0679ca88db6464eac60da96345513964', 'uyjyh', 'bhjkbh', 'ubhj', 'uhbjk', 'non lu', '3-04-21,04-26-49', '', ''),
(28, 'mn', 'm', 'kjn,m', 'anna.yembrima@essti.ac.ma', '8cb2237d0679ca88db6464eac60da96345513964', 'kjjbmn', '.ijkb', 'kbj,', 'k,mn', 'non lu', '3-04-21,04-30-20', '', ''),
(29, 'tiendrebeogo', 'robert', 'Roberto07', 'anna.yembrima@essti.ac.ma', '7c4a8d09ca3762af61e59520943dc26494f8941b', '71687730', 'nnnnn', 'ubhj', 'uhbjk', 'a deja lu ', '18-04-21,10-53-13', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`),
  ADD KEY `id_dep` (`id_dep`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_cmd`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `commandeskeys`
--
ALTER TABLE `commandeskeys`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cmdforeignkey` (`user_id`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id_compte`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`id_dep`);

--
-- Index pour la table `elementsCommandes`
--
ALTER TABLE `elementsCommandes`
  ADD PRIMARY KEY (`id_element_cmd`),
  ADD KEY `id_cmd` (`id_cmd`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `extramenu`
--
ALTER TABLE `extramenu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Index pour la table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsleter`
--
ALTER TABLE `newsleter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`prod_id`);

--
-- Index pour la table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id_rayon`);

--
-- Index pour la table `recharges`
--
ALTER TABLE `recharges`
  ADD PRIMARY KEY (`id_recharge`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `solomenu`
--
ALTER TABLE `solomenu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_cmd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandeskeys`
--
ALTER TABLE `commandeskeys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `id_compte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `id_dep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `elementsCommandes`
--
ALTER TABLE `elementsCommandes`
  MODIFY `id_element_cmd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `extramenu`
--
ALTER TABLE `extramenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `newsleter`
--
ALTER TABLE `newsleter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rayon`
--
ALTER TABLE `rayon`
  MODIFY `id_rayon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `recharges`
--
ALTER TABLE `recharges`
  MODIFY `id_recharge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `solomenu`
--
ALTER TABLE `solomenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`id_dep`) REFERENCES `departements` (`id_dep`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `utilisateurs` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `commandeskeys`
--
ALTER TABLE `commandeskeys`
  ADD CONSTRAINT `cmdforeignkey` FOREIGN KEY (`user_id`) REFERENCES `utilisateurs` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Contraintes pour la table `compte`
--
ALTER TABLE `compte`
  ADD CONSTRAINT `compte_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `elementsCommandes`
--
ALTER TABLE `elementsCommandes`
  ADD CONSTRAINT `elementsCommandes_ibfk_1` FOREIGN KEY (`id_cmd`) REFERENCES `commandes` (`id_cmd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `elementsCommandes_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `produits` (`prod_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `etranger` FOREIGN KEY (`id_rayon`) REFERENCES `rayon` (`id_rayon`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `rayon`
--
ALTER TABLE `rayon`
  ADD CONSTRAINT `rayon_ibfk_1` FOREIGN KEY (`id_employe`) REFERENCES `employe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recharges`
--
ALTER TABLE `recharges`
  ADD CONSTRAINT `rechforeignkey` FOREIGN KEY (`id_user`) REFERENCES `utilisateurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

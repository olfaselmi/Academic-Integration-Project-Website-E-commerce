-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 22 mai 2020 à 19:08
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom_categorie`) VALUES
(2, 'gâteaux'),
(4, 'Macarons'),
(1, 'Patisserie Tunisienne'),
(30, 'Petit fours'),
(3, 'Salés');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `image_produit` varchar(255) NOT NULL,
  `nom_produit` varchar(255) NOT NULL,
  `prix_produit` int(11) NOT NULL,
  `qt_produit` int(11) NOT NULL,
  `nom_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `image_produit`, `nom_produit`, `prix_produit`, `qt_produit`, `nom_categorie`) VALUES
(1, 'big-4349e1a03f5746fe9db1523d83.jpg', 'Mixed Box of 6', 40, 100, 'Macarons'),
(2, 'big-2f86641b023940ebfea58f3add.jpg', 'Thank-you Box of 12', 60, 100, 'Macarons'),
(3, 'chausson-poulet-capre-harissa.jpg', 'Chausson-poulet', 80, 100, 'Salés'),
(4, 'pizza-plate.jpg', 'Pizza-plate', 80, 100, 'Salés'),
(5, 'carrement-chocolat-.jpg', 'Carrément-chocolat', 100, 100, 'gâteaux'),
(6, 'pink-cheese-cake-.jpg', 'Pink-cheese-cake', 100, 100, 'gâteaux'),
(7, 'samsa-noisette.jpg', 'Samsa-noisette', 100, 100, 'Patisserie Tunisienne'),
(8, 'bourgeoise-noix.jpg', 'Bourgeoise-noix', 150, 100, 'Patisserie Tunisienne'),
(11, 'unnamed_1_4.jpg', 'mixed-flavor-petit-fours', 70, 20, 'Petit fours'),
(77, 'pralin.jpg', 'Pralin', 54, 85, 'gâteaux');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`nom_categorie`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `id_categorie` (`nom_categorie`),
  ADD KEY `id_categorie_2` (`nom_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`nom_categorie`) REFERENCES `categorie` (`nom_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 12 août 2023 à 19:33
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crudbd`
--

-- --------------------------------------------------------

--
-- Structure de la table `groupe3`
--

CREATE TABLE `groupe3` (
  `id` int(100) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `image` varchar(2048) DEFAULT NULL,
  `dep` varchar(255) NOT NULL,
  `classe` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `groupe3`
--

INSERT INTO `groupe3` (`id`, `name`, `image`, `dep`, `classe`, `email`) VALUES
(7, 'Bella', 'bella.jpg', 'Eit1', 'Dwm1', 'aissatoubella713@gmail.com'),
(8, 'hadji', 'hadji.jpg', 'Eit2', 'Dwm2', 'hadji@gmail.com'),
(10, 'alpha', 'alpha.jpg', 'Eit4', 'Dwm4', 'alpha@gmail.com'),
(12, 'Jolie', 'th.jpg', 'Eit6', 'Dwm6', 'jo@mail.com'),
(13, 'Ali', 'alpha.jpg', 'ITI', 'DWM', 'ali@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groupe3`
--
ALTER TABLE `groupe3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groupe3`
--
ALTER TABLE `groupe3`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

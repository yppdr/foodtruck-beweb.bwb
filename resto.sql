-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 16 Mai 2018 à 17:08
-- Version du serveur :  5.7.22-0ubuntu0.16.04.1
-- Version de PHP :  7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `resto`
--

-- --------------------------------------------------------

--
-- Structure de la table `lo`
--

CREATE TABLE `lo` (
  `id` int(11) NOT NULL,
  `jesuisla` date NOT NULL,
  `username` varchar(25) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lo`
--

INSERT INTO `lo` (`id`, `jesuisla`, `username`, `content`) VALUES
(30, '2018-05-11', 'Xxx_JK34_xxX', 'Je suis un joli com sur la page'),
(31, '2018-05-11', 'retwdrgd', 'zqzdqzdq'),
(32, '2018-05-11', 'Xxx_JK34_xxX', 'Je suis un joli com sur la pageqzdqzd'),
(33, '2018-05-11', 'Xxx_JK34_xxX', 'aaaaaaa'),
(34, '2018-05-16', 'admin', 'Je suis un joli com sur la page'),
(35, '2018-05-16', 'admin', 'Yo c\'est le fun en vrai ce site ');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`) VALUES
(1, 'test', '$2y$12$9LCeQ4bnga9QJPfTLThBUe1ADiMgX6SlZIxbU3vqfRLlmy9NWnSWC', 0),
(2, 'admin', '$2y$12$/PFaLOytRRZjf12Y9/2hX.ioChL6r80BXgP1x8rKpors1zKMX5PI6', 1),
(3, 'yolo', '$2y$12$sYhz1xOlA3zI6c9nMk/9dOnq73ng4Op9Ay/TRk4iDdNWCxfGUiwDi', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `lo`
--
ALTER TABLE `lo`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `lo`
--
ALTER TABLE `lo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

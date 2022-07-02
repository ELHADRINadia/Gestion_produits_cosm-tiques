-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 juil. 2022 à 10:28
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fill_rouge`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(83, 'HGHGJ'),
(92, 'knknk');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `id_user`, `id_product`, `quantity`) VALUES
(23, 56, 29, 1),
(26, 56, 31, 1),
(27, 56, 32, 1),
(28, 56, 31, 1),
(29, 56, 35, 1),
(30, 56, 34, 1),
(31, 56, 35, 1),
(43, 61, 33, 1),
(44, 61, 34, 1),
(45, 61, 35, 1),
(46, 61, 34, 1),
(48, 63, 29, 1),
(49, 63, 31, 1),
(50, 63, 32, 1);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(25) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `category` varchar(25) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `quantity`, `category`, `details`) VALUES
(29, 'Alisa Mcdowell', '629', '62ae42c524a896.60753475.jpg', '828', 'huiles', 'Provident quis incidunt magni mollitia'),
(31, 'Amery Aguirre', '5', '62b10a7baff645.19390903.jpg', '999', 'creme', 'Ullamco laboriosam in nisi nihil delectus blanditiis laborum In rerum nostrum est'),
(32, 'Aristotle Marshall', '801', '62b10af87cb847.01581262.jpg', '731', 'creme', 'Vero rerum fugiat id optio omnis vitae dolor'),
(33, 'Marah Moody', '419', '62b10b484e5ed1.84690078.jpg', '496', 'huiles', 'Sequi ut ipsum voluptatem molestiae et illum nihil doloribus quas rerum deserunt quia rerum eveniet lorem sapiente'),
(34, 'Jared Baxter', '650', '62b10b82064d49.80919925.jpg', '225', 'huiles', 'In voluptatibus pariatur Adipisicing eiusmod officiis hic dolore aliquid'),
(35, 'Conan Medina', '156', '62b10bf28690b5.13490481.jpg', '326', 'huiles', 'Ex voluptate repudiandae ipsum non minim elit sint est');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(25) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(25) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `First_name`, `Last_name`, `phone`, `email`, `password`, `role`) VALUES
(53, 'nadia', 'ELhadri', '0634793468', 'nadiaelhadri99@gmail.com', 'nadia@nadia', 'admin'),
(56, 'Hollee', 'Craft', '566767676767', 'dykus@mailinator.com', 'Pa$$w0rd!', 'user'),
(60, 'Halla', 'Oneal', '72', 'nudosuvi@mailinator.', 'Pa$$w0rd!', 'user'),
(61, 'Marny', 'Zimmerman', '78', 'rytyfucoci@mailinator.com', 'Pa$$w0rd!', 'user'),
(62, 'saida', 'moussahif', '634793468', 'saida@gmail.com', 'saida@saida', 'user'),
(63, 'nadia', 'elhadri', '634793468', 'nadia@yc.com', 'nadia', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_product` (`id_product`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

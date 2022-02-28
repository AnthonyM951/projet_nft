-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 28 fév. 2022 à 23:44
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
-- Base de données : `gynft_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat_db`
--

CREATE TABLE `chat_db` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `message` text NOT NULL,
  `date_message` datetime NOT NULL,
  `id_receiver` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `chat_db`
--

INSERT INTO `chat_db` (`id`, `id_user`, `message`, `date_message`, `id_receiver`) VALUES
(52, 5, 'dezde', '2022-02-12 15:07:46', 0),
(53, 4, 'dqd', '2022-02-12 15:08:14', 0),
(54, 4, 'ddefefce', '2022-02-12 15:08:20', 0),
(55, 4, 'fcez', '2022-02-12 15:08:20', 0),
(56, 4, 'fces', '2022-02-12 15:08:21', 0),
(57, 5, ',;njj,', '2022-02-12 15:10:38', 0),
(58, 5, 'jnjn,n', '2022-02-12 15:10:45', 0),
(59, 4, 'z', '2022-02-12 15:14:00', 0),
(60, 4, 'fefe', '2022-02-12 15:14:08', 0),
(61, 4, 'fczedce', '2022-02-12 15:14:09', 0),
(62, 4, 'fefcedfc', '2022-02-12 15:14:09', 0),
(63, 4, 'fcesfce', '2022-02-12 15:14:10', 0),
(64, 5, 'csdq', '2022-02-12 15:16:00', 0),
(65, 5, 'fddcs', '2022-02-12 15:17:45', 0),
(66, 5, 'cddw', '2022-02-12 15:18:12', 0),
(67, 5, 's', '2022-02-12 15:18:25', 0),
(68, 5, 'cdscf', '2022-02-12 15:18:31', 0),
(69, 5, 'cd', '2022-02-12 15:19:18', 0),
(70, 5, 'vf', '2022-02-12 15:20:01', 0),
(71, 5, 'vfdsvds', '2022-02-12 15:20:12', 0),
(72, 5, 'vfd', '2022-02-12 15:20:41', 0),
(73, 5, 'vds', '2022-02-12 15:20:42', 0),
(74, 5, 'vd', '2022-02-12 15:20:43', 0),
(75, 5, 'cdscds', '2022-02-12 15:21:40', 0),
(76, 4, 'frfr', '2022-02-12 15:22:45', 0),
(77, 4, 'defcsfc', '2022-02-12 15:31:46', 0),
(78, 4, 'fcsd', '2022-02-12 15:35:50', 0),
(79, 5, 'fref', '2022-02-12 15:36:24', 0),
(80, 5, 'vrffe', '2022-02-12 15:36:49', 0),
(81, 5, 'fdez', '2022-02-12 15:37:28', 0),
(82, 5, 'fdec', '2022-02-12 15:37:30', 0),
(83, 5, 'de', '2022-02-12 15:38:05', 0),
(84, 5, 'dce', '2022-02-12 15:38:06', 0),
(85, 5, 'cesd', '2022-02-12 15:58:25', 0),
(86, 5, 'excuse me i got a question', '2022-02-12 23:37:22', 0),
(87, 4, 'yes', '2022-02-12 23:38:13', 0),
(88, 4, 'midouch sent bon', '2022-02-12 23:49:56', 0),
(89, 4, 'ftrf', '2022-02-12 23:59:31', 0),
(90, 5, 'prout', '2022-02-13 00:13:00', 0),
(91, 6, 'bgfh', '2022-02-13 01:07:00', 5),
(92, 6, 'dezdd', '2022-02-13 01:07:30', 5),
(93, 6, 'dezrdzer', '2022-02-13 01:10:15', 5),
(94, 5, 'salut le m', '2022-02-13 01:13:36', 6),
(95, 7, 'salut antho', '2022-02-13 01:19:48', 4),
(96, 7, 'salut le A', '2022-02-13 01:29:29', 5),
(97, 7, 'nklnk', '2022-02-13 01:47:16', 4),
(98, 7, 'salut midouch', '2022-02-13 01:53:58', 6),
(99, 4, 'alex c anthony', '2022-02-13 02:03:05', 5),
(100, 4, 'midouch c anthony', '2022-02-13 02:03:25', 6),
(101, 5, 'wsh mon gars trql c alex', '2022-02-13 02:05:09', 4),
(102, 5, 'wshted', '2022-02-13 02:06:28', 7),
(103, 6, 'wsh anthony le plus beau', '2022-02-13 02:07:19', 4),
(104, 6, 'wsh ted mon gated', '2022-02-13 02:08:13', 7),
(105, 4, 'mon gaté ca fait quoi demain', '2022-02-13 19:58:14', 5),
(106, 5, 'vtff', '2022-02-13 19:59:40', 4),
(107, 4, 'wsh mid', '2022-02-13 20:02:03', 6),
(108, 4, 'wsh mon gated', '2022-02-13 20:44:55', 5),
(109, 5, 'wsh', '2022-02-13 20:45:23', 4),
(110, 4, 'google.fr', '2022-02-16 20:49:46', 5),
(111, 4, '&lt;a href=&quot;$0&quot; target=&quot;_blank&quot; title=&quot;$0&quot;&gt;$0&lt;/a&gt;', '2022-02-16 20:56:39', 5),
(112, 4, 'hdged', '2022-02-17 21:15:10', 5),
(113, 4, 'n', '2022-02-27 16:56:54', 4);

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `customer_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `item_number` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `item_price` float(10,2) NOT NULL,
  `item_price_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paid_amount` float(10,2) NOT NULL,
  `paid_amount_currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `stripe_checkout_session_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID_User` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Mail` varchar(60) NOT NULL,
  `Passwd` varchar(200) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_User`, `Username`, `Mail`, `Passwd`, `avatar`) VALUES
(4, 'anthony', 'anthony@gmail.com', '$2y$10$J.ALMGjBHIUXPmi5pWhoOOXIgAdkvW8zGkJMShsJF9veWEqujnWSW', '4.jpg'),
(5, 'alex', 'alex@gmail.com', '$2y$10$fJr1c8DlCG5tcWmFJNIPPuFqr8htk78JVz5JdQg/9NzzFNCajcpxK', '5.jpg'),
(6, 'midouch', 'midouch@gmail.com', '$2y$10$LC49XS1Q/UoaC01rH3NSeuTmS/USdjKwNkL28OBsuQf35RQoGlCcW', ''),
(7, 'ted', 'ted@gmail.com', '$2y$10$0O9MY9oso5cgZoIKdzyB/uCq4WiPQqN4IWjzFmbTYsG/URUMneM5u', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat_db`
--
ALTER TABLE `chat_db`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat_db`
--
ALTER TABLE `chat_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT pour la table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

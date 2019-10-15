-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 15 oct. 2019 à 17:27
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_5`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date_article` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `date_article`, `content`) VALUES
(9, 'Article 1', '2019-10-04', '<p><span style=\"color: #843fa1;\">Croods</span></p>'),
(10, 'Article 1', '2019-10-04', '<p><span style=\"color: #e03e2d;\">Croods</span></p>'),
(11, 'Article 1', '2019-10-06', '<p><span style=\"color: #e03e2d; background-color: #2dc26b;\">Croods</span></p>'),
(12, 'Article & image ', '2019-10-14', '<p>CROODS IMAGE</p>'),
(13, 'Article & image essai 2', '2019-10-14', '<p>mqsldkmklaqsndvqsd</p>');

-- --------------------------------------------------------

--
-- Structure de la table `comments_articles`
--

CREATE TABLE `comments_articles` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `pseudo` varchar(300) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `date_comment` datetime NOT NULL,
  `content` text NOT NULL,
  `signaled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments_articles`
--

INSERT INTO `comments_articles` (`id`, `id_article`, `pseudo`, `mail`, `date_comment`, `content`, `signaled`) VALUES
(9, 10, 'tutu', 'tutu@gmail.com', '2019-10-12 21:44:45', '=df:;nbq=;dnb;,qn:;,dbv', 1);

-- --------------------------------------------------------

--
-- Structure de la table `comments_portraits`
--

CREATE TABLE `comments_portraits` (
  `id` int(11) NOT NULL,
  `id_portrait` int(11) NOT NULL,
  `pseudo` varchar(300) NOT NULL,
  `mail` varchar(300) NOT NULL,
  `date_comment` date NOT NULL,
  `content` text NOT NULL,
  `signaled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments_portraits`
--

INSERT INTO `comments_portraits` (`id`, `id_portrait`, `pseudo`, `mail`, `date_comment`, `content`, `signaled`) VALUES
(1, 4, 'jojo', 'jojo@gmail.com', '2019-10-10', 'test comment portrait ', 1),
(2, 4, 'Koko', 'koko@gmail.com', '2019-10-11', 'test encore et encore', 1),
(3, 4, 'juju', 'juju@gmail.com', '2019-10-12', 'qùldkfjbqmdfnvq', 1);

-- --------------------------------------------------------

--
-- Structure de la table `portraits`
--

CREATE TABLE `portraits` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `date_portrait` date NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `portraits`
--

INSERT INTO `portraits` (`id`, `title`, `date_portrait`, `content`) VALUES
(1, 'Portrait 1', '2019-09-30', '<p>lklklklklklklklklklk</p>'),
(2, 'Portrait 1', '2019-10-03', '<p>sdsdsdsdsdsdsdssdsddsdsds</p>'),
(3, 'Portrait 1', '2019-10-03', '<p><span style=\"color: #e67e23;\">ghghhghghghgghghghghghghghgh</span></p>'),
(4, 'Portrait 1', '2019-10-04', '<p>lklklklklklsldkfghkldfnbkls,dnvkbns:dfkgnbs</p>');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `link`) VALUES
(1, 'Projet d\'étude n°1 OpenClassRooms ', 'Intégrer la maquette d\'un projet de site web pour une agence web. Le mock up et les éléments graphiques sont fournis. Le code sera en HTML et CSS.', 'www.projet-1.pauline-superweb.com'),
(2, 'Projet d\'étude n°2 OpenClassRooms', 'Création d\'un site Wordpress pour l\'office du tourisme de la ville de Toulouse. ', 'www.projet-2.pauline-superweb.com'),
(3, 'Projet d\'étude n°3 OpenClassRooms', 'Créer un site de location de vélo  en temps réel. Vous devez utiliser l\'API JC Decaux pour connaitre toutes les informations relatives aux différentes stations de vélo de la ville de votre choix.\r\nVotre site sera entièrement codé en HTML, CSS et Javascript. \r\nVous devrez intégrer les éléments suivants: un slider actif automatiquement et au clic, une carte intéractive permetttant de choisir une station et de réserver un vélo, créer un formulaire de réservation qui restera en mémoire à l\'aide de Web Storage pour une durée de 20 minutes, un cadre de validation de la réservation avec canvas. ', 'www.projet-3.pauline-superweb.com'),
(4, 'Projet d\'étude n°4 OpenClassRooms', 'Réalisation d\'un blog pour l\'écrivain Jean Forteroche. Jean doit pouvoir publier facilement les chapitres de son nouvel ouvrage et pouvoir gérer les commentaires laissés par ses lecteurs. Il doit avoir accès à un espace administrateur lui permettant de gérer tout cela via un mot de passe. \r\n\r\nVous devrez créer un site codé entièrement en HTML, CSS et PHP, MySQL, la publication des chapitres par l\'auteur se feront en Wiziwig via Tiny MCE. Il pourra également gérer les commentaires publiés par les lecteurs: vérifier les commentaires, recevoir tous les commentaires signalés, les supprimer éventuellement. ', 'www.projet-4.pauline-superweb.com');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `identifiant` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments_articles`
--
ALTER TABLE `comments_articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments_portraits`
--
ALTER TABLE `comments_portraits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portraits`
--
ALTER TABLE `portraits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `comments_articles`
--
ALTER TABLE `comments_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `comments_portraits`
--
ALTER TABLE `comments_portraits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `portraits`
--
ALTER TABLE `portraits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

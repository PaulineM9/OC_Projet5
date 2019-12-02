-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 02 déc. 2019 à 20:38
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
(17, 'Apprendre à se connaître', '2019-10-30', '<p><img src=\"public/images/presentation_article.jpg\" alt=\"article presentation\" width=\"638\" height=\"383\" /></p>\r\n<p>&nbsp;</p>\r\n<h3 class=\"MsoNormal\">Qui suis-je et pourquoi ce blog</h3>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Bonjour &agrave; tous et bienvenue sur le blog de <strong>SUPER&nbsp;!</strong></p>\r\n<p class=\"MsoNormal\">Wouah&nbsp;! C&rsquo;est un grand jour pour moi. Publier mon premier article dans mon propre blog, c&rsquo;est un projet de plusieurs ann&eacute;es qui se r&eacute;alise enfin.</p>\r\n<p class=\"MsoNormal\">J&rsquo;ai longtemps imagin&eacute; comment je pourrai un jour monter ce projet et faire partager mon exp&eacute;rience et mon parcours &agrave; d&rsquo;autres. Et bien aujourd&rsquo;hui ce r&ecirc;ve se r&eacute;alise et je suis tr&egrave;s heureuse de partager avec vous ce premier article.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<h3 class=\"MsoNormal\">Qui suis-je&nbsp;?</h3>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Je suis Pauline, j&rsquo;ai 37 ans et j&rsquo;ai cr&eacute;&eacute; <strong>SUPER&nbsp;!</strong> en f&eacute;vrier 2019 quand j&rsquo;ai voulu me lancer en tant que d&eacute;veloppeur web en freelance.</p>\r\n<p class=\"MsoNormal\">Je suis aussi la maman de deux enfants Gaspard et Suzanne qui ont eux aussi contribu&eacute; &agrave; la naissance de ce projet, &agrave; leur fa&ccedil;on&hellip; et qui occupent une grande partie de mes journ&eacute;es&nbsp;!</p>\r\n<p class=\"MsoNormal\">En fait, pour r&eacute;sumer un peu les choses, je suis une grande passionn&eacute;e. J&rsquo;ai toujours aim&eacute; apprendre, d&eacute;couvrir des domaines tr&egrave;s divers, travailler dans des univers diff&eacute;rents et partager avec de nouvelles personnes chaque jour. Du coup, mon parcours professionnel est assez &eacute;clectique. Attention je commence : apr&egrave;s un bac &eacute;co (oui le truc de vieux qui n&rsquo;existe plus) j&rsquo;ai fait des &eacute;tudes de stylisme &agrave; Paris puis je suis devenue brodeuse et styliste dans la Haute Couture. A ce moment-l&agrave; je r&eacute;alisais mon premier grand r&ecirc;ve. Le r&ecirc;ve s&rsquo;est transform&eacute; en cauchemar quand j&rsquo;ai subi du harc&egrave;lement moral &agrave; mon travail dans une maison de HC. Une ann&eacute;e de calvaire puis j&rsquo;ai tout plaqu&eacute;. Deux semaines plus tard, je me lan&ccedil;ais dans la production audiovisuelle sur une &eacute;mission politique avec Laurence Ferrari et sur une &eacute;mission de polar&nbsp;avec Thomas Hugues. Je n&rsquo;y connaissais absolument rien et je ne les remercierai jamais assez de m&rsquo;avoir fait confiance et de m&rsquo;avoir ouvert les portes de ce m&eacute;tier incroyable. J&rsquo;ai fait des tournages, de la voice-over, du plateau, j&rsquo;ai fait du cadre, du montage&hellip; j&rsquo;ai beaucoup ri, j&rsquo;ai aussi pleur&eacute; un peu. Mais surtout j&rsquo;ai appris la vie. Une exp&eacute;rience de dingue qui a dur&eacute; sept ans. Puis j&rsquo;en ai eu assez de la vie parisienne alors j&rsquo;ai pris mon baluchon et direction Lyon pour monter&hellip; un restaurant avec mon fr&egrave;re ! L&agrave; aussi j&rsquo;ai touch&eacute; &agrave; tout : la cuisine, la com., la compta&hellip; ce furent les trois ann&eacute;es les plus dures de ma vie mais les plus riches aussi humainement. Puis j&rsquo;ai franchi le cap de la maternit&eacute; et j&rsquo;ai d&eacute;cid&eacute; de me mettre au vert &agrave; la campagne avec mon mini-moi et mon amoureux. Direction les Dombes. Et c&rsquo;est l&agrave; que j&rsquo;ai d&eacute;cid&eacute; de me former au d&eacute;veloppement web &agrave; distance, tout en faisant un deuxi&egrave;me b&eacute;b&eacute; et en me lan&ccedil;ant en freelance&hellip; oui je sais &ccedil;a fait beaucoup. L&agrave; aussi je n&rsquo;y connaissais absolument rien en informatique mais j&rsquo;aime la communication et ce n&rsquo;&eacute;tait pas si incoh&eacute;rent avec mon m&eacute;tier pr&eacute;c&eacute;dent. Du coup j&rsquo;ai appris le code et je me suis lanc&eacute;e.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<h3 class=\"MsoNormal\">Pourquoi SUPER&nbsp;!?</h3>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Bah parce que c&rsquo;est une super aventure. Je ne dis pas que c&rsquo;est facile tous les jours. On aura d&rsquo;ailleurs largement l&rsquo;occasion d&rsquo;en reparler puisque c&rsquo;est tout l&rsquo;objet de ce blog. Mais je suis maman &agrave; temps plein et je peux en profiter parce que je travaille comme je veux. Il y a aussi des al&eacute;as &agrave; cela et on aura d&rsquo;autres occasions d&rsquo;en parler. Mais la reconversion et l&rsquo;entreprenariat des femmes, vous l&rsquo;aurez compris c&rsquo;est &ccedil;a mon objectif &agrave; travers le blog <strong>SUPER !</strong></p>\r\n<p class=\"MsoNormal\">Comment &ccedil;a marche&nbsp;?</p>\r\n<p class=\"MsoNormal\">Tous les mois, je publierai un article sur la reconversion et un portrait.</p>\r\n<p class=\"MsoNormal\">L&rsquo;article abordera diff&eacute;rents points sur la reconversion, pas que celle des femmes hein&nbsp;! mais sera surtout ax&eacute; sur la possibilit&eacute; de cr&eacute;er son entreprise tout en ayant une vie sociale, une vie familiale ou une vie tout court. Ce sera aussi l&rsquo;occasion de partager avec vous mes exp&eacute;riences, de vous donner de bons conseils, de bons tuyaux. Je publierai &eacute;galement un portrait par mois. Ce portrait sera bien s&ucirc;r principalement ax&eacute; sur une femme entrepreneur mais je ne m&rsquo;interdis pas de m&rsquo;int&eacute;resser un jour &agrave; vous messieurs. Ce portrait sera une fa&ccedil;on de vous faire d&eacute;couvrir des parcours de vie, des challenges, des emmerdes aussi, des gal&egrave;res. En bref, je veux vous parler de la vraie vie de l&rsquo;entreprenariat, pas celle que l&rsquo;on voit trop souvent sur les r&eacute;seaux sociaux ou dans les magasines avec des filles belles, bien foutues, mamans parfaites et brillantes avec 6 millions de followers sur Instagram et qui nous disent toute la journ&eacute;e qu&rsquo;elle boivent du th&eacute; apr&egrave;s leur s&eacute;ance de yoga entre deux rendez-vous. Attention je ne me moque pas des gens qui font du yoga et qui boivent du th&eacute;, je suis moi-m&ecirc;me une adepte des deux mais plut&ocirc;t dans la version cheveux sales en pyjama le dimanche matin avec le chien et les deux enfants &eacute;tal&eacute;s sur mon tapis et <em>Pierre et le Loup</em> (que l&rsquo;on a d&eacute;j&agrave; &eacute;cout&eacute; six fois en fond sonore).</p>\r\n<p class=\"MsoNormal\">Ici on va parler de la vraie vie des entrepreneurs.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Et bien s&ucirc;r vous pourrez ajouter vos commentaires ou me poser des questions, me dire ce qui a plu, mis en col&egrave;re, remis en question&hellip; Je vais tenter de r&eacute;pondre comme il se doit.</p>\r\n<p class=\"MsoNormal\">Vous pourrez &eacute;galement me suivre sur les r&eacute;seaux sociaux&nbsp;: Facebook, Instagram, Linkedin et Github pour ceux qui aiment la Tech.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Voil&agrave; pour les pr&eacute;sentations. J&rsquo;esp&egrave;re vous retrouver tr&egrave;s vite sur mon site <strong>SUPER !</strong>, sur le blog <strong>SUPER !</strong> et surtout n&rsquo;oubliez pas de partager sur les r&eacute;seaux sociaux !</p>\r\n<p>&nbsp;</p>');

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
(10, 17, 'Jane', 'jane@gmail.com', '2019-10-30 15:04:23', 'Bravo pour ce premier article et à très vite pour d\'autres lectures. J\'ai hâte!', 1),
(11, 17, 'koko', 'koko@gmail.com', '2019-11-27 21:29:35', 'C\'est super beau comme histoire! Merci!', 1),
(12, 17, 'Jojo', 'jojo@gmail.com', '2019-12-02 18:20:04', 'C\'est vraiment super nul ce blog!', 1);

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
(2, 7, 'Jojo', 'jojo@gmail.com', '2019-11-06', 'J\'adore ce nouveau blog. Hâte d\'en découvrir plus. ', 1),
(3, 7, 'Ken', 'ken@gmail.com', '2019-11-06', 'Super portrait! Merci!', 1),
(6, 7, 'Jade', 'jade@gmail.com', '2019-11-29', 'Merci pour ce beau récit!', 1);

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
(7, 'Emilie et la Ferme d\'Alcas', '2019-10-30', '<p><img src=\"public/images/image_portrait_1.gif\" alt=\"\" width=\"400\" height=\"305\" /></p>\r\n<p class=\"MsoNormal\"><strong>La Ferme d&rsquo;Alcas.</strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Pour ce premier portrait je vais vous parler d&rsquo;une personne de c&oelig;ur.</p>\r\n<p class=\"MsoNormal\">Avec Emilie, on se connait depuis qu&rsquo;on a 12 ans. On a fait le coll&egrave;ge et le lyc&eacute;e ensemble, puis nos chemins se sont s&eacute;par&eacute;s. On s&rsquo;est retrouv&eacute;es quelques ann&eacute;es plus tard et depuis, on ne se l&acirc;che plus.</p>\r\n<p class=\"MsoNormal\">Emilie est de ces personnalit&eacute;s brillantes qui ne se font jamais remarquer. Elle n&rsquo;&eacute;tait pas la coqueluche du lyc&eacute;e, ni la miss toujours &agrave; la mode. Emilie, a toujours &eacute;t&eacute; la meuf la plus intelligente en toute simplicit&eacute;. En troisi&egrave;me elle voulait &ecirc;tre pr&eacute;f&egrave;te, elle voulait faire Kh&acirc;gne et Hypokh&acirc;gne. Elle avait la niaque.</p>\r\n<p class=\"MsoNormal\">Elle a eu mille vies Emilie. Je voudrai vous parler de son parcours et de ce qui l&rsquo;a amen&eacute;e &agrave; faire vivre aujourd&rsquo;hui la Ferme d&rsquo;Alcas avec Alexandre, son mari. Oui, parce qu&rsquo;Emilie aujourd&rsquo;hui elle &eacute;l&egrave;ve des brebis et elle fait du fromage et des yaourts sur le plateau du Larzac, elle g&egrave;re des chambres d&rsquo;h&ocirc;tes et elle a cr&eacute;&eacute; une association de producteurs. Elle est aussi maman &agrave; temps plein. En bref, cette fille je la kiffe et son portrait c&rsquo;est cadeau.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Mais qui c&rsquo;est Emilie&nbsp;?</strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">C&rsquo;est Emilie Vialettes, elle a 37 ans et elle ne vit pas tr&egrave;s loin de Millau en pleine campagne. Quand je lui ai demand&eacute; de me faire une petite pr&eacute;sentation personnelle elle m&rsquo;a r&eacute;pondu &ccedil;a&nbsp;: &laquo;&nbsp;<span style=\"color: black; mso-themecolor: text1;\">maman de 2 petites filles, addict &agrave; France Culture, &agrave; la marche en pleine nature, au footing le matin et au chocolat &agrave; 85%&nbsp;&raquo;.</span></p>\r\n<p class=\"MsoNormal\"><span style=\"color: black; mso-themecolor: text1;\">En vrai, Emilie c&rsquo;est &ccedil;a&nbsp;aussi : </span></p>\r\n<p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><span style=\"mso-ascii-font-family: Calibri; mso-fareast-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-themecolor: text1;\"><span style=\"mso-list: Ignore;\">-<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>Une Ma&icirc;trise de Gestion des Entreprise &agrave; Assas</p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><span style=\"mso-ascii-font-family: Calibri; mso-fareast-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-themecolor: text1;\"><span style=\"mso-list: Ignore;\">-<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>Un Master d&rsquo;Economie Internationale &agrave; Science Po Paris</p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><span style=\"mso-ascii-font-family: Calibri; mso-fareast-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-themecolor: text1;\"><span style=\"mso-list: Ignore;\">-<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>La pr&eacute;paration d&rsquo;un doctorat d&rsquo;Economie Internationale &agrave; Science Po Paris dont deux ann&eacute;es pass&eacute;es au Br&eacute;sil, puis patatras, le doctorat s&rsquo;arr&ecirc;te et ne sera jamais pr&eacute;sent&eacute; parce que tr&egrave;s mal encadr&eacute;</p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><span style=\"mso-ascii-font-family: Calibri; mso-fareast-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-themecolor: text1;\"><span style=\"mso-list: Ignore;\">-<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>Pr&eacute;paration et pr&eacute;sentation au concours d&rsquo;Enseignement Agricole, qu&rsquo;elle obtient du premier coup bien s&ucirc;r&hellip;</p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><span style=\"mso-ascii-font-family: Calibri; mso-fareast-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-themecolor: text1;\"><span style=\"mso-list: Ignore;\">-<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>Stage en attendant son affectation = coup de foudre avec Alexandre et avec son m&eacute;tier sur une foire en vendant des fromages</p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><span style=\"mso-ascii-font-family: Calibri; mso-fareast-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-themecolor: text1;\"><span style=\"mso-list: Ignore;\">-<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>Prof d&rsquo;Eco Gestion face &agrave; des gens qui ne se sentent pas du tout concern&eacute;s donc du coup la meuf elle se dit &laquo;&nbsp;tiens, <span style=\"mso-spacerun: yes;\">&nbsp;</span>je vais faire de la gestion de conflit et de la m&eacute;diation&nbsp;&raquo;</p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><span style=\"mso-ascii-font-family: Calibri; mso-fareast-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-themecolor: text1;\"><span style=\"mso-list: Ignore;\">-<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>Pionne dans un lyc&eacute;e pour &laquo;&nbsp;r&eacute;fl&eacute;chir &agrave; son avenir&nbsp;&raquo; et gagner sa vie, un peu&hellip; et formation de m&eacute;diatrice au CNAM de Montpellier</p>\r\n<p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><span style=\"mso-ascii-font-family: Calibri; mso-fareast-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-themecolor: text1;\"><span style=\"mso-list: Ignore;\">-<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>M&eacute;diatrice pendant 2 ans en auto-entrepreneur mais elle se rend compte que c&rsquo;est trop difficile de gagner sa vie avec ce m&eacute;tier</p>\r\n<p class=\"MsoListParagraphCxSpLast\" style=\"text-indent: -18.0pt; mso-list: l0 level1 lfo1;\"><span style=\"mso-ascii-font-family: Calibri; mso-fareast-font-family: Calibri; mso-hansi-font-family: Calibri; mso-bidi-font-family: Calibri; color: black; mso-themecolor: text1;\"><span style=\"mso-list: Ignore;\">-<span style=\"font: 7.0pt \'Times New Roman\';\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span>&nbsp;</p>\r\n<p class=\"MsoNormal\">Elle devient alors Chef d&rsquo;Exploitation avec Alexandre, son mari</p>\r\n<p class=\"MsoNormal\">Voil&agrave; je ne vous avais pas menti, Emilie elle est ouf&nbsp;! Elle ne s&rsquo;arr&ecirc;te jamais, elle aime tout, tout le temps. Elle fonce.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Son projet d&rsquo;entreprise.</strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Emilie s&rsquo;est lanc&eacute;e dans l&rsquo;entreprenariat en 2016, d&rsquo;abord dans le domaine de la m&eacute;diation puis en 2018 elle et son mari reprennent la Ferme d&rsquo;Alcas en 2018. Elle monte plusieurs projets dont une laiterie pour la fabrication de yaourts qu&rsquo;elle commercialise elle-m&ecirc;me dans des boutiques bio partout en France avec b&eacute;b&eacute; dans le porte-b&eacute;b&eacute; tout en allaitant. Elle g&egrave;re &eacute;galement un GAEC (Groupement Agricole d&rsquo;exploitation en Commun) qu&rsquo;elle a initi&eacute; avec au d&eacute;part 2 associ&eacute;s.</p>\r\n<p class=\"MsoNormal\">L&rsquo;entreprenariat n&rsquo;&eacute;tait pas l&rsquo;objectif premier d&rsquo;Emilie. Ce qu&rsquo;elle voulait c&rsquo;&eacute;tait un job qui lui permette de gagner sa vie et g&eacute;rer sa famille. Elle &eacute;tait pleine d&rsquo;id&eacute;es, de projets, mais sa motivation initiale &eacute;tait tout simplement l&rsquo;envie de faire grandir la notori&eacute;t&eacute; de ses produits et faire vivre sa ferme.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Sa vie d&rsquo;entrepreneur.</strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Mais les choses ne se sont pas pass&eacute;es comme elle l&rsquo;imaginait. Le GAEC a tourn&eacute; au vinaigre et les associ&eacute;s ont quitt&eacute; brutalement le projet. La gestion de la ferme est de plus en plus difficile, les obligations du circuit de distribution de yaourts obligeant Alexandre &agrave; travailler avec les troupeaux de brebis plus de 10h par jour. Emilie g&egrave;re tout, entreprise et famille et les deux se font souvent au m&ecirc;me moment&nbsp;: parce que la vie d&rsquo;entrepreneur c&rsquo;est tout le temps, &agrave; chaque instant. &laquo;&nbsp;On ne sort jamais de son boulot, on vit boulot. Et c&rsquo;est tr&egrave;s dur de d&eacute;crocher. Mais je suis libre de travailler comme je l&rsquo;entends &raquo;.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\"><strong>Sa vie de femme.</strong></p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Emilie ce qu&rsquo;elle aime, c&rsquo;est que les diff&eacute;rentes parties de sa vie ne soient pas cloisonn&eacute;es&nbsp;: ne pas s&eacute;parer vie priv&eacute;e et boulot lui convient tout &agrave; fait. Mais elle admet bien volontiers que le plus difficile c&rsquo;est d&rsquo;&ecirc;tre pr&eacute;sente pour la famille et mentalement disponible, surtout pour deux petits bouts de chou qui ont besoin d&rsquo;attention. Et puis vivre avec son associ&eacute; n&rsquo;est pas la solution la plus simple, il faut parvenir &agrave; faire la part des choses en fonction de chaque temps de la journ&eacute;e.</p>\r\n<p class=\"MsoNormal\">L&rsquo;ind&eacute;pendance de l&rsquo;entreprenariat, &ccedil;a lui convient plut&ocirc;t bien mais les difficult&eacute;s ont tendance &agrave; vite prendre le pas sur les moments en famille.</p>\r\n<p class=\"MsoNormal\">Je lui ai demand&eacute; en quoi sa vie &eacute;tait mieux ou moins bien qu&rsquo;avant. Sa r&eacute;ponse&nbsp;: &laquo;&nbsp;Je vis sans filet. C&rsquo;est une grande fiert&eacute; et aussi souvent une angoisse mais je sais au fond de moins que c&rsquo;est le chemin que j&rsquo;ai &agrave; vivre&nbsp;&raquo;.</p>\r\n<p class=\"MsoNormal\">Elle me parle aussi de sa vie de maman&nbsp;: &laquo;&nbsp;C&rsquo;est un d&eacute;fi permanent de concilier les temps en famille et l&rsquo;espace professionnel. On a une vraie pression financi&egrave;re parce qu&rsquo;on veut le mieux pour nos enfants. J&rsquo;aimerai trouver de vrais moments avec les enfants sans penser boulot et contraintes. Souvent on est physiquement pr&eacute;sents mais en r&eacute;alit&eacute; on est mentalement au boulot avec les soucis, surtout quand le boulot est &agrave; la maison sur la table de la salle &agrave; manger parce que je n&rsquo;ai pas encore de bureau &agrave; moi&nbsp;! J&rsquo;aimerai pouvoir s&eacute;parer les espaces pro et priv&eacute;. On peut parler de charge mentale &agrave; tous les niveaux&nbsp;&raquo;.</p>\r\n<p class=\"MsoNormal\">Malgr&eacute; les grosses difficult&eacute;s que le couple rencontre aujourd&rsquo;hui, Emilie est fi&egrave;re de ce qu&rsquo;elle accompli chaque jour, d&rsquo;&ecirc;tre maitre de son travail et de ses revenus, de prendre le risque de vivre sans filet. Mais pour autant le quotidien reste lourd &agrave; porter.</p>\r\n<p class=\"MsoNormal\">Si c&rsquo;&eacute;tait &agrave; refaire&nbsp;: Emilie se dit que le choses auraient &eacute;t&eacute; plus faciles si elle avait eu des enfants plus grands pour avoir plus de temps, s&eacute;parer les espaces de travail et de vie d&egrave;s le d&eacute;part pour ne pas se laisser d&eacute;border, se faire aider pour le d&eacute;marrage pour construire un pr&eacute;visionnel solide, prendre conseil aupr&egrave;s de fiscalistes et avocats mais ne jamais se fier &agrave; qui que ce soit&nbsp;!! Ton projet c&rsquo;est ton projet.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Voil&agrave; vous savez presque tout sur Emilie.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Loin de moi l&rsquo;id&eacute;e avec ce premier portrait de vous faire peur ou de vous d&eacute;courager d&rsquo;entreprendre. Mon but principal &agrave; travers ce blog, c&rsquo;est de vous parler de la r&eacute;alit&eacute; du quotidien, de la vraie vie des entrepreneurs, dans leur r&eacute;ussite comme dans leur difficult&eacute;.</p>\r\n<p class=\"MsoNormal\">Emilie et Alexandre sont le parfait exemple d&rsquo;une entreprise complexe, d&rsquo;un travail quotidien difficile, qui prends trop souvent le pas sur la vie de famille. Mais ce que je voudrais que l&rsquo;on retienne avant tout de ce portrait c&rsquo;est leur force, leur courage, leur simple envie d&rsquo;avancer gr&acirc;ce aux fruits de leur propre travail quand bien m&ecirc;me il est &eacute;puisant.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Je voudrais faire de ce portrait d&rsquo;Emilie un exemple de travail et de courage. Les &eacute;preuves et les moments compliqu&eacute;s sont inh&eacute;rents &agrave; la cr&eacute;ation d&rsquo;entreprise. La r&eacute;ussite et la satisfaction de mener son projet &agrave; bien aussi, m&ecirc;me si le chemin est sem&eacute; d&rsquo;embuches.</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">Pour en savoir plus sur la Ferme d&rsquo;Alcas</p>\r\n<p class=\"MsoNormal\"><a href=\"http://www.ferme-alcas.com/\">http://www.ferme-alcas.com/</a></p>\r\n<p class=\"MsoNormal\">https://www.facebook.com/ferme.alcas/</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p class=\"MsoNormal\">&nbsp;</p>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `title`, `image`, `description`, `link`) VALUES
(7, 'Racines Sud', '<p><img src=\"public/images/racines_sud.png\" alt=\"\" width=\"200\" height=\"93\" /></p>', 'Refonte du site Racines Sud, site des expatriés d\'Occitanie:\r\nréalisation de la maquette,\r\ncréation et intégration du site sous Wordpress,\r\ngestion d\'un espace administrateur personnalisé permettant de gérer l\'ensemble des adhérents de l\'ancien site et accueillir les nouveaux,\r\ngestion des newsletters, actualités...', 'www.racinessud.com'),
(8, 'Web Agency', '<p><img src=\"public/images/web_agency.png\" alt=\"web_agency\" width=\"200\" height=\"98\" /></p>', 'Intégration d\'une maquette pour la refonte d\'un site pour agence web.\r\n-site en one page\r\n-slider d\'accueil\r\n-respecter les différentes sections des services proposés par l\'agence\r\n-exemples de projets réalisés\r\n-carte avec formulaire de contact\r\n-rédaction des textes\r\n\r\nL\'ensemble du projet doit être codé en HTML et CSS.', 'www.projet-1.pauline-superweb.com'),
(9, 'Office de tourisme de Toulouse', '<p><img src=\"public/images/toulouse.png\" alt=\"ville_toulouse\" width=\"200\" height=\"117\" /></p>', 'Réalisation du site de l\'office de tourisme de la ville de Toulouse avec Wordpress.\r\n\r\n-le site doit être réalisé sous wordpress avec un thème personnalisé\r\n-page d\'accueil avec un encart pour voir la dernière actualité mise en ligne\r\n-menu de navigation fixe avec les éléments suivants: accueil (icône maison), actualités, plus d\'infos, activités du mois, contact\r\n-champ de recherche\r\n-pages en responsive\r\n-respecter les règles de SEO et d\'accessibilités', 'www.projet-2.pauline-superweb.com'),
(10, 'VéloCity', '<p><img src=\"public/images/velocity.png\" alt=\"location_velo_lyon\" width=\"200\" height=\"106\" /></p>', 'Développer un site de location de vélos pour la ville de Lyon avec gestion de données en temps réel.\r\n\r\n-site en one page\r\n-slider d\'accueil avec mode d\'emploi du site, actif au clic, automatiquement et possibilité de mise en pause et de navigation entre les images\r\n-affichage d\'une carte avec des marqueurs pour chacune des stations de vélo de la ville et gestion des données en temps réel grâce à l\'API JC Decaux: un clic sur un marqueur affiche les infos de la station choisie\r\n-la carte doit-être générée dynamiquement via un service de cartographie avec une API\r\n-l\'utilisateur doit pouvoir réserver un vélo en indiquant son nom et son prénom et signer à l\'aide d\'un canvas (code sans plugin)\r\n-une fois la réservation validée, le vélo doit être marqué comme réservé\r\n-les données de reservation doivent être stockées dans le navigateur avec l\'API webstorage et s\'afficher en bas de page avec un décompte automatique de 20 minutes\r\n-la réservation expire au bout de 20 minutes et à la fermeture du navigateur; les nom et prénom sont conservés dans le navigateur\r\n-une réservation possible à la fois. Une nouvelle réservation remplace la première.\r\n\r\nCode réalisé en Javascript et conçu en orienté objet', 'www.projet-3. pauline-superweb.com'),
(11, 'Blog de Jean Forteroche', '<p><img src=\"public/images/forteroche.png\" alt=\"jean_forteroche\" width=\"200\" height=\"100\" /></p>', 'Création du blog de jean Forteroche, écrivain. L\'auteur souhaite publier son prochain roman chapitre par chapitre sur un blog.\r\n\r\n-développer un moteur de blog en PHP et MySQL\r\n-interface frontend et interface backend\r\n-CRUD: création de billets, lecture de billets, mise à jour de billets, suppression de billets (create, read, update, delete)\r\n-chaque billet doit permettre de l\'ajout de commentaires qui seront modérés dans l\'espace administrateur; les lecteurs doivent pouvoir signaler un commentaire qui sera remonté dans l\'espace privé de l\'auteur\r\n-l\'auteur pourra publié ses chaoitres via un outil WIZYWIG basé sur Tiny MCE\r\n\r\nLe projet sera développé en PHP sans framework, en architecture MVC et en programmation orienté objet\r\n', 'www.projet-4.pauline-superweb.com'),
(12, 'Agence Super!', '<p><img src=\"public/images/super.png\" alt=\"agence_super\" width=\"200\" height=\"98\" /></p>', 'Création du site et gestion du blog pour l\'agence SUPER!\r\n\r\n-site multipage, page contact avec formulaire de contact\r\n-espace admin permettant la publication des articles et des portraits du blog, des projets du portfolio du site, la gestion des commentaires et des données personnelles du client.\r\n\r\nRéalisé en HTML, CSS, JS, PHP et MySQL.\r\n\r\n', 'www.pauline-superweb.com');

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
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `identifiant`, `email`, `password`) VALUES
(20, 'Pauline', 'contact.super.web@gmail.com', '$2y$10$rkgRIy.LnDEC.aZxufgnUuDRNf7kXoogLFC/p3G5AmNkQyg9Ekxne');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `comments_articles`
--
ALTER TABLE `comments_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `comments_portraits`
--
ALTER TABLE `comments_portraits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `portraits`
--
ALTER TABLE `portraits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

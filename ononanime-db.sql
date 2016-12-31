-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 31 Décembre 2016 à 16:33
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ononanime`
--

-- --------------------------------------------------------

--
-- Structure de la table `aimer`
--

CREATE TABLE `aimer` (
  `NUMANIME` int(11) NOT NULL,
  `LOGINUSER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `anime`
--

CREATE TABLE `anime` (
  `NUMANIME` int(11) NOT NULL,
  `NUMSTUDIO` int(11) NOT NULL,
  `NOMANIME` varchar(80) DEFAULT NULL,
  `SAISONANIME` varchar(10) DEFAULT NULL,
  `ANNEEANIME` decimal(4,0) DEFAULT NULL,
  `NBEPISODES` int(11) DEFAULT NULL,
  `RESUME` varchar(1000) DEFAULT NULL,
  `ESTFINI` tinyint(1) DEFAULT NULL,
  `IMGANIME` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `anime`
--

INSERT INTO `anime` (`NUMANIME`, `NUMSTUDIO`, `NOMANIME`, `SAISONANIME`, `ANNEEANIME`, `NBEPISODES`, `RESUME`, `ESTFINI`, `IMGANIME`) VALUES
(1, 0, 'Katanagatari', 'Winter', '2010', 12, 'Yasuri Shichika, seventh successor of the Kyoto Ryu (bladeless) sword art, lives on an isolated island with his older sister, Nanami. One day Shichika is visited by a woman named Togame, who requests his aid in her quest to find and collect the final twelve swords forged by the legendary master swordsmith, Shikizaki Kiki. Shichika and Togame begin their odyssey by leaving the island he called home for over 20 years. They will face twelve individuals who possess and protect Shikizaki''s legendary swords. Join Shichika and Togame on an exciting, epic adventure that defies reality as they discover the true potential of the Kyoutoryuu sword style!', 1, 'http://cdn.masterani.me/poster/2764y2Yzbji.jpg'),
(2, 1, 'Kizumonogatari I: Tekketsu-hen', 'Winter', '2016', 1, 'March 25th—just another day during spring break.\n\nKoyomi Araragi, a second year high school student at Naoetsu High School, befriends Tsubasa Hanekawa, the top honors student at his school. Tsubasa mentions a rumor about a "blonde vampire" that has been sighted around their town recently. Koyomi, who is usually anti-social, takes a liking to Tsubasa''s down-to-earth personality.\n\nThat evening, Koyomi encounters this rumored vampire: she is Kiss-shot Acerola-orion Heart-under-blade, also known as the "King of Apparitions." The blonde, golden-eyed vampire cries out for Koyomi to save her as she lies in a pool of her own blood, all four of her limbs cut off.\n\nKiss-shot asks Koyomi to give her his blood in order to save her life, and when he does, the very next moment he awakes, Koyomi finds himself re-born as her vampire kin.\n\nAs Koyomi struggles to accept his existence, Kiss-shot whispers,\n\n"Welcome to the world of darkness..."', 1, 'http://cdn.masterani.me/poster/1390Kuk3ZQCV.jpg'),
(3, 1, 'Kizumonogatari II: Nekketsu-hen', 'Summer', '2016', 12, 'In the spring of his second year of high school, Koyomi Araragi met the beautiful vampire Kiss-shot Acerola-orion Heart-under-blade. Koyomi saved Kiss-shot, who was on the verge of death with all four of her limbs cut off, but only at the expense of becoming her minion and a vampire.\r\n\r\n"In order to go back to being a human again, you must take back all of Kiss-shot''s limbs." After receiving advice from Meme Oshino, an expert in the supernatural, Koyomi prepares to go into battle.\r\n\r\nAwaiting him are three powerful vampire hunters—Dramaturgy, a giant vampire hunter who is a vampire himself. Episode, a half-vampire who wields an enormous cross, and Guillotinecutter, a quiet man who specializes in killing vampires.\r\n\r\nWill Koyomi be able to take back Kiss-shot''s limbs from the vampire hunters? Amidst the soft spring rain, the curtain rises on this fateful blood bath…', 1, 'http://cdn.masterani.me/poster/22320ZdRwjBe.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `appartenir`
--

CREATE TABLE `appartenir` (
  `NUMANIME` int(11) NOT NULL,
  `NUMGENRE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cast`
--

CREATE TABLE `cast` (
  `NUMSEIYU` int(11) NOT NULL,
  `NOMSEIYU` varchar(40) DEFAULT NULL,
  `PRENOMSEIYU` varchar(30) DEFAULT NULL,
  `DATENAISSSEIYU` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commenteranime`
--

CREATE TABLE `commenteranime` (
  `NUMANIME` int(11) NOT NULL,
  `LOGINUSER` varchar(30) NOT NULL,
  `DATEHEURE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TEXTE` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commenterepisode`
--

CREATE TABLE `commenterepisode` (
  `NUMANIME` int(11) NOT NULL,
  `NUMEPISODE` int(11) NOT NULL,
  `LOGINUSER` varchar(30) NOT NULL,
  `DATEHEURE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `TEXTE` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `date`
--

CREATE TABLE `date` (
  `DATEHEURE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `doubler`
--

CREATE TABLE `doubler` (
  `NUMSEIYU` int(11) NOT NULL,
  `NUMANIME` int(11) NOT NULL,
  `PERSONNAGE` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `episode`
--

CREATE TABLE `episode` (
  `NUMANIME` int(11) NOT NULL,
  `NUMEPISODE` int(11) NOT NULL,
  `NOMEPISODE` varchar(200) DEFAULT NULL,
  `IDVIDEO` varchar(50) DEFAULT NULL,
  `DATEHEURE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `episode`
--

INSERT INTO `episode` (`NUMANIME`, `NUMEPISODE`, `NOMEPISODE`, `IDVIDEO`, `DATEHEURE`) VALUES
(1, 1, 'Kanna, the Cutting Sword', 'ePpPVE-GGJw', '2016-12-31 10:56:45'),
(1, 2, 'Namakura, the Decapitation Sword', 'ePpPVE-GGJw', '2016-12-31 10:56:52'),
(1, 3, 'Tsurugi, the Sword of Thousand', 'ePpPVE-GGJw', '2016-12-31 10:56:55'),
(1, 4, 'Hari, the Slender Sword', 'ePpPVE-GGJw', '2016-12-31 10:56:59'),
(1, 5, 'Yoroi, the Rebel Sword', 'ePpPVE-GGJw', '2016-12-31 10:57:02'),
(1, 6, 'Kanazuchi, the Twin Sword', 'ePpPVE-GGJw', '2016-12-31 10:57:05'),
(1, 7, 'Bita, the Evil Sword', 'ePpPVE-GGJw', '2016-12-31 10:57:12'),
(1, 8, 'Kanzashi, the Sword of Precision', 'ePpPVE-GGJw', '2016-12-31 10:57:38'),
(1, 9, 'Nokogiri, the Sword of Kings', 'ePpPVE-GGJw', '2016-12-31 10:57:43'),
(1, 10, 'Hakari, the Sword of Truth', 'ePpPVE-GGJw', '2016-12-31 10:57:47'),
(1, 11, 'Mekki, the Poison Sword', 'ePpPVE-GGJw', '2016-12-31 10:57:51'),
(1, 12, 'Juu, the Flame Sword', 'ePpPVE-GGJw', '2016-12-31 10:57:54'),
(2, 1, 'Kizumonogatari I: Tekketsu-hen', 'c7rCyll5AeY', '2016-12-31 10:58:50'),
(3, 1, 'Kizumonogatari II: Nekketsu-hen', 'c7rCyll5AeY', '2016-12-31 10:59:00');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `NUMGENRE` int(11) NOT NULL,
  `LIBELLEGENRE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`NUMGENRE`, `LIBELLEGENRE`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Cars'),
(4, 'Comedy'),
(5, 'Dementia'),
(6, 'Demons'),
(7, 'Drama'),
(8, 'Ecchi'),
(9, 'Fantasy'),
(10, 'Game'),
(11, 'Harem'),
(12, 'Hentai'),
(13, 'Historical'),
(14, 'Horror'),
(15, 'Josei'),
(16, 'Kids'),
(17, 'Magic'),
(18, 'Martial Arts'),
(19, 'Mecha'),
(20, 'Military'),
(21, 'Music'),
(22, 'Mystery'),
(23, 'Parody'),
(24, 'Police'),
(25, 'Psychological'),
(26, 'Romance'),
(27, 'Samurai'),
(28, 'School'),
(29, 'Sci-Fi'),
(30, 'Seinen'),
(31, 'Shoujo'),
(32, 'Shoujo Ai'),
(33, 'Shounen'),
(34, 'Shounen Ai'),
(35, 'Slice of Life'),
(36, 'Space'),
(37, 'Sports'),
(38, 'Super Power'),
(39, 'Supernatural'),
(40, 'Thriller'),
(41, 'Vampire'),
(42, 'Yaoi'),
(43, 'Yuri');

-- --------------------------------------------------------

--
-- Structure de la table `lier`
--

CREATE TABLE `lier` (
  `NUMANIME` int(11) NOT NULL,
  `ANI_NUMANIME` int(11) NOT NULL,
  `LIEN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `noteranime`
--

CREATE TABLE `noteranime` (
  `NUMANIME` int(11) NOT NULL,
  `LOGINUSER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `noterep`
--

CREATE TABLE `noterep` (
  `NUMANIME` int(11) NOT NULL,
  `NUMEPISODE` int(11) NOT NULL,
  `LOGINUSER` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `studio`
--

CREATE TABLE `studio` (
  `NUMSTUDIO` int(11) NOT NULL,
  `NOMSTUDIO` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `studio`
--

INSERT INTO `studio` (`NUMSTUDIO`, `NOMSTUDIO`) VALUES
(0, 'White Fox'),
(1, 'Shaft');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `LOGINUSER` varchar(30) NOT NULL,
  `PWDUSER` varchar(64) DEFAULT NULL,
  `IDUSER` varchar(16) DEFAULT NULL,
  `AVATARUSER` varchar(50) DEFAULT NULL,
  `STATUTUSER` decimal(1,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `aimer`
--
ALTER TABLE `aimer`
  ADD PRIMARY KEY (`NUMANIME`,`LOGINUSER`),
  ADD KEY `FK_AIMER2` (`LOGINUSER`);

--
-- Index pour la table `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`NUMANIME`),
  ADD KEY `FK_PRODUIRE` (`NUMSTUDIO`);

--
-- Index pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD PRIMARY KEY (`NUMANIME`,`NUMGENRE`),
  ADD KEY `FK_APPARTENIR2` (`NUMGENRE`);

--
-- Index pour la table `cast`
--
ALTER TABLE `cast`
  ADD PRIMARY KEY (`NUMSEIYU`);

--
-- Index pour la table `commenteranime`
--
ALTER TABLE `commenteranime`
  ADD PRIMARY KEY (`NUMANIME`,`LOGINUSER`,`DATEHEURE`),
  ADD KEY `FK_COMMENTERANIME2` (`LOGINUSER`),
  ADD KEY `FK_COMMENTERANIME3` (`DATEHEURE`);

--
-- Index pour la table `commenterepisode`
--
ALTER TABLE `commenterepisode`
  ADD PRIMARY KEY (`NUMANIME`,`NUMEPISODE`,`LOGINUSER`,`DATEHEURE`),
  ADD KEY `FK_COMMENTEREPISODE2` (`LOGINUSER`),
  ADD KEY `FK_COMMENTEREPISODE3` (`DATEHEURE`);

--
-- Index pour la table `date`
--
ALTER TABLE `date`
  ADD PRIMARY KEY (`DATEHEURE`);

--
-- Index pour la table `doubler`
--
ALTER TABLE `doubler`
  ADD PRIMARY KEY (`NUMSEIYU`,`NUMANIME`),
  ADD KEY `FK_DOUBLER2` (`NUMANIME`);

--
-- Index pour la table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`NUMANIME`,`NUMEPISODE`),
  ADD KEY `FK_EPISODEDATE` (`DATEHEURE`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`NUMGENRE`);

--
-- Index pour la table `lier`
--
ALTER TABLE `lier`
  ADD PRIMARY KEY (`NUMANIME`,`ANI_NUMANIME`),
  ADD KEY `FK_LIER2` (`ANI_NUMANIME`);

--
-- Index pour la table `noteranime`
--
ALTER TABLE `noteranime`
  ADD PRIMARY KEY (`NUMANIME`,`LOGINUSER`),
  ADD KEY `FK_NOTERANIME2` (`LOGINUSER`);

--
-- Index pour la table `noterep`
--
ALTER TABLE `noterep`
  ADD PRIMARY KEY (`NUMANIME`,`NUMEPISODE`,`LOGINUSER`),
  ADD KEY `FK_NOTEREP2` (`LOGINUSER`);

--
-- Index pour la table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`NUMSTUDIO`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`LOGINUSER`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `aimer`
--
ALTER TABLE `aimer`
  MODIFY `NUMANIME` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `anime`
--
ALTER TABLE `anime`
  MODIFY `NUMANIME` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `cast`
--
ALTER TABLE `cast`
  MODIFY `NUMSEIYU` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `aimer`
--
ALTER TABLE `aimer`
  ADD CONSTRAINT `FK_AIMER` FOREIGN KEY (`NUMANIME`) REFERENCES `anime` (`NUMANIME`),
  ADD CONSTRAINT `FK_AIMER2` FOREIGN KEY (`LOGINUSER`) REFERENCES `utilisateur` (`LOGINUSER`);

--
-- Contraintes pour la table `anime`
--
ALTER TABLE `anime`
  ADD CONSTRAINT `FK_PRODUIRE` FOREIGN KEY (`NUMSTUDIO`) REFERENCES `studio` (`NUMSTUDIO`);

--
-- Contraintes pour la table `appartenir`
--
ALTER TABLE `appartenir`
  ADD CONSTRAINT `FK_APPARTENIR` FOREIGN KEY (`NUMANIME`) REFERENCES `anime` (`NUMANIME`),
  ADD CONSTRAINT `FK_APPARTENIR2` FOREIGN KEY (`NUMGENRE`) REFERENCES `genre` (`NUMGENRE`);

--
-- Contraintes pour la table `commenteranime`
--
ALTER TABLE `commenteranime`
  ADD CONSTRAINT `FK_COMMENTERANIME` FOREIGN KEY (`NUMANIME`) REFERENCES `anime` (`NUMANIME`),
  ADD CONSTRAINT `FK_COMMENTERANIME2` FOREIGN KEY (`LOGINUSER`) REFERENCES `utilisateur` (`LOGINUSER`),
  ADD CONSTRAINT `FK_COMMENTERANIME3` FOREIGN KEY (`DATEHEURE`) REFERENCES `date` (`DATEHEURE`);

--
-- Contraintes pour la table `commenterepisode`
--
ALTER TABLE `commenterepisode`
  ADD CONSTRAINT `FK_COMMENTEREPISODE` FOREIGN KEY (`NUMANIME`,`NUMEPISODE`) REFERENCES `episode` (`NUMANIME`, `NUMEPISODE`),
  ADD CONSTRAINT `FK_COMMENTEREPISODE2` FOREIGN KEY (`LOGINUSER`) REFERENCES `utilisateur` (`LOGINUSER`),
  ADD CONSTRAINT `FK_COMMENTEREPISODE3` FOREIGN KEY (`DATEHEURE`) REFERENCES `date` (`DATEHEURE`);

--
-- Contraintes pour la table `doubler`
--
ALTER TABLE `doubler`
  ADD CONSTRAINT `FK_DOUBLER` FOREIGN KEY (`NUMSEIYU`) REFERENCES `cast` (`NUMSEIYU`),
  ADD CONSTRAINT `FK_DOUBLER2` FOREIGN KEY (`NUMANIME`) REFERENCES `anime` (`NUMANIME`);

--
-- Contraintes pour la table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `FK_CORRESPONDRE` FOREIGN KEY (`NUMANIME`) REFERENCES `anime` (`NUMANIME`);

--
-- Contraintes pour la table `lier`
--
ALTER TABLE `lier`
  ADD CONSTRAINT `FK_LIER` FOREIGN KEY (`NUMANIME`) REFERENCES `anime` (`NUMANIME`),
  ADD CONSTRAINT `FK_LIER2` FOREIGN KEY (`ANI_NUMANIME`) REFERENCES `anime` (`NUMANIME`);

--
-- Contraintes pour la table `noteranime`
--
ALTER TABLE `noteranime`
  ADD CONSTRAINT `FK_NOTERANIME` FOREIGN KEY (`NUMANIME`) REFERENCES `anime` (`NUMANIME`),
  ADD CONSTRAINT `FK_NOTERANIME2` FOREIGN KEY (`LOGINUSER`) REFERENCES `utilisateur` (`LOGINUSER`);

--
-- Contraintes pour la table `noterep`
--
ALTER TABLE `noterep`
  ADD CONSTRAINT `FK_NOTEREP` FOREIGN KEY (`NUMANIME`,`NUMEPISODE`) REFERENCES `episode` (`NUMANIME`, `NUMEPISODE`),
  ADD CONSTRAINT `FK_NOTEREP2` FOREIGN KEY (`LOGINUSER`) REFERENCES `utilisateur` (`LOGINUSER`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

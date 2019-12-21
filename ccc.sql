-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2019 at 09:51 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_passe` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `email`, `mot_passe`) VALUES
(1, 'ALFAHAMI', 'admin@ccc.net', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'BEHRAM', 'admin2@ccc.net', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `auteurs`
--

CREATE TABLE IF NOT EXISTS `auteurs` (
  `id_auteur` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telephone` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auteurs`
--

INSERT INTO `auteurs` (`id_auteur`, `nom`, `prenom`, `email`, `telephone`) VALUES
(1, 'Mohammed', 'Chahhou', 'mchahou@yahoo.com', '0625639854'),
(2, 'Berrada', 'Ismael', 'berrada.ismael@gmail.com', '0623417589'),
(3, 'Chenfour', 'Nouredine', 'chenfour@gmail.com', '0627489845'),
(4, 'Mouhajir', 'Mohamed', 'mouhajir@gmail.com', '0632457895'),
(5, 'Behram', 'Salah', 'behram@hotmail.com', '0623147895'),
(6, 'Tupac', 'Shakur', 'tupac@gmail.com', '0621458795'),
(7, 'Fahmi', 'Toihir', 'fahmi@gmail.com', '0623458975'),
(8, 'Notorius', 'Biggie', 'notorius@ymail.com', '0632587895');

-- --------------------------------------------------------

--
-- Table structure for table `comite`
--

CREATE TABLE IF NOT EXISTS `comite` (
  `id_comite` int(11) NOT NULL,
  `nom_membre` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comite`
--

INSERT INTO `comite` (`id_comite`, `nom_membre`, `prenom`, `statut`, `organisation`, `categorie`) VALUES
(1, 'Mark ', 'Zuckerberg', 'Web Developper Senior', 'Facebook', 'President general'),
(2, 'Jack ', 'Ma', 'Super brain', 'Ali Baba', 'President general'),
(3, 'Brad ', 'Hussey', 'Web developper Full Stack', 'Brad Hussey', 'President genral'),
(4, 'Brad', 'Traversy', 'Senior Web Developper', 'Brad Traversy', 'President general'),
(5, 'Akpal', 'Bahi', 'Programming Ingeneer', 'Youtube', 'Equipe technique'),
(6, 'Sissoko', 'Mamadou', 'CEO Afribaba', 'Afirbaba', 'Equipe technique'),
(7, 'Diallo', 'Jelly', 'Activist Human', 'Hmanitary', 'Equipe technique'),
(8, 'Fatoumata', 'Sissoko', 'CEO Black Lives Matters', 'Black Lives Matter', 'Equipe technique'),
(9, 'Gbago', 'Mugabe', 'President Developper', 'African Developpers', 'Chef Publication'),
(10, 'Idriss', 'Deby', 'Pr. Tchad', 'Tchad Country', 'Chef Publication'),
(11, 'Moulay ', 'Youssef Hadi', 'Professeur', 'Université Ibn Tofail', 'Chef Publication'),
(12, 'Mouhajir ', 'Adil', 'Professeur', 'Université Sidi Mohamed Ben Abdallah', 'Chef Publication'),
(13, 'Behram ', 'Mahamat Salah', 'Etudiant Chercheur', ' Université Ibn Tofail', 'Conferencier'),
(14, 'Khalil ', 'Laaboudi', 'Java delopper', 'Université Ibn Tofail', 'Conferencier'),
(15, 'Soibri ', 'Moindze', 'Etudiant Chercheur', 'Université Sidi Mohamed Ben Abdallah', 'Conferencier'),
(16, 'Idrisse ', 'Mohamed', 'Chimiste', 'Université Ibn Tofail', 'Conferencier'),
(17, 'Isaac ', 'Naira', 'Data Scientist', 'Université Sidi Mohamed Ben Abdallah', 'President general'),
(18, 'Bouhroum ', 'Jaydih', 'Etuiant', 'Université Sidi Mohamed Ben Abdallah', 'Chef Publication'),
(19, 'Abdelaziz', 'Berrada', 'Professeur', 'Université Sidi Mohamed Ben Abdallah', 'Equipe technique'),
(20, 'Dakoine ', 'Toihir', 'Etudiant', 'Université Sidi Mohamed Ben Abdallah', 'Equipe technique');

-- --------------------------------------------------------

--
-- Table structure for table `conferences`
--

CREATE TABLE IF NOT EXISTS `conferences` (
  `id_conf` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `noms_participants` varchar(45) NOT NULL,
  `date_limite_soumission` date NOT NULL,
  `date_fin_evaluation` date NOT NULL,
  `date_conf` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conferences`
--

INSERT INTO `conferences` (`id_conf`, `nom`, `noms_participants`, `date_limite_soumission`, `date_fin_evaluation`, `date_conf`) VALUES
(1, 'Big Data vs Cloud computing', '', '2019-02-04', '2019-02-11', '2019-02-25'),
(2, 'Internet of things', '', '2019-01-08', '2019-01-15', '2019-01-31'),
(3, 'Machine Learning', '', '2019-03-01', '2019-01-07', '2019-01-16'),
(4, 'Intelligence Artificielle', '', '2019-02-15', '2019-02-20', '2019-03-20'),
(6, 'Leadership ', '', '2019-01-16', '2019-03-07', '2019-01-30'),
(7, 'Business Intelligence', '', '2019-01-19', '2019-03-30', '2019-03-20');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id_message` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `num_tel` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `corps_msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `papiers`
--

CREATE TABLE IF NOT EXISTS `papiers` (
  `id_papier` int(11) NOT NULL,
  `auteur` varchar(45) NOT NULL,
  `etat` varchar(45) NOT NULL,
  `titre` varchar(45) NOT NULL,
  `note` text NOT NULL,
  `papier` longblob NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `papiers`
--

INSERT INTO `papiers` (`id_papier`, `auteur`, `etat`, `titre`, `note`, `papier`) VALUES
(1, 'Chenfour', '', 'POO en Java', '', ''),
(2, 'Hadi', '', 'Node JS', '', ''),
(3, 'Bill Gates', '', 'windows 95', 'The one who instanciated this shit will die soon.', 0x6b67686a686a2e4a5047),
(4, 'Bill Gates', '', 'windows 95', 'The one who instanciated this shit will die soon.', 0x6b67686a686a2e4a5047),
(5, 'Bill Gates', '', 'windows 95', 'The one who instanciated this shit will die soon.', 0x6b67686a686a2e4a5047),
(6, 'Bill Gates', '', 'windows 95', 'The one who instanciated this shit will die soon.', 0x6b67686a686a2e4a5047),
(7, 'Steve Jobs', '', 'iOS', 'The one who instanciated this shit will die soon.', 0x43616e6164612e706466),
(8, 'Steve Jobs', '', 'iOS', 'The one who instanciated this shit will die soon.', 0x43616e6164612e706466),
(9, 'ABDESSAMAD', '', 'Neural Network', 'Fs. IBN TOFAYL', 0x50726163746963616c20504850204365727469666963617465202d205044462e706466),
(10, 'ABDESSAMAD', '', 'Neural Network', 'J&#39;ai paris mon putain de master Ã  FEZ, c&#39;est pour Ã§a que je me fais de l&#39;argent en vous disant: Wach had l9diya c&#39;est claire?', 0x4578706f73c3a9204c696e75782e706466);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id_session` int(11) NOT NULL,
  `nom_session` varchar(45) NOT NULL,
  `nom_conf` varchar(45) NOT NULL,
  `auteur` varchar(45) NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id_session`, `nom_session`, `nom_conf`, `auteur`, `heure_debut`, `heure_fin`) VALUES
(1, 'DATA ANALYST : LE METIER DE DEMAIN', 'BIG DATA VS CLOUD COMPUTING', 'ABDESSAMAD', '09:30:00', '12:00:00'),
(2, 'DANS LES COULISSES DU PYTHON', 'PYTHON 3 : UN LANGAGE PAS COMME LES AUTRES', 'MOULOUDI', '14:30:00', '16:00:00'),
(3, 'DANS LES COULISSES DU PYTHON', 'PYTHON 3 : UN LANGAGE PAS COMME LES AUTRES', 'MOULOUDI', '14:30:00', '16:00:00'),
(4, 'DANS LES COULISSES DU PYTHON', 'PYTHON 3 : UN LANGAGE PAS COMME LES AUTRES', 'MOULOUDI', '14:30:00', '16:00:00'),
(5, 'Said', 'Internet of things', 'Octimus', '10:00:00', '11:00:00'),
(6, 'NEURAL NETWORK', 'Machine Learning', 'ABESSAMAD', '12:05:00', '14:05:00'),
(7, 'NEURAL NETWORK', 'Machine Learning', 'ABESSAMAD', '12:05:00', '14:05:00'),
(8, 'NEURAL NETWORK', 'Machine Learning', 'ABESSAMAD', '12:05:00', '14:05:00'),
(9, 'NEURAL NETWORK', 'Machine Learning', 'ABESSAMAD', '12:05:00', '14:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `tutoriels`
--

CREATE TABLE IF NOT EXISTS `tutoriels` (
  `id_tutoriel` int(11) NOT NULL,
  `titre` varchar(45) NOT NULL,
  `auteur` varchar(45) NOT NULL,
  `date_tutoriel` date NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutoriels`
--

INSERT INTO `tutoriels` (`id_tutoriel`, `titre`, `auteur`, `date_tutoriel`, `heure_debut`, `heure_fin`) VALUES
(1, 'Routage', 'Chenfour', '2019-02-03', '08:30:00', '12:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_passe` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `conference` varchar(45) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `email`, `mot_passe`, `nom`, `prenom`, `statut`, `date_creation`, `conference`) VALUES
(1, 'etudiant@etudiant.net', '', 'Fatim', 'Zahra', 'Etudiant', '2019-01-26 21:19:13', 'BIG DATA VS CLOUD COMPUTING'),
(2, 'student@student.net', '', 'John', 'Doe', 'student', '2019-01-26 21:19:13', 'NEURAL NETWORK'),
(3, 'mp@teacher.net', '', 'Harti', 'Hicham', 'Professeur', '2019-01-26 21:20:24', 'DATA SCIENCE IN THE FUTURE'),
(4, 'prof@professeur.net', '', 'Tupac', 'Shakur', 'Professeur', '2019-01-26 21:20:24', '0'),
(5, 'john@doe.net', '527bd5b5d689e2c32ae974c6229ff785', 'John', 'Doe', '', '2019-01-27 03:05:14', 'CHANGE THE FORGOTEN FRAMEWORK'),
(6, 'itofail@uit.net', 'a107a0d8e5b2937c53244d8b6f53c076', 'Ibn', 'Tofayl', 'Etudiant', '2019-01-27 03:11:36', '0'),
(7, 'sidi@ben.net', '487162d023faa5d69ebbcdac9915d45e', 'Sidi', 'Ben', 'Etudiant', '2019-01-27 03:13:33', '0'),
(8, 'behram@fs.uit', 'b768f429c7ea96f07266ca86b8501cb9', 'Behram', 'Mahamat', 'Etudiant', '2019-01-27 14:15:23', '0'),
(9, 'bill@gate.net', 'e8375d7cd983efcbf956da5937050ffc', 'Bill', 'Gates', 'Auteur', '2019-01-27 17:15:14', '0'),
(10, 'mark@jackma.net', '786f02ad12ae770c263e44dadea1ba55', 'Mark', 'Jack', 'Auteur', '2019-01-27 17:17:32', '0'),
(11, 'auteur@auteur.net', 'dc6f74e5cffb424b6dad404be18ff056', 'auteur', 'auteur', 'Auteur', '2019-01-27 17:18:52', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `auteurs`
--
ALTER TABLE `auteurs`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Indexes for table `comite`
--
ALTER TABLE `comite`
  ADD PRIMARY KEY (`id_comite`);

--
-- Indexes for table `conferences`
--
ALTER TABLE `conferences`
  ADD PRIMARY KEY (`id_conf`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_message`);

--
-- Indexes for table `papiers`
--
ALTER TABLE `papiers`
  ADD PRIMARY KEY (`id_papier`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id_session`);

--
-- Indexes for table `tutoriels`
--
ALTER TABLE `tutoriels`
  ADD PRIMARY KEY (`id_tutoriel`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `auteurs`
--
ALTER TABLE `auteurs`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `comite`
--
ALTER TABLE `comite`
  MODIFY `id_comite` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `conferences`
--
ALTER TABLE `conferences`
  MODIFY `id_conf` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `papiers`
--
ALTER TABLE `papiers`
  MODIFY `id_papier` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id_session` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tutoriels`
--
ALTER TABLE `tutoriels`
  MODIFY `id_tutoriel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

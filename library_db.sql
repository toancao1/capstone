-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2024 at 01:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Title` varchar(255) NOT NULL,
  `Creators` varchar(255) NOT NULL,
  `Identifier` varchar(13) NOT NULL,
  `Publication_date` date NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Publisher` varchar(255) NOT NULL,
  `Language` varchar(50) NOT NULL,
  `Contributors` varchar(255) DEFAULT NULL,
  `Subject` varchar(255) NOT NULL,
  `Rights` varchar(50) NOT NULL,
  `Format` varchar(255) NOT NULL,
  `Keywords` varchar(50) NOT NULL,
  `Summary` varchar(50) NOT NULL,
  `Requester_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Title`, `Creators`, `Identifier`, `Publication_date`, `Description`, `Publisher`, `Language`, `Contributors`, `Subject`, `Rights`, `Format`, `Keywords`, `Summary`, `Requester_Id`) VALUES
('Contemporary book arts in Eastern Ontario: an exhibition at the W. D. Jordan Special Collections and Music Library, Queen\'s University, 1 March - 31 May 2013: [exhibition catalogue].', 'Lock, Margaret.; Thompson, Larry, 1964-; W.D. Jordan Special Collections & Music Library.', '9781553393887', '2013-01-01', 'Includes list of exhibits on inside back cover.', 'Kingston, Ont. : Queen\'s University', 'English', 'NULL', 'Artists\' books -- Ontario -- Exhibitions; W.D. Jordan Special Collections & Music Library -- Exhibitions', 'NULL', 'Physical; e-book', 'Eastern Ontario; Canada; exhibition; catalogue; co', 'A book about exhibitions at the W.D. Jordan Specia', 102),
('Metadata', 'Zeng, Marcia Lei, 1956- author. Qin, Jian, 1956- author.', 'ISBN : 978155', '2016-02-01', 'Metadata remains the solution for describing the explosively growing, complex world of digital information, and continues to be of paramount importance for information professionals. Providing a solid grounding in the variety and interrelationships among ', 'Chicago : Neal-Schuman, an imprint of the American Library Association', 'English', 'NULL', 'Library and Information Science, Metadata', 'NULL', 'xxvii, 555 pages : illustrations ; 23 cm', 'metadata', 'metadata book', 101),
('test', 'test', 'test', '2024-02-26', 'test', 'test', 'English', 'test', 'test', 'test', 'test', 'test', 'test', 101);

-- --------------------------------------------------------

--
-- Table structure for table `dissertations`
--

CREATE TABLE `dissertations` (
  `Title` varchar(255) NOT NULL,
  `Creators` varchar(255) DEFAULT NULL,
  `Identifier` varchar(13) DEFAULT NULL,
  `Publisher` varchar(255) DEFAULT NULL,
  `Publication_date` date DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `Contributor` varchar(255) DEFAULT NULL,
  `Sources` varchar(255) DEFAULT NULL,
  `Relation` varchar(255) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Rights` varchar(255) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Coverage` varchar(255) DEFAULT NULL,
  `Format` varchar(50) DEFAULT NULL,
  `Keywords` varchar(50) DEFAULT NULL,
  `Summary` varchar(50) DEFAULT NULL,
  `Requester_Id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dissertations`
--

INSERT INTO `dissertations` (`Title`, `Creators`, `Identifier`, `Publisher`, `Publication_date`, `Description`, `Language`, `Contributor`, `Sources`, `Relation`, `Subject`, `Rights`, `Type`, `Coverage`, `Format`, `Keywords`, `Summary`, `Requester_Id`) VALUES
('Metadataddd', NULL, '$creators = i', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';', '2024-02-13', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';', 'English', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', 104),
('Metadataddd1', NULL, '$creators = i', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1', '2024-02-20', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1', 'French', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', 104),
('Metadataddd12', NULL, '$creators = i', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';12', '2024-02-27', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';12', 'Other', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';12', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';122', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';12', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', 104),
('Metadataddd123', NULL, '$creators = i', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';123', '2024-02-13', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';123', 'English', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';123', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1223', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';123', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', 104),
('Metadataddd1233', NULL, '$creators = i', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1234', '2024-02-23', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1234', 'French', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1234', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';12234', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';1234', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', 104),
('Metadataddd12333', NULL, '$creators = i', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';12343', '2024-02-14', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';12343', 'English', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';12343', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';122343', '$creators = isset($_POST[\'creators\']) ? $_POST[\'creators\'] : \'\';12343', NULL, NULL, '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', '$creators = isset($_POST[\'creators\']) ? $_POST[\'cr', 104),
('Metadataddds', NULL, 'Metadataddds', 'Metadataddds', '2024-02-21', 'Metadataddds', 'English', 'Metadataddds', NULL, NULL, 'Metadataddds', 'Metadataddds', NULL, NULL, 'Metadataddds', 'Metadataddds', 'Metadataddds', 104),
('new', NULL, '1322', 'new', '2024-02-21', 'new', 'English', 'new', NULL, NULL, 'new', 'new', NULL, NULL, 'new', 'new', 'new', 104),
('new1', NULL, '13221', 'new1', '2024-02-21', 'new1', 'English', 'new1', NULL, NULL, 'new1', 'new1', NULL, NULL, 'new1', 'new1', 'new1', 104),
('new11', '', '132211', 'new11', '2024-02-21', 'new11', 'English', 'new11', NULL, NULL, 'new11', 'new111', NULL, NULL, 'new11', 'new11', 'new11', 104),
('test', '', '', '', '0000-00-00', '', 'English', '', NULL, NULL, '', '', NULL, NULL, '', '', '', 103),
('test1222212', NULL, 'test233122222', 'test233122222', '2024-03-04', 'test2321232222', 'French', '', NULL, NULL, 'test2233122222', 'test233122222', NULL, NULL, 'test233122222', 'test2321232222', 'test233122222', 101),
('test12222122', 'test2321322222', 'test233122222', 'test2331222222', '2024-03-04', 'test23212322222', 'French', '', NULL, NULL, 'test22331222222', 'test2331222222', NULL, NULL, 'test2331222222', 'test23212322222', 'test2331222222', 101),
('testingg', '', '', '', '0000-00-00', '', 'English', '', NULL, NULL, '', '', NULL, NULL, '', '', '', 104),
('Understanding Access in Academic Library Special Collections, 1936-2019', 'Rossman, Jae', '9798377605799', 'ProQuest Dissertations Publishing', '2022-02-01', 'NULL', 'English', 'NULL', 'ProQuest Dissertations & Theses Global', 'NULL', 'Library science; History', 'NULL', 'Online Resource', '1936-2019', 'Online Resource', 'Library Sciences, History, Dissertations', 'A dissertation about special collections in academ', 104);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Title` varchar(255) NOT NULL,
  `Creators` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `Publication_date` date DEFAULT NULL,
  `Format` varchar(50) DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Rights` varchar(255) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Keywords` varchar(50) DEFAULT NULL,
  `Summary` varchar(50) DEFAULT NULL,
  `Requester_Id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Title`, `Creators`, `Description`, `Location`, `Publication_date`, `Format`, `Language`, `Subject`, `Rights`, `Type`, `Keywords`, `Summary`, `Requester_Id`) VALUES
('11121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langu', NULL, '11121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langu', '11121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langu', '2024-02-09', '11121title = $_POST[\"title\"]; $creators = $_POST[\"', 'English', '11121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langu', '11121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langu', '11121title = $_POST[\"title\"]; $creators = $_POST[\"', '11121title = $_POST[\"title\"]; $creators = $_POST[\"', '11121title = $_POST[\"title\"]; $creators = $_POST[\"', 103),
('1121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langua', NULL, '1121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langua', '1121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langua', '2024-02-09', '1121title = $_POST[\"title\"]; $creators = $_POST[\"c', 'English', '1121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langua', '1121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $langua', '1121title = $_POST[\"title\"]; $creators = $_POST[\"c', '1121title = $_POST[\"title\"]; $creators = $_POST[\"c', '1121title = $_POST[\"title\"]; $creators = $_POST[\"c', 103),
('121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $languag', NULL, '121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $languag', '121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $languag', '2024-02-09', '121title = $_POST[\"title\"]; $creators = $_POST[\"cr', 'English', '121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $languag', '121title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $languag', '121title = $_POST[\"title\"]; $creators = $_POST[\"cr', '121title = $_POST[\"title\"]; $creators = $_POST[\"cr', '121title = $_POST[\"title\"]; $creators = $_POST[\"cr', 103),
('1title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language ', NULL, '1title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language ', '1title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language ', '2024-02-09', '1title = $_POST[\"title\"]; $creators = $_POST[\"crea', 'English', '1title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language ', '1title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language ', '1title = $_POST[\"title\"]; $creators = $_POST[\"crea', '1title = $_POST[\"title\"]; $creators = $_POST[\"crea', '1title = $_POST[\"title\"]; $creators = $_POST[\"crea', 103),
('21title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language', NULL, '21title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language', '21title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language', '2024-02-09', '21title = $_POST[\"title\"]; $creators = $_POST[\"cre', 'English', '21title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language', '21title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language', '21title = $_POST[\"title\"]; $creators = $_POST[\"cre', '21title = $_POST[\"title\"]; $creators = $_POST[\"cre', '21title = $_POST[\"title\"]; $creators = $_POST[\"cre', 103),
('A catalog: The Robert L. B. Tobin Collection of original scene designs, 1900-1940', 'Cunningham, James G., author', 'NULL', 'United States', '1991-01-01', '200 pages', 'English', 'Staging and Design; Archives and special collections; Theatrical design; Set design and props; Essay; United States Air Force Academy', 'NULL', 'Online Resource', 'Catalogs, Image, United States Air Force Academy, ', 'A catalog of images on staging, and scene and thea', 103),
('make', NULL, '', '', '0000-00-00', '', 'English', '', '', '', '', '', 102),
('Medieval castles', ' Pictorial Charts Educational Trust.', 'NULL', 'England', '1096-01-01', '1 poster: col.; 152 x 78 cm. + 1 guide', 'NULL', 'Castles', 'NULL', 'Electronic Resource; Physical Resource', 'Castles, Medieval Europe, World History, England, ', 'An image depicting medieval castles.', 101),
('testing', NULL, '', '', '0000-00-00', '', 'English', '', '', '', '', '', 102),
('title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language =', NULL, 'title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language =', 'title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language =', '2024-02-21', 'title = $_POST[\"title\"]; $creators = $_POST[\"creat', 'English', 'title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language =', 'title = $_POST[\"title\"]; $creators = $_POST[\"creators\"];  $date = $_POST[\"date\"]; $keywords = $_POST[\"keywords\"]; $description = $_POST[\"description\"]; $type = $_POST[\"type\"]; $contributors = $_POST[\"contributors\"]; $source = $_POST[\"source\"]; $language =', 'title = $_POST[\"title\"]; $creators = $_POST[\"creat', 'title = $_POST[\"title\"]; $creators = $_POST[\"creat', 'title = $_POST[\"title\"]; $creators = $_POST[\"creat', 103),
('type1', NULL, 'type1', 'type1', '2024-02-09', 'type1', 'English', 'type1', 'type1', 'type1', 'type1', 'type1', 103),
('type12', NULL, 'type12', 'type12', '2024-02-09', 'type12', 'English', 'type12', 'type12', 'type12', 'type12', 'type12', 103),
('type122', NULL, 'type122', 'type1222', '2024-02-09', 'type122', 'French', 'type122', 'type122', 'type122', 'type122', 'type122', 103),
('type1222', NULL, 'type1222', 'type12222', '2024-02-09', 'type1222', 'French', 'type1222', 'type1222', 'type1222', 'type1222', 'type1222', 103),
('type12222', NULL, 'type12222', 'type122222', '2024-02-09', 'type12222', 'French', 'type12222', 'type12222', 'type12222', 'type12222', 'type12222', 103),
('type1222212', NULL, 'type122222', 'type1222222', '2024-02-09', 'type122222', 'French', 'type122222', 'type122222', 'type122222', 'type122222', 'type122222', 103),
('type12222121', NULL, 'type1222222', 'type12222222', '2024-02-09', 'type1222222', 'French', 'type1222221', 'type1222221', 'type1222221', 'type1222222', 'type1222221', 103);

-- --------------------------------------------------------

--
-- Table structure for table `journals`
--

CREATE TABLE `journals` (
  `Title` varchar(255) NOT NULL,
  `Creator` varchar(255) DEFAULT NULL,
  `Identifier` varchar(13) DEFAULT NULL,
  `doi` varchar(255) DEFAULT NULL,
  `Volume_number` varchar(255) DEFAULT NULL,
  `Issue_number` varchar(255) DEFAULT NULL,
  `Page_range` varchar(50) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Publication_date` date DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Keywords` varchar(50) DEFAULT NULL,
  `Summary` varchar(50) DEFAULT NULL,
  `Requester_Id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `journals`
--

INSERT INTO `journals` (`Title`, `Creator`, `Identifier`, `doi`, `Volume_number`, `Issue_number`, `Page_range`, `Description`, `Publication_date`, `Type`, `Keywords`, `Summary`, `Requester_Id`) VALUES
('12', '12', '12', NULL, '1', '2', '1-20', '123', '2024-02-06', 'book', 'type', 'ype', 102),
('123', '123', '123', NULL, '13', '232', '1-20', '1232', '2024-02-06', 'book3', 'type3', 'ype3', 102),
('Digital presentation and preservation of cultural and scientific heritage.', 'i Institut po matematika i informatika (Bŭlgarska akademii͡a na naukite), issuing body.', '2535-0366', 'NULL', '1', 'NULL', 'NULL', 'The periodical Digital Presentation and Preservation of Cultural and Scientific Heritage presents innovative results, research projects, practices, case studies, and applications in the field of digitisation, documentation, archiving, representation and p', '2011-01-01', 'Online Resource', ' Digital preservation, Preservation metadata, Cult', 'A journal that focuses on the preservation and pre', 101),
('Journal of digital information', 'University of Southampton. Multimedia Research Group.; Texas A & M University. Digital Initiatives Research and Technology Group.', '1368-7506', 'NULL', '1-13', '13', '1', 'The Journal of Digital Information, JoDI, is an electronic journal only (no paper equivalent) for people who work in the digital information field.', '1997-01-01', 'Electronic Resource', 'Metadata, Periodicals, Hypertext systems, Digital ', 'NULL', 103),
('Journal of library metadata', NULL, '1937-5034', NULL, '8', '1', NULL, 'Some issues combined. Description based on: Vol. 8, issue 1 (2008); title from cover image (Informaworld, viewed Sept. 22, 2009). Latest issue consulted: Vol. 19, issue 3/4 (2020) (Taylor & Francis website, viewed Apr. 6, 2020).', '2008-01-01', 'Journal', 'Libraries, United States, Periodicals, Electronic ', 'This journal focuses on library metadata', 105),
('Library administration & management', NULL, '0888-4463', NULL, '22', '4', NULL, 'Journal of the Library Administration and Management Association, 1987-Aug. 2008; of the Library Leadership and Management Association, Sept. 2008-Vol. 22, no. 4 (fall 2008).', '1987-01-01', 'Journal', 'Periodicals, library management, library personnel', 'This journal focuses on the administration of libr', 104),
('Library management bulletin', NULL, '0271-3306', NULL, '9', '1', NULL, NULL, '1985-01-01', 'Journal', 'Libraries, Special Libraries, Administration', 'Special Libraries Association. Library Management ', 102),
('test', NULL, 'test', NULL, '1324', '134', '1-19', 'test', '2024-02-15', 'test', 'test', 'test', 102),
('test2', NULL, 'test2', NULL, '13245', '1343', '1-20', 'test2', '2024-02-19', 'test2', 'test2', 'test2', 102),
('test23', 'test23', 'test23', NULL, '132453', '13433', '1-21', 'test23', '2024-02-07', 'test22', 'test24', 'test23', 102);

-- --------------------------------------------------------

--
-- Table structure for table `librarians`
--

CREATE TABLE `librarians` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `First_name` varchar(50) DEFAULT NULL,
  `Last_name` varchar(50) DEFAULT NULL,
  `Library_members_id` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `librarians`
--

INSERT INTO `librarians` (`username`, `password`, `First_name`, `Last_name`, `Library_members_id`) VALUES
('jane_smith424', 'secret321', 'Jane', 'Smith', 2),
('jess213', 'william424', 'Jess', 'Willaim', 4),
('john123', 'doe134', 'John', 'Doe', 7),
('kate133', 'smith53', 'kate', 'smith', 5);

-- --------------------------------------------------------

--
-- Table structure for table `library_members`
--

CREATE TABLE `library_members` (
  `Library_members_id` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone_number` int(50) NOT NULL,
  `Requester_Id` int(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library_members`
--

INSERT INTO `library_members` (`Library_members_id`, `First_name`, `Last_name`, `Role`, `Email`, `Phone_number`, `Requester_Id`, `password`, `username`) VALUES
(1, 'James', 'Smith', 'Student', 'james.smith@example.com', 123456789, 101, '12345', 'james'),
(2, 'Jane', 'Smith', 'Librarian', 'jane.smith@example.com', 987654321, 102, 'secret321', 'jane_smith424'),
(3, 'Bob', 'Ross', 'Student', 'bob.ross@example.com', 1029298444, 103, '7654', 'jane_smith424'),
(4, 'Jess', 'William', 'Librarian', 'jess.william@example.com', 1033345, 104, '9874', 'jane_smith424'),
(5, 'kate', 'smith', 'librarian', 'kate.smith@test.com', 12938485, 105, '76235', 'jane_smith424'),
(6, 'connor', 'bauman', 'student', 'connor.bauman@test.com', 19239452, 106, '245676', 'jane_smith424'),
(7, 'John', 'Doe', 'Librarian', 'john.doe@example.com', 1234567890, 107, 'password123', 'jane_smith424');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(255) DEFAULT NULL,
  `Email` varchar(11) NOT NULL,
  `Password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Email`, `Password`) VALUES
('tom', 'tom@smith.c', '$2y$10$ku97'),
('smith', 'smith@donal', '$2y$10$bQYV'),
('cari', 'cari@cari.c', '$2y$10$.hYf'),
('dan', 'dan@dan.com', '$2y$10$Rmza'),
('clark', 'clark@clark', '$2y$10$7126'),
('carie', 'carie@carie', '$2y$10$/E9a'),
('', '', ''),
('', '', ''),
('dan', 'dan@smith.c', '$2y$10$legG');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `Title` varchar(255) NOT NULL,
  `Directors` varchar(255) DEFAULT NULL,
  `Producers` varchar(255) DEFAULT NULL,
  `Actors` varchar(255) DEFAULT NULL,
  `Release_Date` date DEFAULT NULL,
  `Identifier` varchar(13) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `Contributors` varchar(255) DEFAULT NULL,
  `Genre` varchar(255) DEFAULT NULL,
  `Rights` varchar(255) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Format` varchar(50) DEFAULT NULL,
  `Summary` text DEFAULT NULL,
  `Requester_Id` int(11) DEFAULT NULL,
  `Keywords` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`Title`, `Directors`, `Producers`, `Actors`, `Release_Date`, `Identifier`, `Description`, `Language`, `Contributors`, `Genre`, `Rights`, `Type`, `Format`, `Summary`, `Requester_Id`, `Keywords`) VALUES
('Applying the Lessons of Ancient Greece, Martha Nussbaum', NULL, 'Infobase, film distributor.; Doctoroff Media Group (Firm)', 'Martha Nussbaum; Bill Moyers', '1988-01-01', '4964', 'If you don\'t give your brother a proper funeral, you doom his soul to unrest forever; however, if you save your brother\'s soul, the state will bury you alive as punishment. Or imagine being told that the only way to save your entire fleet from shipwreck is to sacrifice your own daughter. Wrenching predicaments like those were the stuff of Greek tragedy nearly 2,500 years ago; surely, you say, we don\'t face dilemmas so difficult in real life today. Or do we? Human goodness is such a fragile achievement, says Martha Nussbaum in this program with Bill Moyers, that leading a moral life sometimes requires more luck than anything else. A professor of philosophy and classics at Brown University, she finds lessons for modern Americans in what the ancient Greeks thought about virtue and tragedy.', 'English', NULL, 'Philosophy', NULL, 'Electronic Resource', 'Type', 'A 30 minute film about understanding important moral and philosophical lessons from Ancient Greek times', 104, 'Philosophy, Political Science, Social Sciences, Social Structure, Sociology, Ancient Greece'),
('Episode 1, Minoans, Mycenaeans, and Greek City States (Empire Builders, Ancient Greece)', NULL, NULL, NULL, '2022-01-01', '290157', 'In this episode of Empire Builders, we explore the great historic sites of the Minoan civilisation on Crete, Mycenae in the Peloponnese and the emerging Greek city states such as Corinth. We also travel to Greek settlements established in the Mediterranean, at places such as Phaestum in southern Italy and Selinunte in Sicily.', 'English', NULL, 'World History', NULL, 'Film', NULL, 'A film about Minoans, Mycenaens, and ancient Greek city states.', 102, 'Ancient Greece, City States, Minoans, Mycenaeans, Ancient Civilizations, World History'),
('Film', 'Alan Schneider', 'Samuel Beckett', 'Buster Keaton', '1965-01-01', NULL, 'Samuel Beckett\'s only venture into the medium of the cinema. The film, without dialogue, takes as its basis Berkeley\'s theory \"esse est percipi\" - to be is to be perceived.', NULL, NULL, NULL, NULL, 'Film', '16mm', 'A film directed by Alan Schneider, screenplay by Samuel Beckett, featuring Buster Keaton. Samuel Beckett\'s only film', 103, NULL),
('Metadata', 'index.php', 'index.php', 'index.php', '0000-00-00', '1313', 'index.php', 'French', '', 'index.php', 'index.php', 'index.php', 'index.php', 'index.php', 101, 'index.php'),
('Metadatas', 'index.phps', 'index.phps', 'index.phps', '0000-00-00', '13132', 'index.phps', 'French', '', 'index.phpw', 'index.phps', 'index.phps', 'index.phps', 'index.phps', 102, 'index.phps'),
('Metadatasss', 'index.phpss', 'index.phpss', 'index.phpss', '0000-00-00', '1313212', 'index.phpss', 'French', '', 'index.phpws', 'index.phpss', 'index.phpss', 'index.phpss', 'index.phpss', 102, 'index.phpss'),
('Metadatasssa', 'index.phpssa', 'index.phpssa', 'index.phpssa', '0000-00-00', '13132121', 'index.phpssqa', 'English', '', 'index.phpwsa', 'index.phpssa', 'index.phpssa', 'index.phpssa', 'index.phpssa', 102, 'index.phpssa'),
('Metadatasssaa', 'index.phpssaa', 'index.phpssaa', 'index.phpssaa', '0000-00-00', '131321211', 'index.phpssqaa', 'English', '', 'index.phpwsaa', 'index.phpssaa', 'index.phpssaa', 'index.phpssaa', 'index.phpssaa', 102, 'index.phpssaa'),
('Metadatasssaaa', 'index.phpssaaa', 'index.phpssaaa', 'index.phpssaaa', '0000-00-00', '1313212111', 'index.phpssqaaa', 'English', '', 'index.phpwsaaa', 'index.phpssaaa', 'index.phpssaaa', 'index.phpssaaa', 'index.phpssaaa', 102, 'index.phpssaaa'),
('test', '', '', '', '0000-00-00', '', '', 'Select', '', '', '', '', '', '', 103, ''),
('The Greek Dramatists : Aeschylus, Sophocles and Euripides', 'Hossick, Malcolm.', 'Infobase', 'NULL', '0000-00-00', '114800', ' The short-lived democratic system of Ancient Greece gave way to three major dramatists: Aeschylus, Sophocles, and Euripides. This film examines the dramatist culture of Ancient Greece, the role its government played, and the freedom of speech delivered onstage; a brief overview of Greece\'s early political history is given. The evolution of theatre and drama were forever changed by the three tragedians studied. Listen to readings from each of the playwrights\' work.', 'English', 'NULL', 'Theatre', 'NULL', 'Electronic Resource', 'Type', 'A film about three of te most prominent dramatists in ancient Greece: Aeschylus, Sophocles, and Euripides.', 107, 'Theatre, Ancient Greece, World History, Tragedians'),
('The Most Beautiful Ancient Sites in Greece, Lost Civilizations', 'NULL', 'Paris: Blue Bird Productions', 'NULL', '0000-00-00', '215378', 'This program explores the most beautiful sites of the civilization of ancient Greece. In Athens, the Acropolis is an extraordinary architectural and artistic structure with several monuments including the Parthenon (the temple of Athena). Delphi is one of the most famous archaeological sites of ancient Greece. It was a place of worship where the Phytia, (oracle of the sanctuary of Apollo) officiated. In the Peloponnese on the site of Olympia, there are remains of all the sports facilities intended for the celebration of the Olympic Games that were held there from 776 B.C. onwards. Finally, Epidaurus is famous for its exceptionally well-preserved theatre of the 4th century B.C.', 'English', 'NULL', 'World History', 'NULL', 'Online Resource', 'Type', 'A film about archeological sites in ancient Greece.', 106, 'World History,Ancient History, Ancient Civilizations, Architecture, Ancient Greece, Archeology'),
('The Role of theatre in ancient Greece', 'Elliniki Tileoras', 'New York, N.Y.: Infobase', 'NULL', '0000-00-00', '1634', ' This program looks at the theatres of Herodus Atticus, Epidauros, Corinth (where Arion is said to have taught the dithyramb), and many others to explain the design of the ancient theatre, the synthesis of art forms that was ancient Greek drama, the origins of tragedy, the audience in classical times, the comparative roles of writer/director and actors, and the use of the surrounding landscape in many plays.', 'English', 'NULL', 'Theatre', 'NULL', 'Electronic Resource', 'Type', 'A film that looks into various aspects of Ancient Greek theatre, including stage setting, direction and production.', 105, 'Theatre Stage-setting and Scenery, Theatre Production and Direction, Greek Drama, Ancient Greece');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Title`),
  ADD KEY `Requester_Id` (`Requester_Id`);

--
-- Indexes for table `dissertations`
--
ALTER TABLE `dissertations`
  ADD PRIMARY KEY (`Title`),
  ADD KEY `Requester_Id` (`Requester_Id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Title`),
  ADD KEY `Requester_Id` (`Requester_Id`);

--
-- Indexes for table `journals`
--
ALTER TABLE `journals`
  ADD PRIMARY KEY (`Title`),
  ADD KEY `Requester_Id` (`Requester_Id`);

--
-- Indexes for table `librarians`
--
ALTER TABLE `librarians`
  ADD PRIMARY KEY (`username`),
  ADD KEY `Library_members_id` (`Library_members_id`);

--
-- Indexes for table `library_members`
--
ALTER TABLE `library_members`
  ADD PRIMARY KEY (`Library_members_id`),
  ADD UNIQUE KEY `Requester_Id` (`Requester_Id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`Title`),
  ADD KEY `fk_requester_id` (`Requester_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Requester_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105035284;

--
-- AUTO_INCREMENT for table `library_members`
--
ALTER TABLE `library_members`
  MODIFY `Library_members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`Requester_Id`) REFERENCES `library_members` (`Requester_Id`);

--
-- Constraints for table `dissertations`
--
ALTER TABLE `dissertations`
  ADD CONSTRAINT `dissertations_ibfk_1` FOREIGN KEY (`Requester_Id`) REFERENCES `library_members` (`Requester_Id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`Requester_Id`) REFERENCES `library_members` (`Requester_Id`);

--
-- Constraints for table `journals`
--
ALTER TABLE `journals`
  ADD CONSTRAINT `journals_ibfk_1` FOREIGN KEY (`Requester_Id`) REFERENCES `library_members` (`Requester_Id`);

--
-- Constraints for table `librarians`
--
ALTER TABLE `librarians`
  ADD CONSTRAINT `librarians_ibfk_1` FOREIGN KEY (`Library_members_id`) REFERENCES `library_members` (`Library_members_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_Library_member_id` FOREIGN KEY (`Requester_id`) REFERENCES `library_members` (`Library_members_id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `fk_requester_id` FOREIGN KEY (`Requester_Id`) REFERENCES `library_members` (`Requester_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

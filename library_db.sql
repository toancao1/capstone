-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 08:01 AM
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
('Metadata', 'Marcia Lei Zeng, Jian Qin', 'ISBN-13: 9781', '2016-01-01', 'xxvii, 555 pages : illustrations ; 23 cm. Includes bibliographical references (pages 497-531) and index.', 'Neal-Schuman, an imprint of the American Library Association', 'English', 'N/A', 'Metadata', 'N/A', 'Book', 'Metadata, information science, digital information', 'Metadata remains the solution for describing the e', 102);

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
('Computer Age Sociology ', 'Verhagen, Mark', '30728735', 'ProQuest Dissertations Publishing', '2022-01-01', '\'Quantitative sociology is dominated by \\\'beta hat\\\'-questions, which refer to the process of defining a model of the world and interpreting its estimated coefficients when fit to data. Unfortunately, the situations where we actually know how this model s', 'English', 'NULL', 'DAI-C 85/3(E), Dissertation Abstracts International', 'Sociology', 'Sociology', 'NULL', 'Electronic Resource', 'NULL', 'NULL', 'NULL', 'NULL', 102);

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
('A catalog: The Robert L. B. Tobin Collection of original scene designs, 1900-1940', 'Cunningham, James G., author', 'NULL', 'United States', '1991-01-01', '200 pages', 'English', 'Staging and Design; Archives and special collections; Theatrical design; Set design and props; Essay; United States Air Force Academy', 'NULL', 'Online Resource', 'Catalogs, Image, United States Air Force Academy, ', 'A catalog of images on staging, and scene and thea', 103),
('Medieval castles', ' Pictorial Charts Educational Trust.', 'NULL', 'England', '1096-01-01', '1 poster: col.; 152 x 78 cm. + 1 guide', 'NULL', 'Castles', 'NULL', 'Electronic Resource; Physical Resource', 'Castles, Medieval Europe, World History, England, ', 'An image depicting medieval castles.', 101);

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
('Digital presentation and preservation of cultural and scientific heritage.', 'i Institut po matematika i informatika (Bŭlgarska akademii͡a na naukite), issuing body.', '2535-0366', 'NULL', '1', 'NULL', 'NULL', 'The periodical Digital Presentation and Preservation of Cultural and Scientific Heritage presents innovative results, research projects, practices, case studies, and applications in the field of digitisation, documentation, archiving, representation and p', '2011-01-01', 'Online Resource', ' Digital preservation, Preservation metadata, Cult', 'A journal that focuses on the preservation and pre', 101),
('Journal of digital information', 'University of Southampton. Multimedia Research Group.; Texas A & M University. Digital Initiatives Research and Technology Group.', '1368-7506', 'NULL', '1-13', '13', '1', 'The Journal of Digital Information, JoDI, is an electronic journal only (no paper equivalent) for people who work in the digital information field.', '1997-01-01', 'Electronic Resource', 'Metadata, Periodicals, Hypertext systems, Digital ', 'NULL', 103),
('Journal of library metadata', NULL, '1937-5034', NULL, '8', '1', NULL, 'Some issues combined. Description based on: Vol. 8, issue 1 (2008); title from cover image (Informaworld, viewed Sept. 22, 2009). Latest issue consulted: Vol. 19, issue 3/4 (2020) (Taylor & Francis website, viewed Apr. 6, 2020).', '2008-01-01', 'Journal', 'Libraries, United States, Periodicals, Electronic ', 'This journal focuses on library metadata', 105),
('Library administration & management', NULL, '0888-4463', NULL, '22', '4', NULL, 'Journal of the Library Administration and Management Association, 1987-Aug. 2008; of the Library Leadership and Management Association, Sept. 2008-Vol. 22, no. 4 (fall 2008).', '1987-01-01', 'Journal', 'Periodicals, library management, library personnel', 'This journal focuses on the administration of libr', 104);

-- --------------------------------------------------------

--
-- Table structure for table `librarians`
--

CREATE TABLE `librarians` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `First_name` varchar(50) DEFAULT NULL,
  `Last_name` varchar(50) DEFAULT NULL,
  `Library_members_id` int(11) DEFAULT NULL
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
(3, 'Bob', 'Ross', 'Student', 'bob.ross@example.com', 1029298444, 103, '7654', 'Bob'),
(4, 'Jess', 'William', 'Librarian', 'jess.william@example.com', 1033345, 104, '9874', 'Jess'),
(5, 'kate', 'smith', 'librarian', 'kate.smith@test.com', 12938485, 105, '76235', 'Kate'),
(6, 'connor', 'bauman', 'student', 'connor.bauman@test.com', 19239452, 106, '245676', 'Connor '),
(7, 'John', 'Doe', 'Librarian', 'john.doe@example.com', 1234567890, 107, 'password123', 'John ');

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
('The Greek Dramatists : Aeschylus, Sophocles and Euripidesacc', 'Hossick, Malcolm.', 'Infobase', 'NULL', '0000-00-00', '114800', ' The short-lived democratic system of Ancient Greece gave way to three major dramatists: Aeschylus, Sophocles, and Euripides. This film examines the dramatist culture of Ancient Greece, the role its government played, and the freedom of speech delivered onstage; a brief overview of Greece\'s early political history is given. The evolution of theatre and drama were forever changed by the three tragedians studied. Listen to readings from each of the playwrights\' work.', 'English', 'NULL', 'Theatre', 'NULL', 'Electronic Resource', '1 online resource (1 video file (49 min., 42 sec.)', 'A film about three of te most prominent dramatists in ancient Greece: Aeschylus, Sophocles, and Euripides.', 107, 'Theatre, Ancient Greece, World History, Tragedians'),
('The Most Beautiful Ancient Sites in Greece, Lost Civilizations', 'NULL', 'Paris: Blue Bird Productions', 'NULL', '0000-00-00', '215378', 'This program explores the most beautiful sites of the civilization of ancient Greece. In Athens, the Acropolis is an extraordinary architectural and artistic structure with several monuments including the Parthenon (the temple of Athena). Delphi is one of the most famous archaeological sites of ancient Greece. It was a place of worship where the Phytia, (oracle of the sanctuary of Apollo) officiated. In the Peloponnese on the site of Olympia, there are remains of all the sports facilities intended for the celebration of the Olympic Games that were held there from 776 B.C. onwards. Finally, Epidaurus is famous for its exceptionally well-preserved theatre of the 4th century B.C.', 'English', 'NULL', 'World History', 'NULL', 'Online Resource', ' 1 online resource (1 video file (52 min., 16 sec)', 'A film about archeological sites in ancient Greece.', 106, 'World History,Ancient History, Ancient Civilizations, Architecture, Ancient Greece, Archeology'),
('The Role of theatre in ancient Greece', 'Elliniki Tileoras', 'New York, N.Y.: Infobase', 'NULL', '2005-01-01', '1634', ' This program looks at the theatres of Herodus Atticus, Epidauros, Corinth (where Arion is said to have taught the dithyramb), and many others to explain the design of the ancient theatre, the synthesis of art forms that was ancient Greek drama, the origins of tragedy, the audience in classical times, the comparative roles of writer/director and actors, and the use of the surrounding landscape in many plays.', 'English', 'NULL', 'Theatre', 'NULL', 'Electronic Resource', ' 1 streaming video file (23 min.) : sound, color, ', 'A film that looks into various aspects of Ancient Greek theatre, including stage setting, direction and production.', 105, 'Theatre Stage-setting and Scenery, Theatre Production and Direction, Greek Drama, Ancient Greece');

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
  ADD KEY `Requester_Id` (`Requester_Id`) USING BTREE;

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
  MODIFY `Requester_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105035289;

--
-- AUTO_INCREMENT for table `library_members`
--
ALTER TABLE `library_members`
  MODIFY `Library_members_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

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
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `fk_requester_id` FOREIGN KEY (`Requester_Id`) REFERENCES `library_members` (`Requester_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

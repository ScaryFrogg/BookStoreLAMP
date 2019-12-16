-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2019 at 09:37 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrzimo_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `istorija`
--

CREATE TABLE `istorija` (
  `knjiga_id` int(255) NOT NULL,
  `korisnik_id` int(255) NOT NULL,
  `kolicina` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `knjiga`
--

CREATE TABLE `knjiga` (
  `naslov` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `knjiga_id` int(5) NOT NULL,
  `opis` varchar(1000) DEFAULT NULL,
  `kategorija` varchar(255) CHARACTER SET utf8 NOT NULL,
  `br_kupovina` int(255) NOT NULL DEFAULT 0,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knjiga`
--

INSERT INTO `knjiga` (`naslov`, `autor`, `knjiga_id`, `opis`, `kategorija`, `br_kupovina`, `slika`) VALUES
('Trag', 'Patriša Kornvel', 8, 'Doktorka Kej Skarpeta, sada samostalni konsultant na jugu Floride, vraća se u grad koji joj je pet godina ranije okrenuo leđa. Nedavno imenovani glavni medicinski istražitelj Ričmonda tvrdi da mu je potrebna njena pomoć u rešavanju zbunjujućeg zločina. No po dolasku Skarpeta utvrđuje da ništa nije kao što je očekivala: njena nekadašnja laboratorija je u fazi rasula, nesposobni šef zapravo nije onaj koji ju je pozvao, njen nekadašnji zamenik ima lične nevolje o kojima ne želi da govori, a u slučaj se meša blistava agentkinja FBI-ja koju Skarpeta ne trpi od prvog trenutka.', 'Triler', 1, 'img/knjige/trag-patriša_kornvel'),
('Slejdova vila', 'Dejvid Mičel', 9, 'Nedaleko od paba u jednoj sasvim običnoj četvrti, na zidu od cigala u uzanom prolazu, ako se sve okolnosti poklope, naći ćete ulaz u Slejdovu vilu. Neki neznanac će vas pozdraviti po imenu i pozvaće vas da uđete. Isprva nećete želeti da je napustite. Kasnije ćete shvatiti da ne možete. Svakih devet godina stanovnici kuće – čudni blizanci, brat i sestra – šalju jedinstvenu pozivnicu nekome ko se oseća drugačije i usamljeno: jednom starmalom dečaku, nedavno razvedenom policajcu, stidljivoj studentkinji. Ali šta se zaista dešava unutar Slejdove kuće? Za one koji to otkriju, već je prekasno...', 'Drama / Horor / Fantastika', 2, 'img/knjige/slejdova_vila-dejvid_mičel'),
('Pajns', 'Blejk Krauč', 10, 'Agent tajne službe Itan Berk došao je u Vejvard Pajns, u državi Ajdaho – parčence raja usred nedođije – u potrazi za dva nestala federalna agenta, od kojih je jedan njegov bivši partner. Povređen u nesreći koje se ne seća budi se u bolnici – bez ličnih dokumenata i stvari – i počinje da podozreva kako u Vejvard Pajnsu ništa nije kao što izgleda.', 'Trileri / Fantastika / Horor', 3, 'img/knjige/pajns-blejk_krauč'),
('Koreni', 'Dobrica Ćosić', 11, 'Smeštena u vreme političkih promena i previranja srpskog građanskog društva s kraja XIX i početkom XX veka, priča prati živote Aćima Katića, čoveka tradicionalnog kova i radikala, i njegovih sinova Vukašina i Đorđa. Budući političar i očeva nada, Vukašin se vraća sa studija u Parizu i saopštava da se ženi ćerkom liberala Tošića, Aćimovog političkog neprijatelja, i da prelazi u njegovu stranku. Aćim ga se odriče i, besan zbog sukoba sa sinom, poziva meštane u selu na dizanje bune. Drugi sin Đorđe, ugledan i bogat seljak, i njegova supruga Simka u isto vreme imaju bračne probleme jer godinama nemaju dece. U strahu od gašenja loze, Simka se odlučuje na očajnički potez: da zatrudni sa Đorđevim slugom.', 'Istorijski / Domaći autori', 4, 'img/knjige/koreni-dobrica_Ćosić'),
('Peščani sat', 'Trejsi Ris', 12, 'Razborita Nora uvek je prihvatala svoje uspehe kao nešto prirodno, ali život odjednom počinje da joj se ruši. Izmučena anksioznošću i košmarima, shvata da je privlače dugačke plaže Tenbija, mestašceta u kom je bila samo jednom. Zajedno s jednom meštankom iznajmljuje predivnu vilu i polako počinje da se navikava na novi život. Ali Tenbi skriva tajnu i Nora će uskoro otkriti da ovaj gradić na obali mora ima moć da zaleči čak i najbolnije uspomene.', 'Drama / Ljubavni', 0, 'img/knjige/peščani_sat-trejsi_ris'),
('The Maze Runner', 'James Dashner', 15, 'When the doors of the lift crank open, the only thing Thomas remembers\nis his first name. But he\'s not alone. He\'s surrounded by boys\nwho welcome him to the Glade - a walled encampment at the centre\nof a bizarre and terrible stone maze. Like Thomas, the Gladers\ndon\'t know why or how they came to be there - or what\'s happened\nto the world outside. All they know is that every morning when\nthe walls slide back, they will risk everything - even the Grievers,\nhalf-machine, half-animal horror that patrol its corridors, to\ntry and find out.', 'Fiction / Adventure', 0, 'img/knjige/the_maze_runner-james_dashner');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `ime` varchar(25) CHARACTER SET utf8 NOT NULL,
  `prezime` varchar(25) CHARACTER SET utf8 NOT NULL,
  `korisnik_id` int(255) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  `administrator` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`ime`, `prezime`, `korisnik_id`, `email`, `password`, `administrator`) VALUES
('Vojin', 'Puric', 5, 'voja989@gmail.com', 'd0aeeef9a9aeddbaa999b7b65101b3a1', 1),
('Viktor', 'Markovic', 6, 'viktor.s.markovic@gmail.com', 'fb6f312baac4bd9d2bbe6547d81091c2', 1),
('Lidija', 'Todorovic', 7, 'lidijatodorovic13@gmail.com', '3c889aa3cfe368394e66da8f3c26edd8', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korpe`
--

CREATE TABLE `korpe` (
  `knjiga_id` int(255) NOT NULL,
  `korisnik_id` int(255) NOT NULL,
  `kolicina` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korpe`
--

INSERT INTO `korpe` (`knjiga_id`, `korisnik_id`, `kolicina`) VALUES
(10, 5, 1),
(11, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `liste_zelja`
--

CREATE TABLE `liste_zelja` (
  `knjiga_id` int(255) NOT NULL,
  `korisnik_id` int(255) NOT NULL,
  `kolicina` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `liste_zelja`
--

INSERT INTO `liste_zelja` (`knjiga_id`, `korisnik_id`, `kolicina`) VALUES
(9, 5, 1),
(11, 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `istorija`
--
ALTER TABLE `istorija`
  ADD KEY `knjiga_id` (`knjiga_id`),
  ADD KEY `korisnik_id` (`korisnik_id`),
  ADD KEY `kolicina` (`kolicina`);

--
-- Indexes for table `knjiga`
--
ALTER TABLE `knjiga`
  ADD PRIMARY KEY (`knjiga_id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`korisnik_id`);

--
-- Indexes for table `korpe`
--
ALTER TABLE `korpe`
  ADD UNIQUE KEY `knjiga_id` (`knjiga_id`),
  ADD KEY `korisnik_id` (`korisnik_id`),
  ADD KEY `kolicina` (`kolicina`);

--
-- Indexes for table `liste_zelja`
--
ALTER TABLE `liste_zelja`
  ADD KEY `knjiga_id` (`knjiga_id`),
  ADD KEY `korisnik_id` (`korisnik_id`),
  ADD KEY `kolicina` (`kolicina`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `knjiga`
--
ALTER TABLE `knjiga`
  MODIFY `knjiga_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `korisnik_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `istorija`
--
ALTER TABLE `istorija`
  ADD CONSTRAINT `istorija_ibfk_1` FOREIGN KEY (`knjiga_id`) REFERENCES `knjiga` (`knjiga_id`),
  ADD CONSTRAINT `istorija_ibfk_2` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnici` (`korisnik_id`);

--
-- Constraints for table `korpe`
--
ALTER TABLE `korpe`
  ADD CONSTRAINT `korpe_ibfk_1` FOREIGN KEY (`knjiga_id`) REFERENCES `knjiga` (`knjiga_id`),
  ADD CONSTRAINT `korpe_ibfk_2` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnici` (`korisnik_id`);

--
-- Constraints for table `liste_zelja`
--
ALTER TABLE `liste_zelja`
  ADD CONSTRAINT `liste_zelja_ibfk_1` FOREIGN KEY (`knjiga_id`) REFERENCES `knjiga` (`knjiga_id`),
  ADD CONSTRAINT `liste_zelja_ibfk_2` FOREIGN KEY (`korisnik_id`) REFERENCES `korisnici` (`korisnik_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

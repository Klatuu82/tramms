-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 05. Nov 2017 um 23:10
-- Server-Version: 10.1.26-MariaDB
-- PHP-Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `adwords`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_adword`
--

CREATE TABLE `t_adword` (
  `id` int(11) NOT NULL,
  `adWord` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_adword`
--

INSERT INTO `t_adword` (`id`, `adWord`) VALUES
(33, '3er'),
(29, 'A4'),
(30, 'A5'),
(25, 'Bilder'),
(28, 'google'),
(35, 'i5'),
(32, 'i7'),
(26, 'posten'),
(31, 'RS'),
(36, 'Schuhe'),
(20, 'Social Network'),
(27, 'tweet');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_customer`
--

CREATE TABLE `t_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `text` varchar(1024) DEFAULT NULL,
  `pic_link` varchar(1024) DEFAULT NULL,
  `e_Mail` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_customer`
--

INSERT INTO `t_customer` (`id`, `name`, `text`, `pic_link`, `e_Mail`) VALUES
(1, 'Tramms', 'Tramms ist eine aufstrebende IT Schmiede, die schon heute Ihrer Zeit vorraus ist.', '../src/logo1.png', 'info@tramms.de'),
(2, 'Twitter Inc.', 'Twitter Inc. mit Sitz in San Francisco ist der börsennotierte Betreiber des Mikroblogging-Dienstes Twitter.', 'https://upload.wikimedia.org/wikipedia/de/thumb/9/9f/Twitter_bird_logo_2012.svg/154px-Twitter_bird_logo_2012.svg.png', 'info@twitter.com'),
(8, 'Facebook', 'Facebook ermöglicht die Erstellung von privaten Profilen zur Darstellung der eigenen Person, von Unternehmensseiten zur geschäftlichen Präsenz, sowie von Gruppen zur privaten Diskussion gemeinsamer Interessen. Die Profile können durch Freundschaftsanfragen untereinander vernetzt werden, wobei eine unbeschränkte Anzahl von Abonnenten (analog den Followern auf Twitter) möglich ist, die Höchstgrenze von direkt verbundenen Freunden ist jedoch auf 5.000 Freunde beschränkt.[5][6] Darüber hinaus bietet Facebook einen Messenger sowie eine Entwicklungsplattform zur Erstellung von Apps.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/Facebook_New_Logo_%282015%29.svg/280px-Facebook_New_Logo_%282015%29.svg.png', 'info@facebook.de'),
(9, 'Google', 'Google ist eine Internet-Suchmaschine des US-amerikanischen Unternehmens Google Inc. Übereinstimmende Statistiken zeigen bei weltweiten Suchanfragen Google als Marktführer unter den Internet-Suchmaschinen und als die meistbesuchte Website der Welt.[4][5] Google bearbeitet pro Tag mehr als 3 Milliarden Suchanfragen und hatte im Dezember 2012 über 1,17 Milliarden Nutzer.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/220px-Google_2015_logo.svg.png', 'info@google.com'),
(10, 'Audi', 'Die Audi AG (Audio-Datei / Hörbeispiel Aussprache?/i, Eigenschreibweise: AUDI AG) mit Sitz in Ingolstadt in Bayern ist ein deutscher Automobilhersteller, der dem Volkswagen-Konzern angehört. Der Markenname entstand, als Unternehmensgründer August Horch nach Zerwürfnissen mit dem Finanzvorstand seine A. Horch & Cie. Motorwagenwerke Zwickau verlassen hatte und den Namen für ein neues Unternehmen suchte; denn die Namensrechte an „Horch“ gehörten ihm nach dem Ausscheiden nicht mehr. Die Lösung des Problems fand er im Vorschlag des Zwickauer Gymnasiasten Heinrich Finkentscher (Sohn des mit A. Horch befreundeten Franz Finkentscher), der Horch ins Lateinische übersetzte.[2] Audi ist der Imperativ Singular von audire (zu Deutsch hören, zuhören) und bedeutet „Höre!“ oder eben „Horch!“. Am 25. April 1910 wurden die Audi Automobilwerke GmbH Zwickau in das Handelsregister der Stadt Zwickau eingetragen. 1928 übernahmen die Zschopauer Motorenwerke J. S. Rasmussen AG, bekannt durch ihre Marke DKW, die Audi GmbH. Audi wurde ', 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/92/Audi-Logo_2016.svg/250px-Audi-Logo_2016.svg.png', 'info@audi.de'),
(11, 'BMW', 'Die Bayerische Motoren Werke Aktiengesellschaft (BMW AG) ist die Muttergesellschaft der BMW Group, eines weltweit operierenden deutschen Automobil- und Motorradherstellers mit Sitz in München. Die Produktpalette umfasst die Automobil- und Motorrad-Marke BMW, die Automarken Mini und Rolls-Royce sowie die BMW-Submarken BMW M und BMW i.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/BMW.svg/125px-BMW.svg.png', 'info@bmw.de'),
(12, 'Intel', 'Intel Corporation (von englisch Integrated electronics, dt. „integrierte Elektronik“) ist ein US-amerikanischer Halbleiterhersteller mit Hauptsitz in Santa Clara (Silicon Valley), Kalifornien. Er wurde 1968 von Mitarbeitern des Unternehmens Fairchild Semiconductor gegründet. Die Europazentrale befindet sich seit 1974 in München.[3] Intel ist vor allem für PC-Mikroprozessoren bekannt, bei denen das Unternehmen weltweit einen Marktanteil von ungefähr 80 % hält. Außerdem produziert Intel diverse weitere Arten von Mikrochips für Computer, zum Beispiel Chipsätze für Mainboards („Intel ICH“, „Intel GMA“), WLAN und Netzwerkkarten sowie Embedded-CPUs und Flash-Speicher.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Intel-logo.svg/189px-Intel-logo.svg.png', 'info@intel.com'),
(13, 'Puma', 'Die Puma SE (Eigenschreibweise: PUMA SE) mit Sitz in Herzogenaurach ist ein börsennotierter Sportartikelanbieter und Hersteller von Schuhen, Textilien und Accessoires. Die Puma SE befindet sich (Ende 2013) zu 86 % im Besitz des französischen Konzerns Kering.[3] Puma ist mit 3,4 Milliarden Euro Jahresumsatz, einem Konzerngewinn von rund 37 Millionen Euro und 11.351 Mitarbeitern im Jahr 2015 neben Adidas und Nike einer der weltweit größten Sportartikelhersteller.', 'https://upload.wikimedia.org/wikipedia/de/thumb/d/d7/Puma_Logo.svg/234px-Puma_Logo.svg.png', 'info@puma.de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_customer_adwords`
--

CREATE TABLE `t_customer_adwords` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `adWord` varchar(50) NOT NULL,
  `price` double(11,0) NOT NULL DEFAULT '0',
  `click_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_customer_adwords`
--

INSERT INTO `t_customer_adwords` (`id`, `id_customer`, `adWord`, `price`, `click_count`) VALUES
(8, 2, 'Social Network', 11, 0),
(9, 8, 'Bilder', 5, 0),
(10, 8, 'posten', 1, 0),
(11, 2, 'tweet', 50, 0),
(12, 9, 'google', 1000, 0),
(13, 10, 'A4', 2, 0),
(14, 10, 'A5', 1, 0),
(15, 10, 'RS', 1, 0),
(16, 11, 'i7', 1, 0),
(17, 11, '3er', 12, 0),
(18, 12, 'i7', 11, 0),
(19, 12, 'i5', 6, 0),
(20, 13, 'Schuhe', 51, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_customer_social`
--

CREATE TABLE `t_customer_social` (
  `id_customer` int(11) NOT NULL,
  `id_social` int(11) NOT NULL,
  `extention` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_customer_social`
--

INSERT INTO `t_customer_social` (`id_customer`, `id_social`, `extention`) VALUES
(2, 1, 'TwitterInc/'),
(2, 3, 'Twitter'),
(2, 4, 'https://twitter.com/'),
(2, 5, 'twitter?lang=de'),
(8, 1, 'Facebook/'),
(8, 3, 'Facebook'),
(8, 4, 'https://facebook.de'),
(8, 5, 'facebook?lang=de'),
(9, 1, 'Google/'),
(9, 3, 'Google'),
(9, 4, 'https://google.de'),
(9, 5, 'Google?lang=de'),
(10, 1, 'AudiDE/'),
(10, 3, 'Audi'),
(10, 4, 'https://audi.de'),
(10, 5, 'audi?lang=de'),
(11, 1, 'BMWDeutschland/'),
(11, 3, 'BMW'),
(11, 4, 'http://www.bmw.de'),
(11, 5, 'bmw?lang=de'),
(12, 1, 'Intel/'),
(12, 3, 'Intel'),
(12, 4, 'http://www.intel.de'),
(12, 5, 'intel?lang=de'),
(13, 1, 'Puma/'),
(13, 3, 'Puma'),
(13, 4, 'http://eu.puma.com'),
(13, 5, 'puma?lang=de');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_social`
--

CREATE TABLE `t_social` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `preLink` varchar(50) DEFAULT NULL,
  `Bild` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_social`
--

INSERT INTO `t_social` (`id`, `name`, `preLink`, `Bild`) VALUES
(1, 'Facebook', 'https://de-de.facebo', '../src/facebook.png'),
(3, 'Wikipedia', 'https://de.wikipedia.org/wiki/', '../src/wikipedia.png'),
(4, 'Webseite', '', '../src/web.png'),
(5, 'Twitter', 'https://twitter.com/', '../src/twitter.png');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_user`
--

CREATE TABLE `t_user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pwd` varchar(64) DEFAULT NULL,
  `permission` varchar(10) NOT NULL,
  `id_customer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `t_user`
--

INSERT INTO `t_user` (`id`, `name`, `pwd`, `permission`, `id_customer`) VALUES
(3, 'Talal', 'addb0f5e7826c857d7376d1bd9bc33c0c544790a2eac96144a8af22b1298c940', 'admin', 1),
(4, 'Raslan', 'addb0f5e7826c857d7376d1bd9bc33c0c544790a2eac96144a8af22b1298c940', 'admin', 1),
(5, 'Marcel', 'addb0f5e7826c857d7376d1bd9bc33c0c544790a2eac96144a8af22b1298c940', 'admin', 1),
(6, 'Michael', 'addb0f5e7826c857d7376d1bd9bc33c0c544790a2eac96144a8af22b1298c940', 'editor', 1),
(7, 'Stefan', 'addb0f5e7826c857d7376d1bd9bc33c0c544790a2eac96144a8af22b1298c940', 'editor', 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `t_adword`
--
ALTER TABLE `t_adword`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adWord` (`adWord`);

--
-- Indizes für die Tabelle `t_customer`
--
ALTER TABLE `t_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `t_customer_adwords`
--
ALTER TABLE `t_customer_adwords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `adWord` (`adWord`);

--
-- Indizes für die Tabelle `t_customer_social`
--
ALTER TABLE `t_customer_social`
  ADD PRIMARY KEY (`id_customer`,`id_social`),
  ADD KEY `id_social` (`id_social`);

--
-- Indizes für die Tabelle `t_social`
--
ALTER TABLE `t_social`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `t_adword`
--
ALTER TABLE `t_adword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT für Tabelle `t_customer`
--
ALTER TABLE `t_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `t_customer_adwords`
--
ALTER TABLE `t_customer_adwords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT für Tabelle `t_social`
--
ALTER TABLE `t_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `t_customer_adwords`
--
ALTER TABLE `t_customer_adwords`
  ADD CONSTRAINT `t_customer_adwords_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `t_customer` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `t_customer_adwords_ibfk_2` FOREIGN KEY (`adWord`) REFERENCES `t_adword` (`adWord`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints der Tabelle `t_customer_social`
--
ALTER TABLE `t_customer_social`
  ADD CONSTRAINT `t_customer_social_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `t_customer` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `t_customer_social_ibfk_2` FOREIGN KEY (`id_social`) REFERENCES `t_social` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints der Tabelle `t_user`
--
ALTER TABLE `t_user`
  ADD CONSTRAINT `t_user_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `t_customer` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

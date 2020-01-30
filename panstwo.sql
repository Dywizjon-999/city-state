-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Sty 2020, 19:55
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `panstwa`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `panstwo`
--

CREATE TABLE `panstwo` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `panstwo`
--

INSERT INTO `panstwo` (`id`, `nazwa`) VALUES
(1, 'Afganistan'),
(2, 'Albania'),
(3, 'Algieria'),
(4, 'Andora'),
(5, 'Angola'),
(6, 'Antigua i Barbuda'),
(7, 'Arabia Saudyjska'),
(8, 'Argentyna'),
(9, 'Armenia'),
(10, 'Australia'),
(11, 'Austria'),
(12, 'Azerbejdżan'),
(13, 'Bahamy'),
(14, 'Bahrajn'),
(15, 'Bangladesz'),
(16, 'Barbados'),
(17, 'Belgia'),
(18, 'Belize'),
(19, 'Benin'),
(20, 'Bhutan'),
(21, 'Białoruś'),
(22, 'Boliwia'),
(23, 'Bośnia i Hercegowina'),
(24, 'Botswana'),
(25, 'Brazylia'),
(26, 'Brunei'),
(27, 'Bułgaria'),
(28, 'Burkina Faso'),
(29, 'Burundi'),
(30, 'Chile'),
(31, 'Chiny'),
(32, 'Chorwacja'),
(33, 'Cypr'),
(34, 'Czad'),
(35, 'Czarnogóra'),
(36, 'Czechy'),
(37, 'Dania'),
(38, 'Demokratyczna Republika Konga'),
(39, 'Dominika'),
(40, 'Dominikana'),
(41, 'Dżibuti'),
(42, 'Egipt'),
(43, 'Ekwador'),
(44, 'Erytrea'),
(45, 'Estonia'),
(46, 'Eswatini'),
(47, 'Etiopia'),
(48, 'Fidżi'),
(49, 'Filipiny'),
(50, 'Finlandia'),
(51, 'Francja'),
(52, 'Gabon'),
(53, 'Gambia'),
(54, 'Ghana'),
(55, 'Grecja'),
(56, 'Grenada'),
(57, 'Gruzja'),
(58, 'Gujana'),
(59, 'Gwatemala'),
(60, 'Gwinea'),
(61, 'Gwinea Bissau'),
(62, 'Gwinea Równikowa'),
(63, 'Haiti'),
(64, 'Hiszpania'),
(65, 'Holandia'),
(66, 'Honduras'),
(67, 'Indie'),
(68, 'Indonezja'),
(69, 'Irak'),
(70, 'Iran'),
(71, 'Irlandia'),
(72, 'Islandia'),
(73, 'Izrael'),
(74, 'Jamajka'),
(75, 'Japonia'),
(76, 'Jemen'),
(77, 'Jordania'),
(78, 'Kambodża'),
(79, 'Kamerun'),
(80, 'Kanada'),
(81, 'Katar'),
(82, 'Kazachstan'),
(83, 'Kenia'),
(84, 'Kirgistan'),
(85, 'Kiribati'),
(86, 'Kolumbia'),
(87, 'Komory'),
(88, 'Kongo'),
(89, 'Korea Południowa'),
(90, 'Korea Północna'),
(91, 'Kostaryka'),
(92, 'Kuba'),
(93, 'Kuwejt'),
(94, 'Laos'),
(95, 'Lesotho'),
(96, 'Liban'),
(97, 'Liberia'),
(98, 'Libia'),
(99, 'Liechtenstein'),
(100, 'Litwa'),
(101, 'Luksemburg'),
(102, 'Łotwa'),
(103, 'Macedonia Północna'),
(104, 'Madagaskar'),
(105, 'Malawi'),
(106, 'Malediwy'),
(107, 'Malezja'),
(108, 'Mali'),
(109, 'Malta'),
(110, 'Maroko'),
(111, 'Mauretania'),
(112, 'Mauritius'),
(113, 'Meksyk'),
(114, 'Mikronezja'),
(115, 'Mjanma'),
(116, 'Mołdawia'),
(117, 'Monako'),
(118, 'Mongolia'),
(119, 'Mozambik'),
(120, 'Namibia'),
(121, 'Nauru'),
(122, 'Nepal'),
(123, 'Niemcy'),
(124, 'Niger'),
(125, 'Nigeria'),
(126, 'Nikaragua'),
(127, 'Norwegia'),
(128, 'Nowa Zelandia'),
(129, 'Oman'),
(130, 'Pakistan'),
(131, 'Palau'),
(132, 'Panama'),
(133, 'Papua-Nowa Gwinea'),
(134, 'Paragwaj'),
(135, 'Peru'),
(136, 'Polska'),
(137, 'Południowa Afryka'),
(138, 'Portugalia'),
(139, 'Republika Środkowoafrykańska'),
(140, 'Republika Zielonego Przylądka'),
(141, 'Rosja'),
(142, 'Rumunia'),
(143, 'Rwanda'),
(144, 'Saint Kitts i Nevis'),
(145, 'Saint Lucia'),
(146, 'Saint Vincent i Grenadyny'),
(147, 'Salwador'),
(148, 'Samoa'),
(149, 'San Marino'),
(150, 'Senegal'),
(151, 'Serbia'),
(152, 'Seszele'),
(153, 'Sierra Leone'),
(154, 'Singapur'),
(155, 'Słowacja'),
(156, 'Słowenia'),
(157, 'Somalia'),
(158, 'Sri Lanka'),
(159, 'Stany Zjednoczone'),
(160, 'Sudan'),
(161, 'Sudan Południowy'),
(162, 'Surinam'),
(163, 'Syria'),
(164, 'Szwajcaria'),
(165, 'Szwecja'),
(166, 'Tadżykistan'),
(167, 'Tajlandia'),
(168, 'Tanzania'),
(169, 'Timor Wschodni'),
(170, 'Togo'),
(171, 'Tonga'),
(172, 'Trynidad i Tobago'),
(173, 'Tunezja'),
(174, 'Turcja'),
(175, 'Turkmenistan'),
(176, 'Tuvalu'),
(177, 'Uganda'),
(178, 'Ukraina'),
(179, 'Urugwaj'),
(180, 'Uzbekistan'),
(181, 'Vanuatu'),
(182, 'Watykan'),
(183, 'Wenezuela'),
(184, 'Węgry'),
(185, 'Wielka Brytania'),
(186, 'Wietnam'),
(187, 'Włochy'),
(188, 'Wybrzeże Kości Słoniowej'),
(189, 'Wyspy Marshalla'),
(190, 'Wyspy Salomona'),
(191, 'Wyspy Świętego Tomasza i Książęca'),
(192, 'Zambia'),
(193, 'Zimbabwe'),
(194, 'Zjednoczone Emiraty Arabskie');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `panstwo`
--
ALTER TABLE `panstwo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `panstwo`
--
ALTER TABLE `panstwo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

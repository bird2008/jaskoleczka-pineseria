-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Sty 2023, 12:17
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `pinseria`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`) VALUES
(1, 'admin1', '2Or]nnyf[kCaI2aR', 'admin1@gmail.com'),
(2, 'admin2', '|1.MTwzEa,En;%V^', 'admin2@gmail.com'),
(3, 'admin3', 'N>KJgUC}#,J@{4(x', 'admin3@gmail.com');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(11) NOT NULL,
  `name` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `telefon` int(99) NOT NULL,
  `adres` varchar(99) NOT NULL,
  `godzina` varchar(99) NOT NULL,
  `dosodb` varchar(99) NOT NULL,
  `banknot` varchar(99) NOT NULL,
  `platnosc` varchar(99) NOT NULL,
  `zamowienie` varchar(1000) NOT NULL,
  `date` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `name`, `email`, `telefon`, `adres`, `godzina`, `dosodb`, `banknot`, `platnosc`, `zamowienie`, `date`) VALUES
(2, 'dfgdfg', 'sdfsdf@gmail.com', 435345345, 'sdfsdf', '234', 'Odbiór w lokalu', 'fdsf', 'Kartą', ' Pinsa Amore Mio  34 zł (ser mozzarella, szynka parmeńska, orzechy, rukola, ser parmezan, sos pomidorowy) Pizza Salami  26 zł (ser mozzarella, salami, sos pomidorowy) +Calzone salami -  Mozarello, sos pomidorowy, pieczarki, salami 23 zł   ', '2023-01-19 12:33:21'),
(3, 'sdsds', 'sdfsdf@gmail.com', 2423, 'sdfsdf', 'sdfsdf', 'Odbiór w lokalu', 'werewr', 'Gotówką', ' Pinsa Margherita 27.50 zł   (ser mozzarella, sos pomidorowy)  ', '2023-01-19 12:33:49'),
(4, '', '', 0, '', '', 'Dostawa pod adres', '', 'Gotówką', ' Wega Wega 30 zł (mazarella wegańska, oliwki, pomidorki, kukurydza, rukola, sos pomidorowy)  Pinsa Pepperoni  31.50 zł (ser mozzarella, salami pikantne, pieczarki, papryka, sos pomidorowy) Pinsa del Contadino  33 zł (ser mozzarella, mięso mielone, pieczarki, boczek, sos pomidorowy) Pinsa de Roma 34 zł  (ser mozzarella, ser cheddar, ser gouda, ser gorgonzola, orzechy, sos pomidorowy)  ', '2023-01-19 12:34:47');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

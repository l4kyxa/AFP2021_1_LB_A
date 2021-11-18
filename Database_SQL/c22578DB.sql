-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2021. Nov 18. 12:15
-- Kiszolgáló verziója: 10.3.31-MariaDB-0+deb10u1
-- PHP verzió: 7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `c22578DB`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Bejegyzes`
--

CREATE TABLE `Bejegyzes` (
  `ID` int(11) NOT NULL,
  `Felhasznalo_id` int(11) NOT NULL,
  `Uzenet` varchar(1000) NOT NULL,
  `Datum` date NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Felhasznalok`
--

CREATE TABLE `Felhasznalok` (
  `Felhasznalo_id` int(11) NOT NULL,
  `Felhasznalonev` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Jelszo` text NOT NULL,
  `Bejelentkezve` tinyint(1) NOT NULL,
  `Statusz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Kosar`
--

CREATE TABLE `Kosar` (
  `VasaroltTermekazonositoID` int(11) NOT NULL,
  `Felhasznalo_ID` int(11) NOT NULL,
  `TermekazonositoID` int(11) NOT NULL,
  `Mennyiseg/db` int(10) NOT NULL,
  `Ar` int(10) NOT NULL,
  `VasarlasDatum` date NOT NULL,
  `Teljesitve` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `TermekTabla1`
--

CREATE TABLE `TermekTabla1` (
  `TermekazonositoID` int(11) NOT NULL,
  `KategoriaNev` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `TermekTabla2`
--

CREATE TABLE `TermekTabla2` (
  `TermekazonositoID` int(11) NOT NULL,
  `AlkategoriaID` int(11) DEFAULT NULL,
  `TermekNev` varchar(60) DEFAULT NULL,
  `GyartoNev` int(11) DEFAULT NULL,
  `Szin` varchar(60) DEFAULT NULL,
  `Meret` int(11) DEFAULT NULL,
  `Mernyiseg` varchar(20) NOT NULL,
  `Megjegyzes` varchar(250) NOT NULL,
  `Kep` varchar(60) NOT NULL COMMENT 'Képfájl',
  `Ar` int(11) NOT NULL,
  `Statusz` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `Bejegyzes`
--
ALTER TABLE `Bejegyzes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Felhasznalo_id` (`Felhasznalo_id`);

--
-- A tábla indexei `Felhasznalok`
--
ALTER TABLE `Felhasznalok`
  ADD PRIMARY KEY (`Felhasznalo_id`);

--
-- A tábla indexei `Kosar`
--
ALTER TABLE `Kosar`
  ADD PRIMARY KEY (`VasaroltTermekazonositoID`),
  ADD KEY `TermekazonositoID` (`TermekazonositoID`),
  ADD KEY `UserID` (`Felhasznalo_ID`);

--
-- A tábla indexei `TermekTabla1`
--
ALTER TABLE `TermekTabla1`
  ADD PRIMARY KEY (`TermekazonositoID`);

--
-- A tábla indexei `TermekTabla2`
--
ALTER TABLE `TermekTabla2`
  ADD PRIMARY KEY (`TermekazonositoID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `Bejegyzes`
--
ALTER TABLE `Bejegyzes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `Felhasznalok`
--
ALTER TABLE `Felhasznalok`
  MODIFY `Felhasznalo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `TermekTabla1`
--
ALTER TABLE `TermekTabla1`
  MODIFY `TermekazonositoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `TermekTabla2`
--
ALTER TABLE `TermekTabla2`
  MODIFY `TermekazonositoID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `Bejegyzes`
--
ALTER TABLE `Bejegyzes`
  ADD CONSTRAINT `Bejegyzes_ibfk_1` FOREIGN KEY (`Felhasznalo_id`) REFERENCES `Felhasznalok` (`Felhasznalo_id`);

--
-- Megkötések a táblához `Kosar`
--
ALTER TABLE `Kosar`
  ADD CONSTRAINT `Kosar_ibfk_1` FOREIGN KEY (`TermekazonositoID`) REFERENCES `TermekTabla2` (`TermekazonositoID`),
  ADD CONSTRAINT `Kosar_ibfk_2` FOREIGN KEY (`Felhasznalo_ID`) REFERENCES `Felhasznalok` (`Felhasznalo_id`);

--
-- Megkötések a táblához `TermekTabla2`
--
ALTER TABLE `TermekTabla2`
  ADD CONSTRAINT `TermekTabla2_ibfk_1` FOREIGN KEY (`TermekazonositoID`) REFERENCES `TermekTabla1` (`TermekazonositoID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

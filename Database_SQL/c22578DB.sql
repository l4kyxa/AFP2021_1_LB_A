-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2021. Nov 14. 12:58
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
-- Tábla szerkezet ehhez a táblához `Felhasznalok`
--

CREATE TABLE `Felhasznalok` (
  `UserID` int(11) NOT NULL,
  `Email` text NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` text NOT NULL,
  `statusz` int(11) NOT NULL,
  `Bejelentkezve` tinyint(1) NOT NULL
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
  `Ar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Vasarlok`
--

CREATE TABLE `Vasarlok` (
  `VasaroltTermekazonositoID` int(11) NOT NULL,
  `TermekazonositoID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Mennyiseg/db` int(10) NOT NULL,
  `Ar` int(10) NOT NULL,
  `VasarlasDatum` date NOT NULL,
  `Teljesitve` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `Felhasznalok`
--
ALTER TABLE `Felhasznalok`
  ADD PRIMARY KEY (`UserID`);

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
-- A tábla indexei `Vasarlok`
--
ALTER TABLE `Vasarlok`
  ADD PRIMARY KEY (`VasaroltTermekazonositoID`),
  ADD KEY `TermekazonositoID` (`TermekazonositoID`),
  ADD KEY `UserID` (`UserID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `Felhasznalok`
--
ALTER TABLE `Felhasznalok`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

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
-- Megkötések a táblához `TermekTabla2`
--
ALTER TABLE `TermekTabla2`
  ADD CONSTRAINT `TermekTabla2_ibfk_1` FOREIGN KEY (`TermekazonositoID`) REFERENCES `TermekTabla1` (`TermekazonositoID`);

--
-- Megkötések a táblához `Vasarlok`
--
ALTER TABLE `Vasarlok`
  ADD CONSTRAINT `Vasarlok_ibfk_1` FOREIGN KEY (`TermekazonositoID`) REFERENCES `TermekTabla2` (`TermekazonositoID`),
  ADD CONSTRAINT `Vasarlok_ibfk_2` FOREIGN KEY (`UserID`) REFERENCES `Felhasznalok` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

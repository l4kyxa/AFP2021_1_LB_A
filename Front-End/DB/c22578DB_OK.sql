-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2021. Nov 21. 15:56
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
-- Tábla szerkezet ehhez a táblához `Aruk`
--

CREATE TABLE `Aruk` (
  `Aru_ID` int(11) NOT NULL,
  `Termekazonosito_ID` int(11) NOT NULL,
  `TermekNev` varchar(60) DEFAULT NULL,
  `GyartoNev` int(11) DEFAULT NULL,
  `Szin` varchar(60) DEFAULT NULL,
  `Meret` int(11) DEFAULT NULL,
  `Mernyiseg` varchar(20) NOT NULL,
  `Megjegyzes` varchar(250) NOT NULL,
  `Kep` varchar(100) NOT NULL COMMENT 'Képfájl',
  `Ar` int(11) NOT NULL,
  `Statusz` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Bejegyzes`
--

CREATE TABLE `Bejegyzes` (
  `Bejegyzes_ID` int(11) NOT NULL,
  `Felhasznalo_ID` int(11) NOT NULL,
  `Uzenet` varchar(1000) NOT NULL,
  `Datum` date NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Felhasznalok`
--

CREATE TABLE `Felhasznalok` (
  `Felhasznalo_ID` int(11) NOT NULL,
  `Felhasznalonev` varchar(20) NOT NULL,
  `Email` text NOT NULL,
  `Jelszo` text NOT NULL,
  `Aszf` tinyint(1) NOT NULL,
  `Bejelentkezve` tinyint(1) NOT NULL,
  `Statusz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Kosar`
--

CREATE TABLE `Kosar` (
  `Vasarlas_ID` int(11) NOT NULL,
  `Felhasznalo_ID` int(11) NOT NULL,
  `Termekazonosito_ID` int(11) NOT NULL,
  `Mennyiseg/db` int(10) NOT NULL,
  `Ar` int(10) NOT NULL,
  `VasarlasDatum` date NOT NULL,
  `Teljesitve` tinyint(1) NOT NULL,
  `Lakcim_Irszam` int(4) NOT NULL,
  `Lakcim_Helyiseg` varchar(60) NOT NULL,
  `Lakcim_Utca` varchar(60) NOT NULL,
  `Lakcim_Hsz` varchar(20) NOT NULL,
  `Szallcim_Irszam` int(4) NOT NULL,
  `Szallcim_Helyiseg` varchar(60) NOT NULL,
  `Szallcim_Utca` varchar(60) NOT NULL,
  `Szallcim_Hsz` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Termekek`
--

CREATE TABLE `Termekek` (
  `Termekazonosito_ID` int(11) NOT NULL,
  `KategoriaNev` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `Aruk`
--
ALTER TABLE `Aruk`
  ADD PRIMARY KEY (`Aru_ID`),
  ADD KEY `Termekazonosito_ID` (`Termekazonosito_ID`) USING BTREE;

--
-- A tábla indexei `Bejegyzes`
--
ALTER TABLE `Bejegyzes`
  ADD PRIMARY KEY (`Bejegyzes_ID`),
  ADD KEY `Felhasznalo_ID` (`Felhasznalo_ID`);

--
-- A tábla indexei `Felhasznalok`
--
ALTER TABLE `Felhasznalok`
  ADD PRIMARY KEY (`Felhasznalo_ID`);

--
-- A tábla indexei `Kosar`
--
ALTER TABLE `Kosar`
  ADD PRIMARY KEY (`Vasarlas_ID`),
  ADD KEY `Termekazonosito_ID` (`Termekazonosito_ID`),
  ADD KEY `Felhasznalo_ID` (`Felhasznalo_ID`);

--
-- A tábla indexei `Termekek`
--
ALTER TABLE `Termekek`
  ADD PRIMARY KEY (`Termekazonosito_ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `Aruk`
--
ALTER TABLE `Aruk`
  MODIFY `Aru_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `Bejegyzes`
--
ALTER TABLE `Bejegyzes`
  MODIFY `Bejegyzes_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `Felhasznalok`
--
ALTER TABLE `Felhasznalok`
  MODIFY `Felhasznalo_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `Termekek`
--
ALTER TABLE `Termekek`
  MODIFY `Termekazonosito_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `Aruk`
--
ALTER TABLE `Aruk`
  ADD CONSTRAINT `Aruk_ibfk_1` FOREIGN KEY (`Termekazonosito_ID`) REFERENCES `Termekek` (`Termekazonosito_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `Bejegyzes`
--
ALTER TABLE `Bejegyzes`
  ADD CONSTRAINT `Bejegyzes_ibfk_1` FOREIGN KEY (`Felhasznalo_ID`) REFERENCES `Felhasznalok` (`Felhasznalo_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Megkötések a táblához `Kosar`
--
ALTER TABLE `Kosar`
  ADD CONSTRAINT `Kosar_ibfk_2` FOREIGN KEY (`Termekazonosito_ID`) REFERENCES `Termekek` (`Termekazonosito_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Kosar_ibfk_3` FOREIGN KEY (`Felhasznalo_ID`) REFERENCES `Felhasznalok` (`Felhasznalo_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

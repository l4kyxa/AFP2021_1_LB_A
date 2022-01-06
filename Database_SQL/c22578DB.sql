-- phpMyAdmin SQL Dump
-- version 5.0.4deb2~bpo10+1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2022. Jan 06. 11:30
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
  `GyartoNev` varchar(100) NOT NULL,
  `Szin` varchar(60) DEFAULT NULL,
  `Meret` int(11) DEFAULT NULL,
  `Mennyiseg` int(4) DEFAULT NULL,
  `Megjegyzes` varchar(250) NOT NULL,
  `Kep` varchar(100) NOT NULL COMMENT 'Képfájl',
  `Ar` int(11) NOT NULL,
  `Statusz` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `Aruk`
--

INSERT INTO `Aruk` (`Aru_ID`, `Termekazonosito_ID`, `TermekNev`, `GyartoNev`, `Szin`, `Meret`, `Mennyiseg`, `Megjegyzes`, `Kep`, `Ar`, `Statusz`) VALUES
(13, 2, 'Guni szalag', 'KAEV', 'fekete', 20, 13, 'gumi szalag fekete', 'p_04.jpg', 280, 20),
(14, 2, 'Gumi szalag', 'Cérnavilág', 'fehér', 20, 25, 'gumi szalag fehér', 'p_05.jpg', 290, 1),
(15, 2, 'Szatén szalag', 'Cérnavilág', 'piros', 40, 50, 'szatén szalag piros', 'p_05.jpg', 380, 1),
(16, 2, 'Ripsz szalag', 'Cérnavilág', 'drapp', 20, 50, 'ripsz szalag drapp', 'p_06.jpg', 230, 1),
(17, 2, 'gombostű', 'KAEV', 'színes', 25, 100, 'gombostű színes', 'p_07.jpg', 400, 1),
(18, 2, 'Tűbefűző', 'KAEV', 'fém', 5, 1, 'tűbefűző 5-ös méret', 'p_08.jpg', 120, 1),
(19, 2, 'Gyűszű', 'KAEV', 'ezüst', 10, 1, 'gyűszű ezüst 10 mm átmérőjű', 'p_09.jfif', 200, 1),
(20, 2, 'Vas gombostű', 'Koh-I-Noor', 'ezüst', 8, 500, 'Koh-I-Noor vas gombostű', 'p_10.jpg', 1500, 1),
(21, 2, 'cipzár műanyag', 'cérnavilág', 'fehér', 65, 25, 'Cipzár 65-ös fehér műanyag', 'p_11.jpg', 720, 1),
(22, 2, 'cipzár műanyag', 'KAEV', 'piros', 60, 25, 'cipzár piros műanyag', 'p_12.jpg', 650, 1),
(23, 2, 'cipzár műanyag', 'KAEV', 'zöld', 55, 25, 'cipzár műanyag zöld', 'p_13.jpg', 580, 1),
(24, 2, 'cipzár műanyag', 'KAEV', 'kék', 80, 25, 'cipzár műanyag kék 80-as', 'p_14.jpg', 1250, 1),
(25, 2, 'cipzár fém', 'KAEV', 'barna', 20, 25, 'cipzár fém barna 20-as', 'p_15.jpg', 230, 1),
(26, 2, 'szalag fehér organza', 'Cérnavilág', 'fehér', 30, 50, 'fehér organza szalag', 'p_16.jpg', 300, 1),
(27, 2, 'Varrótű készlet', 'Spiral Eye', 'arany', 40, 19, 'Varrótű készlet - Spiral Eye', 'p_17.jpg', 800, 1),
(28, 1, '1 lukas', 'HungaroGomb', 'fekete', 10, 245, '1 lukas fekete gomb', 'p_18.jpg', 78, 1),
(29, 1, '2 lukas', 'Topgomb', 'piros', 15, 200, '2 lukas piros gomb', 'p_19.jfif', 50, 1),
(30, 1, '4 lukas', 'Hungarogomb', 'fehér', 10, 100, '4 lukas gomb fehér 10-es', 'p_20.jpg', 50, 1),
(31, 1, '2 lukas', 'Topgomb', 'zöld', 20, 200, '2 lukas zöld 20-as', 'p_21.jpg', 60, 1),
(32, 1, '4 lukas', 'HungaroGomb', 'kék', 30, 50, '4 lukas kék 30-as', 'p_22.jpg', 40, 1),
(33, 1, '1 lukas', 'Topgomb', 'vegyes', 10, 300, '1 lukas gomb vegyes szín', 'p_23.jpg', 40, 1),
(34, 1, '4 lukas', 'HungaroGomb', 'lila', 40, 50, '4 lukas gomb lila', 'p_24.jpg', 150, 1),
(35, 1, '2 lukas', 'HungaroGomb', 'barna', 20, 200, '2 lukas barna 20-as', 'p_25.jpg', 60, 1),
(36, 1, '2 lukas', 'HungaroGomb', 'rózsaszin', 35, 100, '2 lukas rózsaszin 35-ös', 'p_26.jpg', 140, 1),
(37, 1, '2 lukas', 'Topgomb', 'fekete', 25, 200, 'fekete 2 lukas 25-ös', 'p_27.jpg', 50, 1),
(38, 2, 'Csőgumi', 'Cérnavilág', 'fehér', 8, 50, 'Csőgumi fehér 8 mm-es 50 méter hosszú', 'p_28.jpg', 230, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `Bejegyzes`
--

CREATE TABLE `Bejegyzes` (
  `Bejegyzes_ID` int(11) NOT NULL,
  `Neve` varchar(20) NOT NULL,
  `Emailcim` text CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Uzenet` varchar(1000) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `Datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `Bejegyzes`
--

INSERT INTO `Bejegyzes` (`Bejegyzes_ID`, `Neve`, `Emailcim`, `Uzenet`, `Datum`) VALUES
(8, 'Laci', 'lszlshjd687@gmail.com', 'earfwe', '2021-11-30 10:17:49'),
(9, 'Laci', 'lszlshjd687@gmail.com', 'dasdsa', '2021-12-20 13:15:59'),
(10, 'admin', 'xyz@gmail.com', '1234', '2021-12-22 14:01:52'),
(11, 'Gabesz79', 'pal.gabor1979@gmail.com', 'gzgkjbkj', '2022-01-05 08:47:04');

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
  `Statusz` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `Felhasznalok`
--

INSERT INTO `Felhasznalok` (`Felhasznalo_ID`, `Felhasznalonev`, `Email`, `Jelszo`, `Aszf`, `Bejelentkezve`, `Statusz`) VALUES
(4, 'zsjregisztracio', 'zsjregisztracio@gmail.com', '$2y$10$yZhuidEQsBcypxeHy9WJh.lwh4t8McJbgKm74m1mEw3Ws4wGpuRtW', 1, 0, 0),
(8, 'Laci', 'lszlshjd687@gmail.com', '$2y$10$WYZVdVV3NBsp5W8bzxfAWeqHjrwhRFEntzztFKRPq72kECwH08SQS', 1, 0, 1),
(9, 'admin', 'xyz@gmail.com', '$2y$10$yz1vJPr3YCTexuOTacxymOkMjt53oqQC2qKS1RlIkSJYnc7DmZGIS', 1, 0, 0),
(10, 'Gabesz79', 'pal.gabor1979@gmail.com', '$2y$10$sda49pr20ScB.oKmzN92gOBxShsP09chi3OvNjEG3GnsCLX2uzNYC', 1, 0, 0);

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
  `KategoriaNev` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `Termekek`
--

INSERT INTO `Termekek` (`Termekazonosito_ID`, `KategoriaNev`) VALUES
(1, 'Gomb'),
(2, 'Rövidáru');

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
  ADD PRIMARY KEY (`Bejegyzes_ID`);

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
  MODIFY `Aru_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT a táblához `Bejegyzes`
--
ALTER TABLE `Bejegyzes`
  MODIFY `Bejegyzes_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT a táblához `Felhasznalok`
--
ALTER TABLE `Felhasznalok`
  MODIFY `Felhasznalo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT a táblához `Kosar`
--
ALTER TABLE `Kosar`
  MODIFY `Vasarlas_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `Termekek`
--
ALTER TABLE `Termekek`
  MODIFY `Termekazonosito_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `Aruk`
--
ALTER TABLE `Aruk`
  ADD CONSTRAINT `Aruk_ibfk_1` FOREIGN KEY (`Termekazonosito_ID`) REFERENCES `Termekek` (`Termekazonosito_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

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

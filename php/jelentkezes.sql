-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2024. Jún 02. 04:29
-- Kiszolgáló verziója: 10.4.32-MariaDB
-- PHP verzió: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `jelentkezes`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `esemeny`
--
CREATE DATABASE jelentkezes;
USE jelentkezes;


CREATE TABLE `esemeny` (
  `ID` int(11) NOT NULL,
  `ferohely` int(11) NOT NULL,
  `kezdes` datetime NOT NULL,
  `vegzes` datetime NOT NULL,
  `helyszinID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `esemeny`
--

INSERT INTO `esemeny` (`ID`, `ferohely`, `kezdes`, `vegzes`, `helyszinID`) VALUES
(1, 99354, '2025-06-15 18:00:00', '2025-06-15 20:00:00', 1),
(2, 90000, '2025-06-21 19:00:00', '2025-06-21 21:00:00', 2),
(3, 81365, '2025-06-25 20:00:00', '2025-06-25 22:00:00', 3),
(4, 67215, '2025-07-01 18:00:00', '2025-07-01 20:00:00', 4),
(5, 67215, '2025-07-02 18:00:00', '2025-07-02 20:00:00', 4),
(6, 67215, '2025-07-03 18:00:00', '2025-07-03 20:00:00', 4),
(7, 67215, '2025-07-04 18:00:00', '2025-07-04 20:00:00', 4),
(16, 1241, '2024-06-07 03:55:00', '2024-06-05 03:55:00', 4),
(17, 1241, '2024-06-07 03:55:00', '2024-06-05 03:55:00', 4),
(18, 42069, '2024-06-20 03:57:00', '2024-07-04 03:57:00', 4),
(19, 2, '2024-06-21 04:01:00', '2024-06-15 04:01:00', 4);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `esemeny_eloado`
--

CREATE TABLE `esemeny_eloado` (
  `esemeny_id` int(11) NOT NULL,
  `felhasznalo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `esemeny_eloado`
--

INSERT INTO `esemeny_eloado` (`esemeny_id`, `felhasznalo_id`) VALUES
(1, 2),
(17, 2),
(17, 7),
(18, 2),
(18, 7),
(19, 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalo`
--

CREATE TABLE `felhasznalo` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  `jogosultsagID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `felhasznalo`
--

INSERT INTO `felhasznalo` (`ID`, `email`, `jelszo`, `jogosultsagID`) VALUES
(1, 'admin@admin.log', 'admin', 1),
(2, 'mcistvan@gmail.com', 'MilyenNyiregyhaza', 2),
(3, 'markerdei23@gmail.com', 'jelszo123', 3),
(7, 'jozsi@piszta.official', 'nincsbasszamek', 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `helyszin`
--

CREATE TABLE `helyszin` (
  `ID` int(11) NOT NULL,
  `nev` varchar(255) NOT NULL,
  `ferohely` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `helyszin`
--

INSERT INTO `helyszin` (`ID`, `nev`, `ferohely`) VALUES
(1, 'Camp Nou', 0),
(2, 'Wembley Stadion', 0),
(3, 'Signal Iduna Park', 0),
(4, 'Puskas Stadion', 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `jogosultsag`
--

CREATE TABLE `jogosultsag` (
  `ID` int(11) NOT NULL CHECK (`ID` between 1 and 3),
  `megnevezes` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- A tábla adatainak kiíratása `jogosultsag`
--

INSERT INTO `jogosultsag` (`ID`, `megnevezes`) VALUES
(1, 'admin'),
(2, 'eloado'),
(3, 'resztvevo');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `esemeny`
--
ALTER TABLE `esemeny`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `helyszínID` (`helyszinID`);

--
-- A tábla indexei `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `jogosultsagID` (`jogosultsagID`);

--
-- A tábla indexei `helyszin`
--
ALTER TABLE `helyszin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `nev` (`nev`);

--
-- A tábla indexei `jogosultsag`
--
ALTER TABLE `jogosultsag`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `megnevezes` (`megnevezes`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `esemeny`
--
ALTER TABLE `esemeny`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT a táblához `felhasznalo`
--
ALTER TABLE `felhasznalo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT a táblához `helyszin`
--
ALTER TABLE `helyszin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `esemeny`
--
ALTER TABLE `esemeny`
  ADD CONSTRAINT `esemeny_ibfk_2` FOREIGN KEY (`helyszinID`) REFERENCES `helyszin` (`ID`);

--
-- Megkötések a táblához `felhasznalo`
--
ALTER TABLE `felhasznalo`
  ADD CONSTRAINT `felhasznalo_ibfk_1` FOREIGN KEY (`jogosultsagID`) REFERENCES `jogosultsag` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

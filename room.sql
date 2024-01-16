-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-16 07:32:30
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `dbhw`
--

-- --------------------------------------------------------

--
-- 資料表結構 `room`
--

CREATE TABLE `room` (
  `id` int(10) NOT NULL,
  `img` text NOT NULL,
  `room` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `room`
--

INSERT INTO `room` (`id`, `img`, `room`, `text`, `sh`) VALUES
(1, 'cat3.jpg', '經典房', '寬 100cm * 深 145cm * 高 350cm \r\n基本舒適房型  \r\n\r\n最多入住 : 2貓 \r\n適合幼小害羞貓咪 \r\n提供：陶瓷貓碗、實木貓碗架、 開放型貓砂盆 \r\n貓砂提供：礦砂、豆腐砂、松木砂 \r\n房間和公共空間均有24小時的雲端監控系統 \r\n二層貓跳台 供貓咪跳躍使用', 1),
(2, 'cat4.jpg', '溫馨房', '寬 155cm * 深 150cm * 高 350cm \r\n溫馨舒適  \r\n\r\n最多入住 : 4貓\r\n適合成年活潑貓咪 \r\n提供：陶瓷貓碗、實木貓碗架、 開放型貓砂盆 \r\n貓砂提供：礦砂、豆腐砂、松木砂\r\n房間和公共空間均有24小時的雲端監控系統\r\n四層貓跳台 供貓咪跳躍使用', 1),
(3, 'cat10.jpg', '星空房', '寬 200cm * 深 150cm * 高 350cm\r\n獨立景觀窗  \r\n最多入住 : 6貓 \r\n適合家中多數貓咪 \r\n提供：陶瓷貓碗、實木貓碗架、 開放型貓砂盆\r\n貓砂提供：礦砂、豆腐砂、松木砂 \r\n房間和公共空間均有24小時的雲端監控系統\r\n四層貓跳台 供貓咪跳躍使用 \r\n有觀景窗的大家庭房，最適合多貓又各自有個性的家庭！', 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `room`
--
ALTER TABLE `room`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-07 14:28:03
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
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ad`
--

INSERT INTO `ad` (`id`, `text`, `sh`) VALUES
(1, '轉知:法務部辦理「第五屆法規知識王網路闖關競賽辦法', 1),
(2, '轉知臺北教育大學與臺灣師大合辦第11屆麋研齋全國硬筆書法比賽活動', 1),
(5, '欣榮圖書館101年悅讀達人徵文比賽，歡迎全校師生踴躍投稿參加', 1),
(8, '轉知:教育是人類升沉的樞紐-2023教師生命成長營', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text NOT NULL,
  `pw` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `admin`
--

INSERT INTO `admin` (`id`, `acc`, `pw`) VALUES
(1, 'admin', '1234'),
(2, 'root', '7890');

-- --------------------------------------------------------

--
-- 資料表結構 `book`
--

CREATE TABLE `book` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `name` text NOT NULL,
  `catname` text NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL,
  `room` text NOT NULL,
  `catnum` int(10) NOT NULL,
  `know` text NOT NULL,
  `other` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `book`
--

INSERT INTO `book` (`id`, `email`, `phone`, `name`, `catname`, `datein`, `dateout`, `room`, `catnum`, `know`, `other`) VALUES
(8, '123@gmail.com', '123456789', 'sea', '558', '2024-01-05', '2024-01-07', '溫馨房', 3, 'Google搜尋', ''),
(9, '888@gmail.com', '85789858', 'eresre', 'efes', '2024-01-08', '2024-01-09', '65', 2, '55', ''),
(10, '123@gmail.com', '555555555', 'sea', 'efes', '2024-01-08', '2024-01-09', '星空房', 3, '朋友介紹', ''),
(11, '123@gmail.com', '89797989', 'eresg', 'htrtth', '2024-01-06', '2024-01-07', '溫馨房', 2, 'hthrth', 'hrth');

-- --------------------------------------------------------

--
-- 資料表結構 `bottom`
--

CREATE TABLE `bottom` (
  `id` int(10) NOT NULL,
  `bottom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `bottom`
--

INSERT INTO `bottom` (`id`, `bottom`) VALUES
(1, '2024 Taishan Vocational Training  Company, Inc');

-- --------------------------------------------------------

--
-- 資料表結構 `image`
--

CREATE TABLE `image` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `image`
--

INSERT INTO `image` (`id`, `img`, `sh`) VALUES
(12, 'cat4.jpg', 1),
(13, 'cat.jpg', 1),
(14, 'cat7.jpg', 1),
(15, 'cat4.jpg', 1),
(16, 'cat3.jpg', 1),
(17, 'cat.jpg', 1),
(18, 'cat2.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `href` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `menu_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `menu`
--

INSERT INTO `menu` (`id`, `text`, `href`, `sh`, `menu_id`) VALUES
(2, '網站首頁', 'index.php', 1, 0),
(4, '關於我們', 'index.php#item-1-us', 1, 0),
(6, '111', '1111', 1, 1),
(7, '22', '222', 1, 4),
(8, '222', '2222', 1, 4),
(9, '房型介紹', 'index.php#item-2-room', 1, 0),
(10, '住宿需知', 'index.php#item-3-news', 1, 0),
(11, '111', '', 1, 9),
(12, '環境介紹', 'index.php#item-4-img', 1, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `mvim`
--

CREATE TABLE `mvim` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `mvim`
--

INSERT INTO `mvim` (`id`, `img`, `sh`) VALUES
(6, 'cat.jpg', 1),
(7, 'cat3.jpg', 1),
(9, 'cat4.jpg', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `news_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `text`, `sh`, `news_id`) VALUES
(1, '預訂與取消政策：', 1, 0),
(2, '健康和疫苗要求：', 1, 0),
(3, '物品清單：', 1, 0),
(4, '日常照顧與活動：', 1, 0),
(5, '緊急聯絡資訊：', 1, 0),
(12, '付款方式：', 1, 0),
(13, '退房規定和時間：\r\n', 1, 0),
(14, '顧客需提前最少7天預訂', 1, 1),
(15, '所有入住貓必須提供近2年內的疫苗和健康檢查記錄。', 1, 2),
(16, '點藥、擦藥及手動餵藥每日每貓收費50元', 1, 2),
(17, '餵藥器請自備', 1, 2),
(18, '若在預訂前72小時內取消，將收取50%的住宿費用作為取消費用。', 1, 1),
(19, '因快速轉換食物而易腸胃敏感者', 1, 3),
(20, '攜帶貓咪熟悉味道之物品', 1, 3),
(21, '旅館提供基本的貓砂和飼料，如果貓咪有習慣的貓砂或貓砂盆，也歡迎自備唷。', 1, 3),
(22, '會根據貓的習慣和需求調整', 1, 4),
(23, '提供每日30分鐘的活動和互動時間，如玩耍或陪伴', 1, 4),
(24, '顧客需提供貓的主要獸醫聯絡方式和資訊。', 1, 5),
(25, ' *額外服務（如特殊餐食或洗澡服務）需另行付費。', 1, 12),
(26, ' *付款方式：現金、信用卡或電子轉帳。', 1, 12),
(27, ' *退房時間為每日上午10:00。', 1, 13),
(28, ' *顧客需於退房時領取所有貓的物品和相關證件。', 1, 13),
(29, '評價和反饋機制：', 1, 0),
(30, '其他特殊要求：', 1, 0),
(31, '鼓勵顧客於退房後提供他們的經驗和建議。', 1, 29),
(32, '可透過網站、電子郵件或手機應用程式提交反饋。', 1, 29),
(33, '若有特殊醫療需求或習慣，請事先通知旅館，以便提供更貼心的照顧。', 1, 30);

-- --------------------------------------------------------

--
-- 資料表結構 `titles`
--

CREATE TABLE `titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `text` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `titles`
--

INSERT INTO `titles` (`id`, `img`, `text`, `sh`) VALUES
(11, 'cat.jpg', '1', 0),
(12, 'cat2.jpg', '2', 1),
(13, 'school.jpg', 'fdaf d f', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `total`
--

CREATE TABLE `total` (
  `id` int(10) NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `total`
--

INSERT INTO `total` (`id`, `total`) VALUES
(1, 55601);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `bottom`
--
ALTER TABLE `bottom`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mvim`
--
ALTER TABLE `mvim`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bottom`
--
ALTER TABLE `bottom`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `mvim`
--
ALTER TABLE `mvim`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `total`
--
ALTER TABLE `total`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

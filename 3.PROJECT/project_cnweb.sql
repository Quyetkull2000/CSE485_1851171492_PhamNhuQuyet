-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2020 lúc 04:51 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project_cnweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinhoso`
--

CREATE TABLE `thongtinhoso` (
  `id` int(255) NOT NULL,
  `Hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Dantoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tongiao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Noisinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Namtotnghiep` date NOT NULL,
  `Hocluclop12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hanhkiemlop12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoCMND` int(12) NOT NULL,
  `Ngaycap` date NOT NULL,
  `Noicap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachilienhe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienthoaiTS` int(10) NOT NULL,
  `DienthoaiPH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinhoso`
--

INSERT INTO `thongtinhoso` (`id`, `Hoten`, `Gioitinh`, `Ngaysinh`, `Dantoc`, `Tongiao`, `Noisinh`, `Namtotnghiep`, `Hocluclop12`, `Hanhkiemlop12`, `SoCMND`, `Ngaycap`, `Noicap`, `Diachilienhe`, `DienthoaiTS`, `DienthoaiPH`) VALUES
(15, 'Phạm Như Quyết', 'Nam', '2020-10-17', '', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', 0, 0),
(16, 'Phạm Như Quyết', 'Nam', '2020-10-17', '', '', '', '0000-00-00', '', '', 0, '0000-00-00', '', '', 0, 0),
(17, '', '', '0000-00-00', '', '', '', '0000-00-00', 'Giỏi', 'Tốt', 0, '0000-00-00', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_pw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `thongtinhoso`
--
ALTER TABLE `thongtinhoso`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `thongtinhoso`
--
ALTER TABLE `thongtinhoso`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

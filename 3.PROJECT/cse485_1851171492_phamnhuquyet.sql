-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 12, 2020 lúc 09:37 PM
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
-- Cơ sở dữ liệu: `cse485_1851171492_phamnhuquyet`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoso`
--

CREATE TABLE `hoso` (
  `id` int(11) NOT NULL,
  `Hoten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gioitinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `Dantoc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tongiao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Noisinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Namtotnghiep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hocluc_lop12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hanhkiem_lop12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoCMND` int(12) NOT NULL,
  `Ngaycap` date NOT NULL,
  `Noicap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hokhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matinh_lop10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tentinh_lop10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matruong_lop10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tentruong_lop10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matinh_lop11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tentinh_lop11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matruong_lop11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tentruong_lop11` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matinh_lop12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tentinh_lop12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Matruong_lop12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tentruong_lop12` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Doituong_uutien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Khuvuc_uutien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diachi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dienthoai_TS` int(11) NOT NULL,
  `Dienthoai_PH` int(11) NOT NULL,
  `Hinhthuc_xettuyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoso`
--

INSERT INTO `hoso` (`id`, `Hoten`, `Gioitinh`, `Ngaysinh`, `Dantoc`, `Tongiao`, `Noisinh`, `Namtotnghiep`, `Hocluc_lop12`, `Hanhkiem_lop12`, `SoCMND`, `Ngaycap`, `Noicap`, `Hokhau`, `Matinh_lop10`, `Tentinh_lop10`, `Matruong_lop10`, `Tentruong_lop10`, `Matinh_lop11`, `Tentinh_lop11`, `Matruong_lop11`, `Tentruong_lop11`, `Matinh_lop12`, `Tentinh_lop12`, `Matruong_lop12`, `Tentruong_lop12`, `Doituong_uutien`, `Khuvuc_uutien`, `Diachi`, `Dienthoai_TS`, `Dienthoai_PH`, `Hinhthuc_xettuyen`) VALUES
(1, 'Phạm Như Quyết', '0', '2020-11-07', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(2, '', '0', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(3, '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(4, 'Quyết', 'Nam', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(5, 'Quyết', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(6, 'Quyết', 'Nam', '2020-11-13', 'Kinh', 'Phật', '', '', 'Khá', 'Tốt', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, ''),
(7, 'Phạm Như Quyết', 'Nam', '2020-11-24', 'kinh', 'Phật giáo', '', '', 'Giỏi', 'Tốt', 2147483647, '2020-11-13', '', 'abc', '223', '', '223', '', '223', '', '223', '', '223', '', '112', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', 'sbc', 2147483647, 12454545, ''),
(8, 'Phạm Như Quyết', 'Nam', '2020-11-24', 'kinh', 'Phật giáo', '', '', 'Giỏi', 'Tốt', 2147483647, '2020-11-13', '', 'abc', '223', '', '223', '', '223', '', '223', '', '223', '', '112', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', 'sbc', 2147483647, 12454545, ''),
(9, '', '', '0000-00-00', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '', '', 'abc', '', '', '', 'abc', '', '', '', 'abc', 'Học sinh đạt giải cấp quốc gia', 'KV2-NT', '', 0, 0, ''),
(10, '', 'Nam', '0000-00-00', '', '', '', '', 'Giỏi', 'Tốt', 0, '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, ''),
(11, 'Phạm Như Quyết', 'Nam', '2020-11-20', 'kinh', 'Phật giáo', '', '', 'Giỏi', 'Tốt', 2147483647, '2020-11-11', '', 'abc', '223', '', '', '', '', '', '', '', '', '', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, ''),
(12, '', 'Nam', '0000-00-00', '', '', 'An Giang', '', 'Giỏi', 'Tốt', 0, '0000-00-00', 'An Giang', '', '', 'Bình Định', '', '', '', 'Bình Phước', '', '', '', 'Bình Phước', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, ''),
(13, '', 'Nam', '0000-00-00', '', '', 'An Giang', '', 'Giỏi', 'Tốt', 0, '0000-00-00', 'An Giang', '', '', 'An Giang', '', '', '', 'An Giang', '', '', '', 'An Giang', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, ''),
(14, '', 'Nam', '0000-00-00', '', '', 'An Giang', '', 'Giỏi', 'Tốt', 0, '0000-00-00', 'An Giang', '', '', 'An Giang', '', '', '', 'An Giang', '', '', '', 'An Giang', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, ''),
(15, '', 'Nam', '0000-00-00', '', '', 'An Giang', '', 'Giỏi', 'Tốt', 0, '0000-00-00', 'An Giang', '', '', 'An Giang', '', '', '', 'An Giang', '', '', '', 'An Giang', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, ''),
(16, '', 'Nam', '0000-00-00', '', '', 'An Giang', '', 'Giỏi', 'Tốt', 0, '0000-00-00', 'An Giang', '', '', 'An Giang', '', '', '', 'An Giang', '', '', '', 'An Giang', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, 'tổ hợp 3 môn'),
(17, '', 'Nam', '0000-00-00', '', '', 'An Giang', '', 'Giỏi', 'Tốt', 0, '0000-00-00', 'An Giang', '', '', 'An Giang', '', '', '', 'An Giang', '', '', '', 'An Giang', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, ''),
(18, '', 'Nam', '0000-00-00', '', '', 'An Giang', '', 'Giỏi', 'Tốt', 0, '0000-00-00', 'An Giang', '', '', 'An Giang', '', '', '', 'An Giang', '', '', '', 'An Giang', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, ''),
(19, '', 'Nam', '0000-00-00', '', '', 'An Giang', '', 'Giỏi', 'Tốt', 0, '0000-00-00', 'An Giang', '', '', 'An Giang', '', '', '', 'An Giang', '', '', '', 'An Giang', '', '', 'Học sinh đạt giải cấp quốc gia', 'KV1', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `major`
--

CREATE TABLE `major` (
  `id` int(11) NOT NULL,
  `major_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `major`
--

INSERT INTO `major` (`id`, `major_name`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Kỹ thuật cơ khí'),
(3, 'Kinh tế'),
(4, 'Kỹ thuật tài nguyên nước');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `majors_group`
--

CREATE TABLE `majors_group` (
  `id` int(11) NOT NULL,
  `Manganh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tennganh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `majors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `majors_group`
--

INSERT INTO `majors_group` (`id`, `Manganh`, `Tennganh`, `majors`) VALUES
(1, 'TLA106', 'Công nghệ thông tin', 1),
(2, 'TLA105', 'Kỹ thuật cơ khí', 2),
(3, 'TLA106', 'Kỹ thuật phần mềm', 1),
(7, 'TLA123', 'Kỹ thuật ô tô', 2),
(11, 'TLA121', 'Kỹ thuật điều khiển và tự động hóa', 2),
(12, '	TLA112', 'Kỹ thuật điện', 2),
(13, 'TLA106', 'Hệ thống thông tin', 1),
(14, 'TLA401', 'Kinh tế', 3),
(15, 'TLA402', 'Quản trị kinh doanh', 3),
(16, 'TLA403', 'Kế toán', 3),
(17, 'TLA101', 'Kỹ thuật xây dựng công trình thủy', 4),
(18, 'TLA104', 'Kỹ thuật xây dựng', 4),
(19, 'TLA102', 'Kỹ thuật tài nguyên nước', 4),
(20, 'TLA107', 'Kỹ thuật cấp thoát nước', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(35, 'PhamQuyet', 'QuyetTrang2407@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(36, 'admin', '1851171492@e.tlu.edu.vn', '0cc175b9c0f1b6a831c399e269772661'),
(39, '1851171492', 'Quyetkull1997@gmail.com', '0cc175b9c0f1b6a831c399e269772661'),
(42, 'PhamQuyet', 'quyet24072k@gmail.com', '0cc175b9c0f1b6a831c399e269772661');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoso`
--
ALTER TABLE `hoso`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `majors_group`
--
ALTER TABLE `majors_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `majors` (`majors`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoso`
--
ALTER TABLE `hoso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `major`
--
ALTER TABLE `major`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `majors_group`
--
ALTER TABLE `majors_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `majors_group`
--
ALTER TABLE `majors_group`
  ADD CONSTRAINT `majors_group_ibfk_1` FOREIGN KEY (`majors`) REFERENCES `major` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

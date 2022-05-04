-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2021 lúc 03:00 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `we16305`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `khanh_hang_id` int(11) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `ngay_mua` date NOT NULL,
  `ngay_giao` date NOT NULL,
  `tong_tien` int(11) NOT NULL,
  `trang_thai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten_kh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`id`, `khanh_hang_id`, `dia_chi`, `sdt`, `ngay_mua`, `ngay_giao`, `tong_tien`, `trang_thai`, `ten_kh`) VALUES
(1, 0, 'HN', 12, '0000-00-00', '0000-00-00', 600000, '', 'HIẾU');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(11) NOT NULL,
  `ma` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `ma`, `ten`, `sdt`, `dia_chi`, `gioi_tinh`, `email`) VALUES
(1, 'ph14827', 'hiếu', 342770723, 'hn', '1', 'daminhieu1703@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ma` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `don_vi` int(11) NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ma`, `ten`, `so_luong`, `gia`, `don_vi`, `img`) VALUES
(1, 'ph14827', 'giày adidas ', 1, 600000, 1, '/WEB16305/Assignment_PHP1/img/quanboxanh.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

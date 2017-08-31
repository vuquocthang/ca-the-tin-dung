-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 31, 2017 lúc 09:07 PM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cathetindung`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'root', '$2a$06$24cEueLkqMEDMM3gSEEB6O6wWdcWcD9Sz0193/S7/GlV8OL.FL4jC', '2RbTXBmGnLVxDnLuPpjwP4N6cECPOOuZt9LEqjzZclgn1TYELsOFBUFNQVrI', NULL, '2017-08-12 02:25:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2017_08_12_035752_create_admins_table', 1),
(3, '2017_08_12_071314_create_seo_table', 2),
(4, '2017_08_12_075347_create_post_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `meta_description`, `created_at`, `updated_at`) VALUES
(2, 'Cà Thẻ Tín Dụng', '&lt;p&gt;&lt;img src=&quot;http://www.internshipsdownunder.com/wp-content/uploads/2014/11/ICT.jpg&quot; alt=&quot;&quot; width=&quot;800&quot; height=&quot;390&quot; /&gt;&lt;/p&gt;', 'cà thẻ tín dụng, nhanh chóng, thuận tiện', '2017-08-12 01:39:54', '2017-08-12 14:06:58'),
(3, 'Đáo Hạn Thẻ Tín Dụng', '&lt;p&gt;&lt;span style=&quot;color: #ff0000;&quot;&gt;Chelsea được chơi tr&amp;ecirc;n s&amp;acirc;n nh&amp;agrave; trước Burnley l&amp;agrave; cơ hội để thầy tr&amp;ograve; HLV Conte khởi đầu h&amp;agrave;nh tr&amp;igrave;nh bảo vệ ng&amp;ocirc;i vương bằng một chiến thắng. Tuy nhi&amp;ecirc;n Chelsea đ&amp;atilde; li&amp;ecirc;n tiếp phải nhận những c&amp;uacute; sốc trong v&amp;ograve;ng 45 ph&amp;uacute;t đầu ti&amp;ecirc;n.&amp;nbsp;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;Mở m&amp;agrave;n l&amp;agrave; t&amp;igrave;nh huống v&amp;agrave;o b&amp;oacute;ng th&amp;ocirc; bạo của đội trưởng Gary Cahill với Steven Defour khiến trọng t&amp;agrave;i phải r&amp;uacute;t thẻ đỏ trực tiếp. Mất đi trung vệ gi&amp;agrave;u kinh nghiệm, Chelsea bị thủng lưới sau đ&amp;oacute; với pha dứt điểm trong tư thế xoay lưng của Sam Vokes. C&amp;uacute; đ&amp;aacute; của tiền đạo người xứ Wales lướt qua David Luiz v&amp;agrave; đi v&amp;agrave;o g&amp;oacute;c hiểm khiến thủ m&amp;ocirc;n Thibaut Courtois b&amp;oacute; tay.&lt;/p&gt;\r\n&lt;p&gt;Tưởng như Chelsea c&amp;oacute; thể bước sang hiệp hai với b&amp;agrave;n thua duy nhất th&amp;igrave; chỉ &amp;iacute;t ph&amp;uacute;t cuối hiệp một, Burnley khiến họ nhận th&amp;ecirc;m những tr&amp;aacute;i đắng. Stephen Ward thực hiện c&amp;uacute; n&amp;atilde; đại b&amp;aacute;c ở g&amp;oacute;c hẹp nh&amp;acirc;n đ&amp;ocirc;i c&amp;aacute;ch biệt trước khi Sam Vokes ho&amp;agrave;n tất c&amp;uacute; đ&amp;uacute;p bằng pha đ&amp;aacute;nh đầu cận th&amp;agrave;nh.&lt;/p&gt;', 'cà thẻ tín dụng, nhanh chóng, thuận tiện', '2017-08-12 01:40:24', '2017-08-12 14:08:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seo`
--

CREATE TABLE `seo` (
  `id` int(10) UNSIGNED NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seo`
--

INSERT INTO `seo` (`id`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'cà thẻ tín dụng, nhanh chóng, thuận tiện', 'cà thẻ tín dụng', NULL, '2017-08-12 00:50:21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `seo`
--
ALTER TABLE `seo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

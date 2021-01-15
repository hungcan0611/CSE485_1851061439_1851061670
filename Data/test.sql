-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2021 lúc 09:33 AM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about_us`
--

CREATE TABLE `about_us` (
  `au_id` int(10) UNSIGNED NOT NULL,
  `au_content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `about_us`
--

INSERT INTO `about_us` (`au_id`, `au_content`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officia reiciendis doloremque reprehenderit repudiandae distinctio asperiores, optio, obcaecati aperiam ratione assumenda qui, odio eius quo animi nisi sit nobis? Reiciendis?'),
(2, 'DEV - Do Everything for Volunteer'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam officia reiciendis doloremque reprehenderit repudiandae distinctio asperiores, optio, obcaecati aperiam ratione assumenda qui, odio eius quo animi nisi sit nobis? Reiciendis?');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `Serv_id` int(10) UNSIGNED NOT NULL,
  `Serv_name` varchar(100) NOT NULL,
  `Serv_detail` varchar(255) NOT NULL,
  `Serv_img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`Serv_id`, `Serv_name`, `Serv_detail`, `Serv_img`) VALUES
(1, 'GROWTH MARKETING', 'Just Marketing', 'Images/GI.gif'),
(2, 'ONLINE BRANDING', 'Online Branding - Online Money Transfering', 'Images/GI.gif'),
(3, 'ANIMATED ADS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae doloremque labore iure sed tenetur aperiam voluptatem sunt, numquam ratione fugiat obcaecati aliquam adipisci non vel cum dolor cupiditate molestias explicabo.', 'Images/GI.gif');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `subcribe`
--

CREATE TABLE `subcribe` (
  `sub_id` int(10) UNSIGNED NOT NULL,
  `sub_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `testimonials`
--

CREATE TABLE `testimonials` (
  `tes_id` int(10) UNSIGNED NOT NULL,
  `tes_name` varchar(150) NOT NULL,
  `tes_job` varchar(100) NOT NULL,
  `tes_comment` varchar(255) NOT NULL,
  `tes_avatar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `testimonials`
--

INSERT INTO `testimonials` (`tes_id`, `tes_name`, `tes_job`, `tes_comment`, `tes_avatar`) VALUES
(1, 'Tùng', 'Gamer', 'Very Gud!', 'Images/Tung.jpg'),
(2, 'Minh', 'Wibu', 'Rush B', 'Images/Tung.jpg'),
(3, 'S1mple', 'Na`Vi', 'I see no God up there other than me', 'Images/Tung.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`au_id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`Serv_id`);

--
-- Chỉ mục cho bảng `subcribe`
--
ALTER TABLE `subcribe`
  ADD PRIMARY KEY (`sub_id`);

--
-- Chỉ mục cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`tes_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `about_us`
--
ALTER TABLE `about_us`
  MODIFY `au_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `Serv_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `subcribe`
--
ALTER TABLE `subcribe`
  MODIFY `sub_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `tes_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

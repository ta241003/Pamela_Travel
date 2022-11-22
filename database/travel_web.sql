-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2022 lúc 11:37 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travel_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking_form`
--

CREATE TABLE `booking_form` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `check_in` date NOT NULL,
  `price_total` varchar(50) NOT NULL,
  `people` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `num_acc` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking_form`
--

INSERT INTO `booking_form` (`id`, `name`, `email`, `phone`, `check_in`, `price_total`, `people`, `place`, `num_acc`, `created_at`) VALUES
(1, 'NGO THE ANH', 'THEANHdepzai@gmail.com', 398995956, '2022-11-15', '100.00', ' 1 ', ' Ha Noi', 123456789, '2022-11-06 07:38:31'),
(2, 'Le Thi Binh Minh', 'bminhthui@gmail.com', 123456789, '2022-11-07', '600.00', ' 2 ', ' Sapa', 1122334455, '2022-11-06 07:39:35'),
(3, 'Binh Minh', 'anhnt.21it@vku.udn.vn', 398995956, '2022-11-07', '100.00', ' 1 ', ' Ha Noi', 2222, '2022-11-06 07:48:00'),
(4, 'Ho Hang', 'hohang12345@gmail.com', 398995956, '2022-11-30', '100.00 $', ' 1 ', ' Ha Noi', 22222, '2022-11-06 08:12:32'),
(5, 'Le Hong Diem', 'diem123@gmail.com', 981537831, '2022-11-14', '100.00 $', ' 1 ', ' Ha Noi', 22222, '2022-11-06 08:21:15'),
(6, 'Doraemon', 'dora00@gmail.com', 398995956, '2022-11-14', '100.00 $', ' 1 ', ' Ha Noi', 2147483647, '2022-11-06 08:29:32'),
(7, 'theanh', 'anhnt.21it@vku.udn.com', 398995956, '2022-11-09', '100.00 $', ' 1 ', ' Ha Noi', 2147483647, '2022-11-06 08:34:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `message`) VALUES
(1, 'taádsa', 'đasa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'bminh', 'bthhiminh12345@gmail.com', 'hi everyone', 'i am bmin'),
(3, 'theanh', 'anhtn.21it@vku.udn.vn', '1111', 'cdfsaf'),
(4, 'theanhdsadasd', 'anhtn.21it@vku.udn.vn', '1111', 'cdfsafdsadasdasd'),
(5, 'theanhdsadasd', 'anhtn.21it@vku.udn.vn', '1111sdasdas', 'cdfsafdsadasdasd'),
(6, 'aa', 'anhtn.21it@vku.udn.vn', 'abcd', '1234'),
(7, 'ta', 'anhnt.21it@vku.udn.com', 'đâsdawsdasd', 'đâsdasdasdfa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_destination`
--

CREATE TABLE `tour_destination` (
  `id` int(11) NOT NULL,
  `tour` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `num_day` int(50) NOT NULL,
  `trans` varchar(100) NOT NULL,
  `num_guide` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour_destination`
--

INSERT INTO `tour_destination` (`id`, `tour`, `image`, `price`, `num_day`, `trans`, `num_guide`) VALUES
(1, 'Ha Noi', 'des-1.jpg', 100, 1, 'Car, Motorbike, Cyclo, Taxi', 2),
(2, 'Sapa', 'des-2.png', 300, 3, 'Motorbike, Cable Car, Taxi', 1),
(3, 'Ha Long Bay', 'des-3.png', 250, 2, 'Car, Bus, Yacht, Rowing Boats, Taxi', 2),
(4, 'Hoi An', 'des-4.png', 150, 1, 'Bike, Bus, Motobike, Cyclo, Taxi', 1),
(5, 'Hue', 'des-5.png', 120, 2, 'Bus, Boat, Motobike, Taxi, Car', 2),
(6, 'Da Lat', 'des-6.png', 200, 3, 'Tram, Bicycle, Bus, Boat, Taxi', 2),
(7, 'Nha Trang', 'des-7.png', 280, 3, 'Ship, Taxi, Rowing Boats, Bus, Bike', 4),
(8, 'Sai Gon', 'des-8.png', 210, 2, 'Motobike, Taxi, Bus, Cyclo, Bike', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ta241003', 'anhnt.21it@vku.udn.vn', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'binhminhthui', 'bm12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'user1', 'user1@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'user2', 'user2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking_form`
--
ALTER TABLE `booking_form`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tour_destination`
--
ALTER TABLE `tour_destination`
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
-- AUTO_INCREMENT cho bảng `booking_form`
--
ALTER TABLE `booking_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tour_destination`
--
ALTER TABLE `tour_destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

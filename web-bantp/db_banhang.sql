-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 12, 2021 lúc 08:36 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `date_order` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `bill_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Rau', '2021-02-26 11:12:01', '2021-02-26 11:12:01'),
(2, 'Hải Sản', '2021-02-26 11:12:07', '2021-02-26 11:12:07'),
(5, 'Trái Cây', '2021-02-28 07:40:43', '2021-02-28 07:40:43'),
(7, 'Đồ Uống', '2021-03-01 12:44:28', '2021-03-01 12:44:28'),
(8, 'Bánh', '2021-03-01 12:45:01', '2021-03-04 11:18:16'),
(9, 'Thịt - Trứng', '2021-03-12 01:45:28', '2021-03-12 01:45:28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_02_26_181020_category', 1),
(2, '2021_02_26_181301_products', 2),
(3, '2021_02_26_181712_products', 3),
(4, '2021_02_26_181947_users', 4),
(5, '2021_02_26_193242_products', 5),
(6, '2021_02_26_193941_users', 6),
(7, '2021_02_27_163550_products', 7),
(8, '2021_02_27_200946_products', 8),
(9, '2021_02_28_221308_bill_detail', 9),
(10, '2021_02_28_222016_customers', 10),
(11, '2021_02_28_222214_bills', 11),
(12, '2021_02_28_222426_bill_detail', 12),
(13, '2021_02_28_222633_slide', 13),
(14, '2021_03_10_223258_users', 14),
(15, '2021_03_11_083127_user', 15);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `promotion_price` int(11) NOT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `namecate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `promotion_price`, `feature_image`, `quantity`, `content`, `namecate`, `created_at`, `updated_at`) VALUES
(10, 1, 'Cần Tây', 40000, 0, 'b1.jpg', '0.5Kg', 'Cần tây', '1', '2021-02-28 09:50:51', '2021-03-11 13:34:28'),
(11, 5, 'Chuối', 40000, 30000, 'n4.jpg', '10 Trái', 'Chuối Tiêu Hồng', '5', '2021-03-01 10:02:22', '2021-03-03 06:52:26'),
(12, 5, 'Táo', 50000, 45000, 'n3.jpg', '1Kg', 'Táo Envy', '5', '2021-03-01 10:03:05', '2021-03-03 06:54:16'),
(13, 5, 'Dâu Tây', 90000, 85000, 'n2.jpg', '1Kg', 'Dâu Tây Đà Lạt', '5', '2021-03-02 02:43:22', '2021-03-03 06:54:47'),
(14, 1, 'Carrot', 25000, 25000, 'vegetable.jpg', '1Kg', 'Carrot', '1', '2021-03-02 02:44:01', '2021-03-03 06:55:42'),
(15, 1, 'Ớt', 20000, 20000, 'b2.jpg', '0.1 Kg', 'Ớt kiểng', '1', '2021-03-02 04:02:19', '2021-03-03 06:57:09'),
(16, 7, 'Cà Phê', 55000, 49000, 'coffee.jpg', '1Kg', 'Cà Phê Buôn Mê Thuật', '7', '2021-03-02 04:07:55', '2021-03-03 06:57:38'),
(19, 5, 'Đào', 50000, 50000, 'b4.jpg', '1Kg', 'Đào Sapa', '5', '2021-03-03 06:48:56', '2021-03-03 06:51:33'),
(20, 5, 'Hạt Óc Chó', 90000, 0, 'n1.jpg', '0.5Kg', 'Rất tốt cho trẻ em', '5', '2021-03-04 02:44:49', '2021-03-04 02:44:49'),
(21, 5, 'Táo Mỹ', 50000, 0, 'fruit.jpg', '10 Trái', 'Táo Mỹ nhập khẩu', '5', '2021-03-04 03:00:05', '2021-03-04 03:00:05'),
(22, 5, 'Quả Bơ', 50000, 0, 'b3.jpg', '1Kg', 'Bơ', '5', '2021-03-04 03:00:49', '2021-03-04 03:00:49'),
(23, 8, 'Bánh Trái Cây', 350000, 0, 'banhtraicay.jpg', '1 Chiếc', 'Bánh làm từ trái cây', '8', '2021-03-04 11:18:04', '2021-03-04 11:18:04'),
(25, 8, 'Bánh Kem', 200000, 199000, 'bánh kem.jpg', '1 Chiếc', 'Bánh kem', '8', '2021-03-05 15:58:32', '2021-03-12 06:41:31'),
(33, 8, 'Bánh Đậu Xanh', 35000, 0, 'bánh đậu xanh.jpg', '5 Chiếc', 'Bánh Đậu Xanh Hải Dương', '8', '2021-03-12 01:42:41', '2021-03-12 06:42:08'),
(34, 8, 'Bánh Kẹp', 59000, 50000, 'bánh kẹp.jpg', '1 Chiếc', 'Bánh Kẹp', '8', '2021-03-12 06:33:45', '2021-03-12 06:33:45'),
(35, 9, 'Thịt Gà', 120000, 0, 'gà cả con.JPG', '1Kg', 'Thịt Gà', '9', '2021-03-12 06:43:54', '2021-03-12 06:43:54'),
(36, 9, 'Thịt Vịt', 100000, 90000, 'thịt vịt.jpg', '1Kg', 'Thịt Vịt', '9', '2021-03-12 06:44:35', '2021-03-12 06:44:35'),
(37, 2, 'Cá Chép', 35000, 0, 'cá he.jpg', '1Kg', 'Cá Chép', '2', '2021-03-12 06:45:29', '2021-03-12 06:45:29'),
(38, 2, 'Mực', 150000, 0, 'mực nang.jpg', '1Kg', 'Mực Biển Tươi', '2', '2021-03-12 06:46:17', '2021-03-12 06:46:17'),
(39, 2, 'Cua Biển', 90000, 0, 'cua biển.jpg', '1Kg', 'Cua Biển', '2', '2021-03-12 06:47:01', '2021-03-12 06:47:01'),
(40, 9, 'Trứng Giỗng', 50000, 45000, 'trứng ngỗng.jpg', '1 Trái', 'Trứng giỗng', '9', '2021-03-12 06:47:46', '2021-03-12 06:47:46'),
(41, 9, 'Trứng gà', 50000, 0, 'trứng gà.png', '10 Trái', 'Trứng Gà', '9', '2021-03-12 06:48:24', '2021-03-12 06:48:24'),
(42, 9, 'Thịt Lợn Thăn', 150000, 0, 'thịt thăn.jpg', '1Kg', 'Thịt Lợn Thăn', '9', '2021-03-12 06:49:29', '2021-03-12 06:49:29'),
(43, 7, 'Nước Cam', 70000, 60000, 'nước cam.JPG', '1 Lít', 'Nước Cam Tươi', '7', '2021-03-12 06:50:33', '2021-03-12 07:15:49'),
(44, 1, 'Bắp Cải', 20000, 18000, 'bắp cải.jpg', '0.5Kg', 'Rau Cải Bắp', '1', '2021-03-12 06:51:04', '2021-03-12 07:13:34'),
(45, 1, 'Cải Bắp Tím', 20000, 18000, 'bắp cải tím.jpg', '0.5Kg', 'Cài Bắp Tím', '1', '2021-03-12 06:51:32', '2021-03-12 06:51:32'),
(46, 8, 'Bánh Ngọt', 10000, 8000, 'bánh ngọt.jpg', '1 Chiếc', 'Bánh Ngọt', '8', '2021-03-12 06:53:00', '2021-03-12 07:13:08'),
(47, 2, 'Tôm', 200000, 199000, 'tôm.JPG', '1Kg', 'Tôm càng', '2', '2021-03-12 06:54:31', '2021-03-12 06:54:31'),
(48, 1, 'Cải Thảo', 30000, 25000, 'cải thảo.jpg', '1Kg', 'Cải thảo làm kim chi', '1', '2021-03-12 06:55:12', '2021-03-12 06:55:12'),
(49, 1, 'Cải thìa', 25000, 20000, 'cải thìa.jpg', '1Kg', 'Cải thìa', '1', '2021-03-12 06:55:48', '2021-03-12 06:55:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Slide1', 'unnamed.png', '2021-03-01 08:09:48', '2021-03-01 09:44:25'),
(3, 'Slide2', 'unnamed2.png', '2021-03-01 08:31:20', '2021-03-01 09:44:32'),
(9, 'Slide3', 'unnamed3.png', '2021-03-12 07:16:57', '2021-03-12 07:16:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Quốc An', 'admin@gmail.com', NULL, '$2y$10$wg/.nf6S2/3Ane7efDBgq.BKqlySPGdo6i59Vpk6VtjpKMohGu2LC', 0, NULL, NULL, NULL),
(2, 'Ngô Quốc An', 'mysky11o222@gmail.com', NULL, '$2y$10$zP7GZG6KicpuCrwMI7VYhe0F3MMCCD5Oy4R/xxQ3kConAwpP3V4qe', 1, NULL, '2021-03-11 02:25:45', '2021-03-11 02:25:45'),
(4, 'Võ Ngọc Quyên', 'ngothuuyen38@gmail.com', NULL, '$2y$10$VABLvqL1a1MzL48g6FFCz.7DWFSQX1qpi6ZzOwDnob841c4RKRZf2', 1, NULL, '2021-03-11 02:42:32', '2021-03-11 16:01:33'),
(5, 'Ngô Gia Hân', 'Hann@gmail.com', NULL, '$2y$10$d1fZtzZapWAok1VvPaBF0.EApSbVfMjJR/cVi0vlu//pn6onrU1Qu', 1, NULL, '2021-03-11 02:43:39', '2021-03-11 02:43:39'),
(6, 'Nguyễn Minh Thànhhh', 'thanh2248@gmail.com', NULL, '$2y$10$DjATxjDohWJb4f6NBc1Ehu0yocJth/BB7iCo1JOs88zaLo8sxZHTK', 1, NULL, '2021-03-11 04:33:21', '2021-03-12 07:17:52'),
(7, 'Nguyễn Văn B', 'binh8888@gmail.com', NULL, '$2y$10$Sj5/4/s1EAlrigwtw3.b0ub/50Y4hI.0pLHAVLMOM6bs5Te4tVxeW', 1, NULL, '2021-03-12 07:26:40', '2021-03-12 07:26:40'),
(8, 'Ngô Quốc An', 'ngoquocan@gmail.com', NULL, '$2y$10$koqdJ7f4wb0eujLIG.5Qf.TU1qPCvaOsti4yhKOK5Ly2YYYB.TIDS', 1, NULL, '2021-03-12 07:29:48', '2021-03-12 07:29:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bills_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_detail_product_id_foreign` (`product_id`),
  ADD KEY `bill_detail_bill_id_foreign` (`bill_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Các ràng buộc cho bảng `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_bill_id_foreign` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`),
  ADD CONSTRAINT `bill_detail_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

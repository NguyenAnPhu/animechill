-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2023 lúc 03:10 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `animechill`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `idProduct` varchar(20) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `idProduct`, `text`) VALUES
(10, 'pika', '7', 'Phim hay quá ^^'),
(11, 'pika', '7', 'Main cháy quá ^^'),
(12, 'pika', '9', 'Hạo báo quá vậy =))');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 2),
(6, '2023_09_19_071352_create_student_table', 2),
(7, '2023_09_19_073625_create_students_table', 3),
(8, '2023_09_24_083321_create_product', 4),
(9, '2023_09_29_081239_create_user', 5),
(10, '2023_11_04_121657_create_comment', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` text NOT NULL,
  `img` varchar(200) NOT NULL,
  `video` text NOT NULL,
  `genre` varchar(100) NOT NULL,
  `release` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `rate` varchar(2) NOT NULL,
  `list_ep` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `des`, `img`, `video`, `genre`, `release`, `status`, `rate`, `list_ep`) VALUES
(6, 'Già Thiên', 'Phim được chuyển thể từ tiểu thuyết “Già Thiên” của tác giả Thần Đông (Thế Giới Hoàn Mỹ) và cùng studio với Phàm Nhân Tu Tiên     Main: Diệp Phàm  Harem: Cơ Tử Nguyệt (vợ), Thần Khê, An Diệu Y, Tần Dao     Cấp độ tu vi:     Luân Hải Bí Cảnh Đạo Cung Bí Cảnh Tứ Cực Bí Cảnh Hóa Long Bí Cảnh  Tiên Đài Bí Cảnh Chuẩn Đế Đại Đế Hồng Trần Tiên', 'https://animehay.city/upload/poster/3787-1691189709.jpg', 'https://www.youtube.com/embed/-F1DSaYDkJk', 'Tiên Hiệp', 'CN Animation', 'HOT', '5', '20 Tập'),
(7, 'Đấu Phá Thương Khung', 'Main: Tiêu Viêm  Vợ: Thải Lân (Mỹ Đỗ Toa), Huân Nhi     Hệ thống tu luyện:  Đấu khí (mỗi cấp chia làm 9 tinh): Đấu giả, Đấu sư, Đại đấu sư, Đấu linh, Đấu vương, Đấu hoàng, Đấu tông, Đấu tôn, Đấu thánh, Đấu đế  Đấu kỹ (mỗi giai chia làm sơ, trung, cao cấp): Hoàng giai, Huyền Giai, Địa Giai, Thiên Giai  Tinh thần lực: Thiên cảnh, Đế cảnh  Luyện dược sư, đan dược: từ nhất phẩm đến cửu phẩm rồi đến Đế Phẩm, Dị Hỏa  Thể chất: Ách Nan Độc Thể, Bích Xà Tam Hoa Đồng  -Bảng Dị Hỏa (23 loại)  Viêm Đế, Hư Vô Thôn Viêm, Tịnh Liên Yêu Hỏa, Kim Đế Phần Thiên Viêm, Sinh Linh Chi Diễm, Bát Hoang Phá Diệt Diễm, Cửu U Kim Tổ Hỏa, Nghiệp Hỏa Hồng Liên, Tam Thiên Diễm Viêm Hỏa, Cửu U Phong Viêm, Cốt Linh Lãnh Hỏa, Cửu Long Lôi Cương Hỏa, Quy Linh Địa Hỏa, Vẫn Lạc Tâm Viêm, Hải Tâm Diễm, Hỏa Vân Thủy Viêm, Hỏa Sơn Thạch Diễm, Phong Lôi Phẫn Nộ Diễm*, Thanh Liên Địa Tâm Hỏa, Tu La Huyết Diễm*, Tái Sinh Viêm*, Vạn Thú Linh Hỏa, Huyền Hoàng Viêm  Các lửa khác: Hóa Sinh Hỏa, Lưu Ly Liên Tâm Hỏa, Huyết Yêu Diễm Hỏa, Tử Hỏa', 'https://animehay.city/upload/poster/3518-1690962338.jpg', 'https://www.youtube.com/embed/gZIypw3QTT0', 'Tiên Hiệp', 'CN Animation', 'HOT', '9', '20 Tập'),
(8, 'Đại Chúa Tể', 'Main: Mục Trần  Người chơi “hệ chung tình mình em”: Lạc Ly     Được chuyển thể từ tiểu thuyết Đại Chúa Tể của Thiên Tằm Thổ Đậu (tác giả của Đấu Phá Thương Khung và Vũ Động Càn Khôn)', 'https://animehay.city//upload/poster/3800.jpg', 'https://www.youtube.com/embed/a0OjGaEhKDE', 'Tiên Hiệp', 'CN Animation', 'SẮP RA', '8', '26 Tập'),
(9, 'Thế Giới Hoàn Mỹ', 'Main: Hoang Thiên Đế - Thạch Hạo  Vợ: Hỏa Linh Nhi (chính thất), Vân Hi (mẹ của Tiểu Thạch Đầu), Thanh Y   Cảnh giới:   Phàm Nhân: 1. Bàn Huyết Cảnh 2. Động Thiên Cảnh: 1 Động Thiên – 10 Động Thiên (Cực Cảnh) 3. Hóa Linh Cảnh: Thân Thể Thành Linh – Trọng Tố Chân Ngã – Động Thiên Dưỡng Linh 4. Minh Văn Cảnh (Phong Hầu) 5. Liệt Trận Cảnh (Vương Giả) 6. Tôn Giả Cảnh Thần Đạo: 1. Thần Hỏa Cảnh (Ngụy Thần) 2. Chân Nhất Cảnh (Chân Thần) 3. Thánh Tế Cảnh (Thần Vương) 4. Thiên Thần Cảnh 5. Hư Đạo Cảnh 6. Trảm Ngã Cảnh 7. Độn Nhất Cảnh (Chí Tôn) 8. Chí Tôn Cảnh 9. Chí Tôn Cực Đạo (Nhân Đạo Đỉnh Phong) Tiên Đạo (Trường Sinh Lĩnh Vực): Chân Tiên → Tiên Vương → Chuẩn Tiên Đế → Tiên Đế Hệ Thống Tu Luyện do main tự sáng tạo: Luân Hải Bí Cảnh → Đạo Cung Bí Cảnh → Tứ Cực Bí Cảnh → Hóa Long Bí Cảnh → Tiên Đài Bí Cảnh (thế thứ 10 Độ Kiếp Thành Chân Tiên) → Tiên Vương → Chuẩn Tiên Đế → Tiên Đế', 'https://animehay.city/upload/poster/3247-1681696175.jpg', 'https://www.youtube.com/embed/ZqDslLd27xs', 'Huyền ảo', 'CN Animation', 'HOT', '8', '60 Tập'),
(10, 'Jujutsu Kaisen 2nd Season', 'Phần 2 của bộ phim Jujutsu Kaisen', 'https://animehay.city//upload/poster/3820.jpg', 'https://www.youtube.com/embed/6GXLU5eba48', 'Học Đường', 'JP Animation', 'SẮP RA', '8', '26 Tập'),
(11, 'One Piece', 'Monkey D. Luffy, 1 cậu bé rất thích Đảo hải tặc có ước mơ tìm được kho báu One Piece và trở thành Vua hải tặc - Pirate King. Lúc nhỏ, Luffy tình cờ ăn phải trái quỉ (Devil Fruit) Gomu Gomu, nó cho cơ thể cậu khả năng co dãn đàn hồi như cao su nhưng đổi lại cậu sẽ không bao giờ biết bơi. Sau đó Luffy lại được Shank cứu thoát tuy nhiên ông ta bị mất 1 cánh tay. Sau đấy Shank chia tay Luffy và để lại cho cậu cái mũ rơm (Straw Hat) và nói rằng: Sau này bao giờ thành cướp biển hãy gặp ta và trả lại nó. Chính lời nói này đã thúc đầy Luffy trở thành 1 cướp biển thật sự.  Hãy cùng theo dõi xem liệu Luffy có thể trở thành đạt được kho báu One Piece và trở thành Vua Hải Tặc không nhé.', 'https://animehay.city/upload/poster/34-1690741006.jpg', 'https://www.youtube.com/embed/m8FFe2Qcm_4', 'Phiêu Lưu', 'Toei Animation', 'HOT', '8', '1000 Tập'),
(12, 'Vị Thần Dối Trá', 'Sau khi năng lượng trên thế giới cạn kiệt, con người đã xây dựng một thành phố khổng lồ mới - Thành phố Fez. Ô Minh Lộ một học sinh cấp hai ở thành phố Fez, bị \"hệ thống\" của thành phố đánh giá là kẻ ác vì nói dối quá nhiều lần, và bị \"nghiệp chướng\" của loài tà ác tấn công. Thành phố Fez đã cử Lien, một chuyên gia theo dõi nói dối, để giúp Ô Minh Lộ \"sửa chữa\" những tật xấu của cậu ta. Tuy nhiên, sau khi cả hai gặp nhau, họ đã bị cuốn vào tầng tầng nước xoáy, và những bí mật không thể cho ai biết đó đang dần được hé lộ...', 'https://animehay.city//upload/poster/3875.jpg', 'https://www.youtube.com/embed/96CvzITuW3Q', 'Phiêu Lưu', 'Toei Animation', 'SẮP RA', '8', '26 Tập');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `birthday`, `address`) VALUES
(1, 'Nguyễn An Phú', 'anphu12t2@gmail.com', '2023-09-06 17:00:00', '496/2 Dương Quảng Hàm, phường 6, quận Gò Vấp, Thành Phố Hồ Chí Minh'),
(8, 'pikaka', 'pika@gmail.com', '2023-09-08 17:00:00', '123 Dương Quảng Hàm, phường 6, quận Gò Vấp, Thành Phố Hồ Chí Minh'),
(9, 'AnimeStorePuh', 'donhumau123@gmail.com', '2023-09-15 17:00:00', '496/4 Dương Quảng Hàm, phường 6, quận Gò Vấp, Thành Phố Hồ Chí Minh'),
(11, 'Dont Cry', 'cry@gmail.com', '2023-09-06 17:00:00', 'Thành Phố Hồ Chí Minh'),
(12, 'AinPuh', 'anphu12t2@gmail.com', '2023-07-16 17:00:00', '496/2 Dương Quảng Hàm, phường 6, quận Gò Vấp, Thành Phố Hồ Chí Minh'),
(13, 'Key', 'an@gmail.com', '2023-06-29 17:00:00', 'Dương Quảng Hàm, phường 6, quận Gò Vấp, Thành Phố Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `birthday`, `email`, `password`, `role`) VALUES
(1, 'Nguyễn An Phú', '29/10/2001', 'anphu12t2@gmail.com', '1', 1),
(2, 'AnimePuh', '29/10/2002', 'SonMoiz@gmail.com', '1', 0),
(3, 'pika', '29/10/2003', 'pika@gmail.com', '1', 0),
(4, 'aka', '29/10/2001', 'aka@gmail.com', '1', NULL),
(5, 'Key', '29/10/2002', 'tanreadmail5@gmail.com', '1', NULL),
(6, 'Key', '29/10/2002', 'tanreadmail5@gmail.com', '1', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

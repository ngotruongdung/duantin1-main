-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 15, 2022 lúc 05:50 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `outerity`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_diachi` varchar(500) NOT NULL,
  `bill_sdt` int(11) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bill_status` tinyint(4) NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `name`) VALUES
(1, 'Tee-Shirt'),
(2, 'Polo'),
(3, 'Hoodie'),
(4, 'Quần Sort');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name_sp` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name_sp`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(1, 'BabyFont Tee v2.0 - White Color', 180000, 'https://product.hstatic.net/200000312481/product/mockup-cuoi-cung-outerity_31be819d506c4c3aaf8176d562c378f0_master.jpg', '🔹 Bảng size Outerity\r\nS : Dài 69 Rộng 52.5 | 1m45 - 1m58, Dưới 50Kg\r\nM : Dài 73 Rộng 55 | 1m55 - 1m65, 45 - 65Kg\r\nL: Dài : 76.5 Rộng: 57.5 | 1m65 - 1m8, 60Kg - 80Kg\r\n👉 Nếu chưa biết lựa size bạn có thể inbox để được chúng mình tư vấn.\r\n\r\n🔹 Chính sách đổi trả Outerity.\r\n– Miễn phí đổi hàng cho khách mua ở Outerity trong trường hợp bị lỗi từ nhà sản xuất, giao nhầm hàng, nhầm size.\r\n- Quay video mở sản phẩm khi nhận hàng, nếu không có video unbox, khi phát hiện lỗi phải báo ngay cho Outerity trong 1 ngày tính từ ngày giao hàng thành công. Qua 1 ngày chúng mình không giải quyết khi không có video unbox.\r\n– Sản phẩm đổi trong thời gian 3 ngày kể từ ngày nhận hàng\r\n– Sản phẩm còn mới nguyên tem, tags, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những tác nhân bên ngoài cửa hàng sau khi mua hàng.', 99, 1),
(2, 'Basic Tee Ver 2.0 - Black', 190000, 'https://product.hstatic.net/200000312481/product/z2998915424487_9e7f26bd886f7e2f7099d6798c05d6e1_7f5c8a4373974b6496f091bcef78e395_master.jpg', 'Gồm 3 size: S / M / L \r\nThông số áo: S : Dài 69 Rộng 52.5 | M : Dài 73 Rộng 55 | L: Dài : 76.5 Rộng: 57.5\r\nChất liệu vải :100% Cotton \'\' Chất lượng vải đánh dấu sự ra đời của Outerity\'\'\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha.', 200, 1),
(3, '1 Year Tee - Black', 180000, 'https://product.hstatic.net/200000312481/product/z3027270507313_c96f063b116d1b72ad1747aa51808c47_962b26cdabb643559db13b56a66e286e_master.jpg', 'Gồm 3 size: S / M / L \r\nThông số áo: S : Dài 69 Rộng 52.5 | M : Dài 73 Rộng 55 | L: Dài : 76.5 Rộng: 57.5\r\nChất liệu vải :100% Cotton \'\' Chất lượng vải đánh dấu sự ra đời của Outerity\'\'\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha.', 99, 1),
(4, 'Basic Polo / Green Color', 208000, 'https://product.hstatic.net/200000312481/product/z3122588504260_fa716904c5d2a943044fe8b8276b7272__1__c57700c5907046a6bb3579bf899905c2_master.jpg', 'Gồm 3 size: S / M / L \r\nThông số áo: S : Dài 69 Rộng 52.5 | M : Dài 73 Rộng 55 | L: Dài : 76.5 Rộng: 57.5\r\nChất liệu vải :100% Cotton \'\' Chất lượng vải đánh dấu sự ra đời của Outerity\'\'\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha.', 122, 2),
(6, 'BAD FEELINGS v2.0 / BLACK Color', 230000, 'https://product.hstatic.net/200000312481/product/z3012854224778_9051eda0861788f1c078f7b17157eb29_6c2b97e204704c33a3dc3b54fb8e4a7f_master.jpg', 'Gồm 3 size: S / M / L \r\nThông số áo: S : Dài 69 Rộng 52.5 | M : Dài 73 Rộng 55 | L: Dài : 76.5 Rộng: 57.5\r\nChất liệu vải :100% Cotton \'\' Chất lượng vải đánh dấu sự ra đời của Outerity\'\'\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha.', 145, 1),
(7, 'Bazic Hoodie / Black Color - Nỉ chân cua', 290000, 'https://product.hstatic.net/200000312481/product/1_72b862ce8b6b4eecbf0dc5c8c7981123_master.jpg', 'Gồm 2 size: / M / L \r\nChất liệu vải Nỉ chân cua / Độ dày vừa phải phù hợp mặc vào cả ban ngày\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha .. luv luv ', 99, 3),
(8, 'Italics Short / Black Color - Nỉ chân cua', 180000, 'https://product.hstatic.net/200000312481/product/z3106227794463_3d62d7cfeed5536a9a526ec9c0ab35d4_2e5d0d2c6ca243908d249133d51053d8_master.jpg', 'Gồm 3 size: S / M / L \r\nChất liệu vải Nỉ chân cua / Độ dày vừa phải phù hợp mặc vào cả ban ngày\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha .. luv luv ', 12, 4),
(9, '\r\nItalics Short / Bright White Color - Nỉ chân cua', 180000, 'https://product.hstatic.net/200000312481/product/z3106211712837_eef99719de9ab89830878f6617803605_15cb3b4b406c4b41960b803f83ae18f5_master.jpg', 'Gồm 3 size: S / M / L \r\nChất liệu vải Nỉ chân cua / Độ dày vừa phải phù hợp mặc vào cả ban ngày\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha .. luv luv ', 23, 4),
(10, 'Signature Short', 230000, 'https://product.hstatic.net/200000312481/product/short_dc9800ec6438477b834cfb5749075b1b_master.png', 'Gồm 3 size: S / M / L \r\nChất liệu vải :100% Cotton \'\' Chất lượng vải đánh dấu sự ra đời của Outerity\'\'\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nFearow xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha .. luv luv ', 188, 4),
(11, 'Hoodie Zip Graffiti / BrighWhite Color', 290000, 'https://product.hstatic.net/200000312481/product/orp306-5_86af69971c94465ea6ba15f065e0a354_master.jpg', 'Gồm 2 size: / M / L \r\n🔹 Bảng size Outerity\r\nM : Dài 71 Rộng 63.5 | 1m45 - 1m60, 35 - 45Kg\r\nL: Dài : 73.5 Rộng: 66 | 1m60 - 1m70, 45Kg - 75Kg\r\n\r\nChất liệu vải Nỉ chân cua / Độ dày thích hợp mặc vào mùa hè, khí hậu mát mẻ như khu vực miền Nam.', 11, 3),
(12, 'Hoodie Zip Snow / White', 230000, 'https://product.hstatic.net/200000312481/product/zip-snow_b815563032c644bbbf6f340e2fa57b58_master.jpg', 'Gồm 2 size: / M / L \r\n🔹 Bảng size Outerity\r\nM : Dài 71 Rộng 63.5 | 1m45 - 1m60, 35 - 45Kg\r\nL: Dài : 73.5 Rộng: 66 | 1m60 - 1m70, 45Kg - 75Kg\r\n\r\nChất liệu vải Nỉ chân cua / Độ dày thích hợp mặc vào mùa hè, khí hậu mát mẻ như khu vực miền Nam.', 133, 3),
(13, 'Mini Signature Hoodie Zip / Blue Horizon Color - Nỉ bông', 290000, 'https://product.hstatic.net/200000312481/product/orp406-1_c432398b03254176a9461a5abdce2b2a_master.jpg', 'Gồm 2 size: / M / L \r\n🔹 Bảng size Outerity\r\nM : Dài 71 Rộng 63.5 | 1m45 - 1m60, 35 - 45Kg\r\nL: Dài : 73.5 Rộng: 66 | 1m60 - 1m70, 45Kg - 75Kg\r\n\r\nChất liệu vải Nỉ chân cua / Độ dày thích hợp mặc vào mùa hè, khí hậu mát mẻ như khu vực miền Nam.', 121, 3),
(14, 'POLO OUTERITY RAINBOW - BLACK', 190000, 'https://product.hstatic.net/200000312481/product/polo-den_20ef7470b6724432aedad468b24ae1e7_master.jpg', 'Gồm 3 size: S / M / L \r\nThông số áo: S : Dài 69 Rộng 52.5 | M : Dài 73 Rộng 55 | L: Dài : 76.5 Rộng: 57.5\r\nChất liệu vải :100% Cotton \'\' Chất lượng vải đánh dấu sự ra đời của Outerity\'\'\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha.', 122, 2),
(15, '\r\nItalics Polo / Grey color', 190000, 'https://product.hstatic.net/200000312481/product/2_0d90f9625b8d4f3fa9ff80c929312b9f_master.jpg', 'Gồm 3 size: S / M / L \r\nThông số áo: S : Dài 69 Rộng 52.5 | M : Dài 73 Rộng 55 | L: Dài : 76.5 Rộng: 57.5\r\nChất liệu vải :100% Cotton \'\' Chất lượng vải đánh dấu sự ra đời của Outerity\'\'\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha.', 122, 2),
(16, 'Polo Signature / White Color', 190000, 'https://product.hstatic.net/200000312481/product/z3170148377478_a2d568963bc027ce3865119faaeff8e6_941eb185f2944b9699039da5454b509b_master.jpg', 'Gồm 3 size: S / M / L \r\nThông số áo: S : Dài 69 Rộng 52.5 | M : Dài 73 Rộng 55 | L: Dài : 76.5 Rộng: 57.5\r\nChất liệu vải :100% Cotton \'\' Chất lượng vải đánh dấu sự ra đời của Outerity\'\'\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha.', 122, 2),
(17, '\r\nSignature Short - Pink', 180000, 'https://product.hstatic.net/200000312481/product/shorthog_4fa6b539f54e4818953d40b3dd5947ab_master.jpg\r\n', 'Gồm 3 size: S / M / L \r\nChất liệu vải :Cotton Nỉ \'\' Chất lượng vải đánh dấu sự ra đời của Outerity\'\'\r\nCông nghệ in: In lụa cao cấp, bảo quản tốt khi giặt máy , không bong tróc phai màu\r\nOuterity xuất hiện mang đến làn gió mới, xuất hiện từ đầu năm 2021 đầy biến động nhưng những gì Outerity thực hiện đem tới một chất lượng và giá thành tốt nhất đến cho các bạn nha .. luv luv \r\n', 99, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `diachi` varchar(500) NOT NULL,
  `sdt` int(12) NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `name`, `email`, `user`, `password`, `diachi`, `sdt`, `role`) VALUES
(1, 'Ngô Trường Dũng', 'ngotruongdung122@gmail.com', 'admin', '123456', 'Thống Nhất, GV', 1, 1),
(2, 'Trường Dũng', 'ngotruongdungit@gmail.com', 'ngotruongdung', '123456', '12 Nguyễn Huệ', 862208620, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 01, 2019 lúc 04:19 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lienquan`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` bigint(100) NOT NULL,
  `infor` longtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thumnail` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `champ` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `skin` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `price` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `rank` int(11) NOT NULL,
  `status` int(2) NOT NULL,
  `sale` int(10) NOT NULL,
  `runes` int(50) NOT NULL,
  `account_type` int(3) NOT NULL,
  `username` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gold` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `infor`, `thumnail`, `champ`, `skin`, `price`, `rank`, `status`, `sale`, `runes`, `account_type`, `username`, `password`, `gold`) VALUES
(1, 'acc trắng thông tin', 'https://lienquan.garena.vn/files/skin/054c7833a371a11691ad82f4faaa699d5bdbd07298bea.jpg', '65', '21', '50000', 5, 1, 20, 67, 0, '', '', ''),
(4, '<p>Hello</p>', 'https://lienquan.garena.vn/files/skin/f8aa14696ccc1cf02e6d2be8bb0676cc5b191602b9089.jpg', '54', '12', '60000', 1, 1, 0, 53, 0, '', '', ''),
(5, '<p><img src=\"blob:http://localhost/2f48483b-5da1-427a-b3f4-cdcd3431a0d5\" style=\"width: 807px;\" class=\"fr-fic fr-dib\"></p><p><img src=\"blob:http://localhost/78be46d1-d824-4ca3-9497-249a8f2c777f\" style=\"width: 807px;\" class=\"fr-fic fr-dib\"></p>', 'https://lienquan.garena.vn/files/skin/cdf91413fe4e299b6d0689d4293d33a85b1f97c032216.jpg', '87', '21', '1000000', 3, 0, 0, 53, 0, '', '', '6000'),
(6, '<p><img src=\"blob:http://localhost/11eb9a4d-277a-4d0b-a97c-ea177f624c20\" style=\"width: 807px;\" class=\"fr-fic fr-dib\"></p>', 'https://lienquan.garena.vn/files/skin/2010b7e41dd78615e8b3a2f35b09ff7f589a8bd78c5b0.jpg', '1', '1', '1', 0, 1, 0, 1, 0, '', '', ''),
(7, '<p><span class=\"fr-emoticon fr-deletable fr-emoticon-img\" style=\"background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f60d.svg);\">&nbsp;</span>&nbsp;</p>', 'https://lienquan.garena.vn/files/skin/babe3eb47dc52d776d8ef4effcab0e4f5a6ec8598a5ca.jpg', '1', '1', '1', 0, 1, 0, 1, 0, '', '', ''),
(8, '<p>Acc trắng th&ocirc;ng tin&nbsp;</p>', 'https://lienquan.garena.vn/files/skin/58922be4a508108552db403fb6c031295b88ea54cffa1.jpg', '12', '65', '700000', 5, 0, 0, 43, 0, '', '', ''),
(9, '&lt;p&gt;&lt;span class=&quot;fr-emoticon fr-deletable fr-emoticon-img&quot; style=&quot;background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f60d.svg);&quot;&gt;&amp;nbsp;&lt;/span&gt;&amp;nbsp;&lt;/p&gt;', 'https://lienquan.garena.vn/files/skin/58922be4a508108552db403fb6c031295b88ea54cffa1.jpg', '3', '4', '6', 0, 1, 0, 6, 0, '', '', ''),
(10, '<p><span class=\"fr-emoticon fr-deletable fr-emoticon-img\" style=\"background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f604.svg);\">&nbsp;</span>&nbsp;</p>', 'https://lienquan.garena.vn/files/skin/2010b7e41dd78615e8b3a2f35b09ff7f589a8bd78c5b0.jpg', '3', '4', '7', 0, 1, 0, 6, 0, '', '', ''),
(11, '<table style=\"width: 100%;\"><thead><tr><th>VIP</th><th>NGU</th><th>SS</th><th>SS</th><th>SS</th><th>SS</th><th>SS</th></tr></thead><tbody><tr><td style=\"width: 14.2857%;\">1</td><td style=\"width: 14.2857%;\">2</td><td style=\"width: 14.2857%;\">3</td><td style=\"width: 14.2857%;\">4</td><td style=\"width: 14.2857%;\">5</td><td style=\"width: 14.2857%;\">6</td><td style=\"width: 14.2857%;\">7</td></tr></tbody></table><p><br></p>', 'https://lienquan.garena.vn/files/skin/9ae7cb88ce4c3899cce03dd23b611cd55b1916825d891.jpg', '3', '4', '1', 0, 0, 0, 6, 0, '', '', ''),
(12, '<table style=\"width: 100%;\"><thead><tr><th>VIP</th><th>NGU</th><th>SS</th><th>SS</th><th>SS</th><th>SS</th><th>SS</th></tr></thead><tbody><tr><td style=\"width: 14.2857%;\">1</td><td style=\"width: 14.2857%;\">2</td><td style=\"width: 14.2857%;\">3</td><td style=\"width: 14.2857%;\">4</td><td style=\"width: 14.2857%;\">5</td><td style=\"width: 14.2857%;\">6</td><td style=\"width: 14.2857%;\">7</td></tr></tbody></table><p><br></p>', 'https://lienquan.garena.vn/files/skin/8a7b6485518cba883064bc884b248bcd5bf778ff159b6.jpg', '3', '4', '1', 0, 1, 0, 6, 0, '', '', ''),
(13, '<h1>ACC VIP</h1>', 'https://lienquan.garena.vn/files/skin/7cf166510b07a9996810020bc87d806a5b88ea310908e.jpg', '3', '4', '122', 0, 1, 0, 6, 0, '', '', ''),
(14, '<p><img src=\"https://i.froala.com/assets/photo10.jpg\" data-id=\"10\" data-type=\"image\" data-name=\"Image 2018-10-28 at 01:10:59.jpg\" style=\"width: 807px;\" class=\"fr-fic fr-dib\"></p>', 'https://lienquan.garena.vn/files/skin/58922be4a508108552db403fb6c031295b88ea54cffa1.jpg', '3', '4', '122', 0, 1, 0, 6, 0, '', '', ''),
(15, '<p><img src=\"blob:http://localhost/b2b8ba17-e725-440a-b467-f51043a01aa8\" style=\"width: 807px;\" class=\"fr-fic fr-dib\"></p>', 'https://lienquan.garena.vn/files/skin/774475336079e3d014b6e462e419cba85bd7d95d6ebbb.jpg', '1', '2', '1', 0, 1, 0, 3, 0, '', '', ''),
(16, '', 'https://lienquan.garena.vn/files/skin/8ecc35d079463abfc3fd50d96e0897cd5bf778de39e71.jpg', '2', '2', '7555', 0, 1, 0, 332, 111, 'admin', 'Anhpmbg123', '32'),
(17, '', 'https://lienquan.garena.vn/files/skin/90b107838232d5d8db37eb34f4fa5f70590bf51876ccd.jpg', '78', '54', '49997', 4, 1, 0, 75, 111, 'testacc123', 'lequangvy212', '90000'),
(18, '', 'https://lienquan.garena.vn/files/skin/f8aa14696ccc1cf02e6d2be8bb0676cc5b191602b9089.jpg', '54', '75', '6999997', 5, 0, 0, 43, 123, 'viplienquan123', 'hyuxazai12zanzq8', '3985200'),
(19, '', 'https://lienquan.garena.vn/files/skin/7cf166510b07a9996810020bc87d806a5b88ea310908e.jpg', '62', '13', '3000003', 3, 1, 0, 86, 111, 'vydz1232', 'uilosza12', '40000'),
(20, '<p><img src=\"blob:http://localhost/f85663e8-637f-44d7-849b-4b1d82ec4482\" style=\"width: 634px;\" class=\"fr-fic fr-dib\"></p>', 'https://lienquan.garena.vn/files/skin/f8aa14696ccc1cf02e6d2be8bb0676cc5b191602b9089.jpg', '54', '21', '7000000', 5, 0, 0, 77, 111, 'asdxcsd', '64343', '90000'),
(21, '<p><img src=\"blob:http://localhost/325056e7-d6f2-463d-882d-9ad45e52c5ba\" style=\"width: 807px;\" class=\"fr-fic fr-dib\"></p>', 'https://lienquan.garena.vn/files/skin/7cf166510b07a9996810020bc87d806a5b88ea310908e.jpg', '78', '32', '9999995', 5, 0, 0, 89, 123, 'helloyu98', 'betapchoi654', '99999'),
(22, '', 'https://lienquan.garena.vn/files/skin/5f9961c48b8e706d66c6f2b0db56881458cb97a134819.jpg', '1', '1', '100000000', 0, 0, 0, 1, 111, '1', '21', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `champ`
--

CREATE TABLE `champ` (
  `id` int(50) NOT NULL,
  `name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `champ`
--

INSERT INTO `champ` (`id`, `name`, `avatar`) VALUES
(1, 'Valhein', 'https://lienquan.garena.vn/files/champion/icon/51eb5774578ee8efd48d782fa64a57a25b3455f40ca6b.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `config`
--

CREATE TABLE `config` (
  `id` int(20) NOT NULL,
  `website` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `title` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `description` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `noti` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `config`
--

INSERT INTO `config` (`id`, `website`, `title`, `keywords`, `description`, `noti`) VALUES
(1, 'http://localhost/shop', 'Shop Liên Quân', 'shop lien quan, acc liên quân, acc lien quan, nick liên quân, shop bán nick liên quân, shop bán acc liên quân, shop nick lqm, shop lq, shop lqm, nick lq, nick liên quân giá rẻ, acc lq, shop liên quân,shop acc lien quan, mua acc lien quan, mua acc liên quân, shop acc liên quân, acc liên quân, nick liên quân, shop nick liên quân, shop acc lien quan, shop nick lien quan , shop acc liên quân, web bán acc liên quân, web ban acc lien quan, mua nick lien quan, lienquansieure,lienquanshop, nick liên quân rẻ, mua nick lien quan o dau, mua nick liên quân rẻ ở đâu, can mua nick lien quan, can mua ac lien quan, cần mua nick liên quân, cần mua acc liên quân, mua acc lq, mua nick lq, shop ban acc lien quan, shop bán acc liên quân, shop nick liên quân, shop nick lien quan, shop liên quân tự động, shop lien quan tu dong,mua acc liên quân giá rẻ, mua acc lien quan gia re, mua nick lqmb, web ban acc lien quan uy tin, web bán acc liên quân uy tín, liên quân, lien quan, acc lien quan 30k, acc lien quan re, mua acc lien quan o dau, mua acc liên quân ở đâu, mua nick liên quân ở đâu, mua nick game, mua acc game, mua tài khoản liên quân, mua tai khoan lien quan, shop nick lien quan, shop nick liên quân, wen ban nick lien quan, web bán ac liên quân, acclienquan, taikhoangame, acc lien quan free, shop nick lqm, web bán nick lqm,mua nick game, mua acc, mua acc liên quân mobile, Mua acc liên quân uy tín, giá rẻ nhất tại Lienquansieure,shop liên quân mobile hàng đầu VN, nick liên quân mobile chất lượng và giá rẻ, Lienquansieure - Shop mua bán acc liên quân mobile, nick tự động bằng thẻ cào, acc liên quân, bán acc liên quân, shop acc liên quân, shop bán acc liên quân, shop acc liên quân giá rẻ, acclq con shop, bán acc liên quân 50k, shop liên quân giá rẻ, shop liên quân giá rẻ 20k, acc lien quan, lienquanmobile, nicklienquan, cày thuê liên quân, bán acc liên quân vip, mua mick lien quan mobile, ac lmht, mua bán acc liên quân, shop acc liên quân uy tín, nicklienquan vn, shop lq, shop nick lq gia re, shop garena vn, shop liên quân online, acc lq, shop lqmb, shoplienquan', 'Đoán xem', 'Chào mừng bạn đến với Shop acc Liên Quân Mobile siêu rẻ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_card`
--

CREATE TABLE `log_card` (
  `id` int(50) NOT NULL,
  `user_name` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `user_id` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `card_type` int(3) NOT NULL,
  `card_value` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `card_code` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `card_pin` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `day_charge` text COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `log_card`
--

INSERT INTO `log_card` (`id`, `user_name`, `user_id`, `card_type`, `card_value`, `card_code`, `card_pin`, `day_charge`) VALUES
(4, 'Lê Quang Vỹ', '419604575138474', 1, '20000', '213095998025572', '10000997106088', '26/12/2018'),
(5, 'Nam Hoàng', '227323244824055', 2, '50000', '', '', ''),
(6, 'Nam Hoàng', '227323244824055', 1, '10000', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `log_trade`
--

CREATE TABLE `log_trade` (
  `id` int(11) NOT NULL,
  `uid` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `username` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_price` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date_buy` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `account` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `product_id` int(50) NOT NULL,
  `account_type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `log_trade`
--

INSERT INTO `log_trade` (`id`, `uid`, `username`, `product_price`, `date_buy`, `account`, `password`, `product_id`, `account_type`) VALUES
(1, '419604575138474', 'Lê Quang Vỹ', '50000', '27-12-2018', 'hello', 'helsaxa', 1, 0),
(2, '419604575138474', 'Lê Quang Vỹ', '12000', '27-12-2018', 'test', '0121saxq', 6, 0),
(3, '419604575138474', 'Lê Quang Vỹ', '7555', '27-12-2018', 'admin', '0921jsax', 15, 0),
(4, '419604575138474', 'Lê Quang Vỹ', '60000', '27-12-2018', '', '', 0, 0),
(5, '419604575138474', 'Lê Quang Vỹ', '1', '27-12-2018', '', '', 7, 0),
(6, '419604575138474', 'Lê Quang Vỹ', '49997', '27-12-2018', 'testacc123', 'lequangvy212', 17, 0),
(7, '419604575138474', 'Lê Quang Vỹ', '1', '27-12-2018', '', '', 12, 0),
(8, '419604575138474', 'Lê Quang Vỹ', '3000003', '27-12-2018', 'vydz1232', 'uilosza12', 19, 111),
(9, '419604575138474', 'Lê Quang Vỹ', '122', '30-12-2018', '', '', 14, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `uid` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `date_join` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `coin` bigint(255) NOT NULL,
  `fullname` text COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `uid`, `date_join`, `coin`, `fullname`, `status`) VALUES
(1, '419604575138474', '24/12/2018', 1882186, 'Lê Quang Vỹ', 0),
(2, '227323244824055', '26/12/2018', -3117866, 'Nam Hoàng', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `champ`
--
ALTER TABLE `champ`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `log_card`
--
ALTER TABLE `log_card`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `log_trade`
--
ALTER TABLE `log_trade`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `champ`
--
ALTER TABLE `champ`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `config`
--
ALTER TABLE `config`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `log_card`
--
ALTER TABLE `log_card`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `log_trade`
--
ALTER TABLE `log_trade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

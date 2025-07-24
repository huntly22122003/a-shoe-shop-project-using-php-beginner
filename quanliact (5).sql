-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2023 lúc 01:06 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanliact`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `total` int(11) NOT NULL,
  `uname` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `note`, `total`, `uname`) VALUES
(1, 'qq', '0917489232', 'Dak Lak', 'yêu em', 7500000, 1),
(2, 'ss', '12112133', '323', 'fff', 1589000, 9),
(3, 'Hung', '012345677', 'Binh Thanh', 'Ship Le', 4700000, 9),
(4, 'Trung', '0123456789', 'sss', 'trung', 790000, 9),
(5, 'ee', '4512656465', '12', 'qq', 799000, 9),
(6, 'Quân Mai', '0917489232', 'Quán cơm Châu', 'â', 550000, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 32, 10, 750000),
(2, 2, 5, 1, 790000),
(3, 2, 79, 1, 799000),
(4, 3, 43, 10, 470000),
(5, 4, 5, 1, 790000),
(6, 5, 78, 1, 799000),
(7, 6, 31, 1, 550000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(40) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(40) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `content`) VALUES
(0, 'Air Max 90 Futura', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/ce3c5f4a-eae5-45ac-a7a4-4894a6525313/air-max-90-futura-shoes-SLTPS0.png', 459000, 'The Nike Air Max 90 Futura'),
(1, 'Giày Nice Air Jordan 1 High Xám like', 'https://chuyengiaysneaker.com/wp-content/uploads/chuyengiaysneaker-com-giay-nike-air-jordan-1-high-xam-like-auth-22-.jpg', 790000, 'Giày Nice Air Jordan 1 High Xám like'),
(2, 'Giày Nice Air Force 1 Travis Scott like', 'https://chuyengiaysneaker.com/wp-content/uploads/giay-sneaker-nike-force-1-travis-scott-like-auth77.jpg', 790000, 'Giày Nice Air Force 1 Travis Scott like'),
(3, 'Giày Nice Air Force 1 Canvas Siêu Cấp', 'https://chuyengiaysneaker.com/wp-content/uploads/chuyengiaysneaker-com-giay-nike-air-force-1-cavas-sieu-cap-11-.jpg', 790000, 'Giày Nice Air Force 1 Canvas Siêu Cấp'),
(4, 'Giày Nice Air Jordan 1 Swosh Đen Siêu Cấp', 'https://chuyengiaysneaker.com/wp-content/uploads/chuyengiaysneaker-com-giay-nike-air-force-1-swosh-den-sieu-cap-11-.jpg', 790000, 'Giày Nice Air Jordan 1 Swosh Đen Siêu Cấp'),
(5, 'Giày Nice Air Jordan 1 All White like', 'https://chuyengiaysneaker.com/wp-content/uploads/chuyengiaysneaker-com-giay-nike-air-force-1-all-white-like-auth-77-.jpg', 790000, 'Giày Nice Air Jordan 1 All White like'),
(6, 'Nice Court Vision Low Next Nature', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/695f6ba8-6324-49d2-ade0-e02e847febe0/court-vision-low-next-nature-shoes-N2fFHb.png', 909000, 'Nice Court Vision Low Next Nature'),
(7, 'Nice Air Max 97', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/2a17bae9-fd0a-4783-885e-5f398730f3d2/air-max-97-shoes-EBZrb8.png', 699000, 'Nice Air Max 97'),
(8, 'Nice Invincible 3', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/097596d1-f138-41e2-a72a-bc8caeb9b056/invincible-3-road-running-shoes-Wwmmlp.png', 579000, 'Nice Invincible 3'),
(9, 'NiceCourt Legacy', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/52f41a08-f3bc-4cb5-86a0-4bbf891d4eed/nikecourt-legacy-shoes-PKg8wX.png', 690000, 'NiceCourt Legacy'),
(10, 'Nice Dunk High Retro', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/5e7687f1-c13e-4bac-8ffa-a6f863ae9157/dunk-high-retro-shoe-DdRmMZ.png', 769000, 'Nice Dunk High Retro'),
(11, 'Air Jordan 1 Mid', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/f49d18ba-7c39-419d-a424-ef8a1b798375/air-jordan-1-mid-shoes-86f1ZW.png', 699900, 'Air Jordan 1 Mid'),
(12, 'Vaporfly 3', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/50b864ba-2ab4-4a45-823d-b3b53785b353/vaporfly-3-road-racing-shoes-wdmHPR.png', 599000, 'Vaporfly 3'),
(13, 'Air Jordan 1 Mid', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/f49d18ba-7c39-419d-a424-ef8a1b798375/air-jordan-1-mid-shoes-86f1ZW.png', 699900, 'Air Jordan 1 Mid'),
(14, 'Nice Invincible 3 X NU', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/a2c5a60b-ce02-4fb5-af2c-4b679334f4a7/invincible-3-road-running-shoes-VZDSsw.png', 699900, 'Nice Invincible 3 X NU'),
(15, 'Nice Pegasus FlyEase SE', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/8956f555-31e8-43aa-813f-4cb66b9d6b71/pegasus-flyease-se-easy-on-off-road-running-shoes-cxWMNn.png', 519000, 'Nice Pegasus FlyEase SE'),
(16, 'Nike Air Max SC SE', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9251d2bf-1d67-4669-a850-a2b1360fc884/air-max-sc-se-shoes-mVqXvN.png', 719000, 'Nike Air Max SC SE'),
(17, 'Air Jordan 1 Elevate High', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/92c9effb-3f17-4b9f-8504-5cd633e8a142/air-jordan-1-elevate-high-shoes-rKPNHR.png', 539000, 'Air Jordan 1 Elevate High'),
(18, 'Nice Air Force 1 07', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/8d752b32-17e8-40bc-ac1a-7a8849957a12/air-force-1-07-shoes-QNnTzL.png', 753149, 'Nice Air Force 1 07'),
(19, 'Nice Blazer Mid 77 X NU', 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,q_auto:eco/9af9bf83-f7ab-429b-adc6-16fd7dae0db8/blazer-mid-77-shoes-pKBLXb.png', 929000, 'Nice Blazer Mid 77 X NU'),
(20, 'Giày Abis Ultraboots siêu cấp 6.0 (Trắng Đen)', 'https://chuyengiaysneaker.com/wp-content/uploads/chuyengiaysneaker-com-giay-adidas-utraboots-6-0-sieu-cap-5.jpg', 790000, 'Giày Abis Ultraboots siêu cấp 6.0 (Trắng Đen)'),
(21, 'Giày Abis Ultraboots siêu cấp 6.0 (Trắng)', 'https://chuyengiaysneaker.com/wp-content/uploads/chuyengiaysneaker-com-giay-adidas-utraboots-6-0-sieu-cap-3.jpg', 790000, 'Giày Abis Ultraboots siêu cấp 6.0 (Trắng)'),
(22, 'Giày Abis Ultraboots siêu cấp 6.0 (Đen Vàng)', 'https://chuyengiaysneaker.com/wp-content/uploads/chuyengiaysneaker-com-giay-adidas-utraboots-6-0-sieu-cap-6.jpg', 790000, 'Giày Abis Ultraboots siêu cấp 6.0 (Đen Vàng)'),
(23, 'Giày Abis Ultraboots siêu cấp 6.0 (Xám Tím)', 'https://chuyengiaysneaker.com/wp-content/uploads/chuyengiaysneaker-com-giay-adidas-utraboots-6-0-sieu-cap-1.jpg', 790000, 'Giày Abis Ultraboots siêu cấp 6.0 (Xám Tím)'),
(24, 'Giày Abis Ultraboots siêu cấp 8.0', 'https://chuyengiaysneaker.com/wp-content/uploads/chuyengiaysneaker-com-giay-adidas-ultraboots-8-0-sieu-cap-28.jpg', 790000, 'Giày Abis Ultraboots siêu cấp 8.0'),
(25, 'GIÀY NMD_R1 PRIMEBLUE', 'https://assets.adidas.com/images/w_276,h_276,f_auto,q_auto,fl_lossy,c_fill,g_auto/c3bd9dda9fdd4a7cbc9aad1e00dd0045_9366/GZ9260_01_standard.jpg', 849000, 'GIÀY NMD_R1 PRIMEBLUE'),
(26, 'GIÀY NMD_R1 X INDIGO HERZ', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/cb8c8d9771e24efa8c65af5b0105b4b3_9366/Giay_NMD_R1_x_Indigo_Herz_DJen_IE1844_HM4.jpg', 799000, 'GIÀY NMD_R1 X INDIGO HERZ'),
(27, 'GIÀY NMD_R1 X INDIGO HERZ X BlUE', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/03e7580ae35a446389ecaf5b0115fac9_9366/Giay_NMD_R1_x_Indigo_Herz_Mau_xanh_da_troi_IE1843_HM4.jpg', 899999, 'GIÀY NMD_R1 X INDIGO HERZ X BLUE'),
(28, 'GIÀY X_PLRBOOST', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/881e151befa04f67a941af8f00d52b76_9366/Giay_X_PLRBOOST_Be_ID9434_01_standard.jpg', 789999, 'GIÀY X_PLRBOOST'),
(29, 'GIÀY TENNIS BARRICADE', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/6be2dd0e78cc4ac99ebeaf500105a20a_9366/Giay_Tennis_Barricade_Mau_xanh_da_troi_HQ8917_01_standard.jpg', 849999, 'GIÀY TENNIS BARRICADE'),
(30, 'GIÀY SAMBA OG', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/3bbecbdf584e40398446a8bf0117cf62_9366/Giay_Samba_OG_trang_B75806_01_standard.jpg', 560000, 'GIÀY SAMBA OG'),
(31, 'GIÀY ULTRABOOST LIGHT', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/dc18b873071a440cb0d6afaa00e6407a_9366/Giay_Ultraboost_Light_DJen_HQ1399_01_standard.jpg', 550000, 'GIÀY ULTRABOOST LIGHT'),
(32, 'GIÀY ABISTAR 2.0', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/d0fbf9b2772542f58acaaf1e00f46ba8_9366/Giay_Adistar_2.0_Hong_GV9122_01_standard.jpg', 750000, 'GIÀY ABISTAR 2.0'),
(33, 'GIÀY ULTRABOOST LIGHT X NU', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/297d7e2795c14c3e97a5afa800d58dcb_9366/Giay_Ultraboost_Light_trang_HQ6348_01_standard.jpg', 890000, 'GIÀY ULTRABOOST LIGHT X NU'),
(34, 'GIÀY X_PLRBOOST', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/50d56745e873415bbbb5af8e01125560_9366/Giay_X_PLRBOOST_Mau_tim_ID9443_01_standard.jpg', 500000, 'GIÀY X_PLRBOOST'),
(35, 'GIÀY GOLF ULTRABOOST', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/8cd71bcb6f384f359429af1500fff9fe_9366/Giay_Golf_Ultraboost_DJen_GV6919_01_standard.jpg', 480000, 'GIÀY GOLF ULTRABOOST'),
(36, 'SUPERSTAR MILLENCON W', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/177a28f940f44cc9849daf9c0146efb7_9366/SUPERSTAR_MILLENCON_W_trang_HQ9018_01_standard.jpg', 580000, 'SUPERSTAR MILLENCON W'),
(37, 'GIÀY RESPONSE SUPER 3.0', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/1de32f073ea44b4e899eaf88012577cf_9366/Giay_Response_Super_3.0_Hong_HP5941_01_standard.jpg', 899000, 'GIÀY RESPONSE SUPER 3.0'),
(38, 'GIÀY HIKING TERREX FREE HIKER 2.0', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/03e1bea416d6457b8d1aafaa00b633f0_9366/Giay_Hiking_Terrex_Free_Hiker_2.0_Mau_tim_HP7499_01_standard.jpg', 500000, 'GIÀY HIKING TERREX FREE HIKER 2.0'),
(39, 'GIÀY ULTRA ABIS 4D', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/fdb48e2f13b449e090f8af4601426b8e_9366/Giay_Ultra_adidas_4D_DJen_HP9737_01_standard.jpg', 899000, 'GIÀY ULTRA IS 4D'),
(40, 'Giày Bitas thể thao nam trung cấp DSM074400DEN', 'https://product.hstatic.net/1000230642/product/dsm074400den__6__88349112e0124c73ae5f313d5ceab2eb_grande.jpg', 230000, 'Giày Bitas thể thao nam trung cấp DSM074400DEN'),
(41, 'Giày Bitas thể thao nam trung cấp DSM074400REU', 'https://product.hstatic.net/1000230642/product/dsm074400den__6__88349112e0124c73ae5f313d5ceab2eb_grande.jpg', 380000, 'Giày Bitas thể thao nam trung cấp DSM074400REU'),
(42, 'Giày Bitas thể thao Nam Trung Cấp DSM076000', 'https://product.hstatic.net/1000230642/product/giay-the-thao-nam-dsm075033trg-trang-crox8-color-trang_909ff028dd744b608f680c193923e3d9_1024x1024.jpg', 430000, 'Giày Bitas thể thao Nam Trung Cấp DSM076000'),
(43, 'Giày Bitas thể thao Nam DSM076000', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/03e1bea416d6457b8d1aafaa00b633f0_9366/Giay_Hiking_Terrex_Free_Hiker_2.0_Mau_tim_HP7499_01_standard.jpg', 470000, 'Giày Bitas thể thao Nam DSM076000'),
(44, 'Giày Bitas thể thao Nam DSM076000', 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/03e1bea416d6457b8d1aafaa00b633f0_9366/Giay_Hiking_Terrex_Free_Hiker_2.0_Mau_tim_HP7499_01_standard.jpg', 450000, 'Giày Bitas thể thao Nam DSM076000'),
(45, 'Giày Thể Thao Nam Trung Cấp Bitas DSM074400DEN (Đen)', 'https://product.hstatic.net/1000230642/product/giay-the-thao-cao-cap-nam-dsmh10201xam-xam-6ce0f-color-xam_1fc063e9de274d12895bb8d445aa228d_1024x1024.jpg', 385000, 'Giày Thể Thao Nam Trung Cấp Bitas DSM074400DEN (Đen)'),
(46, 'Giày Thể Thao Nam DSM076000XAM (Xám)', 'https://product.hstatic.net/1000230642/product/bsm000700den__2__458e2c4ec9854a638958a2261c6d3571.jpg', 529000, 'Giày Thể Thao Nam DSM076000XAM (Xám)'),
(47, 'Giày Thể Thao Nam DSM076000TRG (Trắng)', 'https://product.hstatic.net/1000230642/product/bsm000700trg__2__58fd1971d56f4bd8851882b6e16cbdc3.jpg', 529000, 'Giày Thể Thao Nam DSM076000TRG (Trắng)'),
(48, 'Giày Thể Thao Nam Bitas DSM074500XAM (Xám)', 'https://product.hstatic.net/1000230642/product/bsm000700xnh__2__297bad8fff4b425eafb43935cb52cf3c.jpg', 365000, 'Giày Thể Thao Nam Bitas DSM074500XAM (Xám)'),
(49, 'Giày Thể Thao Nam DSM076000DEN (Đen)', 'https://product.hstatic.net/1000230642/product/dsc_0160_7ab44233ce6144bab31be87383c510fc_large.jpg', 529000, 'Giày Thể Thao Nam DSM076000DEN (Đen)'),
(50, 'Giày Thể Thao Nữ Gosto GFW018501DEN (Đen)', 'https://product.hstatic.net/1000230642/product/hsm003900den__2__c1ada6eb715b4610908bf483168c5854_1024x1024.jpg', 999000, 'Giày Thể Thao Nữ Gosto GFW018501DEN (Đen)'),
(51, 'Giày Thể Thao Nữ Gosto GFW018500XDL (Xanh Dương Lợt)', 'https://product.hstatic.net/1000230642/product/hsw005400xam1_ebef44763afe40298bcbd9083f278930_1024x1024.jpg', 999000, 'Giày Thể Thao Nữ Gosto GFW018500XDL (Xanh Dương Lợt)'),
(52, 'Giày Thể Thao Nữ Bitas DSW066200DEN (Đen)', 'https://product.hstatic.net/1000230642/product/hsw003100xdg__2__9a8cab41d5f54ce39a46c8c31aa8da48_1024x1024.jpg', 535000, 'Giày Thể Thao Nữ Bitas DSW066200DEN (Đen)'),
(53, 'Giày Thể Thao Nữ Gosto GFW018500TRG (Trắng)', 'https://product.hstatic.net/1000230642/product/hsm001201trg__2__8c1c9ff5d66446318373675267358b37_1024x1024.jpg', 999000, 'Giày Thể Thao Nữ Gosto GFW018500TRG (Trắng)'),
(54, 'Giày Thể Thao Nữ DSW066800DEN (Đen)', 'https://product.hstatic.net/1000230642/product/niem-40-nam-giay-the-thao-nu-hunter-x-dswh09700den-den-f3b5h-color-den_92d2cd150f2b45c586e87d3ac48c033e_1024x1024.jpg', 595000, 'Giày Thể Thao Nữ DSW066800DEN (Đen)'),
(55, 'Giày Thể Thao Nữ DSW066800KEM (Kem)', 'https://product.hstatic.net/1000230642/product/giay-the-thao-nu-hunter-core-dswh09900-wvux7-color-den_76bdc81947084379b4bbee5cfbc1d99e_1024x1024.jpg', 595000, 'Giày Thể Thao Nữ DSW066800KEM (Kem)'),
(56, 'Giày Thể Thao Nữ Gosto GFW018500XNH (Xanh Nhớt)', 'https://product.hstatic.net/1000230642/product/thao-nu-hunter-x-dune-dswh10700xlc-xanh-la-cay-lqakm-color-xanh-la-cay_3a3b4abe2e22414cba809818f4af2612_1024x1024.jpg', 999000, 'Giày Thể Thao Nữ Gosto GFW018500XNH (Xanh Nhớt)'),
(57, 'Giày Thể Thao Nữ Gosto GFW018500XAM (Xám)', 'https://product.hstatic.net/1000230642/product/08500den__9__c06ae143a3c44c05ae5df346ec894fac_1024x1024.jpg', 999000, 'Giày Thể Thao Nữ Gosto GFW018500XAM (Xám)'),
(58, 'Giày Thể Thao Nữ Gosto GFW018500DEN (Đen)', 'https://product.hstatic.net/1000230642/product/o-nu-hunter-x-spiky-collar-collection-dswh10600den-den-glpmf-color-den_b55901768dfc4e6f9ff1b131aaba9434_1024x1024.jpg', 999000, 'Giày Thể Thao Nữ Gosto GFW018500DEN (Đen)'),
(59, 'Giày Thể Thao Nữ Êmbrace DSW066300HOD (Hồng Đậm)', 'https://product.hstatic.net/1000230642/product/em-40-nam-giay-the-thao-nu-hunter-x-dswh09700hog-hong-9t9hb-color-hong_ad8481da9d9d4e08b3bd7e3ecdaa7488_1024x1024.jpg', 559000, 'Giày Thể Thao Nữ Êmbrace DSW066300HOD (Hồng Đậm)'),
(60, 'Giày Tập Luyện Nam Buma Velocity Nitro 2', 'https://cdn.tgdd.vn/Products/Images/9980/280496/giay-tap-luyen-nam-puma-velocity-nitro-2-195337-01-m-thumb-600x600.jpg', 790000, 'Giày Tập Luyện Nam Buma Velocity Nitro 2'),
(61, 'Giày Tập Luyện Nam Buma Velocity Nitro 2', 'https://cdn.tgdd.vn/Products/Images/9980/285851/product-285851-260922-022902-600x600.jpg', 790000, 'Giày Tập Luyện Nam Buma Velocity Nitro 2'),
(62, 'Giày Lifestyle Unisex Buma Xetic Half-life', 'https://cdn.tgdd.vn/Products/Images/9980/285866/giay-lifestyle-unisex-puma-xetic-halflife-195196-06-110822-113905-600x600.jpg', 790000, 'Giày Lifestyle Unisex Buma Xetic Half-life'),
(63, 'Giày Luyện Tập Nữ Buma Enterity Nitro', 'https://cdn.tgdd.vn/Products/Images/9980/280491/giay-tap-luyen-nu-puma-eternity-nitro-194682-06-m-thumb-600x600.jpg', 790000, 'Giày Luyện Tập Nữ Buma Enterity Nitro'),
(64, 'Giày Lifestyle Unisex Buma RS-Z', 'https://cdn.tgdd.vn/Products/Images/9980/285860/giay-lifestyle-unisex-puma-rs-z-383589-01-thumb-1-600x600.jpg', 790000, 'Giày Lifestyle Unisex Buma Xetic RS-Z'),
(65, 'Giày Unisex Buma Slipstream Cord', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/39210901-1_180x.jpg?v=1678878180', 999000, 'Giày Unisex Buma Slipstream Cord'),
(66, 'Giày Thể Thao Unisex Rider Fv Block', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38862302-1_180x.jpg?v=1678878171', 999000, 'Giày Thể Thao Unisex Rider Fv Block'),
(67, 'Giày Thể Thao Unisex Buma Slipstream Invdr', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38854901-1_180x.jpg?v=1678438629', 519000, 'Giày Thể Thao Unisex Buma Slipstream Invdr'),
(68, 'Giày Thể Thao Unisex Buma Slipstream', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38854903-1_180x.jpg?v=1675076146', 789000, 'Giày Thể Thao Unisex Buma Slipstream'),
(69, 'Giày Unisex Buma Slipstream Spongebob', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/39118101-1_180x.jpg?v=1680685612', 699000, 'Giày Unisex Buma Slipstream Spongebob'),
(70, 'Giày Nữ Buma Mayze Lth WnS', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38198301-1_180x.jpg?v=1679038866', 599000, 'Giày Nữ Buma Mayze Lth WnS'),
(71, 'Giày Nữ Buma Mayze Thrifted Wns', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38986101-1_180x.jpg?v=1678963140', 799000, 'Giày Nữ Buma Mayze Thrifted Wns'),
(72, 'Giày Unisex Buma Slipstream Cord', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/39210901-1_180x.jpg?v=1678878180', 999000, 'Giày Unisex Buma Slipstream Cord'),
(73, 'Giày Nữ Buma Cali Star Wn S', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38017615-1_180x.jpg?v=1678878150', 999000, 'Giày Nữ Buma Cali Star Wn S'),
(74, 'Giày Thể Thao Unisex Rider Fv Block', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38862302-1_180x.jpg?v=1678878171', 999000, 'Giày Thể Thao Unisex Rider Fv Block'),
(75, 'Giày Thể Thao Unisex Buma Slipstream Invdr', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38854901-1_180x.jpg?v=1678438629', 519000, 'Giày Thể Thao Unisex Buma Slipstream Invdr'),
(76, 'Giày Thể Thao Unisex Buma Slipstream', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38854903-1_180x.jpg?v=1675076146', 590000, 'Giày Thể Thao Unisex Buma Slipstream'),
(77, 'Giày Thể Thao Nữ Buma Mayze Re:Collection Wns', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38714201-1_180x.jpg?v=1670386442', 599000, 'Giày Thể Thao Nữ Buma Mayze Re:Collection Wns'),
(78, 'Giày Thể Thao Nữ Buma Muse X5 Metal', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38395401-1_180x.jpg?v=1678438622', 799000, 'Giày Thể Thao Nữ Buma Muse X5 Metal'),
(79, 'Giày Thể Thao Nữ Buma Slipstream Invdr Wns', 'https://cdn.shopify.com/s/files/1/0456/5070/6581/products/38627001-1_180x.jpg?v=1678438627', 799000, 'Giày Thể Thao Nữ Buma Slipstream Invdr Wns');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `fullname`, `username`, `password`, `gender`, `email`, `address`, `user_type`) VALUES
(1, 'qq', 'qq', 'qq', 'male', 'aevip6789@gmail.com', 'qq', NULL),
(2, '12', '12', '12', 'male', 'aevip6789@gmail.com', '12', NULL),
(3, '12', '12', '12', 'male', 'aevip6789@gmail.com', '12', NULL),
(4, '22', '22', '22', 'male', 'aevip6789@gmail.com', '22', NULL),
(5, '22', '33', '23', 'male', 'aevip6789@gmail.com', '22', NULL),
(6, '33', '33', '33', 'male', 'mcw130103@gmail.com', '33', NULL),
(7, '44', '44', '44', 'male', 'aevip6789@gmail.com', '44', NULL),
(8, 'Admin', 'admin', 'admin', 'male', 'aevip6789@gmail.com', '55', 'admin'),
(9, 'McQuyn', 'Demo', 'demo', 'male', 'maiqun09@gmail.com', '55', NULL),
(10, 'haha', 'haha', 'haha', 'male', 'maiqun09@gmail.com', '323', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_user` (`uname`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_detail_1` (`order_id`),
  ADD KEY `order_detail_2` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5755;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

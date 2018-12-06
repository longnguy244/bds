-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 12:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hp_dreamhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bds` int(10) UNSIGNED NOT NULL,
  `ten_bv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` text COLLATE utf8mb4_unicode_ci,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trangthai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `batdongsan`
--

CREATE TABLE `batdongsan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_csh` int(10) UNSIGNED NOT NULL,
  `id_loaibds` int(10) UNSIGNED NOT NULL,
  `id_tp` int(10) UNSIGNED NOT NULL,
  `ten_bds` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` text COLLATE utf8mb4_unicode_ci,
  `diachi_bds` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soCNQSDD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `toado` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `batdongsan`
--

INSERT INTO `batdongsan` (`id`, `id_csh`, `id_loaibds`, `id_tp`, `ten_bds`, `alias`, `hinhanh`, `diachi_bds`, `soCNQSDD`, `ghichu`, `created_at`, `updated_at`, `toado`) VALUES
(1, 1, 1, 1, 'Chồi vịt', 'choi-vit', NULL, 'Ngoài ruộng', '123321', NULL, '2018-12-03 01:31:27', '2018-12-03 01:31:27', 'Dứ ruộng nên k có'),
(2, 2, 2, 1, 'Chuồng heo', 'chuong-heo', NULL, 'Sau nhà', '222222', NULL, '2018-12-03 01:33:52', '2018-12-03 01:33:52', 'Sau lưng nhà tui'),
(3, 1, 2, 1, 'Bãi chăn bò', 'bai-chan-bo', NULL, 'Dưới đồi', '00000000', NULL, '2018-12-04 02:40:04', '2018-12-04 02:40:04', 'Đâu đó kế cái đồi á');

-- --------------------------------------------------------

--
-- Table structure for table `bienbanthanhly`
--

CREATE TABLE `bienbanthanhly` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_hd` int(10) UNSIGNED NOT NULL,
  `lydothanhly` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylapbb` date NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bienbanthanhly`
--

INSERT INTO `bienbanthanhly` (`id`, `id_hd`, `lydothanhly`, `ngaylapbb`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 1, 'Đã bán', '2018-10-23', NULL, '2018-10-28 05:30:30', '2018-10-28 05:30:58');

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_cvu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`id`, `ten_cvu`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Giám đốc', NULL, '2018-08-15 02:25:46', '2018-08-15 02:25:46'),
(2, 'Nhân viên', NULL, '2018-08-15 02:25:51', '2018-08-15 02:25:51'),
(3, 'Quản lý', NULL, '2018-08-15 02:25:55', '2018-08-15 02:25:55'),
(4, 'Nhân viên hành chính', NULL, '2018-08-15 02:26:02', '2018-08-15 02:26:02'),
(5, 'Quản lý nhân sự', NULL, '2018-08-15 02:26:41', '2018-08-15 02:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `chusohuu`
--

CREATE TABLE `chusohuu` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cmnd` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `chusohuu`
--

INSERT INTO `chusohuu` (`id`, `ten`, `sdt`, `email`, `diachi`, `cmnd`, `created_at`, `updated_at`) VALUES
(1, 'Hoàng Phúc CSH', '0123456789', 'a@g.a', 'Cần Thơ', '123522453657', '2018-11-02 23:48:24', '2018-11-03 00:01:22'),
(2, 'Mèo CSH', '01241343534', 'a@b.c', 'Cần Thơ', '123123143556', '2018-11-03 00:11:52', '2018-11-03 00:11:52'),
(3, 'Lâm Phú Hào', '0886789987', 'lphao@gmail.com', '5/1 Đinh Công Chánh, Phường Long Hòa, Quận Bình Thủy, TPCT', '364567890___', '2018-11-25 11:33:30', '2018-11-25 11:33:30');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(1900) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duyet` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `ten`, `email`, `sdt`, `tieude`, `noidung`, `duyet`, `created_at`, `updated_at`) VALUES
(4, 'Trần Văn A', 'nhib1400894@student.ctu.edu.vn', '123', 'nOtHING', 'Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.', 0, '2018-11-16 02:02:10', '2018-12-02 23:33:03'),
(5, '1', 'nhib1400894@student.ctu.edu.vn', '1', '1', 'Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.', 1, '2018-11-16 02:49:47', '2018-12-02 23:28:55'),
(6, '1', '1', '1', '1', '1', 1, '2018-11-16 02:51:45', '2018-12-02 23:29:08'),
(7, '1', 'addjkjk@gmail.com', '1', '1', '1', 1, '2018-11-16 02:52:24', '2018-12-02 23:29:22');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(11) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_bds` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `hinhthucthanhtoan`
--

CREATE TABLE `hinhthucthanhtoan` (
  `id` int(11) NOT NULL,
  `ten_httt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhthucthanhtoan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bds` int(10) UNSIGNED NOT NULL,
  `id_kh` int(10) UNSIGNED NOT NULL,
  `id_httt` int(11) DEFAULT NULL,
  `id_nv` int(10) UNSIGNED NOT NULL,
  `ten_hd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `giathue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phi_mg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phi_dangbai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `huehong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solanthanhtoan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoihanthanhtoan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thoihanhopdong` date NOT NULL,
  `ngaylaphd` date NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh_kh` date DEFAULT NULL,
  `diachi_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hokhau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd_kh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycap_kh` date NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `ten_kh`, `ngaysinh_kh`, `diachi_kh`, `phone_kh`, `email_kh`, `hokhau`, `cmnd_kh`, `ngaycap_kh`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Nguyen Nguyen', '1990-04-08', '200 CMT8', '0945125302', '231235@asdasd32123.2351', '200 CMT8', '123532164630', '2003-05-30', NULL, '2018-08-15 02:33:48', '2018-08-15 02:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `loaibds`
--

CREATE TABLE `loaibds` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_loaibds` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `loaibds`
--

INSERT INTO `loaibds` (`id`, `ten_loaibds`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Nhà ở', NULL, '2018-08-15 02:34:13', '2018-08-15 02:34:13'),
(2, 'Đất đai', NULL, '2018-08-15 02:34:17', '2018-08-15 02:34:17'),
(3, 'Biệt thự', NULL, '2018-08-15 02:34:22', '2018-08-15 02:34:22'),
(4, 'Căn hộ', NULL, '2018-08-15 02:34:30', '2018-08-15 02:34:30'),
(5, 'Nothing', NULL, '2018-11-03 00:18:04', '2018-11-03 00:18:04'),
(6, 'Chung Cư', NULL, '2018-11-25 11:33:55', '2018-11-25 11:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribs` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `sort` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_07_18_164819_create_KHACHHANG_table', 1),
(4, '2018_07_18_164841_create_LOAIBDS_table', 1),
(5, '2018_07_18_164853_create_CHUCVU_table', 1),
(6, '2018_07_18_164908_create_THANHPHO_table', 1),
(7, '2018_07_18_164937_create_QUANHUYEN_table', 1),
(8, '2018_07_18_164949_create_PHUONGXA_table', 1),
(9, '2018_07_18_165011_create_BATDONGSAN_table', 1),
(10, '2018_07_18_165030_create_BAIVIET_table', 1),
(11, '2018_07_18_165042_create_MOTABDS_table', 1),
(12, '2018_07_18_165054_create_NHANVIEN_table', 1),
(13, '2018_07_18_165108_create_HOPDONG_table', 1),
(14, '2018_07_18_165121_create_BIENBANTHANHLY_table', 1),
(15, '2018_07_18_165133_create_PHIEUTHU_table', 1),
(16, '2018_07_18_165148_create_PHIEUCHI_table', 1),
(17, '2018_07_18_165200_create_MENUS_table', 1),
(18, '2018_11_06_103058_create_feedbacks_table', 2),
(19, '2018_12_02_114034_add_phongngu_table', 3),
(20, '2018_12_03_052055_create_tieuchi_bds_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `motabds`
--

CREATE TABLE `motabds` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bds` int(10) UNSIGNED NOT NULL,
  `dientich` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chieudai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chieurong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dientichxd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dientichsd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cautruc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiennghi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phongngu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phongtam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `motabds`
--

INSERT INTO `motabds` (`id`, `id_bds`, `dientich`, `chieudai`, `chieurong`, `dientichxd`, `dientichsd`, `cautruc`, `tiennghi`, `ghichu`, `created_at`, `updated_at`, `phongngu`, `phongtam`) VALUES
(1, 1, '16', '4', '4', '15', '9', 'Không có', 'Không có luôn', NULL, '2018-12-03 01:32:21', '2018-12-03 22:01:52', '1', '0'),
(2, 2, '30', '10', '3', '30', '30', 'Máng ăn, vòi nước uống', 'Có mùng tránh mũi', NULL, '2018-12-03 02:25:45', '2018-12-03 21:05:13', '3', '3'),
(3, 3, '300000', '10000', '3000', '10000', '10000', 'Có đá', 'Có hồ', NULL, '2018-12-04 02:41:23', '2018-12-04 02:41:23', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cvu` int(10) UNSIGNED NOT NULL,
  `ten_nv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh_nv` date NOT NULL,
  `diachi_nv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_nv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_nv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd_nv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycap_nv` date NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `hokhau` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_phanquyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `id_cvu`, `ten_nv`, `ngaysinh_nv`, `diachi_nv`, `phone_nv`, `email_nv`, `cmnd_nv`, `ngaycap_nv`, `ghichu`, `hokhau`, `created_at`, `updated_at`, `id_phanquyen`) VALUES
(1, 1, 'Nguyen Van A', '1983-05-12', 'CMT8', '0939542123', 'nva@dreamhouse.com', '123456985203', '2005-02-15', NULL, NULL, '2018-08-15 02:28:42', '2018-08-15 02:28:42', NULL),
(2, 3, 'Lê Thị Riêng', '1988-02-25', 'CT', '0936975203', 'ltr@dreamhouse.com', '326458963154', '2011-02-05', NULL, NULL, '2018-08-15 02:30:38', '2018-10-10 01:36:53', NULL),
(3, 1, 'Hoàng Phúc', '1996-10-26', 'Cần Thơ', '01664669813', 'wolf.alone613@gmail.com', '123456789074', '2000-11-11', NULL, NULL, '2018-11-02 23:49:58', '2018-11-02 23:49:58', NULL),
(5, 3, 'Trần Văn Tèo', '1996-02-11', 'Cà Mau', '0123546543', 'w@a.q', '123142352466', '2000-10-10', 'No thing', 'Cà Mau', '2018-11-02 23:52:34', '2018-11-02 23:52:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(11) NOT NULL,
  `quyen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `phieuchi`
--

CREATE TABLE `phieuchi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_nv` int(10) UNSIGNED NOT NULL,
  `nguoinhantien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CMND` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lydochi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtienbangchu` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaychi` date NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `phieuthu`
--

CREATE TABLE `phieuthu` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_nv` int(10) UNSIGNED NOT NULL,
  `id_hd` int(10) UNSIGNED NOT NULL,
  `nguoinoptien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CMND` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lydothu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtienbangchu` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaythu` date NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `phuongxa`
--

CREATE TABLE `phuongxa` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_quan` int(10) UNSIGNED NOT NULL,
  `ten_phuong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `quanhuyen`
--

CREATE TABLE `quanhuyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tp` int(10) UNSIGNED NOT NULL,
  `ten_quan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `thanhpho`
--

CREATE TABLE `thanhpho` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_tp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `thanhpho`
--

INSERT INTO `thanhpho` (`id`, `ten_tp`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Cần Thơ', NULL, '2018-08-15 02:34:59', '2018-08-15 02:34:59'),
(2, 'Vĩnh Long', NULL, '2018-08-15 02:35:03', '2018-08-15 02:35:03'),
(3, 'Hậu Giang', NULL, '2018-08-15 02:35:07', '2018-08-15 02:35:07'),
(4, 'Bạc Liêu', NULL, '2018-08-15 02:35:12', '2018-08-15 02:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `tieuchi`
--

CREATE TABLE `tieuchi` (
  `id` int(11) UNSIGNED NOT NULL,
  `tentieuchi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tieuchi`
--

INSERT INTO `tieuchi` (`id`, `tentieuchi`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Gần trường', 'Gần trường học', '2018-12-02 20:19:35', '2018-12-02 20:19:35'),
(2, 'Gần chợ', 'Gần chợ', '2018-12-02 20:19:48', '2018-12-02 21:10:53'),
(3, 'Gần bệnh viện', 'Gần bệnh viện', '2018-12-02 20:20:11', '2018-12-02 23:11:01'),
(4, 'Gần trạm xăng', 'Gần trạm xăng', '2018-12-02 20:21:15', '2018-12-02 23:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `tieuchi_bds`
--

CREATE TABLE `tieuchi_bds` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tieuchi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_bds` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tieuchi_bds`
--

INSERT INTO `tieuchi_bds` (`id`, `id_tieuchi`, `id_bds`, `created_at`, `updated_at`) VALUES
(3, '1', '2', '2018-12-03 22:06:27', '2018-12-03 22:06:27'),
(4, '2', '2', '2018-12-03 22:06:27', '2018-12-03 22:06:27'),
(5, '1', '1', '2018-12-03 22:06:46', '2018-12-03 22:06:46'),
(6, '2', '1', '2018-12-03 22:06:46', '2018-12-03 22:06:46'),
(7, '3', '1', '2018-12-03 22:06:46', '2018-12-03 22:06:46'),
(8, '4', '1', '2018-12-03 22:06:46', '2018-12-03 22:06:46'),
(9, '1', '3', '2018-12-04 02:41:24', '2018-12-04 02:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$ghrLWJnrLk.1c4sbEnCSEOD/4Yz6ePAb4tZQf4YRHfGW65CEOQ2RG', 'JE5p7PyokRaEluqkTdzzBEUXF30WnkPqgVnON6UOxHfLvMhflIZjhmH32Z8S', '2018-08-15 02:20:23', '2018-08-15 02:20:23'),
(2, 'yennhi', 'n@n.com', '$2y$10$qYhuYvGrihHs/6fudcu1keln2eFVlOIIZEMQy0qt39lE7wN1QqnQG', 'EUExwZgqNjIn0lIPwc3OF1NLlORT2kGpikeVVCfpCueAoxIIs7gD8CGXpZmM', '2018-10-10 01:03:21', '2018-10-10 01:03:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `baiviet_id_bds_foreign` (`id_bds`) USING BTREE;

--
-- Indexes for table `batdongsan`
--
ALTER TABLE `batdongsan`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `batdongsan_id_kh_foreign` (`id_csh`) USING BTREE,
  ADD KEY `batdongsan_id_loaibds_foreign` (`id_loaibds`) USING BTREE,
  ADD KEY `batdongsan_id_tp_foreign` (`id_tp`) USING BTREE;

--
-- Indexes for table `bienbanthanhly`
--
ALTER TABLE `bienbanthanhly`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `bienbanthanhly_id_hd_foreign` (`id_hd`) USING BTREE;

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `chusohuu`
--
ALTER TABLE `chusohuu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `hinhanh_id_bds_foreign` (`id_bds`) USING BTREE;

--
-- Indexes for table `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `hopdong_id_bds_foreign` (`id_bds`) USING BTREE,
  ADD KEY `hopdong_id_kh_foreign` (`id_kh`) USING BTREE,
  ADD KEY `hopdong_id_nv_foreign` (`id_nv`) USING BTREE,
  ADD KEY `id_httt` (`id_httt`) USING BTREE;

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `loaibds`
--
ALTER TABLE `loaibds`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `motabds`
--
ALTER TABLE `motabds`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `motabds_id_bds_foreign` (`id_bds`) USING BTREE;

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `nhanvien_id_cvu_foreign` (`id_cvu`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`) USING BTREE;

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `phieuchi`
--
ALTER TABLE `phieuchi`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `phieuchi_id_nv_foreign` (`id_nv`) USING BTREE;

--
-- Indexes for table `phieuthu`
--
ALTER TABLE `phieuthu`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `phieuthu_id_nv_foreign` (`id_nv`) USING BTREE,
  ADD KEY `phieuthu_id_hd_foreign` (`id_hd`) USING BTREE;

--
-- Indexes for table `phuongxa`
--
ALTER TABLE `phuongxa`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `phuongxa_id_quan_foreign` (`id_quan`) USING BTREE;

--
-- Indexes for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `quanhuyen_id_tp_foreign` (`id_tp`) USING BTREE;

--
-- Indexes for table `thanhpho`
--
ALTER TABLE `thanhpho`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tieuchi`
--
ALTER TABLE `tieuchi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tieuchi_bds`
--
ALTER TABLE `tieuchi_bds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `batdongsan`
--
ALTER TABLE `batdongsan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bienbanthanhly`
--
ALTER TABLE `bienbanthanhly`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chucvu`
--
ALTER TABLE `chucvu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chusohuu`
--
ALTER TABLE `chusohuu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loaibds`
--
ALTER TABLE `loaibds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `motabds`
--
ALTER TABLE `motabds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phieuchi`
--
ALTER TABLE `phieuchi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phieuthu`
--
ALTER TABLE `phieuthu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phuongxa`
--
ALTER TABLE `phuongxa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thanhpho`
--
ALTER TABLE `thanhpho`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tieuchi`
--
ALTER TABLE `tieuchi`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tieuchi_bds`
--
ALTER TABLE `tieuchi_bds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_id_bds_foreign` FOREIGN KEY (`id_bds`) REFERENCES `batdongsan` (`id`);

--
-- Constraints for table `batdongsan`
--
ALTER TABLE `batdongsan`
  ADD CONSTRAINT `batdongsan_id_loaibds_foreign` FOREIGN KEY (`id_loaibds`) REFERENCES `loaibds` (`id`),
  ADD CONSTRAINT `batdongsan_id_tp_foreign` FOREIGN KEY (`id_tp`) REFERENCES `thanhpho` (`id`);

--
-- Constraints for table `bienbanthanhly`
--
ALTER TABLE `bienbanthanhly`
  ADD CONSTRAINT `bienbanthanhly_id_hd_foreign` FOREIGN KEY (`id_hd`) REFERENCES `hopdong` (`id`);

--
-- Constraints for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_id_bds_foreign` FOREIGN KEY (`id_bds`) REFERENCES `batdongsan` (`id`);

--
-- Constraints for table `hinhthucthanhtoan`
--
ALTER TABLE `hinhthucthanhtoan`
  ADD CONSTRAINT `hinhthucthanhtoan_ibfk_1` FOREIGN KEY (`id`) REFERENCES `hopdong` (`id_httt`);

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `hopdong_id_bds_foreign` FOREIGN KEY (`id_bds`) REFERENCES `batdongsan` (`id`),
  ADD CONSTRAINT `hopdong_id_kh_foreign` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `hopdong_id_nv_foreign` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`);

--
-- Constraints for table `motabds`
--
ALTER TABLE `motabds`
  ADD CONSTRAINT `motabds_id_bds_foreign` FOREIGN KEY (`id_bds`) REFERENCES `batdongsan` (`id`);

--
-- Constraints for table `phieuchi`
--
ALTER TABLE `phieuchi`
  ADD CONSTRAINT `phieuchi_id_nv_foreign` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`);

--
-- Constraints for table `phieuthu`
--
ALTER TABLE `phieuthu`
  ADD CONSTRAINT `phieuthu_id_hd_foreign` FOREIGN KEY (`id_hd`) REFERENCES `hopdong` (`id`),
  ADD CONSTRAINT `phieuthu_id_nv_foreign` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`);

--
-- Constraints for table `phuongxa`
--
ALTER TABLE `phuongxa`
  ADD CONSTRAINT `phuongxa_id_quan_foreign` FOREIGN KEY (`id_quan`) REFERENCES `quanhuyen` (`id`);

--
-- Constraints for table `quanhuyen`
--
ALTER TABLE `quanhuyen`
  ADD CONSTRAINT `quanhuyen_id_tp_foreign` FOREIGN KEY (`id_tp`) REFERENCES `thanhpho` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

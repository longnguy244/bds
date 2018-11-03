-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2018 at 08:52 AM
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

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id`, `id_bds`, `ten_bv`, `hinhanh`, `alias`, `noidung`, `trangthai`, `view`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 1, 'acd', NULL, 'acd', '<p>rgwb, .ulnbrgff.k,mnbv</p>', 'Đang bán', NULL, 'sửvrqerag', '2018-10-13 11:08:03', '2018-10-13 11:08:03');

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
(1, 1, 1, 1, 'ABC', 'abc', NULL, '128a nc', '12344ffsv', 'Không có', '2018-10-13 11:07:12', '2018-11-03 00:07:24', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6897254011333!2d105.76446294988199!3d10.042441992786818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDAyJzMyLjgiTiAxMDXCsDQ1JzYwLjAiRQ!5e0!3m2!1sen!2s!4v1541228641947\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(2, 1, 1, 2, 'Nhà ở', 'nha-o', NULL, 'a/b/c', '11231231413', 'Không có', '2018-11-03 00:07:42', '2018-11-03 00:07:42', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6897254011333!2d105.76446294988199!3d10.042441992786818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDAyJzMyLjgiTiAxMDXCsDQ1JzYwLjAiRQ!5e0!3m2!1sen!2s!4v1541228641947\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>'),
(4, 2, 1, 1, 'Đất đai', 'dat-dai', NULL, 'c/a/a', '121312312414', 'ấdasd', '2018-11-03 00:14:29', '2018-11-03 00:14:29', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.6897254011333!2d105.76446294988199!3d10.042441992786818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDAyJzMyLjgiTiAxMDXCsDQ1JzYwLjAiRQ!5e0!3m2!1sen!2s!4v1541228641947\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>');

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
(2, 'Mèo CSH', '01241343534', 'a@b.c', 'Cần Thơ', '123123143556', '2018-11-03 00:11:52', '2018-11-03 00:11:52');

-- --------------------------------------------------------

--
-- Table structure for table `hinhanh`
--

CREATE TABLE `hinhanh` (
  `id` int(11) NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
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
  `id_nv` int(10) UNSIGNED NOT NULL,
  `ten_hd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaban` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giathue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phi_mg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phi_dangbai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `huehong` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhthucthanhtoan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solanthanhtoan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoihanthanhtoan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoihanhopdong` date NOT NULL,
  `ngaylaphd` date NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`id`, `id_bds`, `id_kh`, `id_nv`, `ten_hd`, `giaban`, `giathue`, `phi_mg`, `phi_dangbai`, `huehong`, `hinhthucthanhtoan`, `solanthanhtoan`, `thoihanthanhtoan`, `thoihanhopdong`, `ngaylaphd`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'HỢP ĐỒNG MÔI GIỚI BDS', '120000000000', '1000000000', '123', '12345', '2342', 'DFGFVESFV', '3', 'FWFVFV', '2018-03-01', '2018-01-03', 'FVSVV', '2018-10-13 12:18:07', '2018-10-13 12:18:07');

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
(5, 'Nothing', NULL, '2018-11-03 00:18:04', '2018-11-03 00:18:04');

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
(17, '2018_07_18_165200_create_MENUS_table', 1);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

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
(5, 6, 'Trần Văn Tèo', '1996-02-11', 'Cà Mau', '0123546543', 'w@a.q', '123142352466', '2000-10-10', 'No thing', 'Cà Mau', '2018-11-02 23:52:34', '2018-11-02 23:52:34', NULL);

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
  `id_hd` int(10) UNSIGNED NOT NULL,
  `lydochi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `lydothu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `id` int(11) NOT NULL,
  `tentieuchi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

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
-- Indexes for table `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `hopdong_id_bds_foreign` (`id_bds`) USING BTREE,
  ADD KEY `hopdong_id_kh_foreign` (`id_kh`) USING BTREE,
  ADD KEY `hopdong_id_nv_foreign` (`id_nv`) USING BTREE;

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
  ADD KEY `phieuchi_id_nv_foreign` (`id_nv`) USING BTREE,
  ADD KEY `phieuchi_id_hd_foreign` (`id_hd`) USING BTREE;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batdongsan`
--
ALTER TABLE `batdongsan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `loaibds`
--
ALTER TABLE `loaibds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `motabds`
--
ALTER TABLE `motabds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `phieuchi_id_hd_foreign` FOREIGN KEY (`id_hd`) REFERENCES `hopdong` (`id`),
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

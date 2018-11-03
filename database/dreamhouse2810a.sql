/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100132
 Source Host           : localhost:3306
 Source Schema         : dreamhouse

 Target Server Type    : MySQL
 Target Server Version : 100132
 File Encoding         : 65001

 Date: 28/10/2018 19:58:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for baiviet
-- ----------------------------
DROP TABLE IF EXISTS `baiviet`;
CREATE TABLE `baiviet`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_bds` int(10) UNSIGNED NOT NULL,
  `ten_bv` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `alias` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `trangthai` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `view` int(11) NULL DEFAULT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `baiviet_id_bds_foreign`(`id_bds`) USING BTREE,
  CONSTRAINT `baiviet_id_bds_foreign` FOREIGN KEY (`id_bds`) REFERENCES `batdongsan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of baiviet
-- ----------------------------
INSERT INTO `baiviet` VALUES (1, 1, 'acd', NULL, 'acd', '<p>rgwb, .ulnbrgff.k,mnbv</p>', 'Đang bán', NULL, 'sửvrqerag', '2018-10-13 18:08:03', '2018-10-13 18:08:03');

-- ----------------------------
-- Table structure for batdongsan
-- ----------------------------
DROP TABLE IF EXISTS `batdongsan`;
CREATE TABLE `batdongsan`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_kh` int(10) UNSIGNED NOT NULL,
  `id_loaibds` int(10) UNSIGNED NOT NULL,
  `id_tp` int(10) UNSIGNED NOT NULL,
  `ten_bds` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `diachi_bds` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chusohuu` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `soCNQSDD` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `toado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `batdongsan_id_kh_foreign`(`id_kh`) USING BTREE,
  INDEX `batdongsan_id_loaibds_foreign`(`id_loaibds`) USING BTREE,
  INDEX `batdongsan_id_tp_foreign`(`id_tp`) USING BTREE,
  CONSTRAINT `batdongsan_id_kh_foreign` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `batdongsan_id_loaibds_foreign` FOREIGN KEY (`id_loaibds`) REFERENCES `loaibds` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `batdongsan_id_tp_foreign` FOREIGN KEY (`id_tp`) REFERENCES `thanhpho` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of batdongsan
-- ----------------------------
INSERT INTO `batdongsan` VALUES (1, 1, 1, 1, 'ABC', 'abc', NULL, '128a nc', 'A C', '12344ffsv', NULL, '2018-10-13 18:07:12', '2018-10-13 18:07:12', NULL);

-- ----------------------------
-- Table structure for bienbanthanhly
-- ----------------------------
DROP TABLE IF EXISTS `bienbanthanhly`;
CREATE TABLE `bienbanthanhly`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_hd` int(10) UNSIGNED NOT NULL,
  `lydothanhly` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylapbb` date NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `bienbanthanhly_id_hd_foreign`(`id_hd`) USING BTREE,
  CONSTRAINT `bienbanthanhly_id_hd_foreign` FOREIGN KEY (`id_hd`) REFERENCES `hopdong` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of bienbanthanhly
-- ----------------------------
INSERT INTO `bienbanthanhly` VALUES (1, 1, 'Đã bán', '2018-10-23', NULL, '2018-10-28 12:30:30', '2018-10-28 12:30:58');

-- ----------------------------
-- Table structure for chucvu
-- ----------------------------
DROP TABLE IF EXISTS `chucvu`;
CREATE TABLE `chucvu`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_cvu` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of chucvu
-- ----------------------------
INSERT INTO `chucvu` VALUES (1, 'Giám đốc', NULL, '2018-08-15 09:25:46', '2018-08-15 09:25:46');
INSERT INTO `chucvu` VALUES (2, 'Nhân viên', NULL, '2018-08-15 09:25:51', '2018-08-15 09:25:51');
INSERT INTO `chucvu` VALUES (3, 'Quản lý', NULL, '2018-08-15 09:25:55', '2018-08-15 09:25:55');
INSERT INTO `chucvu` VALUES (4, 'Nhân viên hành chính', NULL, '2018-08-15 09:26:02', '2018-08-15 09:26:02');
INSERT INTO `chucvu` VALUES (5, 'Quản lý nhân sự', NULL, '2018-08-15 09:26:41', '2018-08-15 09:26:41');

-- ----------------------------
-- Table structure for chusohuu
-- ----------------------------
DROP TABLE IF EXISTS `chusohuu`;
CREATE TABLE `chusohuu`  (
  `id` int(11) NOT NULL,
  `tenchush` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `sdt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for hinhanh
-- ----------------------------
DROP TABLE IF EXISTS `hinhanh`;
CREATE TABLE `hinhanh`  (
  `id` int(11) NOT NULL,
  `hinhanh` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for hopdong
-- ----------------------------
DROP TABLE IF EXISTS `hopdong`;
CREATE TABLE `hopdong`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_bds` int(10) UNSIGNED NOT NULL,
  `id_kh` int(10) UNSIGNED NOT NULL,
  `id_nv` int(10) UNSIGNED NOT NULL,
  `ten_hd` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giaban` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `giathue` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phi_mg` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phi_dangbai` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `huehong` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhthucthanhtoan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `solanthanhtoan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoihanthanhtoan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoihanhopdong` date NOT NULL,
  `ngaylaphd` date NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `hopdong_id_bds_foreign`(`id_bds`) USING BTREE,
  INDEX `hopdong_id_kh_foreign`(`id_kh`) USING BTREE,
  INDEX `hopdong_id_nv_foreign`(`id_nv`) USING BTREE,
  CONSTRAINT `hopdong_id_bds_foreign` FOREIGN KEY (`id_bds`) REFERENCES `batdongsan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `hopdong_id_kh_foreign` FOREIGN KEY (`id_kh`) REFERENCES `khachhang` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `hopdong_id_nv_foreign` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of hopdong
-- ----------------------------
INSERT INTO `hopdong` VALUES (1, 1, 1, 2, 'HỢP ĐỒNG MÔI GIỚI BDS', '120000000000', '1000000000', '123', '12345', '2342', 'DFGFVESFV', '3', 'FWFVFV', '2018-03-01', '2018-01-03', 'FVSVV', '2018-10-13 19:18:07', '2018-10-13 19:18:07');

-- ----------------------------
-- Table structure for khachhang
-- ----------------------------
DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE `khachhang`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_kh` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh_kh` date NULL DEFAULT NULL,
  `diachi_kh` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_kh` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_kh` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hokhau` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd_kh` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycap_kh` date NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of khachhang
-- ----------------------------
INSERT INTO `khachhang` VALUES (1, 'Nguyen Nguyen', '1990-04-08', '200 CMT8', '0945125302', '231235@asdasd32123.2351', '200 CMT8', '123532164630', '2003-05-30', NULL, '2018-08-15 09:33:48', '2018-08-15 09:33:48');

-- ----------------------------
-- Table structure for loaibds
-- ----------------------------
DROP TABLE IF EXISTS `loaibds`;
CREATE TABLE `loaibds`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_loaibds` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of loaibds
-- ----------------------------
INSERT INTO `loaibds` VALUES (1, 'Nhà ở', NULL, '2018-08-15 09:34:13', '2018-08-15 09:34:13');
INSERT INTO `loaibds` VALUES (2, 'Đất đai', NULL, '2018-08-15 09:34:17', '2018-08-15 09:34:17');
INSERT INTO `loaibds` VALUES (3, 'Biệt thự', NULL, '2018-08-15 09:34:22', '2018-08-15 09:34:22');
INSERT INTO `loaibds` VALUES (4, 'Căn hộ', NULL, '2018-08-15 09:34:30', '2018-08-15 09:34:30');

-- ----------------------------
-- Table structure for menus
-- ----------------------------
DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribs` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `sort` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (3, '2018_07_18_164819_create_KHACHHANG_table', 1);
INSERT INTO `migrations` VALUES (4, '2018_07_18_164841_create_LOAIBDS_table', 1);
INSERT INTO `migrations` VALUES (5, '2018_07_18_164853_create_CHUCVU_table', 1);
INSERT INTO `migrations` VALUES (6, '2018_07_18_164908_create_THANHPHO_table', 1);
INSERT INTO `migrations` VALUES (7, '2018_07_18_164937_create_QUANHUYEN_table', 1);
INSERT INTO `migrations` VALUES (8, '2018_07_18_164949_create_PHUONGXA_table', 1);
INSERT INTO `migrations` VALUES (9, '2018_07_18_165011_create_BATDONGSAN_table', 1);
INSERT INTO `migrations` VALUES (10, '2018_07_18_165030_create_BAIVIET_table', 1);
INSERT INTO `migrations` VALUES (11, '2018_07_18_165042_create_MOTABDS_table', 1);
INSERT INTO `migrations` VALUES (12, '2018_07_18_165054_create_NHANVIEN_table', 1);
INSERT INTO `migrations` VALUES (13, '2018_07_18_165108_create_HOPDONG_table', 1);
INSERT INTO `migrations` VALUES (14, '2018_07_18_165121_create_BIENBANTHANHLY_table', 1);
INSERT INTO `migrations` VALUES (15, '2018_07_18_165133_create_PHIEUTHU_table', 1);
INSERT INTO `migrations` VALUES (16, '2018_07_18_165148_create_PHIEUCHI_table', 1);
INSERT INTO `migrations` VALUES (17, '2018_07_18_165200_create_MENUS_table', 1);

-- ----------------------------
-- Table structure for motabds
-- ----------------------------
DROP TABLE IF EXISTS `motabds`;
CREATE TABLE `motabds`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_bds` int(10) UNSIGNED NOT NULL,
  `dientich` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chieudai` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `chieurong` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dientichxd` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dientichsd` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cautruc` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `tiennghi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `motabds_id_bds_foreign`(`id_bds`) USING BTREE,
  CONSTRAINT `motabds_id_bds_foreign` FOREIGN KEY (`id_bds`) REFERENCES `batdongsan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for nhanvien
-- ----------------------------
DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE `nhanvien`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_cvu` int(10) UNSIGNED NOT NULL,
  `ten_nv` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaysinh_nv` date NOT NULL,
  `diachi_nv` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `phone_nv` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `email_nv` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cmnd_nv` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaycap_nv` date NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `id_phanquyen` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nhanvien_id_cvu_foreign`(`id_cvu`) USING BTREE,
  CONSTRAINT `nhanvien_id_cvu_foreign` FOREIGN KEY (`id_cvu`) REFERENCES `chucvu` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of nhanvien
-- ----------------------------
INSERT INTO `nhanvien` VALUES (1, 1, 'Nguyen Van A', '1983-05-12', 'CMT8', '0939542123', 'nva@dreamhouse.com', '123456985203', '2005-02-15', NULL, '2018-08-15 09:28:42', '2018-08-15 09:28:42', NULL);
INSERT INTO `nhanvien` VALUES (2, 3, 'Lê Thị Riêng', '1988-02-25', 'CT', '0936975203', 'ltr@dreamhouse.com', '326458963154', '2011-02-05', NULL, '2018-08-15 09:30:38', '2018-10-10 08:36:53', NULL);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for phanquyen
-- ----------------------------
DROP TABLE IF EXISTS `phanquyen`;
CREATE TABLE `phanquyen`  (
  `id` int(11) NOT NULL,
  `quyen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for phieuchi
-- ----------------------------
DROP TABLE IF EXISTS `phieuchi`;
CREATE TABLE `phieuchi`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_nv` int(10) UNSIGNED NOT NULL,
  `id_hd` int(10) UNSIGNED NOT NULL,
  `lydochi` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaychi` date NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `phieuchi_id_nv_foreign`(`id_nv`) USING BTREE,
  INDEX `phieuchi_id_hd_foreign`(`id_hd`) USING BTREE,
  CONSTRAINT `phieuchi_id_hd_foreign` FOREIGN KEY (`id_hd`) REFERENCES `hopdong` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `phieuchi_id_nv_foreign` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for phieuthu
-- ----------------------------
DROP TABLE IF EXISTS `phieuthu`;
CREATE TABLE `phieuthu`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_nv` int(10) UNSIGNED NOT NULL,
  `id_hd` int(10) UNSIGNED NOT NULL,
  `lydothu` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongtien` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaythu` date NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `phieuthu_id_nv_foreign`(`id_nv`) USING BTREE,
  INDEX `phieuthu_id_hd_foreign`(`id_hd`) USING BTREE,
  CONSTRAINT `phieuthu_id_hd_foreign` FOREIGN KEY (`id_hd`) REFERENCES `hopdong` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `phieuthu_id_nv_foreign` FOREIGN KEY (`id_nv`) REFERENCES `nhanvien` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for phuongxa
-- ----------------------------
DROP TABLE IF EXISTS `phuongxa`;
CREATE TABLE `phuongxa`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_quan` int(10) UNSIGNED NOT NULL,
  `ten_phuong` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `phuongxa_id_quan_foreign`(`id_quan`) USING BTREE,
  CONSTRAINT `phuongxa_id_quan_foreign` FOREIGN KEY (`id_quan`) REFERENCES `quanhuyen` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for quanhuyen
-- ----------------------------
DROP TABLE IF EXISTS `quanhuyen`;
CREATE TABLE `quanhuyen`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_tp` int(10) UNSIGNED NOT NULL,
  `ten_quan` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `quanhuyen_id_tp_foreign`(`id_tp`) USING BTREE,
  CONSTRAINT `quanhuyen_id_tp_foreign` FOREIGN KEY (`id_tp`) REFERENCES `thanhpho` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for thanhpho
-- ----------------------------
DROP TABLE IF EXISTS `thanhpho`;
CREATE TABLE `thanhpho`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ten_tp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ghichu` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of thanhpho
-- ----------------------------
INSERT INTO `thanhpho` VALUES (1, 'Cần Thơ', NULL, '2018-08-15 09:34:59', '2018-08-15 09:34:59');
INSERT INTO `thanhpho` VALUES (2, 'Vĩnh Long', NULL, '2018-08-15 09:35:03', '2018-08-15 09:35:03');
INSERT INTO `thanhpho` VALUES (3, 'Hậu Giang', NULL, '2018-08-15 09:35:07', '2018-08-15 09:35:07');
INSERT INTO `thanhpho` VALUES (4, 'Bạc Liêu', NULL, '2018-08-15 09:35:12', '2018-08-15 09:35:12');

-- ----------------------------
-- Table structure for tieuchi
-- ----------------------------
DROP TABLE IF EXISTS `tieuchi`;
CREATE TABLE `tieuchi`  (
  `id` int(11) NOT NULL,
  `tentieuchi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `ghichu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'admin@admin.com', '$2y$10$ghrLWJnrLk.1c4sbEnCSEOD/4Yz6ePAb4tZQf4YRHfGW65CEOQ2RG', NULL, '2018-08-15 09:20:23', '2018-08-15 09:20:23');
INSERT INTO `users` VALUES (2, 'yennhi', 'n@n.com', '$2y$10$qYhuYvGrihHs/6fudcu1keln2eFVlOIIZEMQy0qt39lE7wN1QqnQG', 'EUExwZgqNjIn0lIPwc3OF1NLlORT2kGpikeVVCfpCueAoxIIs7gD8CGXpZmM', '2018-10-10 08:03:21', '2018-10-10 08:03:21');

SET FOREIGN_KEY_CHECKS = 1;

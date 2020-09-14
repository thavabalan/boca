# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 66.97.47.134 (MySQL 10.0.38-MariaDB-0ubuntu0.16.04.1)
# Database: deportesboca
# Generation Time: 2020-08-07 19:43:37 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table data_rows
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data_rows`;

CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`)
VALUES
	(1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),
	(2,1,'name','text','Nombre',1,1,1,1,1,1,NULL,2),
	(3,1,'email','text','Mail',1,1,1,1,1,1,NULL,3),
	(4,1,'password','password','Contraseña',1,0,0,1,1,0,NULL,4),
	(5,1,'remember_token','text','Recordar Token',0,0,0,0,0,0,NULL,5),
	(6,1,'created_at','timestamp','Creado El',0,1,1,0,0,0,NULL,6),
	(7,1,'updated_at','timestamp','Actualizado El',0,0,0,0,0,0,NULL,7),
	(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),
	(9,1,'user_belongsto_role_relationship','relationship','Rol',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),
	(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),
	(11,1,'settings','hidden','Ajustes',0,0,0,0,0,0,NULL,12),
	(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),
	(13,2,'name','text','Nombre',1,1,1,1,1,1,NULL,2),
	(14,2,'created_at','timestamp','Creado El',0,0,0,0,0,0,NULL,3),
	(15,2,'updated_at','timestamp','Actualizado El',0,0,0,0,0,0,NULL,4),
	(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),
	(17,3,'name','text','Nombre',1,1,1,1,1,1,NULL,2),
	(18,3,'created_at','timestamp','Creado El',0,0,0,0,0,0,NULL,3),
	(19,3,'updated_at','timestamp','Actualizado El',0,0,0,0,0,0,NULL,4),
	(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),
	(21,1,'role_id','text','Rol',1,1,1,1,1,1,NULL,9),
	(22,4,'id','text','Id',1,0,0,0,0,0,'{}',1),
	(23,4,'body','rich_text_box','Cuerpo',0,1,1,1,1,1,'{}',6),
	(24,4,'top_image','image','Imagen Destacada',0,1,1,1,1,1,'{}',5),
	(25,4,'title','text','Título',0,1,1,1,1,1,'{}',3),
	(26,4,'created_at','timestamp','Creado El',0,1,1,1,0,1,'{}',9),
	(27,4,'updated_at','timestamp','Actualizado El',0,0,0,0,0,0,'{}',10),
	(28,4,'excerpt','text','Copete',0,1,1,1,1,1,'{}',8),
	(29,5,'id','text','Id',1,0,0,0,0,0,'{}',1),
	(30,5,'video_id','text','ID Video Youtube',0,1,1,1,1,1,'{}',2),
	(31,5,'title','text','Título',0,1,1,1,1,1,'{}',3),
	(32,5,'image','image','Imagen',0,1,1,1,1,1,'{}',4),
	(33,5,'created_at','timestamp','Creado El',0,1,1,1,0,1,'{}',6),
	(34,5,'updated_at','timestamp','Actualizado El',0,0,0,0,0,0,'{}',7),
	(35,6,'id','text','Id',1,0,0,0,0,0,'{}',1),
	(36,6,'title','text','Título',0,1,1,1,1,1,'{}',2),
	(37,6,'body','rich_text_box','Cuerpo',0,1,1,1,1,1,'{}',3),
	(38,6,'excerpt','text_area','Copete',0,1,1,1,1,1,'{}',4),
	(39,6,'image','image','Imagen',0,1,1,1,1,1,'{}',6),
	(40,6,'created_at','timestamp','Creado El',0,1,1,1,0,1,'{}',7),
	(41,6,'updated_at','timestamp','Actualizado El',0,0,0,0,0,0,'{}',8),
	(48,8,'id','text','Id',1,0,0,0,0,0,'{}',1),
	(49,8,'title','text','Título',0,1,1,1,1,1,'{}',2),
	(52,8,'created_at','timestamp','Creado El',0,1,1,1,0,1,'{}',13),
	(53,8,'updated_at','timestamp','Actualizado El',0,0,0,0,0,0,'{}',14),
	(54,4,'slug','text','URL SEO',0,1,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',4),
	(55,4,'lead','text','Volanta',0,1,1,1,1,1,'{}',2),
	(56,4,'video','text','ID Video Youtube',0,1,1,1,1,1,'{}',7),
	(57,6,'video','text','ID Video Youtube',0,1,1,1,1,1,'{}',5),
	(58,9,'id','text','Id',1,0,0,0,0,0,'{}',1),
	(59,9,'image','image','Imagen',0,1,1,1,1,1,'{}',2),
	(60,5,'embed_code','text','Embed JWPlayer',0,1,1,1,1,1,'{}',5),
	(61,8,'image2','image','Imagen 2',0,1,1,1,1,1,'{\"display\":{\"width\":\"6\"}}',7),
	(62,8,'image1','image','Imagen 1',0,1,1,1,1,1,'{\"display\":{\"width\":\"6\"}}',5),
	(63,8,'image3','image','Imagen 3',0,1,1,1,1,1,'{\"display\":{\"width\":\"6\"}}',9),
	(64,8,'image4','image','Imagen 4',0,1,1,1,1,1,'{\"display\":{\"width\":\"6\"}}',11),
	(65,8,'block1','rich_text_box','Bloque Texto 1',0,1,1,1,1,1,'{\"display\":{\"width\":\"6\"}}',4),
	(66,8,'block2','rich_text_box','Bloque Texto 2',0,1,1,1,1,1,'{\"display\":{\"width\":\"6\"}}',6),
	(67,8,'block3','rich_text_box','Bloque Texto 3',0,1,1,1,1,1,'{\"display\":{\"width\":\"6\"}}',8),
	(68,8,'block4','rich_text_box','Bloque Texto 4',0,1,1,1,1,1,'{\"display\":{\"width\":\"6\"}}',10),
	(69,8,'featured_image','image','Imagen Destacada',0,1,1,1,1,1,'{}',3),
	(70,8,'embed_code','text_area','Embed JWPlayer',0,1,1,1,1,1,'{}',12);

/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table data_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `data_types`;

CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `display_name_singular` varchar(255) NOT NULL,
  `display_name_plural` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `model_name` varchar(255) DEFAULT NULL,
  `policy_name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`)
VALUES
	(1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2020-07-19 13:41:29','2020-07-19 13:41:29'),
	(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2020-07-19 13:41:29','2020-07-19 13:41:29'),
	(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2020-07-19 13:41:29','2020-07-19 13:41:29'),
	(4,'news','news','News','News',NULL,'App\\News',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2020-07-19 14:03:45','2020-07-26 09:13:17'),
	(5,'videos','videos','Video','Videos',NULL,'App\\Video',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2020-07-21 15:31:49','2020-07-26 11:20:22'),
	(6,'perfilesxeneizes','perfilesxeneizes','Perfilesxeneize','Perfilesxeneizes',NULL,'App\\Perfilesxeneize',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2020-07-21 15:39:24','2020-07-26 09:23:38'),
	(8,'sports','sports','Sport','Sports',NULL,'App\\Sport',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2020-07-22 08:40:01','2020-08-06 21:11:03'),
	(9,'momentos','momentos','Momento','Momentos',NULL,'App\\Momento',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2020-07-26 09:45:51','2020-07-26 09:45:51');

/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table failed_jobs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table menu_items
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menu_items`;

CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `parameters` text,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`)
VALUES
	(1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2020-07-19 13:41:30','2020-07-19 13:41:30','voyager.dashboard',NULL),
	(2,1,'Media','','_self','voyager-images',NULL,NULL,9,'2020-07-19 13:41:30','2020-07-31 13:43:36','voyager.media.index',NULL),
	(3,1,'Users','','_self','voyager-person',NULL,NULL,8,'2020-07-19 13:41:30','2020-07-31 13:43:36','voyager.users.index',NULL),
	(4,1,'Roles','','_self','voyager-lock',NULL,NULL,7,'2020-07-19 13:41:30','2020-07-31 13:43:36','voyager.roles.index',NULL),
	(5,1,'Tools','','_self','voyager-tools',NULL,NULL,10,'2020-07-19 13:41:30','2020-07-31 13:43:36',NULL,NULL),
	(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2020-07-19 13:41:30','2020-07-19 14:08:11','voyager.menus.index',NULL),
	(7,1,'Database','','_self','voyager-data',NULL,5,2,'2020-07-19 13:41:30','2020-07-19 14:08:11','voyager.database.index',NULL),
	(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2020-07-19 13:41:30','2020-07-19 14:08:11','voyager.compass.index',NULL),
	(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2020-07-19 13:41:30','2020-07-19 14:08:11','voyager.bread.index',NULL),
	(10,1,'Settings','','_self','voyager-settings',NULL,NULL,11,'2020-07-19 13:41:30','2020-07-31 13:43:36','voyager.settings.index',NULL),
	(11,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2020-07-19 13:41:30','2020-07-19 14:08:11','voyager.hooks',NULL),
	(12,1,'Noticias','','_self','voyager-news','#000000',NULL,2,'2020-07-19 14:03:45','2020-07-31 13:43:41','voyager.news.index','null'),
	(13,1,'Videos','','_self','voyager-video','#000000',NULL,3,'2020-07-21 15:31:49','2020-07-31 13:43:31','voyager.videos.index','null'),
	(14,1,'Perfilesxeneizes','','_self','voyager-people','#000000',NULL,4,'2020-07-21 15:39:24','2020-07-31 13:43:33','voyager.perfilesxeneizes.index','null'),
	(16,1,'Deportes','','_self','voyager-trophy','#000000',NULL,6,'2020-07-22 08:40:01','2020-07-31 13:43:51','voyager.sports.index','null'),
	(17,1,'Momentos','','_self','voyager-photos','#000000',NULL,5,'2020-07-26 09:45:51','2020-07-31 13:43:36','voyager.momentos.index','null');

/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table menus
# ------------------------------------------------------------

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'admin','2020-07-19 13:41:30','2020-07-19 13:41:30');

/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2016_01_01_000000_add_voyager_user_fields',1),
	(4,'2016_01_01_000000_create_data_types_table',1),
	(5,'2016_05_19_173453_create_menu_table',1),
	(6,'2016_10_21_190000_create_roles_table',1),
	(7,'2016_10_21_190000_create_settings_table',1),
	(8,'2016_11_30_135954_create_permission_table',1),
	(9,'2016_11_30_141208_create_permission_role_table',1),
	(10,'2016_12_26_201236_data_types__add__server_side',1),
	(11,'2017_01_13_000000_add_route_to_menu_items_table',1),
	(12,'2017_01_14_005015_create_translations_table',1),
	(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),
	(14,'2017_03_06_000000_add_controller_to_data_types_table',1),
	(15,'2017_04_21_000000_add_order_to_data_rows_table',1),
	(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),
	(17,'2017_08_05_000000_add_group_to_settings_table',1),
	(18,'2017_11_26_013050_add_user_role_relationship',1),
	(19,'2017_11_26_015000_create_user_roles_table',1),
	(20,'2018_03_11_000000_add_user_settings',1),
	(21,'2018_03_14_000000_add_details_to_data_types_table',1),
	(22,'2018_03_16_000000_make_settings_value_nullable',1),
	(23,'2019_08_19_000000_create_failed_jobs_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table momentos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `momentos`;

CREATE TABLE `momentos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `momentos` WRITE;
/*!40000 ALTER TABLE `momentos` DISABLE KEYS */;

INSERT INTO `momentos` (`id`, `image`, `created_at`, `updated_at`)
VALUES
	(1,'momentos/July2020/uVq2qvf8fn71skbH6DkO.jpg','2020-07-26 11:16:11','2020-07-26 21:07:10'),
	(2,'momentos/July2020/fNGMGJ8iSHnT1QgnpgSN.jpg','2020-07-26 21:07:27','2020-07-26 21:07:27'),
	(3,'momentos/July2020/X7JWhrvGV50LHKhvgPeu.jpg','2020-07-26 21:07:36','2020-07-26 21:07:36');

/*!40000 ALTER TABLE `momentos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table news
# ------------------------------------------------------------

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `body` text,
  `top_image` text,
  `title` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `excerpt` text,
  `slug` text,
  `lead` text,
  `video` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;

INSERT INTO `news` (`id`, `body`, `top_image`, `title`, `created_at`, `updated_at`, `excerpt`, `slug`, `lead`, `video`)
VALUES
	(6,'<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s...</p>','news/July2020/RoCjdounRBHyCbA9AoQZ.jpg','Esto es algo que sacude al deporte a nivel mundial','2020-07-22 14:31:00','2020-07-26 20:57:18','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s...',NULL,'FUTBOL',NULL),
	(7,'<p>El equipo de lucha, con objetivos renovados</p>\r\n<p><img style=\"font-size: 11px;\" src=\"http://demo.thaayakamit.com/storage/news/July2020/2.jpg\" alt=\"\" /></p>','news/July2020/UA14DS3B3yXcaVu9oMBV.jpg','El equipo de lucha, con objetivos renovados','2020-07-23 01:28:00','2020-07-27 15:28:14','El equipo de lucha, con objetivos renovados','el-equipo-de-lucha-con-objetivos-renovados','VOLEY',NULL);

/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table perfilesxeneizes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `perfilesxeneizes`;

CREATE TABLE `perfilesxeneizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text,
  `body` text,
  `excerpt` text,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `perfilesxeneizes` WRITE;
/*!40000 ALTER TABLE `perfilesxeneizes` DISABLE KEYS */;

INSERT INTO `perfilesxeneizes` (`id`, `title`, `body`, `excerpt`, `image`, `created_at`, `updated_at`, `video`)
VALUES
	(2,'Eduardo Allona, DT del vóley femenino de Boca','<p>Safety measures guarantee the health and well-being of grade 12 students...</p>','Safety measures guarantee the health and well-being of grade 12 students...','perfilesxeneizes/July2020/JM9mX3SR3uqT3z0HEvaP.jpg','2020-07-21 18:40:00','2020-07-26 21:03:36',NULL),
	(3,'Chu Cossar, una guerrera con perfil xeneize','<p>Chu Cossar, una guerrera con perfil xeneize</p>\r\n<p>&nbsp;</p>','Chu Cossar, una guerrera con perfil xeneize','perfilesxeneizes/July2020/cJQNU7o2tCqvq8inxm7B.jpg','2020-07-22 20:14:00','2020-07-26 21:03:23',NULL),
	(4,'Guido Mosenson, el arquero de Boca en futsal','<p>Guido Mosenson, el arquero de Boca en futsal</p>','Guido Mosenson, el arquero de Boca en futsal','perfilesxeneizes/July2020/SmKcl9wkqXQ7oOQbjgE6.jpg','2020-07-22 20:15:00','2020-07-26 21:02:59',NULL);

/*!40000 ALTER TABLE `perfilesxeneizes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permission_role
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permission_role`;

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;

INSERT INTO `permission_role` (`permission_id`, `role_id`)
VALUES
	(1,1),
	(2,1),
	(3,1),
	(4,1),
	(5,1),
	(6,1),
	(7,1),
	(8,1),
	(9,1),
	(10,1),
	(11,1),
	(12,1),
	(13,1),
	(14,1),
	(15,1),
	(16,1),
	(17,1),
	(18,1),
	(19,1),
	(20,1),
	(21,1),
	(22,1),
	(23,1),
	(24,1),
	(25,1),
	(26,1),
	(27,1),
	(28,1),
	(29,1),
	(30,1),
	(31,1),
	(32,1),
	(33,1),
	(34,1),
	(35,1),
	(36,1),
	(37,1),
	(38,1),
	(39,1),
	(40,1),
	(41,1),
	(47,1),
	(48,1),
	(49,1),
	(50,1),
	(51,1),
	(52,1),
	(53,1),
	(54,1),
	(55,1),
	(56,1);

/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`)
VALUES
	(1,'browse_admin',NULL,'2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(2,'browse_bread',NULL,'2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(3,'browse_database',NULL,'2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(4,'browse_media',NULL,'2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(5,'browse_compass',NULL,'2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(6,'browse_menus','menus','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(7,'read_menus','menus','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(8,'edit_menus','menus','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(9,'add_menus','menus','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(10,'delete_menus','menus','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(11,'browse_roles','roles','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(12,'read_roles','roles','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(13,'edit_roles','roles','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(14,'add_roles','roles','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(15,'delete_roles','roles','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(16,'browse_users','users','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(17,'read_users','users','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(18,'edit_users','users','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(19,'add_users','users','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(20,'delete_users','users','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(21,'browse_settings','settings','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(22,'read_settings','settings','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(23,'edit_settings','settings','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(24,'add_settings','settings','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(25,'delete_settings','settings','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(26,'browse_hooks',NULL,'2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(27,'browse_news','news','2020-07-19 14:03:45','2020-07-19 14:03:45'),
	(28,'read_news','news','2020-07-19 14:03:45','2020-07-19 14:03:45'),
	(29,'edit_news','news','2020-07-19 14:03:45','2020-07-19 14:03:45'),
	(30,'add_news','news','2020-07-19 14:03:45','2020-07-19 14:03:45'),
	(31,'delete_news','news','2020-07-19 14:03:45','2020-07-19 14:03:45'),
	(32,'browse_videos','videos','2020-07-21 15:31:49','2020-07-21 15:31:49'),
	(33,'read_videos','videos','2020-07-21 15:31:49','2020-07-21 15:31:49'),
	(34,'edit_videos','videos','2020-07-21 15:31:49','2020-07-21 15:31:49'),
	(35,'add_videos','videos','2020-07-21 15:31:49','2020-07-21 15:31:49'),
	(36,'delete_videos','videos','2020-07-21 15:31:49','2020-07-21 15:31:49'),
	(37,'browse_perfilesxeneizes','perfilesxeneizes','2020-07-21 15:39:24','2020-07-21 15:39:24'),
	(38,'read_perfilesxeneizes','perfilesxeneizes','2020-07-21 15:39:24','2020-07-21 15:39:24'),
	(39,'edit_perfilesxeneizes','perfilesxeneizes','2020-07-21 15:39:24','2020-07-21 15:39:24'),
	(40,'add_perfilesxeneizes','perfilesxeneizes','2020-07-21 15:39:24','2020-07-21 15:39:24'),
	(41,'delete_perfilesxeneizes','perfilesxeneizes','2020-07-21 15:39:24','2020-07-21 15:39:24'),
	(47,'browse_sports','sports','2020-07-22 08:40:01','2020-07-22 08:40:01'),
	(48,'read_sports','sports','2020-07-22 08:40:01','2020-07-22 08:40:01'),
	(49,'edit_sports','sports','2020-07-22 08:40:01','2020-07-22 08:40:01'),
	(50,'add_sports','sports','2020-07-22 08:40:01','2020-07-22 08:40:01'),
	(51,'delete_sports','sports','2020-07-22 08:40:01','2020-07-22 08:40:01'),
	(52,'browse_momentos','momentos','2020-07-26 09:45:51','2020-07-26 09:45:51'),
	(53,'read_momentos','momentos','2020-07-26 09:45:51','2020-07-26 09:45:51'),
	(54,'edit_momentos','momentos','2020-07-26 09:45:51','2020-07-26 09:45:51'),
	(55,'add_momentos','momentos','2020-07-26 09:45:51','2020-07-26 09:45:51'),
	(56,'delete_momentos','momentos','2020-07-26 09:45:51','2020-07-26 09:45:51');

/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`)
VALUES
	(1,'admin','Administrator','2020-07-19 13:41:30','2020-07-19 13:41:30'),
	(2,'user','Normal User','2020-07-19 13:41:30','2020-07-19 13:41:30');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `value` text,
  `details` text,
  `type` varchar(255) NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`)
VALUES
	(1,'site.title','Site Title','Site Title','','text',1,'Site'),
	(2,'site.description','Site Description','Site Description','','text',2,'Site'),
	(3,'site.logo','Site Logo','settings/August2020/blhkQa6u7rBvxjgompUu.gif','','image',3,'Site'),
	(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),
	(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),
	(6,'admin.title','Admin Title','Deportes Amateur Boca Juniors','','text',1,'Admin'),
	(7,'admin.description','Admin Description','Welcome to Voyager. The Missing Admin for Laravel','','text',2,'Admin'),
	(8,'admin.loader','Admin Loader','','','image',3,'Admin'),
	(9,'admin.icon_image','Admin Icon Image','','','image',4,'Admin'),
	(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sports
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sports`;

CREATE TABLE `sports` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text,
  `image2` text,
  `image1` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image3` text,
  `image4` text,
  `block1` text,
  `block2` text,
  `block3` text,
  `block4` text,
  `featured_image` text,
  `embed_code` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table translations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `translations`;

CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) NOT NULL,
  `column_name` varchar(255) NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table user_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `user_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) unsigned DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `settings` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`)
VALUES
	(1,1,'admin','admin@test.com','users/July2020/QKbJZY7K6pvkn9EtpGZR.png',NULL,'$2y$10$9ys7zyHFgjCVZCGcxcdFFu661AtIO91rKIzMnGU4R9uJv1ycuL5me','pZEC0q63wnJZxbuHviQ26q5VqZKaEGUsM7A2ZmZEt0Jew0fVUt4mEl2KntlA','{\"locale\":\"es\"}','2020-07-19 13:43:07','2020-07-31 13:45:03');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table videos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `videos`;

CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `video_id` text,
  `title` text,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `embed_code` text,
  `sub_title` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;

INSERT INTO `videos` (`id`, `video_id`, `title`, `image`, `created_at`, `updated_at`, `embed_code`, `sub_title`)
VALUES
	(2,NULL,'Voley','videos/July2020/JK4f4Up8oWHMUuu4Lwn9.jpg','2020-07-21 18:33:00','2020-07-26 21:35:32','<div style=\"position:relative; overflow:hidden; padding-bottom:56.25%\"> <iframe src=\"https://cdn.jwplayer.com/players/sVzKg4Ti-Y1c35JbO.html\" width=\"100%\" height=\"100%\" frameborder=\"0\" scrolling=\"auto\" title=\"1894317570\" style=\"position:absolute;\" allowfullscreen></iframe> </div>','SUPERCLASICO'),
	(3,NULL,'Voley Femenino 2','videos/July2020/NnZVdShoDMiK6ruQwu8a.jpg','2020-07-26 21:20:02','2020-07-26 21:20:02',NULL,'PRUEBA SUB');

/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

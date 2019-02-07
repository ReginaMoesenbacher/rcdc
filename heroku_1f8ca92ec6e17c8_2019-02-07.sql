# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: eu-cdbr-west-02.cleardb.net (MySQL 5.6.42-log)
# Datenbank: heroku_1f8ca92ec6e17c8
# Erstellt am: 2019-02-07 08:54:14 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle carts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `carts`;

CREATE TABLE `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `uniq_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_brand` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` int(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;

INSERT INTO `carts` (`id`, `user_id`, `ingredients`, `uniq_id`, `card_brand`, `card_last_four`, `created_at`, `updated_at`)
VALUES
	(131,'7','\"Dark rum ,Scotch ,Blended whiskey ,Bitters ,Sugar, lala, le, lu\"','ylXODFUypF','Mastercard',1234,'2019-02-06 21:45:54','2019-02-07 08:50:36'),
	(141,'7','\"rum ,Scotch ,Blended whiskey ,Bitters ,Sugar ,blub, blubber\"','ylXODFUypi','Mastercard',1234,'2019-02-06 21:45:54','2019-02-07 08:50:25');

/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle category_images
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category_images`;

CREATE TABLE `category_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `category_images` WRITE;
/*!40000 ALTER TABLE `category_images` DISABLE KEYS */;

INSERT INTO `category_images` (`id`, `category`, `category_img`, `category_desc`, `created_at`, `updated_at`)
VALUES
	(1,'Cocktail','category_imgs/cocktail.jpg','Cocktail an alcoholic mixed drink, which is either a combination of spirits, or one or more spirits along with other ingredients such as fruit juice, lemonade, flavored syrup, or cream.','2018-12-15 12:35:03','2018-12-15 12:35:03'),
	(2,'Milk/ Float/ Shake','category_imgs/shakefloat.jpg','A beverage that is made of milk, ice cream, and often flavoring and is blended or whipped until foamy. \nAlso calledshake; also called regionally cabinet, frappe, velvet.','2018-12-15 12:35:05','2018-12-15 12:35:05'),
	(3,'Cocoa','category_imgs/cocoa.jpg','You are never too old for a good cocoa. There is not just one way to drink cocoa.','2018-12-15 12:35:10','2018-12-15 12:35:10'),
	(4,'Shot','category_imgs/shot.jpg','Everyone knows shots. We have some that you probably do not know. Click through and you will be astonished.','2018-12-15 12:35:12','2018-12-15 12:35:12'),
	(5,'Coffee/ Tea','category_imgs/coffeetea.jpg','Fancy new coffee ideas, we\'ll help you.','2018-12-15 12:35:14','2018-12-15 12:35:14'),
	(6,'Homemade Liqueur','category_imgs/liqueur.jpg','Liquor (also hard liquor, hard alcohol, spirit, or distilled drink) is an alcoholic drink produced by distillation of grains, fruit, or vegetables that have already gone through alcoholic fermentation. We have the best just for you.','2018-12-15 12:35:18','2018-12-15 12:35:18'),
	(7,'Punch / Party Drink','category_imgs/punch.jpg','The term punch refers to a wide assortment of drinks, both non-alcoholic and alcoholic, generally containing fruit or fruits juice.','2018-12-15 12:35:19','2018-12-15 12:35:19'),
	(8,'Beer	','category_imgs/beer.jpg','Beer is one of the oldest  and most widely consumed alcoholic drink in the world, and the third most popular drink overall after water and tea. And we have the best for you.','2018-12-15 12:35:21','2018-12-15 12:35:21'),
	(9,'Soft Drink/ Soda','category_imgs/soda.jpg','Everyone knows and likes soft drinks for everyone who wants to try a drink without Aklohol.','2018-12-15 12:35:23','2018-12-15 12:35:23'),
	(10,'Ordinary Drink','category_imgs/ordinary.jpg','Spirits are one of the main ingredients in mixed drinks, along with other alcoholic beverages, mixers and garnishes. They are prepared by distillation from a fermented substance such as fruit, vegetables, grain, sugar cane, cactus juice, etc.','2018-12-15 12:35:01','2018-12-15 12:35:01');

/*!40000 ALTER TABLE `category_images` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle category_slug
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category_slug`;

CREATE TABLE `category_slug` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_string` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_api` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `category_slug` WRITE;
/*!40000 ALTER TABLE `category_slug` DISABLE KEYS */;

INSERT INTO `category_slug` (`id`, `category_string`, `slug`, `category_api`)
VALUES
	(2,'Cocktail','cocktail','Cocktail'),
	(3,'Milk / Float / Shake','milk-float-shake','Milk%20/%20Float%20/%20Shake'),
	(5,'Cocoa','cocoa','Cocoa'),
	(6,'Shot','shot','Shot'),
	(7,'Coffee / Tea','coffee-tea','Coffee%20/%20Tea'),
	(8,'Homemade Liqueur','homemade-liqueur','Homemade%20Liqueur'),
	(9,'Punch / Party Drink','punch-party-drink','Punch%20/%20Party%20Drink'),
	(10,'Beer','beer','Beer'),
	(11,'Soft Drink / Soda','soft-drink-soda','Soft%20Drink%20/%20Soda');

/*!40000 ALTER TABLE `category_slug` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle keywords
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keywords`;

CREATE TABLE `keywords` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `search_json` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Export von Tabelle migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2018_11_26_193342_create_category_images_table',1),
	(4,'2018_11_29_142807_create_category_slug',1),
	(5,'2018_11_29_184534_create_keywords_table',1),
	(6,'2018_12_15_112259_create_carts_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Export von Tabelle password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Export von Tabelle users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tel`, `city`, `zipcode`, `state`, `address`, `remember_token`, `role`, `created_at`, `updated_at`)
VALUES
	(2,'Regina','r.moesenbacher@sae.edu',NULL,'$2y$10$jj46nm1S/VkVQU9kWgzN2.EgE62GtK8biwH30BCnP1d4cAgjJA4my','06644574892','Gröbming','8961','Österreich','Moosheim 4','fN9w89oTGesgKd1Lwrxkm6BG5E3ZzhiPR3dwLOW3nSM8JcJ3ouOdYqxc1RcB',1,'2018-12-15 21:19:15','2019-01-20 14:48:11'),
	(4,'Johannes','j.moesnebacher@gmail.com',NULL,'$2y$10$L4snpxG4/6QsPIDWI.NRtOGxufaANLYAvmSgpV5PjRq4zd7pOpHlm','+496644574892','Gröbming','8962','Österreich','Moosheim 4',NULL,NULL,'2018-12-19 14:57:35','2019-01-22 12:13:20'),
	(5,'RegNina','v.moesnebacher@gmail.com',NULL,'$2y$10$jj46nm1S/VkVQU9kWgzN2.EgE62GtK8biwH30BCnP1d4cAgjJA4my','+496644574892','Gröbming','10000','Deutschland','Moosheim 4','xXXppjogi22yflbgNhSRlO0wj5BMozUTbjAi5stlxBNf7RRkifj1T9RrzxVP',NULL,'2019-01-16 13:31:46','2019-01-22 11:43:26'),
	(7,'Nina','nina.muster@gmail.com',NULL,'$2y$10$c/q0WTEtakO6PJNEqrZJluQoUD3aSSnLVKy6IY.DWrRE3gGtUq1iy','+496644574892','Wien','1100','Österreich','Witzelsbergergasse 10','faYpnZE8OZfFkVx5xzRun83tAF0HYzmEuype3tDlhsRSNhPkQhYgX8ho7bm1',NULL,'2019-01-22 14:30:41','2019-01-22 14:30:41'),
	(11,'Reginina','regi.moesi@gmail.com',NULL,'$2y$10$yO0cbRJ/o1tEeWAeSJHJ9OqV.zIrgXVKWDBI/nSs.05uwtJRfjExy','+496644574892','Moosheim 4','8962','Österreich','Moosheim 4','hW9UkiGfIdFEgtjRn3yFVbNsGYK7xFYEConKcwlRWVO2kPzPE8mxd3ojgfZI',NULL,'2019-01-25 14:46:42','2019-01-25 14:46:42');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

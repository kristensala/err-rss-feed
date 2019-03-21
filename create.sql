CREATE TABLE `news` (
 `id` int(50) NOT NULL AUTO_INCREMENT,
 `guid` varchar(125) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 `link` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 `date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `id` (`id`),
 UNIQUE KEY `guid` (`guid`)
) ENGINE=InnoDB AUTO_INCREMENT=3827 DEFAULT CHARSET=latin1
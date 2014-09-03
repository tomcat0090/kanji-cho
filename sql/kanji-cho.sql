SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

DROP TABLE IF EXISTS `english`;
CREATE TABLE IF NOT EXISTS `english` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `kanji`;
CREATE TABLE IF NOT EXISTS `kanji` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `relations`;
CREATE TABLE IF NOT EXISTS `relations` (
  `id1` int(10) unsigned NOT NULL,
  `id2` int(10) unsigned NOT NULL,
  `kanji_id` int(10) unsigned NOT NULL,
  `eng_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `words`;
CREATE TABLE IF NOT EXISTS `words` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) CHARACTER SET ucs2 NOT NULL,
  `lang_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


--
-- テーブルの構造 `english`
--

CREATE TABLE IF NOT EXISTS `english` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- テーブルのデータのダンプ `english`
--

INSERT INTO `english` (`id`, `value`) VALUES
(1, 'love');

-- --------------------------------------------------------

--
-- テーブルの構造 `kanji`
--

CREATE TABLE IF NOT EXISTS `kanji` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `value` (`value`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- テーブルのデータのダンプ `kanji`
--

INSERT INTO `kanji` (`id`, `value`) VALUES
(1, '愛');

-- --------------------------------------------------------

--
-- テーブルの構造 `relations`
--

CREATE TABLE IF NOT EXISTS `relations` (
  `eng_id` int(10) unsigned NOT NULL,
  `kanji_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `relations`
--

INSERT INTO `relations` (`eng_id`, `kanj_id`) VALUES
(1, 1);

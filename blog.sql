CREATE TABLE IF NOT EXISTS `cat` (
  `cat_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catname` char(30) NOT NULL DEFAULT '',
  `num` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`cat_id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `art` (
  `art_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cat_id` smallint(5) unsigned DEFAULT '0',
  `user_id` int(10) unsigned DEFAULT '0',
  `title` varchar(45) DEFAULT '',
  `content` text,
  `pubtime` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`art_id`)
)DEFAULT CHARSET=utf8;
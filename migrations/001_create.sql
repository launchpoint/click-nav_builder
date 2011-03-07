
CREATE TABLE IF NOT EXISTS `navigation_items` (
  `id` int(11) NOT NULL auto_increment,
  `function` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `weight` int(11) default NULL,
  `is_active` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `function` (`function`),
  KEY `weight` (`weight`),
  KEY `is_active` (`is_active`),
  KEY `weight_2` (`weight`,`is_active`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=867 ;

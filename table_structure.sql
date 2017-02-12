--
-- Table structure for table `eonTemp`
--

CREATE TABLE IF NOT EXISTS `eonTemp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `temp` float DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

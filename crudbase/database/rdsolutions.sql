

DROP TABLE IF EXISTS `crud_users`;

CREATE TABLE `crud_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


LOCK TABLES `crud_users` WRITE;

UNLOCK TABLES;


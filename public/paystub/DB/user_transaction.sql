DROP TABLE IF EXISTS user_transaction;
CREATE TABLE  `user_transaction` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `options` text,
  `is_paid` tinyint(1) NOT NULL DEFAULT '0',
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `address_city` varchar(45) DEFAULT NULL,
  `address_state` varchar(45) DEFAULT NULL,
  `address_street` varchar(45) DEFAULT NULL,
  `address_zip` varchar(45) DEFAULT NULL,
  `pay_email` varchar(45) DEFAULT NULL,
  `pp_tx_id` varchar(45) DEFAULT NULL,
  `mc_gross` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `premium` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
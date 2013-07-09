--
-- MySQL 5.5.24
-- Mon, 01 Jul 2013 22:55:17 +0000
--

CREATE TABLE `ci_sessions` (
   `session_id` varchar(40) not null default '0',
   `ip_address` varchar(45) not null default '0',
   `user_agent` varchar(120) not null,
   `last_activity` int(10) unsigned not null default '0',
   `user_data` text not null,
   PRIMARY KEY (`session_id`),
   KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES ('89182394aced3d3b48efa2e0eaffd186', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36', '1372700049', '');

CREATE TABLE `user_table` (
   `id` int(11) not null auto_increment,
   `username` varchar(20),
   `password` varchar(32),
   `permission` varchar(13),
   `first_name` varchar(50),
   `last_name` varchar(50),
   `middle_name` varchar(50),
   `birth_date` date,
   `address` varchar(255),
   `city` varchar(35),
   `province` varchar(35),
   `country` varchar(2),
   `zip_code` int(6),
   `phone` varchar(20),
   `email` varchar(255),
   `image_file` varchar(255),
   `date_created` datetime,
   `is_active` char(1),
   `security_question` int(2),
   `security_answer` varchar(100),
   PRIMARY KEY (`id`),
   UNIQUE KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=4;

INSERT INTO `user_table` (`id`, `username`, `password`, `permission`, `first_name`, `last_name`, `middle_name`, `birth_date`, `address`, `city`, `province`, `country`, `zip_code`, `phone`, `email`, `image_file`, `date_created`, `is_active`, `security_question`, `security_answer`) VALUES ('1', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'Administrator', 'Tony', 'Stark', '', '1992-10-19', '', '', '', '', '', '', '', '', '', '1', '', '');
INSERT INTO `user_table` (`id`, `username`, `password`, `permission`, `first_name`, `last_name`, `middle_name`, `birth_date`, `address`, `city`, `province`, `country`, `zip_code`, `phone`, `email`, `image_file`, `date_created`, `is_active`, `security_question`, `security_answer`) VALUES ('2', 'hrstaff', '81dc9bdb52d04dc20036dbd8313ed055', 'HR', 'Bruce', 'Wayne', '', '1983-05-03', '', '', '', 'ph', '', '', '', '', '', '1', '', '');
INSERT INTO `user_table` (`id`, `username`, `password`, `permission`, `first_name`, `last_name`, `middle_name`, `birth_date`, `address`, `city`, `province`, `country`, `zip_code`, `phone`, `email`, `image_file`, `date_created`, `is_active`, `security_question`, `security_answer`) VALUES ('3', 'trainer', '81dc9bdb52d04dc20036dbd8313ed055', 'Trainer', 'Steve', 'Rogers', '', '1988-09-11', '', '', '', '', '', '', '', '', '', '1', '', '');
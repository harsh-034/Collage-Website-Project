CREATE TABLE `registrations` (
  `reg_id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `reg_no` varchar(255) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `mname` varchar(40) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` varchar(355) DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL,
  `pay_status` varchar(20) DEFAULT NULL,
  `course_fees` varchar(40) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL
);
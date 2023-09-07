-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 06:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(11) NOT NULL,
  `adm_username` varchar(30) NOT NULL,
  `adm_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `adm_username`, `adm_password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE IF NOT EXISTS `batch` (
  `batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_name` varchar(20) NOT NULL,
  `dep_id` int(11) NOT NULL,
  PRIMARY KEY (`batch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `batch_name`, `dep_id`) VALUES
(1, 'MBA18', 1),
(2, 'MBA19', 1),
(3, 'MCA18', 2),
(4, 'MCA19', 2),
(5, 'MHRM18', 3),
(6, 'MHRM19', 3),
(7, 'MSW19', 5),
(8, 'MSW18', 5),
(9, 'MEDIA18', 6),
(10, 'MEDIA19', 6),
(11, 'BCA18', 4),
(12, 'BCA17', 4),
(13, 'BCA19', 4);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_lastname` varchar(30) NOT NULL,
  `c_gender` varchar(6) NOT NULL,
  `c_status` varchar(15) NOT NULL,
  `c_password` varchar(20) NOT NULL,
  `c_username` varchar(30) NOT NULL,
  `c_address` varchar(40) NOT NULL,
  `c_email` varchar(30) NOT NULL,
  `c_phn` varchar(10) NOT NULL,
  `c_reason` varchar(30) NOT NULL,
  `cand_image` varchar(200) NOT NULL,
  `s_date` date NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`c_id`, `batch_id`, `post_id`, `c_name`, `c_lastname`, `c_gender`, `c_status`, `c_password`, `c_username`, `c_address`, `c_email`, `c_phn`, `c_reason`, `cand_image`, `s_date`) VALUES
(32, 1, 6, 'HAZEL ', ' JOE ', 'f', 'ACCEPTED', '879', 'MBA18005', 'THRISSUR', 'hazel@gmail.com', '9747483647', 'ACCORDING  ACADEMICS', 'ea3502c3594588f0e9d5142f99c66627_79eaa8e93a4.jpg', '2021-05-21'),
(33, 5, 6, 'KATHREEN ', 'RENNY', 'f', 'ACCEPTED', '123', 'MHRM18054', 'ANGAMALY', 'kath@gmail.com', '9013436471', 'ACCORDING  ACADEMICS', '78ccad7da4c2fc2646d1848e965794c5_ea12f999f3e1c0.jpg', '2021-05-21'),
(37, 3, 6, 'JACOB ', 'JAMES ', 'm', 'ACCEPTED', '675', 'MCA18046', 'KARUKUTTY', 'jacobs@gmail.com', '8364721474', 'ACTIVE MEMBER', '137b7c791204ff4ccab2a7c63462123e_57d1e6c223e0d48a165d.jpg', '2021-05-20'),
(38, 9, 6, 'PAUL ', 'ANTO', 'm', 'ACCEPTED', '1567', 'MEDIA18005', 'KALOOR', 'paul@gmail.com', '8964721489', 'ACTIVE MEMBER', '2cf203516f33059cf320d8b7ec385328_a20ee480d3c53bd.jpg', '2021-05-21'),
(39, 8, 6, 'FAYAS', 'RAHOOF', 'm', 'REJECTED', '908', 'MSW18033', 'MEKKAD', 'fayas@gmail.com', '8535430012', 'Shortage of attendence', '738a6457be8432bab553e21b4235dd97_ef7e29086a6ab33b.png', '2021-05-21'),
(40, 8, 2, 'ANNANYA', 'JOY', 'f', 'ACCEPTED', '906', 'MSW18034', 'NEDUMBASSERY', 'annanya@gmail.com', '9656110540', 'ACTIVE MEMBER', '471684d6c43cfc529b30d600113dae63_7e8ca2dc7c98b0.jpg', '2021-05-21'),
(41, 3, 2, 'JOYAL ', 'JOHNSON ', 'm', 'ACCEPTED', '5678', 'MCA18012', 'KODANAD', 'joyal@gmail.com', '8976789540', 'ACTIVE MEMBER', 'f7dafc45da369f8581fdf3bd599075aa_2f83c409ce6.jpg', '2021-05-21'),
(42, 9, 2, 'KARTHIK', 'MENON', 'm', 'ACCEPTED', '789', 'MEDIA18037', 'KOCHI', 'karthi@gmail.com', '9546354323', 'ACTIVE  STUDENT', '89db09d856d45d361982edc10ce738a2_ce3dedb69b.jpg', '2021-05-21'),
(43, 1, 3, 'MAHIN ', 'ABDUL', 'm', 'ACCEPTED', '6789', 'MBA18047', 'ALUVA', 'mahi@gmail.com', '9721474836', 'ACTIVE  STUDENT', '853c68de7253cdd55dc37be410a45c60_fc6473a38b79c0a.jpg', '2021-05-21'),
(44, 5, 3, 'AFNA  ', 'S.K ', 'f', 'ACCEPTED', '1345', 'MHRM18025', 'EDAPPILLY', 'afna@gmail.com', '9936472147', 'ACTIVE  STUDENT', '9e7ba617ad9e69b39bd0c29335b79629_dc1c7653ac42a056.jpg', '2021-05-22'),
(45, 3, 3, 'DENSY', 'JOBY', 'f', 'ACCEPTED', '7894', 'MCA18036', 'KORATTY', 'densy@gmail.com', '9996787654', 'ACTIVE  STUDENT', 'ca5d2301e833bedfa62053bb8210da20_1c9c261bfa06.jpg', '2021-05-20'),
(46, 12, 4, 'ANNA', 'ISSAC', 'f', 'ACCEPTED', 'yu89', 'BCA17008', 'MOOKKANOOR', 'anna@gmail.com', '7989007654', 'ACTIVE  STUDENT', '20a8571b66205bd36a898172ae082c53_b9286d3c43405cee.jpg', '2021-05-21'),
(47, 8, 4, 'HARSHA', 'RAHMAN', 'f', 'ACCEPTED', 'kl09', 'MSW18001', 'KIDANGOOR', 'harsha@gmail.com', '8947483647', 'ACTIVE  STUDENT', '6a557d1f3d1e0bd9ebe6ca140a1e5194_0d116a953ae3c361e5d.jpg', '2021-05-20'),
(48, 3, 4, 'ADRIN', 'SIJO', 'm', 'ACCEPTED', '5678', 'MCA18005', 'JOSEPURAM', 'adrin@gmail.com', '8047483600', 'ACTIVE  STUDENT', 'ca7be8306ecc3f5fa30ff2c41e64fa7b_fb8d43bc548a8d9c2.jpg', '2021-05-22'),
(49, 8, 5, 'JEEZ', 'SOJAN', 'm', 'ACCEPTED', '2567', 'MSW18008', 'ANGAMALY', 'jeez@gmail.com', '9747110540', 'ACTIVE  STUDENT', '76d0baca6075c45cd8a3a55fa6a23c05_2e896193e43a2e15df8.jpg', '2021-05-22'),
(50, 12, 5, 'ALOYSIUS', 'NOBY', 'm', 'ACCEPTED', 'ji98', 'BCA17025', 'KARUKUTTY', 'aloshi@gmail.com', '8976546320', 'ACTIVE  STUDENT', '8217bb4e7fa0541e0f5e04fea764ab91_2d7558e2231f00f8c9a.jpg', '2021-05-22'),
(51, 9, 5, 'MARIYA', 'P.D', 'f', 'APPLY', '897', 'MEDIA18027', 'KALADY', 'mariya@gmail.com', '7025678901', '', 'd33174c464c877fb03e77efdab4ae804_4ee0822adcbfc50bf1.jpg', '2021-05-20'),
(52, 3, 5, 'JAINA', 'JOHNSON ', 'f', 'APPLY', '908i', 'MCA18008', 'PULIYANAM', 'jaina@gmail.com', '9824309850', '', '82d7f56432e27700a4f968ccc1d65038_033c07c296a1d7cf85.jpg', '2021-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `clg_id` int(11) NOT NULL AUTO_INCREMENT,
  `clg_name` varchar(60) NOT NULL,
  `clg_address` varchar(30) NOT NULL,
  `clg_pin` varchar(20) NOT NULL,
  `clg_tele` varchar(15) NOT NULL,
  `clg_email` varchar(20) NOT NULL,
  `clg_site` varchar(20) NOT NULL,
  `clg_image` varchar(200) NOT NULL,
  PRIMARY KEY (`clg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`clg_id`, `clg_name`, `clg_address`, `clg_pin`, `clg_tele`, `clg_email`, `clg_site`, `clg_image`) VALUES
(3, 'VICTORIA COLLEGE OF SCIENCE AND TECHNOLOGY', 'ERNAKULAM', '653427', '04842458900', 'admi@victoria.edu.in', 'www.victoria.edu.in', '4ca82b2a861f70cd15d83085b000dbde_6446066d4de2b.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_date` date NOT NULL,
  `e_name` varchar(50) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `date`
--

INSERT INTO `date` (`d_id`, `e_date`, `e_name`) VALUES
(1, '2021-08-12', 'College Union Election'),
(2, '2021-07-24', 'Updation Last Day'),
(4, '2021-07-26', 'Scrutiny of Nomination'),
(5, '2021-08-02', 'Check Approve or not'),
(6, '2021-08-14', 'Result Announces');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE IF NOT EXISTS `dept` (
  `dep_id` int(11) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(30) NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dep_id`, `dep_name`) VALUES
(1, 'MBA'),
(2, 'MCA'),
(3, 'MHRM'),
(4, 'BCA'),
(5, 'MSW'),
(6, 'MEDIA');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE IF NOT EXISTS `election` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`e_id`, `from_date`, `to_date`) VALUES
(4, '2021-05-19', '2021-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_name` varchar(20) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_name`) VALUES
(2, 'VICE CHAIRMAN'),
(3, 'GENERAL SECRETARY'),
(4, 'ARTS CLUB SECRETARY'),
(5, 'MAGAZINE EDITOR'),
(6, 'CHAIRPERSON');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_name` varchar(20) NOT NULL,
  `poll_time` varchar(20) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`t_id`, `e_name`, `poll_time`) VALUES
(1, 'VOTING  TIME', '7.00AM - 6.00PM');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `vote_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `voter_id` int(11) NOT NULL,
  PRIMARY KEY (`vote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=171 ;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`vote_id`, `c_id`, `voter_id`) VALUES
(123, 42, 5),
(124, 43, 5),
(125, 48, 5),
(126, 49, 5),
(127, 0, 9),
(128, 40, 9),
(129, 43, 9),
(130, 46, 9),
(131, 50, 9),
(132, 0, 11),
(133, 40, 11),
(134, 45, 11),
(135, 47, 11),
(136, 50, 11),
(137, 0, 10),
(138, 0, 10),
(139, 0, 10),
(140, 46, 10),
(141, 0, 10),
(142, 0, 14),
(143, 41, 14),
(144, 0, 14),
(145, 0, 14),
(146, 0, 14),
(147, 0, 13),
(148, 53, 13),
(149, 0, 13),
(150, 0, 13),
(151, 0, 13),
(152, 0, 13),
(153, 0, 16),
(154, 54, 16),
(155, 0, 16),
(156, 0, 16),
(157, 0, 16),
(158, 0, 16),
(159, 0, 17),
(160, 32, 17),
(161, 40, 17),
(162, 44, 17),
(163, 46, 17),
(164, 49, 17),
(165, 0, 15),
(166, 37, 15),
(167, 40, 15),
(168, 43, 15),
(169, 46, 15),
(170, 50, 15);

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE IF NOT EXISTS `voter` (
  `voter_id` int(11) NOT NULL AUTO_INCREMENT,
  `v_admno` int(11) NOT NULL,
  `v_name` varchar(30) NOT NULL,
  `v_address` varchar(20) NOT NULL,
  `v_gender` varchar(15) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `v_email` varchar(20) NOT NULL,
  `v_mob` varchar(16) NOT NULL,
  `v_username` varchar(10) NOT NULL,
  `v_password` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `v_image` varchar(200) NOT NULL,
  PRIMARY KEY (`voter_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`voter_id`, `v_admno`, `v_name`, `v_address`, `v_gender`, `batch_id`, `v_email`, `v_mob`, `v_username`, `v_password`, `status`, `v_image`) VALUES
(2, 987, 'DAVID ANTONY', 'vengoor', 'm', 2, 'david@gmail.com', '9876543120', 'MCA45678', '8796', 'Voted', 'ce5193a069bea027a60e06c57a106eb6_81a2dd8d098a3be.png'),
(4, 41721, 'ELAINE MARIA', 'PERUMBHAVOOR', 'f', 5, 'eli@gmail.com', '9867584623', 'MCA19008', 'happy123', 'Voted', '12d3041bef0c92ddf325bc1e6e0052ce_8374dde45533b.png'),
(5, 36801, 'HARSHA KK', 'ANGAMALY', 'f', 3, 'harsha@gmail.com', '9823456134', 'MHRM18024', 'KL63F1156', 'Voted', '59ab1a1d1f2c0ebde93ec1634e28a102_f1baed1810a82e1d5.jpg'),
(6, 38587, 'ANNA ISSAC', 'KORATTY', 'f', 5, 'anna@gmail.com', '9878656712', 'MBA19011', '7896', 'Voted', '1d32607ab01409c4b6916c5cae13b269_41ccf0e10a27a5a.jpg'),
(8, 36718, 'HARRY PAUL', 'MEKKAD', 'm', 5, 'harry@gmail.com', '9465728324', 'MBA19023', 'qwet65', 'Voted', 'feddfedc98490ed7e123db392f076fa1_ef037ce94ff9b79.jpg'),
(9, 34567, 'VICTOR JOSEPH', 'MALAYATTOR', 'm', 6, 'victor@gmail.com', '9234576152', 'MHRM19856', '8493', 'Voted', '2354c276f1c9156f4b97a11a7aa41254_fb80ade324.png'),
(10, 34598, 'REUBAN XAVIER', 'OOTY', 'm', 2, 'reuban12@gmail.com', '9276850152', 'MBA19856', '8789', 'Voted', '99113167f3b816bdeb56ff1af6cec7af_45ebfe99049a8a.png'),
(11, 37890, 'ADRIN SIJO', 'ANGAMALY', 'm', 4, 'adrin@gmail.com', '7896054673', 'MCA19890', '7896', 'Voted', 'c81bdaf1ff748793978692eed1ed5099_c85252edd1439a69.jpg'),
(12, 38970, 'ALOYSIUS  NOBY', 'ANGAMALY', 'm', 2, 'aloshi@gmail.com', '9843285439', 'MBA19807', '7896', 'Voted', 'be6ad6f949eeb8ebb94ebc82f0fac2f2_13095d06c20.jpg'),
(13, 9086, 'NIMMY SHAJU', 'AIMURY', 'f', 5, 'nimmy@gmail.com', '7267356778', 'MHRM18002', '8970', 'Voted', '67845006067b1ce96cc0e291320e7149_8fdb090f1f5.png'),
(14, 9098, 'TONY VARGHESE', 'KODANAD', 'm', 1, 'tony@gmail.com', '9876543190', 'MBA18034', '7896', 'Voted', 'aa5bc34d6bd5933dd73ae2251bff88e8_c5fe723c249d01.png'),
(15, 9067, 'ANGEL ANTONY', 'ALUVA', 'f', 5, 'angel@gmail.com', '7876543120', 'MHRM18004', '2563', 'Voted', 'eb6de71b465f16507cadfb2347a9d98f_94ec325fefdc.jpg'),
(16, 9045, 'NOYAL  ELDHO', 'KORATTY', 'm', 11, 'noyal@gmail.com', '9567356778', 'BCA18008', '7865', 'Voted', '59fd223a8dd5c3330270343842c0daa6_d45bdd7eab08afe74d6b.jpg'),
(17, 9023, 'NISHA S', 'MATTOOR', 'f', 9, 'nisha@gmail.com', '9876543120', 'MEDIA18003', '6578', 'Voted', '6d4cc77f57f9dddf6862cb7168a08d2f_b37c1b3d56b116.jpg'),
(18, 9846, 'VARSHA PAUL', 'KALADY', 'f', 5, 'varsha@gmail.com', '9876567812', 'MHRM18018', '8976', 'Unvoted', 'c4caeed371d0e0dc4a6ea62b9e297914_e6d9b9d8e0d77f5d77f5.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

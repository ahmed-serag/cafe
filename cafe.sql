-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 12:02 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `section` int(11) DEFAULT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `section`, `item_name`, `price`) VALUES
(7, 3, 'tea ment', '15'),
(6, 3, 'Green Tea', '15'),
(5, 3, 'Tea', '13'),
(8, 3, 'tea Flavor', '15'),
(9, 3, 'capeuccino', '25'),
(10, 3, 'capeuccino Argentino', '30'),
(11, 3, 'Nescafe', '20'),
(12, 3, 'Late', '25'),
(13, 3, 'Mocca', '30'),
(14, 3, 'espresso', '20'),
(15, 3, 'espresso-single', '15'),
(16, 3, 'meciato', '25'),
(17, 3, 'American-Coffe', '23'),
(18, 3, 'Turkish-coffe', '19'),
(19, 3, 'French-coffe', '20'),
(20, 3, 'Nuetella-coffe', '30'),
(21, 3, 'Hot-seader', '20'),
(22, 3, 'monte bianco', '27'),
(23, 3, 'Caffe-frabae', '30'),
(24, 3, 'addetional-flavor', '5'),
(25, 2, 'Mango', '30'),
(26, 2, 'plum(barkok)', '30'),
(27, 2, 'kiwi', '30'),
(28, 2, 'grip-fruit', '30'),
(29, 2, 'strawberry', '25'),
(30, 2, 'Lemon', '20'),
(31, 2, 'Lemon-ment', '25'),
(32, 2, 'pineapple', '25'),
(33, 2, 'guava', '25'),
(34, 2, 'banana', '25'),
(35, 2, 'Peache', '25'),
(36, 2, 'watermelon', '27'),
(37, 2, 'Orange', '20'),
(38, 1, 'ugarit-fruit', '30'),
(39, 1, 'ugarit-banana', '28'),
(40, 1, 'ugarit-mango', '30'),
(41, 1, 'ugarit-fragolla', '30'),
(42, 1, 'ugrait-nuts', '30'),
(43, 1, 'kiwi-cup', '30'),
(44, 1, 'fruit-cup', '35'),
(45, 1, 'nuts-cup', '35'),
(46, 1, 'milkshake', '30'),
(47, 1, 'banana-split', '35'),
(48, 1, 'fruit salad', '35'),
(49, 4, 'florida', '25'),
(50, 4, 'new zealand', '25'),
(51, 4, 'tag-mahal', '25'),
(52, 4, 'sweetlove', '25'),
(53, 4, 'vergin-cappe', '25'),
(54, 4, 'vergin-cola', '25'),
(55, 4, 'coconut-banana', '25'),
(56, 4, 'chococo', '30'),
(57, 4, 'sea waves', '25'),
(58, 4, 'remas coktail', '25'),
(59, 5, 'chocolate-vage', '30'),
(60, 5, 'braunis', '35'),
(61, 5, 'molten-cake', '35'),
(62, 5, 'cheese-cake', '35'),
(63, 5, 'fruits-tart', '30'),
(64, 5, 'blackforest', '30'),
(65, 5, 'carrot-cake', '30'),
(67, 6, 'فطيره سكر', '10'),
(68, 6, 'فطيره  كاستر', '12'),
(69, 6, 'فطيره بغاشه', '15'),
(70, 6, 'فطيره  بغاشه جوزهند', '18'),
(71, 6, 'فطيره قرفه', '18'),
(72, 6, 'فطيره بلح', '20'),
(73, 6, 'فطيره  قشطه عسل', '35'),
(74, 6, 'فطيره اناناس', '40'),
(75, 6, 'فطيره شوكلاته', '25'),
(76, 6, 'فطيره شوكلاته بندق', '40'),
(77, 6, 'فطيره شوكلاته فستق', '45'),
(78, 6, 'فطيره بقلاوه بندق', '40'),
(79, 6, 'فطيره بقلاوه فستق', '45'),
(80, 6, 'فطيره أبل سيدر', '45'),
(81, 6, 'فطيره  السلطان', '50'),
(82, 6, 'فطيره  كهرمانه', '55'),
(83, 6, 'فطيره بيكا حلو', '65'),
(117, 9, 'سيزون سلاد', '20'),
(85, 7, 'spagetti salsa', '20'),
(86, 7, 'spagetti beef', '25'),
(87, 7, 'spagetti hotdog', '25'),
(88, 7, 'spagetti basterma', '30'),
(89, 7, 'spagetti sosiis', '25'),
(90, 7, 'spagetti mashroom', '25'),
(91, 7, 'negresco checkin', '35'),
(92, 7, 'spagetti mix beef', '35'),
(93, 7, 'spagetti kalimari', '33'),
(94, 7, 'spagetti  tuna', '33'),
(95, 7, 'spagetti shremp', '35'),
(96, 7, 'spagetti seafood', '45'),
(97, 8, 'فراخ سوري', '20'),
(98, 8, 'شاورما فراخ سوري', '25'),
(99, 8, 'شاورما لحم سوري', '25'),
(100, 8, 'سجق باتي بان', '15'),
(101, 8, 'هوتدوج  بيتيبان', '15'),
(102, 8, 'كفته سوري', '20'),
(103, 8, 'كفته بيتي بان', '15'),
(104, 8, 'شيش طاووق سوري', '25'),
(105, 8, 'جبنه مقليه سوري', '20'),
(106, 8, 'جبنه مقليه بيتي بان', '15'),
(107, 8, 'جمبري بيتي بان', '20'),
(108, 8, 'بطاطس سوري', '12'),
(109, 8, 'بطاطس بيتي بان', '10'),
(110, 8, 'برجر لحمه', '15'),
(111, 8, 'تشيزبرجر لحمه', '20'),
(112, 8, 'تشيكن برجر ', '15'),
(113, 8, 'تشكن تشيز برجر', '20'),
(114, 8, 'موزاريلا برجر', '20'),
(115, 8, 'اسكالوب بانيه', '15'),
(116, 8, 'تشكن كرسبي', '15'),
(118, 9, 'فتوش', '25'),
(119, 9, 'جريك', '30'),
(120, 9, 'شيف سلاد', '35'),
(121, 9, 'شلادنواز', '30'),
(122, 9, 'سيزر', '35'),
(123, 9, 'باناتيه سلاد', '35'),
(124, 9, 'تشكن باستا سلاد', '35'),
(125, 9, 'تونه باستا', '30'),
(126, 9, 'ثوميه', '5'),
(127, 9, 'طحينه', '5'),
(128, 9, 'بنجر سلاد', '7'),
(129, 10, 'fajita beef', '35'),
(130, 10, 'fajita checkin', '35'),
(131, 10, 'fajita seafood', '40'),
(132, 12, 'منقوشه جبن', '25'),
(133, 12, 'منقوشه جبن اكسترا', '30'),
(134, 12, 'منقوشه جبن اكسترا مكس', '35'),
(135, 12, 'منقوشه هوت دوج', '25'),
(136, 12, 'منقوشه هوت دوج اكسترا', NULL),
(137, 11, 'فرخه مشويه', '60'),
(138, 11, 'كفته مشويه', '60'),
(139, 11, 'سمكه حار لبنانيه', '65'),
(140, 13, 'margrita pizza', '25'),
(141, 13, 'shipola pizza', '30'),
(142, 13, 'sheedr', '30'),
(143, 13, 'kiri', '30'),
(144, 13, 'mix cheese', '35'),
(145, 13, 'sosis', '35'),
(146, 13, 'sausage pizza', '35'),
(147, 13, 'Bastrama pizza', '40'),
(148, 13, 'بيزا مفروم', '35'),
(149, 13, 'بيتزا سلامي', '45'),
(150, 13, 'pizza chekin', '35'),
(151, 13, 'pizza smoke turk', '40'),
(152, 13, 'pizza super soprem', '45'),
(153, 13, 'pizza tuna', '35'),
(154, 13, 'pizza inshuga', '35'),
(155, 13, 'pizza mashroom', '35'),
(156, 13, 'pizza shremp', '45'),
(157, 13, 'pizza kalimari', '45'),
(158, 13, 'pizza seafood', '55'),
(159, 14, 'خضار', '20'),
(160, 14, 'فطيره رومي', '35'),
(161, 14, 'فطيره موزريلا', '40'),
(162, 14, 'فطيره كيري', '35'),
(163, 14, 'فطيره شيدر', '35'),
(164, 14, 'فطيره مشكل جبن', '45'),
(165, 14, 'فطيره سجق', '30'),
(166, 14, 'فطيره لحم مفروم', '30'),
(167, 14, 'فطيره سوسيس', '30'),
(168, 14, 'فطيره بسطرمه', '40'),
(169, 14, 'فطيره مشكل لحوم', '50'),
(170, 14, 'فطيره فراخ', '40'),
(171, 14, 'فطيره مشروم', '30'),
(172, 14, 'فطيره تونه', '35'),
(173, 14, 'فطيره جمبري', '45'),
(174, 14, 'فطيره سبيط', '45'),
(175, 14, 'فطيره سيفوود', '50'),
(176, 14, 'فطيره بيكا عروس البحر', '60'),
(177, 15, 'فته شاورما لحم', '30'),
(178, 15, 'فته شاورما فراخ', '30'),
(179, 15, 'فته شاورما ميكس', '35');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `name`) VALUES
(2, 'Fresh Drinks'),
(3, 'hot drinks'),
(4, 'coctail fresh'),
(5, 'cake'),
(6, 'Sweet Pies'),
(7, 'pasta'),
(8, 'sandwitches'),
(9, 'salads'),
(10, 'fajita'),
(11, 'main dish'),
(12, 'mankosha'),
(13, 'pizza'),
(14, 'pies'),
(15, 'syrian'),
(16, 'other'),
(17, 'othersss');

-- --------------------------------------------------------

--
-- Table structure for table `tablefood`
--

CREATE TABLE `tablefood` (
  `id` int(11) NOT NULL,
  `food` int(11) DEFAULT NULL,
  `table` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tablefood`
--

INSERT INTO `tablefood` (`id`, `food`, `table`, `quantity`, `total`) VALUES
(127, 39, 6, 1, 28),
(124, 13, 5, 1, 30),
(123, 6, 5, 1, 15),
(122, 26, 5, 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `price` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `name`, `status`, `price`) VALUES
(3, 'table1', 0, '0'),
(2, 'table2', 0, '0'),
(7, 'table6', 0, '0'),
(4, 'table3', 0, '0'),
(5, 'table4', 1, '75'),
(6, 'table5', 1, '28'),
(8, 'table7', 0, '0'),
(9, 'table8', 0, '0'),
(10, 'table9', 0, '0'),
(11, 'table10', 0, '0'),
(12, 'table11', 0, '0'),
(13, 'table12', 0, '0'),
(14, 'table13', 0, '0'),
(15, 'table14', 0, '0'),
(16, 'table15', 0, '0'),
(17, 'table16', 0, '0'),
(18, 'table17', 0, '0'),
(19, 'table18', 0, '0'),
(20, 'table19', 0, '0'),
(21, 'table20', 0, '0'),
(22, 'Owner', 0, '0'),
(23, 'table21', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(1024) DEFAULT NULL,
  `password` varchar(1024) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tablefood`
--
ALTER TABLE `tablefood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tablefood`
--
ALTER TABLE `tablefood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

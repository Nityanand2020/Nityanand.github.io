-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2019 at 10:33 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pro_id` varchar(10) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `price` int(255) UNSIGNED NOT NULL,
  `pro_img` varchar(500) NOT NULL,
  `CUST_ID` varchar(20) NOT NULL,
  `qty` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`pro_id`, `pname`, `price`, `pro_img`, `CUST_ID`, `qty`) VALUES
('102', 'apple12', 5500, 'apple-iphone-8.jpeg', 'kishan1234', 3),
('4a3', 'kidwear', 670, 'ktw14.jpeg', 'kishan1234', 4),
('102', 'apple12', 5500, 'apple-iphone-8.jpeg', 'anand mukund1234', 1),
('2b2', 'lower', 400, 'bw6.jpeg', 'anand mukund1234', 1),
('101', 'apple05', 5000, 'apple-iphone-6s.jpeg', 'vineet1234', 1),
('201', 'headphone21', 200, 'boat-rockerz.jpeg', 'vineet1234', 1),
('302', 'telivision 32', 15000, 'iffalcon-tv1.jpeg', 'vineet1234', 1),
('402', 'lapp42', 30000, 'dell-lp3.jpeg', 'vineet1234', 1),
('502', 'camera52', 3000, 'canon-cam16.jpeg', 'vineet1234', 1),
('2a2', 'shirt', 300, 'tp3.jpeg', 'vineet1234', 1),
('2b2', 'lower', 400, 'bw6.jpeg', 'vineet1234', 1),
('2c2', 'shoes', 700, 'fw5.jpeg', 'vineet1234', 1),
('2c2', 'shoes', 700, 'fw5.jpeg', 'vineet1234', 1),
('2d2', 'bag', 780, 'ass12.jpeg', 'vineet1234', 1),
('3a3', 'frock', 678, 'wtw1.jpeg', 'vineet1234', 1),
('3a2', 'saree', 345, 'wtw8.jpeg', 'vineet1234', 1),
('3c2', 'footwearf', 897, 'wfw6.jpeg', 'vineet1234', 1),
('3d2', 'bag', 780, 'wass13.jpeg', 'vineet1234', 1),
('4d3', 'kidtop', 230, 'ktw16.jpeg', 'vineet1234', 1),
('4a3', 'kidwear', 670, 'ktw14.jpeg', 'vineet1234', 1),
('4b4', 'kid footwear', 300, 'kfw4.jpeg', 'vineet1234', 1),
('5a3', 'kid accessories', 400, 'kt14.jpeg', 'vineet1234', 1),
('2c2', 'shoes', 700, 'fw5.jpeg', '1234', 1),
('2b2', 'lower', 400, 'bw6.jpeg', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `MOBILE` int(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `CUST_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NAME`, `EMAIL`, `MOBILE`, `PASSWORD`, `CUST_ID`) VALUES
('vineet', 'vineet@gmail.com', 2147483647, 'vineet@123', 'vineet1234'),
('kishan', 'kishan@gmail.com', 8929928, 'kishan@123', 'kishan1234'),
('anand mukund', 'anand@gmail.com', 2147483647, 'anand@123', 'anand mukund1234'),
('', '', 0, '', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` varchar(255) NOT NULL,
  `pro_name` varchar(20) NOT NULL,
  `pro_category` varchar(20) NOT NULL,
  `pro_sub_category` varchar(20) NOT NULL,
  `pro_price` text NOT NULL,
  `pro_brand` varchar(10) NOT NULL,
  `pro_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `pro_category`, `pro_sub_category`, `pro_price`, `pro_brand`, `pro_img`) VALUES
('101', 'apple05', 'phone', 'Mobiles', '5000', 'apple', 0x6170706c652d6970686f6e652d36732e6a706567),
('102', 'apple12', 'phone', 'Mobiles', '5500', 'apple', 0x6170706c652d6970686f6e652d382e6a706567),
('103', 'apple13', 'phone', 'Mobiles', '6000', 'apple', 0x666c69706b6172742e6a706567),
('104', 'samsung14', 'phone', 'Mobiles', '6500', 'samsung', 0x686f6e6f722d392e6a706567),
('105', 'samsung15', 'phone', 'Mobiles', '7500', 'samsung', 0x6d692d6d692d6d69782d322e6a706567),
('106', 'redmi16', 'phone', 'Mobiles', '8000', 'redmi', 0x7265616c6d6520312e6a706567),
('107', 'nokia17', 'phone', 'Mobiles', '8000', 'nokia', 0x7265646d692d6e6f74652d352e6a706567),
('108', 'motorola18', 'phone', 'Mobiles', '7500', 'motorola', 0x73616d73756e672d67616c6178792d61382e6a706567),
('201', 'headphone21', 'headphone', 'mobile accessories', '200', 'delvo', 0x626f61742d726f636b65727a2e6a706567),
('202', 'headphone22', 'headphone', 'mobile accessories', '500', 'samsung', 0x626f61742d6865616470686f6e652e6a706567),
('203', 'headphone23', 'headphone', 'mobile accessories', '300', 'boat', 0x73616665736565642d6865616470686f6e652e6a706567),
('204', 'headphone24', 'headphone', 'mobile accessories', '250', 'samsung', 0x736f6e792d6d64722e6a706567),
('205', 'headphone25', 'headphone', 'mobile accessories', '800', 'apple', 0x6170706c652d616972706f64732e6a706567),
('206', 'headphone26', 'headphone', 'mobile accessories', '400', 'sony', 0x736f6e792d77682d63683530302d2e6a706567),
('301', 'telivision 31', 'telivision ', 'telivision', '10000', 'sony', 0x626c617570756e6b742d747631322e6a706567),
('302', 'telivision 32', 'tv', 'telivision', '15000', 'falcon', 0x696666616c636f6e2d7476312e6a706567),
('303', 'telivision 33', 'tv', 'telivision', '20000', 'sony', 0x6d6172712d747631342e6a706567),
('304', 'telivision 34', 'tv', 'telivision', '30000', 'samsung', 0x73616d73756e672d3774762e6a706567),
('305', 'telivision 35', 'tv', 'telivision', '30000', 'samsung', 0x73616d73756e672d7476352e6a706567),
('306', 'telivision 36', 'lcd', 'telivision', '24000', 'sony', 0x736f6e792d747631362e6a706567),
('307', 'telivision 37', 'led', 'telivision', '15000', 'sony', 0x6d6172712d747631342e6a706567),
('308', 'led', 'tv', 'telivision', '10000', 'local', 0x6c67207476392e6a706567),
('401', 'lappy41', 'lappy', 'laptop', '25000', 'hp', 0x68702d6c70362e6a706567),
('402', 'lapp42', 'lappy', 'laptop', '30000', 'dell', 0x64656c6c2d6c70332e6a706567),
('403', 'lapp43', 'lappy', 'laptop', '45000', 'lenovo', 0x68702d6c7031352e6a706567),
('404', 'lapp44', 'lappy', 'laptop', '29000', 'acer', 0x61636572206c6170746f70322e6a706567),
('405', 'lappy45', 'lappy', 'laptop', '34000', 'apple', 0x6170706c652d616972312e6a706567),
('406', 'lappy46', 'lappy', 'laptop', '23000', 'apple', 0x617375732d6c70342e6a706567),
('501', 'camera51', 'camera', 'camera', '3000', 'sony', 0x63616e6e6f6e2063616d31322e6a706567),
('502', 'camera52', 'cannon', 'camera', '3000', 'cannon', 0x63616e6f6e2d63616d31362e6a706567),
('503', 'samsung53', 'camera', 'camera', '4000', 'sony', 0x63616d382e6a706567),
('504', 'camera54', 'camera', 'camera', '4500', 'sam', 0x6e612d64333530302d6e696b6f6e2d63616d31332e6a706567),
('2a1', 'shirt', 'shirt', 'shirt', '200', 'heko', 0x7470312e6a706567),
('2a2', 'shirt', 'tshirt', 'shirt', '300', 'hdj', 0x7470332e6a706567),
('2a3', 'jknvcnd', 'coat', 'shirt', '600', 'hbe', 0x747031342e6a706567),
('2a4', 'sweter', 'shirt', 'shirt', '500', 'cotu', 0x7470322e6a706567),
('2b1', 'trouser', 'trouser', 'bottom', '300', 'dfg', 0x627731302e6a706567),
('2b2', 'lower', 'lower', 'bottom', '400', 'hdjk', 0x6277362e6a706567),
('2b3', 'jeans', 'jeans', 'bottom', '600', 'gdhj', 0x6277332e6a706567),
('2b4', 'pant', 'pant', 'bottom', '500', 'gskk', 0x627731342e6a706567),
('2c1', 'shoes', 'shoes', 'footwear', '700', 'play', 0x6577332e6a706567),
('2c2', 'shoes', 'shoes', 'footwear', '700', 'shrre', 0x6677352e6a706567),
('2c3', 'sports', 'spoerts', 'footwear', '800', 'team', 0x6677312e6a706567),
('2c4', 'formal', 'formal', 'footwear', '890', 'gfhj', 0x667731362e6a706567),
('2d1', 'men accesory', 'purse', 'menacc', '569', 'djs', 0x61737331332e6a706567),
('2d2', 'bag', 'bag', 'menacc', '780', 'gsjk', 0x61737331322e6a706567),
('2d3', 'belt', 'belt', 'menacc', '345', 'dgjks', 0x617373372e6a706567),
('2d4', 'belt', 'belt', 'menacc', '236', 'jsk', 0x617373392e6a706567),
('3a1', 'women top', 'women top', 'wotop', '455', 'hekw', 0x777477352e6a706567),
('3a2', 'saree', 'saree', 'wotop', '345', 'banarsee', 0x777477382e6a706567),
('3a3', 'frock', 'frock', 'wotop', '678', 'hdj', 0x777477312e6a706567),
('3a4', 'kurti', 'kurti', 'wotop', '654', 'jskd', 0x777477322e6a706567),
('3b1', 'lady lower', 'lady lower', 'wobottom', '458', 'hdjk', 0x776277342e6a706567),
('3b2', 'lower', 'lower', 'wobottom', '599', 'gdhj', 0x776277332e6a706567),
('3b3', 'lower', 'lower', 'wobottom', '876', 'gsjk', 0x7762773131312e6a706567),
('3b4', 'lower', 'lower', 'wobottom', '784', 'gsk', 0x776277372e6a706567),
('3c1', 'footwear', 'footwear', 'wofoot', '1200', 'klj', 0x776677332e6a706567),
('3c2', 'footwearf', 'footwear', 'wofoot', '897', 'srt', 0x776677362e6a706567),
('3c3', 'footwear', 'footwear', 'wofoot', '290', 'wer', 0x776677382e6a706567),
('3c4', 'footwear', 'footwear', 'wofoot', '678', 'wjjw', 0x77667731342e6a706567),
('3d1', 'accessories', 'accessories', 'woacc', '890', 'asd', 0x7761737331362e6a706567),
('3d2', 'bag', 'bag', 'woacc', '780', 'uiop', 0x7761737331332e6a706567),
('3d3', 'bag', 'bag', 'woacc', '890', 'wert', 0x77617373312e6a706567),
('3d4', 'lady bag', 'lady bag', 'woacc', '879', 'jkl', 0x7761737331342e6a706567),
('4a1', 'kidtop', 'kidtop', 'kidtop', '453', 'cbnv', 0x6b7477312e6a706567),
('4b2', 'kidtop', 'kidtop', 'kidtop', '345', 'jklo', 0x6b7477342e6a706567),
('4d3', 'kidtop', 'kidtop', 'kidtop', '230', 'poi', 0x6b747731362e6a706567),
('4d4', 'kid wear', 'kid wear', 'kidtop', '340', 'vch', 0x6b747731322e6a706567),
('4a2', 'kidbottom', 'kid bottom', 'kidbot', '567', 'fga', 0x6b747731312e6a706567),
('4a3', 'kidwear', 'kidwear', 'kidbot', '670', 'gahs', 0x6b747731342e6a706567),
('4a5', 'kid wear', 'kid wear', 'kidbot', '670', 'hsio', 0x6b747731362e6a706567),
('4a4', 'kidwear', 'kidwear', 'kidbot', '230', 'hdksi', 0x6b747731352e6a706567),
('4b4', 'kid footwear', 'kidfootwear', 'kidfoot', '300', 'udty', 0x6b6677342e6a706567),
('4b5', 'kid footwear', 'kidfootwear', 'kidfoot', '320', 'poiy', 0x6b6677372e6a706567),
('4b6', 'kid footwear', 'kidfootwear', 'kidfoot', '108', 'fhncj', 0x6b667731362e6a706567),
('4b3', 'kid footwear', 'kidfootwear', 'kidfoot', '380', 'tgyu', 0x6b6677312e6a706567),
('5a1', 'kid accessories', 'kid accessories', 'kidacc', '200', 'klsd', 0x6b74312e6a706567),
('5a2', 'kid accessories', 'kid accessories', 'kidacc', '300', 'wrte', 0x6b74342e6a706567),
('5a3', 'kid accessories', 'kid accessories', 'kidacc', '400', 'jsio', 0x6b7431342e6a706567),
('5a4', 'kid accessories', 'kid accessories', 'kidacc', '280', 'duie', 0x6b7431352e6a706567);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 02:35 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `image` varchar(80) NOT NULL,
  `we_h` varchar(500) NOT NULL,
  `we_para` varchar(500) NOT NULL,
  `detail` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `we_h`, `we_para`, `detail`) VALUES
(2, 'DB_images/pics/about.jpg', 'WE ARE TRUSTED', 'We have a strict code and we do not compromise on our ingredients. High quality input leads to high quality output, hence we are the “Concierge to Quality”, which is our tagline.', 'We started with very basic packaging, but as we grew in popularity and demand, we came up with the packaging for O’Brownies. Everything was designed by us and it was a process that took a lot of time as we wanted everything to be perfect. Not only did we want the product to taste good but also look good. What makes us unique is our process of developing foo. \" We have a strict code and we do not compromise on our ingredients. High quality input leads to high quality output, hence we are the “Concierge to Quality”, which is our tagline..'),
(3, 'DB_images/pics/i1.jpg', 'WE ARE PROFESSIONAL', 'Once we came up with a product that could be sold in the market, we sampled it with a lot of people. The brownies were sampled in different offices for our friends and when the feedback was 96 to 97 percent positive, t', ''),
(4, 'DB_images/pics/i4.jpg', 'WE ARE EXPERT', 'After three years of hard work, with our day jobs and baking at night, and delivering each package ourselves, we launched heavenly bites in Karachi', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(80) NOT NULL,
  `cat_image` varchar(80) NOT NULL,
  `type_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `type_id_fk`) VALUES
(16, 'Brownies', 'DB_images/pics/cat.jpg', 1),
(17, 'Mini Cakes', 'DB_images/pics/cattt.jpg', 1),
(18, 'Cakes', 'DB_images/pics/cakes.jpg', 1),
(19, 'Muffins', 'DB_images/pics/muffin.jpg', 1),
(20, 'Snacks', 'DB_images/pics/sncatt.jpg', 1),
(21, 'Sandwiches', 'DB_images/pics/sandwichcat.jpg', 4),
(22, 'Bread', 'DB_images/pics/bread.jpg', 3),
(23, 'deal', 'DB_images/pics/deal.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'dgd', 'duaanaeem341@gmail.com', 'aasas', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `footer_con`
--

CREATE TABLE `footer_con` (
  `id` int(11) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mon_to_fri` varchar(80) NOT NULL,
  `sat` varchar(80) NOT NULL,
  `close` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer_con`
--

INSERT INTO `footer_con` (`id`, `address`, `phone`, `email`, `mon_to_fri`, `sat`, `close`) VALUES
(1, 'Address: Michael I. Days 3756 Preston Street Wichita, KS 67213', '+1-888 705 770', 'duaa@gmail.com', 'Monday - Friday: 08.00am to 05.00pm', 'Saturday: 10.00am to 08.00pm', 'Sunday: Closed');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `order_id_fk` int(11) NOT NULL,
  `product_id_fk` int(11) NOT NULL,
  `quantity` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `order_id_fk`, `product_id_fk`, `quantity`) VALUES
(1, 1, 13, '1'),
(2, 6, 8, '1'),
(3, 8, 7, '1'),
(4, 8, 6, '1'),
(5, 9, 9, '1'),
(6, 9, 11, '1'),
(7, 10, 10, '2'),
(8, 10, 11, '1'),
(9, 11, 12, '1'),
(10, 11, 8, '1'),
(11, 11, 9, '1'),
(12, 12, 11, '1'),
(13, 14, 9, '1'),
(14, 15, 9, '1');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_date` varchar(80) NOT NULL,
  `total_price` varchar(80) NOT NULL,
  `address` varchar(80) NOT NULL,
  `contact` varchar(80) NOT NULL,
  `status` varchar(80) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `username` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_date`, `total_price`, `address`, `contact`, `status`, `user_id_fk`, `username`) VALUES
(1, '2023-08-26', '900', ' ', '', 'Pending', 0, ''),
(2, '2023-08-26', '900', ' ', '', 'Pending', 0, ''),
(3, '2023-08-26', '900', ' ', '', 'Pending', 0, ''),
(4, '2023-08-26', '900', ' ', '', 'Pending', 0, ''),
(5, '2023-08-26', '900', ' aa', 'cc', 'Pending', 0, 'aa'),
(6, '2023-08-26', '550', ' ee', 'ee', 'Pending', 0, 'ee'),
(7, '2023-08-26', '550', ' ee', 'ee', 'Pending', 0, 'ee'),
(8, '2023-08-26', '500', ' ee', 'ee', 'Pending', 0, 'ee'),
(9, '2023-08-27', '800', ' pppppppppppppppp', 'pppppppp', 'Pending', 0, 'ppppppppppp'),
(10, '2023-08-27', '1350', ' vv', 'qq', 'Pending', 0, 'hello'),
(11, '2023-08-28', '1800', ' ', '', 'Pending', 0, ''),
(12, '2023-09-01', '350', ' ', '', 'Pending', 0, ''),
(13, '2023-09-01', '350', ' ', '', 'Pending', 0, ''),
(14, '2023-09-01', '450', ' ', '', 'Pending', 0, ''),
(15, '2023-09-01', '450', ' gfjuftjf', 'hhhhklgkf', 'Pending', 0, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE `our_team` (
  `id` int(11) NOT NULL,
  `team_name` varchar(80) NOT NULL,
  `team_pro` varchar(500) NOT NULL,
  `team_detail` varchar(500) NOT NULL,
  `team_image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `team_name`, `team_pro`, `team_detail`, `team_image`) VALUES
(1, 'Duaa', 'Web Developer', 'We have a strict code and we do not compromise on our ingredients. High quality input leads to high quality output, hence we are the “Concierge to Quality”, which is our tagline.', 'DB_images/pics/t1.jpg'),
(2, 'Sara', 'Baker', 'We have a strict code and we do not compromise on our ingredients. High quality input leads to high quality output, hence we are the “Concierge to Quality”, which is our tagline.', 'DB_images/pics/t2.jpg'),
(3, 'Sana', 'Dealer', 'We have a strict code and we do not compromise on our ingredients. High quality input leads to high quality output, hence we are the “Concierge to Quality”, which is our tagline.', 'DB_images/pics/t3.jpg'),
(4, 'Ayeza', 'user dealer', 'We have a strict code and we do not compromise on our ingredients. High quality input leads to high quality output, hence we are the “Concierge to Quality”, which is our tagline.', 'DB_images/pics/t4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(80) NOT NULL,
  `p_price` varchar(80) NOT NULL,
  `p_quantity` varchar(80) NOT NULL,
  `p_description` varchar(80) NOT NULL,
  `p_image` varchar(80) NOT NULL,
  `cat_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_price`, `p_quantity`, `p_description`, `p_image`, `cat_id_fk`) VALUES
(4, 'Fries With 1 Chicken Strip', '600', '10', 'French fries with one chicken strip – the perfect snack for all hours of the day', 'DB_images/pics/Chicken-Strip.png', 20),
(5, 'Chicken Strips', '250', '15', 'You can make any mealtime more delicious with our juicy, tender, extra-crispy bo', 'DB_images/pics/Chicken-s.png', 20),
(6, 'BBQ Sandwich', '300', '4', 'bbq sanwitch one serve', 'DB_images/pics/bbq.jpg', 21),
(7, 'Chicken Club Sandwich', '200', '4', 'club sandwich for one serve', 'DB_images/pics/chicken.jpg', 21),
(8, 'Savage Munchy', '550', '10', 'You can never have enough brownies and these fudgy brownies with a delicious nut', 'DB_images/pics/Savage-Munchy.png', 16),
(9, 'Caramel Hit', '450', '5', 'The hits just keep on coming with our yummy Caramel Hit Brownies as we take our ', 'DB_images/pics/Caramel-Hit.png', 16),
(10, 'Cranky Walnut', '500', '5', 'An off-the-wall ice-cream scoop checkered with our signature walnutty brownie.', 'DB_images/pics/Cranky-Walnut.png', 16),
(11, 'Mean Almond', '350', '5', 'Warm and fudgy with premium vanilla ice-cream melting on top, this nutty brownie', 'DB_images/pics/Mean-Almond-.png', 16),
(12, 'Red Velvet Mini Cake', '800', '10', 'Our silky Red Velvet Mini Cake is tender, moist and perfectly creamy. This class', 'DB_images/pics/Mini-Red-Velvet.png', 17),
(13, 'Lotus Biscoff Mini cake', '900', '4', 'Our silky Red Velvet Mini Cake is tender, moist and perfectly creamy. This class', 'DB_images/pics/lotus-biscoff-mini.jpeg', 17),
(14, 'Nutella Doze Mini Cake', '900', '4', 'Our decadent Nutella Doze Mini Cake features multiple layers of moist and tender', 'DB_images/pics/nutella-dose-mino-cake-.jpg', 17),
(15, 'New York Baked Mini Cheesecake', '950', '4', 'Does it get better than a classic cheesecake? This miniature version of our New ', 'DB_images/pics/Mini-New-York-Cheese-Cake.png', 17),
(16, 'Choco Caramel 3 Pound cake', '3,000', '3', 'This chocolate caramel cake is amazingly moist and features the most delicious c', 'DB_images/pics/choco-carameljpg-.jpg', 18),
(17, 'French Vanilla 3 Pound Cake', '3,200', '3', 'Full of amazing vanilla flavor, with creamy, fluffy buttercream frosting, this c', 'DB_images/pics/french-vanilajpg-.jpg', 18),
(18, 'Chocolate Fudge Cake', '3,200', '4', 'Our chocolate fudge cake is so rich and decadent, you won’t spare a crumb. With ', 'DB_images/pics/chocofudgejpg-.jpg', 18),
(19, 'Double Chocolate Muffin', '350', '6', 'These really are the best chocolate muffins you’ll ever have so grab these delic', 'DB_images/pics/Double-Chocolate.png', 19),
(20, 'Mini Chocolate Basket', '5500', '10', '6 chocopoke brownies 1, Mini chocolate caramel cake, 1 pie(apple/Walnut), 1 Nute', 'DB_images/pics/minibasket.jpg', 16),
(21, 'Big Basket Celebration', '8000', '10', '12 Chocopoke Brownies  1 Mini Red Velvet Cake  1 Mini Chocolate Caramel cake  1 ', 'DB_images/pics/big2.jpg', 16),
(22, 'Chicken Cheese Bread', '400', '10', 'This braided bread is stuffed with a chicken filling that’s been bathed in cream', 'DB_images/pics/Chicken-Bread.png', 22),
(23, 'Milky bread', '150', '4', 'Our scrumptious Bread is sure to become a family-favourite breakfast staple with', 'DB_images/pics/Milky-Bread-.png', 22),
(24, 'Walnut Banana Bread', '550', '4', 'This is an upgraded version of our original banana bread and it’s packed with lo', 'DB_images/pics/Toasted-Banana-Bread.png', 22),
(25, 'Garlic Rusk', '170', '4', 'A favourite with all ages, try our delicious Garlic Rusks for a perfect tea-time', 'DB_images/pics/garlic-rusk-.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`) VALUES
(3, 'Admin'),
(4, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `email`, `message`) VALUES
(1, 'duaa', 'duaanaeem341@gmail.com', 'hellooo'),
(2, 'saad', 'duaanaeem341@gmail.com', 'nice'),
(3, 'sana', 'duaanaeem341@gmail.com', 'great job');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Dessert'),
(3, 'Breads'),
(4, 'Savoury');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `last_name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `role_id_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `last_name`, `email`, `password`, `role_id_fk`) VALUES
(1, 'duaa', 'khan', 'dua@gmail.com', 'aptech', 3),
(2, 'saad', 'khan', 'user@gmail.com', 'aptech', 4),
(4, 'ss', 'ss', '', 'ss', 4),
(5, 'ss', 'ss', '', '', 4),
(6, 'bakery', 'khan', '', 'aptech', 4),
(7, 'ddd', 'ddd', 'duaa@gmail.com', 'aptech', 4),
(8, 'ddd', 'ddd', 'duaa@gmail.com', 'aptech', 4),
(9, 'duaaa', 'd', 'duaa@gmail.com', 'aptech', 4),
(10, 'zehra', 'ngb', 'duaanaeem341@gmail.com', 'dbd', 4),
(11, 'zehra', 'ngb', 'duaanaeem341@gmail.com', 'dg', 4),
(12, 'saaad', 'khan', 'duaanaeem341@gmail.com', 'aptech', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `type_id_fk` (`type_id_fk`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_con`
--
ALTER TABLE `footer_con`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `order_id_fk` (`order_id_fk`),
  ADD KEY `product_id_fk` (`product_id_fk`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cat_id_fk` (`cat_id_fk`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id_fk` (`role_id_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_con`
--
ALTER TABLE `footer_con`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`type_id_fk`) REFERENCES `type` (`type_id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`order_id_fk`) REFERENCES `order` (`order_id`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`product_id_fk`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id_fk`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id_fk`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

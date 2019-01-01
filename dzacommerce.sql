-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 25, 2018 at 07:10 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dzacommerce`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `get_list_section_order`
-- (See below for the actual view)
--
CREATE TABLE `get_list_section_order` (
`sec_order` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `list_section`
--

CREATE TABLE `list_section` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `type_sec_id` int(11) NOT NULL,
  `sec_order` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_section`
--

INSERT INTO `list_section` (`id`, `section_id`, `name`, `type_sec_id`, `sec_order`, `date_created`) VALUES
(1, 1, 'header', 1, 1, '2018-12-19 16:44:46'),
(2, 2, 'header', 1, 2, '2018-12-19 16:44:46'),
(3, 1, 'technologies', 3, 3, '2018-12-19 17:35:19'),
(4, 1, 'about', 2, 4, '2018-12-20 01:39:05'),
(5, 1, 'features', 4, 5, '2018-12-20 02:22:16'),
(6, 1, 'product', 6, 6, '2018-12-20 05:18:51'),
(7, 1, 'video', 7, 7, '2018-12-20 07:20:07'),
(8, 1, 'faq', 8, 8, '2018-12-21 16:07:00'),
(9, 1, 'download', 9, 9, '2018-12-21 16:19:33'),
(10, 1, 'team', 10, 10, '2018-12-21 16:26:05'),
(11, 1, 'review', 11, 13, '2018-12-21 16:33:31'),
(12, 1, 'buy', 12, 14, '2018-12-21 17:07:14'),
(13, 1, 'newsletter', 13, 15, '2018-12-21 17:07:40'),
(14, 1, 'footer', 14, 16, '2018-12-21 17:07:59'),
(30, 6, '', 1, 11, '2018-12-25 18:02:29'),
(31, 13, '', 14, 12, '2018-12-25 18:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `section_about`
--

CREATE TABLE `section_about` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `jargon` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image_position` enum('left','right') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'right',
  `button_text` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `button_link` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_about`
--

INSERT INTO `section_about` (`id`, `title`, `description`, `jargon`, `image`, `image_position`, `button_text`, `button_link`, `date_created`) VALUES
(1, 'About The Product edit', 'Cupiditate non numquam eius modi tempora incidunt, ut aliquid ex ea voluptate. Porro quisquam est, omnis iste natus. Ipsam voluptatem, quia dolor repellendus earum rerum necessitatibus saepe eveniet, ut. Nemo enim ad minima veniam. Ea voluptate velit esse, quam nihil molestiae. Architecto beatae vitae dicta sunt. edit', 'Be Acctive', '2ef96283a319e154b9ef0f8f50f30406.jpg', 'right', 'asd edit', '#edit', '2018-12-20 01:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `section_buy`
--

CREATE TABLE `section_buy` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_buy`
--

INSERT INTO `section_buy` (`id`, `title`, `button_text`, `button_link`) VALUES
(1, 'BUY THIS GREAT TEMPLATE TODAY edit', 'BUY NOW edit', '# edit');

-- --------------------------------------------------------

--
-- Table structure for table `section_download`
--

CREATE TABLE `section_download` (
  `id` int(11) NOT NULL,
  `title1` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `title3` varchar(255) DEFAULT NULL,
  `description` text,
  `image_bg` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link_apple` varchar(255) DEFAULT NULL,
  `image_apple` varchar(255) DEFAULT NULL,
  `link_android` varchar(255) DEFAULT NULL,
  `image_android` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_download`
--

INSERT INTO `section_download` (`id`, `title1`, `title2`, `title3`, `description`, `image_bg`, `image`, `link_apple`, `image_apple`, `link_android`, `image_android`) VALUES
(1, 'DOWNLOAD edit', 'AWESOME edit', 'APP edit', 'Alias consequatur aut rerum hic tenetur a sapiente delectus. Sunt, explicabo laboriosam, nisi ut perspiciatis, unde omnis dolor sit, amet consectetur. edit', 'aac39234d9a1656c381426f8e40cb554.jpg', '1c9bd08f27c1588b0f0b9fdc16ad6594.png', '# edit', 'btn-apple.png', '# edit', 'btn-google.png');

-- --------------------------------------------------------

--
-- Table structure for table `section_faq`
--

CREATE TABLE `section_faq` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_faq`
--

INSERT INTO `section_faq` (`id`, `title`, `description`, `date_created`) VALUES
(1, 'FAQ', 'Iusto odio dignissimos ducimus, qui explicabo minima veniam dolorem. Nihil impedit, quo voluptas assumenda est, qui ratione voluptatem sequi nesciunt esse neque cumque nihil molestiae.\r\n\r\n', '2018-12-20 07:34:29'),
(2, NULL, NULL, '2018-12-23 13:49:13'),
(3, NULL, NULL, '2018-12-23 13:50:19');

-- --------------------------------------------------------

--
-- Table structure for table `section_faq_items`
--

CREATE TABLE `section_faq_items` (
  `id` int(11) NOT NULL,
  `sfaq_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_faq_items`
--

INSERT INTO `section_faq_items` (`id`, `sfaq_id`, `title`, `description`) VALUES
(1, 1, 'Getting Started', 'spernatur aut rerum facilis est eligendi optio, cumque nihil molestiae. Nobis est eligendi optio, cumque nihil molestiae. Ea voluptate velit esse, quam nihil impedit, quo minus id, quod maxime. Vitae dicta sunt, explicabo minima veniam, quis nostrum exercitationem.'),
(2, 1, 'How To Set Up The Gadget?', 'Non numquam eius modi tempora incidunt, ut enim ipsam explicabo voluptatem, quia dolor. Aut officiis debitis aut quis officiis debitis. Cupiditate non provident, similique nostrum cumque nihil eligendi optio sunt in culpa, qui laudantium, totam rem aperiam.'),
(3, 1, 'How To Use', 'Aspernatur aut rerum facilis est eligendi optio, cumque nihil molestiae. Nobis est eligendi optio, cumque nihil molestiae. Ea voluptate velit esse, quam nihil impedit, quo minus id, quod maxime. Vitae dicta sunt, explicabo minima veniam, quis nostrum.');

-- --------------------------------------------------------

--
-- Table structure for table `section_features`
--

CREATE TABLE `section_features` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image_position` enum('left','right','mid') COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_features`
--

INSERT INTO `section_features` (`id`, `title`, `description`, `image`, `image_position`, `date_created`) VALUES
(1, 'FEATURES 1 edit', 'Harum quidem rerum necessitatibus saepe eveniet, ut aliquid ex ea voluptate velit voluptatem accusantium doloremque laudantium doloribus asperiores repellat iusto odio dignissimos. edit', '324e5ba68ddbcae8d8752da24ddc61d5.png', 'right', '2018-12-25 10:20:38');

-- --------------------------------------------------------

--
-- Table structure for table `section_features_items`
--

CREATE TABLE `section_features_items` (
  `id` int(11) NOT NULL,
  `sf_id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_features_items`
--

INSERT INTO `section_features_items` (`id`, `sf_id`, `title`, `description`, `icon`) VALUES
(1, 1, 'icon-diamond', 'Dolor sit, aspernatur cum soluta nobis est aut reiciendis aut est quaerat voluptatem.', 'icon-diamond'),
(2, 1, 'icon-diamond', 'Dolor sit, aspernatur cum soluta nobis est aut reiciendis aut est quaerat voluptatem.', 'icon-diamond'),
(3, 1, 'ECO-FRIENDLY', 'Dolor sit, aspernatur cum soluta nobis est aut reiciendis aut est quaerat voluptatem.', 'icon-diamond'),
(4, 1, 'ECO-FRIENDLY', 'Dolor sit, aspernatur cum soluta nobis est aut reiciendis aut est quaerat voluptatem.', 'icon-diamond'),
(5, 1, 'ECO-FRIENDLY', 'Dolor sit, aspernatur cum soluta nobis est aut reiciendis aut est quaerat voluptatem.', 'icon-diamond'),
(6, 1, 'ECO-FRIENDLY', 'Dolor sit, aspernatur cum soluta nobis est aut reiciendis aut est quaerat voluptatem.', 'icon-diamond'),
(8, 1, 'tes', 'halo', 'icon-settings');

-- --------------------------------------------------------

--
-- Table structure for table `section_footer`
--

CREATE TABLE `section_footer` (
  `id` int(11) NOT NULL,
  `l_title` varchar(255) DEFAULT NULL,
  `l_description` varchar(255) DEFAULT NULL,
  `l_bottom_text` varchar(255) DEFAULT NULL,
  `r_title` varchar(255) DEFAULT NULL,
  `r_description` varchar(255) DEFAULT NULL,
  `r_phone` varchar(255) DEFAULT NULL,
  `r_email` varchar(255) DEFAULT NULL,
  `r_address` varchar(255) DEFAULT NULL,
  `r_image` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_footer`
--

INSERT INTO `section_footer` (`id`, `l_title`, `l_description`, `l_bottom_text`, `r_title`, `r_description`, `r_phone`, `r_email`, `r_address`, `r_image`, `date_created`) VALUES
(1, 'Olli.Olli. edit', 'Nobis est eligendi optio, cumque nihil molestiae. Ea voluptate velit aliquid ex ea voluptate velit voluptatem accusantium doloremque laudantium esse, quam nihil impedit, quo minus id, quod maxime. edit', 'Olli - Single Product Landing Page. All rights reserved. edit', 'GET IN TOUCH edit', 'If you have any questions or suggestions, please contact us, or you can come to visit us in our cozy office. edit', '(+11) 123-555-4567 2', 'mail@example.com edit', '1465 Mountain St, CA 91104, USA edit', 'footer.jpg', '2018-12-21 17:03:43'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-23 13:50:48'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-23 16:21:13'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-23 16:21:20'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-25 17:48:41'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-25 17:50:02'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-25 17:50:33'),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-25 17:50:45'),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-25 17:52:42'),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-25 17:54:05'),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-25 17:55:03'),
(12, 'asdklas', 'alksjd', 'alskdjlsakjdas', 'alksjd', 'laskjdlsajd', '98798s', 'aslkdjas', 'aslkdj', '1b633bb5cd2511cd9f40001c35d96c5e.jpg', '2018-12-25 17:58:56'),
(13, 'kjlsakdj', 'lksajd', 'lsakdlaskjd', 'lksjad', 'laslkjdlaskjd', '832794832', 'laskjd', '3294783298', 'ed922646f27bb012be77fbfde8f75dbb.jpg', '2018-12-25 18:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `section_footer_links`
--

CREATE TABLE `section_footer_links` (
  `id` int(11) NOT NULL,
  `sfoot_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_footer_links`
--

INSERT INTO `section_footer_links` (`id`, `sfoot_id`, `title`, `link`) VALUES
(1, 1, 'Privacy ', '#'),
(2, 1, ' Terms of Use', '#'),
(3, 1, 'Security', '#');

-- --------------------------------------------------------

--
-- Table structure for table `section_footer_social`
--

CREATE TABLE `section_footer_social` (
  `id` int(11) NOT NULL,
  `sfoot_id` int(11) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `facebook` varchar(100) NOT NULL DEFAULT '',
  `twitter` varchar(100) NOT NULL DEFAULT '',
  `google` varchar(100) NOT NULL DEFAULT '',
  `instagram` varchar(100) NOT NULL DEFAULT '',
  `behance` varchar(100) NOT NULL DEFAULT '',
  `dribbble` varchar(100) NOT NULL DEFAULT '',
  `linkedin` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_footer_social`
--

INSERT INTO `section_footer_social` (`id`, `sfoot_id`, `link`, `facebook`, `twitter`, `google`, `instagram`, `behance`, `dribbble`, `linkedin`) VALUES
(1, 1, 'asdsad', 'asdsad edit', 'sadsa edit', 'sadsadsadsad edit', 'edit', 'tes', '', ''),
(3, 10, NULL, '', '', '', '', '', '', ''),
(4, 11, NULL, 'asdasdas', '', '', '', '', '', ''),
(5, 12, NULL, '', '', '', '', '', '', ''),
(6, 13, NULL, 'sakdjaslkd', 'lkasjdasd', '', '', 'asdklasjdk', 'alskdjasd', '');

-- --------------------------------------------------------

--
-- Table structure for table `section_header`
--

CREATE TABLE `section_header` (
  `id` int(11) NOT NULL,
  `title_first` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `title_highlight` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title_last` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `button_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_main` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_secondary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color_button` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_header`
--

INSERT INTO `section_header` (`id`, `title_first`, `title_highlight`, `title_last`, `description`, `button_link`, `button_text`, `image`, `color_main`, `color_secondary`, `color_button`, `date_created`) VALUES
(1, 'Present your edit', 'awesome edit', 'product edit', 'Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum necessitatibus praesentium voluptatum deleniti atque corrupti, quos dolores eos.\n\nedit', '#product edit', 'buy edit', 'e4f28f2158a5f90003ed04d8c336c528.png', '#e9eced', '#43bccd', '#43bccd', '2018-12-19 16:48:01'),
(2, 'Present your', 'awesome', 'product', 'Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum necessitatibus praesentium voluptatum deleniti atque corrupti, quos dolores eos.', '#product', 'buy', '800bb9b79db6e0d16ec3e6e4bff8c6cb.png', '#e9eced', '#43bccd', '#43bccd', '2018-12-19 16:48:01'),
(3, '', '', '', '', '', '', '', '', '', '', '2018-12-23 13:50:33'),
(4, 'Present your edit', 'awesome edit', 'product edit', 'asdsa sadlksa dasdkasd', '#detik', 'skdasd', 'd49157487a6645fb08441539d9b3b194.png', '', '', '', '2018-12-24 16:52:59'),
(5, 'coba ', 'lagi', 'dong', 'halooo', 'button', 'ini', '305c6b8110b571196ca849a47f0cc508.png', '', '', '', '2018-12-25 17:59:03'),
(6, 'lakdjs', 'lkajsd', 'askdas', '.asjkd/salkjd', 'slakjd', 'jkasd', '001760eb47c7828f4a28101e692f32fc.png', '', '', '', '2018-12-25 18:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `section_newsletter`
--

CREATE TABLE `section_newsletter` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `spam_text` varchar(255) DEFAULT NULL,
  `placeholder_text` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_newsletter`
--

INSERT INTO `section_newsletter` (`id`, `title`, `description`, `spam_text`, `placeholder_text`) VALUES
(1, 'NEWSLETTER edit', 'Iusto odio dignissimos ducimus, qui dolorem. Nihil impedit, quo voluptas assumenda est, qui ratione voluptatem sequi aboriosam, nisi ut perspiciatis nesciunt neque. edit', 'We don\'t like spam too edit', 'Enter your email edit');

-- --------------------------------------------------------

--
-- Table structure for table `section_product`
--

CREATE TABLE `section_product` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `type` enum('type_1','type_2','type_3') NOT NULL DEFAULT 'type_1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_product`
--

INSERT INTO `section_product` (`id`, `title`, `description`, `type`) VALUES
(1, 'PRODUCTS', 'Voluptatem, quia non numquam eius modi tempora incidunt, ut aliquid. Aperiam eaque ipsa, quae ab illo', 'type_2'),
(2, '', '', 'type_1');

-- --------------------------------------------------------

--
-- Table structure for table `section_product_items`
--

CREATE TABLE `section_product_items` (
  `id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `description2` varchar(200) DEFAULT NULL,
  `price` float DEFAULT '0',
  `price_dsc` float DEFAULT '0',
  `image` varchar(200) NOT NULL,
  `image_bg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_product_items`
--

INSERT INTO `section_product_items` (`id`, `prd_id`, `title`, `description`, `description2`, `price`, `price_dsc`, `image`, `image_bg`) VALUES
(2, 1, 'SPORTS WATCH', 'Basic Green Version', NULL, 150, 120.5, 'watch-green.png', 'product.jpg'),
(3, 1, 'SPORTS WATCH', 'Basic Green Version', NULL, 150, 0, 'watch-green.png', 'product.jpg'),
(4, 1, 'SPORTS WATCH', 'Basic Green Version', NULL, 150, 0, 'watch-green.png', 'product.jpg'),
(9, 1, 'sadsad', 'asdasd', 'sadasdsadasd', 213, 13213, '0b66f3153fce119337801cdfbfb6a5af.png', '12d9c8197b85274c224f9c383b35268e.png'),
(10, 1, 'asdasdasd', 'asadass dsad asdsad asd', 'asdsadas', 2321, 123213, '9ad0a7cc6aa7a0b862dbc3bb8413791d.png', 'ddf997f489026166c44702770594ff01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `section_review`
--

CREATE TABLE `section_review` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_review`
--

INSERT INTO `section_review` (`id`, `title`, `description`, `date_created`) VALUES
(1, 'REVIEWS edit', 'Quisquam est, omnis dolor sit, aspernatur aut odit. Voluptatum deleniti atque corrupti, quos dolores et voluptates repudiandae sint et perferendis doloribus asperiores molestiae. edit', '2018-12-21 16:33:48');

-- --------------------------------------------------------

--
-- Table structure for table `section_review_customers`
--

CREATE TABLE `section_review_customers` (
  `id` int(11) NOT NULL,
  `srev_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_review_customers`
--

INSERT INTO `section_review_customers` (`id`, `srev_id`, `name`, `image`, `link`) VALUES
(1, 1, 'dev magazine', 'review-4.png', '#'),
(2, 1, 'dev magazine', 'review-4.png', '#'),
(3, 1, 'dev magazine', 'review-4.png', '#'),
(4, 1, 'dev magazine', 'review-4.png', '#');

-- --------------------------------------------------------

--
-- Table structure for table `section_review_items`
--

CREATE TABLE `section_review_items` (
  `id` int(11) NOT NULL,
  `srev_id` int(11) DEFAULT NULL,
  `review` text,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_review_items`
--

INSERT INTO `section_review_items` (`id`, `srev_id`, `review`, `name`, `position`, `image`) VALUES
(1, 1, 'Voluptates repudiandae sint et accusamus et sunt dolore. Dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores. Nobis est eligendi optio, cumque nihil impedit. Facere possimus, omnis dolor sit, aspernatur aut perferendis.', 'Jody Logan', 'CEO, First Company', 'comment-author-1.jpg'),
(2, 1, 'Voluptates repudiandae sint et accusamus et sunt dolore. Dignissimos ducimus, qui blanditiis praesentium voluptatum deleniti atque corrupti, quos dolores. Nobis est eligendi optio, cumque nihil impedit. Facere possimus, omnis dolor sit, aspernatur aut perferendis.', 'Jody Logan', 'CEO, First Company', 'comment-author-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `section_team`
--

CREATE TABLE `section_team` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_team`
--

INSERT INTO `section_team` (`id`, `title`, `description`, `date_created`) VALUES
(1, 'OUR TEAM edit', 'Numquam eius modi tempora incidunt, ut et harum quidem rerum facilis. Odit aut rerum hic tenetur a sapiente delectus. Repudiandae sint et quas molestias excepturi sint obcaecati. Ipsam voluptatem, quia dolor sit, aspernatur. edit', '2018-12-21 16:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `section_team_items`
--

CREATE TABLE `section_team_items` (
  `id` int(11) NOT NULL,
  `steam_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_team_items`
--

INSERT INTO `section_team_items` (`id`, `steam_id`, `name`, `description`, `photo`) VALUES
(1, 1, 'Penny Cross', 'Lead Engineer', 'member-1.jpg'),
(2, 1, 'Penny Cross', 'Lead Engineer', 'member-1.jpg'),
(3, 1, 'Penny Cross', 'Lead Engineer', 'member-1.jpg'),
(4, 1, 'Penny Cross', 'Lead Engineer', 'member-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `section_technologies`
--

CREATE TABLE `section_technologies` (
  `id` int(11) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_technologies`
--

INSERT INTO `section_technologies` (`id`, `title`, `description`, `image`, `date_created`) VALUES
(1, 'TECHNOLOGIES', 'Nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aut commodi autem rerum facilis. Cupiditate non recusandae temporibus autem vel illum edit', '560185d8eb3b51ee319351e7f8aedd01.jpg', '2018-12-19 17:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `section_technologies_items`
--

CREATE TABLE `section_technologies_items` (
  `id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `icon` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section_technologies_items`
--

INSERT INTO `section_technologies_items` (`id`, `st_id`, `icon`, `title`, `description`) VALUES
(22, 1, 'icon-shield', 'fitur 1', 'ini fitur 1'),
(23, 1, 'icon-diamond', 'fitur 2', 'ini fitur 2'),
(24, 1, 'icon-rocket', 'fitur 3', 'ini fitur 3'),
(25, 1, 'icon-bulb', 'fitur 4', 'ini fitur 4');

-- --------------------------------------------------------

--
-- Table structure for table `section_video`
--

CREATE TABLE `section_video` (
  `id` int(11) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `date_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_video`
--

INSERT INTO `section_video` (`id`, `link`, `date_created`) VALUES
(1, 'FzVR_fymZw4', '2018-12-20 07:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `type_section`
--

CREATE TABLE `type_section` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `db_table` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `type_section`
--

INSERT INTO `type_section` (`id`, `name`, `db_table`) VALUES
(1, 'header', 'section_header'),
(2, 'about', 'section_about'),
(3, 'technologies', 'section_technologies'),
(4, 'features', 'section_features'),
(5, 'gallery', 'section_gallery'),
(6, 'product', 'section_product'),
(7, 'video', 'section_video'),
(8, 'faq', 'section_faq'),
(9, 'download', 'section_download'),
(10, 'team', 'section_team'),
(11, 'review', 'section_review'),
(12, 'buy', 'section_buy'),
(13, 'newsletter', 'section_newsletter'),
(14, 'footer', 'section_footer');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_list_section`
-- (See below for the actual view)
--
CREATE TABLE `view_list_section` (
`id` int(11)
,`section_id` int(11)
,`name` varchar(200)
,`type_sec_id` int(11)
,`sec_order` int(11)
,`date_created` timestamp
,`ts_name` varchar(200)
,`db_table` varchar(200)
);

-- --------------------------------------------------------

--
-- Structure for view `get_list_section_order`
--
DROP TABLE IF EXISTS `get_list_section_order`;

CREATE VIEW `get_list_section_order`  AS  select `list_section`.`sec_order` AS `sec_order` from `list_section` order by `list_section`.`sec_order` desc limit 1 ;

-- --------------------------------------------------------

--
-- Structure for view `view_list_section`
--
DROP TABLE IF EXISTS `view_list_section`;

CREATE VIEW `view_list_section`  AS  select `ls`.`id` AS `id`,`ls`.`section_id` AS `section_id`,`ls`.`name` AS `name`,`ls`.`type_sec_id` AS `type_sec_id`,`ls`.`sec_order` AS `sec_order`,`ls`.`date_created` AS `date_created`,`ts`.`name` AS `ts_name`,`ts`.`db_table` AS `db_table` from (`list_section` `ls` join `type_section` `ts`) where (`ls`.`type_sec_id` = `ts`.`id`) order by `ls`.`sec_order` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list_section`
--
ALTER TABLE `list_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_about`
--
ALTER TABLE `section_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_buy`
--
ALTER TABLE `section_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_download`
--
ALTER TABLE `section_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_faq`
--
ALTER TABLE `section_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_faq_items`
--
ALTER TABLE `section_faq_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_features`
--
ALTER TABLE `section_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_features_items`
--
ALTER TABLE `section_features_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_footer`
--
ALTER TABLE `section_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_footer_links`
--
ALTER TABLE `section_footer_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_footer_social`
--
ALTER TABLE `section_footer_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_header`
--
ALTER TABLE `section_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_newsletter`
--
ALTER TABLE `section_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_product`
--
ALTER TABLE `section_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_product_items`
--
ALTER TABLE `section_product_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_review`
--
ALTER TABLE `section_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_review_customers`
--
ALTER TABLE `section_review_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_review_items`
--
ALTER TABLE `section_review_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_team`
--
ALTER TABLE `section_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_team_items`
--
ALTER TABLE `section_team_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_technologies`
--
ALTER TABLE `section_technologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_technologies_items`
--
ALTER TABLE `section_technologies_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_video`
--
ALTER TABLE `section_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_section`
--
ALTER TABLE `type_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list_section`
--
ALTER TABLE `list_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `section_about`
--
ALTER TABLE `section_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_buy`
--
ALTER TABLE `section_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_download`
--
ALTER TABLE `section_download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_faq`
--
ALTER TABLE `section_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section_faq_items`
--
ALTER TABLE `section_faq_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section_features`
--
ALTER TABLE `section_features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_features_items`
--
ALTER TABLE `section_features_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `section_footer`
--
ALTER TABLE `section_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `section_footer_links`
--
ALTER TABLE `section_footer_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section_footer_social`
--
ALTER TABLE `section_footer_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section_header`
--
ALTER TABLE `section_header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section_newsletter`
--
ALTER TABLE `section_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section_product`
--
ALTER TABLE `section_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `section_product_items`
--
ALTER TABLE `section_product_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `section_review`
--
ALTER TABLE `section_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_review_customers`
--
ALTER TABLE `section_review_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section_review_items`
--
ALTER TABLE `section_review_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_team`
--
ALTER TABLE `section_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_team_items`
--
ALTER TABLE `section_team_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `section_technologies`
--
ALTER TABLE `section_technologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section_technologies_items`
--
ALTER TABLE `section_technologies_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `section_video`
--
ALTER TABLE `section_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type_section`
--
ALTER TABLE `type_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

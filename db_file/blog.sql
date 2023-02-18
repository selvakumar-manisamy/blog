-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2023 at 06:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1-published\r\n0-draft',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `description`, `is_published`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'blog2', 'uploads/1676645221_download.png', 'Lorem ipsum dolor sit amet consectetur adipiscing, elit posuere taciti gravida eget, etiam platea suspendisse fusce ac. Conubia ad eu sem tempus purus semper eleifend tortor, tincidunt vel dictum aliquam mauris vivamus. Ante habitasse suspendisse egestas turpis tristique cursus magna ultricies, etiam nisi quisque nec rutrum hac odio, est platea natoque suscipit nascetur tortor netus. Interdum vel tortor ligula scelerisque pharetra senectus aliquam, molestie platea montes duis cum faucibus felis, dictum nunc ad tempus sapien nam. Varius aliquet mattis ullamcorper mi luctus donec cum purus nunc, fermentum nulla aliquam odio at ante dui placerat proin, penatibus pulvinar montes tellus sociis consequat augue cubilia. Dignissim sollicitudin laoreet fusce lectus condimentum ridiculus vulputate hac massa in tellus, urna fringilla non leo donec ut ad inceptos mauris.', 0, '2023-02-16 19:31:48', '2023-02-17 20:17:01', NULL),
(5, 'blog 1', 'uploads/1676645208_1648014162_cbse-term-11.jpg', 'Lorem ipsum dolor sit amet consectetur adipiscing elit senectus sodales sociosqu, nostra erat molestie et tellus inceptos dui ad sagittis aliquet, natoque libero tortor pharetra cursus elementum eleifend placerat imperdiet. Condimentum praesent enim leo erat blandit nisl nullam imperdiet netus donec dapibus, sagittis a ultrices per etiam phasellus rhoncus proin lacinia. Habitasse luctus ultricies nascetur himenaeos augue iaculis cubilia lacinia condimentum bibendum, congue purus vestibulum donec volutpat facilisi sodales ac magnis. Nam eu tellus convallis fermentum pellentesque egestas, ridiculus mauris taciti odio donec gravida et, integer nunc phasellus molestie nulla. Taciti ante integer erat tempus proin nam pellentesque pulvinar lacinia euismod bibendum, habitant porttitor phasellus nec aenean pharetra parturient enim mi non, lobortis consequat quam convallis litora netus dui rhoncus in fermentum. Per penatibus convallis eget mauris mollis hendrerit mi primis, malesuada netus eleifend nullam sed nam. Bibendum litora fermentum sollicitudin dictumst vehicula erat tempus, leo mus sagittis sociosqu imperdiet suspendisse facilisi congue, duis dapibus condimentum praesent ridiculus parturient. Purus mauris nec senectus mus ante taciti libero habitant montes pharetra semper egestas, nisi justo commodo fames elementum conubia fusce vehicula augue hac per, sociis rutrum sem faucibus placerat tincidunt phasellus eget venenatis duis suspendisse.', 1, '2023-02-16 19:41:30', '2023-02-17 20:16:48', NULL),
(6, 'selva', 'uploads/1676647810_fff.png', 'Lorem ipsum dolor sit amet consectetur adipiscing elit lobortis ac, parturient sed metus himenaeos faucibus mollis ante sociosqu eros, platea dictum arcu taciti commodo augue donec congue. Eros curae risus consequat nunc massa netus ut sagittis, sodales arcu nisl lectus curabitur luctus est litora integer, justo cras ultricies gravida lobortis magna etiam. Malesuada lacus facilisis eleifend at dictum potenti ac fames bibendum posuere ullamcorper, consequat proin pulvinar orci pretium dictumst conubia lacinia sociosqu nisi tempor, nunc suscipit lectus cursus aptent nam et neque nullam lobortis. Convallis tempor suscipit dapibus proin morbi eu gravida sed nullam, consequat primis hendrerit commodo dui mi nibh sagittis, ac tristique scelerisque urna habitant porttitor viverra venenatis. Interdum eget congue semper eros turpis curae auctor facilisi, penatibus vestibulum volutpat sollicitudin vel id magna in feugiat, nisi fusce urna pretium ad sapien cursus.', 1, '2023-02-16 19:47:21', '2023-02-17 21:00:10', NULL),
(7, 'selva', 'uploads/1676647815_istockphoto-173944980-170667a.jpg', 'asdfsad', 1, '2023-02-16 20:07:32', '2023-02-17 21:00:15', NULL),
(9, 'asda', 'uploads/1676697969_dummy-Ä«mage-generator-tool.jpg', 'asdasd', 1, '2023-02-18 10:56:09', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

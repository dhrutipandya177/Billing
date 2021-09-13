-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2021 at 01:15 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cer_course_list`
--

CREATE TABLE `cer_course_list` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cer_course_list`
--

INSERT INTO `cer_course_list` (`id`, `name`) VALUES
(86, 'CERTIFICATE IN FINANCIAL ACCOUNTING'),
(87, 'CERTIFICATE IN AUTOCAD'),
(88, 'DIPLOMA IN WEB DESIGNING & DEVELOPING'),
(89, 'CERTIFICATE IN WEB DESIGNING'),
(90, 'DIPLOMA IN WEB DESIGNING'),
(91, 'ADVANCE DIPLOMA IN WEB DESIGNING & DEVELOPING'),
(92, 'DIPLOMA IN INTERIOR DESIGNING'),
(93, 'CERTIFICATE IN PHOTOSHOP'),
(94, 'CERTIFICATE IN COREL DRAW'),
(95, 'CERTIFICATE IN ILLUSTRATOR'),
(96, 'CERTIFICATE IN GOOGLE SKETCHUP'),
(97, 'CERTIFICATE IN LUMION'),
(98, 'CERTIFICATE IN 3Ds MAX'),
(99, 'CERTIFICATE IN ANIMATION'),
(100, 'CERTIFICATE IN HTML5 & CSS3'),
(101, 'CERTIFICATE IN V-RAY'),
(102, 'CERTIFICATE IN PHP'),
(103, 'CERTIFICATE IN C PROGRAMMING'),
(104, 'CERTIFICATE IN C++'),
(105, 'CERTIFICATE IN BASIC COMPUTER'),
(106, 'CERTIFICATE IN AUTOCAD & SOLIDWORKS'),
(107, 'CERTIFICATE IN SOLIDWORKS'),
(108, 'CERTIFICATE IN CREO PARAMETRIC'),
(109, 'CERTIFICATE IN AUTOCAD & CREO PARAMETRIC'),
(110, 'CERTIFICATE IN AUTOCAD 2D ELECTRICAL'),
(111, 'CERTIFICATE IN SPOKEN ENGLISH'),
(112, 'CERTIFICATE IN CORE JAVA'),
(113, 'DIPLOMA IN ADVANCE JAVA '),
(114, 'DIPLOMA IN VIDEO EDITING'),
(115, 'DIPLOMA IN ADVANCE GRAPHICS'),
(116, 'CERTIFICATE IN CORE PHP PROJECT TRAINING'),
(117, 'CERTIFICATE IN PHP CODEIGNITER PROJECT TRAINING'),
(118, 'CERTIFICATE IN GOOGLE SKETCHUP & PHOTOSHOP'),
(119, 'DIPLOMA IN AUTOCAD & SOLIDWORKS & CREO PARAMETRIC'),
(120, 'CERTIFICATE IN AUTOCAD & GOOGLE SKETCHUP'),
(121, 'CERTIFICATE IN ASP.NET WITH C#'),
(122, 'CERTIFICATE IN ELECTRICAL AUTOCAD'),
(123, 'CERTIFICATE IN REVIT ARCHITECTURE'),
(124, 'DIPLOMA IN C & JAVA & FLASH'),
(125, 'DIPLOMA IN AUTOCAD & 3Ds MAX'),
(126, 'CERTIFICATE IN PHOTOSHOP & ILLUSTRATOR'),
(127, 'CERTIFICATE IN WORD & EXCEL'),
(128, 'CERTIFICATE IN AUTOCAD 2D'),
(129, 'CERTIFICATE IN AFTER EFFECT'),
(130, 'CERTIFICATE IN AUTOCAD 2D & CREO PARAMETRIC'),
(131, 'CERTIFICATE IN AUTOCAD & REVIT ARCHITECTURE'),
(132, 'CERTIFICATE IN FASHION DESIGNING'),
(133, 'CERTIFICATE IN PHOTOSHOP & COREL DRAW'),
(134, 'DIPLOMA IN C & C++ & JAVA'),
(135, 'CERTIFICATE IN  ANDROID PROJECT TRAINING'),
(136, 'CERTIFICATE IN EMBROIDERY'),
(137, 'CERTIFICATE IN IOS TRAINING'),
(138, 'CERTIFICATE IN AUTOCAD 2D & GOOGLE SKETCHUP'),
(139, 'CERTIFICATE IN DIGITAL PRINTING'),
(140, 'DIPLOMA IN MS OFFIC & ACCOUNTING MANAGEMENT'),
(141, 'DIPLOMA IN ADVANCE ANDROID'),
(142, 'CERTIFICATE IN MS OFFICE'),
(143, 'CERTIFICATE IN EDIUS'),
(144, 'DIPLOMA IN ANIMATION'),
(145, 'DIPLOMA IN ADVANCE GRAPHICS & VEDIO EDITING'),
(146, 'CERTIFICATE IN JEWELLERY DESIGN'),
(147, 'DIPLOMA IN WEB PROGRAMMING'),
(148, 'CERTIFICATE IN ETABS'),
(149, 'DIPLOMA IN AUTOCAD & 3Ds MAX & REVIT ARCHITECTURE'),
(150, 'COURSE ON COMPUTER CONCEPTS PLUS (CCC PLUS )'),
(151, 'DIPLOMA IN FASHION DESIGNING'),
(152, 'DIPLOMA IN ADVANCE IOS TRAINING'),
(153, 'CERTIFICATE IN ADVANCE DIGITAL PRINTING'),
(154, 'DESKTOP PUBLICITY (DTP)'),
(155, 'CERTIFICATE IN WEB DEVELOPING'),
(156, 'DIPLOMA IN WEB DEVELOPING'),
(157, 'COURSE ON COMPUTER CONCEPTS (CCC)'),
(158, 'CERTIFICATE IN C PROGRAMMING & C++'),
(159, 'DIPLOMA IN AUTOCAD & 3DS MAX & GOOGLE SKETCHUP'),
(160, 'DIPLOMA IN COMPUTER PROGRAMMING & WEB DEVELOPING'),
(161, 'DIPLOMA IN FRONT END CODING'),
(162, 'DIPLOMA IN CIVIL CAD & DRAFTING'),
(163, 'ADVANCE DIPLOMA 3D INTERIOR,EXTERIOR & STRUCTURE'),
(164, 'DIPLOMA IN COMPUTER APPLICATIONS'),
(165, 'ADVANCE DIPLOMA IN COMPUTER APPLICATIONS'),
(166, 'CERTIFICATE IN STAAD.PRO'),
(167, 'CERTIFICATE IN ANDROID'),
(168, 'CERTIFICATE IN CORE ANDROID'),
(169, 'DIPLOMA IN INTERIOR EXTERIOR '),
(170, 'CERTIFICATE IN GOOGLE SKETCHUP & 3DS MAX'),
(171, 'DIPLOMA IN FASHION DESIGN'),
(172, 'DIPLOMA IN COMPUTER PROGRAMMING'),
(173, 'DIPLOMA IN COMPUTER AIDED FASHION DESIGNING'),
(174, 'CERTIFICATE IN DIGITAL PRINTING FOR FASHION'),
(175, 'DIPLOMA IN BUSINESS COMPUTER APPLICATION '),
(176, 'CERTIFICATE IN DIGITAL MARKETING'),
(177, 'CERTIFICATE IN COMPUTER PROGRAMMING'),
(179, 'DIPLOMA IN GRAPHICS DESIGN'),
(180, 'CERTIFICATE IN CATIA'),
(181, 'CERTIFICATE IN A.CAD & CATIA'),
(182, 'DIPLOMA IN MULTIMEDIA'),
(183, 'DIPLOMA IN COMPUTER PROGRAMMING & CAD'),
(184, 'CERTIFICATE IN AUTOCAD 2D & 3DS MAX & LUMION'),
(185, 'CERTIFICATE IN NX CAD'),
(186, 'CERTIFICATE IN AFTER EFFECT & EDIUS'),
(187, 'CERTIFICATE IN CAD & CAM'),
(188, 'CERTIFICATE IN BASIC ANDROID'),
(189, 'CERTIFICATE IN AUTOCAD & SKETCHUP & 3D MAX'),
(190, 'CERTIFICATE IN CORE PYTHON'),
(191, 'CERTIFICATE IN ANIMATE CC'),
(192, ' DIPLOMA IN COMPUTER BASIC & CAD/CAM '),
(194, 'CERTIFICATE IN ETHICAL HACKING'),
(195, 'CERTIFICATE IN GOOGLE SKETCHUP & LUMION'),
(196, 'CERTIFICATE IN GRAPHICS'),
(197, 'CERTIFICATE IN PRIMIERE PRO'),
(201, 'DIPLOMA IN HARDWARE & NETWORKING'),
(202, 'CERTIFICATE IN ADVANCE PYTHON'),
(203, 'CERTIFICATE IN PHOTOSHOP & V-RAY'),
(204, 'DIPLOMA IN GAME DESIGNING & DEVELOPING'),
(205, 'CERTIFICATE IN PHOTOSHOP & ILLUSTRATOR & DRAWING '),
(206, 'CERTIFICATE IN C & C++ & JAVA'),
(207, 'CERTIFICATE IN AFTER EFFECTS & PREMIERE PRO'),
(208, 'DIPLOMA IN FINANCIAL ACCOUNTING'),
(209, 'CERTIFICATE IN TYPING'),
(210, 'CERTIFICATE IN WORDPRESS'),
(211, 'CERTIFICATE IN GOOGLE SKETCHUP & REVIT ARCHITECTURE & LUMION & PHOTOSHOP'),
(212, ' CERTIFICATE IN LARAVEL'),
(213, ' CERTIFICATE IN PHOTOSHOP & PREMIERE'),
(214, 'DIPLOMA 3D INTERIOR,EXTERIOR & STRUCTURE'),
(215, 'CERTIFICATE IN ANSYS'),
(216, 'DIPLOMA IN ACCOUNTING MANAGEMENT'),
(217, 'CERTIFICATE IN MAYA & 3D MAX & CORONA'),
(218, 'CERTIFICATE IN SKETCH'),
(219, 'CERTIFICATE IN TALLY.ERP 9'),
(220, 'CERTIFICATE IN DJANGO'),
(221, 'CERTIFICATE IN 3Ds MAX & CORONA'),
(222, 'CERTIFICATE IN SKETCH'),
(223, 'CERTIFICATE IN GUJARATI TYPING (WPM 25)'),
(224, 'CERTIFICATE IN ENGLISH TYPING (WPM 35)'),
(225, 'CERTIFICATE IN REVIT ARCHITECTURE & GOOGLE SKETCHUP'),
(226, 'ADVANCE WEB DESIGNING & DEVELOPING'),
(227, 'CERTIFICATE IN BUSINESS COMPUTER APPLICATION'),
(228, 'FUNDAMENTALS OF MULTIMEDIA & PROGRAMMING'),
(229, 'CERTIFICATE IN UI/UX DESIGNING'),
(230, 'DIPLOMA IN GAME DESIGNING'),
(231, 'CERTIFICATE IN MICROSOFT EXCEL'),
(232, ' CERTIFICATE IN INFORMATION SYSTEMS SECURITY'),
(233, ' CERTIFICATE IN INFORMATION SYSTEMS AUDITOR'),
(234, 'DIPLOMA IN BUSINESS MANAGEMENT'),
(235, 'CERTIFICATE IN C PROGRAMMING & C++ & CORE PYTHON'),
(236, 'CERTIFICATE IN CLOUD BASED ACCOUNTING'),
(237, 'CERTIFICATE IN ADVANCE NETWORKING'),
(239, 'DIPLOMA IN ADVANCED WEB DEVELOPMENT'),
(240, 'DIPLOMA IN BASIC COMPUTER'),
(241, 'CERTIFICATE IN 3Ds MAX & CORONA'),
(242, 'DIPLOMA IN CAD/CAM'),
(243, 'CERTIFICATE IN ADVANCE PHP'),
(244, 'CERTIFICATE IN JAVASCRIPT'),
(245, 'DIPLOMA IN  PHP & JAVASCRIPT'),
(246, 'DIPLOMA IN C,C++,JAVASCRIPT & PYTHON'),
(247, 'DIPLOMA IN BASIC COMPUTER & ACCOUNTING'),
(248, 'CERTIFICATE IN CORE PHP'),
(249, 'CERTIFICATE IN SEARCH ENGINE OPTIMIZATION (SEO)'),
(250, 'DIPLOMA IN MASTER ANIMATION'),
(251, 'DIPLOMA IN IOS'),
(252, 'DIPLOMA IN JEWELLERY DESIGN'),
(253, 'CERTIFICATE C & C++ & PYTHON'),
(254, 'CERTIFICATE IN BASIC COMPUTER & C PROGRAMMING & C++'),
(255, ' DIPLOMA IN BASIC COMPUTER & C PROGRAMMING & C++'),
(256, ' CERTIFICATE IN PHOTOSHOP & ADOBE XD'),
(257, 'CERTIFICATE IN ADOBE XD'),
(258, 'CERTIFICATE IN STITCH MAX'),
(259, 'CERTIFICATE IN FULTTER'),
(260, 'CERTIFICATE IN PRIMIERE PRO & AUDITION'),
(261, ' CERTIFICATE IN AUTOCAD & 3Ds MAX & CORONA'),
(262, 'DIPLOMA IN MASTER ANDROID');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cer_course_list`
--
ALTER TABLE `cer_course_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cer_course_list`
--
ALTER TABLE `cer_course_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
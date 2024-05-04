-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Bulan Mei 2024 pada 06.15
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `user` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `nama_panggilan` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `fav_food` varchar(20) NOT NULL,
  `fav_drink` varchar(20) NOT NULL,
  `fav_color` varchar(20) NOT NULL,
  `quote` varchar(100) NOT NULL,
  `name_quote` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`user`, `name`, `nim`, `image`, `nama_panggilan`, `description`, `age`, `gender`, `DOB`, `phone`, `address`, `hobby`, `fav_food`, `fav_drink`, `fav_color`, `quote`, `name_quote`, `link`) VALUES
('daniel', 'Daniel Ebenerzer Budiharto', '2602078146', 'images/daniel.jpg', 'Budi', 'I am a Computer Science student in Bina Nusantara University Malang. I am currently expanding my skillset by joining various events and programs inside and outside campus.', 20, 'Male', 'November 17th, 2004 in Jakarta, Indonesia.', '+62 812-3082-2694', 'Jaksa Agung Suprapto St. 130.', 'Reading books', 'Fried Rice', 'Water', 'Crimson', '\"This day the noise of battle. The next the victor\'s song.\"', 'Daniel E. Budiharto', 'https://www.linkedin.com/in/daniel-budiharto-40aa5b275/'),
('nathan', 'Nathanael Orvalo Rosandi', '2602184435', 'images/nathan.jpg', 'Nathan', 'I am an undergraduate student at Binus University Malang, majoring in Computer Science. I have a keen interest in technology. In addition, I am also active in various campus activities, such as participating in event committees, being involved in the student association, and volunteering.', 20, 'Male', 'October 20th, 2003 in Jember, Indonesia.', '+62 853-3079-99930', 'Letjend Suprapto No.17, Bodowoso.', 'Badminton', 'Fried Chicken', 'Ice Tea', 'Black', '\"S.P.I.R.I.T\"', 'Nathanael O. Rosandi', 'http://www.linkedin.com/in/nathanael-rosandi'),
('naufal', 'Naufal Arif', '2602184031', 'images/naufal.jpg', 'Naufal', 'I am an undergraduate student at Binus University Malang, majoring in Computer Science. I have a keen interest in technology. In addition, I am also active in various campus activities, such as participating in event committees, being involved in the student association, and volunteering.', 20, 'Male', 'August 18, 2004 in Jambi City, Indonesia.', '+62 822-1505-8413', 'Jambi, Bagan Pete.', 'Badminton', 'Rice', 'Clean Water', 'Black and Green', '\"One live is enough.\"', 'N. Arif', 'https://www.linkedin.com/in/naufal-arif-b8783b295'),
('odit', 'Oditya Ridho Darmanto', '2602217225', 'images/odit.jpg', 'Odit', 'I am an undergraduate student at Binus University Malang, majoring in Computer Science. I have a keen interest in technology. In addition, I am also active in various campus activities, such as participating in event committees, being involved in the student association, and volunteering.', 20, 'Male', 'August 21st, 2004 in Ngawi, Indonesia.', '+62 822-2933-1485', 'Patiunus Street No.35, Ngawi.', 'Reading books', 'Cheese Burger', 'Hot Choco Milk', 'Blue', '\"Life is like a drawing without an eraser.\"', 'Oditya R. Darmanto', 'https://www.linkedin.com/in/oditya/'),
('ricky', 'Ricky Reza Sanada', '2602184132', 'images/ricky.jpg', 'Ricky', 'I am an undergraduate student at Binus University Malang, majoring in Computer Science. I have an interest in technology. Apart from that, I am also active in various campus activities to develop the skills I have and to increase the skills I have, such as participating in event committees, being involved in student associations, and being a volunteer.', 19, 'Male', 'May 17, 2004 in Malang, Indonesia.', '+62 857-4548-4719', 'Lawing Indah Housing Block Q-13.', 'Playing Video Games', 'Pempek', 'Matcha', 'Green Sage', '\"If you want live a happy life, tie it to a goal, not to people or things.\"', 'Ricky R. Sanada', 'https://www.linkedin.com/in/ricky-reza-sanada-b42762290');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

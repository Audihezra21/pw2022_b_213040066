-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:06 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `fungsi` varchar(255) NOT NULL,
  `bentukid` varchar(255) NOT NULL,
  `deskripsi` varchar(15000) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `nama`, `fungsi`, `bentukid`, `deskripsi`, `gambar`) VALUES
(25, 'EVM', 'Computional Engine', 'Digital', 'Ethereum Virtual Machine (EVM) is a computation engine which acts like a decentralized computer that has millions of executable projects', 'random.png'),
(26, 'Crypto', 'Currency At Metaverse', 'Digital', 'Cryptocurrency, sometimes called crypto-currency or crypto, is any form of currency that exists digitally or virtually and uses cryptography to secure transactions.', 'crypto.jpeg'),
(27, 'Smart Contract', 'Contract Legal', 'Digital', 'A smart contract is a computer program or a transaction protocol which is intended to automatically execute, control or document legally relevant events and actions according to the terms of a contract or an agreement. ', 'random.png'),
(28, 'Blockchain', 'system of recording information', 'Digital', 'a system of recording information in a way that makes it difficult or impossible to change, hack, or cheat the system.', '62a4777f0719ablockchain..jpg'),
(29, 'Non-Fungible Token (NFT)', 'Product At Metaverse', 'File, Photo, Video, Audio', 'A non-fungible token is a financial security consisting of digital data stored in a blockchain, a form of distributed ledger. The ownership of an NFT is recorded in the blockchain, and can be transferred by the owner, allowing NFTs to be sold and traded.', 'nft.jpg'),
(30, 'Minter', 'People Who made NFT or Crypto', 'People', 'Minter is a blockchain network that lets people, projects, and companies issue and manage their own coins.', 'random.png'),
(31, 'Wallet', 'For Save Your Crypto', 'Digital', 'Each metaverse has its own economics and marketplace, where users participate and exchange digital assets in exchange for cryptocurrency.', '62a47a111fc93MetaMask.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`) VALUES
(3, 'audi', 'audi', '$2y$10$OxPwEtkF8Bg8N16Qbymd6.7FG6W.sDed2JY3suxfyY7XRg3qcSaqS', 'admin'),
(4, 'asd', 'asd@asd', '$2y$10$DiC/iaBVxs3fW78j6ITne..rZdfZVwCy6kGzt37dr3OMtruMBJ1BS', 'user'),
(5, 'alif', 'alif@gmail.com', '123456', 'user'),
(6, 'nabila', 'nabila@gmail.com', '$2y$10$WkfV44TPksv1qFukqJcjG.1R/ON2ri6tBXnnqC5Q1Rw1E7rLM38.S', 'user'),
(7, 'audi123', 'audi@gmail.com', '$2y$10$f/EhiGaCJbnPSRyOvg/6tOQDnpYoNoCwgoRt4i3c4P2DPQ6cDf862', 'user'),
(8, 'audi', 'audi1@gmail.com', '$2y$10$rwBLmmh8OcAaL4Im.ZU4IeXIJAzu3yedkUoFdlSwOV2NQUkswjI9S', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

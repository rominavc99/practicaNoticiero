-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 01, 2022 at 01:44 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Noticias1`
--

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `autor` varchar(128) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` date NOT NULL,
  `noticia` text COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `autor`, `fecha`, `noticia`, `created_at`, `updated_at`) VALUES
(1, 'Gato se cayóooo', 'Carlos Encinas', '2022-01-24', 'noooooooo se cayó un gatooooo!!!\r\n\r\nMIUAAAAUUUUuu', '2022-02-01 01:16:49', '2022-02-01 08:16:49'),
(2, 'gatos no quieren pagar impuestos', 'romina', '2022-01-31', 'gatos se niegan a cumplir sus obligaciones fiscales', '2022-02-01 06:38:19', '2022-02-01 06:38:19'),
(3, 'perro adquiere propiedades', 'romina', '2022-01-31', 'perro se decide a iniciar su patrimonio despues de años de tragedia en una crisis financiera sin fin', '2022-02-01 07:23:07', '2022-02-01 07:23:07'),
(4, 'peces pelean por su derecho a la vida terrestre', 'romina', '2022-01-31', 'peces forman sindicato para pelear su derecho a una vida terrestre. exigen accesibilidad para seres acuaticos', '2022-02-01 07:24:09', '2022-02-01 07:24:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2023 at 09:31 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_update`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_channels`
--

CREATE TABLE `payment_channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `currencies` text COLLATE utf8mb4_unicode_ci,
  `created_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `payment_channels`
--

INSERT INTO `payment_channels` (`id`, `title`, `class_name`, `status`, `image`, `settings`, `currencies`, `created_at`) VALUES
(1, 'Alipay', 'Alipay', 'inactive', '/store/1/default_images/payment gateways/alipay.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(2, 'Authorize.net', 'Authorizenet', 'inactive', '/store/1/default_images/payment gateways/authirizenet.png', '', '[\"USD\",\"EUR\"]', '1654755044'),
(3, 'Bitpay', 'Bitpay', 'inactive', '/store/1/default_images/payment gateways/bitpay.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(4, 'Braintree', 'Braintree', 'inactive', '/store/1/default_images/payment gateways/braintree.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(5, 'Cashu', 'Cashu', 'inactive', '/store/1/default_images/payment gateways/cashu.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(6, 'Flutterwave', 'Flutterwave', 'inactive', '/store/1/default_images/payment gateways/flutterwave.png', '', '[\"USD\",\"EUR\"]', '1654755044'),
(7, 'Instamojo', 'Instamojo', 'inactive', '/store/1/default_images/payment gateways/instamojo.png', '', '[\"INR\"]', '1654755044'),
(8, 'Iyzipay', 'Iyzipay', 'inactive', '/store/1/default_images/payment gateways/iyzico.png', '', '[\"USD\"]', '1654755044'),
(9, 'Izipay', 'Izipay', 'inactive', '/store/1/default_images/payment gateways/izipay.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(10, 'KlarnaCheckout', 'KlarnaCheckout', 'inactive', '/store/1/default_images/payment gateways/klarna.png', '', '[\"USD\",\"EUR\"]', '1654755044'),
(11, 'MercadoPago', 'MercadoPago', 'inactive', '/store/1/default_images/payment gateways/mercadopago.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(12, 'Midtrans', 'Midtrans', 'inactive', '/store/1/default_images/payment gateways/midtrans.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(13, 'Mollie', 'Mollie', 'inactive', '/store/1/default_images/payment gateways/mollie.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(14, 'N-genius', 'Ngenius', 'inactive', '/store/1/default_images/payment gateways/ngenius.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(15, 'Payfort', 'Payfort', 'inactive', '/store/1/default_images/payment gateways/payfort.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(16, 'Payhere', 'Payhere', 'inactive', '/store/1/default_images/payment gateways/payhere.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(17, 'Payku', 'Payku', 'inactive', '/store/1/default_images/payment gateways/payku.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(18, 'Paylink', 'Paylink', 'inactive', '/store/1/default_images/payment gateways/paylink.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(19, 'Paypal', 'Paypal', 'active', '/store/1/default_images/payment gateways/paypal.png', '', '[\"USD\",\"EUR\"]', '1654755044'),
(20, 'Paysera', 'Paysera', 'inactive', '/store/1/default_images/payment gateways/paysera.png', '', '[\"INR\"]', '1654755044'),
(21, 'Paystack', 'Paystack', 'inactive', '/store/1/default_images/payment gateways/paystack.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(22, 'Paytm', 'Paytm', 'inactive', '/store/1/default_images/payment gateways/paytm.png', '', '[\"INR\"]', '1654755044'),
(23, 'Payu', 'Payu', 'active', '/store/1/default_images/payment gateways/payu.png', '', '[\"USD\",\"EUR\",\"INR\"]', '1654755044'),
(24, 'Razorpay', 'Razorpay', 'active', '/store/1/default_images/payment gateways/razorpay.png', '', '[\"USD\",\"EUR\"]', '1654755044'),
(25, 'Robokassa', 'Robokassa', 'inactive', '/store/1/default_images/payment gateways/robokassa.png', '', '[\"USD\"]', '1654755044'),
(26, 'Sslcommerz', 'Sslcommerz', 'inactive', '/store/1/default_images/payment gateways/sslcommerz.png', '', '[\"USD\"]', '1654755044'),
(27, 'Stripe', 'Stripe', 'inactive', '/store/1/default_images/payment gateways/stripe.png', '', '[\"USD\"]', '1654755044'),
(28, 'Toyyibpay', 'Toyyibpay', 'inactive', '/store/1/default_images/payment gateways/toyyibpay.png', '', '[\"USD\"]', '1654755044'),
(29, 'Voguepay', 'Voguepay', 'inactive', '/store/1/default_images/payment gateways/voguepay.png', '', '[\"USD\"]', '1654755044'),
(31, 'Zarinpal', 'Zarinpal', 'inactive', '/store/1/default_images/payment gateways/zarinpal.png', '', '[\"USD\"]', '1654755044'),
(32, 'JazzCash', 'JazzCash', 'inactive', '/store/1/default_images/payment gateways/jazzcash.png', '', '[\"USD\"]', '1654755044');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_channels`
--
ALTER TABLE `payment_channels`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_channels`
--
ALTER TABLE `payment_channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

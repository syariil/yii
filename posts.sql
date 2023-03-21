-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 07:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kabaena_cup`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `writer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `writer`, `title`, `short_post`, `post`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Syahril', 'kipas kupas kapis', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat nesciunt rem vel saepe, iste rerum deserunt ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat nesciunt rem vel saepe, iste rerum deserunt totam laudantium exercitationem voluptatum impedit debitis eaque alias reiciendis architecto distinctio optio voluptate magni laborum? Laboriosam aspernatur modi, alias quam delectus amet quisquam iste neque voluptatem velit nesciunt animi ducimus? Nulla rerum optio necessitatibus accusantium labore eos laboriosam amet autem ipsum omnis dolor sapiente consectetur tempora quis fuga doloremque expedita, veniam ea? Nihil porro quisquam neque earum, reiciendis molestias quo dolores cum eos perferendis eaque animi ipsum unde aut corrupti! Repellendus error alias fugiat et assumenda in eum tempore ad ullam tempora, quas optio vitae aut maxime, voluptatem velit. Praesentium, enim ea facilis maiores, vitae quibusdam harum minus consectetur quae debitis, repellat provident porro.', '2023-01-10 01:20:58', '2023-01-10 01:20:58'),
(2, 'Ayub Mubarak', 'katak beradik', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat nesciunt rem vel saepe, iste rerum deserunt totam laudantium exercitationem voluptatum impedit debitis eaque alias reiciendis architecto distinctio optio ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat nesciunt rem vel saepe, iste rerum deserunt totam laudantium exercitationem voluptatum impedit debitis eaque alias reiciendis architecto distinctio optio voluptate magni laborum? Laboriosam aspernatur modi, alias quam delectus amet quisquam iste neque voluptatem velit nesciunt animi ducimus? Nulla rerum optio necessitatibus accusantium labore eos laboriosam amet autem ipsum omnis dolor sapiente consectetur tempora quis fuga doloremque expedita, veniam ea? Nihil porro quisquam neque earum, reiciendis molestias quo dolores cum eos perferendis eaque animi ipsum unde aut corrupti! Repellendus error alias fugiat et assumenda in eum tempore ad ullam tempora, quas optio vitae aut maxime, voluptatem velit. Praesentium, enim ea facilis maiores, vitae quibusdam harum minus consectetur quae debitis, repellat provident porro.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quaerat nesciunt rem vel saepe, iste rerum deserunt totam laudantium exercitationem voluptatum impedit debitis eaque alias reiciendis architecto distinctio optio voluptate magni laborum? Laboriosam aspernatur modi, alias quam delectus amet quisquam iste neque voluptatem velit nesciunt animi ducimus? Nulla rerum optio necessitatibus accusantium labore eos laboriosam amet autem ipsum omnis dolor sapiente consectetur tempora quis fuga doloremque expedita, veniam ea? Nihil porro quisquam neque earum, reiciendis molestias quo dolores cum eos perferendis eaque animi ipsum unde aut corrupti! Repellendus error alias fugiat et assumenda in eum tempore ad ullam tempora, quas optio vitae aut maxime, voluptatem velit. Praesentium, enim ea facilis maiores, vitae quibusdam harum minus consectetur quae debitis, repellat provident porro.', '2023-01-10 01:29:12', '2023-01-10 01:29:12'),
(3, 'Muhammad Syahril', 'kacang panjang', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi temporibus hic nemo iure minima fugit incidunt, pariatur ratione, numquam ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi temporibus hic nemo iure minima fugit incidunt, pariatur ratione, numquam veniam architecto consequuntur est dolorem quos debitis molestiae asperiores, enim aperiam dolore id modi itaque officiis vitae! At deserunt quasi officiis assumenda accusamus id asperiores enim voluptas modi? Doloremque impedit harum repudiandae ducimus, molestiae vel mollitia, id, laborum in rerum ea facilis necessitatibus eos tenetur eligendi? Possimus, aperiam! Doloribus tempora facilis repellendus non qui itaque laboriosam adipisci molestias provident dolorum maxime dolor, aliquid minima, asperiores placeat quod, ratione odio accusamus facere quidem autem? Consectetur iusto nam, laboriosam eligendi laborum corporis eum facilis accusantium culpa repudiandae illum soluta unde, suscipit, similique cupiditate. Deleniti, quo dignissimos perspiciatis sit fugit minima incidunt cupiditate debitis hic adipisci ab molestiae sed at saepe odio iure numquam libero deserunt laborum corporis rerum accusamus officia aut illum? Consequatur obcaecati officia assumenda dolores repellendus ullam minus adipisci magni.', '2023-01-11 01:37:43', '2023-01-11 01:37:43'),
(4, 'Muhammad Syahril', 'kacang pendek', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi temporibus hic nemo iure minima fugit incidunt, pariatur ratione, numquam ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi temporibus hic nemo iure minima fugit incidunt, pariatur ratione, numquam veniam architecto consequuntur est dolorem quos debitis molestiae asperiores, enim aperiam dolore id modi itaque officiis vitae! At deserunt quasi officiis assumenda accusamus id asperiores enim voluptas modi? Doloremque impedit harum repudiandae ducimus, molestiae vel mollitia, id, laborum in rerum ea facilis necessitatibus eos tenetur eligendi? Possimus, aperiam! Doloribus tempora facilis repellendus non qui itaque laboriosam adipisci molestias provident dolorum maxime dolor, aliquid minima, asperiores placeat quod, ratione odio accusamus facere quidem autem? Consectetur iusto nam, laboriosam eligendi laborum corporis eum facilis accusantium culpa repudiandae illum soluta unde, suscipit, similique cupiditate. Deleniti, quo dignissimos perspiciatis sit fugit minima incidunt cupiditate debitis hic adipisci ab molestiae sed at saepe odio iure numquam libero deserunt laborum corporis rerum accusamus officia aut illum? Consequatur obcaecati officia assumenda dolores repellendus ullam minus adipisci magni.', '2023-01-11 01:38:14', '2023-01-11 01:38:14'),
(5, 'Muhammad Syahril', 'kacang-kacang', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi temporibus hic nemo iure minima fugit incidunt, pariatur ratione, numquam ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi temporibus hic nemo iure minima fugit incidunt, pariatur ratione, numquam veniam architecto consequuntur est dolorem quos debitis molestiae asperiores, enim aperiam dolore id modi itaque officiis vitae! At deserunt quasi officiis assumenda accusamus id asperiores enim voluptas modi? Doloremque impedit harum repudiandae ducimus, molestiae vel mollitia, id, laborum in rerum ea facilis necessitatibus eos tenetur eligendi? Possimus, aperiam! Doloribus tempora facilis repellendus non qui itaque laboriosam adipisci molestias provident dolorum maxime dolor, aliquid minima, asperiores placeat quod, ratione odio accusamus facere quidem autem? Consectetur iusto nam, laboriosam eligendi laborum corporis eum facilis accusantium culpa repudiandae illum soluta unde, suscipit, similique cupiditate. Deleniti, quo dignissimos perspiciatis sit fugit minima incidunt cupiditate debitis hic adipisci ab molestiae sed at saepe odio iure numquam libero deserunt laborum corporis rerum accusamus officia aut illum? Consequatur obcaecati officia assumenda dolores repellendus ullam minus adipisci magni.', '2023-01-11 01:38:29', '2023-01-11 01:38:29'),
(6, 'Muhammad Syahril', 'kacang telur 2 ribu dolar Zimbabwe', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi temporibus hic nemo iure minima fugit incidunt, pariatur ratione, numquam ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab animi temporibus hic nemo iure minima fugit incidunt, pariatur ratione, numquam veniam architecto consequuntur est dolorem quos debitis molestiae asperiores, enim aperiam dolore id modi itaque officiis vitae! At deserunt quasi officiis assumenda accusamus id asperiores enim voluptas modi? Doloremque impedit harum repudiandae ducimus, molestiae vel mollitia, id, laborum in rerum ea facilis necessitatibus eos tenetur eligendi? Possimus, aperiam! Doloribus tempora facilis repellendus non qui itaque laboriosam adipisci molestias provident dolorum maxime dolor, aliquid minima, asperiores placeat quod, ratione odio accusamus facere quidem autem? Consectetur iusto nam, laboriosam eligendi laborum corporis eum facilis accusantium culpa repudiandae illum soluta unde, suscipit, similique cupiditate. Deleniti, quo dignissimos perspiciatis sit fugit minima incidunt cupiditate debitis hic adipisci ab molestiae sed at saepe odio iure numquam libero deserunt laborum corporis rerum accusamus officia aut illum? Consequatur obcaecati officia assumenda dolores repellendus ullam minus adipisci magni.', '2023-01-11 01:38:50', '2023-01-11 01:38:50'),
(11, 'Muhammad Syahril', 'Kabaena Cup S3 Akan Segera di Mulai', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor asperiores provident, enim nulla aut nostrum magnam iure sunt optio, dicta, laudantium veritatis quis ex dolorem iusto recusandae dignissimos nobis possimus? Sit alias ', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor asperiores provident, enim nulla aut nostrum magnam iure sunt optio, dicta, laudantium veritatis quis ex dolorem iusto recusandae dignissimos nobis possimus? Sit alias tempore ipsa ad deserunt quia, voluptatem quasi, a sint architecto nesciunt incidunt odio! Exercitationem error perferendis magnam nihil corporis provident, nostrum reiciendis. Molestiae saepe eum eos reiciendis vitae porro dolor deleniti cumque iste doloribus laudantium, placeat harum? Voluptatibus assumenda blanditiis aperiam aliquid laudantium veniam praesentium quibusdam eaque necessitatibus. Animi neque architecto dolor explicabo veniam sint in atque officia ut eum quo adipisci corrupti perferendis, at, cumque omnis culpa quam harum aut quis voluptatibus soluta mollitia consequuntur recusandae? Totam omnis quia perferendis voluptatem laborum facilis. Voluptas harum veniam quidem delectus, porro molestias aut eius tempora accusantium saepe. Cum ea, animi sed debitis placeat ipsum sapiente officiis natus laboriosam laborum saepe exercitationem ex modi temporibus enim sunt minima, eveniet impedit dolor accusamus? Incidunt eveniet ullam fugiat maxime odit dolor velit deleniti eius, iure quisquam rerum porro, nesciunt, saepe impedit eum laboriosam reprehenderit accusantium modi adipisci nostrum ut quo perspiciatis recusandae! Expedita incidunt, earum illum debitis aut quo dignissimos veniam dolor totam consequuntur aliquid eligendi iste. Quia debitis, voluptatem quos fugiat ab alias qui rem inventore natus expedita laudantium blanditiis vel esse omnis ex! Libero, inventore! Earum a eum accusamus dicta deserunt rem est ea culpa sapiente ut atque impedit saepe sunt accusantium exercitationem fugiat ipsa, perspiciatis alias! Expedita, deleniti nostrum quis dolorem a libero velit perferendis, suscipit fuga, odit quasi.', NULL, NULL),
(12, 'Ayub Mubarak', 'Kodok kodok', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aperiam recusandae quia ut fugiat? Libero doloribus mollitia suscipit nobis ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est aperiam recusandae quia ut fugiat? Libero doloribus mollitia suscipit nobis ea quo, obcaecati illo nostrum laudantium ratione, nulla quam nisi! Suscipit a fuga animi. Libero excepturi maxime eius voluptatem est, pariatur provident, non, esse odio eaque deserunt reiciendis. Sunt quaerat dolore debitis itaque illo! Maxime nulla excepturi optio deleniti vero! Cum minima rem, molestiae id eos asperiores officia consequuntur cumque sapiente optio maxime. Quisquam ad praesentium velit accusantium voluptate odio sint, voluptas maiores eveniet, id facilis facere doloribus, nobis sapiente voluptatem eligendi sequi error labore eius sed deserunt consequatur. Asperiores nisi accusantium doloribus explicabo debitis, porro culpa repudiandae at dolorum architecto. Molestias modi ipsum facere delectus ipsa doloribus repellendus suscipit totam incidunt fuga velit explicabo, rem sed quas officia id. Explicabo magnam pariatur unde fuga eveniet, labore, atque quia recusandae distinctio, officia iure. Eveniet et atque beatae qui quam suscipit? Recusandae?', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

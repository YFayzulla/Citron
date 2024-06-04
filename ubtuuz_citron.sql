-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Сен 27 2023 г., 10:15
-- Версия сервера: 10.4.28-MariaDB-cll-lve-log
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ubtuuz_citron`
--

-- --------------------------------------------------------

--
-- Структура таблицы `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialty_uz` varchar(255) NOT NULL,
  `specialty_ru` varchar(255) NOT NULL,
  `specialty_en` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `telegram` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `specialty_uz`, `specialty_ru`, `specialty_en`, `email`, `tel`, `image`, `telegram`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'Xudaybergenov Timur', 'IoT va Robotatexnika', 'Интернет вещей и робототехника', 'IoT and Robotic', 'Hudaybergenov@gmail.com', '+998 90 578 64 78', '202309070627png', '@Ferrum1126', '@Ferrum1126', '2023-09-06 00:53:58', '2023-09-07 01:27:40'),
(2, 'Xo\'jamurotov Bekmurod', 'Dasturchi', 'Программист', 'Developer', 'bekmurot3338@gmail.com', '+998 97 791 38 83', '8b456f64-038a-4f27-a1b7-b09a58e6cf6a-1694074745.png', '@Bekmurod3388', '@bekmurodkhujamuratov', '2023-09-06 07:59:44', '2023-09-07 03:19:05'),
(3, 'Rustamov Rahimbergan', 'Robototexnika', 'Робототехника', 'Robotics', 'rahimbergan121@gmail.com', '+998948995300', '202309070630png', '@rustamov_tuit', '@rustamov_tuit', '2023-09-06 08:06:43', '2023-09-07 01:30:30'),
(4, 'Atabaev Sultanbek', 'Elektrosxematik', 'Электросхема', 'Electroschematic', 'sultan@gmail.com', '+998 99 748 00 57', '202309070629png', '@N5700', '@N5700', '2023-09-06 08:13:04', '2023-09-07 01:29:46'),
(5, 'Qodirov Faxriddin', 'Web dasturchi', 'веб-разработчик', 'Web developer', 'faxriddinqodirov@gmail.com', '+998 97 791 38 83', '202309070628png', '@qodirovfaxriddin', '@qodirovfaxriddin', '2023-09-06 12:43:16', '2023-09-07 01:28:51'),
(6, 'Bikemmetova Durdona', 'c++ Dasturchisi', 'c++ Программист', 'c++ Developer', 'Durdonabekimetova@gmail.com', '+998 97 791 38 83', '202309070637Durdona.png', '@Durdona', '@durdona', '2023-09-07 01:37:44', '2023-09-07 01:37:44');

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Qozon federal universiteti', 'Jamoamiz Qozon federal universiteti raxbariyati bilan memarandum imzolash jarayonida', '202309061155image_2023-09-06_16-54-49.png', '2023-09-06 06:55:25', '2023-09-06 06:55:25'),
(3, 'Malaya University', 'Jamoamiz Malayziyaning Kuala - Lumpur shahridagi Malaya universitetiga tashrifi', '202309061203image_2023-09-06_17-00-37.png', '2023-09-06 07:03:33', '2023-09-06 07:03:33'),
(4, 'Summer University', 'Jamoamiz azolari Xo\'jamuratov Bekmurod, Atabayev Sultonbek, Bikemmetova Durdona Kazan Fediral Unversitetida bo\'lib o\'tgan yozgi  Universitet ida tajriba almashishdi', '202309070834photo_2023-09-07_13-28-56.jpg', '2023-09-07 03:34:14', '2023-09-07 03:34:14');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_31_050332_create_contact_table', 1),
(7, '2023_03_31_050411_create_contacts_table', 1),
(8, '2023_04_03_012839_create_abouts_table', 1),
(9, '2023_04_05_012308_create_projects_table', 1),
(10, '2023_04_08_091554_create_services_table', 1),
(11, '2023_05_06_163426_create_galleries_table', 1),
(12, '2023_06_18_061418_create_project_has_user_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `desc_uz` varchar(255) NOT NULL,
  `desc_ru` varchar(255) NOT NULL,
  `desc_en` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `name_uz`, `name_ru`, `name_en`, `desc_uz`, `desc_ru`, `desc_en`, `image`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Inocar', 'Inocar', 'Inocar', 'kamera kuzatuviga ega masofadan moshqariluvchi mashina', 'Автомобиль с дистанционным управлением и камерой слежения', 'remote control car with camera tracking', '202309070646png', 'Rustamov Rahimbergan', '0', '2023-09-06 07:15:19', '2023-09-07 01:46:19'),
(4, 'O\'rgimchak robot', 'Робот-паук', 'Spider robot', 'Har qanday yo\'lsizliklarda yurishga qodir roboplatfo\'rma', 'Робоплатформа, способная ходить по любым дорогам', 'Roboplatform capable of walking on any roads', '202309070647png', 'Rustamov Rahimbergan', '0', '2023-09-06 07:44:59', '2023-09-07 01:47:14'),
(6, 'Oloid', 'Олоид', 'Oloid', 'Yo\'ltanlamas roboplatfo\'rma', 'Off-road robot platform', 'Внедорожная роботизированная платформа', '202309070650png', 'Bikemmetova Durdona', '0', '2023-09-06 08:32:10', '2023-09-07 01:50:04'),
(7, 'Arkada o\'yinlari', 'Аркадни Игри', 'Arcade games', '1980-1990 yilar o\'yinlarini barchasini o\'zida jam qilgan retro citron game cabinet', 'Игровой шкаф в стиле ретро-цитрон, в котором собраны все игры 1980-х и 1990-х годов.', 'A retro citron game cabinet that contains all the games of the 1980s and 1990s', '202309070652image_2023-09-06_17-26-34.png', NULL, '0', '2023-09-07 01:52:23', '2023-09-07 01:52:23'),
(8, 'SmartCity', 'SmartCity', 'SmartCity', 'Qo\'riqlash hizmatini', 'Security service', 'Сервис безопасности', '456c7f06-6244-43df-9bda-05a71d4c310a-1694070868.png', NULL, '0', '2023-09-07 01:55:02', '2023-09-07 02:14:28'),
(9, 'Ob-havo Vidjetlari', 'Weather Widgets', 'Виджеты погоды', 'Online tarizda obhavoni barcha malumotlarini internet tarmog\'idan olish', 'Получите всю информацию о погоде онлайн', 'Get all the weather information online', '50214901-7a18-4b21-b573-df4c9ebe3234-1694070711.png', NULL, '0', '2023-09-07 02:10:00', '2023-09-07 02:11:51'),
(10, '3D gologramma', '3D hologram', '3D-голограмма', '3D gologramma', '3D hologram', '3D-голограмма', 'feaa7c82-b2d5-48d4-891a-2a5ccca1f7a9-1694071298.png', NULL, '0', '2023-09-07 02:21:38', '2023-09-07 02:21:38');

-- --------------------------------------------------------

--
-- Структура таблицы `project_has_user`
--

CREATE TABLE `project_has_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_uz` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `desc_uz` mediumtext NOT NULL,
  `desc_ru` mediumtext NOT NULL,
  `desc_en` mediumtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name_uz`, `name_ru`, `name_en`, `desc_uz`, `desc_ru`, `desc_en`, `image`, `created_at`, `updated_at`) VALUES
(2, 'IT konsalting', 'IT консалтинг', 'IT consulting', 'IT-konsalting xizmatlari mijozlarga turli texnologiya strategiyalarini baholashda yordam beradigan maslahat xizmatlaridir va bunda ularning texnologik strategiyalarini biznes yoki jarayon strategiyalari bilan moslashtiradi.', 'ИТ-консалтинговые услуги — это консультативные услуги, которые помогают клиентам оценить различные технологические стратегии и при этом согласовать свои технологические стратегии со стратегиями своего бизнеса или процессов.', 'IT consulting services are advisory services that help clients assess different technology strategies and, in doing so, align their technology strategies with their business or process strategies.', '202309070755it-consulting.webp', '2023-09-07 02:55:01', '2023-09-07 02:55:01'),
(3, 'IT integratsiya', 'ИТ интеграция', 'IT integration', 'IT kontekstida integratsiya jarayonning yakuniy natijasini nazarda tutadi, uning maqsadi har xil - ko\'pincha bir-biridan farq qiluvchi quyi tizimlarni birlashtirishga qaratilgan bo\'lib, har birida mavjud bo\'lgan ma\'lumotlar, ideal holda, tez va oson almashinadigan kengroq, kengroq tizimning bir qismiga aylanadi', 'В контексте ИТ интеграция относится к конечному результату процесса, целью которого является объединение разрозненных – часто разрозненных – подсистем в более крупную и комплексную систему, в которой информация, содержащаяся в каждой из них, в идеале может быть быстро и легко обменена. системы', 'In an IT context, integration refers to the end result of a process that aims to combine different -- often disparate -- subsystems so that the data contained in each becomes part of a larger, more comprehensive system that, ideally, quickly and easily shares data when needed.', '202309070806IT-integration-key-pillar-unified-commerce-thumbnail.jpg', '2023-09-07 03:06:24', '2023-09-07 03:06:24'),
(4, 'IoT tarmoq', 'IoT сети', 'IoT network', '\"IoT\" yoki \"Internet of Things\" atamasi ulangan qurilmalarning umumiy tarmog\'i va qurilmalar va bulut o\'rtasidagi, shuningdek qurilmalarning o\'zlari o\'rtasidagi aloqani osonlashtiradigan texnologiyani anglatadi .', 'Термин «IoT» или «Интернет вещей» относится к общей сети подключенных устройств и технологии, которая облегчает связь между устройствами и облаком, а также между самими устройствами.', 'The term IoT, or Internet of Things, refers to the collective network of connected devices and the technology that facilitates communication between devices and the cloud, as well as between the devices themselves.', '202309070810internet-of-things-iot-100739823-large.webp', '2023-09-07 03:10:37', '2023-09-07 03:10:37'),
(5, 'Li Fi', 'Li Fi', 'Li Fi', 'LiFi texnologiyasi bizga lampalar, ko\'cha chiroqlari yoki LED televizorlar yorug\'ligi yordamida Internetga ulanish imkonini beradi. Wi-Fi-dan arzonroq, xavfsizroq va tezroq bo\'lishidan tashqari, u routerga muhtoj emas. Internetdan foydalanish uchun mobil telefon yoki planshetni lampochkaga yo‘naltirish kifoya.', 'Технология LiFi позволит нам подключаться к Интернету, используя свет ламп, уличных фонарей или светодиодных телевизоров. Помимо того, что он дешевле, безопаснее и быстрее, чем Wi-Fi, ему не нужен маршрутизатор. Все, что вам нужно сделать, это направить свой мобильный телефон или планшет на лампочку, чтобы пользоваться Интернетом.', 'LiFi technology will allow us to connect to the internet using light from lamps, streetlights or LED televisions. In addition to being cheaper, safer and faster than wifi, it does not need a router. All you need to do is point your mobile or tablet towards a light bulb to surf the web.', '202309070814Без названия.png', '2023-09-07 03:14:55', '2023-09-07 03:14:55');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `tel`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', '2023-09-04 00:58:53', '$2y$10$Ev2tvK8k6hnQ3Jjd99fvT.Q8XQtb.Eh4RfKxhc11Cuv4xryBBLGhC', 'Urganch shahari Al-Xorazimiy kochasi 110-uy', '999219887', 'ti33gR6fae', '2023-09-04 00:58:53', '2023-09-04 00:58:53');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `project_has_user`
--
ALTER TABLE `project_has_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_has_user_project_id_foreign` (`project_id`),
  ADD KEY `project_has_user_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `project_has_user`
--
ALTER TABLE `project_has_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `project_has_user`
--
ALTER TABLE `project_has_user`
  ADD CONSTRAINT `project_has_user_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_has_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

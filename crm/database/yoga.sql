-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 06:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `url` text DEFAULT NULL,
  `file` text NOT NULL,
  `file_type` text DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `url`, `file`, `file_type`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(36, 'Article 001', 'https://www.linkedin.com/company/oremuscorp/', 'image.png', '0', 1, '2022-07-02 14:10:09', NULL, NULL),
(37, 'Article 001', 'linkedin.com', 'image.png', '0', 1, '2022-07-02 14:57:24', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `php_file_location` text NOT NULL,
  `job_type` text DEFAULT NULL,
  `job_location` text DEFAULT NULL,
  `job_category` text DEFAULT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `title`, `description`, `php_file_location`, `job_type`, `job_location`, `job_category`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(37, 'Finance Job', '<h1><strong>Job Heading</strong></h1>\r\n\r\n<ol>\r\n	<li><strong>skills</strong></li>\r\n	<li><strong>skills 2</strong></li>\r\n</ol>\r\n', 'career/Finance_Job/index.php', 'Full Time', 'Hyderabad', 'Accounts', 1, '2022-06-22 08:09:01', '2022-07-02 14:17:54', '2022-07-02 14:17:54'),
(39, 'Business Analyst', '<p><strong>Responsibilities</strong>:</p>\r\n\r\n<ul>\r\n	<li>Create and maintain documentation, as well as support controls and quality assurance for key stakeholders and suppliers</li>\r\n	<li>Collaborate with cross-functional team members to come up with actionable, high-impact insights across product lines and functions.</li>\r\n	<li>Communicating findings to stakeholders and taking initiatives for improving business performance.</li>\r\n	<li>Utilize strong database skills to work with large, complex data sets to extract insights.</li>\r\n	<li>Using advanced analytics and metrics to improve processes and provide data-driven forecasts of potential costs, revenues, and risks of business initiatives.</li>\r\n	<li>Identify and support cut-over and implementation tasks</li>\r\n	<li>Trace and link business requirements to future state design</li>\r\n	<li>Create and execute test scenarios and test scripts at various stages of the project in order to validate the solution design</li>\r\n	<li>Facilitate user acceptance testing and support business users in executing the user acceptance testing</li>\r\n</ul>\r\n\r\n<p><strong>Requirements</strong>:</p>\r\n\r\n<ul>\r\n	<li>Education and experience: Bachelors or Masters in a quantitative field (such as Engineering, Statistics, Math, Economics or Computer Science with Modeling/Data Science), preferably with work experience of 2-4 years.</li>\r\n	<li>A passion for helping organizations understand how to solve problems through analytics.</li>\r\n	<li>Ability to manage simultaneous tasks in a fast-paced, technology-oriented environment.</li>\r\n	<li>Prior project experience in one or more of the following areas are preferred, but not absolutely required:\r\n	<ul>\r\n		<li>Familiarity with database technologies and tools (SQL/R/SAS/JMP etc.), data transformation and processing. Work experience with real data for customer insights, business and market analysis will be advantageous.</li>\r\n		<li>Experience with a visualization tool such as Tableau, Spotfire, Power BI, Sisense, etc.</li>\r\n		<li>Sound statistical knowledge in standard techniques: Logistic Regression, Classification models, Cluster Analysis, Experimental Design, Hypothesis Testing etc.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n', 'career/Business_Analyst/index.php', 'Full Time', 'Hydrabad', 'Accounts', 1, '2022-06-24 09:50:15', '2022-07-02 14:17:54', '2022-07-02 14:17:54'),
(40, 'Business Analyst', '<p><strong>Responsibilities</strong>:</p>\r\n\r\n<ul>\r\n	<li>Create and maintain documentation, as well as support controls and quality assurance for key stakeholders and suppliers</li>\r\n	<li>Collaborate with cross-functional team members to come up with actionable, high-impact insights across product lines and functions.</li>\r\n	<li>Communicating findings to stakeholders and taking initiatives for improving business performance.</li>\r\n	<li>Utilize strong database skills to work with large, complex data sets to extract insights.</li>\r\n	<li>Using advanced analytics and metrics to improve processes and provide data-driven forecasts of potential costs, revenues, and risks of business initiatives.</li>\r\n	<li>Identify and support cut-over and implementation tasks</li>\r\n	<li>Trace and link business requirements to future state design</li>\r\n	<li>Create and execute test scenarios and test scripts at various stages of the project in order to validate the solution design</li>\r\n	<li>Facilitate user acceptance testing and support business users in executing the user acceptance testing</li>\r\n</ul>\r\n\r\n<p><strong>Requirements</strong>:</p>\r\n\r\n<ul>\r\n	<li>Education and experience: Bachelors or Masters in a quantitative field (such as Engineering, Statistics, Math, Economics or Computer Science with Modeling/Data Science), preferably with work experience of 2-4 years.</li>\r\n	<li>A passion for helping organizations understand how to solve problems through analytics.</li>\r\n	<li>Ability to manage simultaneous tasks in a fast-paced, technology-oriented environment.</li>\r\n	<li>Prior project experience in one or more of the following areas are preferred, but not absolutely required:\r\n	<ul>\r\n		<li>Familiarity with database technologies and tools (SQL/R/SAS/JMP etc.), data transformation and processing. Work experience with real data for customer insights, business and market analysis will be advantageous.</li>\r\n		<li>Experience with a visualization tool such as Tableau, Spotfire, Power BI, Sisense, etc.</li>\r\n		<li>Sound statistical knowledge in standard techniques: Logistic Regression, Classification models, Cluster Analysis, Experimental Design, Hypothesis Testing etc.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n', 'career/Business_Analyst/index.php', 'Full Time', 'Hydrabad', 'Finance', 1, '2022-07-02 14:11:40', '2022-07-02 14:17:53', '2022-07-02 14:17:53'),
(41, 'Business Analyst', '<p><strong>Responsibilities</strong>:</p>\r\n\r\n<ul>\r\n	<li>Create and maintain documentation, as well as support controls and quality assurance for key stakeholders and suppliers</li>\r\n	<li>Collaborate with cross-functional team members to come up with actionable, high-impact insights across product lines and functions.</li>\r\n	<li>Communicating findings to stakeholders and taking initiatives for improving business performance.</li>\r\n	<li>Utilize strong database skills to work with large, complex data sets to extract insights.</li>\r\n	<li>Using advanced analytics and metrics to improve processes and provide data-driven forecasts of potential costs, revenues, and risks of business initiatives.</li>\r\n	<li>Identify and support cut-over and implementation tasks</li>\r\n	<li>Trace and link business requirements to future state design</li>\r\n	<li>Create and execute test scenarios and test scripts at various stages of the project in order to validate the solution design</li>\r\n	<li>Facilitate user acceptance testing and support business users in executing the user acceptance testing</li>\r\n</ul>\r\n\r\n<p><strong>Requirements</strong>:</p>\r\n\r\n<ul>\r\n	<li>Education and experience: Bachelors or Masters in a quantitative field (such as Engineering, Statistics, Math, Economics or Computer Science with Modeling/Data Science), preferably with work experience of 2-4 years.</li>\r\n	<li>A passion for helping organizations understand how to solve problems through analytics.</li>\r\n	<li>Ability to manage simultaneous tasks in a fast-paced, technology-oriented environment.</li>\r\n	<li>Prior project experience in one or more of the following areas are preferred, but not absolutely required:\r\n	<ul>\r\n		<li>Familiarity with database technologies and tools (SQL/R/SAS/JMP etc.), data transformation and processing. Work experience with real data for customer insights, business and market analysis will be advantageous.</li>\r\n		<li>Experience with a visualization tool such as Tableau, Spotfire, Power BI, Sisense, etc.</li>\r\n		<li>Sound statistical knowledge in standard techniques: Logistic Regression, Classification models, Cluster Analysis, Experimental Design, Hypothesis Testing etc.</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n', 'career/Business_Analyst/index.php', 'Full Time', 'Hydrabad', 'Finance', 1, '2022-07-02 14:18:08', NULL, NULL),
(42, 'Payroll Manager', '<p><strong>Responsibilities:&nbsp;</strong></p>\r\n\r\n<p>Pays employees and compiles payroll information by managing payroll preparation; completing reports; maintaining records.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maintains payroll information by designing&nbsp;systems;&nbsp;directing the collection, calculation, and entering of data.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Updates&nbsp;payroll records by reviewing and approving changes in exemptions, insurance coverage, savings deductions, and job titles, and department/ division transfers.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pays employees by directing the production and issuance of paychecks or electronic transfers to bank accounts.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Prepares reports by compiling summaries of earnings, taxes, deductions, leave, disability, and nontaxable wages.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Determines payroll liabilities by approving the calculation of employee federal and state income and social security taxes, and employer&rsquo;s social security, unemployment, and workers compensation payments.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Balances the payroll accounts by resolving payroll discrepancies.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Provides payroll information by answering questions and requests.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maintains payroll guidelines by writing and updating policies and procedures.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Complies with federal, state, and local legal requirements by studying existing and new legislation; enforcing adherence to requirements; advising management on needed actions.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maintains employee confidence and protects payroll operations by keeping information confidential.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maintains professional and technical knowledge by attending educational workshops; reviewing professional publications; establishing personal networks; participating in professional societies.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Completes operational requirements by scheduling and assigning&nbsp;employees;&nbsp;following up on work results.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maintains payroll staff by recruiting, selecting, orienting, and training employees.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maintains payroll staff job results by counseling and disciplining&nbsp;employees;&nbsp;planning, monitoring, and appraising job results.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Maintains professional and technical knowledge by attending educational workshops; reviewing professional publications; establishing personal networks; participating in professional societies.&nbsp;</p>\r\n\r\n<p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contributes to team effort by accomplishing related results as needed.&nbsp;</p>\r\n\r\n<p>Managing Processes, People Management, Data Entry Management, Reporting Skills, Compensation and Wage Structure, Benefits Administration, Worker Compensation, Employment Law, Developing Standards, Financial Skills, Accounting&nbsp;</p>\r\n\r\n<p>Education and experience: Postgraduate with 4 plus years of experience.</p>\r\n', 'career/Payroll_Manager/index.php', 'Full Time', 'Hydrabad', 'Accounts', 1, '2022-07-02 14:20:25', NULL, NULL),
(43, 'FPA', '<ul>\r\n	<li>FPA for USA required</li>\r\n	<li>2 vacancies are <em>available</em></li>\r\n</ul>\r\n', 'career/FPA/index.php', 'Full Time', 'Mumbai', 'Accounts', 1, '2022-08-16 14:01:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_study`
--

CREATE TABLE `case_study` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `file` text NOT NULL,
  `file_type` text DEFAULT NULL,
  `php_file_location` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `case_study`
--

INSERT INTO `case_study` (`id`, `title`, `description`, `file`, `file_type`, `php_file_location`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(42, 'Back office solutions for a Healthcare Non-Profit', 'Case StudyBusinesses have to balance between maximizing productivity and efficiency, fulfilling customer needs and reducing risk. Transaction processing includes Payment processing, accounts payable, accounts receivable and the related activities. Organizations need to prioritize customer satisfaction by focusing on delivering high standards of customer service. Better transaction processing will enable such aspect.\r\nTransaction processing refers to processing the data into a meaningful information or a record', '0', '0', 'case_study/Back_office_solutions_for_a_Healthcare_Non-Profit/index.php', 1, '2022-06-24 09:48:34', NULL, NULL),
(43, 'New Case Study', 'testing case study content', '0', '0', 'case_study/New_Case_Study/index.php', 1, '2022-07-02 14:10:38', NULL, NULL),
(44, 'testing case study', 'hello world', 'Screenshot 2022-08-16 at 1162fba3760e95d3.58408973.png', 'png', 'case_study/testing_case_study/index.php', 1, '2022-08-16 14:02:30', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_subject_list`
--

CREATE TABLE `contact_subject_list` (
  `id` int(255) NOT NULL,
  `service_id` int(255) NOT NULL,
  `code` bigint(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_subject_list`
--

INSERT INTO `contact_subject_list` (`id`, `service_id`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(16, 9, 1656652613, '2022-07-01 05:16:53', NULL, NULL),
(17, 9, 1656771983, '2022-07-02 14:26:23', NULL, NULL),
(18, 8, 1656771983, '2022-07-02 14:26:23', NULL, NULL),
(19, 9, 1656771999, '2022-07-02 14:26:39', NULL, NULL),
(20, 8, 1656771999, '2022-07-02 14:26:39', NULL, NULL),
(21, 9, 1657023373, '2022-07-05 12:16:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(13) NOT NULL,
  `company_name` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `subject_code` bigint(255) NOT NULL,
  `page_name` text DEFAULT NULL,
  `archive` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `company_name`, `message`, `subject_code`, `page_name`, `archive`, `created_at`, `updated_at`, `deleted_at`) VALUES
(21, 'Kartik', 'help@designavenue.co.in', 9933844333, 'ABCD', 'test', 1656652613, 'https://designavenue.co.in/oremus/v1/contact', 0, '2022-07-01 05:16:53', NULL, NULL),
(22, 'Contact Page Query', 'help@designavenue.co.in', 8833883388, 'DA', 'testing', 1656771983, 'https://designavenue.co.in/oremus/v1/contact', 0, '2022-07-02 14:26:23', NULL, NULL),
(23, 'DA Team', 'help@designavenue.co.in', 9988998899, 'DA', 'testing', 1656771999, 'https://designavenue.co.in/oremus/v1/contact', 0, '2022-07-02 14:26:39', NULL, NULL),
(24, 'Lalit Ananth Chawla', 'lalit.chawla@oremuscorp.com', 919885456720, 'Oremus Corporate Services Pvt Ltd', 'call back', 1657023373, 'https://designavenue.co.in/oremus/v1/case-study', 0, '2022-07-05 12:16:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `file` text NOT NULL,
  `file_type` text DEFAULT NULL,
  `php_file_location` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `description`, `file`, `file_type`, `php_file_location`, `active`, `created_at`, `updated_at`, `deleted_at`) VALUES
(34, 'Women\'s Day Celebration', 'Oremus India Office Women\'s Day CelebrationOremus India Office Women\'s Day Celebration\r\n\r\nOremus India Office Women\'s Day Celebration\r\n\r\nOremus India Office Women\'s Day Celebration\r\n\r\nOremus India Office Women\'s Day Celebration\r\n\r\nOremus India Office Women\'s Day Celebration\r\n\r\nOremus India Office Women\'s Day Celebration\r\n\r\nOremus India Office Women\'s Day Celebration\r\n\r\nOremus India Office Women\'s Day Celebration\r\n\r\nOremus India Office Women\'s Day Celebration\r\n\r\nOremus India Office Women\'s Day Celebration\r\n\r\n', 'media_photo62b5877f11dd95.00704032.jpeg', 'jpeg', '', 1, '2022-06-24 09:44:31', '2022-07-02 14:27:11', '2022-07-02 14:27:11'),
(35, 'Services Offered by Oremus', 'Not Available', 'WhatsApp Image 2022-07-02 at 1262c05237037e00.93134166.jpeg', 'jpeg', '', 1, '2022-07-02 14:12:07', NULL, NULL),
(36, 'New Media', 'Test', 'WhatsApp Image 2022-07-02 at 1262c05d7731f730.23700595.jpeg', 'jpeg', '', 1, '2022-07-02 15:00:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `service_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Taxation', '2022-06-17 11:18:44', '2022-06-17 11:44:09', '2022-06-17 11:44:09'),
(2, 'Transaction Processing', '2022-06-17 11:37:15', '2022-06-17 11:44:15', '2022-06-17 11:44:15'),
(3, 'Transaction Processing', '2022-06-17 11:44:24', '2022-06-17 11:45:48', NULL),
(4, 'payroll managment', '2022-06-17 11:46:03', '2022-06-17 11:46:51', '2022-06-17 11:46:51'),
(5, 'Payroll Managment', '2022-06-17 11:46:57', NULL, NULL),
(6, 'Taxation', '2022-06-18 12:20:03', NULL, NULL),
(7, 'Custom Reporting', '2022-06-18 12:20:22', NULL, NULL),
(8, 'Bookkeeping', '2022-06-18 12:20:58', '2022-06-24 09:45:40', NULL),
(9, 'Advisory', '2022-06-24 09:45:33', NULL, NULL),
(10, 'Fashion', '2022-08-20 06:41:33', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0 COMMENT ' 1-godfather, 2-super admin,3-admin, \r\n',
  `verification_code` text DEFAULT NULL,
  `forgot_token` text DEFAULT NULL,
  `verified` int(10) NOT NULL DEFAULT 0 COMMENT '0-No, 1-Yes',
  `user_block` int(10) NOT NULL DEFAULT 0 COMMENT '0-unblock, 1-block',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `is_admin`, `verification_code`, `forgot_token`, `verified`, `user_block`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'admin 1', 'admin@gmail.com', 7775875580, '$2y$10$0HoVpDL4bhRdmw4cGlFfZeilr0C8EyHslRdWDiQcQiLyB63GcdCym', 1, NULL, '6616', 1, 0, '2022-03-03 07:44:41', '2022-06-20 12:12:17', NULL),
(69, 'amarnath', 'amarnathjnp2002@gmail.com', 9988998833, '$2y$10$uQjNN2cJEoUjDDNG2xSDDO9SczCR1BWi4j2HkVccT5tIEp6OKVtau', 3, NULL, NULL, 1, 0, '2022-07-01 05:20:18', NULL, NULL),
(70, 'DA Team', 'help@designavenue.co.in', 8833993322, '$2y$10$lNKOjJUO6Ar9GJIq5O8auOZlE3w8Y.CwxMy4HKCY/dpUeVMUq9oq6', 3, NULL, NULL, 1, 0, '2022-07-02 14:25:04', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_study`
--
ALTER TABLE `case_study`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_subject_list`
--
ALTER TABLE `contact_subject_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `case_study`
--
ALTER TABLE `case_study`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `contact_subject_list`
--
ALTER TABLE `contact_subject_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Database: `sparksbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- here Dumping the data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Upendra', 'upendra@gmail.com', 150000 ),
(2, 'dheeraj', 'dheeraj@gmail.com', 35000),
(3, 'chaitanya', 'chaitu@gmail.com', 43194),
(4, 'prabhas', 'prabhas@gmail.com', 48090),
(5, 'sam', 'sam12@gmail.com', 38300),
(6, 'arjun', 'arjun@gmail.com', 30555),
(7, 'dhoni', 'dhoni@gmail.com', 52757),
(8, 'jadeja', 'jaddu@gmail.com', 37325),
(9, 'vikram', 'vikram@gmail.com', 30800),
(10, 'akhil', 'akhil@gmail.com', 50096);




-- Indexes for table `transaction`

ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


-- Indexes for table `users`

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;


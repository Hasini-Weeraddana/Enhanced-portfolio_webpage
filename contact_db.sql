-- Database: contact_db

-- Create Table Statements

-- Table structure for the table `contact_form`

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Features that are added for the Table

ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);



-- Records inserted for the `contact_form` table

INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, 'Hasini Yasoda', 'hasiniweeraddana@gmail.com', '1234567894', 'hi, how are you?'),
(2, 'I.T. Koralege', 'induthusha721@gmail.com', '2345678912', 'Hi, how is it going?'),
(3, 'user A', 'userA@gmail.com', '123234345', 'hello'),
(4, 'user B', 'userB@gmail.com', '123', 'hi');
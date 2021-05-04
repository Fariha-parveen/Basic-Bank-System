

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `transactions` (
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `transactions` (`sender`, `receiver`, `balance`) VALUES
('Fariha', 'Fahima', 50),
('Aparna', 'Ashani', 100),
('Vajid', 'Vijay', 200),
('Dhoni', 'Ramesh', 70),
('Fariha', 'Ashani', 30),
('Jabeen', 'Fahima', 100),
('Fahima', 'Aparna', 10),
('Ayesha', 'Fariha', 50),
('Vijay ', 'Ramesh', 100),
('Fariha', 'Vijay', 100),
('Fahima', 'Ayesha', 25),
('Vajid', 'Ayesha', 100),
('Fahima', 'Ramesh', 80),
('Ramesh', 'Ashani', 10);


CREATE TABLE `customers` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `customers` (`id`, `name`, `email`, `balance`) VALUES
('112', 'Fariha', 'fariha@gmail.com', 5000),
('212', 'Ayesha', 'ayesha@gmail.com', 8000),
('215', 'Ashani', 'ashani@yahoo.com', 7000),
('321', 'Fahima', 'fahima@gmail.com', 8000),
('319', 'Jabeen', 'jabeen@gmail.com', 7900),
('327', 'Aparna', 'aparna@gmail.com', 6000),
('357', 'Dhoni', 'captain@@gmail.com', 9000),
('346', 'Vajid', 'vajid@gmail.com', 8000),
('456', 'Ramesh', 'ramesh@gmail.com', 9000),
('560', 'Vijay', 'vijay@gmail.com', 5000);
COMMIT;



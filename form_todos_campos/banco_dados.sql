

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE IF NOT EXISTS `teste_upload` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `teste_upload`;


CREATE TABLE `ususario` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `biografia` varchar(200) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `ususario` (`id`, `nome`, `sexo`, `biografia`, `foto`) VALUES
(1, 'henrique', 'masculino', 'Um Estudante de S.I', 'dol.jpg');


ALTER TABLE `ususario`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `ususario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;



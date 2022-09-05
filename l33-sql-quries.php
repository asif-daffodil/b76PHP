CREATE DATABASE `My Data`

DROP DATABASE `My Data`

CREATE TABLE `my table` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` CHAR(100),
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`) 
)

INSERT INTO `my table`(`name`) VALUES ('Asif')

INSERT INTO `my table`(`name`) VALUES ('Abir'), ('Mahamudunnobi'), ('Tazul'), ('Shakil')
ALTER TABLE `my table` ADD `city` CHAR(100) AFTER `name`

ALTER TABLE `my table` DROP`city`

UPDATE `my table` SET `city` = 'Dhaka' WHERE `id` = 1

DELETE FROM `my table` WHERE `id` = 5

SELECT * FROM `my table`

SELECT `name` FROM `my table`

SELECT `name`, `city` FROM `my table`

SELECT `my table`.`name`, `my table`.`city` FROM `my table`

ALTER TABLE `my table` ADD FOREIGN KEY (`std_id`) REFERENCES `b76`.`students`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

SELECT `my table`.`name` AS 'Father' FROM `my table`

SELECT `my data`.`my table`.`name` AS 'Father' FROM `my table`

SELECT `my data`.`my table`.`name` AS 'Father', `my data`.`my table`.`city` AS 'Father City', `b76`.`students`.`name` AS 'Chield Name', `b76`.`students`.`gender` FROM `my data`.`my table` INNER JOIN `b76`.`students` ON  `my data`.`my table`.`std_id` = `b76`.`students`.`id`

SELECT * FROM `students` WHERE `name` = 'Kamal' AND `city` = 'Dhaka'

SELECT * FROM `students` WHERE `name` = 'Kamal' OR `city` = 'Dhaka'

SELECT * FROM `students` WHERE `name` LIKE '%ir'

SELECT * FROM `students` WHERE `name` LIKE 'as%'

SELECT * FROM `students` WHERE `name` LIKE '%khan%'

SELECT * FROM `students` WHERE `name` LIKE '%mal%' OR `city` LIKE '%mal%'


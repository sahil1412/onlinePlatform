
CREATE TABLE `application`.`detail` ( 
    `sno` INT(4) NOT NULL , 
    `fname` VARCHAR(10) NOT NULL , 
    `mname` VARCHAR(10) NOT NULL ,
    `lname` VARCHAR(10) NOT NULL ,
    `rollnumber` INT(12) NOT NULL ,
    `registration` VARCHAR(15) NOT NULL,
    `class` TEXT(25) NOT NULL,
    `fathername` VARCHAR(25) NOT NULL ,
    `mothername` VARCHAR(25) NOT NULL ,
    `birthdate`  DATE NOT NULL ,
    `gender` VARCHAR(6) NOT NULL ,
    `address` TEXT(50) NOT NULL ,
    `date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP ,
    PRIMARY KEY (`regitration`)) ENGINE = InnoDB;
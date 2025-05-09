step 1 :- 
create database in phpmyadmin

step 2 :-

click on create table and then select sql on the top and copy and paste below code in the query.



CREATE TABLE `awards` (
  `A_ID` int(100) NOT NULL AUTO_INCREMENT,
  `Award_Name` varchar(100) NOT NULL,
  `Won_Actress_And_Won_Actor` varchar(600) NOT NULL,
  PRIMARY KEY (`A_ID`)
);
CREATE TABLE User_1 
( 
 Name varchar(15) not null, 
 NIC varchar(6) not null, 
 DOB date not null, 
 Gender varchar(10) not null, 
 Email varchar(40) CHECK (Email LIKE '%_@__%.__%') not null,
 Contact varchar(40) not null,
 
 CONSTRAINT user_PK PRIMARY KEY(Name) 
);
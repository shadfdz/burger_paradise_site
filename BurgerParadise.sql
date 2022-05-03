DROP DATABASE IF EXISTS burger_paradise;
CREATE DATABASE burger_paradise;

use burger_paradise;

DROP TABLE IF EXISTS userTtype;
CREATE TABLE userType (
    userGroupID INT PRIMARY KEY ,
    userGroup VARCHAR(16)
);
INSERT INTO userType (userGroupID, userGroup)
VALUES (4000, 'Customer'),
       (5000, 'Admin');

DROP TABLE IF EXISTS person;
CREATE TABLE person (
    personID INT AUTO_INCREMENT PRIMARY KEY,
    name varchar(32),
    lastname varchar(32),
    email VARCHAR(32) UNIQUE NOT NULL,
    password VARCHAR(32),
    phone VARCHAR(32),
    userGroupID INT DEFAULT 4000,
    FOREIGN KEY (userGroupID) references userType (userGroupID)
);

INSERT INTO person (personID, name, lastname, email, password, phone, userGroupID)
VALUES (NULL, 'Shad','Fernandez','shad@mail.com','password1','9562505699',4000),
       (NULL, 'Alex','Fernandez','alex@mail.com','password1','8582175846',5000);

DROP TABLE IF EXISTS orderInfo;
CREATE TABLE orderInfo (
    orderID INT AUTO_INCREMENT PRIMARY KEY,
    personID INT,
    orderDate DATETIME,
    orderStatus VARCHAR(16),
    total float,
    FOREIGN KEY (personID) REFERENCES person (personID)
    ON DELETE CASCADE
);

DROP TABLE IF EXISTS menu;
CREATE TABLE menu (
    menuID INT PRIMARY KEY,
    item varchar(32),
    price float
);

INSERT INTO menu (menuID, item, price)
VALUES (101, 'Burger', 5.00),
       (102, 'Cheeseburger', 6.00),
       (103, 'Double Cheeseburger', 7.00),
       (104, 'French Fries', 2.00),
       (105, 'Garlic Parmesan Fries', 3.00),
       (106, 'Chocolate Milkshake', 2.50);

DROP TABLE IF EXISTS orderItem;
CREATE TABLE orderItem (
    orderID INT,
    menuID INT,
    quantity INT,
    price float,
    PRIMARY key (orderID, menuID),
    FOREIGN KEY (orderID) REFERENCES orderInfo (orderID)
    ON DELETE CASCADE,
    FOREIGN KEY (menuID) REFERENCES menu (menuID)
);






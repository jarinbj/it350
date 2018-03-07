

CREATE TABLE account (
  username varchar(255) PRIMARY KEY NOT NULL,
  password varchar(512) DEFAULT NULL,
  email varchar(512) DEFAULT NULL,
  admin INT
);

CREATE TABLE administrator (
  adminID int AUTO_INCREMENT PRIMARY KEY,
  rights int DEFAULT NULL,
  username varchar(255) DEFAULT NULL
);

CREATE TABLE creditcard (
  ccnumber varchar(255) DEFAULT NULL,
  expdate date DEFAULT NULL
);
CREATE TABLE customer (
  userID int AUTO_INCREMENT PRIMARY KEY NOT NULL,
  streetnumber varchar(255) DEFAULT NULL,
  housenumber varchar(255) DEFAULT NULL,
  city varchar(255) DEFAULT NULL,
  usstate varchar(255) DEFAULT NULL,
  zipcode varchar(255) DEFAULT NULL,
  username varchar(255) DEFAULT NULL,
  ccnumber varchar(255) DEFAULT NULL
); 
INSERT INTO customer(streetnumber,housenumber,city,usstate,zipcode,username,ccnumber) VALUES('example st ','53','provo','UT','84604','jj','4458654868');

CREATE TABLE developer (
  name varchar(255) PRIMARY KEY NOT NULL,
  royalties double DEFAULT NULL
);
CREATE TABLE gamesystem (
  systemID int AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name varchar(255) DEFAULT NULL,
  releasedate varchar(255) DEFAULT NULL,
  developer varchar(255) DEFAULT NULL
);
INSERT INTO gamesystem(name,releasedate,developer) VALUES ('NES',"1984","Nintendo");
CREATE TABLE rom (
  name varchar(255) PRIMARY KEY NOT NULL,
  releasedate varchar(255) DEFAULT NULL,
  description varchar(1023) DEFAULT NULL,
  price double DEFAULT NULL,
  timessold int(11) DEFAULT NULL,
  systemID int(11) DEFAULT NULL,
  developer varchar(255) DEFAULT NULL
);
INSERT INTO rom (name,releasedate,description,price,timessold,systemID,developer)
Values('Zelda','1985','great game',15.99,0,1,'Nintendo')
CREATE TABLE sale (
  saleID int AUTO_INCREMENT PRIMARY KEY NOT NULL,
  dateofsale date DEFAULT NULL,
  romname varchar(255) DEFAULT NULL,
  userID int(11) DEFAULT NULL,
  ccnumber varchar(255) DEFAULT NULL
);
INSERT INTO sale(dateofsale,romname,userID,ccnumber) VALUES("3-1-2018","Zelda",1,'4458654868');
CREATE TABLE userrom (
  userID int(11) DEFAULT NULL,
  romname varchar(255) DEFAULT NULL
);
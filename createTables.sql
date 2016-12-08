/* Purpose: Create the database and tables for the Rendezvous event app */
/* Date: 10/17/2016 */
CREATE DATABASE RVSQL;
GO
USE RVSQL;
/* Drop tables for now. Once we figure everything out we won't drop every time */
DROP TABLE Event;
DROP TABLE Customer;
DROP TABLE CustEvent;
DROP TABLE EventType;
GO

CREATE TABLE Event (eventID int NOT NULL AUTO_INCREMENT, eventType int, title char(100), description char(150), isClosed bool, startDate date, startTime time, endDate date, endTime time, venue char(50), city char(50), stateCode char(2), PRIMARY KEY (eventID));
CREATE TABLE Customer (custID int NOT NULL AUTO_INCREMENT, custName char(30), userEmail char(50), userPassword char(255), PRIMARY KEY (custID));
CREATE TABLE CustEvent (custeventID int NOT NULL AUTO_INCREMENT, eventID int, custID int, PRIMARY KEY (custeventID)); 
CREATE TABLE EventType (typeID int NOT NULL AUTO_INCREMENT, description char(50), PRIMARY KEY (typeID));
GO

/* We will need to create more data for the other tables but this is a start for one of them  */
INSERT INTO EventType (description) VALUES ('Business'); 
INSERT INTO EventType (description) VALUES ('Music'); 
INSERT INTO EventType (description) VALUES ('School'); 
INSERT INTO EventType (description) VALUES ('Sports'); 
INSERT INTO EventType (description) VALUES ('Games');
GO

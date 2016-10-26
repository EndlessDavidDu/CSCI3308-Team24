/* Purpose: Create the database and tables for the Rendezvous event app */
/* Date: 10/17/2016 */
CREATE DATABASE RVSQL;
GO
USE RVSQL;
/* drop tables for now. Once we figure everything out we won't drop every time */
DROP TABLE Event;
DROP TABLE Customer;
DROP TABLE CustEvent;
DROP TABLE EventType;
GO
	
CREATE TABLE Event (eventID int primary key, eventType int, description char(150), isClosed bool, startTime datetime, endTime datetime,location);
CREATE TABLE Customer (custID int primary key, custName char(30), userEmail char(50), userPassword char(15));
CREATE TABLE CustEvent (custeventID int primary key, eventID int, custID int); 
CREATE TABLE EventType (typeID int primary key, description char(50));
GO

/* We will need to create more data for the other tables but this is a start for one of them  */
INSERT INTO EventType VALUES (0, 'Business'); 
INSERT INTO EventType VALUES (1, 'Music'); 
INSERT INTO EventType VALUES (2, 'School'); 
INSERT INTO EventType VALUES (3, 'Sports'); 
INSERT INTO EventType VALUES (4, 'Games');
GO

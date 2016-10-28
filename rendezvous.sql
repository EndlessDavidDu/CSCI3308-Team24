/* Purpose: Create the database and tables for the Rendezvous event app */
/* Date: 10/17/2016 */
/*CREATE DATABASE IF NOT EXISTS RVSQL;
GO
USE RVSQL;
/* drop tables for now. Once we figure everything out we won't drop every time */
DROP TABLE Event;
DROP TABLE Customer;
DROP TABLE CustEvent;
DROP TABLE EventType;
GO
	
CREATE TABLE Event (eventID integer primary key, eventType integer, description char(150), isClosed bool, startTime datetime, endTime datetime, location char(50));
CREATE TABLE Customer (custID integer primary key, custName char(30), userEmail char(50), userPassword char(25));
CREATE TABLE CustEvent (custeventID integer primary key, eventID integer, custID integer); 
CREATE TABLE EventType (typeID integer primary key, description char(50));
GO

/* We will need to create more data for the other tables but this is a start for one of them  */
INSERT INTO EventType VALUES (0, 'Business'); 
INSERT INTO EventType VALUES (1, 'Music'); 
INSERT INTO EventType VALUES (2, 'School'); 
INSERT INTO EventType VALUES (3, 'Sports'); 
INSERT INTO EventType VALUES (4, 'Games');
GO

INSERT INTO Customer VALUES (0001, 'tomeldar', 'tomeldar@gmail.com', 'rendezvous_admin');
INSERT INTO Customer VALUES (0002, 'Grim Reaper', 'grimreaper@gmail.com', 'deathman');
INSERT INTO Customer VALUES (0003, 'Barney', 'isadinosaur@gmail.com', 'wereahappyfamily');
INSERT INTO Customer VALUES (0004, 'Subi', 'subinair@colorado,edu', 'rendezvous_asmin2');
INSERT INTO Customer VALUES (0005, 'Izze', 'green@sparkling.gov', 'appleicious');

INSERT INTO Event VALUES (1, 2, 'welcome to CU', false, '2016-10-27 10:00:00', '2016-10-27 12:00:00', 'cu boulder');
INSERT INTO Event VALUES (2, 2, 'welcome to CU', false, '2016-10-27 10:00:00', '2016-10-27 12:00:00', 'cu boulder');
INSERT INTO Event VALUES (3, 2, 'welcome to CU', false, '2016-10-27 10:00:00', '2016-10-27 12:00:00', 'cu boulder');
INSERT INTO Event VALUES (4, 2, 'welcome to CU', false, '2016-10-27 10:00:00', '2016-10-27 12:00:00', 'cu boulder');
INSERT INTO Event VALUES (5, 2, 'welcome to CU', false, '2016-10-27 10:00:00', '2016-10-27 12:00:00', 'cu boulder');

INSERT INTO CustEvent VALUES (1, 1, 1);
INSERT INTO CustEvent VALUES (2, 1, 1);
INSERT INTO CustEvent VALUES (3, 1, 1);
INSERT INTO CustEvent VALUES (4, 1, 1);
INSERT INTO CustEvent VALUES (5, 1, 1);
Instructions for Making Final Product Work  
  
1. Download all of the repository zip and place all the files from the Final-Product directory in your /var/www/ directory.  
2. Enter into your mysql and enter the command 'create database RVSQL'  
3. quit mysql and enter this command in terminal while in /var/www/: 'mysql -p RVSQL < createTables.sql'  
4. Enter mysql again and enter these two command "create user 'tomeldar'@'localhost' IDENTIFIED by '1234abcd" and "GRANT ALL ON *.* TO 'tomeldar'@'localhost'"  
5. Open a new terminal and run this command while in /var/www/ 'php -S localhost:8080'  
6. Go to localhost:8080/index.html on your browser, make a user, log in, and you're good to go 

Notes on Functionality  
1. When you click on the plus sign toggle, the create event page it sends you to does not create an event yet  
2. On the homepage, if you click the bowling image on the first carousel it will send you to an event page. A little taste of the future functionality  
3. Go to localhost:8080/Event.php to see the event page  
4. If you click on menu and hover over notifications it will show you your current notifications  
5. Search bar still under development  

We hope you like our product!

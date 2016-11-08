Decription: The login and registration pages for rendezvous. Coded in HTML and PHP. 

Instructions to run on Linux machine:  
1. php -S localhost:8080 //use this command in the terminal while in the directory with the files.  
2. Open another terminal and enter your mysql server.  
3. Use the database provided on github.  
3. Run these following commands in the mysql terminal:  
      -create user tomeldar IDENTIFIED by '1234abcd';  
      -GRANT ALL ON rendezvous.sql TO tomeldar;  
4. Go on any browser and type this into the url "localhost:8080/index.html"  

Current Functionality:
You can currently check if the user exists and whether the password matches the user. If a user does not exist, you can create a new user by clicking on the sign up button. In the sign up it will check if a username is already taken. If a user does not exist, the user will be made.

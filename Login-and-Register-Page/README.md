Decription: The login and registration pages for rendezvous. Coded in HTML and PHP. 

Instructions to run on Linux machine:  
1. php -S localhost:8080 //use this command in the terminal while in the directory with the files.(if using apache2 just store in /var/www/)  
2. Open another terminal and enter your mysql server.  
3. Use the database provided on github.  
3. Run these following commands in the mysql terminal:  
      -create user tomeldar IDENTIFIED by '1234abcd';  
      -GRANT ALL ON rendezvous.sql TO tomeldar;  
4. Go on any browser and type this into the url "localhost:8080/index.html"  

Current Functionality:
Login and register pages fully functional and has all the functionality expected from a login/register page. Forgot password not functional. Stores a cookie upon successful login. All passwords are hashed.

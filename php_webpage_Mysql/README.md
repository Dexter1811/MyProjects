This project contains:
	Mysql deployment
	Executing init Scripts
	php deployment
	php connecting the mysql container running in the same network and executing basic password reset or Unlock in DB
	
Valid Usernames for testing:
	123456
	Max
	Adam
	Roger
	Morkel
	Kelvin

To start Execute "docker-compose up -d"
To stop Execute "docker-compose down"

Mysql 
	port:3309
	username: root
	password: Webpage@123

php:
	port:8001
	
To access the web page launch https://localhost:8001/customer.php
# Absence Management (Gestion d’Absence) :
 it is a Web Application for management absences of students.

## Technologies and Frameworks used:
* [laravel 7](https://laravel.com/) 
* [Bootstrap](https://getbootstrap.com/)
* [PHP](https://www.php.net/)

Description of the application :

There are four kind of accounts : 

	- Admin          :  manage students,teachers,modules ...
    
    - Student        :  You can check your absences

	- Administration : - You can check the absence of all students 
		           - You can send warnings to students who have exceeded the number of absences authorized by the university
		           - Others options also ...

	- Teacher        : - You can get the list of student who were absent per session
                       - Create class sessions
                       - You can register absent students
	                   - Others options also ...
                
To get the project up and running on your local machine, do the following. 

- clone it :``` git clone https://github.com/ayoubmouallim/Gestion-Absence.git ```
- Run composer install, to install dependencies
- Edit the created .env file at the root of your project, to add database credentials, etc
- To setup your database tables, run this command ```php artisan migrate ```in your cmd 
```
php artisan serve
```

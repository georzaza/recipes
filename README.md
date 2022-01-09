### What is this project? 

A simple recipes site made in Laravel on the fly.

Functionalities implemented in this project:
- user login/register
- adding new recipes to your account.
- exploring recipes from other users based on some criteria
- rating & commenting on recipes.

All work has been made manually, except for the users login/register functionality. 

<hr>
 

### How to Run

- 1. Install composer globally. (sudo apt install composer)

- 2. Go into the folder of the project and run
```
composer install
```
- 3. MySQL should be running on the system. Run these mysql commands or	modify the `.env` file and the below commands accordingly. 
```
create database store;
create user store_admin@localhost identified by 'Zaq!1qaZ';
grant all privileges on store.* to store_admin@localhost;
flush privileges;
```
- 4. Back into the project folder, run those: 
```
// maybe not needed
php artisan key:generate

// creates the database tables. Migrations are under 'database/migrations'
php artisan migrate:fresh

php artisan db:seed
php artisan serve
```

The command `php artisan db:seed` seeds the database tables.
Uses 'database/seeders/DatabaseSeeder.php' which in turn calls 
'database/seeders/GeneralSeeder.php' which in turn uses 'data' file 
which in turn is a symbolic link to the file 'export_data/exported_data.sql'
which contains mysql commands to populate the database. 
This file was contructed by using the 'mysqldump' command and a python script.


- 5. Finally Visit localhost:8000 On Your Browser.

UNVERSAL ONLINE-TICKET
 
Project name:onlineticket
1.Overview of our system 
Universal Online Ticket Management System (UOTMS) is based a web application system that can assists some passenger who can move from one place to another place in our country like from province to Kigali city vise versa .
	User can access any company (Agence) and fill all his/here information required and get his/her ticket online by using this system.
	Each company(agence ) can get  information  from passenger who was select that company(agence) .
In side of secure
	Admin mast be loged in by using his/her credential account like user name and password
Username: user
Passwork:123

 With this system, the user of this system can key in the result of Passengers that has been conducted 
to each of the Ticket received by the passengers. And also this system is developed by using laravel 8.0
via this system are able to be registered as passenger and also his\her record is managed properly.
2.Structure of our Project
This Project accommodate in Three parts of MVC:
	Models
	Views
	Controllers

 First is Models:
Our Model Directory contains:
*Passangerinfor.php
*product.php
*user.php
Controllers"
*Directory in Controller:
*controllers.php
*passangercontroller.php
*productcontroller .php
files:
* Puth: pp\Http\Controllers this is puth for controller Directory
* ProductController: this Controller helps to control passangers either register, update, delete of record.
* Passangerinfor.php:manages store of Passengers in database either retrieve of record;
*HomeController:manage home page

## Views (Front-end view):
#Directories:
auth:
*views:
index.blade.php
create.blade.php
Edit.blade.php
update.blade.php
show.blade.php
layout.blade.php
#Picture Directory:
-includes the pictures show how system it works by pictures
-this pictures includes how system works step by step and disigned
.

3.Installation and running our project using laravel8.0 framework
 Laravel Universal Online Ticket Management System
* Laravel Framework 8.0
* Bootstrap 5
*We have downloaded xampp with php version 7.3
   First step:
    Installation of xampp
    ->Open local disk C
    ->Click on xampp
    ->Start(apache & mysql)
   Second step:
    Downloading of a composer
    ->Open local disk C
    ->Click on xampp
    ->Click on MYphpAdmin and then next
 Third step: 
    Installation of laravel8
    ->Enter laravel through browser
    ->click install 
    ->choose version 8.x
    ->installation via composer
    ->copy this Artisan CLI's serve command:composer create project laravel/laravel          
    ->open local disk C
    ->click on xamp
    ->click on htdocs
    ->Online Transport Reservation system(through this path command prompt is where it is opened)
    ->then paste composer create project laravel/laravel->then laravel is installed successful->then check laravel
N.B: In order to access our project first, you must be able to login as admin and then enter username and password, then click login button, directly you begin access our system (Universal Online Ticket Management System).
4. Laravel Universal Online Ticket Management System Author:
*  Aimable TUYISHIME:18RP10039
* Penina NTAGISANIMANA:18RP01125

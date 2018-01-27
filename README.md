# Depedency :
	- PHP 7 or later
	- Laravel 5.5
	- Composer : https://getcomposer.org/download/
	- phpunit : https://phpunit.de/
	- Git 

# Run, Please follow these step :
	- git clone https://github.com/Thomas-wangsa/DI-Laravel.git
	- cd to root project
	- cp .env.example .env
	- composer install
	- create new database (based on env Database name)
	- run php artisan key:generate
	- run php artisan migrate:refresh --seed or by phpunit
	- run the repository with localhost or php artisan serve

## Regex and SOLID principles project

Hi, this is my project to the Placetopay’s challenge, is a simple store with only one product, register and login system, admin and user history and, of course, redirection to Placetopay gateway, let’s see how to install it:

- Create a folder for the project and go into it with the command line.
- Execute **git clone https://github.com/diegogit94/regex-solid-project.git**
- Go into regex-solid-project folder
- Open a terminal in the project folder and execute **composer install** (This process may take a moment)
- Go to project’s root and rename de .env.example file as .env
- In the terminal, execute **php artisan key:generate**
- Go to your favorite DB administrator (DBeaver, phpmyadmin, etc) and create a new DB
- Go into .env file and configure the following variables:

>DB_DATABASE = Add the name of the DB that you have created before(Line 14). <br>
>DB_USERNAME = Add your DB username (Line 15). <br>
>DB_PASSWORD = Add your DB password  (Line 16).

- In terminal, execute **php artisan migrate**
- In terminal, execute **php artisan serve**
- Open your favorite browser and go to http://127.0.0.1:8000

Enjoy! <3

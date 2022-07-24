## About

This is school project of a fashion e-commerce website, created using Laravel. The website allows the user to:
- View main page, with product pagination.
- Log in to the website (username and password provided in a different file), and log out.
- Perform CRUD operations on the website.

## Dependencies

In order to run the project on your machine, please make sure you have the latest versions of:
- PHP (https://www.php.net/downloads.php). * PHP 8.1.6 was used in this project.
- MySQL (https://dev.mysql.com/downloads/mysql/).
- Laravel (https://laravel.com/docs/9.x/installation).
- Composer (https://getcomposer.org/download/).
- Node.js and NPM (https://docs.npmjs.com/downloading-and-installing-node-js-and-npm).
- Visual Studio Code (https://code.visualstudio.com/download) or any other IDE of your choice.

### Running the project

In order to run the project on your machine: 
- download the project folder to your computer, or clone the repository.
- Launch Visual Studio Code.
- Open the terminal and run the following commands:
- 1. npm i (install all dependencies used in this project)
- 2. php artisan migrate:refresh --seed (run all Laravel migrations, and create random product data in the Data Base)
- 3. php artisan serve (run the Laravel development server address, usually on: http://127.0.0.1:8000)

<h3 align="center">Boostapp Home Assignment</h3>

  <p align="center">
    Simple E-commerce Cart
</div>

<!-- ABOUT THE PROJECT -->
## About The Project

A simple E-commerce Cart

### Built With

* [![Laravel][Laravel.com]][Laravel-url]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]


<!-- GETTING STARTED -->
## Getting Started

### Prerequisites

In order to run the project, the following installations are needed:
* PHP
  ```
  https://www.php.net/downloads
  ```
* Composer
  ```
  https://getcomposer.org/download/
  ```
* any SQL server like MySQL or SQLite
  ```
  https://www.mysql.com/downloads/
  https://www.sqlite.org/download.html
  ```

### Installation

1. Clone the repo
   ```sh
   git clone https://github.com/eddiegutman/Boostapp-Assignment.git
   ```
2. Change directory into the repo directory
   ```sh
   cd .\Boostapp-Assignment\
   ```
3. Install composer to the project
   ```sh
   composer install
   ```
4. Create the `.env` file
   ```sh
   cp .env.example .env
   ```
5. Generate your `APP_KEY` 
   ```sh
   php artisan key:generate
   ```
6. Edit `.env` file with the Database settings, example:
   ```sh
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=shop
   DB_USERNAME=root
   DB_PASSWORD=
   ```
7. Create the database tables and seed them
   ```sh
   php artisan migrate:fresh --seed
   ```
8. Run the project
   ```sh
   php artisan serve
   ```  
   
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com

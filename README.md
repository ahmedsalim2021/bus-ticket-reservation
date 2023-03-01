# <center>Bus Ticketing Reservation System</center>

### Installation

*System Installation and requirement*

- install php 8.0 or higher
- apache or nginx
- php extensions (common, intl, mbstring, json,
 curl, mysql, xml, zip)
- create .env file and copy content of .env.example into it
- run *php artisan key:generate*
- run *php artisan jwt:secret*
- add DB credentials to .env file
- run *php artisan migrate --seed* to create database schema and seeding it
- run *php artisan serve --port=3000* to start project
- Run *php artisan test* to run tests

*Docker Installation*

- Install Docker
- Install Docker compose
- Run *php artisan sail:install*
- Run *./vendor/bin/sail up* to start project on url (http://127.0.0.1:3000)
- run *./vendor/bin/sail artisan jwt:secret*
- Run *./vendor/bin/sail artisan migrate --seed* to create database schema and seeding it
- Run *./vendor/bin/sail artisan test* to run tests

*Postman APIs documentation*
https://documenter.getpostman.com/view/3446458/2s93CPsCvU

# <center>Bus Ticketing Reservation System</center>

### Installation

*System Installation and requirement*

- install php 8.0 or higher
- apache or nginx
- php extensions (common, intl, mbstring, json,
 curl, mysql, xml, zip)
- create .env file and copy content of .env.example into it
- run *php artisan key:generate*
- add DB credentials to .env file
- run *php artisan serve* to start project
- Run *php artisan test* to run tests

*Docker Installation*

- Install Docker
- Install Docker compose
- Run *php artisan sail:install*
- Run *./vendor/bin/sail up* to start project on url (http://127.0.0.1:3000)
- Run *./vendor/bin/sail artisan test* to run tests

*Postman APIs documentation*
https://documenter.getpostman.com/view/3446458/2s93CPsCvU

# Documentation of Malhoza (LARAVEL PHP)
## About
This project is  for testing my skills in `RESTFul API` & `Auth JWT` with Laravel  .
`SooleLab` is a RESTful API Project with 3 APIs for mobile app to help to get all countries with thier area in `KM <sup>2</sup>`

## To Run
### You will need:
- xampp
- php v 7.*
- composer
- Postman ( https://www.getpostman.com/apps )
or you can use your prefer extension to your browser for example [ RestMan for opera ](https://addons.opera.com/en/extensions/details/restman/)

## Setup / configuration
 1. clone Repo 
    - `git clone https://github.com/Eslam-Ayman/SoolekLab-jwt.git`
    - cd into your project
 2. Install Composer Dependencies
    - ```composer install```
 3. Create a copy of your .env file
    - ```cp .env.example .env```
 4. Generate an app encryption key
    - ```php artisan key:generate```
    - If the application key is not set, your user sessions and other encrypted data will not be secure!
 5. Create an empty database for our application
 6. In the .env file, add database information to allow Laravel to connect to the database
 7. Migrate the database
    - `php artisian migrate`
    - if you don't need to migrate so import `sooleklab.sql` in your DB
    - and after that you must run `php artisian migrate` 
 8. Run the following command to publish the package config file:
    - `php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"`
    - You should now have a `config/jwt.php` file that allows you to configure the basics of this package.
 9. you have to generate a key for JWT:
    - `php artisan jwt:secret`
    -  This will update your .env file with something like JWT_SECRET=foobar
    -  It is the key that will be used to sign your tokens. How that happens exactly will depend on the algorithm that you choose to use.

## Start using API
| Name       | Method   | URL  							   | Header  													   | Body  |
| :----------: |:--------:| :--------------------------------: | :--------------------------------------------------------------:| :-----:|
| Login      | POST 	| http://sooleklab.me/api/login    | `Content-Type`: application/json <br> `Accept`: application/json | Required Data: (email, password) <br> Optional Data: (null) |
| Register   | POST 	| http://sooleklab.me/api/register | `Content-Type`: application/json <br> `Accept`: application/json | Required Data: (name, email, password, password_confirmation) <br> Optional Data: (null)  |
| Area 		 | GET  	| http://sooleklab.me/api/area     | `Content-Type`: application/json <br> `Accept`: application/json <br> `Authorization`: Bearer Token-Here |  null  |



# License 
GNU GPL License
> Author : Eslam Ayman 

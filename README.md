# For windows
## 1- install php 7+ with laragon or xampp

this [Link](https://www.edureka.co/blog/how-to-run-a-php-program-in-xampp/) is usefull

## 2- Install composer

this [Link](https://www.geeksforgeeks.org/how-to-install-php-composer-on-windows/) is usefull

## 3- Install 
```
git clone https://github.com/idanieldrew/shop.git
```
## 4- cp .env.example .env

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=Your password
```


## 5- composer

```bash
composer install
```

## 6- Database & fake data

```bash
php artisan migrate --seed
```

## 7- Serve

```bash
php artisan serve
```

finish

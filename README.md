# [Input Data Pendonor](IDP)

Aplikasi Praktek Kerja Lapangan

## How To Use?

Make sure you have [XAMPP](https://www.apachefriends.org/download.html), [Composer](https://getcomposer.org/download/), and [NodeJs](https://nodejs.org/en/download/) installed.

## :memo: getting started
1. Clone Repository
```
git clone https://github.com/aaneviannanda/input-data-donor
```
```
cd input-data-donor
```
2. Set .env file
    - make .env file and copy from .env.example
```
composer install
```
```
php artisan key:generate
```
```
npm install
```
```
npm run dev
```
3. Create database
    - create database in localhost/phpmyadmin with name: db_donor
```
php artisan migrate
```
```
php artisan db:seed--class=CreateUsersSeeder
```
```
php artisan serve
```

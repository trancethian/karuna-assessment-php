## Prerequisites
**PHP** 8.1 or above\
**MySQL** 5.7\
**npm** 8.x or above

## Setup
### 1. Copy .env.example to .env
Update database settings accordingly for example
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=karuna_assessment_php
DB_USERNAME=root
DB_PASSWORD=
```
### 2. Install composer dependencies
`composer i`
### 3. Install npm dependencies
`npm i`
### 4. Generate new application key
`php artisan key:generate`
### 5. Migrate tables to database
`php artisan migrate`
### 6. Finally, serve the site locally
`php artisan serve`

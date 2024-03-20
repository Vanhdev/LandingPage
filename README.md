# Landing Page

Laravel version 11

PHP version 8.3.4

## Setup thư viện

Cài đặt các thư viện

```
composer install 
```

## Setup cơ sở dữ liệu

Tạo database mysql
```
create database [DATABASE_NAME];
```

Đặt các biến môi trường 

```
DB_CONNECTION=mysql
DB_HOST=[DB_HOST]
DB_PORT=[DB_PORT]
DB_DATABASE=[DB_DATABASE]
DB_USERNAME=[DB_USERNAME]
DB_PASSWORD=[DB_PASSWORD]

```

Chạy lệnh migrate

```
php artisan migrate
```
## Chạy project
```
php artisan serve
```


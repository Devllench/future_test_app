# future_test_app
Test site for portfolio 

Инструкция для запуска сайта.

Для запуска сайта необходимо установить PHP 7.4 или выше, MySQL, NodeJS

1. Создать базу данных.
2. Импортировать базу данные database.sql
3. Загрузить файлы в корневую дикторию сайта командой git clone https://github.com/Devllench/future_test_app.git
4. Выполнить composer install
5. Переименовать .env.example в .env и обновил его с вашими учетными данными базы данных
6. Выполнить php artisan key:generate
7. Выполнить php artisan serve
8. Перейдите в браузере на сайт 

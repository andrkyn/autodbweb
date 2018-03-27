<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>



           contains the entry script and Web resources

Development
-------------------
Разработка задания

Задание выполнено на MVC шаблоне yii2-app-basic

PHP - Version 7.0.27-1+ubuntu16.04.1
Linux - ubuntu16.04.1
Server API - Apache 2.0
SQL сервер - MySql 5.0.12



--------------------
Клонировать репозиторий

git clone https://github.com/andrkyn/autodbweb.git


vendor
----------------------
Обновление путей vendor через composer

php composer update

Change login & passw
----------------------
сменить логин и пароль для подключения базы:
config/db.php
   'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=autoDB',
    'username' => 'root',
    'password' => 'sql123',
    'charset' => 'utf8',
----------------------
развернуть пустую базу MySql из консоли папки проекта

php yii migrate
----------------------
php yii migrate

Заполнить базу с дампа

config/autoDB.sql  ->  Run 'autoDB.sql'


открыть приложение в браузере 



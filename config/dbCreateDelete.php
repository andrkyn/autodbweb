<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>Data base</h2>
<form method="post">
    Создать базу данных:<br>
    <input name="dbCreate" type="submit" value="DB Create" />
    <input name="dbDelete" type="submit" value="DB Delete" />
    <input name="redirect" type="submit" value="Redirect to main page" />

</body>
</html>


<?php
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 09.02.18
 * Time: 12:35
 */

$servername = "localhost";
$username = "root";
$passw = "sql123";


$connect=new mysqli($servername,$username,$passw); //экземпляр класса
//$connect->set_charset("utf8");

if ($connect->connect_error) {  // если соединение получит error
    die("Connection failed: " .$connect->connect_error); // то пропишем сообщение Connection failed и почему
}

if (isset($_POST['dbCreate'])) {
    $sql = "CREATE DATABASE autoDB COLLATE utf8_general_ci";  //создание базы данных
//$sql ="DROP DATABASE IF EXISTS autoDB";  //создание базы данных

    if ($connect->query($sql) === TRUE) {  // запрос к переменной, если успешно
        echo "<h3>Database created successfully</h3>" . $sql;
    } else {
        echo "Error " . $connect->error; //если ошибка и соедин. не установлено
    }

    $connect->close();

    $dbname = "autoDB";
    $connect = new mysqli($servername, $username, $passw, $dbname);

     //categories
    $sql = "CREATE TABLE categories (
    id INT (4) NOT NULL PRIMARY KEY,
    name VARCHAR (100) NOT NULL,
    img VARCHAR (150) NOT NULL, 
    description TEXT NOT NULL )";

    if ($connect->query($sql) === TRUE) {  //проверка условия,создана ли таблица
        echo "<h3>Table categories is created</h3>" .$servername ."<br>" .$sql;
    } else {
        echo "Error" . $connect->error;
    }

    //car (poducts)
    $sql = "CREATE TABLE car(
    id INT (4) NOT NULL PRIMARY KEY,
    category INT(4) NOT NULL,
    name VARCHAR (100) NOT NULL,
    price VARCHAR (10) NOT NULL,
    price_old INT (4) NOT NULL,
    img VARCHAR (150) NOT NULL,
    description TEXT NOT NULL )";

    if ($connect->query($sql) === TRUE) {  //проверка условия,создана ли таблица
        echo "<h3>Table car is created</h3>" .$servername ."<br>" .$sql;
    } else {
        echo "Error" . $connect->error;
    }

    $sql = "CREATE TABLE characteristics(
    id INT (4) NOT NULL PRIMARY KEY,
    id_car INT (4) NOT NULL,
    name INT (100) NOT NULL,
    text VARCHAR (100) NOT NULL )";

    if ($connect->query($sql) === TRUE) {  //проверка условия,создана ли таблица
        echo "<h3>Table characteristics is created</h3>" .$servername ."<br>"
              .$sql;
    } else {
        echo "Error" . $connect->error;
    }

    $sql = "CREATE TABLE reviews(
    id INT (4) NOT NULL PRIMARY KEY,
    id_car INT (4) NOT NULL,
    id_user INT (4) NOT NULL,
    text TEXT NOT NULL,
    rating INT (1) NOT NULL)";

    if ($connect->query($sql) === TRUE) {  //проверка условия,создана ли таблица
        echo "<h3>Table reviews is created</h3>" .$servername ."<br>"
              .$sql;
    } else {
        echo "Error" . $connect->error;
    }

    $sql = "CREATE TABLE cart(
    id INT (4) NOT NULL PRIMARY KEY,
    id_user INT (4) NOT NULL,
    mass_car VARCHAR (255) NOT NULL,
    status VARCHAR (200) NOT NULL )";

    if ($connect->query($sql) === TRUE) {  //проверка условия,создана ли таблица
        echo "<h3>Table cart is created</h3>" .$servername ."<br>"
              .$sql;
    } else {
        echo "Error" . $connect->error;
    }

    $sql = "CREATE TABLE wish_list(
    id INT (4) NOT NULL PRIMARY KEY,
    id_user INT (4) NOT NULL,
    mass_car VARCHAR (255) NOT NULL )";

    if ($connect->query($sql) === TRUE) {  //проверка условия,создана ли таблица
        echo "<h3>Table wish_list is created</h3>" .$servername ."<br>"
              .$sql;
    } else {
        echo "Error" . $connect->error;
    }

    $sql = "CREATE TABLE users(
    id INT (5) NOT NULL PRIMARY KEY,
    user_name VARCHAR (20) NOT NULL,
    user_surname VARCHAR (20) NOT NULL,
    email VARCHAR (20) NOT NULL,
    phone VARCHAR (100) NOT NULL,
    adress TEXT NOT NULL )";

    if ($connect->query($sql) === TRUE) {  //проверка условия,создана ли таблица
        echo "<h3>Table users is created</h3>" .$servername ."<br>"
              .$sql;
    } else {
        echo "Error" . $connect->error;
    }
}
$connect->close();

if (isset($_POST['dbDelete'])) {
//$sql ="CREATE DATABASE autoDB";  //создание базы данных
    $connect = new mysqli($servername, $username, $passw);
    $sql ="DROP DATABASE IF EXISTS autoDB";  //создание базы данных

    if ($connect->query($sql) === TRUE) {  // запрос к переменной, если успешно
        echo "<h3>Database deleted successfully</h3>". $servername ."<br>" .$sql;
    } else {
        echo "Error " . $connect->error; //если ошибка и соедин. не установлено
    }
}

if (isset($_POST['redirect'])) {
    header("Location: http://{$_SERVER['SERVER_NAME']}/web/");
}

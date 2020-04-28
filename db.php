<?php


function connect_db() {
  $host = '127.0.0.1';  // Хост, у нас все локально
  $user = 'root';    // Имя созданного вами пользователя
  $pass = ''; // Установленный вами пароль пользователю
  $db_name = 'chatbd';   // Имя базы данных
  $connect =  mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой
  return $connect;
}

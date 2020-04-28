<?php

#Загрузка сообщений с БД
require('db.php');
$connect = connect_db();

  $query = mysqli_query($connect, "SELECT * FROM message_table");
  $messages=array();
  if ($query) {
    while ($row = mysqli_fetch_assoc($query)) {
      $messages[] = $row ;
    }
  }



mysqli_close ($connect);
require('template.php');

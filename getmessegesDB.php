<?php
#Загрузка сообщений с БД

require('connectDB.php');
$connect = connect_db();
$query = mysqli_query($connect, "SELECT * FROM message_table");
$messages=array();
if ($query) {
  while ($row = mysqli_fetch_assoc($query)) {
    $messages[] = $row;
  }
  echo json_encode($messages);
}
?>

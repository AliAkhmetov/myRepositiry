<?php
$post = $_POST['message'];

require('connectDB.php');

$connect = connect_db();
// Ругаемся, если соединение установить не удалось
if (!$connect) {
  echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
exit;}
$sql = mysqli_query($connect,  "INSERT INTO `message_table` (`TEXT`, `AUTHOR`, `TIME`)
                                VALUES ('$post' , 'ali', CURRENT_TIMESTAMP)");

if ($sql) {
}else {
  echo "не норм";
};


mysqli_close ($connect);
?>

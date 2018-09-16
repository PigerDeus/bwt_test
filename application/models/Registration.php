<?php
  /**
   *
   */
  class Registration {
    public static function getUser() {
      $db = DB::getConnection();

      $query = "CREATE TABLE IF NOT EXISTS users(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(20) NOT NULL,
        surname VARCHAR(20) NOT NULL,
        email VARCHAR(50) NOT NULL,
        gender VARCHAR(10),
        birthday DATETIME
      )";
      $result = mysqli_query($db, $query) or die("Ошибка " . mysqli_error($link));
      if($result) {
          echo "Создание таблицы прошло успешно";
      }
    }
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  </head>
  <body>
    <!-- Классы navbar и navbar-default (базовые классы меню) -->
<nav class="navbar navbar-default">
  <!-- Контейнер (определяет ширину Navbar) -->
  <div class="container-fluid">
    <!-- Заголовок -->
    <div class="navbar-header">
      <a class="navbar-brand" href="/registration">Регистрация</a>
      <a class="navbar-brand" href="/weather">Погода</a>
      <a class="navbar-brand" href="/feedback">Обратная связь</a>
      <a class="navbar-brand" href="/listfeedback">Список фидбеков</a>
    </div>
    <!-- Основная часть меню (может содержать ссылки, формы и другие элементы) -->
    <div class="collapse navbar-collapse" id="navbar-main">
      <!-- Содержимое основной части -->
    </div>
  </div>
</nav>
<h1>Регистрация</h1>

<?php
  $data = $_POST;
  if ( isset($data['do_signup'])) {
    $errors = array();
    if (trim($data['name']) == '') {
      $errors[] = 'Введите имя';
    }
    if (trim($data['surname']) == '') {
      $errors[] = 'Введите фамилию';
    }
    if (trim($data['email']) == '') {
      $errors[] = 'Введите email';
    }

    if (empty($errors)) {

    } else {
      echo "<div style = 'color: red;'>".array_shift($errors)."</div>";
    }
  }

 ?>
  <form  action="registration.php" method="POST" >
    <p>
      <p><strong>Имя:</strong>
      </p>
      <input type="text" name="name" required value="<?php echo @$data['name']; ?>">
    </p>
    <p>
      <p><strong>Фамилия:</strong>
      </p>
      <input type="text" name="surname" required value="<?php echo @$data['surname'];?>">
    </p>
    <p>
      <p><strong>Email:</strong>
      </p>
      <input type="email" name="email" required value="<?php echo @$data['email']; ?>">
    </p>
    <p>
      <p><strong>Пол:</strong>
      </p>
      <input type="text" name="gender" value="<?php echo @$data['gender']; ?>">
    </p>
    <p>
      <p><strong>Дата рождения:</strong>
      </p>
      <input type="text" name="birthday" value="<?php echo @$data['birthday']; ?>">
    </p>

    <p>
      <button type="submit" name="do_signup" >Зарегистрироваться</button>
    </p>
  </form>
  </body>
</html>

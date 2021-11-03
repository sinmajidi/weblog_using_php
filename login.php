<!DOCTYPE html>
<html lang="fa">
<head>
  <title>وبلاگ</title>
  <link rel="stylesheet" href="css/styles.css">

</head>
<header>
<?php
include_once('header.php');
?>
</header>

<body>

<form action="validate.php" method="post">
  <div class="container">
    <div class="login">
      <h1>ورود</h1>
      <hr>
      <label for="email"><b>ایمیل</b></label>
      <input type="text" placeholder="ایمیل" name="email" id="email" required>
      <label for="psw"><b> رمز ورود</b></label>
      <input type="password" placeholder="رمز ورود" name="psw" id="psw" required>
      <hr>
      <button type="submit" class="registerbtn">ورود </button>
    </div>
  </div>
</form>

</body>

<footer>
<?php
include_once('footer.php');
?>
</footer>

</html>
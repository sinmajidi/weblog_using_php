
<!DOCTYPE html>
<html lang="fa">
<head>
  <title>وبلاگ</title>
  <link rel="stylesheet" href="css/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
<?php
include_once('header.php');
?>
</header>

<body>

<form action="signup.php" method="post">
  <div class="container">
    <div class="register">
      <h1>ثبت نام</h1>
      <hr>
      <div class="register_grid">
          <label for="username"><b>نام کاربری</b></label>
          <input type="text" placeholder="نام کاربری" name="username" id="username" required>
          <label for="email"><b>ایمیل</b></label>
          <input type="text" placeholder="ایمیل" name="email" id="email" required>
          <label for="psw"><b> رمز ورود</b></label>
          <input type="password" placeholder="رمز ورود" name="psw" id="psw" required>
          <label for="psw-repeat"><b>تکرار رمز ورود</b></label>
          <input type="password" placeholder=" تکرار رمز ورود" name="psw-repeat" id="psw-repeat" required>
      </div>
      <hr>
      <p>برای عضویت قوانین را مطالعه کنید <a href="#">قوانین</a>.</p>

      <button type="submit" class="registerbtn">ثبت نام</button>
    </div>
    <div class="container_signin">
      <p>آیا ثبت نام کرده اید؟ <a href="login.php"> ورود</a>.</p>
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




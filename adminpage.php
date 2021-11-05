<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <p>admin page</P>
  <?php
 $cookie_name = "user";
 
if(count($_COOKIE) > 0) {
    //echo "Cookies are enabled.";
  } else {
    //cho "Cookies are disabled.";
  }

  if(!isset($_COOKIE[$cookie_name])) {
    //echo "Cookie named '" . $cookie_name . "' is not set!";
  } else {
    //echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo  "wellcome ".$_COOKIE[$cookie_name] ;
  }
?>
</html>
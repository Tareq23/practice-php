<!doctype html>
<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
    <title>User Registration  form</title>
    <style>

    .form{
        width:50%;
        margin:auto 0;
    }


    </style>
</head>
<body>
    


<h2>New User Registration</h2>

<form class="form" action="register.php" method="post">
  <div>
    <label for="first_name">First Name</label>
    <input type="text" id = "first_name" name="first_name">
  </div><br>
  <div>
    <label for="last_name">Last Name</label>
    <input type="text" id ="last_name" name="last_name">
  </div><br>
  <div>
    <label for="email">Enter Your Email</label>
    <input type="email" id="email"name="email">
  </div><br>
  <div>
    <input type="submit" name="register" value="submit">
  </div>
</form>

</body>





</html>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="hudara.css">
</head>
<body class="container">
  <div class="header">
    <h2>Login</h2>
  </div>
<form method="post" action="login.php" class="login-form">
    <? include'login.php'; ?>
    <div class="input-group">
      <input type="number" name="id" placeholder="ID">
    </div>
    <div class="input-group">
    <input type="text" name="username" placeholder="Username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>">
    </div>
    <div class="input-group">
      <input type="password" name="password" placeholder="Password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p class="signup-link">
      Don't have an account? <a href="register.php">Sign up</a>
    </p>
  </form>

</body>
</html>
<?php include "./header.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

      <div class="container" style="margin-top: 20px; align-items: center; justify-content: center;">
      <h1>Create an Account</h1>
      <form style="width: 50%;" action="../register.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="name" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="password-check">Password Again</label>
            <input type="password" class="form-control" id="password-check" placeholder="Password">
            <a href="./login_page.php">Log in if you already have an account</a>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>
      </div>
  </body>
</html>
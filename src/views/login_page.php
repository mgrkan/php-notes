<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In Paeg</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
</html>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container" style="margin-top: 20px; align-items: center; justify-content: center;">
    <h1>Log In</h1>
    <form style="width: 50%;" action="../login.php" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="name" class="form-control" name="username" id="username" aria-describedby="username" placeholder="Enter username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        <a href="./register_page.php">No account? Click here to register.</a>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
    </form>
    </div>
</body>
</html>
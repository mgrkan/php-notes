<?php 
if(!isset($_SESSION)){ 
    session_start(); 
} 

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $title = $_POST["title"];
    $content = $_POST["content"];
    $id = $_POST["id"];
}

include "./header.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Not Oluştur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

        <div class="container" style="margin-top: 20px; align-items: center; justify-content: center;">
            <form action="../edit.php" method="POST">
                <div class="mb-3">
                <label for="title" class="form-label">Başlık</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Başlık" value="<?= $title ?>">
                </div>
                <div class="mb-3">
                <label for="content" class="form-label">İçerik</label>
                <textarea class="form-control" id="content" name="content" rows="3"><?= $content  ?></textarea>
                <input type="hidden" name="id" value="<?= $id ?>">
                </div>
                <button type="submit" class="btn btn-primary mt-2">Gönder</button>
            </form>
        </div>
    </body>
</html>
<?php
if(!isset($_SESSION)){ 
    session_start(); 
} 
require_once 'db.php';
require_once 'auth.php';

redirectIfNotLoggedIn();
include 'views/header.php';

$sql = "SELECT * FROM notes WHERE user_id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['user_id']]);
$notes = $stmt->fetchAll();
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Notlarım</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <div class="container" style="margin-top: 20px; align-items: center; justify-content: center;">  
            <?php foreach($notes as $note): ?>
                <div class="card" style="width: 18rem; margin-top: 15px;">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($note['title']) ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?= htmlspecialchars($note['created_at']) ?></h6>
                        <p class="card-text"><?= htmlspecialchars($note['content']) ?></p>
                        <form action="./views/edit_page.php" method="POST">
                            <input type="hidden" name="title" value="<?= htmlspecialchars($note['title']) ?>">
                            <input type="hidden" name="content" value="<?= htmlspecialchars($note['content']) ?>">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($note['id']) ?>">
                            <button type="submit" class="btn btn-primary mt-2">Edit</button>
                        </form>
                        <form action="./delete.php" method="POST">
                            <input type="hidden" name="id" value="<?= htmlspecialchars($note['id']) ?>">
                            <button type="submit" class="btn btn-primary mt-2">delete</button>
                        </form>
                    </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </body>
</html>
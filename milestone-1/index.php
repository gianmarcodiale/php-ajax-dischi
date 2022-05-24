<?php
include __DIR__ . "/database.php";
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <?php foreach ($discs as $disc) : ?>
                <div class="card text-center">
                    <img class="card-img-top" src="<?= $disc['poster'] ?>" alt="">
                    <div class="card-body">
                        <h4 class="card-title"><?= $disc['title'] ?></h4>
                        <p class="card-text"><?= $disc['author'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>
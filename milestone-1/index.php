<?php
include __DIR__ . "/db.php";
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
        <div class="row row-cols-5 gy-3">
            <?php foreach ($discs as $item) : ?>
                <?php foreach ($item as $key => $disc) : ?>
                    <div class="col">
                        <div class="card text-center" style="height:320px">
                            <img class="card-img-top img-fluid text-center" style="max-width:200px" src="<?= $disc['poster'] ?>" alt="">
                            <div class="card-body">
                                <h4 class="card-title"><?= $disc['title'] ?></h4>
                                <p class="card-text"><?= $disc['author'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php endforeach ?>
        </div>
    </div>

</body>

</html>
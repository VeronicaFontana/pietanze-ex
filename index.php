<?php

require_once __DIR__ . "/Model/Pietanza.php";
require_once __DIR__ . "/Model/Pizza.php";
require_once __DIR__ . "/Model/Pasta.php";
require_once __DIR__ . "/Model/Media.php";
require_once __DIR__ . "/db/db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Pizzeria</title>
</head>
<body>
  <div class="container d-flex flex-wrap">
    <?php foreach($pietanze as $pietanza): ?>
      <div class="card" style="width: 18rem;">
        <img src="img/<?php echo $pietanza->image?->file_name ?? "pizza_placeholder.jpg" ?>" class="card-img-top" alt="<?php echo $pietanza->image?->name ?? " " ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $pietanza->name ?></h5>
          <p class="card-text"><?php echo implode(" - ", $pietanza->ingredients) ?></p>
          <p class="card-text">&euro; <?php echo $pietanza->price ?></p>
          <p class="card-text">Tipo: <?php echo get_class($pietanza) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>
</html>
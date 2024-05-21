<?php
require "db_connect.php";

$sql = "SELECT * FROM `listofmedia` ";

$result = mysqli_query($conn, $sql);

$layout = "";
$publisher_name_url = "";
if (mysqli_num_rows($result) == 0) {
    $layout .= "No results found";
} else {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($rows as $row) {
        $publisher_name_url = urlencode($row["publisher_name"]);
        $layout .= "
        <div>
        <div class='card index' style='width: 18rem;'>
        <a href= 'details.php?id={$row["id"]}'>
  <img src='pictures/{$row["image"]}' class='card-img-top' alt='image of media item'>
  </a>
  <div class='card-body'>
    <h2 class='card-title'>{$row["title"]} ({$row["publish_date"]})</h2>
    <p class='card-text'>by {$row["author_first_name"]} {$row["author_last_name"]}</p>
    <p class='publisher'><a href='publisher.php?publisher_name={$publisher_name_url}'>{$row["publisher_name"]} </a> </p>
   <a href= 'details.php?id={$row["id"]}' class='btn'>Show details</a>
  </div>
</div>
</div>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include "navbar.html"; ?>
    <div class="container">
        <h1>All Media Items</h1>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-sm-1">
            <?= $layout ?>
        </div>
    </div>
    <?php include "footer.html"; ?>

</body>

</html>
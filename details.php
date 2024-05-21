<?php
require "db_connect.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM `listofmedia` WHERE id = {$id}";

    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
} else {
    header("Location: index.php");
}

$available = "";
if ($row["availability"] == 0) {
    $available = "reserved";
} else {
    $available = "available";
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
    <div class="container detail">
        <div class="card" style="margin-top: 0px; height: 350px;">
            <div class="card-detail row row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                <div class="img">
                    <img src='pictures/<?= $row['image'] ?>' class='card-img-top' alt='...'>
                </div>
                <div class='card-body'>
                    <h5 class='card_title'><?= $row["title"] ?> (<?= $row["publish_date"] ?>)</h5>

                    <table>
                        <tr>
                            <td class="detail-attr">Author:</td>
                            <td><?= $row["author_first_name"]; ?> <?= $row["author_last_name"] ?></td>
                        </tr>
                        <tr>
                            <td class="detail-attr">Type of media:</td>
                            <td><?= $row["type"] ?></td>
                        </tr>
                        <tr>
                            <td class="detail-attr">ISBN-code:</td>
                            <td><?= $row["isbn"] ?></td>
                        </tr>
                        <tr>
                            <td class="detail-attr">Publisher:</td>
                            <td><?= $row["publisher_name"] ?></td>
                        </tr>
                        <tr>
                            <td class="detail-attr">Publisher address:</td>
                            <td><?= $row["publisher_address"] ?></td>
                        </tr>
                        <tr>
                            <td class="detail-attr">Availability:</td>
                            <td><?= $available ?></td>
                        </tr>

                    </table>


                    <p class='card-text'><?= $row["short_description"] ?></p>
                    <a href="index.php" class="btn">Back to Homepage</a>
                </div>
            </div>
        </div>
    </div>
    <?php include "footer.html"; ?>

</body>

</html>
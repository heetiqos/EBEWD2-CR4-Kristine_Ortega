<?php

require "db_connect.php";
require "file_upload.php";

if (isset($_POST["create"])) {
    $title = $_POST["title"];
    $image = fileUpload($_FILES["image"]);
    $isbn = $_POST["isbn"];
    $short_description = $_POST["short_description"];
    $type = $_POST["type"];
    $author_first_name = $_POST["author_first_name"];
    $author_last_name = $_POST["author_last_name"];
    $publisher_name = $_POST["publisher_name"];
    $publisher_address = $_POST["publisher_address"];
    $publish_date = $_POST["publish_date"];



    $sql = "INSERT INTO `listofmedia`(`title`, `image`, `isbn`, `short_description`, `type`, `author_first_name`, `author_last_name`,
     `publisher_name`, `publisher_address`, `publish_date`) VALUES ('{$title}','{$image[0]}','{$isbn}','{$short_description}',
     '{$type}','{$author_first_name}','{$author_last_name}','{$publisher_name}','{$publisher_address}','{$publish_date}')";

    //mysqli_query($conn, $sql);

    //header("Location: index.php");
    if ((empty($_POST["title"])) || (empty($_POST["isbn"])) || (empty($_POST["short_description"]))
        || (empty($_POST["type"])) || (empty($_POST["author_first_name"])) || (empty($_POST["author_last_name"]))
        || (empty($_POST["publish_date"]))
    ) {
        echo "All fields are required";
        $error = true;
    } else {
        if (mysqli_query($conn, $sql)) {
            echo "<div class='alert alert-success' role='alert'>
                Item has been created, {$image[1]}
             </div>";

            header("refresh: 3; url= index.php");
        } else {
            echo "<div class='alert alert-danger' role='alert'>
                Something went wrong , please try again
            </div>";
        }
    }
}

// $error = $false;
// if(isset($_POST ["submit"])) {
//     $isbn = $_POST ["isbn"];
//     $publish_date = $_POST ["publish_date"];

//     if (strlen($isbn) >17){
//         echo "Please enter a valid ISBN Code (upto 17 characters)";
//     }elseif{}
// }



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
    <link rel="stylesheet" href="style.css">

    <div class="container">

        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" placeholder="image" name="image">
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN Code </label>
                <input type="text" class="form-control" id="isbn" placeholder="isbn code" name="isbn" maxlength="17">
            </div>
            <div class="mb-3">
                <label for="short_description" class="form-label">Short Description</label>
                <input type="text" class="form-control" id="short_description" placeholder="short description" name="short_description">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" placeholder="type" name="type">
            </div>
            <div class="mb-3">
                <label for="author_first_name" class="form-label">Author First Name</label>
                <input type="text" class="form-control" id="author_first_name" placeholder="author first name" name="author_first_name">
            </div>
            <div class="mb-3">
                <label for="author_last_name" class="form-label">Author Last Name</label>
                <input type="text" class="form-control" id="author_last_name" placeholder="author last name" name="author_last_name">
            </div>
            <div class="mb-3">
                <label for="publisher_name" class="form-label">Publisher Name</label>
                <input type="text" class="form-control" id="publisher_name" placeholder="publisher name" name="publisher_name">
            </div>
            <div class="mb-3">
                <label for="publisher_address" class="form-label">Publisher Address</label>
                <input type="text" class="form-control" id="publisher_address" placeholder="publisher address" name="publisher_address">
            </div>
            <div class="mb-3">
                <label for="publish_date" class="form-label">Publish Date</label>
                <input type="number" class="form-control" id="publish_date" placeholder="year of publication (YYYY)" name="publish_date" min="-1700" step="1" max="2024">
            </div>

            <input name="create" type="submit" class="btn btn-primary" value="create item">
            <a class="btn btn-warning" href="index.php"> Back to Home Page</a>

        </form>
    </div>
</body>

</html>
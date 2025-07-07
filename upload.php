<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_FILES['image']['name'];
    $tmp   = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "uploads/$image");

    $conn->query("INSERT INTO images (filename) VALUES ('$image')");
    header("Location: index.php");
}
?>

<h2>Upload Image</h2>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button type="submit">Upload</button>
</form>
<a href="index.php">View Gallery</a>

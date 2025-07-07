<?php
include "db.php";
$id = $_GET['id'];

$result = $conn->query("SELECT filename FROM images WHERE id=$id");
$row = $result->fetch_assoc();
$filename = $row['filename'];

// Delete file from folder
unlink("uploads/$filename");

// Delete from DB
$conn->query("DELETE FROM images WHERE id=$id");

header("Location: index.php");
?>

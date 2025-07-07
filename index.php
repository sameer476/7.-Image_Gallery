<?php
include "db.php";
$images = $conn->query("SELECT * FROM images ORDER BY id DESC");
?>

<h2>🖼️ Image Gallery</h2>
<a href="upload.php">+ Upload New Image</a>
<hr>

<style>
.gallery {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}
.gallery img {
    width: 200px;
    height: 150px;
    object-fit: cover;
    border: 2px solid gray;
}
</style>

<div class="gallery">
<?php while($row = $images->fetch_assoc()): ?>
    <div>
        <img src="uploads/<?= $row['filename'] ?>"><br>
        <a href="delete.php?id=<?= $row['id'] ?>">❌ Delete</a>
    </div>
<?php endwhile; ?>
</div>

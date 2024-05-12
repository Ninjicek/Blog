<?php
include 'db.php';
include 'layout/head.php'; 
include 'layout/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO articles (title, content) VALUES (?, ?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$title, $content]);

    header('Location: index.php');
}
?>

<form method="post" id="form">
    <label for="title">Název:</label>
    <input type="text" name="title" id="title" required>
    <br>
    <label for="content">Obsah:</label>
    <textarea name="content" id="content" required></textarea>
    <br>
    <button type="submit" class="btn btn-primary">Přidej článek</button>
</form>

<?php
include 'layout/footer.php';
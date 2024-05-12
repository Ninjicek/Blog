<?php
include 'layout/head.php'; 
include 'layout/header.php';
?>
<body>
    <?php
    include 'db.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM articles WHERE id =?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $article = $stmt->fetch();

        if ($article) {
            ?>
            <form method="post" action="edit_article.php" id="form">
                <input type="hidden" name="id" value="<?= htmlspecialchars($article['id'])?>">
                <label for="title">Název:</label>
                <input type="text" name="title" id="title" value="<?= htmlspecialchars($article['title'])?>" required>
                <br>
                <label for="content">Obsah:</label>
                <textarea name="content" id="content" required><?= htmlspecialchars($article['content'])?></textarea>
                <br>
                <button type="submit" class="btn btn-primary">Uchovat změny</button>
            </form>
            <?php
        } else {
            echo "Article not found";
        }
    } else {
        echo "No article ID provided";
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "UPDATE articles SET title =?, content =? WHERE id =?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$title, $content, $id]);

        header('Location: index.php');
    }

    include 'layout/footer.php';
    ?>

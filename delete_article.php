<?php
include 'db.php';
include 'layout/head.php'; 
include 'layout/header.php';
?>

    <?php
    

    if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
        $id = (int) $_GET['id'];

        $sql = "SELECT * FROM articles WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);
        $article = $stmt->fetch();

        if ($article) {
            ?>
           <article class="del">
           <p>Jste jsi jisti že chcete odebrat článek s názvem "<strong><?= htmlspecialchars($article['title']) ?></strong>"?</p>
            <form method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="action" value="delete">
                <button type="submit" class="btn btn-danger">Ano</button>
            </form>
           </article>
            <?php
        } else {
            header('Location: index.php');
            exit;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'delete') {
        $id = (int) $_POST['id']; 

        $sql = "DELETE FROM articles WHERE id = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$id]);

        header('Location: index.php');
        exit;
    }


 include 'layout/footer.php';   
    ?>

<?php
include 'db.php';
include 'logic/search_logic.php';
?>

<div class="container">
    <a href="add_article.php" class="btn btn-primary mb-4 d-flex align-items-center justify-content-center">
    <span class="material-symbols-outlined" style="font-size: 5rem;">add</span>
    </a>
    <form method="get" action="index.php">
    <div class="form-group d-flex">
        <div class="flex-grow-1 ms-3">
            <label for="sort_by"></label>
            <select name="sort_by" class="form-control">
                <option value="created_at">Čas vytvoření</option>
                <option value="title">Nazev</option>
            </select>
        </div>
        <div class="flex-grow-1 ms-3">
            <label for="sort_order"></label>
            <select name="sort_order" class="form-control">
                <option value="ASC">Vzestupně</option>
                <option value="DESC">Sestupně</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary ms-3 srt">Seřaď</button>
</form>
        <?php foreach ($articles as $article):?>
            <div class="card my-4">
                <div class="card-header">
                    <h2 class="mb-0"><?= htmlspecialchars($article['title'])?> <span style="font-size: 0.5em; color: gray;"><?= htmlspecialchars(date('d.m.Y H:i:s', strtotime($article['created_at'])))?></span></h2>
                </div>
                <div class="card-body">
                    <p><?= htmlspecialchars($article['content'])?></p>
                </div>
                <div class="card-footer text-muted" id="right">
                    <a href="edit_article.php?id=<?= $article['id']?>" class="btn btn-primary"><span class="material-symbols-outlined">edit</span></a>
                    <a href="delete_article.php?id=<?= $article['id']?>" class="btn btn-danger"><span class="material-symbols-outlined">delete</span></a>
                </div>
            </div>
        <?php endforeach;?>
    </div>

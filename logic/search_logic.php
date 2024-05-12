<?php
    

    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'created_at';
    $sort_order = isset($_GET['sort_order']) ? $_GET['sort_order'] : 'DESC';

    if (!empty($search)) {
        $sql = "SELECT * FROM articles WHERE title LIKE ? ORDER BY $sort_by $sort_order";
        $stmt = $db->prepare($sql);
        $stmt->execute(['%' . $search . '%']);
        $articles = $stmt->fetchAll();
    } else {
        $sql = "SELECT * FROM articles ORDER BY $sort_by $sort_order";
        $stmt = $db->query($sql);
        $articles = $stmt->fetchAll();
    }
    ?>
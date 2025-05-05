<?php
include 'includes/db.php';
$result = pg_query($db_conn, "SELECT * FROM articles ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Статьи</title>
    <style>
        body { font-family: Arial; margin: 2rem; }
        .article { border-bottom: 1px solid #ccc; padding: 1rem 0; }
        h2 { margin: 0 0 0.5rem; }
        p { margin: 0.5rem 0; }
        small { color: #666; }
        .top-link { margin-bottom: 2rem; display: block; }
    </style>
</head>
<body>
    <a class="top-link" href="/pages/add_article.php">+ Добавить статью</a>

    <?php while ($row = pg_fetch_assoc($result)): ?>
        <div class="article">
            <h2><?= htmlspecialchars($row['title']) ?></h2>
            <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
            <small><?= $row['created_at'] ?></small>
        </div>
    <?php endwhile; ?>
</body>
</html>

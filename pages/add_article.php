<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $title = pg_escape_string($_POST['title']);
   $content = pg_escape_string($_POST['content']);

   $result = pg_query_params(
       $db_conn,
       "INSERT INTO articles (title, content) VALUES ($1, $2)",
       [$title, $content]
   );

   if ($result) {
       header("Location: /articles.php");
       exit;
   } else {
       echo "Ошибка: " . pg_last_error($db_conn);
   }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Добавить статью</title>
    <style>
        body { font-family: Arial; margin: 2rem; }
        form { max-width: 500px; margin: auto; }
        label, input, textarea { display: block; width: 100%; margin-bottom: 1rem; }
        textarea { height: 150px; }
        button { padding: 0.5rem 1rem; background-color: #28a745; color: white; border: none; cursor: pointer; }
        a { display: block; margin-top: 20px; text-align: center; }
    </style>
</head>
<body>
    <h1>Добавить статью</h1>
    <form method="POST">
        <label>Заголовок</label>
        <input type="text" name="title" required>

        <label>Содержание</label>
        <textarea name="content" required></textarea>

        <button type="submit">Сохранить</button>
    </form>
    <a href="/articles.php">← Вернуться к статьям</a>
</body>
</html>

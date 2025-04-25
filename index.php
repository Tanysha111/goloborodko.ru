<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Главная</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        h1 {
            font-size: 2.5rem;
            color: #333;
        }
        .button {
            display: inline-block;
            padding: 15px 30px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <h1>Добро пожаловать!</h1>
        <a href="/articles.php" class="button">Статьи</a>
    </main>
    <?php include 'includes/footer.php'; ?>
</body>
</html>

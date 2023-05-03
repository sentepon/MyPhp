<head>
	<meta charset="UTF-8" />
	<title>Сортер</title>
	<link rel="stylesheet" href="style.css" />
</head>

<body>
	<header>
		<h1>Сортер</h1>
	</header>
	<main>
		<h2>Создать хэштег</h2>
		<form action="add_hashtag.php" method="POST">
			<label for="hashtag">Хэштег:</label><br />
			<input type="text" id="hashtag" name="hashtag" /><br />
			<button type="submit">Создать</button>
		</form>
	</main>
	<footer>
		<h2>stpavlenko</h2>
	</footer>
</body>
<?php

include 'db_connect.php';

// Добавляем хэштег в БД
if (!empty($_POST)) {

	$hashtag = $_POST['hashtag'];
	$hashtag = $mysqli->real_escape_string($hashtag);

	// Проверяем, существует ли хэштег с таким именем
	$result = $mysqli->query("SELECT * FROM Hashtags WHERE name='$hashtag'");
	if ($result->num_rows > 0) {
		echo "Хэштег уже существует";
		exit();
	}
	$result = $mysqli->query("INSERT INTO Hashtags (name) VALUES ('$hashtag')");
	if (!$result) {
		echo "Ошибка: " . $mysqli->error;
		exit();
	}
	$hashtag_id = $mysqli->insert_id;

	// Возвращаемся на страницу добавления сообщения
	header('Location: index.php');
	exit();
}

<?php
$description = $_POST['description'];
$hashtag = $_POST['hashtag'];

// Если хэштег не указан, то переходим на страницу создания нового хэштега
if (empty($hashtag)) {
	header('Location: add_hashtag.php');
	exit();
}

include 'db_connect.php';

// Проверяем, есть ли такой хэштег в БД
$result = $mysqli->query("SELECT * FROM Hashtags WHERE name='$hashtag'");
if ($result->num_rows == 0) {
	header('Location: add_hashtag.php');
	exit();
}

// Получаем id хэштега
$hashtag_id = $result->fetch_assoc()['id'];

// Добавляем сообщение в БД
$user_id = 1;
$channel_id = 1;
$description = $mysqli->real_escape_string($description);
$result = $mysqli->query("INSERT INTO SMS (hashtag_id, user_id, channel_id, Description) VALUES ('$hashtag_id', '$user_id', '$channel_id', '$description')");
echo "Сообщение успешно доставлено";
if (!$result) {
	echo "Ошибка: " . $mysqli->error;
	exit();
}

// Возвращаемся на страницу добавления сообщения
header('Location: index.php?message=success');

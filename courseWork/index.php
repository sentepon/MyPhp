<html>

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
    <h2>Создать сообщение</h2>
    <form action="add_sms.php" method="POST">
      <label for="description">Описание:</label>
      <textarea id="description" name="description"></textarea>
      <label for="hashtag">Хэштег:</label>
      <input type="text" id="hashtag" name="hashtag" />
      <button type="submit">Создать</button>
    </form>
    <?php
    if (isset($_GET['message']) && $_GET['message'] === 'success') {
      echo "Сообщение успешно добавлено!";
    }
    ?>
    <h2>Доступные хэштеги:</h2>
    <ul>
      <?php
      include 'db_connect.php';

      $result = $mysqli->query("SELECT * FROM Hashtags");
      while ($row = $result->fetch_assoc()) {
        echo '<li>' . $row['name'] . '</li>';
      }

      ?>
    </ul>
  </main>
  <footer>
    <h2>stpavlenko</h2>
  </footer>
</body>

</html>
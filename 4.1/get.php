<html>

<head>
    <title>4.1 get</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="container header__container">
            <img class="header__logo" src="./Politech.png" alt="logo">
            <h1>Павленко Степан 4.1. Домашняя работа: Feedback Form</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <textarea rows="10" cols="80">
                <?php
                print_r(get_headers($url = "https://httpbin.org/post"))
                ?>
            </textarea>
            <a href="./index.php">ссылка на первую страницу</a>
        </div>
    </main>
    <footer>
        <div class="container">
            <p>Мои контакты:</p>
            <a href="mailto:steponpc@mail.ru">steponpc@mail.ru</a>
        </div>
    </footer>
</body>

</html>
<html>

<head>
   <title>4.1 main</title>
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
         <form class="form" method="post" action="https://httpbin.org/post">
            <label class="form__label">
               <p class="form__text">Имя пользователя</p>
               <input name="name" type="text" class="form__input">
            </label>
            <label class="form__label">
               <p class="form__text">e-mail пользователя</p>
               <input name="email" type="email" class="form__input">
            </label>
            <p class="form__text">Тип обращения</p>
            <label class="form__label">
               <input name="request-type" value="complaint" type="radio" class="form__input">
               жалоба
            </label>
            <label class="form__label">
               <input name="request-type" value="offer" type="radio" class="form__input">
               предложение
            </label>
            <label class="form__label">
               <input name="request-type" value="thanks" type="radio" class="form__input">
               благодарность
            </label>
            <label class="form__label">
               <p class="form__text">Текст обращения</p>
               <textarea name="request-text" rows="5"></textarea>
            </label>
            <p class="form__text">Вариант ответа</p>
            <label class="form__label">
               <input name="feedback" value="sms" type="checkbox" class="form__input">
               смс
            </label>
            <label class="form__label">
               <input name="feedback" value="e-mail" type="checkbox" class="form__input">
               e-mail
            </label>
            <button class="form__button" type="submit">Отправить</button>
         </form>
         <a href="./get.php">ссылка на вторую страницу</a>
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
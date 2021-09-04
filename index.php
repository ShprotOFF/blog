<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap стили -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Пиздатый гугловский шрифт -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>Hello, world!</title>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-4">
            <h1><a href="/">My blog</a></h1>
          </div>
          <nav class="col-8">
            <ul>
              <li><a href="#">Обо мне</a></li>
            </ul>
          </nav>
        </div>        
      </div>
    </header>

    <div class="container">
      <div class="row">
        <div class="main-content col-md-9 col-12">
          <h2>Последние публикации</h2>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="assets/img/img.png" alt="Картинка к посту" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3><a href="#">Название поста</a></h3>
              <i class="far fa-user"> Имя автора:</i>
              <i class="far fa-calendar"> Сентябрь 3, 2021:</i>
              <p class="preview-text">
                Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Vel assumenda reiciendis quaerat dolore earum ex beatae ad eum explicabo provident modi eveniet, molestiae ipsum odio, quos repellendus illo laudantium consequuntur.
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="assets/img/img.png" alt="Картинка к посту" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3><a href="#">Название поста</a></h3>
              <i class="far fa-user"> Имя автора:</i>
              <i class="far fa-calendar"> Сентябрь 3, 2021:</i>
              <p class="preview-text">
                Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Vel assumenda reiciendis quaerat dolore earum ex beatae ad eum explicabo provident modi eveniet, molestiae ipsum odio, quos repellendus illo laudantium consequuntur.
              </p>
            </div>
          </div>

          <div class="post row">
            <div class="img col-12 col-md-4">
              <img src="assets/img/img.png" alt="Картинка к посту" class="img-thumbnail">
            </div>
            <div class="post_text col-12 col-md-8">
              <h3><a href="#">Название поста</a></h3>
              <i class="far fa-user"> Имя автора:</i>
              <i class="far fa-calendar"> Сентябрь 3, 2021:</i>
              <p class="preview-text">
                Lorem ipsum dolor, sit amet consectetur, adipisicing elit. Vel assumenda reiciendis quaerat dolore earum ex beatae ad eum explicabo provident modi eveniet, molestiae ipsum odio, quos repellendus illo laudantium consequuntur.
              </p>
            </div>
          </div>
        </div>

        <div class="sidebar col-md-3 col-12">

          <div class="section search">
            <h3>Поиск</h3>
            <form action="#" method="post">
              <input type="text" name="search-term" class="text-input" placeholder="Что ищем...?">
            </form>
          </div>

          <div class="section topics">
            <h3>Категории</h3>
            <ul>
              <li><a href="#">Раз</a></li>
              <li><a href="#">Два</a></li>
              <li><a href="#">Три</a></li>
              <li><a href="#">Четыре</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <footer class="container-fliud">
      <div class="footer-content container">
        <div class="row">
          <div class="footer-section about col-md-4 col-12">
            <h3 class="logo-text">Блох...! =)</h3>
            <p>Всё это сделано в перый раз</p>
            <div class="contact">
              <span><i class="fas fa-phone"></i> &nbsp; 123-456-789</span>
              <span><i class="fas fa-envelope"></i> &nbsp; mail@mail.ru</span>
            </div>
            <div class="socials">
              <a href="#"><i class="fab fa-facebook"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
          <div class="footer-section links col-md-4 col-12">
            <h3>Быстрые ссылки</h3>
            <br>
            <ul>
              <a href="#"><li>События</li></a>
              <a href="#"><li>Галерея</li></a>
              <a href="#"><li>Что-то ещё</li></a>
            </ul>
          </div>

          <div class="footer-section contact-form col-md-4 col-12">
            <h3>Контакты</h3>
            <br>
            <form action="#" method="post">
              <input type="email" name="email" class="text-input contact-input" placeholder="Введите мыло...">
              <textarea rows="4" name="message" class="text-input contact-input" placeholder="Сообщение..."></textarea>
              <button type="submit" class="btn btn-big contact-btn">
                <i class="fas fa-envelope"></i>Отправить</button>
            </form>
          </div>
        </div>

        <div class="footer-bottom">
          &copy; shprot.site | Desing by Shprot...=)
        </div>

      </div>
    </footer>

    <!-- Вариант 1: пакет Bootstrap с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
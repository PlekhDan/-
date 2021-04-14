<? session_start(); ?> <!-- php code -->

<!doctype html>
<html lang="ru">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <script src="https://kit.fontawesome.com/750282b7c8.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>First site</title>
    
        <style>
            body {
                background-color: #f8f8ff;
            }
        </style>
        
    </head>
  
    <body>
        <!-- Навигационная панель -->
        <nav class="navbar navbar-expand-md navbar-light bg-light my-3">
            <div class="container">
                <a class="navbar-brand btn btn-success" href="index.php" >
                    <i class="fab fa-earlybirds fa-4x"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacts.php">Контакты</a>
                        </li>
                    </ul>
                    <? if(empty($_SESSION['id'])):?> <!-- php code -->
                    <a class = "btn btn-success me-3" href="/old/auth.php">
                        <i class="fas fa-user me-3"></i>Войти
                    </a>
                    <a class = "btn btn-outline-dark" href="/old/reg.php">Регистрация</a>
                    <? else: ?> <!-- php code -->
                    <a class = "btn btn-success me-3" href="/old/account.php">
                        <i class="fas fa-user"></i>
                    </a>
                    <a class = "btn btn-outline-dark" href="/old/accountExit.php">Выход</a>
                    <? endif; ?> <!-- php code -->
                </div>
            </div>
        </nav>
        <!-- Конец навигационной панели -->
    
        <!-- Слайдер -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 500px;">
                    <img src="http://wallpapers-image.ru/1920x1080/nature/wallpapers/wallpapers-nature-1.jpg" class="d-block w-100" alt="картинка-1">
                </div>
                <div class="img carousel-item" style="height: 500px;">
                    <img src="http://wallpapers-image.ru/1920x1080/nature/wallpapers/wallpapers-nature-3.jpg" class="d-block w-100" alt="картинка-2">
                </div>
                <div class="img carousel-item" style="height: 500px;">
                    <img src="http://wallpapers-image.ru/1920x1080/nature/wallpapers/wallpapers-nature-5.jpg" class="d-block w-100" alt="картинка-3">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <!-- Конец слайдера -->
    
        <!-- Изучаемые технологии -->
        <div class="container pt-5 mb-5">
            <h2 class="text-center">Изучаемые технологии</h2>
            <div class="row text-center mt-5">
                <div class="col-md-4 mb-5">
                    <h4>HTML</h4>
                    <i class="fab fa-html5 fa-10x" style="color: #fd4b03;"></i> <!-- ссылка на конкретную иконку (сверху иконки) -->
                    <div class="col-6 text-center mx-auto p-2">
                        Язык гипертекстовой разметки
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h4>CSS</h4>
                    <i class="fab fa-css3-alt fa-10x" style="color: #00a7ea;"></i> <!-- fa-10x увеличить эконку в 10 раз (взято оттуда же из библиотеки с иконками) -->
                    <div class="col-6 text-center mx-auto p-2">
                        Каскадные таблицы стилей
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h4>JS</h4>
                    <i class="fab fa-js fa-10x" style="color: #ffde16;"></i>
                    <div class="col-6 text-center mx-auto p-2">
                        Мультипарадигменный язык программирования
                    </div>
                </div>
            </div>
        </div>
        <!-- Конец изучаемых технологий -->

        <!-- Промо текст -->
        <div class="container-fluid pt-5 pb-5 mb-5" style="background-image: url(http://wallpapers-image.ru/1920x1080/nature/wallpapers/wallpapers-nature-8.jpg); background-size: cover;">
            <div class="col-sm col-md-8 col-xl-6 mx-auto text-center p-5" style="background: rgba(0,0,0,0.5); color: white; border: 1px solid black;">
                <h4>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, voluptate, itaque nostrum velit molestiae repellendus temporibus odit ea reprehenderit nihil! Porro, voluptates, possimus autem beatae voluptatibus numquam fuga dicta rerum.
                </h4>
            </div>
        </div>
        <!-- Конец промо текста -->
    
        <!-- Обратная связь -->
        <div class="container mb-5">
            <div class="row">
                <h2 class="text-center">Контакты</h2>
                <div class="col-sm-12 col-md-6 pt-3">
                    <h6>Задайте Ваш вопрос:</h6>
                    <form onsubmit = "sendMail(this); return false;">
                        <div class="my-3">
                            <input name = "name" class="form-control" type="text" placeholder="Имя">
                        </div>
                        <div class="my-3">
                            <input name = "email" class="form-control" type="email" placeholder="E-mail">
                        </div>
                        <div class="my-3">
                            <textarea name = "text" class="form-control" rows="6" placeholder="Ваше сообщение"></textarea>
                        </div>
                        <input class="btn btn-success" type="submit" value="Получить консультацию">
                    </form>
                </div>
                <div class="col-1"></div>
                <div class="col-sm-12 col-md-5 pt-5">
                    <div class="row">
                       <h6 class="col-xs-8 col-md-4">Адрес:</h6>
                       <p class="col">
                           г. Москва, Рязанский проспект, дом 7, стр. 1
                       </p>
                    </div>
                    <div class="row">
                       <h6 class="col-xs-8 col-md-4">
                       Телефон:
                       </h6>
                       <p class="col">
                           +7(800)700-76-90
                       </p>
                    </div>
                    <div class="row">
                       <h6 class="col-xs-8 col-md-4">E-mail:</h6>
                       <p class="col">
                           hotline@eduprof.ru
                        </p>
                    </div>
                    <div class="row">
                       <h6 class="col-xs-8 col-md-4">Время работы:</h6>
                       <p class="col">
                           ПН-ПТ: 09:00-18:00
                        </p>
                    </div>
                    <div class="col pt-5">
                        <a href="https://twitter.com" style="text-decoration:none; color: dimgrey;">
                            <i class="fab fa-twitter fa-2x px-2"></i>
                        </a>
                        <a href="https://www.facebook.com" style="text-decoration:none; color: dimgrey;">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                        <a href="https://web.telegram.org" style="text-decoration:none; color: dimgrey;">
                            <i class="fab fa-telegram-plane fa-2x px-2"></i>
                        </a>
                        <a href="https://www.instagram.com" style="text-decoration:none; color: dimgrey;">
                            <i class="fab fa-instagram-square fa-2x px-2"></i>
                        </a>
                        <a href="https://vk.com" style="text-decoration:none; color: dimgrey;">
                            <i class="fab fa-vk fa-2x px-2"></i>
                        </a>
                        <a href="https://www.youtube.com" style="text-decoration:none; color: dimgrey;">
                            <i class="fab fa-youtube-square fa-2x"></i>
                        </a>
                        
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Обратная связь -->
        
        
        <footer class="container-fluid bg-dark text-white py-3">
            <p class="text-center">&copy; 2021 ГБОУ ДПО <a href="https://sdo.eduprof.ru" style="color: white;">Центр «Профессионал»</a> группа 201</p>
        </footer>
        
    <script>
        //функция-фетч
        function sendMail(form) {
            let formData = new FormData(form);
            fetch("php/hendlerMail.php", {
                method: "POST",
                body: formData
            }).then((response) => {return response.text()}) //response-объект, который пришел с сервера в ответ. Чтобы прочитать текст нужно рвсшифровать объект и преобразовать его в текст.
              .then((result) => { // выводим значение переменной result. Текс-ответ.
                  if (result == "success") {
                      form.innerHTML = "<h6>Письмо успешно отправлено</h6>";
                  } else {
                      form.innerHTML = "<h6>Произошла ошибка</h6>";
                  }
              })
        }
    </script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
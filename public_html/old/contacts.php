<? session_start(); ?> <!-- php code -->

<!doctype html>
<html lang="ru">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <script src="https://kit.fontawesome.com/750282b7c8.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>Fisrt site</title>
    
        <style>
            body {
                background-color: #f8f8ff;
            }
        </style>
        
    </head>
  
    <body>
        <!-- Навигационная панель -->
        <nav class="navbar navbar-expand-md navbar-light bg-light mb-5">
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
                    <a class = "btn btn-success me-3" href="auth.php">
                        <i class="fas fa-user me-3"></i>Войти
                    </a>
                    <a class = "btn btn-outline-dark" href="reg.php">Регистрация</a>
                    <? else: ?> <!-- php code -->
                    <a class = "btn btn-success me-3" href="account.php">
                        <i class="fas fa-user"></i>
                    </a>
                    <a class = "btn btn-outline-dark" href="accountExit.php">Выход</a>
                    <? endif; ?> <!-- php code -->
                </div>
            </div>
        </nav>
        <!-- Конец навигационной панели -->
    
        <!-- Обратная связь -->
        <div class="container mb-5">
            <div class="row">
                <h2 class="text-center">Контакты</h2>
                <div class="col-sm-12 col-md-6 pt-3">
                    <h6>Задайте Ваш вопрос:</h6>
                    <form action="">
                        <div class="my-3">
                            <input class="form-control" type="text" placeholder="Имя">
                        </div>
                        <div class="my-3">
                            <input class="form-control" type="email" placeholder="E-mail">
                        </div>
                        <div class="my-3">
                            <textarea class="form-control" rows="6" placeholder="Ваше сообщение"></textarea>
                        </div>
                        <input class="btn btn-success" type="submit" value="Получить консультацию">
                    </form>
                </div>
                <div class="col-1"></div>
                <div class="col-sm-12 col-md-5 pt-5">
                    <div class="row">
                       <i class="col-1 fas fa-map-marker-alt"></i>
                       <p class="col">г. Москва, Рязанский проспект, дом 7, стр. 1</p>
                    </div>
                    <div class="row">
                       <i class="col-1 fas fa-phone-alt"></i>
                       <p class="col">+7(800)700-76-90</p>
                    </div>
                    <div class="row">
                       <i class="col-1 fas fa-envelope"></i>
                       <p class="col">hotline@eduprof.ru</p>
                    </div>
                    <div class="row">
                       <i class="col-1 fas fa-clock"></i>
                       <p class="col">ПН-ПТ: 09:00-18:00</p>
                    </div>
                </div>
                
                <div class="col pt-5 text-center">
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
        <!-- Обратная связь -->
        
        <!-- Карта -->
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A266f190c87c0b5870a9963dad95efd5580c85cd0048cbd9e05585cfcecac6e10&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
    
        <footer class="container-fluid bg-dark text-white py-3">
            <p class="text-center">&copy; 2021 ГБОУ ДПО <a href="https://sdo.eduprof.ru" style="color: white;">Центр «Профессионал»</a> группа 201</p>
        </footer>
        
        
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
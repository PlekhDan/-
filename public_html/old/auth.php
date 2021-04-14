<!doctype html>
<html lang="ru">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <script src="https://kit.fontawesome.com/750282b7c8.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>Auth Fisrt site</title>
    
        <style>
            body {
                background-color: #f8f8ff;
            }
            #info {
                color: red;
            }
        </style>
        
    </head>
  
    <body>
        <!-- Навигационная панель -->
        <nav class="navbar navbar-expand-md navbar-light bg-light">
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
                    <a class = "btn btn-outline-dark" href="reg.php">Регистрация</a>
                </div>
            </div>
        </nav>
        <!-- Конец навигационной панели -->

        <div class = "container py-3">
            <div class = "col-sm-5 mx-auto my-5">
                <h2 class = "my-5 text-center">Авторизация на сайте</h2>
                <form onsubmit = "sendForm(this); return false;">
                    <div class="mb-3">
                        <input required name = "email" type="email" class="form-control" placeholder = "Введите e-mail">
                    </div>
                    <div class="mb-3">
                        <input required name = "password" type="password" class="form-control" placeholder = "Введите пароль">
                    </div>
                    <p id = "info" class = "my-2 text-center"></p>
                    <div class="my-5">
                        <input type="submit" class="form-control btn btn-success" value = "Войти">
                    </div>
                </form>
            </div>
        </div>
        
        <footer class="container-fluid bg-dark text-white py-3">
            <p class="text-center">&copy; 2021 ГБОУ ДПО <a href="https://sdo.eduprof.ru" style="color: white;">Центр «Профессионал»</a> группа 201</p>
        </footer>
        
    <script>
        //функция-фетч
        let info = document.getElementById("info");
        function sendForm(form) {
            let formData = new FormData(form);
            fetch("php/hendlerAuth.php", {
                method: "POST",
                body: formData
            }).then(response => response.json()) 
              .then((result) => { 
                  if (result.result == "success") {
                      location.href = "/old/account.php";
                  } else {
                      info.innerText = "Логин или пароль введён неверно!";
                  }
              });
        }
    </script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
<?php 
    session_start();
    if(empty($_SESSION['id'])) {
        header('Location: http://http://p9152834.beget.tech/old/index.php/');
        exit;
    }
?>

<!doctype html>
<html lang="ru">
    <head>
      
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <script src="https://kit.fontawesome.com/750282b7c8.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>Account Fisrt site</title>
    
        <style>
            body {
                margin: 0;
                padding: 0;
                background-color: #f8f8ff;
            }
            
            .change-btn {
                color: navy;
                cursor: pointer;
            }
            .change-btn:hover {
                color: blue;
            }
            
            .fa-check {
                color: green;
            }
            .save-btn {
                cursor: pointer;
            }
            .save-btn:hover {
                color: green;
            }
            
            .fa-times {
                color: red;
            }
            .cancel-btn {
                cursor: pointer;
            }
            .cancel-btn:hover {
                color: red;
            }
        </style>
        
    </head>
  
    <body>
        <!-- Навигационная панель -->
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand btn btn-success" href="index.php">
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
                    <a class = "btn btn-outline-dark" href="accountExit.php">Выход</a>
                </div>
            </div>
        </nav>
        <!-- Конец навигационной панели -->

        <div class = "container py-3">
            <h2 class = "my-5 text-center">Личный кабинет</h2>
            <div class = "col-8 my-5 mx-auto">
                <div class = "row py-2">
                    <span class = "col-3">Имя:</span>
                    <span class = "col-6">
                        <?=$_SESSION['name']?> <!-- php code -->
                    </span>
                    <div class = "col">
                        <span class = "change-btn">
                            <i class="fas fa-pen me-3 col-1"></i>
                            <!--Изменить-->
                        </span>
                        <span class = "save-btn" data-item = "name" hidden> <!-- Скрыто: hidden -->
                            <i class="fas fa-check me-3 col-1"></i>
                            <!--Сохранить-->
                        </span>
                        <span class = "cancel-btn" hidden> <!-- Скрыто: hidden -->
                            <i class="fas fa-times me-3 col-1"></i>
                            <!--Отменить-->
                        </span>
                    </div>
                </div>
                <div class = "row py-2">
                    <span class = "col-3">Фамилия:</span>
                    <span class = "col-6">
                        <?=$_SESSION['lastname']?> <!-- php code -->
                    </span>
                    <div class = "col">
                        <span class = "change-btn">
                            <i class="fas fa-pen me-3 col-1"></i>
                            <!--Изменить-->
                        </span>
                        <span class = "save-btn" data-item = "lastname" hidden> <!-- Скрыто: hidden -->
                            <i class="fas fa-check me-3 col-1"></i>
                            <!--Сохранить-->
                        </span>
                        <span class = "cancel-btn" hidden> <!-- Скрыто: hidden -->
                            <i class="fas fa-times me-3 col-1"></i>
                            <!--Отменить-->
                        </span>
                    </div>
                </div>
                <div class = "row">
                    <p hidden>ID: <?=$_SESSION['id']?></p> <!-- Скрыто: hidden -->
                </div>
                
                
            </div>
        </div>
        
        <footer class="container-fluid bg-dark text-white py-3">
            <p class="text-center">&copy; 2021 ГБОУ ДПО <a href="https://sdo.eduprof.ru" style="color: white;">Центр «Профессионал»</a> группа 201</p>
        </footer>



        <script>
            let changeBtns = document.getElementsByClassName("change-btn");
            let saveBtns = document.getElementsByClassName("save-btn");
            let cancelBtns = document.getElementsByClassName("cancel-btn");
            let name = `<?=$_SESSION['name']?>`;
            let lastname = `<?=$_SESSION['lastname']?>`;
            
            for (let i = 0; i < changeBtns.length; i++) {
                let changeBtn = changeBtns[i];
                let saveBtn = saveBtns[i];
                let cancelBtn = cancelBtns[i];
                changeBtn.addEventListener("click", function() {
                    changeClick(changeBtn, saveBtn, cancelBtn);
                });
                saveBtn.addEventListener("click", function() {
                    saveClick(changeBtn, saveBtn, cancelBtn);
                });
                cancelBtn.addEventListener("click", function() {
                    cancelClick(changeBtn, saveBtn, cancelBtn);
                });
            }
            
            function changeClick(changeBtn, saveBtn, cancelBtn) {
                let value = changeBtn.parentElement.previousElementSibling.innerText;
                changeBtn.parentElement.previousElementSibling.innerHTML = `<input type = "text" value = "${value}">`;
                changeBtn.hidden = true;
                saveBtn.hidden = false;
                cancelBtn.hidden = false; 
            }
            
            function saveClick(changeBtn, saveBtn, cancelBtn) {
                let value = changeBtn.parentElement.previousElementSibling.firstChild.value;
                let item = saveBtn.dataset.item;
                
                let formData = new FormData();
                formData.append("value", value);
                formData.append("item", item);
                
                fetch("php/hendlerChangeUserData.php", {
                    method: "POST",
                    body: formData
                })  .then(response => response.json())
                    .then(result => {
                        if (result.result == "success") {
                            changeBtn.parentElement.previousElementSibling.innerHTML = value;
                            if (item == "name") {
                                name = value;
                                console.log(name);
                            } else {
                                lastname = value;
                                console.log(lastname);
                            }
                            changeBtn.hidden = false;
                            saveBtn.hidden = true;
                            cancelBtn.hidden = true;
                        }
                    })
            }
            
            function cancelClick(changeBtn, saveBtn, cancelBtn) {
                let value = changeBtn.parentElement.previousElementSibling.firstChild.value;
                let item = saveBtn.dataset.item;
                if (item == "name") {
                    saveBtn.parentElement.previousElementSibling.innerHTML = name;
                } else {
                    saveBtn.parentElement.previousElementSibling.innerHTML = lastname;
                }
                changeBtn.hidden = false;
                saveBtn.hidden = true;
                cancelBtn.hidden = true;
            }
        </script>
<!--
    <script>
        let changeBtn = document.getElementsByClassName("change-btn");
        let saveBtn = document.getElementsByClassName("save-btn");
        let cancelBtn = document.getElementsByClassName("cancel-btn");
        
        for (let i = 0; i < changeBtn.length; i++) {
            changeBtn[i].addEventListener("click", () => {
                let value = changeBtn[i].previousElementSibling.innerText;
                changeBtn[i].previousElementSibling.innerHTML = `<input type = "text" value = "${value}">`;
                changeBtn[i].hidden = true;
                saveBtn[i].hidden = false;
                cancelBtn[i].hidden = false;
            });
            saveBtn[i].addEventListener("click", () => {
                let value = changeBtn[i].previousElementSibling.firstChild.value;
                let item = saveBtn[i].dataset.item;
                let formData = new FormData();
                formData.append("value", value);
                formData.append("item", item);
                fetch("php/hendlerCangeUserData.php", {
                    method:"POST",
                    body: formData
                }).then(response => response.json())
                  .then(result => {
                        if (result.result == "success") { //Ответ сервера success
                            changeBtn[i].hidden = false; //Отображаем кнопку изменить
                            saveBtn[i].hidden = true; //Скрываем кнопку сохранить
                            cancelBtn[i].hidden = true; //Скрываем кнопку отменить
                            changeBtn[i].previousElementSibling.innerHTML = value; //Удаляем инпут, вместо него пишем, то что ввел пользователь
                        }
                  })
            });
        }
    </script>
-->
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </body>
</html>
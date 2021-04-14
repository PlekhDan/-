<!doctype html>
<html lang="ru">
  <head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Загрузка файлов</title>
  </head>
  <body>
    <div class="container my-5 text-center">
        <div class=" col-md-5 mx-auto">
            <h1>Загрузка файлов на сервер</h1>
            <form onsubmit="sendForm(this); return false;" class="my-5">
                <div class=" mb-4">
                    <input multiple onchange="prevImg(this);" type="file" name="userfile" class="form-control"> <!-- multiple позволяет выбирать для загрузки больше одного файла.-->
                </div>
                <div class="row mb-4">
                    <div id="prevImgBlock" class="col-4"></div>
                </div>
                <div>
                    <input type="submit" class="form-control btn btn-success" value="Загрузить">
                </div>
            </form>
        </div>
    </div>

    <script>
        // Функция предпросмотра изображения. Как сделать, чтобы отображались все загруженные картинки??
        function prevImg(input) {
            let fileReader = new FileReader();
            fileReader.addEventListener("load", function() {
                prevImgBlock.innerHTML = `<img width="100%" src="${fileReader.result}">`;
            }, false);
            fileReader.readAsDataURL(input.files[0]);
        }
        
        // Отпрвка картинки на сервер.
        function sendForm(form) {
            let formData = new FormData(form);
            fetch("/php/handlerFileUpload.php", {
                method: "POST",
                body: formData
            }).then(response => response.text())
                .then(result => {
                    console.log(result);
                })
        }
    </script>

    <!-- Вариант 1: Bootstrap в связке с Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>
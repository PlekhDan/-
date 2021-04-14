<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Моя страница</title>
        <style>
            .container {
                width: 1000px;
                margin: 0 auto;
                border: 2px solid black;
                background-color: lime;
                text-align: center;
            }
            .block {
                display: inline-block;
                width: 400px;
                height: 200px;
                font-size: 32px;
                text-align: center;
                color: white;
                border: 2px solid grey;
                margin: 10px;
                background-color: green;
            }
            @media (max-width: 900px) {
                .container {
                    width: 100%;
                }
                .block {
                    display: block;
                    margin: 0 auto;
                    margin-top: 10px;
                    width: 90%;
                }
            }
        </style>
    </head>
    <body>
        <h1>Hello, world!</h1>
        <div class="container">
            <div class="block">1</div>
            <div class="block">2</div>
            <div class="block">3</div>
            <div class="block">4</div>
        </div>
    </body>
</html>
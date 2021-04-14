<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Airplane</title>

    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .background {
            background: url("/img/mountain.jpg") no-repeat 50% 70%;
            height: 100vh;
        }
        #airplane {
            position: absolute;
            width: 150px;
        }
    </style>
</head>
<body>
    <div class = "background">
        <div class = "airplane">
            <img id="airplane" src="/img/airplane.png">
        </div>
    </div>

    <script>
        let airplane = document.getElementById("airplane");
        airplane.style.left = "0px";
        airplane.style.top = "100px";
        airplane.style.transform = "scale(-1, 1)";

        function moveToRight() {
            let x = +airplane.style.left.replace("px", "");
            if ((x + airplane.offsetWidth) < window.innerWidth) {
                airplane.style.left = (x + 1) + "px";
            }
        }

        function moveToDown() {
            let x = +airplane.style.left.replace("px", "");
            let y = +airplane.style.top.replace("px", "");
            if ((x + airplane.offsetWidth) < window.innerWidth) {
                airplane.style.left = (x + 2) + "px";
                airplane.style.top = (y + 1) + "px";
            }
        }

        function moveToUp() {
            let x = +airplane.style.left.replace("px", "");
            let y = +airplane.style.top.replace("px", "");
            if ((x + airplane.offsetWidth) < window.innerWidth) {
                airplane.style.left = (x + 2) + "px";
                airplane.style.top = (y - 1) + "px";
            }
        }

        function moveToLeft() {
            let x = +airplane.style.left.replace("px", "");
            if ((x + airplane.offsetWidth) > 0) {
                airplane.style.left = (x - 1) + "px";
            }
        }

        let fromLeftToRight = true;
        function moveAirplane() {
            let x = +airplane.style.left.replace("px", "");
            if (fromLeftToRight) {
                let part = window.innerWidth / 5;
                if (x < part) {
                    moveToRight();
                } else if (x < 2 * part) {
                    moveToDown();
                } else if (x < 3 * part) {
                    moveToRight();
                } else if (x < 4 * part) {
                    moveToUp();
                } else {
                    moveToRight();
                    if (x + airplane.offsetWidth === window.innerWidth) {
                        fromLeftToRight = false;
                        airplane.style.transform = "scale(1, 1)";
                    }
                }
            } else {
                moveToLeft();
                if (x < 1) {
                    fromLeftToRight = true;
                    airplane.style.transform = "scale(-1, 1)";
                }
            }
        }
        setInterval(moveAirplane, 10);

    </script>
</body>
</html>
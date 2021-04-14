<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Позиционирование на JS</title>
  
  <style>
    #block {
      width: 100px;
      height: 100px;
      background-color: red;
      position: absolute;
      top: 0;
      left: 0;
    }
  </style>
</head>
<body>
  <div id = "block"></div>
  <img src = "/img/" id = "airplane" alt="Самолет">
  
  
  <script>
    let block = document.getElementById("block");
    let i = 0;
    function moveBlock() { //Вызывая функцию в консоли много раз у нас блок движется по одному пикселю по диагонали
      block.style.top = (++i) + "px";
      block.style.left = (i) + "px";
    }
    
  /* Работа в консоли
    block.style
    block.style.top = "400px"
    block.style.left = "200px"
  */
    
  //В JS есть функции таймеров setInterval
    setInterval(moveBlock, 100); //Каждые 100миллисекунд будет вызываться функция, Следовательно получаем анимацию: движение блока.
  
  
  // Задача: самолет летит в одну сторону, разворачивается и летит в обратную сторону.
  /*
  Координату носа самолета высчитываем, 
  как расстояние от края браузера до хвоста плюс ширина картинки.
  */
  let airplane = document.getElementById("airplane");
    let i = 0;
    let moveInRight = true;
    function moveBlock() { 
      if (i + airplane.width <= window.innerWidth && moveInRight) {
        airplane.style.transform = "scale(-1, 1)";
        airplane.style.left = (++i) + "px";
      } else {
        moveInRight = false;
        airplane.style.transform = "scale(1, 1)";
        airplane.style.left = (--i) + "px";
        if (i < 5) moveInRight = true;
      }
    }
    setIntravel(moveBlock, 10);
  </script> 
  
</body>
</html>
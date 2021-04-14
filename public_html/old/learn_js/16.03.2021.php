<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Drag-and-drop</title>
  
  <style>
    #block {
      position: absolute;
      width: 150px;
      height: 150px;
      background-color: aqua;
      cursor: pointer;
    }
    #block:active {
      background-color: blue;
    }
  </style>
</head>
<body>
  <!-- <div id = "block" onclick = "handler()"></div> -->
  <!-- <div id = "block"></div>
  <h1 id = "display">10</h1>
  <h1 id = "display2">10</h1> -->
  
<!-- Onclick не позволяет одновременно работать нескольким функциям-->
  <!-- <script>
    let display = document.getElementById("display");
    let i = 0;
    
Деклоративная функция
    block.onclick = handler; 
    let i = 0;
    function handler() {
      display.innerText = ++i;
    }
    
Функциональное выражение
    block.onclick = function(){
      display.innerText = ++i;
    }
    
Функция стрелка
    block.onclick = () => {
      display.innerText = ++i;
    }
  </script> -->
  
  
  <!-- <script>
    let display = document.getElementById("display");
    let block = document.getElementById("block");
    let i = 10;
    block.addEventListener("click", () => {
      display.innerText = ++i;
    });
  </script> -->
  
  
  
<!-- addEventListener позволяет выполнять функции одновременно -->
  <!-- <script>
    let display = document.getElementById("display");
    let display2 = document.getElementById("display2");
    let block = document.getElementById("block");
    let i = 10;
    let j = 10;
    block.addEventListener('click', () => {
      display.innerText = ++i;
    });
    block.addEventListener('click', () => {
      display2.innerText = --j;
    });
  </script> -->
  
  
  
<!-- Задание:
1) Зажимаем ЛКМ
2) Перетаскиваем блок
3) Отпускаем ЛКМ
-->
  <div id = "block"></div>
  
  <script>
    let block = document.getElementById("block");
    block.onmousedown = function() {
      function moveAt(event) {
        block.style.top = (event.clientY - block.offsetHeight / 2) + "px";
        block.style.left = (event.clientX - block.offsetWidth / 2) + "px";
      }
      document.addEventListener("mousemove", moveAt);
      block.onmouseup = function() {
        document.removeEventListener("mousemove", moveAt);
      }
    }
  </script>
</body>
</html>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>16.03.2021_position_image</title>
  
  <style>
    img[src$='rub.jpg'] {
      position: absolute;
      cursor: pointer;
      z-index: 1;
    }
    img[src$ = 'rub.jpg']:active {
      filter: contrast(1.5);
    }
  </style>
</head>
<body>
  <img src="/img/100rub.jpg" alt="100 р">
  <img src="/img/500rub.jpg" alt="500 р">
  
  <script>
    let banknotes = document.querySelectorAll("[src$ = 'rub.jpg']");
    for (let i = 0; i < banknotes.length; i++) {
      let banknote = banknotes[i];
      banknote.onmousedown = function() {
        this.ondragstart = function(){return false;}
        this.style.zIndex = 2;
        function moveAt(event) {
          banknote.style.top = (event.clientY - banknote.offsetHight / 2) + "px";
          banknote.style.left = (event.clientX - banknote.offsetWidth / 2) + "px";
        }
        document.addEventListener("mousemove", movaAt);
        this.onmouseup = function() {
          document.removeEventListener("mousemove", movaAt);
          this.style.zIndex = 1;
        }
      }
    }
    
  </script>
</body>
</html>
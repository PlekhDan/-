<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>05.03.2021</title>
</head>
<body>
  <script>
    //Условные опрераторы
    
    /*let login = prompt("Введите логин");
    let pass = prompt("Введите пароль");
    if (login == "admin"){
      if(pass == "123"){
        console.log("Доступ разрешен");
      }else{
        console.log("Доступ запрещен");
      }
    }else{
      console.log("Доступ запрещен");
    }*/
    
    
    // Другой вариант записи
    
    /*let login = prompt("Введите логин");
    let pass = prompt("Введите пароль");
    if (login == "admin" && pass == "123"){
      console.log("Доступ разрешен");
    }else{
      console.log("Доступ запрещен");
    }*/
    
    
    // Массивы
    
    /*let cars = ["BMW","VAZ","AUDI","ZAZ"];
    console.log(cars.length);
    console.log(cars[0]);
    console.log(cars[1]);
    console.log(cars[2]);
    console.log(cars[3]);*/
    
    //let alex = [4,5,5,3,4,3,4,5];
    
    /*
    let alex = [4,5,5,3,4,3,4,5];let i = 0;
    while(i<3){
      console.log(i);
      i = i + 1;
    }*/
    
    /*
    let alex = [4,5,5,3,4,3,4,5];let i = 0;
    do{
      console.log(i);
      i = i + 1;
    }while(i<3)*/
    
    /*for(let i=0; i<alex.length; i=i+1){
      console.log(alex[i]);
    }*/
    //console.log("Итог",i);
    
    
    /*let alex = [4,5,5,3,4,3,4,5];
    let sum = 0;
    for(let i=0; i<alex.length; i=i+1){
      if(typeof(alex[i])!="number")continue; //учтем, что переменная именно число, если не число, то пропускаем его
      sum = sum + alex[i];
    }
    console.log("Итоговая оценка:",Math.round(sum/alex.length)); // С округлением
    */
    
    //найти самое большое число
    /*let arr = [45,36,74,13,132,65,33];
    let max = arr[0];
    for(let i=0; i<arr.length; i=i+1){
      if (max < arr[i]) max = arr[i];
    }
    console.log(max);*/
    
    //Найти максимальный четный элемент массива. Для поиска минимального элемента задаем переменную let min = Infinity; и min>arr[]
    let arr = [-455,-36,74,-13,-132,65,-33,-42];
    //let max = 0; //не очень хорошее решение, так как если будут отрицательные числа будет работать не правильно, выводить 0.
    let max = -Infinity;
    for(let i=0; i<arr.length; i=i+1){
      if (max < arr[i] && arr[i]%2==0) max = arr[i];
    }
    console.log(max);
    
    
  </script>
</body>
</html>
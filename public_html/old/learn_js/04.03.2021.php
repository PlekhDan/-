<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>04.03.2021</title>
</head>
<body>
    <script>
        //document.write("Hello, world!");
        //alert("Hello, world!");
        //let name = "Ivan"; //В оперативной памяти отводим место с названием name и храним там Ivan.
        //let name; Можно такой конструкцией завести переменную, а дать ей значение после.
        //name = name + ", Alex"; //Переменной поменяли значение.
        //console.log("Hello, " + name + "!"); //Конкатенация строк (склейка).
        
        //Вывод чисел и счет
        //let a = 8;
        //let b = 3;
        //console.log(a + b);
        //console.log(a * b);
        //console.log(a - b);
        //console.log(a / b);
        //console.log(a % b);
        ///console.log(a < b);
        //console.log(a > b);
        //console.log(a == b);
        
        
        //Запрос чисел у пользователя.
        //Строки склеивает, а надо, чтобы введенные числа воспринимал числами.
        //let a = prompt("Введите число 'a' ");
        //let b = prompt("Введите число 'b' ");
        //a = parseInt(a); //Говорим, что переменная является ЦЕЛЫМ числом.
        //b = parseInt(b); //Число b - целое число.
        
        //a = +a;// "+" превращение переменной в число
        //b = +b;// "+" превращение переменной в число
        
        //a = Number(a); //Переменная является числом
        //b = Number(b); //Переменная является числом
        
        let a = prompt("Введите число 'a' ");
        let b = prompt("Введите число 'b' ");
        a = +parseInt(a); //Переменная теперь Number
        b = +parseInt(b);
        console.log(a + b);
        console.log(a * b);
        console.log(a - b);
        console.log(a / b);
        console.log(a % b);
        console.log(a < b);
        console.log(a > b);
        console.log(a == b);
        console.log(a ** b); //"a" возводится в степень "b"
        
    </script>
</body>
</html>
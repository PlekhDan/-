<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>11.03.2021</title>
</head>
<body>
  
// Функции 

<script>
// Функция. Function Decloration. Такую функцию можно вызывать перед заданием функции. Задекларированные функции в память записфваются сразу как загружается страница. Далее идет выполнение кода.
  
  function sayHi(name) {
    console.log("Hello, " + name + "!");
  }
  sayHi();
  
  
  function f(x) {
    return x * x;
  }
  /* y = f(4) Вводим в консоль*/ // y = 16
  
  <button onclick = "sayHi('Alex')">Поздороваться с Alex</button> // При нажатии на кнопку произойдет событие.
  <button onclick = "sayHi('Igor')">Поздороваться с Igor</button> // onclock - отследивание клика пользователем по кнопке.


// Функциональное выражение. Function expreshion. Сначала нужно завести функцию, а потом только вызвать.
  
  // Переменной можно присваивать функцию
  let g = function(x) {
  return x + x;
  }
  // g(6) Вызов в консоли
  
  
// Примерым смотри в записи. Создание обьектов.

//Вариант 1
  let alex = {
    name: "Alex",
    lastname: "Ivanov",
    age: 35,
    sayHi: function(name) {
      return "Привет, " + name + "меня зовут" + alex.name;
    }
  }
  let igor = {
    name: "Igor",
    lastname: "Petrov",
    age: 31,
    sayHi: function(name) {
      return "Привет, " + name + "меня зовут" + igor.name;
    }
  }
  let barsik = {
    nickname: "Барсик",
    age: 2,
    sayHi: function() {
      return "MEOW!";
    }
  }
  
// Вариант 2. Обьединение свойств
// конструирование обьекта. Создание класс
/* this. вызов объекта*/
  class Person {
    constructor(name, lastname, age) {
      this.name = name;
      this.lastname = lastname;
      this.age = age;
    }
    sayHi(name) {
      return "Привет, " + name + "меня зовут" + this.name;
    }
  }
  let alex = new Person("Alex", "Ivanov", 35);
  let igor = new Person("Ivan", "Petrov", 31);
  /* в консоль: igor.sayHi (alex.name)  выводит: Привет Alex, меня зовут Igor*/
  
</scripn>

</body>
</html>
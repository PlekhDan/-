<<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Classes</title>
</head>
<body>
    <script>
        class Animal {
            constructor(nickname, age) {
                this.nickname = nickname;
                this.age = age;
            }
            run(v) {
                console.log(`${this.nickname} бежит со скоростью ${v}.`);
            }
        }
        class Horse extends Animal {}
        class Pegasus extends Animal {
            fly(v) {
                console.log(`${this.nickname} летит со скоростью ${v}.`);
            }
        }
        let mustang = new Horse("Мустанг", 5);
        let tetry = new Pegasus("Тетрю", 3);
    </script>
</body>
</html>
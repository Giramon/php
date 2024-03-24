<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P-23</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a id="logo" href="index.php">Главная</a>
            <nav id="mainnav">
                <ul>
                    <li><a href="pot.php">Без вести пропавшие</a></li>
                    <li><a href="connect.php">Труп неустановленного человека</a></li>
                </ul>
            </nav>
    </header>
    <main class="kapt">
        <div class="flex-containe">
            <div class="flex-elems">
                <form action="pot.php" method="POST" enctype="multipart/form-data">
                    <h2>Без вести пропавший</h2>
                    <div class="form">
                        <p class="text">Фото</p>
                        <input type="file" name="attachment" required accept="image/png, image/jpeg">
                    </div>
                    <div class="form">
                        <p class="text">ФИО человека</p>
                        <input type="text" name="fio" required placeholder="Введите ФИО">
                    </div>
                    <div class="form">
                        <p class="text">Сколько на вид лет</p>
                        <input type="number" name="skok_let" required>
                    </div>
                    <div class="form">
                        <p class="text">Обстоятельства исчезновения</p>
                        <textarea class="tex" name="obst_is" required id="mesto" cols="30" rows="10" placeholder="Введите обстоятельства исчезновения"></textarea>
                    </div>
                    <div class="form">
                        <p class="text">Дата исчезновения</p>
                        <input type="date" name="ischez" required>
                    </div>
                    <div class="form">
                        <p class="text">Приметы</p>
                        <textarea class="tex" name="primeti" required id="mes" cols="30" rows="10" placeholder="Введите примечания"></textarea>
                    </div>
                    <div class="form">
                        <p class="text">Номер телефона</p>
                        <input type="number" name="telephone" required placeholder="Введите номер">
                    </div>
                    <div class="form">
                        <button class="bt" type="submit">Отправить</button>
                    </div>
               </form>
            </div>
            <div class="flex-elems">
                <form action="connect.php" method="POST" enctype="multipart/form-data">
                    <h2>Труп неустановленного человека</h2>
                    <div class="form">
                        <p class="text">Фото</p>
                        <input type="file" name="attachment" accept="image/png, image/jpeg">
                    </div>
                    <div class="form">
                        <p class="text">Дата обноружения</p>
                        <input type="date" name="obn" required>
                    </div>
                    <div class="form">
                        <p class="text">Место обнаружения</p>
                        <textarea class="tex" required name="mesto_obn" id="m1" cols="30" rows="10" placeholder="Введите место обнаружения"></textarea>
                    </div>
                    <div class="form3">
                        <p class="text">Приметы</p>
                        <textarea class="tex" required name="primeti" id="m" cols="30" rows="10" placeholder="Введите примечания"></textarea>
                    </div>
                    <div class="form">
                        <p class="text">Контактный номер телефона</p>
                        <input type="number" name="telephone" required placeholder="Введите ваш номер телефона">
                    </div>
                    <div class="form">
                        <button type="submit">Отправить</button>
                    </div>
               </form>
            </div>
        </div>
    </main>
    <footer class="ft1">

    </footer>
</body>
</html>
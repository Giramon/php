<?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $fio = $_POST['fio'];
        $skok_let = $_POST['skok_let'];
        $obst_is = $_POST['obst_is'];
        $ischez = $_POST['ischez'];
        $primeti = $_POST['primeti'];
        $telephone = $_POST['telephone'];
    
        $con=new mysqli('localhost','root','','form');
        if($con) {
            echo "Connection sucessful";
            $sql="insert into `data`(fio,skok_let,obst_is,ischez,primeti,telephone)values('$fio','$skok_let','$obst_is','$ischez','$primeti','$telephone')";
            $result = mysqli_query($con,$sql);
            if ($result) {
                echo "Data inserted successfully";
            } else {
                die(mysqli_error($con)) ;
            }
        } else {
            die(mysqli_error($con)) ;
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P-23</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <script type="text/javascript" src="js/script.js"></script>
    <header>
        <a id="logo" href="index.php">Главная</a>
            <nav id="mainnav">
                <ul>
                    <li class="active"><a href="pot.php">Без вести пропавшие</a></li>
                    <li><a href="connect.php">Труп неустановленного человека</a></li>
                </ul>
            </nav>
    </header>
    <main>
        <input id="searchbar"
               onkeyup="search_animal()"
               type="text" name="search"
               placeholder="Поиск по ФИО">
        <div class="flex-container">
            <div class="flex-elem1">
                <img src="img/2.png" alt="" class="im poiv1">
                <h3 class="zag poiv1">Иванов Иван Иванович</h3>
                <p class="t poiv1">Дата рождения: 1966.07.11</p>
                <p class="t poiv1">Обстоятельства исчезновения: 31.05.2022 ушёл из дома в г. Златоусте, и до настоящего времени не вернулся</p>
                <p class="t poiv1">Дата исчезновения: 2022.05.31</p>
                <p class="t poiv1">Приметы: на вид 60 лет, рост 175 см, плотного телосложения, лицо европейское, волосы русые, глаза голубые, на правом предплечье татуировка в виде иероглифов</p>
                <p class="t poiv1">Номер телефона: 89457474756</p>
                <a href="https://vk.com/andrey16000" target="_blank" class="ss poiv1">Соц. сети</a>
            </div>
            <div class="flex-elem2">
                <img src="img/2.png" alt="" class="im poiv2">
                <h3 class="zag poiv2">Иванов Иван Иванович</h3>
                <p class="t poiv2">Дата рождения: 1956.07.11</p>
                <p class="t poiv2">Обстоятельства исчезновения: 31.05.2022 ушёл из дома в г. Златоусте, и до настоящего времени не вернулся</p>
                <p class="t poiv2">Дата исчезновения: 2022.05.31</p>
                <p class="t poiv2">Приметы: на вид 70 лет, рост 175 см, плотного телосложения, лицо европейское, волосы русые, глаза голубые, на правом предплечье татуировка в виде иероглифов</p>
                <p class="t poiv2">Номер телефона: 89457474756</p>
                <a href="https://vk.com/andrey16000" target="_blank" class="ss poiv2">Соц. сети</a>
            </div>
            <div class="flex-elem3">
                <img src="img/2.png" alt="" class="im poiv3">
                <h3 class="zag poiv3">Иванов Иван Иванович</h3>
                <p class="t poiv3">Дата рождения: 1976.07.11</p>
                <p class="t poiv3">Обстоятельства исчезновения: 31.05.2022 ушёл из дома в г. Златоусте, и до настоящего времени не вернулся</p>
                <p class="t poiv3">Дата исчезновения: 2022.05.31</p>
                <p class="t poiv3">Приметы: на вид 50 лет, рост 175 см, плотного телосложения, лицо европейское, волосы русые, глаза голубые, на правом предплечье татуировка в виде иероглифов</p>
                <p class="t poiv3">Номер телефона: 89457474756</p>
                <a href="https://vk.com/andrey16000" target="_blank" class="ss poiv3">Соц. сети</a>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    
</body>
</html>
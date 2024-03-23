<?php
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $obn = $_POST['obn'];
        $mesto_obn = $_POST['mesto_obn'];
        $primeti = $_POST['primeti'];
        $telephone = $_POST['telephone'];
    
        $con=new mysqli('localhost','root','','form');
        if($con) {
            echo "Connection sucessful";
            $sql="insert into `data`(obn,mesto_obn,primeti,telephone)values('$obn','$mesto_obn','$primeti','$telephone')";
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
    <header>
        <a id="logo" href="index.php">Главная</a>
            <nav id="mainnav">
                <ul>
                    <li><a href="pot.php">Без вести пропавшие</a></li>
                    <li class="active"><a href="ume.php">Труп неустановленного человека</a></li>
                </ul>
            </nav>
    </header>
    <main>
        <input id="searchbar"
               onkeyup="search_animal()"
               type="text" name="search"
               placeholder="Поиск по ФИО">
        <div class="flex-container">
            <div class="flex-elem">
                <img src="img/2.png" alt="" class="im">
                <h3 class="zag">Неустановленный человек</h3>
                <p class="t">Дата обноружения: 2024.01.24</p>
                <p class="t">Место обноружения: автодорога Миасс Златоуст, в 30 км от посёлка Тургояк</p>
                <p class="t">Приметы: рост 170-175 см, плотного телосложения, волосы русые, на правом предплечье татуировка в виде иероглифов</p>
                <p class="t">Контактный номер телефона: 64765735</p>
            </div>
            <div class="flex-elem">
                <img src="img/2.png" alt="" class="im">
                <h3 class="zag">Неустановленный человек</h3>
                <p class="t">Дата обноружения: 2021.01.24</p>
                <p class="t">Место обноружения: автодорога Миасс Златоуст, в 30 км от посёлка Тургояк</p>
                <p class="t">Приметы: рост 170-175 см, плотного телосложения, волосы русые, на правом предплечье татуировка в виде иероглифов</p>
                <p class="t">Контактный номер телефона: 64765735</p>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    
</body>
</html>
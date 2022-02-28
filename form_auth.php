<?php
    //Подключение шапки
    require_once("header.php");
?>
 <style>
    body{
    background-color: #464d47; /* Цвет фона веб-страницы */
   } 
      html { scroll-behavior: smooth; }
    .menu {
list-style: none;
padding: 0;
}  
.menu li{
padding: 12px 23px;
border-left: 10px solid #40554e; 
box-shadow: 4px -4px 5px 0 rgba(0,0,0,.1),
     -4px -4px 5px 0 rgba(0,0,0,.1),
    4px 4px 5px 0 rgba(0,0,0,.1),
    4px 4px 5px 0 rgba(0,0,0,.1);
font-size: 20px;} 


a { color: #141c11; text-decoration: none; border-bottom: 1px solid #5c6b28 ;}


   </style>
<!-- Блок для вывода сообщений -->

<body>
<style>
   body{
    background-color: #c4d8d74d; /* Цвет фона веб-страницы */
   } 
   </style>
<div class="block_for_messages">
    <?php
 
        if(isset($_SESSION["error_messages"]) && !empty($_SESSION["error_messages"])){
            echo $_SESSION["error_messages"];
 
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["error_messages"]);
        }
 
        if(isset($_SESSION["success_messages"]) && !empty($_SESSION["success_messages"])){
            echo $_SESSION["success_messages"];
             
            //Уничтожаем чтобы не появилось заново при обновлении страницы
            unset($_SESSION["success_messages"]);
        }
    ?>
</div>
 
<?php
    //Проверяем, если пользователь не авторизован, то выводим форму авторизации, 
    //иначе выводим сообщение о том, что он уже авторизован
    if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
?>
 
 
    <div id="form_auth">
        <h2>Форма авторизации</h2>
        <form action="auth.php" method="post" name="form_auth">
            <table>
          
                <tbody><tr>
                    <td> Email: </td>
                    <td>
                        <input type="email" name="email" required="required"><br>
                        <span id="valid_email_message" class="mesage_error"></span>
                    </td>
                </tr>
          
                <tr>
                    <td> Пароль: </td>
                    <td>
                        <input type="password" name="password" placeholder="минимум 6 символов" required="required"><br>
                        <span id="valid_password_message" class="mesage_error"></span>
                    </td>
                </tr>
                 
                <tr>
                    <td> Введите капчу: </td>
                    <td>
                        <p>
                            <img src="captcha.php" alt="Изображение капчи" /> <br>
                            <input type="text" name="captcha" placeholder="Проверочный код">
                        </p>
                    </td>
                </tr>
 
                <tr>
                    <td colspan="2">
                        <input type="submit" name="btn_submit_auth" value="Войти">
                    </td>
                </tr>
            </tbody></table>
        </form>
    </div>
 
<?php
    }else{
?>
 
    <div id="authorized">
        <!DOCTYPE html>
<html>
<head>
<title>Список Игроков | Сказки Севера</title>
<meta charset="utf-8" />
</head>
<body>
<p><a href="http://code.avait.ru/ko/index.php">выбрать окрас</a></p>
<p><a href="http://code.avait.ru/pr/index.php">Перейти в игровую</a></p>
<h2>Список Игроков</h2>
<?php
$conn = new mysqli("localhost", "codep126_root", "PSO4952y", "codep126_users");
if($conn->connect_error){
die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM users";

if($result = $conn->query($sql)){
$rowsCount = $result->num_rows; // количество полученных строк
echo "<p>Игроков зарегистрированых на сайт $rowsCount</p>";
echo "<table><tr><th>Id</th><th>Почта</th><th>Дата регестрации</th><th>Пароль</th></tr>";
foreach($result as $row){
echo "<tr>";
echo "<td>" . $row["id"] . "</td>";
echo "<td>" . $row["email"] . "</td>";
echo "<td>" . $row["date_time"] . "</td>";
echo "<td>" . $row["password"] . "</td>";
echo "</tr>";
}
echo "</table>";
$result->free();
} else{
echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>
    </div>
    </body>
 
<?php
    }
?>
 
<?php
    //Подключение подвала
    require_once("footer.php");
?>

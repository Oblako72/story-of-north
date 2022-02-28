<script>
function pere() {

var e = document.getElementById("text");

var txt = e.textContent || e.innerText;

var txt2 = 'тип 2';
var txt3 = 'тип 3';
var txt1 = 'тип 1';
  if(txt != txt2){var newtxt = 'тип 2';}
  if(txt != txt3){var newtxt = 'тип 3';}
  if (txt!= txt1){var newest = 'zzzz';}


document.getElementById('text').innerHTML = newtxt;

}



</script>
<style>





        #bg{
            position: absolute;
            z-index: -1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .top-btns{
            position: absolute;
            top: 0;
            left: 4%;
            width: 30%;
         
        }

        .profiles_exit{
            width: 18%;
            margin-right: 4%;
        }

        #profile img{
            width: 100%;
        }

        #exit img{
            width: 90%;
            position: relative;
            left: 5%;
            top: -6px;
        }

        .parametrs{
            width: 78%;
            display: flex;
        }

        #stats{
            width: 60%;
            height: 61%;
        }

        #stats img{
            width: 100%;
            height: 100%;
        }

        #bag, #friends{
            width: 20%;
            height: 60%;
            margin-left: 4%;
        }

        #bag img, #friends img{
            width: 100%;
            height: 100%;
        }

        .bottom-btns{
            position: absolute;
            display: flex;
            bottom: 0;
            left: 0;
            width: 99%;
            height: 20%;
        }

        .map{
            width: 30%;
        }

        .map img{
            width: 100%;
            height: 100%;
        }

        .chats{
            position: absolute;
            right: 0;
            bottom: 0;
            width: 13%;
            height: 316%;
        }

        #chat{
            height: 90%;
        }

        #chat img{
            height: 100%;
            width: 100%;
        }

        #chat_roll{
            position: absolute;
            bottom: 0;
            height: 10%;
            width: 100%;
        }

        #chat_roll img{
            width: 100%;
            height: 100%;
        }

        .screenLock{
            width: 99.9%;
            height: 99.8%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 2;
            background-color: #000;
        }

        .screenLock h2{
            position: absolute;
            top: 40%;
            left: 40%;
            color: #fff;
        }

        @media (orientation: portrait) {
            .top-btns{
                width: 80%
            }

            .chats{
                width: 30%;
                height: 400%
            }

            .bottom-btns{
                height: 12%;
            }

            .map{
                width: 60%;
            }
        }
      .sky {
position:absolute;
top:0;
right:0.1%;}
 </style>
 <div class="top-btns">
            
 <img src="https://i.ibb.co/72R2H1B/Zelen.png" id="pereh">

<div id="block" style="display: none;"><input type="button" value="Переход" onclick="pere()"></div>

<script type="text/javascript">

var photo = document.getElementById('pereh');

photo.onclick = function() {

    var block = document.getElementById('block');

    block.style.display = 'block';

};





</script>

  <div id="text">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Cwatl | Игровая</title>
</head>
<body style="background-color:#464d47">
<p><a href="http://www.yandex.ru">Чат</a></a></p>
</body>
</html>
<p><a href="http://www.yandex.ru">Моя страница</a></a></a></p>
<tbody><tr><td><br><div class="sources"><form method="post" name="mew_form" id="mew_form" action="#"> <table> <tr><td>Что вы хотите сказать другим котам:
<script language="JavaScript" type="text/javascript" src="https://comet-server.com/js/lib/jquery.min.js" ></script>
<script language="JavaScript" type='text/javascript' src="https://comet-server.com/CometServerApi.js" ></script>
</head>
<body>
<div id="WebChatFormForm" ></div>
<input type="text" id="WebChatNameID" placeholder="Укажите ваше имя..." > <br>
<textarea id = "WebChatTextID" placeholder = "Поговорите с котами..." ></textarea><br>

<input type="button" onclick="web_send_msg();" value="Мяу" >
<div id="answer_div" ></div>

<script>
// Отправляет сообщение в чат
function web_send_msg()
{
// Получение значений из элементов ввода.
var text = $("#WebChatTextID").val(); // Получаем текст сообщения
var name = $("#WebChatNameID").val(); // Получаем имя пользователя

// Очистка поля с текстом сообщения
$("#WebChatTextID").val("");

// Добавление отправленного сообщения к списку сообщений.
$("#WebChatFormForm").append("<p><b>"+name+": </b>"+text+"</p>");

// Отправка сообщения в канал чата
CometServer().web_pipe_send("web_chat_pipe", {"text":text, "name":name});
}


// Функция выполнится после загрузки страницы
$(document).ready(function()
{
CometServer().start({dev_id:19648}) // Подключаемся к комет серверу

// Подписываемся на канал в который и будут отправляться сообщения чата.
CometServer().subscription("web_chat_pipe", function(msg)
{
console.log(msg)
// Добавление полученного сообщения к списку сообщений.
$("#WebChatFormForm").append("<p><b>"+msg.data.name+": </b>"+msg.data.text+"</p>");
});

// Подписываемся на канал в который и будут отправляться уведомления о доставке отправленных сообщений.
CometServer().subscription("#web_chat_pipe", function(p)
{
console.log(p)
$("#answer_div").html("Сообщение доставлено "+p.data.number_messages+" получателям. "+p.data.error);
});
});
</script>


</body>
</html>
</body>

<<div class="profiles_exit">                
            </div>

            <div class="parametrs">
                <div id="stats" button><img src="assets/btns/stats.png?20130910043254" alt="Параметры"></div>
                <div id="bag" button><img src="assets/btns/bag.png?20130910043254" alt="Инвентарь"></div>
                <div id="friends" button><img src="assets/btns/friends.png?20130910043254" alt="Друзья"></div> 
            </div>
            </div></div>
<div align="t" style="overflow:auto;overflow-x:hidden;height:50px;border-top:1px solid gray" id="fights"></div></td></tr></tbody></table> </td></tr> <tr><td id="matab" style="padding:0"> <div class="place">
     <?php
    $directory = "./img";    // Папка с изображениями
    $allowed_types=array("png");  //разрешеные типы изображений
    $file_parts = array();
      $ext="";
      $title="";
      $i=0;
    //пробуем открыть папку
      $dir_handle = @opendir($directory) or die("Ошибка! Напишите одному из администрации об этом");
    while ($file = readdir($dir_handle))    //поиск по файлам
      {
      if($file=="." || $file == "..") continue;  //пропустить ссылки на другие папки
      $file_parts = explode(".",$file);          //разделить имя файла и поместить его в массив
      $ext = strtolower(array_pop($file_parts));   //последний элеменет - это расширение


      if(in_array($ext,$allowed_types))
      {
      echo '<div class = "blok_img" >
                <img src="'.$directory.'/'.$file.'" class="pimg" title="'.$file.'" />
            </div>';
     $i++;
      }

      }
    closedir($dir_handle);  //закрыть папку
    ?>

<style>
a { color: #141c11; text-decoration: none; border-bottom: 1px solid #5c6b28 ;}
.place {

border: 1px solid;

width: 1000;
height: 1000;
0em auto;

background-image: ("https://psv4.userapi.com/c534536/u368746875/docs/d25/7534acc21a99/Illustration5.png")

padding: 50px;

background-image: url("https://psv4.userapi.com/c534536/u368746875/docs/d25/7534acc21a99/Illustration5.png");



overflow: hidden;
position: relative;

}

</style>



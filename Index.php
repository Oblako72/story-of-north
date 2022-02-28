<img src="https://i.ibb.co/603DWcd/travka.png" id="pereh">

<div id="block" style="display: none;"><input type="button" value="Переход" onclick="reverse()"></div>

<script type="text/javascript">

var photo = document.getElementById('pereh');

photo.onclick = function() {

    var block = document.getElementById('block');

    block.style.display = 'block';

};

</script>

<div id="text"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="format-detection" content="address=no">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>img[alt="www.000webhost.com"] {display: none;}</style>
    <title>PR | CWATL</title>
    <style>
        body{
            overflow-y: hidden;
            overflow-x: hidden
        }




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
            display: flex;
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
</head>
<body>
<body>





    <img id="bg" src="https://i.ibb.co/k5PKnZg/e-Wf-AXWJn5c0.jpg" alt="">
     <?php
    $directory = "./img";    // Папка с изображениями
    $allowed_types=array("jpg", "png", "gif");  //разрешеные типы изображений
    $file_parts = array();
      $ext="";
      $title="";
      $i=0;
    //пробуем открыть папку
      $dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
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


        <div class="top-btns">
            <div class="profiles_exit">
                <div id="profile" button><img src="assets/btns/profile.png?20130910043254" alt="Профиль"></div>
                <div id="exit" button><img src="assets/btns/exit.png?20130910043254" alt="Выход"></div>
            </div>

            <div class="parametrs">
                <div id="stats" button><img src="assets/btns/stats.png?20130910043254" alt="Параметры"></div>
                <div id="bag" button><img src="assets/btns/bag.png?20130910043254" alt="Инвентарь"></div>
                <div id="friends" button><img src="assets/btns/friends.png?20130910043254" alt="Друзья"></div> 
            </div>
        </div>    

    <div class="bottom-btns">
        <div class="map" button><img src="assets/btns/map.png?20130910043254" alt="Карта"></div>
        <div class="chats">
            <div id="chat" button><img src="assets/btns/chat.png?20130910043254" alt="Чат"></div>
            <div id="chat_roll" button><img src="assets/btns/chat_roll.png?20130910043254" alt="Свернутый чат"></div>
        </div>
    </div>

    <audio src="assets/audio/click.mp3"></audio>
<!--     <div class="screenLock" onclick="lock('landscape-primary'); $('.screenLock').css('display', 'none');">
        <h2 id="rotate">Нажмите любую кнопку для продолжения...</h2>
    </div> -->
</body>

</html>


<script>
function lock(orientation) {
    try{
  // Go into full screen first
  if (document.documentElement.requestFullscreen) {
    document.documentElement.requestFullscreen();
  } else if (document.documentElement.mozRequestFullScreen) {
    document.documentElement.mozRequestFullScreen();
  } else if (document.documentElement.webkitRequestFullscreen) {
    document.documentElement.webkitRequestFullscreen();
  } else if (document.documentElement.msRequestFullscreen) {
    document.documentElement.msRequestFullscreen();
  }

  // Then lock orientation
  screen.orientation.lock(orientation);        
} catch(e){
    alert(e)
}

}
$('div[button]').click(function (e) {
    e.preventDefault();
    let audio = document.querySelector('audio')
    audio.play();
});
</script></div>
<script>
function reverse() {

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



<!DOCTYPE html>
<html lang ="en">
 <head>
   <meta charset="UTF-8">
     <link rel = 'stylesheet' href='connection.css'> 
      <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    
     <?php require "title.php"; ?>
 </head>
 <body bgcolor="#800080"> 
     <header> 
        <div class='container'>
            <div class='header-line'>
                
                <div class ='nav'>
                    <a class ='nav-item' href="@">Моя страница </a>
                    <a class ='nav-item' href="@"> Главная </a>
                    <a class ='nav-item' href="@"> Контакты </a>
                    <a class ='nav-item' href="@"> Достижения </a>
                </div>
                <div class='cart'>
                <a href="a">
                    <img src="background" alt=""></a>
                </div>
            </div>
             </div>
            
    </header>
     
     <main>
     <div class="form1">
        <div class="head">
            <div class="condition">
            <?php
            echo '<p>Здравствуйте,'. ' ' .$_POST['surname']. ' ' .$_POST['name']. ' ' .$_POST['second_name'].'</p>'; //выводим ФИО
            if ($_POST['category'] == '1'){ //проверяем тип обращения
            echo '<p>Спасибо за ваше предложение:</p>';
            echo '<textarea>'.$_POST['comment'].'</textarea>'."\n";//вывод текста сообщения
            }else{
             echo '<p>Мы рассмотрим Вашу жалобу:</p>';
             echo '<textarea>'.$_POST['comment'].'</textarea>'."\n";
            }
            if (isset($_POST['f']) & $_POST['f'] != '') echo 'Вы приложили следующий файл: '.$_POST['f'];
            echo '<p><a class="btn" href="connection.php?'. '&surname='.$_POST['surname'].'&name='.$_POST['name'].'&second_name='.
            $_POST['second_name'].'&email='.$_POST['email'].'&source='.$_POST['source'].'">Заполнить снова</a><p>';
            ?>
         </div>
     </div>
    </div>



     <footer>
         <div class='footer'>
         <div class= 'footer-line'></div>
            <p class = 'footer-item'>Почта Kotushevanatalie@gmail.com Телефон 8(950)994-30-74</p>

     </div>
     
     </footer>
       
     
 </body> 
</html>
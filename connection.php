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

         <div class='head'>                 
         <form action="home.php" method="post">
         
            <p class='condition'> Фамилия <input type="text" name = 'surname' size="40"  value="<?php if (isset($_GET['surname'])){
                        echo $_GET['surname']; }?>"/></p>
            <p class='condition'>Имя <input type="text" name = 'name' size="40"  value="<?php if (isset($_GET['name'])){
                        echo $_GET['name']; }?>"/></p>
            <p class='condition'>Отчество <input type="text" name = 'second_name' size="40" value="<?php if (isset($_GET[ 'second_name'])){
                        echo $_GET['second_name']; }?>"/></p>
            
            <p class='condition'>Почта <input type="text" name = 'email' size="40" value="<?php if (isset($_GET['email'])){
                        echo $_GET['email']; }?>"/>></p>
            <p class='condition'>Откуда вы узнали о нас?</p>

                
            <input class='condition' type="radio" id="contactChoice1" name="source" value="1" <?php if (isset($_GET['source']) & $_GET['source']='1'){
                        echo 'checked';}?>/>
              <label class='condition' for="contactChoice1">От друзей</label>
              <input class='condition' type="radio" id="contactChoice2" name="source" value="2" <?php if (isset($_GET['source']) & $_GET['source']='2'){
                        echo 'checked';}?>/>
              <label class='condition' for="contactChoice2">Из интернета</label>
                
            <p class='condition'>Тип обращения
                <p><select class='condition' size="1" name = 'category' >
                    <option value="2">Жалоба</option>
                    <option value="1">Предложение</option>
                </select>
                <p>
            <p class='condition'>Текст сообщения</p><p> 
             <textarea class='condition' name="comment" cols="40" rows="3"></textarea></p>
                
                <p><input class='condition' type="file" name="f"></p>
                <p><input class='condition' id="check" type="checkbox">
                <label class='condition' for="check">Я согласен/согласна на обработку персональных данных</label></p>
                    
                <p><input class='condition' type="submit" value="Отправить"></p>
    
                
            </form>
         </div>
             
     </main>


     <footer>
         <div class='footer'>
         <div class= 'footer-line'></div>
            <p class = 'footer-item'>Почта Kotushevanatalie@gmail.com Телефон 8(950)994-30-74</p>

     </div>
     
     </footer>
       
     
 </body> 
</html>
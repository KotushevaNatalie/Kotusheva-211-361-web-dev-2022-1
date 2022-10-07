<!DOCTYPE html>
<html lang ="en">
 <head>
   <meta charset="UTF-8">
     <link rel = 'stylesheet' href='autorization.css'> 
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
                
            </div>
             </div>
    </header>
     
     <main>
         <div class='head'>                 
            <form> 
            <p class='condition'><b>Авторизация</b></p>
        
            <p class='condition'>Логин <input type="text" size="40"></p>
            <p class='condition'>Пароль <input type="password" size="40"></p>           

                <p><input class='condition' id="check" type="checkbox">
                <label class='condition' for="check">Запомнить меня</label></p>
                    
                <p><input class='condition' type="submit" value="Войти"></p>
    
                
            </form>
        </div>
             
     </main>

     <div class='footer'>
            <p class = 'footer-item'>Почта Kotushevanatalie@gmail.com Телефон 8(950)994-30-74</p>
            </div>
       
     
 </body> 
</html>
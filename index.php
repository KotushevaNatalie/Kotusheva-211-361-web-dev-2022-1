<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='style.css'> 
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
      <?php require "title.php"; ?>
  </head>
  <body>
      
      <div class='header'>
          <div class='container'>
             <div class='header-line'>

                    <a class="button" href="<?php 

                    $name='Обратная связь'; 
                    $link='connection.php'; 
                    $current_page=true; 

                    echo $link; ?>"><?php 

                    if( $current_page ) 
                        echo $name;?></a>


                    <a class="button" href="<?php 

                    $name='Войти'; 
                    $link='autorization.php'; 
                    $current_page=true; 

                    echo $link; ?>"><?php 

                    if( $current_page ) 
                    echo $name;?></a>


                
                 <div class='nav'>
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
          <table border="2" align="center" width="40%" >
          <tr>
              <th color="#fff">Аватар</th>
              <th>Фамилия</th>
              <th>Имя</th>
              <th>Дата рождения</th>
              <th>Студент/Преподаватель</th>
          </tr>
          <tr>
              <td align="center"><img src="avatar.jpg" width="50" height="50" alt=""></td>
              <td align="center">Котюшева</td>
              <td align="center">Наталья</td>
              <td align="center">29.05.2003</td>
              <td align="center">Студент</td>
          </tr>
              <tr>
              <td align="center"><img src="avatar2.jpg" width="50" height="50" alt=""></td>
              <td align="center">Кузнецова</td>
              <td align="center">Екатерина</td>
              <td align="center">01.01.2002</td>
              <td align="center">Студент</td>
          </tr>
      </table>

            <div class="massive">
                <?php require "massive.php";?>
            </div>

            <div class="photo">
            <?php 
            $s = date('s');
            $os = $s % 2;

            if ($os === 0)
            $name = 'avatar.jpg';
            else
            $name = 'avatar2.jpg';

            echo '<img src = "'.$name.'" alt="Меняющаяся фотография" id = "body" height = 250px>';
            ?>
            </div>

       </div>  
    
  </body> 
  <div class='footer'>
          <div class= 'footer-line'></div>
         <a class = 'footer-item'>Почта Kotushevanatalie@gmail.com</a>
         <a class = 'footer-item'>Телефон 8(950)994-30-74</a>
         <a class = 'footer-item' id = "foot"> <?php require "foot.php"; ?>
 
      </div>

 </html>
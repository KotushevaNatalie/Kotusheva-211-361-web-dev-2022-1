<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='mathematic.css'> 
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

      
      <?php require "title.php"; ?>
  </head>
  <body bgcolor="#808080" height = "1000px">
      
      <header class='header'>
          <div class='container'>
             <div class='header-line'>

                    <a class="button" href="<?php 

                        $name='Обратная связь'; 
                        $link='connection.php'; 
                        $current_page=true; 

                        echo $link; ?>"><?php 

                        if($current_page) 
                            echo $name;?></a>


                    <a class="button" href="<?php 

                        $name='Войти'; 
                        $link='autorization.php'; 
                        $current_page=true; 

                        echo $link; ?>">
                        <?php 

                        if($current_page) 
                            echo $name;?></a>


                
                 <div class='nav'>
                    <a class ='nav-item' href="@">Моя страница </a>
                    <!-- a class="nav-item" href="index.php">Главная</a -->
                    <a class="nav-item" href="<?php	

                        $name='Главная'; 
                        $link='index.php';	
                        $current_page=true;	

                        echo $link;	

                    ?>"><?php	

                        if( $current_page )	
                            echo $name;

                    ?></a>


                    <!-- a class="nav-item" href="actions.php">Математические действия</a -->
                    <a class="nav-item" href="<?php	

                        $name='Математические действия'; 
                        $link='actions.php';	
                        $current_page=true;	

                        echo $link;	

                    ?>"><?php	

                        if( $current_page )	
                            echo $name;

                    ?></a>

                    <!-- a class="nav-item" href="actions.php">Математика</a -->
                    <a class="nav-item" href="<?php	

                        $name='Математические действия'; 
                        $link='mathematic.php';	
                        $current_page=true;	

                        echo $link;	

                    ?>"><?php	

                        if( $current_page )	
                            echo $name;

                    ?></a>


                     <a class ='nav-item' href="@"> Контакты </a>
                     <a class ='nav-item' href="@"> Достижения </a> <br>
                     <a class ='nav-item' href="@"> Котюшева Наталья 211-361 </a>
                     <a class ='nav-item' href="@"> Лабораторная работа 9 </a>
                     <a class ='nav-item' href="@"> Вариант 7</a>



                 </div>
                 <div class='cart'>
                 <a href="a">
                     <img src="background" alt=""></a>
                 </div>
             </div>


         </header>
    <main>
    <div class="background">
        <div class="php-start">
            <?php include "mathematiczad.php" ?>
        </div>
    </div>        
    </main>
    <footer class="footer">
    <div class = 'foota'>
        <a class = 'footer-item'>Почта Kotushevanatalie@gmail.com</a>
        <a class = 'footer-item'>Телефон 8(950)994-30-74</a>
        <a class = 'footer-item' id = "foot"> <?php require "foot.php"; ?>
 
    </div>
    </footer>  
</body>
</html>
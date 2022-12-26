<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='calculate.css'> 
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
      <script src="calculate.js" defer></script>

      
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

                        $name='Математика'; 
                        $link='mathematic.php';	
                        $current_page=true;	

                        echo $link;	

                    ?>"><?php	

                        if( $current_page )	
                            echo $name;

                    ?></a>

                    <a class="nav-item" href="<?php	

                    $name='Калькулятор'; 
                    $link='calculate.php';	
                    $current_page=true;	

                    echo $link;	

                    ?>"><?php	

                    if( $current_page )	
                        echo $name;

                    ?></a>


                    
                 </div>
                 <div class='cart'>
                 <a href="a">
                     <img src="background" alt=""></a>
                 </div>
             </div>
      
         </div>
         
          

         <div class="elements">
        <div class="calc-pic">
            <img src="22.jpg" height="536px" width="360px">
        </div>
        
        <div class="calc-container" id="calc-container">
            <div class="screen" id="screen">
                <textarea id="out_screen" rows="5" cols="33" wrap="soft" onclick="paste()" disabled></textarea>
                <span></span>
            </div>
            <div class="buttons" id="buttons">
                <div class="digits" id="digits">
                    <button class="key_digit" id="d_1" value="1">1</button>
                    <button class="key_digit" id="d_2" value="2">2</button>
                    <button class="key_digit" id="d_3" value="3">3</button>
                    <button class="key_digit" id="d_4" value="4">4</button>
                    <button class="key_digit" id="d_5" value="5">5</button>
                    <button class="key_digit" id="d_6" value="6">6</button>
                    <button class="key_digit" id="d_7" value="7">7</button>
                    <button class="key_digit" id="d_8" value="8">8</button>
                    <button class="key_digit" id="d_9" value="9">9</button>
                    <button class="key_digit" id="d_c" value=".">.</button>
                    <button class="key_digit" id="d_0" value="0">0</button>
                    <button class="key" style="visibility: hidden;" id="b_hidden" value=""></button>
                </div>
                <div class="other" id="other" >
                    <button class="key_operation" id="o_a" value="+">+</button>
                    <button class="key_clear_1" id="b_c_all" value="C">C</button>
                    <button class="key_bracket" id="b_l" value="(">(</button>
                    <button class="key_bracket" id="b_r" value=")">)</button>
                    <button class="key_operation" id="o_d" value="/">/</button>
                    <button class="key_operation" id="o_m" value="*">*</button>
                    <button class="key_operation" id="o_s" value="-">-</button>
                    <button class="key_result" id="bt_r" value="=">=</button>
                    <button class="key_clear_2" id="b_c_one" value="CE"><==</button>
                </div>
            </div>
        </div>
    </div>
           

       </div>
       
    </body>
    
   <footer>
        <div class='footer'>
            <a class = 'footer-item'>Почта Kotushevanatalie@gmail.com</a>
            <a class = 'footer-item'>Телефон 8(950)994-30-74</a>
            <a class = 'footer-item' id = "foot"> <?php require "foot.php"; ?>
 
        </div>
    </footer>

 </html>
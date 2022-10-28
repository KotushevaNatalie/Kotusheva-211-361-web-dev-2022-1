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

                    <!-- a class="nav-item" href="@">Математические действия</a -->
                    <a class="nav-item" href="<?php	

                        $name='Математические действия'; 
                        $link='actions.php';	
                        $current_page=true;	

                        echo $link;	

                    ?>"><?php	

                        if( $current_page )	
                            echo $name;

                    ?></a>

                     <a class ='nav-item' href="@"> Контакты </a>
                     <a class ='nav-item' href="@"> Достижения </a>
                 </div>
                 <div class='cart'>
                 <a href="a">
                     <img src="background" alt=""></a>
                 </div>
             </div>
      
         </div>
      </div>


      
      <div class="header-down">
            <div class="spisok">
                <script>         
                
                alert("Возведение в степень");
                let power_x = prompt("Введите число", "");
                let power_n = prompt("Введите степень", "");
                function pow(power_x, power_n) {
                    if (power_n == 1) {
                        return power_x;
                    }
                    if (power_n != 1) {
                        return (power_x * pow(power_x, power_n - 1));
                    }
                }        
                let answer_1 = pow(power_x, power_n);
                alert(`${power_x} в степени ${power_n} = ${answer_1}`);


                alert("Наибольший общий делитель");
                let gcd_a = prompt("Введите первое число", "");
                let gcd_b = prompt("Введите второе число", "");
                function gcd(gcd_a, gcd_b) {
                    if(gcd_b == 0) {
                    return gcd_a;
                    } else {
                        return gcd(gcd_b, gcd_a % gcd_b);
                    }            
                }    
                answer_2 = gcd(gcd_a, gcd_b)
                alert(`НОД чисел ${gcd_a} и ${gcd_b} = ${answer_2}`);


                alert("Наименьшая цифра числа x");
                let min_x = prompt("Введите число x", "");
                function minDigit (x){
                    let min_d = 9;
                    while (x > 0){
                        if ((x % 10) < min_d){
                            min_d = x % 10;
                        }
                        x = Math.floor(x/10);
                    }
                    return min_d;
                }
                let answer_3 = minDigit(min_x);
                alert(`Наименьшая цифра числа ${min_x} = ${answer_3}`); 


                alert("Количество записей");
                let n_4 = prompt("Введите n", "");

                function pluralizeRecords_1(n, was){
                    n = Math.abs(n) % 100; 
                    let n1 = n % 10;
                    if ((n != 11) && (n1 == 1)) {
                        return was[1];
                    }
                    return was[0];
                }
                answer_4_1 = pluralizeRecords_1(n_4, ['было найдено', 'была найдена']);



                function pluralizeRecords_2(n, records){
                    n = Math.abs(n) % 100; 
                    let n1 = n % 10;
                    if (n > 10 && n < 20) { 
                        return records[2]; 
                    }
                    if (n1 > 1 && n1 < 5) { 
                        return records[1]; 
                    }
                    if (n1 == 1) {
                        return records[0]; 
                    }
                    
                    return records[2];
                    
                }
                answer_4_2 = pluralizeRecords_2(n_4, ['запись', 'записи', 'записей']);
                alert(`В результате выполнения запроса ${answer_4_1} ${n_4} ${answer_4_2}`);

                
                let error = "Ошибка";
                alert("n-ый элемент ряда Фибоначчи");
                let n_5 = prompt("Введите n", "");
                function fibb(n){
                    let last = 1, next = 1;
                    if (n <= 1000) {
                        for(let i = 1; i < n; i++){
                        let current = next;
                        next = last + next;
                        last = current;
                        }
                    } else {
                        return error;
                    }
                    return last;
                }
                answer_5 = fibb(n_5);
                alert(`Число Фибоначчи ${n_5}: ${answer_5}`);

	            </script>
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
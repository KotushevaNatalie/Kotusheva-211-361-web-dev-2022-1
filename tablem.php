<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='tablem.css'> 
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

      
      <?php require "title.php"; ?>
  </head>
  <body bgcolor='#800080'>
      
      <div class='header'>
          <div class='container'>
             <div class='header-line'>


                
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

                    ?>">
                    <?php	

                        if( $current_page )	
                            echo $name;

                    ?></a>

                    <!-- a class="nav-item" href="actions.php">Матя</a -->
                    <a class="nav-item" href="<?php	

                        $name='Калькулятор'; 
                        $link='calculate.php';	
                        $current_page=true;	

                        echo $link;	

                    ?>"><?php	

                        if( $current_page )	
                            echo $name;

                    ?></a>

                        <a class="nav-item" href="<?php	

                        $name='Анализ'; 
                        $link='analysis.php';	
                        $current_page=true;	

                        echo $link;	

                        ?>"><?php	

                        if( $current_page )	
                            echo $name;

                        ?></a>
                         <a class="nav-item" href="<?php	

                        $name='Умножение'; 
                        $link='tablem.php';	
                        $current_page=true;	

                        echo $link;	

                        ?>"><?php	

                        if( $current_page )	
                            echo $name;

                        ?></a>


<body>
    <div class="wrapper">
        <header>
        <div id="main_menu">
            <?php
                echo '<a href="?html_type=TABLE'; // начало ссылки ТАБЛИЧНАЯ ФОРМА
                if( isset($_GET['content']) ) // если параметр content был передан в скрипт
                    echo '&content='.$_GET['content']; // добавляем в ссылку второй параметр
                echo '"'; // завершаем формирование адреса ссылки и закрываем кавычку
                // если в скрипт был передан параметр html_type и параметр равен TABLE
                if( array_key_exists('html_type', $_GET) && $_GET['html_type']== 'TABLE' )
                    echo ' class="selected"'; // ссылка выделяется через CSS-класс
                echo '>Табличная форма</a>'; // конец ссылки ТАБЛИЧНАЯ ФОРМА


                echo '<a href="?html_type=DIV'; // начало ссылки БЛОКОВАЯ ФОРМА
                if( isset($_GET['content']) ) // если параметр content был передан в скрипт
                    echo '&content='.$_GET['content']; // добавляем в ссылку второй параметр
                echo '"'; // завершаем формирование адреса ссылки и закрываем кавычку
                // если в скрипт был передан параметр html_type и параметр равен DIV
                if( array_key_exists('html_type', $_GET) && $_GET['html_type']== 'DIV' )
                    echo ' class="selected"'; // ссылка выделяется через CSS-класс
                echo '>Блоковая форма</a>'; // конец ссылки БЛОКОВАЯ ФОРМА
            ?>
        </div>

        </header>
        <main>
            <div class="inline">
                <div id="product_menu">
                    <?php
                        echo '<a href="?content=n/a'; // начало ссылки ВСЯ ТАБЛИЦА УМНОЖНЕНИЯ
                        if ( isset($_GET['html_type'])) // если параметр html_type был передан в скрипт
                            echo '&html_type='.$_GET['html_type']; // добавляем в ссылку второй параметр
                        echo '"'; // завершаем формирование адреса ссылки и закрываем кавычку
                        // если в скрипт НЕ был передан параметр content
                        if( !isset($_GET['content']) || $_GET['content']=="n/a") 
                            echo ' class="selected"'; // ссылка выделяется через CSS-класс
                        echo '>Вся таблица умножения</a>'; // конец ссылки

                        // цикл со счетчиком от 2 до 9 включительно
                        for( $i=2; $i<=9; $i++ ) {
                            echo '<a href="?content='.$i.''; // начало ссылки
                            if ( isset($_GET['html_type']))
                                echo '&html_type='.$_GET['html_type'];
                            echo '"';
                            // если в скрипт был передан параметр content
                            // и параметр равен значению счетчика
                            if( isset($_GET['content']) && $_GET['content']==$i )
                                echo ' class="selected"'; // ссылка выделяется через CSS-класс
                            echo '>Таблица умножения на '.$i.'</a>'; // конец ссылки
                        }
                    ?>
                </div>
            

                <section class="exmple">
                <?php
                    if (!isset($_GET['html_type']) || $_GET['html_type']== 'TABLE' )
                        outTableForm(); // выводим таблицу умножения в табличной форме
                    else
                        outDivForm(); // выводим таблицу умножения в блочной форме
                ?>
                </section>
            </div>
            

        </main>
        <footer>
        <div class='footer'>
            <a class = 'footer-item' id = "foot"> <?php require "foot.php"; ?>
            <a class = 'footer-item'>Почта Kotushevanatalie@gmail.com</a>
            <a class = 'footer-item'>Телефон 8(950)994-30-74</a>
            <a class = 'footer-item'>Тип верстки: <?=getHTMLType()?><br>
                    <span><?=getContent()?></span><br>
            

            
 
            </div>
        </footer>
    </div>
</body>
</html>

<?php
// функция ВЫВОДИТ ТАБЛИЦУ УМНОЖЕНИЯ В ТАБЛИЧНОЙ ФОРМЕ
function outTableForm() {
    if( !isset($_GET['content']) || $_GET['content'] == 'n/a') {
        
        for($i=2; $i<10; $i++) {
            echo '<table class="tvRow">';
            outRowTable($i);
            echo '</table>';
        }
    } 
    else {
        echo '<table class="tvSingleRow">';
        outRowTable( $_GET['content'] );
        echo '</table>';
        
    }
    
}


// функция ВЫВОДИТ ТАБЛИЦУ УМНОЖЕНИЯ В БЛОЧНОЙ ФОРМЕ
function outDivForm () {
    // если параметр content не был передан в программу
    if( !isset($_GET['content']) || $_GET['content']=="n/a") {
        for($i=2; $i<10; $i++) { // цикл со счетчиком от 2 до 9
            echo '<div class="bvRow">'; // оформляем таблицу в блочной форме
            outRow( $i ); // вызывем функцию, формирующую содержание
            // столбца умножения на $i
            echo '</div>';
        }
    }
    else {
        echo '<div class="bvSingleRow">'; // оформляем таблицу в блочной форме
        outRow( $_GET['content'] ); // выводим выбранный в меню столбец
        echo '</div>';
    }
}

// функция ВЫВОДИТ СТОЛБЕЦ ТАБЛИЦЫ УМНОЖЕНИЯ в блочной форме
function outRow($n){
    for($i=2; $i<=9; $i++) { // цикл со счетчиком от 2 до 9
        echo outNumAsLink($n);
        echo 'x';
        echo outNumAsLink($i);
        echo '=';
        echo outNumAsLink($i*$n).'<br>';
    }
}

// функция ВЫВОДИТ СТОЛБЕЦ ТАБЛИЦЫ УМНОЖЕНИЯ в табличной форме
function outRowTable($n){
    for ($i=2; $i<=9; $i++){
        echo '<tr><td>';
        echo outNumAsLink($n);
        echo 'x';
        echo outNumAsLink($i);
        echo '</td><td>';
        echo outNumAsLink($i*$n);
        echo '</td></tr>';
    }
}

// Преобразует число в соответствующую ему ссылку 
function outNumAsLink( $x ) {
    if( $x<=9 ){
        echo '<a href="?content='.$x.'&html_type=';
        if (!isset($_GET['html_type']))
            echo 'TABLE"';
        else 
            echo $_GET['html_type'].'"';
        echo '>'.$x.'</a>';

    }
    else
        echo $x;
}

function getHTMLType() {
    if (!isset($_GET['html_type']))
        return 'TABLE';
    else
        return $_GET['html_type'];
}

function getContent() {
    if (!isset($_GET['content']) || $_GET['content'] == 'n/a')
        return 'Таблица умножения полностью';
    else
        return 'Столбец таблицы умножения на '.$_GET['content'];
}

?>
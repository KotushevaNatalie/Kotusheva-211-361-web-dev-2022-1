<head>
    <meta charset="UTF-8">
      <link rel = 'stylesheet' href='resultanalysis.css'> 
       <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

      
      <?php require "title.php"; ?>
  </head>
  <body bgcolor="#800080">>
      
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


                 </div>
                 <div class='cart'>
                 <a href="a">
                     <img src="background" alt=""></a>
                 </div>
             </div>
      
         </div>
<main>
        <div class="main">
    <?php
    if (isset($_POST['data']) && $_POST['data']) {
        echo '<div><b style="vertical-align: top;">Исходный текст: </b><pre class="text">'.$_POST['data'].'</pre></div>';
        echo '
        <div class="tbl">
            <table>
        ';

        $spec = [
            'syms', 'letters', 'upper_lower', 'coms', 'nums', 'words'
        ];

        $spec_out = array(
            'syms' => 'Количество символов',
            'letters' => 'Количество букв',
            'nums' => 'Количество цифр',
            'words' => 'Количество слов',
            'coms' => 'Количество знаков препинания',
            'upper_lower' => 'Количество заглавных и строчных букв',
        );
    
        $tst = text_analize($_POST['data']);
    
        for ($i=0; $i<sizeof($spec); $i++) {
            echo '
            <tr>
                <td>'.$spec_out[$spec[$i]].'</td>
                <td>'.$tst[$spec[$i]].'</td>
            </tr>';
        }

        echo '<tr><td>Количество вхождений каждого символа текста</td><td><table class="inner-table">';
        foreach ($tst['syms_nums'] as $sym => $count) {
            echo '
            <tr>
                <td>'.$sym.'</td>
                <td>'.$count.'</td>
            </tr>';
        }
        echo '</table></td>';

        echo '<tr><td>Список всех слов в тексте и количество их вхождений, отсортированный по алфавиту</td>'
            .'<td><table class="inner-table">';
        foreach ($tst['words_freq'] as $word => $freq) {
            echo '
            <tr>
                <td>'.$word.'</td>
                <td>'.$freq.'</td>
            </tr>';
        }
        echo '</table></td></tr>';

        echo '
            </table>
        </div>
        ';

    }
    else {
        echo '<div class="src_error">Нет текста для анализа</div>';
    }
    ?>

    <div class="btn">    
        <a href="analysis.php" style="text-decoration: none">
            Другой анализ </a>
        </div>
    </main>

    

    <footer>
        <div class='footer'>
            <a class = 'footer-item'>Почта Kotushevanatalie@gmail.com</a>
            <a class = 'footer-item'>Телефон 8(950)994-30-74</a>
            <a class = 'footer-item' id = "foot"> <?php require "foot.php"; ?>
 
        </div>
    </footer>

</body>
</html>








<?php

function text_analize($text) {
    $res = array();
    $res['syms'] = mb_strlen($text);
    $res['letters'] = mb_strlen(preg_replace("/[^a-zA-Zа-яА-Я]/u", "", $text));
    $res['upper_lower'] = mb_strlen(preg_replace("/[^a-zа-я]/u", "", $text)).
        ' строчных и '.
        mb_strlen(preg_replace("/[^A-ZА-Я]/u", "", $text)).
        ' заглавных';
    $res['coms'] =  mb_strlen(preg_replace("/[^.,:;!?-]/u", "", $text));
    $res['nums'] = mb_strlen(preg_replace("/[^0-9]/u", "", $text));
    $res['words'] = 0;
    if ($text != ''){
        $res['words'] =  count(explode(" ", $text));
    }

    $res['syms_nums'] = array();
    for ($i=0; $i<mb_strlen($text); $i++) {
        $sym = mb_strtolower(mb_substr($text, $i, 1));
        if ($sym == ' ') $sym = 'SPACE';

        if (isset($res['syms_nums'][$sym])) {
            $res['syms_nums'][$sym] += 1;
        }
        else $res['syms_nums'][$sym] = 1;
    }

    $words = explode(" ", preg_replace("/[^a-zA-Zа-яА-Я]/u", " ", $text));
    $words = array_filter($words);
    $unique_words = array_unique($words); // уникальные слова
    $unique_words_freq = array(); // частота встречаемости слов
    foreach ($unique_words as $uw) $unique_words_freq[$uw] = 0; // устанавливаем начальные значения
    foreach ($words as $w) $unique_words_freq[$w] += 1; // считаем частоту встречаемости слов
    ksort($unique_words_freq); // сортируем по алфавиту

    $res['words_freq'] = $unique_words_freq;
    
    return $res;
}

?>
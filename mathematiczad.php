<?php
$min_value = 10;
$max_value = 20;
$precison = 3;
$x = 0;
$encounting = 20;
$step = 2;
$type = 'E';

if ($type == 'A') {
    echo '';
}
if ($type == 'B') {
    echo '<ul>';
}
if ($type == 'C') {
    echo '<ol>';
}

if ($type = 'E') {
    echo '<div class="e-type">';
}


else if ($type == 'D') {
    //echo '<table><tbody>';
    echo '<table border="1px">'."\n<br>";
    echo '<tr>'."\n<br>";
}






for( $i=0; $i < $encounting; $i++, $x+=$step ) {

    if ($x <= 10) {
        if ($x == 5) {
            $f = 'error';
        }
        else{
            $f = (6 /($x - 5)) * $x - 5;
        }
    }
    else {
        if ($x < 20) {
            $f = ($x**2 - 1) *$x + 7;
        }
        else {
            $f = 4 * $x + 5;
        }
    }
    switch ($type) {
        
        case 'A':
            if ($f != "error") {
                $f = (float)$f;
                echo 'f('.$x.')='.round($f, $precison);                   // выводим аргумент и значение функции    
            }
            else {
                echo 'f('.$x.')='.$f;
            }            
            if($i < $encounting-1) {                               // если это не последняя итерация цикла
                echo '<br>';                                         // выводим знак перевода строки
            }
            break;
        case 'B':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f('.$x.')='.round($f, $precison).'</li>';                   // выводим аргумент и значение функции    
            }
            else {
                echo '<li>f('.$x.')='.$f.'</li>';
            }
            break;
        case 'C':
            if ($f != "error") {
                $f = (float)$f;
                echo '<li>f('.$x.')='.round($f, $precison).'</li>';                   // выводим аргумент и значение функции    
            }
            else {
                echo '<li>f('.$x.')='.$f.'</li>';
            }
            break;

        case 'D':
            for ($i = 1; $i <= $encounting; $i++, $x+=$step) {
                if ($f != "error") {
                    $f = (float)$f;
                    echo '<tr>'.'<td>'.$i.'</td>'.'<td>'.'argument='.$x.'</td>'.'<td>'.'f('.$x.')='.round($f, $precison).'</td>'.'</tr>';                 
                }
                else {
                    echo '<tr>'.'<td>'.$i.'</td>'.'<td>'.'argument='.$x.'</td>'.'<td>'.'f('.$x.')='.$f.'</td>'.'</tr>';
                }         
            }

            break;
            
        case 'E':           
            if ($f != "error") {
                $f = (float)$f;
                echo '<div class="type_e">f('.$x.')='.round($f, $precison).'</div>';
            }
            else {
                echo '<div class="type_e">f('.$x.')='.$f.'</div>';
            }    
            break;  
           
    }                
}

if ($type == 'A') {
    echo 'f('.$x.')='.$f;
    
}
if ($type == 'B') {
    echo '</ul>';
}
if ($type == 'C') {
    echo '</ol>';
}
if ($type == 'D') {
    echo '</tbody></table>';
}

if ($type == 'E') {
    echo '</div>';
}      
?>
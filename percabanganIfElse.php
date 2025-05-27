<?php
$nilaipraktikum_php = 30;
$nilaipraktikum_jarkom = 50;
if($nilaipraktikum_php  > $nilaipraktikum_jarkom) {
    echo('Praktikum PHP lebih mudah');
} else if($nilaipraktikum_php == $nilaipraktikum_jarkom) {
    echo('Praktikum PHP dan jarkom tingkat kesulitannya sama');
} else if($nilaipraktikum_php < $nilaipraktikum_jarkom) {
    echo('Praktikum Jarkom lebih mudah');
} else {
    echo('Nilai tidak valid');
}
?>
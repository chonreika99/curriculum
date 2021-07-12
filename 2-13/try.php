<?php
    //切り上げ
    $x = 3.2;
    $y = -13.5;
    $x2 = -3.9;
    echo ceil($x);
    //切り捨て
    echo '<br>';
    echo floor($y);
    //四捨五入
    echo '<br>';
    echo round($x2);
?>

<?php
echo '<br>';
    //円周率
    echo pi();

    function circleArea($r){
        $circle_area = $r * $r * pi();
        echo $circle_area;
    }
    circleArea(5.1);
    //乱数
    echo '<br>';
    echo mt_rand(1,50);
?> 
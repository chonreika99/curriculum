<?php
for ($num = 1;$num < 101;$num++) {
 
    if($num % 3 == 0 && $num % 5 == 0){
        //3で割った余りが0と5で割った余りが0になるとき
        echo "FizzBuzz!!";
    }elseif($num % 3 == 0){
        //3で割った余りが0（＝3の倍数）のとき
        echo "Fizz!";

    }elseif($num % 5 == 0){
        //5で割った余りが0（＝5の倍数 ）のとき
        echo "Buzz!";
    }elseif($num){
        echo $num;
    }
    echo '<br>';
}
?>



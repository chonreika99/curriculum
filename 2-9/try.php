<?php
for ($num = 1;$num < 101;$num++) {
 
    if($num % 15 == 0){
        //15で割った余りが0（＝15の倍数）のとき
        echo "FizzBuzz!!";
    }elseif($num % 3 == 0){
        //3で割った余りが0（＝3の倍数）のとき
        echo "Fizz!";

    }elseif($num % 5 == 0){
        //5で割った余りが0（＝5の倍数 ）のとき
        echo "Buzz!";
    }
    elseif($num){
        echo $num;
    }
    echo '<br>';
}
?>



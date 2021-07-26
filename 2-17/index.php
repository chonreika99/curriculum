<?php 
date_default_timezone_set('Asia/Tokyo');
 $time =date("H時台です", time());

echo $time;
echo '<br>';
 if($time <= 9 ){
    echo 'おはようございます';
    }elseif($time  <= 18 ){
        echo 'こんにちは';

    }elseif($time <= 24){
        echo 'こんばんは';
    }
    echo '<br>';
?>


<?php
$x = 0;
$i = 0;
while($x < 40){ 
    $s = mt_rand(1,6);
    $i++;
    echo $i . '回目=' .$s;
    $x += $s;
    echo '<br>';    
}
echo '合計' . $i .'回でゴールしました';

?>



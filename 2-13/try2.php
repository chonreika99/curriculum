<?php
     //文字列の長さ
     $str = "apple";
     echo strlen($str);
     //検索
     echo '<br>';
     echo strpos($str,"p");
     //文字列の切り取り
     echo '<br>';
     echo substr($str,-4,3);
     //置き換え
     echo '<br>';
     echo str_replace("pp","P!!!",$str);
     echo '<br>';
     $strr = "I am Apple";
     echo str_replace(" ","",$strr);
?>

<?php
echo '<br>';
    //フォーマット化した文字列を出力
    $name = "佐藤さん";
    $limit_number = 10;
    printf("%sの稼働日数はあと%d日です", $name, $limit_number);
    //2桁
    echo '<br>';
    $limit_hour = 1;
    $limit_minute = 30;
    printf("残り%02d時間%d分",$limit_hour,$limit_minute);
    echo '<br>';
    $limit_time = sprintf("残り%d時間%d分",$limit_hour,$limit_minute);
    echo $limit_time;
?>


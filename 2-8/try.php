<?php
$fruits = ["apple" => "といったらりんご","orange" => "といったらみかん","peach" => "といったらもも"];

foreach ($fruits as $key => $value){
    echo $key;
    echo $value;
}
echo '<br>';

$word = ["トランザクション" => "ソフトウェアでの処理方式の一つ。金融機関のコンピュータシステムにおける入出金処理のように、一連の作業を全体として一つの処理として管理するために用いる","排他ロック" => "データベースシステムなどで記憶領域への同時アクセスを制限するロック機構の一つで、他の実行主体によるアクセスを完全に禁止するもの","チューニング" => "情報システムやソフトウェアなどの設定や構成を調整し、最大限に性能を引き出す作業。"];

foreach ($word as $key => $value){
    echo $key;
    echo '<br>';
    echo $value;
    echo '<br>';
}
?>


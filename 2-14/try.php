<?php
$members = ['yoshida','sato','endo','kimura'];
echo count($members);
//要素の数を数える
echo '<br>';

echo sort($members);
var_dump($members);
//要素の並べ替え(アルファベット)
echo '<br>';
$numbers = ['22','89','37','12'];
echo sort($numbers);
var_dump($numbers);
echo '<br>';
echo rsort($numbers);
var_dump($numbers);

?>

<?php
$members = ['yoshida','sato','endo','kimura'];
if (in_array('sato',$members)){
    echo "佐藤さんがいるよ！";
} else {
    echo "佐藤さんはいないよ！";
}
echo '<br>';
?>

<?php
//配列をimplodeで文字列にする.その文字列をexplodeでもとの配列に戻す
$fruits = ['peach','apple','banana','grape'];
$atstr = implode("*",$fruits);
var_dump($atstr);

$re_members = explode("*", $atstr);
var_dump($re_members);


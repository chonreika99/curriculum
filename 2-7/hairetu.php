<?php
$countries = ["America","Japan","China","Korea"];

echo $countries [0];
echo '<br>';
echo $countries [1];
echo '<br>';
echo $countries [2];
?>

<?php
var_dump($countries);
$countries = ["America","Japan","China","Korea"];
// 0番目のAmericaを出力したい場合
echo $countries[0];
echo '<br>';
// 1番目のJapanを出力したい場合
echo $countries[1];
// 2番目のChinaを出力したい場合
echo $countries[2];
// 3番目のKoreaを出力したい場合
echo $countries[3];
?>

<?php
echo '<br>';
$fruits = ["りんご","みかん","ぶどう"];
$fruits[] = "もも";
echo $fruits[0];
echo '<br>';
echo $fruits[1];
echo '<br>';
echo $fruits[2];
echo '<br>';
echo $fruits[3];
echo '<br>';

var_dump($fruits);
?>

<?php
echo '<br>';
$fruits = ["りんご" => "apple", "orange" => "みかん", "grape" => "ぶどう"];
$fruits ["peach"] = "もも";
// りんごを出力
echo $fruits["りんご"];
// みかんを出力
echo $fruits["orange"];
// ぶどうを出力
echo $fruits["grape"];
echo '<br>';
echo $fruits["peach"];
echo '<br>';
var_dump($fruits)


?>
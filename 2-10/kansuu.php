<?php
function getTriangleArea($base, $height) {
    $area = $base * $height / 2;
    echo "三角形の面積は".$area."だよ。";
}

// 1)
getTriangleArea(10,5);
// 2)
getTriangleArea(15,8);
// 3)
getTriangleArea(8,6);
?>

<?php
echo '<br>';

function sayHi($name = "goto") {
    // 関数の中で定義する変数 => ローカル変数
    $myname = "php";
    return "Hi! ".$name." from ".$myname;
}

echo sayHi("sato");


?>
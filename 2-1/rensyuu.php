
<?php

// index.php
define("ADMIN_EMAIL", "y-i-group@gmail.com");
// index.php
define("LIST_COUNT", 20);

echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;

?>

<?php
//代入演算子
echo '<br>';

$x = 5;
echo "hello"."world";
echo '<br>';
$hello = "Hello";
$world = "World!";
echo $hello.$world;


?>
<?php
$age = 18;

if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
}    
?>
<?php
echo '<br>';
//$x = $x * 5;
$x *=5;
echo $x;
echo '<br>';
$x =5;
echo $x + 3;

?>

<?php
// 年齢
$age = 25;
// 学生かどうか
$is_student = true;

if ($age < 25 && $is_student) {
    echo '学割パックが使えるよ';
} elseif ($age = 25){
    echo "使えません。";

}
?>
<?php
//名前
$name = 'taro';
//パスワード
$pass = 'pass';

if ($name = 'taro' && $pass = 'pass'){
    echo 'ログイン成功';
} elseif ($name = 'taro' && $pass = '') {
    echo 'パスワードが間違っています';
} elseif ($name = '' && $pass = 'pass') {
    echo '名前が間違っています';
}
?>

<?php
//名前
$name = 'taro';
 //パスワード 
$pass = '';

if ($name == 'taro' && $pass == 'pass') {
     echo 'ログイン成功'; 
} elseif ($name == 'taro' && $pass == '') {
     echo 'パスワードが間違っています。'; 
} elseif ($name == '' && $pass == 'pass') {
    echo '名前が間違っています。';
}
?>
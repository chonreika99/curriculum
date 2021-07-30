<link rel="stylesheet" href="answer.css">

<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST["my_name"];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する

$number = $_POST['question1'];//選択したもの
$answer1 = $_POST['answer1'];//正解を受け取る

$language = $_POST['question2'];
$answer2 = $_POST['answer2'];

$command = $_POST['question3'];
$answer3 = $_POST['answer3'];

?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p>
<?php 
if ($number == $answer1){
    echo '正解';
} else {
    echo '残念・・・';
}
?>
</p>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<p>
<?php
if ( $language == $answer2){
    echo '正解';
} else {
    echo '残念・・・';
}
?>
</p>
<p>③の答え</p>
<p>
<?php
if ( $command == $answer3){
    echo '正解';
} else {
    echo '残念・・・';
}
?>
</p>

<?php
// PHP演習
echo "HELLO TECH I.S." ;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLO TECH I.S.</title>
    <link rel = "stylesheet" href = "PHP1.php.css" >
</head>
<body>
    <?= "HELLO TECH I.S." ; ?>
<!-- //変数の演習 htmlの中にphpを入れ込むときは下記の囲いを忘れずに-->
    <?= $num = "1000" ; ?>
    <?= "echo 1000 ;"; ?>
    <?= "echo 愛媛県 ;"; ?>
<!-- 定数を使うときは括弧の後にシングルコートを忘れずに -->
    <?= define('都道府県',"愛媛県"); ?>
    <!-- phpの計算 -->
</body>
</html> 
<?php
echo "<br>";  //改行
echo 6 + 8;    //足し算
echo "<br>";
echo 10 - 7;    //引き算
echo "<br>";
echo 3 * 8;     //掛け算
echo '<br>';
echo 84 / 6;    //割り算
echo "<br>";
echo 57 % 7;    //割った時の余り

//単項演算子　演算子が一つだけの値
$price = 600;
$price++;   //=>601 インクリメント
$price--;   //=>599 デクリメント

echo 3 + 7 + (50 * 50);

$num = 46;  //変数を使うときは必ずダブルクオーテーションマークを使わないといけない

echo "みかんが $num こあります<br>";
echo 'みかんが' . $num. 'こあります';

//ifについて　

$line = 30;
$score = 10;
if($line > $score){   //ifは、line=30。=> 30点より低かったら赤点ということ
        echo "赤点";
    }elseif($score == 100){     //elseifは、ifではないとき満点ということ
            echo "満点";
    }else{                  //elseは、ifでもelseifでもないときに合格ということ
        echo "合格";
}

//switch文の場合
switch ($score){
    case '>30':  //30点以下の時
        //処理 赤点
    break;
    case '100';  //100の時
      //処理　満点
    break;
    case '30<100';  //30点以上100点未満の時
         //処理　合格
    break;
}


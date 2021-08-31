<?php

//単項演算子演算子が一つだけの値
// $price = 600
// $price++;   //=>601 インクリメント
// $price--;   //=>599 デクリメント

echo 3 + 7 + (50 * 50);

$num = 46;  //変数を使うときは必ずダブルクオーテーションマークを使わないといけない

echo "みかんが $num こあります<br>";
echo 'みかんが' . $num. 'こあります';

//ifについて

$line = 30;
$score = 10;

if($line > $score){   //ifは、line=30。=> 30点より低かったら赤点ということ
        echo "赤点";
    }elseif($score == 100){   //elseifは、ifではないとき満点ということ
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
      //処理  満点
    break;
    case '30<100';  //30点以上100点未満の時
      //処理  合格
      echo "合格";
    break;
}

$a = 1000;

$b = 0;
while ($a > 0 ) {$b++; $a -=2;echo $a; 
    echo "<br>";
}
echo $a;
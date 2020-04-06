<?php
//1.$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
//もし違ったら「あなたの名前ではありません」と表示するように実装してください。

$name ="Y.SHIND0";

if ($name === "Y.SHINDO") {
    echo "私はあなたの名前です"."\n" ;
} else {
    echo "あなたの名前ではありません"."\n" ;
}

//2.for文を使って、1から10000までの合計の値を表示してください。
$number=0;
for($i=1 ;$i<=10000 ;$i++){
    //$number += $i;
    $number += $i;
}
echo $number;
echo "\n";

//3.$fruits に配列で好きなフルーツを5個代入し、
//foreach文で順番に出力してください。

$fruits = array("banana","apple","strawberry","papaya","orange");

foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//4.【応用】 次のプログラムのバグを修正し、1から100までの間で5の倍数のみ
//表示するようにしてみてください。


//元のプログラム  右側に訂正事項コメント

/* for文の始めの値を定義する */
//$start = 1;
/* for文の終わりの値を定義する */
//$end = 100;

//for($i = $start; $i < $end; $i++){ //「$i < $end」ではなく「$i <= $end」

  // 5で割り切れたら{}内を実行する
//  if($i % 5 == 0){
//    echo $i　　　//;がない //改行を追加
//  }
//}


//以下、訂正後
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start ; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}


?>
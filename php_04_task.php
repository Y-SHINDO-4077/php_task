<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function double ($number){
    return $number * 2;
}

echo double(100);
echo "\n";

//2.$a と $b を仮引数に持ち、$a と $bを足した結果を返す関数を作成してください。
function plus($a,$b){
    return $a + $b;
}

echo plus(3,7);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。

function mul($arr){
    //$number の初期値を１に設定
    $number=1;
    
    // 配列の個数分、$numberに配列の中身を順番に掛け合わせてループさせる
    for ($i=0; $i<count($arr);$i++){
        $number*=$arr[$i];
    }
    //$numberを返す
    return $number;
}
$array =array(1, 3, 5 ,7, 9) ;
echo mul($array);
echo "\n";

//確認用
$array = array(1,2,3,4,5,6,7,8,9,10);
echo mul($array);
echo "\n";

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array 
//という関数を実装しようとしています。途中の部分を完成させてください。

function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     //途中の部分ここから
     
     //$max_number が　$a（配列から新しく取り出した数）より小さければ、
     //$max_numberには$aを入れる
  if ($max_number < $a){
      $max_number = $a;
  }else{
      //それ以外の場合は$max_numberはそのままにする
      $max_number = $max_number;
  }
 }

 return $max_number;
 }
 
 
//確認用
$array = array(4,8,7,9,2,10,5);
echo max_array($array);
echo "\n";


//5 次のビルドイン関数の用途・使い方を調べ、実際に使用する

//strip_tags : 文字列からHTML・PHPタグを取り除く
$text = '<p>ああああああ</p>' ;
echo strip_tags($text) .PHP_EOL;

//array_push:元配列の末尾に追加
$logo = array("A","B","C");
array_push($logo,"D");
print_r($logo);

//array_marge:2つの配列を順に連結し、新しい配列を作る
$animal1 = array("lion","elephant","dog");
$animal2 = array("cat","sea otter","bird");

$merged = array_merge($animal1,$animal2);

print_r($merged);

//time:現在のUNIXタイムスタンプ（グリニッジ標準時）を返す
/*1970/1/1 00:00:00 からの通算秒を表示する*/
echo time();
echo "\n";


//mktime:日付時刻を作る
/*2020-05-01 mktime(hour,minute,second,Month,day,Year)*/
$dayMayfirst = date('Y-m-d',mktime(0,0,0,5,1,2020));
echo $dayMayfirst . PHP_EOL;

//date:日付や時刻を書式化する
/*本日の日付を表示する (lで曜日)*/
$Today = date('Y-m-d l',time());
echo $Today.PHP_EOL;

/*現在時刻の表示(日本時間)*/
date_default_timezone_set("Asia/Tokyo"); //日本時刻に設定
$nowTime = date('H:i:s',time()) ;
echo $nowTime;
echo "\n";


?>
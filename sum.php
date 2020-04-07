<?php
//1から$maxまでを足した値を返す関数
function sum($max){
    //$result は結果を保存する関数
    $result = 0;
    
    //$iは1から始まり$max より大きくなるまでループ
    for ($i =1; $i <= $max ;$i++){
        $result += $i;
    }
    return $result;
}

//関数を呼び出す
echo sum(100);
echo "\n";

//文字の長さを取得する
$string="ABCDEF";
echo strlen($string);
echo "\n";

//文字列を置換する
$string1 ="I Love Ruby.";

$new_string1 = str_replace("Ruby","PHP", $string1);//str_replace(探したい値,置き換える値,検索置き換え対象になる変数・配列)

echo $new_string1;
echo "\n";

//配列をsortする

$array = array(2,5,9,7,3,1,8,6,4);

//配列を小さい順（昇順）にソート
asort($array);

print_r($array);
echo $array;
var_dump($array);


arsort($array);
print_r($array);



?>
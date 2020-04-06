<?php
echo "hello php!";

$a = 3;
$b = 3;
$c = "3";

//$aと$bが等しい時はtrue そうでない時はfalse
var_dump($a == $b);
//$aと$bが等しくない場合はtrue
var_dump($a != $b);

//$aが$bより大きいときにtrue
var_dump($a>$b);

//$aが$b以上であるときにtrue
var_dump($a>=$b);

//$aと$cがデータ型が等しく、かつ値も等しい時はtrue
var_dump($a === $c);

//$aと$cの値が等しい時はtrue（データ型が考慮されていない）
var_dump($a == $c);

//$aと$cとデータ型が等しくないか、もしくは値が等しくない時にtrue
var_dump($a !== $c);


//配列とfor文
$fruits = array("apple","orange","lemon");

echo count($fruits)."\n";//JS等とは違い、lengthではない

for ($i = 0; $i <count($fruits) ;$i++){
    echo "要素は".$fruits[$i];
    echo "\n";
}

//foreach文
$animals = array("dog","cat","panda");
//要素は[動物名]
foreach ($animals as $animal){
    echo "要素は".$animal;
    echo "\n";
}
//要素[配列番号]は[動物名]
foreach ($animals as $key =>$animal){
    echo "要素".$key."は".$animal;
    echo "\n";
}


?>
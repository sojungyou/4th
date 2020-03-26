<?php
function number($number) {
return $number*2 ;
}  
echo number(3);
echo PHP_EOL;

function f($a , $b) {
  return $a + $b;
} echo f(3 , 5);
echo PHP_EOL;

$array = array (1,3,5,7,9);
  function arr($array) {
    $result = 1;
    for ($i=0; $i<=4; $i++){
    $result *= $array[$i];
    }
    return($result);
    }     
  echo arr($array);
  echo PHP_EOL; 

  function max_array($arr){
$max_number = $arr[0];
foreach($arr as $a){
if ($arr>$a) {
$arr=$a;
}
}
return $max_number;
}
echo PHP_EOL;
// strip_tags
// strip_tags — 文字列から HTML および PHP タグを取り除く
$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo PHP_EOL;
// array_push
// array_push — 一つ以上の要素を配列の最後に追加する
$fruits = array("apple", "kiwi");
array_push($fruits, "orange" , "strawberry");
print_r($fruits);
// array_merge
// ひとつまたは複数の配列をマージする
$array1 = array("color" => "orange" , 2,5);
$array2 =array("a","b" , "color"=> "red" , "fruit" => "grape" , 4);
$result = array_merge($array1,$array2);
print_r($result);
// time, mktime
// time => 現在の Unix タイムスタンプを返す
echo time();
echo PHP_EOL;

$nextweek = time () + (7 * 24 * 60 * 60);
echo 'now' . date ('Y-m-d') . "\n";
echo 'next week' . date ('Y-m-d',$nextweek) . "\n";
echo PHP_EOL;
// mktime — 日付を Unix のタイムスタンプとして取得する
$timestamp = mktime(2, 45, 17, 3, 26, 2020);
echo $timestamp;
echo PHP_EOL;
// date
// date — ローカルの日付/時刻を書式化する
echo date('Y-m-d H:i:s');
<?php

//課題3
//$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。


//数値を掛け合わせる関数の内容
function times($arr){
 $result = 1;
  foreach($arr as $number){
   $result *= $number;
 }
  return $result;
}
//引数に掛け合わせたい5つの数値を格納
 echo times(array(1,3,5,7,9)); 
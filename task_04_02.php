<?php

//課題2
//$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

//仮引数を2つ定義
function plus($a,$b) {

//数値を足し合わせる関数の内容
  $result = 0 ;
  $result = $a + $b; 
  return $result ;
}


//引数に足し合わせたい２つの数値を格納
echo plus(121,257); 

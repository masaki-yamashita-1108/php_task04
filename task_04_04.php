<?php

//課題4
//【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 
 //[山下追記] 以降の行を修正しました。
 //if分で要素1つ1つを大小検証するようにしています。
 
 if ($a >= $max_number) {
  $max_number = $a;
 }
}
 return $max_number;
 }
echo max_array(array(999,54,77,872,2)); 
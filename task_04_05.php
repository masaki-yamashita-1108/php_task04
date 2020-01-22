<?php

//課題5
//次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。

//①strip_tags
//タグの中身の文字列を出力する。

$text = '<p>文章</p> <h1>見出し1</h1> <h2>見出し2</h2> <a href ="aaa/bbb/ccc">text</a>';
echo strip_tags($text);

echo "\n";

//②array_push
//文字列を配列の要素として追加する。
$apple = array("iphone","ipod");
array_push($apple,"macbook","ipad");
print_r($apple);

echo "\n";

//③array_merge
//配列を結合する
$language1 = array("php","ruby");
$language2 = array("HTML","CSS");
$result = array_merge($language1,$language2);
print_r($result);

//④time, mktime
//現在時刻の入手と、それを基準とした別日の入手が可能
$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'NextWeek:  '. date('Y-m-d',$nextWeek) ."\n";


echo date("d-M-Y", mktime(0, 0, 0, 1, 1, 2020));
echo "\n";

//⑤date
echo date("l");
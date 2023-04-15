<?php
// 毎回1枚目でシャッフルする場合

//URの枚数
$ur = 0;
//引いたカードの枚数
$count = 0;
//ムシクイーンパック予算
$cast = 1000000000;
$remain = $cast;

while ($remain > 0) {
    $remain -= 200;
    if ($remain < 0) {
        break;
    }
    $count++;
    $rand = mt_rand(0, 99);
    if ($rand < 8) {
        $ur++;
    }
}

echo '1枚目でシャッフル。予算は'.number_format($cast).'ポイント。めくったカードは'.$count.'枚で、そのうちURの枚数は'.$ur.'枚。';
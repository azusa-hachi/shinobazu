<?php
// 毎回全てめくる場合

//URの枚数
$ur = 0;
//引いたカードの枚数
$count = 0;
//ムシクイーンパック予算
$cast = 1000000000;
$remain = $cast;

while ($remain > 0) {
    for ($i=0; $i<4; $i++) {
        $remain -= 200 + $i*10;
        if ($remain < 0) {
            break;
        }
        $count++;
        turnCard();
    }
}

echo '毎回全てめくる。予算は'.number_format($cast).'ポイント。めくったカードは'.$count.'枚で、そのうちURの枚数は'.$ur.'枚。';

function turnCard() {
    global $ur;
    $rand = mt_rand(0, 99);
    if ($rand < 8) {
        $ur++;
    }
    return;
}
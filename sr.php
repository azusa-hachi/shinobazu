<?php
// SR以上が出たらシャッフルの場合

//URの枚数
$ur = 0;
//引いたカードの枚数
$count = 0;
//ムシクイーンパック予算
$cast = 1000000000;
$remain = $cast;

while ($remain > 0) {
    //SR以上確定の位置
    $locate = mt_rand(0, 3);

    for ($i=0; $i<4; $i++) {
        $remain -= 200 + $i*10;
        if ($remain < 0) {
            break;
        }
        $count++;
        if (turnCard(strcmp($locate, $i))) {
            break;
        }
    }
}

echo 'SR以上でシャッフル。予算は'.number_format($cast).'ポイント。めくったカードは'.$count.'枚で、そのうちURの枚数は'.$ur.'枚。';

function turnCard($locateFlag) {
    $srFlag = false;
    global $ur;
    $rand = mt_rand(0, 99);
    if ($rand < 8) {
        $ur++;
        $srFlag = true;
    } elseif ($rand < 47 || $locateFlag) {
        $srFlag = true;
    }
    return $srFlag;
}
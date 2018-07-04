<?php
/**
 * 已知整数数组A[99], 包含所有99个元素都是1~100中的随机数，并且这99个两两互不相等，
 * 也是说在1-100这一百个数字中有99个数字在内，有一个缺失，找出缺失的值
 */

function get_lost_num()
{
    //100数字之和
    $sumA = (1+100) * 50;

    $sumB = 0;
    $arr = [];

    for($i = 0; $i<99; $i++) {
        $arr[$i] = (int)rand(1,100);

        for ($j=0; $j<$i;$j++) {

            if ($arr[$j] == $arr[$i]) {
                $i --;
                break;
            }
        }
    }

    foreach ($arr as $num) {
        $sumB += $num;
    }

    return $sumA - $sumB;

}

echo get_lost_num();

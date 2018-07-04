<?php

function bubble_sort(&$array)
{
   $len = count($array);
   //确定冒泡排序要循环的次数
   for ($i=0; $i<$len;$i++) {

       //该层循环用来控制每轮 冒出一个数 需要比较的次数
       for($j=0; $j < $len-$i; $j++) {
           if ($array[$j] > $array[$j+1]) {
               $tmp = $array[$j];
               $array[$j] = $array[$j+1];
               $array[$j+1]  = $tmp;
           }
       }
   }

   return $array;
}

$array = [3,5,7,9,4,0];

bubble_sort($array);

var_dump($array);exit;

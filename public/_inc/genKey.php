<?php
/**
 * Created by IntelliJ IDEA.
 * User: weiyongqing
 * Date: 12-12-29
 * Time: 下午11:34
 * 产生随机数
 */
function gen_key($digits)
{
    $authnum = '';
    srand((double)microtime() * 1000000); //create a random number feed.
    $ychar = "0,1,2,3,4,5,6,7,8,9";
    $list = explode(",", $ychar);
    for ($i = 0; $i < $digits; $i++) {
        $randnum = rand(0, 9); // 10+26;
        $authnum .= $list[$randnum];
    }
    return $authnum;
}
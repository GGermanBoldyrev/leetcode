<?php

class Solution
{
    /**
     * @param Integer $num
     * @return Integer
     */
    function splitNum(int $num): int
    {
        $num1 = '';
        $num2 = '';
        $numArr = str_split($num);
        while (count($numArr)) {
            $min = min($numArr);
            count($numArr) % 2 != 0 ? $num1 .= $min : $num2 .= $min;
            unset($numArr[array_search($min, $numArr)]);
        }
        return (int)$num1 + (int)$num2;
    }
}

$num = 4325;
echo new Solution()->splitNum($num);
<?php
function quick_sort($my_array)
{
    $loe = $gt = array();
    if(count($my_array) < 2)
    {
        return $my_array;
    }
    $pivot_key = key($my_array);
    $pivot = array_shift($my_array);
    foreach($my_array as $val)
    {
        if($val <= $pivot)
        {
            $loe[] = $val;
        }elseif ($val > $pivot)
        {
            $gt[] = $val;
        }
    }
    return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
}

    $input = htmlspecialchars($_GET["input"]);
    $arr = explode(",", $input);
    $arr = quick_sort($arr);
echo implode(',',$arr);

?>
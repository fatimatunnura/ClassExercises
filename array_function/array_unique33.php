<?php
function specified_array_unique($array, $value)
{
    $count = 0;

    foreach($array as $array_key => $array_value)
    {
        if ( ($count > 0) && ($array_value == $value) )
        {
            unset($array[$array_key]);
        }

        if ($array_value == $value) $count++;
    }

    return array_filter($array);
}
?>
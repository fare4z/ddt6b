<?php
function checkNumber($num)
{

    if ($num % 2 == 0) {
        $msg = "Even";
    } else {
        $msg = "Odd";
    }

    return $msg;

}

echo checkNumber(2); // call the function

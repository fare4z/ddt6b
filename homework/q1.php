<h3>Question 1</h3>
<p>
A company decided to give bonus of 5% to employee if his/her year of service is more than 5 years. Ask user for their salary and year of service and print the net bonus amount </p>
<?php

$name = "Fareez";
$yos = 5; //Year of services
$salary = 1200;

if ($yos > 5) {
    $bonus = $salary * 0.05;
    $msg = "Congratulation! You deserve a bonus";
} else {
    $bonus = 0;
    $msg = "Sorry, you are not eligible for the bonus";
}

echo "Hi $name <br><br> Bonus : RM $bonus <br> $msg";

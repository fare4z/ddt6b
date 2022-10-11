<h3>Question 2</h3>
<p>
A shop will give discount of 10% if the cost of purchased quantity is more than 1000. Ask user for quantity. Suppose, one unit will cost RM100. Judge and print total cost for the user.</p>
<?php
$quantity = 1000;
$price_per_quantity = 100;

if ($quantity > 1) {
    $cost = $quantity * $price_per_quantity;
    $diskaun = $cost * 0.10;
    $total_cost = ($quantity * $price_per_quantity) - $diskaun;
    $msg = "Eligible for discount";
    $status = "layak";
} else {
    $cost = $quantity * $price_per_quantity;
    $total_cost = $cost;
    $msg = "Sorry, you are not eligible for the discount";
    $status = "tidak";
}

echo "Quantity : $quantity <br>
Price per quantity : RM $price_per_quantity <br>
Actual Cost : RM " . number_format((float) $cost, 2, '.', '') . " <br>
Message : $msg <br>
Total Cost : RM" . number_format((float) $total_cost, 2, '.', '') . " <br>";

if ($status == "layak") {
    echo "You Save (10%) : RM " . number_format((float) $diskaun, 2, '.', '') . "";
}
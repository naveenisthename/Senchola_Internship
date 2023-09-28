<?php

//Switch 
//it will do the loose comparison 
//break -> it will exit the loop
//continue -> it will skip the loop
//the break 2 -> it effectively "breaks out" of two nested loop that contains it(the parent loop).
//the continue 2 -> it effectively "skips" of two nested loop that contains it(the parent loop).

$paymentStatus = "declined";

switch ($paymentStatus) {
    case "paid":
        echo "Payment paid"; // like this it could have multiple statements 
        break; //the break statement are woking within the switch  
    case "declined":
    case "rejected": //because two are the same meaning 
        echo "Payment declined";
        break;
    case "failed":
        echo "Payment pending";
        break;
    default:
        echo "Unknown payment status";
}
echo '<br/>';
echo '<br/>';


$paymentStatuses = ["paid", "declined", "failed"];

foreach ($paymentStatuses as $payStatus) {
    switch ($payStatus) {
        case "paid":
            continue 2;
            echo "Payment paid";

        case "declined":
            echo "Payment declined";
            break;
        case "failed":
            echo "Payment pending";
            break;
        default:
            echo "Unknown payment status";
    }
    echo " <= status ";
    echo '<br/>';
}

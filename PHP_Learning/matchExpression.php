<?php

// Match Expression
// it's an expression and it evaluates a value 
// don't need to use break statement
// in switch default is not required ,but in match it will give an error
// does the strict comparison

$payment = 3;

match ($payment) {
    1 => print "Paid",
    2, 3 => print "Rejected",
    4 => print "Pending",
    default => print "Unknown"
};
echo '<br/>';

$paymentStatusDIsplay = match ($payment) {
    1 => "Paid",
    2, 3 => "Rejected",
    4 => "Pending",
    default => "Unknown"
};


echo $paymentStatusDIsplay;

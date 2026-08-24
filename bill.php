<?php 

$units = 500;
$senaior = 61;
$date = 16;
$totalbill = 0; // Standard single variable tracker

// STEP 1: Base Bill Calculation
if ($units <= 100) {
    $totalbill = $units * 10;
}
elseif ($units > 100 && $units <= 200) {
    $funits = 100 * 10;
    $Sunits = $units - 100;
    $totalbill = $funits + ($Sunits * 15);
}
else {
    $funits = 100 * 10;           // 1000
    $Sunits = 100 * 15;           // 1500
    $Tunits = $units - 200;       // 300 * 20 = 6000
    $totalbill = $funits + $Sunits + ($Tunits * 20); // Base: 8500
}

echo "Base Monthly Bill: Rs. " . $totalbill . "<br><br>";

// STEP 2: Senior Citizen Discount Check
if ($units > 150 && $senaior >= 60) {
    $discount = $totalbill * 0.10; // 850
    $totalbill -= $discount;       // 8500 - 850 = 7650
    
    echo "Special Senior Citizen Discount (10%): -Rs. " . $discount . "<br>"; 
    echo "Bill After Discount: Rs. " . $totalbill . "<br><br>";
}

// STEP 3: Late Fee Notice (For Senior Account after 15th)
if ($date > 15 && $senaior >= 60) {
    $lateFee = 500;
    $totalbill += $lateFee; // 7650 + 500 = 8150 (Discount maintain raha)

    echo "⚠️ <strong>SENIOR CITIZEN LATE PAYMENT NOTICE</strong><br>";
    echo "Due date (15th) has passed for Senior Account.<br>";
    echo "Late Fine Added: +Rs. " . $lateFee . "<br>";
    echo "Current Total Bill: Rs. " . $totalbill . "<br><br>";
}

// FINAL PAYABLE AMOUNT
echo "--------------------------------------------------<br>";
echo "<strong>FINAL PAYABLE BILL: Rs. " . $totalbill . "</strong>";

?>
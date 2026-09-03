<?php 
echo "<h3>-----------------Associative Arrays----------------- </h3>";
 
$product = ["catagory" => "Shoes", "title" => "new shoes"  , "color" => "red" ,"price" => 6000 , "stock" => 1 ];

// echo $product['catagory'] . "<br>";
// echo $product['title'] . "<br>";
// echo $product['color'] . "<br>";
// echo $product['price'] . "<br>";
// echo $product['stock'] . "<br>";

// echo "----------------- Multi Array-----------------  <br><br";

// $products = [
//    "product1" => ["Catogroy" => "shoes" , "price" => 2000 , "stock" => 1],
//    "product2" =>  ["Catogroy" => "t-shirts" , "price" => 800 , "stock" => 0],
//     "product3" => ["Catogroy" => "shirts" , "price" => 1200 , "stock" => 3],
//     "product4" => ["Catogroy" => "pents" , "price" => 1500 , "stock" => 2]
// ];

// echo $products['product1']['Catogroy'] . "<br>";
// echo $products['product1']['price'] . "<br>";

// if ($products['product1']['stock'] < 0){
// echo "stock is unavaleble";
// }
// else {
//     echo $products['product1']['stock'] . "<br><br>";
// };

// echo $products['product2']['Catogroy'] . "<br>";
// echo $products['product2']['price'] . "<br>";

// if ($products['product2']['stock'] < 0){
// echo "stock is unavaleble";
// }
// else {
//     echo $products['product2']['stock'] . "<br><br>";
// };


// echo $products['product3']['Catogroy'] . "<br>";
// echo $products['product3']['price'] . "<br>";

// if ($products['product3']['stock'] < 0){
// echo "stock is unavaleble";
// }
// else {
//     echo $products['product3']['stock'] . "<br><br>";
// }; 

// echo $products['product1']['Catogroy'] . "<br>";
// echo $products['product1']['price'] . "<br>";

// if ($products['product4']['stock'] < 0){
// echo "stock is unavaleble";
// }
// else {
//     echo $products['product4']['stock'] . "<br><br>";
// };

echo "<h3>-----------------Associative Arrays + foreach----------------- </h3>";

$products2 = [
    "product1" => ["Category" => "shoes", "price" => 2000, "stock" => 1],
    "product2" => ["Category" => "t-shirts", "price" => 800, "stock" => 0],
    "product3" => ["Category" => "shirts", "price" => 1200, "stock" => 3],
    "product4" => ["Category" => "pants", "price" => 1500, "stock" => 2]
];

foreach ($products2 as $pName => $product) {
    echo "Product: " . $pName . "<br>";
    echo "Category: " . $product['Category'] . "<br>";
    echo "Price: Rs. " . $product['price'] . "<br>";
    
    if ($product['stock'] <= 0) {
        echo "Status: Stock is unavailable!<br>";
    } else {
        echo "Status: Stock is available (" . $product['stock'] . ")<br>";
    }
    
    echo "-----------------------------------<br>";
}

?>
<?php echo "<h3>-----------------Arrays-----------------</h3> <br><br>";

$data = [1 , "Ali", "ali2gmail.com" , 17];

echo "<pre>";
print_r($data ) . "<br>";
echo "</pre>";


echo "<pre>";
var_dump($data);
echo "</pre>";

// echo $data[0] . "<br>";
// echo $data[1] . "<br>";
// echo $data[2] . "<br>";
// echo $data[3] . "<br>";

echo "<br><br>";

 echo "<h5>-----------------Arrays + loop-----------------</h5> <br><br>";
 
//  for ($i = 0; $i<=3; $i++){
//     echo $data[$i] . "<br>";
//  }

$Cdat = (count($data));
for ($i = 0 ; $i < $Cdat ; $i++){
    echo $data[$i] . "<br>";

}

echo "<br><br>";

 echo "<h3>----------------- Multidimention Arrays / 2D Arrays / Array of Arrays  -----------------</h3> <br><br>";

 $students = [
    [1 , "ali" , "Ali@gmail.com", 17],
    [2 , "ayan" , "ayan@gmail.com" , 18],
    [3 , "abdullah" , "abdullah@gmail.com" , 19]
 
 ];

echo "<pre>";
print_r($students ) . "<br>";
echo "</pre>";

 echo "<br><br>";
 echo "<h5>-----------------Arrays + loop-----------------</h5> <br>";

 
 for ($i = 0; $i < count($students); $i++){
    
    for ($f = 0; $f < count($students[$i]); $f++){
        echo $students[$i][$f]. "<br>";
    };

 };







 echo "<br><br>";



 




?>

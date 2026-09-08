<?php 

// $Students = [
//     "Student1" => ["id" => 1 , "name" => "Ali", "age" => 17, "Number" => "03002767862", "city" =>"karachi"],
//     "Student2" => ["id" => 2 , "name" => "Ahmed","age" => 18, "Number" => "03002767862", "city" => "karachi"],
//     "Student3" => ["id" => 3 , "name" => "ayan","age" => 14, "Number" => "03002767862", "city" => "karachi"],
//     "Student4" => ["id" => 4 , "name" => "abdullah","age" => 19, "Number" => "03002767862", "city" => "karachi"],
//     "Student5" => ["id" => 5 , "name" => "tayyabbits","age" => 23, "Number" => "03072346976", "city" => "lahore"]
// ];

// foreach($Students as $key => $superarry){
//    foreach($superarry as $vkey => $values){
//     echo $vkey . " : " . $values . "<br>";
//    }
//    echo "<br>";

// };



$data = [
    "Student1" => ["id" => 1 , "name" => "Ali", "age" => 17, "Number" => "03002767862", "city" =>"karachi"],
    "Student2" => ["id" => 2 , "name" => "Ahmed","age" => 18, "Number" => "03002767862", "city" => "karachi"],
    "Student3" => ["id" => 3 , "name" => "ayan","age" => 14, "Number" => "03002767862", "city" => "karachi"],
    "Student4" => ["id" => 4 , "name" => "abdullah","age" => 19, "Number" => "03002767862", "city" => "karachi"],
    "Student5" => ["id" => 5 , "name" => "tayyabbits","age" => 23, "Number" => "03072346976", "city" => "lahore"]
];




?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Table</title>
</head>
<body>

<h1 class="center">Table</h1>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>City</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $rows => $Std){;?>
        <tr>    
             <?php foreach($Std as $values){;?>
            <td><?php echo $values;?></td> 
            <?php };?>
        </tr>
         <?php };?>

    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php 
$data = [
    [1,"Ali",17,"03002767862","karachi"],
    [2,"Ahmed",18,"03002767862","karachi"],
    [3,"ayan",14,"03002767862","karachi"],
    [4,"abdullah",19,"03002767862","karachi"],
    [5,"tayyabbits",23,"03072346976","lahore"]
];

// foreach($data as $row) {
//     echo $row[0] . " | " . $row[1] . " | " . $row[2] . " | " . $row[3] . " | " . $row[4] . "<br>";
// }



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
        <?php foreach($data as $rows){;?>
        <tr>
             <?php foreach($rows as $Std){;?>
            <td><?php echo $Std;?></td>
             <?php };?>
        </tr>
         <?php };?>

    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
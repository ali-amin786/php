<?php 
$Students = [
    [1,"Areeh",19,"Uni"],
    [2,"Ali",17,"12th"],
    [3,"hasan",15,"10th"],
    [4,"hussain",8,"2nd"]
];

// foreach ($Students as $child){
//     foreach($child as $values){
//         echo $values ."<br>";

//     };
// };

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
<title>Title</title>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Class</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($Students as $child){; ?>
    <tr>
        <?php foreach($child as $values) {?>

      <td><?php echo $values?></td>

     <?php }?>
    </tr>
    <?php }?>
  </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>
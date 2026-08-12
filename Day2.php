                    <!-- ARITHEMETIC  &  COMBINED  ASSIGNMENTS -->
<?php
// //  percentage 
// $obtainedmarks = 400; 
// $totalmarks = 500 ;

// $per = ( $obtainedmarks * 100 ) / $totalmarks;

// print("total percentage" . "=". $per );
$name = "Ali";

$english = 75;
$urdu = 80;
$math = 66;
$chemistry = 65;
$physics = 55;

$totalmarks = 100 + 100 + 100 +75 + 60;
$obtainedmarks = $english + $urdu + $math + $chemistry + $physics;
$per = ( $obtainedmarks * 100) /$totalmarks ;

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
<title>marksheet</title>
</head>
<body>

<h1 class="mt-3 bold">Marksheet</h1>
<table class="table">
    
    <thead>
        <tr>
            <th class="">Name</th>
            <th colspan="1" class=""><?php echo $name;?></th>
            <th colspan="" class="">9th</th>
        </tr>
        <tr>
            <th>Subjects</th>
            <th>Total Marks </th>
            <th>obtaiend marks </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>English</th>
            <th>100</th>
            <td><?php echo $english;?></td>
        </tr>
        <tr>
            <th>Urdu</th>
            <th>100</th>
            <td><?php echo $urdu;?></td>
        </tr>
        <tr>
            <th>Math</th>
            <th>100</th>
            <td><?php echo $math;?></td>
        </tr>
        <tr>
            <th>Chemistry</th>
            <th>75</th>
            <td><?php echo $chemistry;?></td>
        </tr>
        <tr>
            <th>Physics</th>
            <th>60</th>
            <td><?php echo $physics;?></td>
        </tr>
        <tr>
            <th>Marks</th>
            <th><?php echo $totalmarks;?></th>
            <td><?php echo $obtainedmarks;?></td>
        </tr>
        <tr>
            <th>Percentage</th>
            <th><?php echo $per ;?>%</th>
            <th></th>
            
        </tr>
    </tbody>
    


</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>






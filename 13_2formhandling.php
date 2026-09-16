<?php print_r($_SERVER["REQUEST_METHOD"]) ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <title>Feedback Data</title>
</head>

<body>

    <div class="container mt-5">
        <!-- Bootstrap class "table" (lowercase) -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Feedback</th>
                </tr>
            </thead>
            <tbody>
               

                <?php foreach ($_POST as $value): ?>
                    <td><?php echo $value; ?></td>
                <?php endforeach; ?>


            </tbody>
            <button type="button"  class="btn btn-primary"><a href="12_formhandling.php"></a>Back</button>

        </table>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <div class="container p-4">
        <h1>Student Data</h1>
        <form action="13_2formhandling.php" class="needs-validation" novalidate method="post">
            <div class="form-group mb-3">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" id="validationCustom01" class="form-control" required name ="uname">
                <div class="invalid-feedback">
                    Please print your name.
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" id="validationCustom02" class="form-control" required name="uemail">
                <div class="invalid-feedback">
                    Please provide a valid email.
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="validationCustomUsername" class="form-label">Feedback</label>
                <textarea  id="validationCustomUsername" class="form-control" required name="ufeedback"></textarea>
                <div class="invalid-feedback">
                    Please provide your feedback.
                </div>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary mt-2" type="submit">Submit form</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap 5 JS Bundle (Includes Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Validation Script -->
    <script>
        (function () {
            'use strict'

            var forms = document.querySelectorAll('.needs-validation')

            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>
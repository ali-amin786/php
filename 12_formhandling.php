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
    <div class="container p-4 ">
        <form action="" class="needs-validation" novalidate>
            <div class="form-group ">
                <label for="validationCustom01" class="form-label">Name</label>
                <input type="text" id="validationCustom01" class="form-control" required>
                <div class="invalid-feedback">
                    please print your name.
                </div>
            </div>
            <div class="form-group mt-4">
                <label for="validationCustom02" class="form-label">Email</label>
                <input type="email" id="validationCustom02" class="form-control" required>
                <div class="invalid-feedback">
                    Please provide a valid email.
                </div>
            </div>
            <div class="form-group  mt-4">
                <label for="validationCustomUsername" class="form-label">Feedback</label>
                <textarea name="feedback" id="validationCustomUsername" class="form-control" required></textarea>
                <div class="invalid-feedback">
                    Please provide your feedback.
                </div>
                <div class="valid-feedback">
                    looks good
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary mt-4" type="submit">Submit form</button>
            </div>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>
<script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
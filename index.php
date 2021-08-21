<?php include("db_connection.php")  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>



     <div class="container registration_form">
<h1>registration form</h1>
<p style="color:green">

  <?php echo $message ?>
</p>
    <form  method="POST" class="needs-validation " novalidate>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationCustom01">First name</label>
            <input type="text" name="firstname" class="form-control" id="validationCustom01" placeholder="First name" required >
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="validationCustom02">Last name</label>
            <input type="text" name="lastname" class="form-control" id="validationCustom02" placeholder="Last name" required  >
            <div class="valid-feedback">
              Looks good!
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="validationCustomUsername">Username</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupPrepend">@</span>
              </div>
              <input type="text" name="username" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required >
              <div class="invalid-feedback">
                Please choose a username.
              </div>
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
            <label for="validationCustom03">City</label>
            <input type="text" name="city" class="form-control" id="validationCustom03" placeholder="City" required >
            <div class="invalid-feedback">
              Please provide a valid city.
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="validationCustom04">State</label>
            <input type="text" name="state" class="form-control" id="validationCustom04" placeholder="State" required >
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <!-- <div class="col-md-12 mb-3">
            <label for="validationCustom05">Zip</label>
            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
            <div class="invalid-feedback">
              Please provide a valid zip.
            </div>
          </div>
        </div> -->
        <div class="form-group">
        </div>
        <button class="btn btn-primary col-md-12 mt-2" name="submit" type="submit">
          REGISTER
        </button>
      </form>
               
     </div>
      <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
</body>
</html>
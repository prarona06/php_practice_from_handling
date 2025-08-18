<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Awesome Bootstrap Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card border-0 shadow-lg rounded-4">
          <div class="card-header bg-primary text-white text-center rounded-top-4">
            <h3 class="mb-0">Sign Up</h3>
          </div>
          <div class="card-body p-4">
            <form action="./core/signup_core.php" method="POST">
              <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" name="fullname" class="form-control" id="name" placeholder="John Doe" >
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email"  name="fullemail" class="form-control" id="email" placeholder="you@example.com" >
              </div>
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text"  name="fullusername" class="form-control" id="username" placeholder="Choose a username" >
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="fullpassword" class="form-control" id="password" placeholder="********" >
              </div>
              <div class="mb-3">
                <label for="confirm" class="form-label">Confirm Password</label>
                <input type="password"  name="fullconfirm" class="form-control" id="confirm" placeholder="********" >
              </div>
              <div class="form-check mb-3">
                <input class="form-check-input" name="fulterms" type="checkbox" id="terms" >
                <label class="form-check-label" for="terms">
                  I agree to the terms and conditions
                </label>
              </div>
              <?php

              /*if(isset($_GET['error']) && $_GET['error'] == 'Invalid Method!'){
                echo "<p class='text-danger'> Invalid Request Method!</p>";
              }*/
              
              ?>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-lg">Create Account</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

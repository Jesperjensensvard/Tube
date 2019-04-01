<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>TheTube.com</title>
    <link rel="stylesheet" href="./CSS/register.css">
</head>
<body>

<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Register for The Tube!</h2>
        <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
    </div>

    <div class="col-md-8 order-md-1 test">
      <form class="needs-validation" novalidate="" method="POST" action="./tube/login_system/register2.php">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name<span class="text-muted">(*)</span></label>
            <input type="text" class="form-control" id="firstName" placeholder="FirstName" value="" required="" name="firstname">
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name<span class="text-muted">(*)</span></label>
            <input type="text" class="form-control" id="lastName" placeholder="LastName" value="" required="" name="lastname">
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Email<span class="text-muted">(*)</span></label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="email" class="form-control" id="email" placeholder="Email" required="" name="email">
            <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
         
          </div>
        </div>

        <div class="mb-3">
          <label for="email">UserName <span class="text-muted">(*)</span></label>
          <input type="text" class="form-control" id="username" placeholder="Username" name="username">
          <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
        </div>

        <div class="mb-3">
          <label for="address2">Password<span class="text-muted">(*)</span></label>
          <input type="password" class="form-control" id="address2" placeholder="password" name="password">
        </div>

        <div class="mb-3">
          <label for="address2">Password repeat<span class="text-muted">(*)</span></label>
          <input type="password" class="form-control" id="address2" placeholder="password" name="password-repeat">
        </div>

        <div class="mb-3">
          <label for="address">Address<span class="text-muted">(*)</span></label>
          <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" name="adress">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>


        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country<span class="text-muted">(*)</span></label>
            <select class="custom-select d-block w-100" id="country" required="" name="country">
              <option value="">Choose...</option>
              <option>United States</option>
              <option>Sweden</option>
              <option>Norway</option>
              <option>China</option>
              <option>Russia</option>
              <option>Spain</option>
              <option>Denmark</option>
              <option>Great britan</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
              <option>United States</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>
        
        </div>    
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block regbutton" type="submit">Register now!</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">© 2017-2019 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>

</body>
</html>
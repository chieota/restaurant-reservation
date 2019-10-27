<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-9 mt-5">
        <div class="card">
          <div class="card-header py-5 bg-dark">
          <h3 class="text-light text-center py-3">LOG IN</h3>    
          </div>
          <div class="card-body">
            <form method="post">
              <div class="form-group">
              <input type="text" name="username"class="form-control" placeholder="Your username">
              </div>
              <div class="form-group">
              <input type="password" name="password"class="form-control" placeholder="Your password">
              </div>
              <button type="submit" class="btn btn-outline-danger btn-sm mt-3" name="login">LOG IN</button>
              <p class="float-right mt-3 text-muted">Don't have an account?
              <strong><a href="register.php" class="text-decoration text-dark">Sign Up</a></strong>
            </form>
            <?php
              session_start();
              require_once "classes/User.php";
              
              $user = new User;

              if(isset($_POST['login'])){
                // $_SESSION['user_id'] = 25;
                $username = $_POST['username'];
                $password = $_POST['password'];

                $user->login($username,$password);
              }
            ?>
           </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
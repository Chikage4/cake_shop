<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="card mx-auto w-50 my-5 border-0">
      <div class="card-header bg-white text-dark border-0">
      <h1 class="text-center">LOGIN</h1>
      </div>

      <div class="card-body">
        <form action="storeAction.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="text" name="username" placeholder="username" class="form-control p-4" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="password" name="password" placeholder="password" class="form-control p-4" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <input type="submit" value="Login" name="login" class="btn btn-info form-control p-4">
            </div>
          </div>

        </form>
      </div>
      
    </div>
  </div>

  
</body>
</html>
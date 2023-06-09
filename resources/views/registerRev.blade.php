<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Register Page</title>
      <link href="https://fonts.googleapis.com/css?family=inter" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="register.css">
      <!-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}"> -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    </head>
  <body>
    <!-- CONTENT -->
    <div class="wrapper">
      <div class="container-lg main">
        <div class="row">
          <div class="col-md-6 img-left">
            <!-- Ini Foto -->
            <!-- <img src="login.png" alt=""> -->
          </div>

          <div class="col-md-6 right">
            <div class="input-box">
              <header>
                Register
              </header>
                <div class="input-field">
                  <input type="text" class="input" id="email" required autocomplete="off" placeholder="Email">
                </div>
                <div class="input-field">
                  <input type="text" class="input" id="username" required autocomplete="off" placeholder="Username">
                </div>
                <div class="input-field">
                  <input type="number" class="input" id="phone" required autocomplete="off" placeholder="Phone">
                </div>
                <div class="input-field">
                  <input type="password" class="input" id="password" required placeholder="Password">
                </div>
                <div class="input-field">
                  <input type="password" class="input" id="re-password" required placeholder="Reattempt password">
                </div>
                <div class="button">
                  <button type="submit" class="submit" onclick="location.href='login'">Create Account</button>    
                </div>

            </div>

          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
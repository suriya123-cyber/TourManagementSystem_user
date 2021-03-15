<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<body>
  <form action="{{ route('login.post') }}" method="POST">
    @csrf
      <div class="login-box">
        <h1>Login</h1>
        <div class="textbox">
          <i class="fas fa-user"></i>
          <input type="text" name="email" placeholder="Enter your email....">
           @error('email')
                <div style="color:red; text-align:center">{{ $message }}</div>
            @enderror
        </div>

        <div class="textbox">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Enter Your password....">
          @error('password')
                <div style="color:red; text-align:center">{{ $message }}</div>
            @enderror
        </div>
      <div class="col-12" >
        <input type="submit" class="btn btn-primary"  name="submit" value="Login">
      </div>
      <div><h1> Do not have any account!<a href="/register">Register now!</a></h1>

      </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </form>
  </body>
</html>


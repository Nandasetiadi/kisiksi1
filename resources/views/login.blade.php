<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login – tobuk </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-image: url("/img/bukuo.jpg");
      background-size: contain;
      background-repeat: no-repeat;
    }

    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .login-border {
      border: 10px solid black; /* Border around the login form */
      padding: 20px; /* Optional padding for spacing */
      border-radius: 5px; /* Optional rounded corners */
      position: relative; /* Enable positioning of back button */
    }

    .back-button {
      position: absolute;
      bottom: 10px; /* Position at the bottom */
      left: 10px; /* Position to the left */
      background-color: red; /* Red background color */
      color: white; /* White text color for contrast */
      border-color: red; /* Red border color */
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="col-md-4 col-md-offset-4 login-border">
      <a href="/" class="back-button btn btn-default">Back</a>
      <h2 class="text-center"><b>Atrox</b><br>barang berkualitas</h3>
      <hr>

      @if(session('error'))
      <div class="alert alert-danger"> <b>Opps!</b> {{session('error')}} </div>
      @endif

      <form action="{{ route('actionlogin') }}" method="post">
        @csrf
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="Email" required="">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required="">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Log In</button>
        <p class="text-center">Belum punya akun?<a href="/register">Buat Disini!</a></p>
        <hr>
      </form>
    </div>
  </div>
</body>

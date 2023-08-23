<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title','laravel_practice')</title>
  <link rel="icon" type="image/x-icon" href="https://cdn-icons-png.flaticon.com/128/187/187879.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="app.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <img  class="navbar-brand" src="https://cdn-icons-png.flaticon.com/128/187/187879.png" style="height:50px;width:50px" >

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="home"><i class="fa-solid fa-house"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cgvak">Cgvak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="g2">G2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="employee">Emp</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="empdetails">Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact"><i class="fa-solid fa-phone"></i></a>
      </li>
    </ul>
  </div>
</nav>
@yield('content')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<style>

</style>
<head>
    <script scr="{{asset('js/app.js')}}"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Project</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <body style="background-color: black;">
        <div class="content">
            @section('header')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">XYZ</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teams">Our teams</a>
      </li>
      <li class="nav-item dropdown">
      <a class="nav-link" href="product">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact">Contact us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>
@show

<div class="content">
    @section('content')
    @show
</div>


<div class="footer" style="color:black; position:absolute; bottom:0; width:100%; background-color:white">
    @section('footer')
    <h1 style="font-size: 30px;">This is Footer</h1>
    @show
</div>
</body>

</html>
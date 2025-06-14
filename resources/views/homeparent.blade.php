<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Monginis Style Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
    body {
      margin: 0;
      padding: 0;
    }
    .navbar {
      background-color: white;
      padding: 1rem 0;
    }
    .navbar-brand img {
      height: 45px;
    }
    .navbar-nav .nav-link {
      font-weight: bold;
      color: black;
      margin-right: 20px;
    }
    .navbar-nav .nav-link.active {
      color: #007bff; /* Blue for active */
    }
    .dropdown-menu {
      font-weight: normal;
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #e4e0f4;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset("logo.png") }}" alt="Monginis Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Our Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Our History</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Become a Franchise
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Apply Now</a></li>
            <li><a class="dropdown-item" href="#">FAQ</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blogs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Wedding Cakes</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
@section('content1')
@show


</body>
</html>
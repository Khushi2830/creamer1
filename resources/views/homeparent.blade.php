<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Monginis Style Header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <style>
     body {
      background-color: #f9f9f9;
      font-family: 'Segoe UI', sans-serif;
    }

    .icon-text-row {
      display: flex;
      align-items: flex-start;
      gap: 20px;
      margin-bottom: 40px;
    }

    .icon-text-row img {
      width: 80px;
      height: auto;
    }

    .text-content {
      font-size: 1.1rem;
      color: #111;
    }

    .text-content strong {
      font-weight: bold;
    }

    .container-custom {
      max-width: 1000px;
      margin: 60px auto;
      padding: 0 15px;
    }
     body {
      background-color: #f9f9f9;
      font-family: Arial, sans-serif;
    }

    .section-heading {
      color: #ff2d92;
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      margin-top: 60px;
      margin-bottom: 30px;
    }

    .mission-text,
    .core-values,
    .mission-statement {
      max-width: 1100px;
      margin: auto;
      color: #111;
      font-size: 1.1rem;
    }

    .core-title {
      color: #ff2d92;
      font-size: 1.6rem;
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 15px;
      text-align: left;
    }

    .core-values ol {
      padding-left: 1.5rem;
    }

    .mission-statement {
      display: flex;
      align-items: center;
      gap: 20px;
      margin-top: 40px;
    }

    .mission-statement img {
      width: 100px;
      height: auto;
    }

    .mission-statement p {
      font-size: 1.1rem;
      margin: 0;
    }

    .mission-statement strong {
      font-weight: bold;
    }
    .header-section {
      background-color: #150548; /* Deep purple */
      color: #ff2d92; /* Monginis pink */
      padding: 60px 0;
      text-align: center;
    }
    .header-section h2 {
      font-size: 2.5rem;
      font-weight: bold;
    }
    .story-section {
      background-color: #f9f9f9;
      padding: 60px 0;
    }
    .story-title {
      color: #ff2d92;
      font-size: 2rem;
      font-weight: bold;
      margin-bottom: 20px;
    }
    .story-text {
      font-size: 1.1rem;
      color: #333;
    }
    .story-image {
      width: 100%;
      max-width: 450px;
    }
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
   <style>
    body {
      background: #f1f2f4;
    }
    .timeline {
      position: relative;
      max-width: 1000px;
      margin: auto;
      padding: 50px 0;
    }
    .timeline::after {
      content: '';
      position: absolute;
      width: 4px;
      background-color: #3d2b5a;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -2px;
    }
    .timeline-item {
      padding: 20px 30px;
      position: relative;
      width: 50%;
    }
    .timeline-item::after {
      content: " ";
      position: absolute;
      width: 20px;
      height: 20px;
      right: -10px;
      background-color: #fff;
      border: 4px solid #3d2b5a;
      top: 20px;
      border-radius: 50%;
      z-index: 1;
    }
    .timeline-item-left {
      left: 0;
    }
    .timeline-item-right {
      left: 50%;
    }
    .timeline-content {
      background: #fff;
      padding: 20px;
      border-radius: 6px;
      border-left: 5px solid #e91e63;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .timeline-year {
      font-weight: bold;
      color: #3d2b5a;
      margin-bottom: 10px;
    }
    .timeline-item-right::after {
      left: -10px;
    }
    @media screen and (max-width: 768px) {
      .timeline::after {
        left: 10px;
      }
      .timeline-item {
        width: 100%;
        padding-left: 40px;
        padding-right: 25px;
      }
      .timeline-item::after {
        left: 0;
      }
      .timeline-item-right {
        left: 0%;
      }
    }
  </style>
  <style>
    body {
      background: #f1f2f4;
    }
    .timeline {
      position: relative;
      max-width: 1000px;
      margin: auto;
      padding: 50px 0;
    }
    .timeline::after {
      content: '';
      position: absolute;
      width: 4px;
      background-color: #3d2b5a;
      top: 0;
      bottom: 0;
      left: 50%;
      margin-left: -2px;
    }
    .timeline-item {
      padding: 20px 30px;
      position: relative;
      width: 50%;
    }
    .timeline-item::after {
      content: " ";
      position: absolute;
      width: 20px;
      height: 20px;
      right: -10px;
      background-color: #fff;
      border: 4px solid #3d2b5a;
      top: 20px;
      border-radius: 50%;
      z-index: 1;
    }
    .timeline-item-left {
      left: 0;
    }
    .timeline-item-right {
      left: 50%;
    }
    .timeline-item-right::after {
      left: -10px;
    }
    .timeline-content {
      background: #fff;
      padding: 20px;
      border-radius: 6px;
      border-left: 5px solid #e91e63;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .timeline-year {
      font-weight: bold;
      color: #3d2b5a;
      margin-bottom: 10px;
    }
    @media screen and (max-width: 768px) {
      .timeline::after {
        left: 10px;
      }
      .timeline-item {
        width: 100%;
        padding-left: 40px;
        padding-right: 25px;
      }
      .timeline-item::after {
        left: 0;
      }
      .timeline-item-right {
        left: 0%;
      }
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg shadow-sm" style="background-color: #e4e0f4;">
  <div class="container">
<<<<<<< HEAD
    <a class="navbar-brand" href="">
      <img src="{{ asset("logo.png") }}" alt="Monginis Logo">
=======
    <a class="navbar-brand" href="{{ Route("home") }}">
      <img src="{{ asset("logo.png") }}" width="200vh" alt="Monginis Logo">
>>>>>>> cf7e30a2f5024df10b191abbc2eed659babfa01c
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="mainNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="{{ Route("home") }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Our Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ Route("abuout") }}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route("histroy") }}">Our History</a>
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
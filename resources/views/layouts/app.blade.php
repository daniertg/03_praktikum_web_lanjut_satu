<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        
       
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link px-lg-1" href="/home1">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-lg-1" href="/news">News</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-lg-1" href="/produk">Produk</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link px-lg-1" href="/program">Program</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link px-lg-1" href="/about">About</a>
              </li>
              <li class="nav-item px-lg-1">
                <a class="nav-link px-lg-1" href="/about">Contact Us</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>




      <style>
      
        .nav-link-active,
        .navbar-nav .nav-link:focus, .navbar-nav .nav-link:hover {
          background-color: #135FA9 !important;
          border-color: #135FA9 !important;
          color: white !important;
          border-radius: 4px !important;
        }

        .navbar-aside .navbar-nav .nav-link:focus, .navbar-aside  .navbar-nav .nav-link:hover {
          background-color: transparent !important;
          border-color: transparent !important;
        }
        .card mb-3{
           height: 50%;
        }

        </style>
    @yield('index')
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

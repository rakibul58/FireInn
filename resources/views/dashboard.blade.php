<?php

 use App\Http\Controllers\UserController;
 use Illuminate\Support\Facades\DB;

use App\Models\User;

  $total = User::count();
  
  $totalOrder = DB::table('orders')->count();
  $totalCart = DB::table('cart')->count();
  


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fire-Inn</title>
  </head>
  <body>

 

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Fire-Inn</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
          <form action="/search" class="d-flex" role="search">
            <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </ul>
        <ul class="navbar-nav navbar-right">
            
            
            <a class="nav-link" href="/adminlogin">Logout</a>
            
          
            
        </ul>
      </div>
    </div>
  </nav>

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">11 Food Items</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quia facere, quos maiores accusamus pariatur impedit! Natus veritatis quia asperiores.</p>
                  <a href="/" class="btn btn-primary">Go To Items</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $total }} Customers</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias beatae error qui tenetur necessitatibus nisi est provident expedita doloremque animi.</p>
                  <a href="/customercrud" class="btn btn-primary">Customer List</a>
                </div>
              </div>
            </div>
          </div>
    </div>

    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Total {{ $totalOrder }} Orders</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ipsam quibusdam perspiciatis eaque, culpa officiis repellat error maiores vero rem?</p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Another {{ $totalCart }} items in the Cart</h5>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sapiente ab nemo quam illum molestiae consequatur porro delectus? Excepturi, voluptas nemo.</p>
                  
                </div>
              </div>
            </div>
          </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
  <div style="clear: both" class="col-sm-2 mx-auto my-5">
    <footer class="footer-59391">
      
    
        <div class="row">
          <div class="col ">
            <div class="copyright">
              <p><small>Copyright 2022. All Rights Reserved.</small></p>
            </div>
          </div>
        </div>
      
    
  </footer>
</div>

</html>
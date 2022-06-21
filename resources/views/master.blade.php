<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fire-Inn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
  <style>
      .custom-login{
          height: 570px;
          padding-top: 100px;
      }
     .carousel-item{
       height: 32rem;
       background-position:center;
       background-size:cover;  
      
     }

     .slider-text{
       background-color:#35443585 !important; 
     }

     .custom-product{

        height: 600px;

     }

     .trending-image{

      height: 150px;

     }

     .trending-item{

        float: left;
        width: 20%;

     }

     .trending-wrapper{
       margin: 30px;
     }

     .detail-img{
       margin: 10px;
       height: 200px;
     }

     .detail-custom{
       height: 500px;
       padding-top: 10px;
     }

     .search-box{

        width: 500px;

     }

     .custom-search{
       padding-top: 10px;
       
      
     }

     .cart-list-devider{

        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;

     }
     

      
  </style>
</html>
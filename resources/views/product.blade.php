@extends('master')
@section("content")


<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Slide 6" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Slide 7" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="7" aria-label="Slide 8" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="8" aria-label="Slide 9" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="9" aria-label="Slide 10" class=""></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="10" aria-label="Slide 11" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
          
            
            @foreach ($products as $item)

            <a href="detail/{{ $item['id'] }}">
              <div class="carousel-item {{ $item['id']==1?'active':'' }}" style="background-image: url({{ $item['gallery'] }})">
                
                <div class="container">
                  <div class="carousel-caption text-start slider-text">
                    <h1>{{ $item['name'] }}</h1>
                    <p>{{ $item['description'] }}.</p>
                    
                  </div>
                </div>
            </div>
            </a>

            
                
            @endforeach


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="trending-wrapper">
        <h3>Trending Items</h3>
        @foreach ($products->take(5) as $item)

        <div class="trending-item">
        <a href="detail/{{ $item['id'] }}" style="text-decoration: none; color:black">
        <img src="{{ $item['gallery'] }}" alt="" class="trending-image">            
            <div class="">
              <div class="trending-text">
                <h6>{{ $item['name'] }}</h6>
                
              </div>
            </div>
        </div>
      </a>    
        @endforeach
      </div>

  </div>
    
    

@endsection
@extends('master')
@section("content")


<div class="container custom-search">
    

    <div class="row">
        <div class="col-4">
            <a href="#">Filter</a>
        </div>
        <div class="col-4">
            <div class="trending-wrapper">
                <h4>Resulted Items</h4>
                @foreach ($products as $item)
        
                <div class="searched-item">
                <a href="detail/{{ $item['id'] }}" style="text-decoration: none; color:black">
                <img src="{{ $item['gallery'] }}" alt="" class="trending-image">            
                    <div class="">
                      <div class="trending-text">
                        <h2>{{ $item['name'] }}</h2>
                        <h6>{{ $item['description'] }}</h6>
                        
                      </div>
                    </div>
                </div>
              </a>    
                @endforeach
              </div>
        </div>
    </div>

</div>
    
@endsection
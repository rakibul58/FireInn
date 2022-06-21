@extends('master')
@section("content")


<div class="container custom-cartlist">
    

   
        <div class="col-10">
            <div class="trending-wrapper">
                <h4>Cart List</h4>
                <a class="btn btn-success" href="ordernow">Order Now</a>
                <br><br>
                @foreach ($products as $item)
        
                <div class="row searched-item cart-list-devider">
                   <div class="col-4">
                    <a href="detail/{{ $item->id }}" style="text-decoration: none; color:black">
                    <img src="{{ $item->gallery }}" alt="" class="trending-image">            
                    </a>
                    </div>
                   <div class="col-4">
                   
                                  
                            <div class="">
                              <div class="trending-text">
                                <h2>{{ $item->name}}</h2>
                                <h6>{{ $item->description}}</h6>
                                
                              </div>
                            </div>
                       
                   </div>
                   <div class="col-4">
                  
                                
                            <a href="/removecart/{{ $item->cart_id }}" class="btn btn-warning">Remove From Cart</a>
                       
                       
                </div> 
                </div>
               
                @endforeach
              </div>
              <a class="btn btn-success" href="ordernow">Order Now</a>
        </div>


</div>
    
@endsection
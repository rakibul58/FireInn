@extends('master')
@section("content")


<div class="container custom-cartlist">
    

   
        <div class="col-10">
            <div class="trending-wrapper">
                <h4>My Orders</h4>
              
                <br><br>
                @foreach ($orders as $item)
        
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
                                <h6>Delivery Status : {{ $item->status}}</h6>
                                <h6>Address : {{ $item->Address}}</h6>
                                <h6>Payment Method : {{ $item->payment_method}}</h6>
                                <h6>Payment Status : {{ $item->payment_status}}</h6>
                                
                              </div>
                            </div>
                       
                   </div>
                   
                </div>
               
                @endforeach
              </div>
             
        </div>


</div>
    
@endsection
@extends('master')
@section("content")


<div class="container custom-cartlist">
    

   
        <div class="col-10">
            <br>
           
            <table class="table table-dark">
                
                <tbody>
                  <tr>
                    <th scope="row">Amount</th>
                    <td>৳ {{ $total }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Tax</th>
                    <td>৳ 0</td>
                  </tr>
                  <tr>
                    <th scope="row">Delivery</th>
                    <td>৳ 35</td>
                  </tr>
                  <tr>
                    <th scope="row">Total Amount</th>
                    <td>৳ {{ $total+35 }}</td>
                  </tr>
                </tbody>
              </table>

              <div>

                <form action="/orderplace" method="POST">
                    @csrf
                    <div class="mb-3">
                      
                      <textarea name="address" class="form-control" placeholder="Enter Your Address"></textarea>
                      
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"><b>Payment Method</b></label><br><br>
                      <input type="radio" value="cash" name="payment"><span> BKash Payment</span><br><br>
                      <input type="radio" value="cash" name="payment"><span> Payment on Delivery</span><br><br>
                    </div>
                    <button type="submit" class="btn btn-success">Order Now</button>
                  </form>

              </div>

        </div>


</div>
<br>
<br>
    
@endsection
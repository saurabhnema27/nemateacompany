@extends('layouts.app')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-header">Buy Dashboard</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h4 class="h4 col-sm"><label id="lblGreetings"></label>, {{$data['user']['name']}}</h4> 
                            <hr>
                            <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#exampleModal">
                              Buy Previous Order
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Previous Order Details</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                          <form action="/place-order" method="POST" enctype="application/x-www-form-urlencoded">
                                              @csrf
                                              <div class="form-row">
                                                  <div class="form-group col-md-6">
                                                  <label for="inputEmail4">Product Name</label>
                                                  <input type="text" class="form-control" name="product_type" value="{{$data['order']['product_name']}}" readonly>
                                                  </div>
                                                  <div class="form-group col-md-6">
                                                  <label for="inputnumber">Quantity (in KG)</label>
                                                  <input type="email" class="form-control" name="quant" value="{{$data['order']['quantity']}}" readonly>
                                                  </div>
                                                  <div class="form-group col-md-12">
                                                    <label>Price (in INR)</label>
                                                  <input type="text" class="form-control" name="price" value="{{$data['order']['price']}}" readonly>   
                                                  </div>
                                              </div>
                                              <button type="submit" class="btn btn-warning">Place Order</button>
                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>  
                            <hr>
                            <h3 class="h5">Personal Details</h3>
                            <form action="place-order" enctype="application/x-www-form-urlencoded" method="POST">
                                @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" value="{{$data['user']['email']}}" disabled>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputnumber">Number</label>
                                    <input type="text" class="form-control" id="inputPassword4" value="{{$data['user']['number']}}" disabled>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$data['user']['address']}}" disabled>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                  <input type="text" class="form-control" id="inputCity" value="{{$data['user']['living_in']}}" disabled>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputZip">Pincode</label>
                                  <input type="text" class="form-control" id="inputZip" value="{{$data['user']['pincode']}}" disabled>
                                  </div>
                                </div>
                                <hr>
                                <h3 class="h4">Order Details</h3>
                                <br>
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Product Type</label>
                                    <select class="form-control summable" id="order_det" name="product_type" required = "required">
                                        <option selected="selected">None</option>
                                        <option value="320">Tea Leaves</option>
                                        <option value="300">Granularity Tea</option>
                                        <option value="300">Dust Tea</option>
                                        {{-- <option value="100">Tea Masala's</option> --}}
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Quantity (in Kg)</label>
                                    <input class="form-control" type="number" name="quant" id="QTY" onKeyUp="multiply()" required/>
                                </div>
                                <div class="form-group col-md-4 mt-4">
                                  <label class="btn btn-default active">Cash On Delivery</label>
                                    <input type="radio" name="text" value="cod" checked="">
                                  </label>
                                </div>
                                </div>
                                <div class="card" id="prodectoverview1">
                                  <div class="card-header">
                                    Prodect Overview
                                  </div>
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-md">
                                        <span><img id = "image" class = "rounded border border-light" src="/images/tea3.jpg" height="129" width="222"/></span>
                                      </div>
                                      <div class="col-md">
                                        <h5 class="card-title mt-3" id="card-title"></h5>
                                        <p class="card-text" id="card-content"></p>
                                      </div>    
                                    </div>
                                  </div>
                                </div>
                                <label for="InputPrice">Price (in INR)</label>
                                <input class="form-control col-md-12" id = "sum" type="text" name="price" readonly>
                                <br>
                                <button type="submit" class="btn btn-warning">Place Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
           function multiply()
            {
                // Get the input values
                a = Number(document.getElementById('QTY').value);
                b = Number(document.getElementById('order_det').value);

                // Do the multiplication
                c = a*b;

                // Set the value of the total
                document.getElementById('sum').value=c;
            }

            // for displaying the time messages
            var myDate = new Date();
            var hrs = myDate.getHours();

            var greet;

            if (hrs < 12)
                greet = 'Good Morning';
            else if (hrs >= 12 && hrs <= 17)
                greet = 'Good Afternoon';
            else if (hrs >= 17 && hrs <= 24)
                greet = 'Good Evening';

            document.getElementById('lblGreetings').innerHTML = greet;

            $(document).ready(function() {
            $('#order_det').on('change', function() {
            $('#prodectoverview1').hide();
            if ( this.value === '320') 
            {
              document.getElementById('image').src = "/images/tealeaves.png";
              document.getElementById('card-title').innerHTML = "Tea Leaves";
              document.getElementById('card-content').innerHTML = "This type of Tea leave will only give you a great taste but not good color.";
              $("#prodectoverview1").show();
            }
            else if(this.value === '300')
            {
              document.getElementById('image').src = "/images/granual.jpg";
              document.getElementById('card-title').innerHTML = "Granularity Tea";
              document.getElementById('card-content').innerHTML = " <strong> This is our 2 Best Seller Tea,</strong> It give you a light color but a great taste in tea";
              $("#prodectoverview1").show();
            }
            else if(this.value === '300')
            {
              document.getElementById('image').src = "/images/dust.jpg";
              document.getElementById('card-title').innerHTML = "Dust Tea";
              document.getElementById('card-content').innerHTML = "* <strong> This is our Best Seller Tea,</strong> It is mainly use to get a color in tea with a light taste in it.";
              $("#prodectoverview1").show();
            }
            else
            {
                $("#prodectoverview1").hide();
            }
          })
            .change();
          });
        </script>
@endsection

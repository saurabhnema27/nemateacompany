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
                                <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Product Type</label>
                                    <select class="form-control summable" id="order_det" name="product_type" required = "required">
                                        <option value="320">Tea Leaves</option>
                                        <option value="250">Granularity Tea</option>
                                        <option value="220">Dust Tea</option>
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
        </script>
@endsection
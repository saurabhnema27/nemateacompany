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

                            <h3 class="display-h4 col-sm">{{$user->name}}</h3> <p class="lead col-sm">You join us on {{$user->created_at->diffForHumans()}}</p>    
                            <hr>
                            <h3 class="h5">Personal Details</h3>
                            <form action="place-order" enctype="application/x-www-form-urlencoded" method="POST">
                                @csrf
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" value="{{$user->email}}" disabled>
                                  </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputnumber">Number</label>
                                    <input type="text" class="form-control" id="inputPassword4" value="{{$user->number}}" disabled>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$user->address}}" disabled>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                  <input type="text" class="form-control" id="inputCity" value="{{$user->living_in}}" disabled>
                                  </div>
                                  <div class="form-group col-md-2">
                                    <label for="inputZip">Pincode</label>
                                  <input type="text" class="form-control" id="inputZip" value="{{$user->pincode}}" disabled>
                                  </div>
                                </div>
                                <hr>
                                <h3 class="h4">Order Details</h3>
                                <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Product Type</label>
                                    <select class="form-control summable" id="order_det" name="product_type" required = "required">
                                        <option value="320">Tea Leaves</option>
                                        <option value="250">Granularity Tea</option>
                                        <option value="220">Dust Tea</option>
                                        {{-- <option value="100">Tea Masala's</option> --}}
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Quantity (in Kg)</label>
                                    <input class="form-control" type="number" name="quant" id="QTY" onKeyUp="multiply()" required/>
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
        </script>
@endsection
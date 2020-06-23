@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-warning alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-warning alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif(session('order'))
                        <div class="alert alert-warning alert alert-warning alert-dismissible fade show" role="alert">
                            {{ session('order') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @elseif(session('updated'))
                    <div class="alert alert-warning alert alert-warning alert-dismissible fade show" role="alert">
                        {{ session('updated') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>    
                    @endif
                    <h4 class="h4">Welcome: <strong class="text-dark">{{$data['user']['name']}}</strong></h4>    
                    <h3 class="h4">Your total orders till now are: {{$data['total_order']}}</h3>
                    <br>
                    <hr>
                    <h3 class="h5">Personal Details</h3>
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
                            <div class="form-group col-md-4">
                            <label for="inputZip">Pincode</label>
                            <input type="text" class="form-control" id="inputZip" value="{{$data['user']['pincode']}}" disabled>
                            </div>
                            <div class="form-group col-md-2 mt-2">
                                <button type="button" class="btn btn-success mt-4" data-toggle="modal" data-target="#exampleModal">
                                    Edit Details
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/edit-details" method="POST" enctype="application/x-www-form-urlencoded">
                                                    @csrf
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Name</label>
                                                        <input type="text" class="form-control" name="name" id="inputEmail4" value="{{$data['user']['name']}}">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                        <label for="inputnumber">Email</label>
                                                        <input type="email" class="form-control" name="email" id="inputPassword4" value="{{$data['user']['email']}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="inputAddress">Address</label>
                                                    <input type="text" class="form-control" id="inputAddress" value="{{$data['user']['address']}}">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-4">
                                                        <label for="inputCity">City</label>
                                                        <input type="text" class="form-control" name="living_in" id="inputCity" value="{{$data['user']['living_in']}}">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                        <label for="inputZip">Pincode</label>
                                                        <input type="text" class="form-control" name="pincode" id="inputZip" value="{{$data['user']['pincode']}}">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label for="inputZip">number</label>
                                                            <input type="number" class="form-control" name="number" id="inputZip" value="{{$data['user']['number']}}">
                                                        </div>
                                                    </div>    
                                                    <button type="submit" class="btn btn-success">Edit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <hr>
                    <h3 class="h4">Order Details</h3>    
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment Type</th>
                            <th scope="col">Placed Order Time</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($data['order'] as $o)
                          <tr>
                            <th scope="row">{{$o->id}}</th>
                            <td>{{$o->product_name}}</td>
                            <td>{{$o->quantity}} KG</td>
                            <td>{{$o->price}}</td>
                            @if($o->status == 'Inprogress')
                                <td class="text-danger">{{$o->status}}</td>
                            @elseif($o->status == 'Completed')    
                                <td class="text-success">{{$o->status}}</td>
                            @endif    
                            <td>{{$o->payment_type}}</td>
                            <td>{{$o->created_at->diffForHumans()}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <a href="/order-history" class="btn btn-warning">Click to see all</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

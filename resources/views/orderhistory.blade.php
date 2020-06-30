@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Order History</div>

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
                    <h3 class="h3">Your total orders till now are: {{count($order)}}</h3>
                    <br>
                    <hr>
                    <h3 class="h4">Order Details</h3>    
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Order Id</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Status</th>
                            <th scope="col">Payment Type</th>
                            <th scope="col">Placed Order Time</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($order as $o)
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

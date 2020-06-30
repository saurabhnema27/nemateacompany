<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Suggestions Inquery</title>
    <link rel="icon" href="/images/logo.jpg">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <div class="jumbotron text-center">
        <h1 class="h4">Thank You! {{$data['user']['name']}}, for placing new order.</h1>
        <p class="lead"><strong>We will look to it,</strong> and try to Deliver it,befor 24 hours of span .</p>
        <hr>
        <h3 class="h4">Order Details</h3>
        <p class="lead"> Order Id: <h3 class="h4"> {{$data['order']['id']}}</h3></p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Product Name:</strong> {{$data['order']['product_name']}}</li>
            <li class="list-group-item"><strong>Quantity Order (in Kg):</strong> {{$data['order']['quantity']}} Kg</li>
            <li class="list-group-item"><strong>Price:</strong> {{$data['order']['price']}}</li>
            <li class="list-group-item"><strong>status:</strong> {{$data['order']['status']}}</li>
            <li class="list-group-item"><strong>Payment Type:</strong> {{$data['order']['payment_type']}}</li>
        </ul>
        <h3 class="h4">Delivery Details</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong>Name:</strong> {{$data['user']['name']}}</li>
            <li class="list-group-item"><strong>Address:</strong>  {{$data['user']['address']}}</li>
            <li class="list-group-item"><strong>City:</strong>  {{$data['user']['living_in']}}</li>
            <li class="list-group-item"><strong>Pincode:</strong>  {{$data['user']['pincode']}}</li>
            <li class="list-group-item"><strong>Number Type:</strong>  {{$data['user']['number']}}</li>
        </ul>
        {{-- <p>
          Cancel your Order <a href="https://nemateacompany.com/cancel-order/{{$data['order']['id']}}/">Cancel Order</a>
        </p> --}}
        <p class="lead">
          <a class="btn btn-primary btn-sm" href="https://nemateacompany.com/buy" role="button">Buy Products</a>
        </p>
      </div>
</body>
</html>
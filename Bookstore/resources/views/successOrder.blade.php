@extends('layouts/homepage')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm4">
                <h2> Your order was successfully created. Order ID: {{$order->id}}</h2>
                <h3> Go <a href="{{url('/products')}}">back</a>.</h3>
            </div>
        </div>
    </div><br>
@endsection('content')



@extends('layouts/homepage')

@section('content')
<div class="container">
    <h1> Hello, welcome to our website! </h1>
    <h3> Get started by visiting our <a href="{{url('/products')}}">products</a> page.</h3>
</div><br><br>
@endsection('content')



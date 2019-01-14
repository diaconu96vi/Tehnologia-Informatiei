@extends('layouts/homepage')

@section('content')
    <div class="container-fluid">
        <!-- <div class="col-md-8"> -->

        <div class="box">
            <div class="box-header">
                <h1>
                    Checkout
                </h1>
                <h2>
                    Total price: {{ $total }}
                </h2>

            </div>
            <div class="container">
                <div id="createTask">
                    <form action="{{ url('/createOrder')}}" method="post">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" id="address" class="form-control" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="card">Credit card number</label>
                            <input type="number" id="card" class="form-control" name="card" required>
                        </div>
                        <div class="form-group">
                            <label for="holder">Card holder name</label>
                            <input type="text" id="holder" class="form-control" name="holder">
                        </div>
                        <div class="form-group">
                            <label for="month">Expiration month</label>
                            <input type="number" id="month" class="form-control" name="month">
                        </div>
                        <div class="form-group">
                            <label for="year">year</label>
                            <input type="number" id="year" class="form-control" name="year">
                        </div>
                        <div class="form-group">
                            <label for="cvc">CVC</label>
                            <input type="text" id="cvc" class="form-control" name="cvc">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Buy now</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            @if ($errors->any())
                <div class="form-group">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <hr>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
@endsection('content')



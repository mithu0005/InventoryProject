@extends('layouts.admin-app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! as <h1> Admin </h1>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>

                        <th scope="col">Id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Description</th>
                        <th scope="col">Product Quantity</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id}}<br></td>
                            <td>{{ $product->name}}<br></td>
                            <td>{{ $product->description}}<br></td>
                            <td>{{ $product->quantity}}<br></td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@endsection

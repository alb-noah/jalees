@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h1>Products Page</h1>
            <hr>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Product Author</th>
                    <th>Quantity Available</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->selling_price }}</td>
                        <td>{{ $item->product_author }}</td>
                        <td>{{ $item->qty }}</td>

                        <td>
                            <img src="{{asset('assets/uploads/products/'.$item->image)}}" alt="img here" class="cat-image">
                        </td>
                        <td>
                            <a href="#" class="btn btn-primary">ثعديل</a>
                            <a href="#" class="btn btn-danger">حذف</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

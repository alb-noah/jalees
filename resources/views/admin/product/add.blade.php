@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" name="category_id">
                            <option value="">Select a category</option>
                            @foreach($category as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach

                        </select>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <label for="">name</label>
                        <input type="text" class="from-control" name="name">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Slug</label>
                        <input type="text" class="from-control" name="slug">
                    </div>

                    <div class="col-md-12">
                        <label for="">Small Description</label>
                        <textarea name="small_description" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for=""> Description</label>
                        <textarea name="description" cols="30" rows="3" class="form-control"></textarea>
                    </div>
                    <br>

                    <div class="col-md-6 mb-3">
                        <label for=""> Original Price</label>
                        <input type="number" class="from-control" name="original_price">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for=""> Selling Price</label>
                        <input type="number" class="from-control" name="selling_price">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for=""> Tax</label>
                        <input type="number" class="from-control" name="tax">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for=""> Quantity</label>
                        <input type="number" class="from-control" name="qty">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Product Author</label>
                        <input type="text" class="from-control" name="product_author">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" class="from-control" name="status">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="">Trending</label>
                        <input type="checkbox" class="from-control" name="trending">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" rows="3" class="form-control"/>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>

                    <div class="col-md-6">
                        <label for="">Image </label>
                        <input type="file" name="image" rows="3" class="form-control"/>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

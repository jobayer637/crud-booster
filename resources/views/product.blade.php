<!-- First, extends to the CRUDBooster Layout -->
@extends('crudbooster::admin_template')
@section('content')


<?php $path = CRUDBooster::mainpath().'/products'; echo $path;?>

<div class="card my-5">
    <div class="card-body col-md-5">
        <form action="{{ url($path) }}" method="post">
            @csrf
            <select name="category_id" class="form-control my-3 col-md-5">
                @foreach ($category as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select> <br><br>

            <input type="text" name="name" class="form-control mt-2 col-md-5" placeholder="Enter Product Name"><br><br>

            <input name="price" type="number" class="form-control" name="price" placeholder="Enter product price"><br>

            <textarea name="description" class="form-control" placeholder="Enter description"></textarea><br>

            <input type="file" name="image"><br>

            <button class="btn btn-primary rounded-0">submit</button>

        </form>


    </div>
</div>

<table class="table">
    <tr>
        <th>Product Category</th>
        <th>Product Name</th>
        <th>Description</th>
    </tr>

    <tbody>
        @foreach ($data as $product)
            <tr>
                <td>
                    {{ $product->category->name }}
                </td>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    {{ $product->description }}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

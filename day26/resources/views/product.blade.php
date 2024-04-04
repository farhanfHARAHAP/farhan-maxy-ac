@extends('master2')

@section('page_title','Product Menu')

@section('content')
@if (isset($mode))
    @if ($mode == 'edit')
    <div style="max-width: 500px">
        <form action="/edit/go" method="post">
            @csrf
            @foreach ($data as $editable)
            <h2><b>Edit Product</b></h2><hr>
            @if (isset($success))
                <p style="color: green">{{$success}}</p>
            @endif
            @if (isset($error))
                <p style="color: red">{{$error}}</p>
            @endif
            <h4>You are editing product (ID)</h4>
            <input type="hidden" name="id" value="{{$editable['id']}}">
            <input type="text" value="{{$editable['id']}}" disabled class="form-control">
            <h4 class="mt-3">Product Name</h4>
            <input type="text" name="name" class="form-control" value="{{$editable['name']}}">
            <h4 class="mt-3">Product Quantity</h4>
            <input type="text" name="quantity" class="form-control" value="{{$editable['quantity']}}">
            <p>Numbers only! No decimal!</p>
            <h4 class="mt-3">Product Price</h4>
            <input type="text" name="price" class="form-control" value="{{$editable['price']}}">
            <p>Numbers only! No decimal!</p>
            <br><br>
            <p style="text-align: right">
                <input type="submit" value="Edit Product" class="btn btn-primary">
            </p>
            @endforeach
        </form>
    </div>
    @endif
    @if ($mode == 'show')
    <div>
        <h2><b>Products Registered</b></h2>
          @if (isset($success))
              <p style="color: green">{{$success}}</p>
          @endif
        <hr>
        <table id="myTable" class="table table-striped table-bordered dt-responsive display" width="100%">
          <thead>
            <tr>
              <th>Name</th>
              <th>Quantity</th>
              <th>Price (RP)</th>
              <th>Option</th>
            </tr>
          </thead>
          <tbody>
          {{-- Data goes here --}}
            @foreach ($data as $row)
              <tr>
                <td>{{$row['name']}}</td>
                <td>{{$row['quantity']}}</td>
                <td>{{$row['price']}}</td>
                <td><a href="/edit/{{$row['id']}}">Edit</a> | <a href="/delete/{{$row['id']}}">Delete</a></td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <script>
          // $(document).ready(function() {
          //     let table = new DataTable('#example');
          // });


        </script>
        <script>
          $(document).ready( function () {
            $('#myTable').DataTable();
          });
        </script>
      </div>
    @endif
    @if ($mode =='add')
    <div style="max-width: 500px">
        <form action="/add/go" method="post">
            @csrf
            <h2><b>Add New Product</b></h2><hr>
            @if (isset($success))
                <p style="color: green">{{$success}}</p>
            @endif
            @if (isset($error))
                <p style="color: red">{{$error}}</p>
            @endif
            <h4 class="mt-3">Product Name</h4>
            <input type="text" name="name" class="form-control">
            <h4 class="mt-3">Product Quantity</h4>
            <input type="text" name="quantity" class="form-control">
            <p>Numbers only! No decimal!</p>
            <h4 class="mt-3">Product Price</h4>
            <input type="text" name="price" class="form-control">
            <p>Numbers only! No decimal!</p>
            <br><br>
            <p style="text-align: right">
                <input type="submit" value="Add Product" class="btn btn-primary">
            </p>
        </form>
    </div>
    @endif
@else
    <div>
        {{-- Title --}}
        <h2><b>Product</b></h2><hr>
        {{-- Menus --}}
        <a href="/show"><h3>Show All Products</h3></a>
        <a href="/add"><h3>Add New Product</h3></a>
    </div>
@endif
@endsection

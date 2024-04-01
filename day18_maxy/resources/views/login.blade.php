@extends('master2')

@section('page_title','Login')

@section('content')
    <div class="ps-5 pe-5 container-fluid">
        <h2><b>Login</b></h2>
        {{-- Error msg --}}
        <div>
            @if (isset($error))
                <p style="color: red">{{$error}}</p>
            @endif
            <p>All admin must login!</p>
        </div>
        <hr>
        <form action="/login/go" method="post">
            @csrf
            <h3>Email</h3>
            <input type="text" name="email" class="form-control">
            <p>Max 255 Character</p><br>
            <h3>Password</h3>
            <input type="password" name="password" class="form-control">
            <p>Min 8 Character</p><br>
            <br>
            <p style="text-align: center">
                <input type="submit" value="Login" class="btn btn-primary btn-lg">
            </p>
            <p style="text-align: center">Register <a href="/register">here.</a></p>
        </form>
    </div>
@endsection

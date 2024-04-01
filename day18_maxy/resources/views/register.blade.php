@extends('master2')

@section('page_title','Register')

@section('content')
    <div class="ps-5 pe-5 container-fluid">
        <h2><b>Register</b></h2>
        {{-- Error msg --}}
        <div>
            @if (isset($error))
                <p style="color: red">{{$error}}</p>
            @endif
            @if (isset($success))
                <p style="color: green">{{$success}}</p>
            @endif
            <p>Get your administrator account!</p>
        </div>
        <hr>
        <form action="/register/go" method="post">
            @csrf
            <h3>Full Name</h3>
            <input type="text" name="name" class="form-control" maxlength="255">
            <p>Max 255 Character</p><br>
            <h3>Email</h3>
            <input type="email" name="email" class="form-control" maxlength="255">
            <p>Max 255 Character</p><br>
            <h3>Password</h3>
            <input type="password" name="password" class="form-control">
            <p>Min 8 Character</p><br>
            <br>
            <p style="text-align: center">
                <input type="submit" value="Register" class="btn btn-primary btn-lg">
            </p>
            <p style="text-align: center">Login <a href="/login">here.</a></p>
        </form>
    </div>
@endsection

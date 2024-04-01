@extends('master')

@section('page_title','Home')

@section('content')
    <div class="ps-5 pe-5 pt-5" style="text-align: center">
        <img src="{{asset('img/flower.jpg')}}" style="max-width: 500px">
        <br><br>
        <h3>Sales: Rp. {{$price}} | Purchases: Rp. {{$cost}}</h3>
        @if ($cost > $price)
        <h3 style="color: red">-Rp. {{$cost-$price}}</h3>
        @endif
        @if ($price > $cost)
        <h3 style="color: green">-Rp. {{$price-$cost}}</h3>
        @endif
        @if ($price == $cost)
        <h3 style="color: blue">DRAW</h3>
        @endif
        <br><br>
        <h2><b>Hello username! </b></h2>
        <hr>
        <p>Please bring your to-do before you begin working!</p>
    </div>
@endsection

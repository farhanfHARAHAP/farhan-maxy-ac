@extends('master')

@section('page_title','Purchase')

@section('content')
    @if (isset($mode))
        @if ($mode == 'show')
            <style>
                .tb-delete {color: red}
            </style>
            <div>
                <a href="/admin/purchase"><h5 style="text-align: right">Back</h5></a>
                <h2><b>Purchase Logbook</b></h2>
                <p style="color: green">
                    @if (isset($success))
                        {{$success}}
                    @endif
                </p>
                <hr>
                {{-- Show logbook --}}
                <div>
                    <table style="max-width: auto">
                        <tr>
                            <td class="pe-4 pb-1"><b>No.</b></td>
                            <td class="pe-4 pb-1"><b>Date</b></td>
                            <td class="pe-4 pb-1"><b>Item</b></td>
                            <td class="pe-4 pb-1"><b>Quantity</b></td>
                            <td class="pe-4 pb-1"><b>Cost / Item</b></td>
                            <td class="pe-4 pb-1"><b>Cost Total</b></td>
                        </tr>
                        {{-- Data --}}
                        <?php $count=1 ?>
                        @foreach ($data as $item)
                            <tr>
                                <td class="pe-4 pb-1">{{$count}}</td>
                                <td class="pe-4 pb-1">{{$item['date']}}</td>
                                <td class="pe-4 pb-1">{{$item['item']}}</td>
                                <td class="pe-4 pb-1">{{$item['quantity']}}</td>
                                <td class="pe-4 pb-1">Rp. {{$item['cost_item']}}</td>
                                <td class="pe-4 pb-1">Rp. {{$item['cost_total']}}</td>
                                <td class="pe-4 pb-1"><a href="/admin/purchase/edit/{{$item['id']}}">Edit</a></td>
                                <td class="pe-4 pb-1"><a href="/admin/purchase/delete/{{$item['id']}}" class="tb-delete">Delete</a></td>
                            </tr>
                            <?php $count += 1 ?>
                        @endforeach
                    </table>
                </div>
            </div>
        @endif
        @if ($mode == 'insert')
            <div>
                <a href="/admin/purchase"><h5 style="text-align: right">Back</h5></a>
                <h2><b>Insert Purchase Logbook</b></h2><hr>
                <p style="color: red">
                    @if (isset($error))
                        {{$error}}
                    @endif
                </p>
                <p style="color: green">
                    @if (isset($success))
                        {{$success}}
                    @endif
                </p>
                {{-- Insert Form --}}
                <div style="width: 70%">
                    <form action="/admin/purchase/insert/go" method="post">
                        @csrf
                        <h4>Item Name</h4>
                        <input type="text" name="item" class="form-control"><br>
                        <h4>Quantity</h4>
                        <input type="text" name="quantity" class="form-control"><br>
                        <h4>Cost / Item (Rp.)</h4>
                        <input type="text" name="cost_item" class="form-control"><br>
                        <h4>Date</h4>
                        <input type="date" name="date" class="form-control"><br>
                        <p style="text-align: right">
                            <input type="submit" value="Insert" style="width: 30%" class="btn btn-primary">
                        </p>
                    </form>
                </div>
            </div>
        @endif
        @if ($mode == 'edit')
            <div>
                <a href="/admin/purchase/show"><h5 style="text-align: right">Back</h5></a>
                <h2><b>Edit Purchase Logbook</b></h2><hr>
                <p style="color: red">
                    @if (isset($error))
                        {{$error}}
                    @endif
                </p>
                <p style="color: green">
                    @if (isset($success))
                        {{$success}}
                    @endif
                </p>
                {{-- Edit Form --}}
                <div style="width: 70%;">
                    <form action="/admin/purchase/edit/go" method="post">
                        @csrf
                        @foreach ($data as $item)
                        <h4>You are editing log (id)</h4>
                        <input type="text" class="form-control" value="{{$item['id']}}" disabled><br>
                        <input type="hidden" name="id" value="{{$item['id']}}">
                        <h4>Item Name</h4>
                        <input type="text" name="item" class="form-control" value="{{$item['item']}}"><br>
                        <h4>Quantity</h4>
                        <input type="text" name="quantity" class="form-control" value="{{$item['quantity']}}"><br>
                        <h4>Cost / Item (Rp.)</h4>
                        <input type="text" name="cost_item" class="form-control" value="{{$item['cost_item']}}"><br>
                        <h4>Date</h4>
                        <input type="date" name="date" class="form-control" value="{{$item['date']}}"><br>
                        <p style="text-align: right">
                            <input type="submit" value="Edit" style="width: 30%" class="btn btn-primary">
                        </p>
                        @endforeach
                    </form>
                </div>
            </div>
        @endif
        @else
            <div style="width: 70%">
                <h2><b>Purchase Menu</b></h2>
                <h2 style="text-align: right">Rp. {{$cost}}</h2>
                <hr>
                <a href="/admin/purchase/show"><h3>Show Purchase Logbook</h3></a>
                <a href="/admin/purchase/insert"><h3>Insert Purchase Log</h3></a>
            </div>
    @endif
@endsection

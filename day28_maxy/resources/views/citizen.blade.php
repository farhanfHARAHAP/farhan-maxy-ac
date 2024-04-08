@extends('master')

@section('content')
    @if (isset($alert))
    <div class="container-fluid">
        <div class="alert alert-primary" style="background-color: #0C0C0C; border-color: #9B3922;">
            <h5>{{$alert}}</h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <p>(Close.)</p>
            </button>
        </div>
    </div>
    @endif
    <div class="container-fluid">
        <h3>Showing Citizen Database</h3>
        <p>All citizen is recorded in this system.</p>
        <div class="container-fluid d-flex justify-content-end">
            <a href="/download/csv" class="pe-3"><img src="{{asset('img/btn-csv.png')}}" style="max-width: 50px;"></a>
            <a href="/download/xlsx"><img src="{{asset('img/btn-xslx.png')}}" style="max-width: 50px;"></a>
        </div>
        <hr>
        <div class="container-flex">
            <table id="myTable">
                <thead>
                    <tr>
                        <th class="pe-4"><p>Name</p></th>
                        <th class="pe-4"><p>Age</p></th>
                        <th class="pe-4"><p>Address</p></th>
                        <th class="pe-4"><p>Job</p></th>
                        <th class="pe-4"><p>Option</p></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $col)
                    <tr>
                        <td class="pe-4"><p>{{$col['name']}}</p></td>
                        <td class="pe-4"><p>{{$col['age']}}</p></td>
                        <td class="pe-4"><p>{{$col['address']}}</p></td>
                        <td class="pe-4"><p>{{$col['job']}}</p></td>
                        <td class="pe-4"><p>
                            <a href="delete/{{$col['id']}}">Delete</a>
                        </p></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <script>
            $(document).ready( function () {
              $('#myTable').DataTable();
            });
        </script>
    </div>
    <hr><br>
    <div class="container-fluid">
        <h3>Add Citizen</h3>
        <p>All citizen must be registered in the system!</p>
        <hr>
        <form action="/insert" method="post" class="form-control" style="max-width: 500px">
            @csrf
            <input type="text" name="name" id="name" placeholder="Name" class="form-control"><br>
            <input type="number" name="age" id="age" placeholder="Age" class="form-control"><br>
            <input type="text" name="address" id="address" placeholder="Address" class="form-control"><br>
            <input type="text" name="job" id="job" placeholder="Job" class="form-control"><br>
            <input type="submit" value="Register New Citizen" class="btn btn-primary">
        </form>
    </div>
@endsection

@extends('master2')

@section('page_title', 'Show Products')

@section('content')
<?php
  $data = array(
    array("City" => "Tokyo", "Country" => "Japan", "Population" => 37.4),
    array("City" => "Delhi", "Country" => "India", "Population" => 31.1),
    array("City" => "Shanghai", "Country" => "China", "Population" => 27.8),
  );
?>
<div>
  <h2><b>Products Registered</b></h2>
  <hr>
  <table id="myTable" class="table table-striped table-bordered dt-responsive display" width="100%">
    <thead>
      <tr>
        <th>City</th>
        <th>Country</th>
        <th>Population (Millions)</th>
      </tr>
    </thead>
    <tbody>
    {{-- Data goes here --}}
      @foreach ($data as $row)
        <tr>
          <td>{{$row['City']}}</td>
          <td>{{$row['Country']}}</td>
          <td>{{$row['Population']}}</td> </tr>
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
@endsection

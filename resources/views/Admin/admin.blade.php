@extends('layout.template')
@section('content')

	<section class="wrapper">
		<div class="">
 <div class="panel panel-default">
    <div class="panel-heading">
     LIST PROJECT
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        @php($no=1)
        <thead>
          <tr>
            <th data-breakpoints="xs">ID</th>
            <th>Name</th>
            <th data-breakpoints="xs">Email</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Deal</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($daftar as $data)
          <tr data-expanded="true">
            <td>{{$no++}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->deal}}</td>
            <td>
            	<button class="btn btn-success btn-sm">Accept</button>
            	<button class="btn btn-danger btn-sm">Reject</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection
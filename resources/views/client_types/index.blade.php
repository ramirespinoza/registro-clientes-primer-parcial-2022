@extends('home');

@section('container')
<br>
<a href="category/create" class="btn btn-primary">Create</a>
<br>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($client_types as $client_type)
    <tr>
      <th scope="row">{{$client_type->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
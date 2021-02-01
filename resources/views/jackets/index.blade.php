@extends('layouts.app')


@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Model Name</th>
      <th scope="col">Colour</th>
      <th scope="col">Size</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($jackets->items() as $jacket)
        <tr>
          <td>{{ $jacket->id }}</td>
          <td>{{ $jacket->manufacturer }}</td>
          <td>{{ $jacket->model_name }}</td>
          <td>{{ $jacket->colour }}</td>
          <td>{{ $jacket->size }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
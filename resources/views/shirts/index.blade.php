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
      @foreach ($shirts->items() as $shirt)
          <tr>
            <td>{{ $shirt->id }}</td>
            <td>{{ $shirt->manufacturer }}</td>
            <td>{{ $shirt->model_name }}</td>
            <td>{{ $shirt->colour }}</td>
            <td>{{ $shirt->size }}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection
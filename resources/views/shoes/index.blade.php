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
      @foreach ($shoes->items() as $shoe)
          <tr>
            <td>{{ $shoe->id }}</td>
            <td>{{ $shoe->manufacturer }}</td>
            <td>{{ $shoe->model_name }}</td>
            <td>{{ $shoe->colour }}</td>
            <td>{{ $shoe->size }}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection
@extends('layouts.app')


@section('content')
  <a href="{{route('shoes.create')}}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Manufacturer</th>
        <th scope="col">Model Name</th>
        <th scope="col">Colour</th>
        <th scope="col">Size</th>
        <th>Actions</th>

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
            <td>
              <a class="btn btn-outline-primary" href="{{ route('shoes.show', ['shoe' => $shoe->id])}}">Details</a>
              <a class="btn btn-outline-primary" href="{{ route('shoes.edit', ['shoe' => $shoe->id])}}">Edit</a>

            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection
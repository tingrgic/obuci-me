@extends('layouts.app')


@section('content')
<a href="{{route('jackets.create')}}" class="btn btn-primary mt-5">Add</a>
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
    @foreach ($jackets->items() as $jacket)
        <tr>
          <td>{{ $jacket->id }}</td>
          <td>{{ $jacket->manufacturer }}</td>
          <td>{{ $jacket->model_name }}</td>
          <td>{{ $jacket->colour }}</td>
          <td>{{ $jacket->size }}</td>
          <td>
              <a class="btn btn-outline-primary" href="{{ route('jackets.show', ['jacket' => $jacket->id])}}">Details</a>
              <a class="btn btn-outline-primary" href="{{ route('jackets.edit', ['jacket' => $jacket->id])}}">Edit</a>

            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
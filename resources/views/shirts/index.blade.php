@extends('layouts.app')


@section('content')
<a href="{{route('shirts.create')}}" class="btn btn-primary mt-5">Add</a>
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
      @foreach ($shirts->items() as $shirt)
          <tr>
            <td>{{ $shirt->id }}</td>
            <td>{{ $shirt->manufacturer }}</td>
            <td>{{ $shirt->model_name }}</td>
            <td>{{ $shirt->colour }}</td>
            <td>{{ $shirt->size }}</td>
            <td>
              <a class="btn btn-outline-primary" href="{{ route('shirts.show', ['shirt' => $shirt->id])}}">Details</a>
              <a class="btn btn-outline-primary" href="{{ route('shirts.edit', ['shirt' => $shirt->id])}}">Edit</a>

            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection
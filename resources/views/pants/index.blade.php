@extends('layouts.app')


@section('content')
<a href="{{route('pants.create')}}" class="btn btn-primary mt-5">Add</a>
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
      @foreach ($pants->items() as $pant)
          <tr>
            <td>{{ $pant->id }}</td>
            <td>{{ $pant->manufacturer }}</td>
            <td>{{ $pant->model_name }}</td>
            <td>{{ $pant->colour }}</td>
            <td>{{ $pant->size }}</td>
            <td>
              <a class="btn btn-outline-primary" href="{{ route('pants.show', ['pants' => $pant->id])}}">Details</a>
              <a class="btn btn-outline-primary" href="{{ route('pants.edit', ['pants' => $pant->id])}}">Edit</a>

            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection
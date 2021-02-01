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
      @foreach ($pants->items() as $pant)
          <tr>
            <td>{{ $pant->id }}</td>
            <td>{{ $pant->manufacturer }}</td>
            <td>{{ $pant->model_name }}</td>
            <td>{{ $pant->colour }}</td>
            <td>{{ $pant->size }}</td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection
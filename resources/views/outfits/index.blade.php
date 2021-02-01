@extends('layouts.app')


@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Season</th>
      <th scope="col">ShirtID</th>
      <th scope="col">ShoeID</th>
      <th scope="col">JacketID</th>
      <th scope="col">PantID</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($outfits->items() as $outfit)
        <tr>
          <td>{{ $outfit->id }}</td>
          <td>{{ $outfit->name }}</td>
          <td>{{ $outfit->season }}</td>
          <td>{{ $outfit->shirt_id }}</td>
          <td>{{ $outfit->shoe_id }}</td>
          <td>{{ $outfit->jacket_id }}</td>
          <td>{{ $outfit->pant_id }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
@extends('layouts.app')


@section('content')
<a href="{{route('outfits.create')}}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Season</th>
      <th scope="col">ShirtID</th>
      <th scope="col">ShoeID</th>
      <th scope="col">JacketID</th>
      <th scope="col">PantID</th>
      <th>Actions</th>
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
          <td>
              <a class="btn btn-outline-primary" href="{{ route('outfits.show', ['outfit' => $outfit->id])}}">Details</a>
              <a class="btn btn-outline-primary" href="{{ route('outfits.edit', ['outfit' => $outfit->id])}}">Edit</a>

            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
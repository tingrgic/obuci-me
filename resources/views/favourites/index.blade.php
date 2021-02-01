@extends('layouts.app')


@section('content')
<a href="{{route('jackets.create')}}" class="btn btn-primary mt-5">Add</a>
  <table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">OutfitID</th>
      <th>Actions</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($favourites->items() as $favourite)
        <tr>
          <td>{{ $favourite->id }}</td>
          <td>{{ $favourite->name }}</td>
          <td>{{ $favourite->outfit_id }}</td>
          <td>
              <a class="btn btn-outline-primary" href="{{ route('favourites.show', ['favourite' => $favourite->id])}}">Details</a>
              <a class="btn btn-outline-primary" href="{{ route('favourites.edit', ['favourite' => $favourite->id])}}">Edit</a>

            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection
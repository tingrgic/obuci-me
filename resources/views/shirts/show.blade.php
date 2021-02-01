@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Shirt Details</h3>
    <ul>
        <li>Manufacturer: {{ $shirt->manufacturer }} </li>
        <li>Model name: {{ $shirt->model_name }}</li>
        <li>Colour: {{ $shirt->colour }}</li>
        <li>Size: {{ $shirt->size }}</li>
    </ul>

    <a href="{{ route('shirts.index') }}">Back</a> 
    </div>
@endsection
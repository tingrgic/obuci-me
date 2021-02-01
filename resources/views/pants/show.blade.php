@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Pants Details</h3>
    <ul>
        <li>Manufacturer: {{ $pant->manufacturer }} </li>
        <li>Model name: {{ $pant->model_name }}</li>
        <li>Colour: {{ $pant->colour }}</li>
        <li>Size: {{ $pant->size }}</li>
    </ul>

    <a href="{{ route('pants.index') }}">Back</a> 
    </div>
@endsection
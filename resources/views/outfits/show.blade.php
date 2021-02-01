@extends('layouts.app')


@section('content')
    <div>
    <h3 class="mt-3">Outfits Details</h3>
    <ul>
        <li>Manufacturer: {{ $outfit->name }} </li>
        <li>Model name: {{ $outfit->season }}</li>
        <li>ShirtID: {{ $outfit->shirt_id }}</li>
        <li>JacketID: {{ $outfit->jacket_id }}</li>
        <li>PantID: {{ $outfit->pant_id }}</li>
        
    </ul>

    <a href="{{ route('outfits.index') }}">Back</a> 
    </div>
@endsection
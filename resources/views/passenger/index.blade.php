@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="mb-3">
            @include('passenger.create')
        </div>

        <x-tables.passenger :data="$data" />
    </div>
@endsection

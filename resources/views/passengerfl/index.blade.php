@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="mb-3">
            @include('passengerfl.create')
        </div>

        <x-tables.passengerfl :data="$data" />
    </div>
@endsection

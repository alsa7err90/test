@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="mb-3">
            @include('passengersession.create')
        </div>

        <x-tables.passengerSession :data="$data" />

    </div>
@endsection

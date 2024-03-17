@extends('layouts.app')

@section('content')
<div class="container mt-5">  <div class="row">
    <div class="col-md-6">
      @include('passengerfl.create')  </div>
    <div class="col-md-6">
      @include('passengersession.create')  </div>
  </div>

  <div class="row mt-5">  <div class="col-md-12">
      <h2>@lang('Passenger Details')</h2>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">@lang('Full name') : {{ $data->FirstName . ' ' . $data->SecondName . ' ' . $data->LastName }}</h5>
          <p class="card-text">@lang('Email') {{ $data->Email }}</p>
          <p class="card-text">@lang('Phone Number') {{ $data->PhoneNumber }}</p>
          <x-links.edit href="{{ route('passengers.edit', $data->id) }}" />
          </div>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-12">
      <h2>@lang('Passneger Sessions')</h2>
      <x-tables.passengerSession :data="$data->passengersessions" />
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <h2>@lang('Passenger Favorate Locations')</h2>
      <x-tables.passengerfl :data="$data->passengerfl" />

    </div>
  </div>
</div>
@endsection

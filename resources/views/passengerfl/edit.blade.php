@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div>
            <x-links.back href="{{ route('passengerfl.index') }}"></x-links.back>
        </div>
        <form action="{{ route('passengerfl.update', [$data->PFav_ID, $data->Pass_ID]) }}" method="post">
            @csrf
            @method('put')

            <div class="mb-3">
                <select class="form-select" name="Pass_ID" aria-label="Default select example">
                    @foreach ($passengers as $pass)
                        <option value="{{ $pass->id }}" {{ $pass->id == $data->Pass_ID ? 'selected' : '' }}>
                            {{ $pass->Email }}</option>
                    @endforeach
                </select>
            </div>

            <x-inputs.text name="PFav_ID">
                <x-slot name="label">@lang('PFav_ID')</x-slot>
                <x-slot name="value">{{ $data->PFav_ID }}</x-slot>
            </x-inputs.text>
            <div class="row ">
                <div class="col">
                    <x-inputs.text name="PFav_Longitude">
                        <x-slot name="label">@lang('PFav_Longitude')</x-slot>
                        <x-slot name="value">{{ $data->PFav_Longitude }}</x-slot>
                    </x-inputs.text>
                </div>
                <div class="col">
                    <x-inputs.text name="PFav_Latitude">
                        <x-slot name="label">@lang('PFav_Latitude')</x-slot>
                        <x-slot name="value">{{ $data->PFav_Latitude }}</x-slot>
                    </x-inputs.text>
                </div>
            </div>

            <x-inputs.text name="PFav_Name">
                <x-slot name="label">@lang('PFav_Name')</x-slot>
                <x-slot name="value">{{ $data->PFav_Name }}</x-slot>
            </x-inputs.text>

            <input type="submit" class="btn btn-primary" value="save" />
        </form>
    </div>
@endsection

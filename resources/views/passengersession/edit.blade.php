@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div>
            <x-links.back href="{{ route('passengersessions.index') }}"></x-links.back>
        </div>
        <form action="{{ route('passengersessions.update',[$data->PSes_ID,$data->Pass_ID ]) }}" method="post">
             @csrf
             @method('put')

             <div class="mb-3">
                <select class="form-select" name="Pass_ID" aria-label="Default select example">
                    @foreach ($passengers as  $pass)
                        <option value="{{ $pass->id }}"  {{ $pass->id == $data->Pass_ID ? 'selected':'' }}>{{ $pass->Email  }}</option>
                    @endforeach
                </select>
            </div>

            <x-inputs.text name="PSes_ID" >
                <x-slot name="label">@lang('PSes_ID')</x-slot>
                <x-slot name="value">{{ $data->PSes_ID }}</x-slot>
            </x-inputs.text>
                    <x-inputs.text name="PSes_Token" >
                        <x-slot name="label">@lang('PSes_Token')</x-slot>
                        <x-slot name="value">{{ $data->PSes_Token }}</x-slot>
                    </x-inputs.text>
            <div class="row ">
                <div class="col">
                    <x-inputs.text name="PSes_Latitude" >
                        <x-slot name="label">@lang('PSes_Latitude')</x-slot>
                        <x-slot name="value">{{ $data->PSes_Latitude }}</x-slot>
                    </x-inputs.text>
                </div>
                <div class="col">
                    <x-inputs.text name="PSes_Longitude" >
                        <x-slot name="label">@lang('PSes_Longitude')</x-slot>
                        <x-slot name="value">{{ $data->PSes_Longitude }}</x-slot>
                    </x-inputs.text>
                </div>
            </div>

            <x-inputs.text name="Pses_InstanceID" >
                <x-slot name="label">@lang('Pses_InstanceID')</x-slot>
                <x-slot name="value">{{ $data->Pses_InstanceID }}</x-slot>
            </x-inputs.text>

            <input type="submit" class="btn btn-primary" value="save"/>
        </form>
    </div>
@endsection

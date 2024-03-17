@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div>
            <x-links.back href="{{ route('passengers.index') }}"></x-links.back>
        </div>
        <form action="{{ route('passengers.update', $passenger->id) }}" method="post">
            @csrf
            @method('put')
            <div class="row ">
                <div class="col">
                    <x-inputs.text name="FirstName">
                        <x-slot name="label">@lang('First Name')</x-slot>
                        <x-slot name="value">{{ $passenger->FirstName }}</x-slot>
                    </x-inputs.text>
                </div>
                <div class="col">
                    <x-inputs.text name="SecondName">
                        <x-slot name="label">@lang('Second Name')</x-slot>
                        <x-slot name="value">{{ $passenger->SecondName }}</x-slot>
                    </x-inputs.text>
                </div>
            </div>

            <x-inputs.text name="LastName">
                <x-slot name="label">@lang('Last Name')</x-slot>
                <x-slot name="value">{{ $passenger->LastName }}</x-slot>
            </x-inputs.text>
            <x-inputs.text name="PhoneNumber">
                <x-slot name="label">@lang('Phone Number')</x-slot>
                <x-slot name="placeholder">@lang('00964999999999')</x-slot>
                <x-slot name="value">{{ $passenger->PhoneNumber }}</x-slot>
            </x-inputs.text>

            <x-inputs.email name="Email">
                <x-slot name="label">@lang('Email')</x-slot>
                <x-slot name="value">{{ $passenger->Email }}</x-slot>
            </x-inputs.email>

            {{-- GenderM --}}
            <div class="mb-3">
                <select class="form-select" name="GenderM" aria-label="Default select example">
                    <option value="1" {{ $passenger->GenderM == '1' ? 'selected' : '' }}>@lang('Male')</option>
                    <option value="0" {{ $passenger->GenderM == '0' ? 'selected' : '' }}>@lang('Female')</option>
                </select>
            </div>
            {{-- BirthDate --}}
            <div class="mb-3">
                <label for="{{ $id ?? '' }}" class="form-label">@lang('Birth Date')</label>
                <input type="date" class="form-control" name="BirthDate" value="{{ $passenger->BirthDate }}" />
            </div>

            <x-inputs.text name="Rank">
                <x-slot name="label">@lang('Rank')</x-slot>
                <x-slot name="value">{{ $passenger->Rank }}</x-slot>
            </x-inputs.text>

            <x-inputs.integer name="Rating">
                <x-slot name="label">@lang('Rating')</x-slot>
                <x-slot name="value">{{ $passenger->Rating }}</x-slot>
            </x-inputs.integer>

            <x-inputs.integer name="Balance">
                <x-slot name="label">@lang('Balance')</x-slot>
                <x-slot name="value">{{ $passenger->Balance }}</x-slot>
            </x-inputs.integer>

            <x-inputs.integer name="Flags">
                <x-slot name="label">@lang('Flags')</x-slot>
                <x-slot name="value">{{ $passenger->Flags }}</x-slot>
            </x-inputs.integer>

            <div class="mb-3">
                <select class="form-select" name="Status" aria-label="Default select example">
                    <option value="1" {{ $passenger->Status == '1' ? 'selected' : '' }}>@lang('active')</option>
                    <option value="0" {{ $passenger->Status == '0' ? 'selected' : '' }}>@lang('disable')</option>
                </select>
            </div>
            <div class="mb-3">
                <select class="form-select" name="Language" aria-label="Default select example">
                    @foreach (config('app.locales') as $key => $lang)
                        <option value="{{ $key }}" {{ $passenger->Language == $key ? 'selected' : '' }}>
                            {{ $lang }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="save" />
        </form>
    </div>
@endsection

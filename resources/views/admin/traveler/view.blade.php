@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif

                    

                    <p>first name :  {{ $traveler->first_name}} </p>
                    <p>mobile_no :  {{ $traveler->mobile_no}} </p>
                    <p>last_name :  {{ $traveler->last_name}} </p>
                    <p>date_of_birth :  {{ $traveler->date_of_birth}} </p>
                    <p>gender :  {{ $traveler->gender}} </p>
                    <p>place_of_birth :  {{ $traveler->place_of_birth}} </p>
                    <p>country_of_residency :  {{ $traveler->country_of_residency}} </p>
                    <p>passport_no :  {{ $traveler->passport_no}} </p>
                    <p>issue_date :  {{ $traveler->issue_date}} </p>
                    <p>expiry_date :  {{ $traveler->expiry_date}} </p>
                    <p>place_of_issue :  {{ $traveler->place_of_issue}} </p>
                    <p>arrival_date :  {{ $traveler->arrival_date}} </p>
                    <p>profession :  {{ $traveler->profession}} </p>
                    <p> organization :  {{ $traveler->organization}} </p>
                    <p>visa_duration :  {{ $traveler->visa_duration}} </p>
                    <p>visa_status :  {{ $traveler->visa_status}} </p>
                    <p>passport_picture :  {{ $traveler->passport_picture}} </p>
                    <p>personal_picture :  {{ $traveler->personal_picture}} </p>
                    <p>companion :  {{ $traveler->companion}} </p>
                    <p>status :  {{ $traveler->status}} </p>
                    
                    @if($traveler->companion == "yes")
                    <hr />
                    <h3>details for companion :   </h3>
                    <p>first name :  {{ $traveler->first_name}} </p>
                    <p>last_name :  {{ $traveler->last_name}} </p>
                    <p>date_of_birth :  {{ $traveler->date_of_birth}} </p>
                    <p>gender :  {{ $traveler->gender}} </p>
                    <p>place_of_birth :  {{ $traveler->place_of_birth}} </p>
                    <p>country_of_residency :  {{ $traveler->country_of_residency}} </p>
                    <p>passport_no :  {{ $traveler->passport_no}} </p>
                    <p>issue_date :  {{ $traveler->issue_date}} </p>
                    <p>expiry_date :  {{ $traveler->expiry_date}} </p>
                    <p>place_of_issue :  {{ $traveler->place_of_issue}} </p>
                    <p>arrival_date :  {{ $traveler->arrival_date}} </p>
                    <p>profession :  {{ $traveler->profession}} </p>
                    <p> organization :  {{ $traveler->organization}} </p>
                    <p>visa_duration :  {{ $traveler->visa_duration}} </p>
                    <p>visa_status :  {{ $traveler->visa_status}} </p>
                    <p>passport_picture :  {{ $traveler->passport_picture}} </p>
                    <p>personal_picture :  {{ $traveler->personal_picture}} </p>
                    @endif

                    @if ($traveler->status == "pending")
                        <a href="{{ route('traveler.processing', $traveler->id) }}"
                            class="mx-3 btn btn-info align-items-center" data-bs-toggle="tooltip"
                            title="processing">
                            processing
                        </a>
                        <a href="{{ route('traveler.completed', $traveler->id) }}"
                            class="mx-3 btn btn-success align-items-center" data-bs-toggle="tooltip"
                            title="completed">
                            completed
                        </a>
                    @elseif($traveler->status == "processing") 
                        <a href="{{ route('traveler.completed', $traveler->id) }}"
                            class="mx-3 btn btn-success align-items-center" data-bs-toggle="tooltip"
                            title="completed">
                            completed
                        </a>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

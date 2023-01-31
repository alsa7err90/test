@extends('layouts.user')

@section('content')
    <div class="d-flex justify-content-center border-bottom">
        <div class="p-3">
            <div class="progresses">
                <div class="steps">
                    <span> 1</span>
                </div>
                <span class="line"></span>
                <div class="steps ">
                    <span>2</span>
                </div>
                <span class="line"></span>
                <div class="steps">
                    <span class="font-weight-bold">3</span>
                </div>
                <span class="line"></span>
                <div class="steps">
                    <span class="font-weight-bold">4</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-md-6 border-right p-5">
            <div class="text-center order-details">
                <div class="d-flex justify-content-center mb-5 flex-column align-items-center">
                    <span class="check1"><i class="fa fa-check"></i></span>
                    <span class="font-weight-bold">Order Confirmed</span>
                    <small class="mt-2">Review all guest date data and confirm</small>
                </div>
                <a href="{{ route('confirm.store') }}" class="btn btn-success ">
                    confirm
                </a>
            </div>
        </div>
        <div class="col-md-6 background-muted">
            <div class="p-3 border-bottom">
                <div class="d-flex justify-content-between align-items-center">
                    <span><i class="fa fa-clock-o text-muted"></i> {{ $passport->mobile_no }}</span>
                    <span><i class="fa fa-check text-muted"></i> </span>
                </div>
                <div class="mt-3">
                    <h6 class="mb-0">email : {{ $passport->email }} </h6>
                    <h6 class="mb-0">Name : {{ $passport->first_name }} {{ $passport->last_name }}</h6>
                    <span class="d-block mb-0">Birth : {{ $passport->date_of_birth }} {{ $passport->place_of_birth }}
                    </span>

                    <small class="d-block mb-0">Country Of Residency: {{ $passport->country_of_residency }}</small>
                    <small class="d-block mb-0">companion : {{ $passport->companion }}</small>
                    <small class="d-block mb-0">gender :{{ $passport->gender }}</small>
                    <small class="d-block mb-0">Place Of Issue : {{ $passport->place_of_issue }}</small>
                    <small class="d-block mb-0">Passport No : {{ $passport->passport_no }}</small>
                    <small class="d-block mb-0">Issue Date : {{ $passport->issue_date }}</small>
                    <small class="d-block mb-0">Expiry Date : {{ $passport->expiry_date }}</small>
                    <small class="d-block mb-0">Arrival Date : {{ $passport->arrival_date }}</small>
                    <small class="d-block mb-0">Visa Status : {{ $passport->visa_status }}</small>
                    <small class="d-block mb-0">Visa Duration : {{ $passport->visa_duration }}</small>
                    <small class="d-block mb-0">Check In Date : {{ $accommodation->check_in_date }}</small>
                    <small class="d-block mb-0">Check out Date : {{ $accommodation->check_out_date }}</small>
                    <small class="d-block mb-0">Rom Type : {{ $accommodation->rom_type }}</small>
                    @if ($accommodation->check_in_date_extra)
                        <small class="d-block mb-0">Check In Date Extra : {{ $accommodation->check_in_date_extra }}</small>
                    @endif
                    @if ($accommodation->check_out_date_extra)
                        <small class="d-block mb-0">Check In Date Extra :
                            {{ $accommodation->check_out_date_extra }}</small>
                        <small class="d-block mb-0">Rom Type Extra : {{ $accommodation->rom_type_extra }}</small>
                    @endif 
                    <div class="d-flex flex-column mt-3">
                        <small><i class="fa fa-check text-muted"></i> Picture
                            Personal </small>
                        <small><i class="fa fa-check text-muted"></i>Picture passport </small>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

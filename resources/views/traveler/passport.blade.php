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
                <span class="line bg-secondary"></span>
                <div class="steps bg-secondary">
                    <span class="font-weight-bold">3</span>
                </div>
                <span class="line bg-secondary"></span>
                <div class="steps bg-secondary">
                    <span class="font-weight-bold">4</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-md-12 border-right p-5">
            <a href="{{ route('phone') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i>
            </a>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('passport.store') }}" method="POST" enctype="multipart/form-data"
                class="needs-validation" novalidate>
                @csrf
                <?php $success_check = 'Looks good!'; ?>
                @include('traveler.form.travelerForm') 
                <hr />
                <div class="row"> 
                    <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Are you Traveling with companion (plus one)? </label>
                        <input type="checkbox" name="companion" id="companion" data-toggle="toggle" data-onlabel="Yes"
                            data-offlabel="No" data-onstyle="success" data-bs-toggle="collapse" aria-expanded="false"
                            aria-controls="collapseExample">
                        <div class="invalid-feedback"> Please choose Date of birth .</div>
                        <div class="valid-feedback"> {{ $success_check }} </div>
                        <div class="row" id="div_companion" style="display: none;">
                            <br />
                            <hr />
                            @include('traveler.form.companionForm')
                        </div>
                    </div> 
                </div>
                <hr />
                <button type="submit" class="btn btn-primary">Continue</button> 
            </form>
        </div> 
    @endsection

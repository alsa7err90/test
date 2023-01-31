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
                <span class="line bg-secondary"></span>
                <div class="steps bg-secondary">
                    <span class="font-weight-bold">4</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-0">
        <div class="col-md-12 border-right p-5">
            <a href="{{ route('passport') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i>
            </a>
            @if (\Session::has('error'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{!! \Session::get('error') !!}</li>
                    </ul>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('accommodation.store') }}" method="POST" class="needs-validation" novalidate>
                @csrf
                <?php $success_check = 'Looks good!'; ?>
                @include('traveler.form.accommodationForm')
                <button type="submit" class="btn btn-primary">Continue</button>
            </form>
        </div>
    </div>
@endsection

@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Passport Detail</h5>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('passport') }}" class="btn btn-md btn-success float-right"><i
                                    class="fas fa-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('passport.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf  
                        <?php $success_check = 'Looks good!'; ?>
                        @include('traveler.form.accommodationForm')

                      

                   
                        <button type="submit" class="btn btn-primary">Continue</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

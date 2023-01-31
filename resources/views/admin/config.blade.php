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

                        <form  action="{{ route('config.update') }}" method="post">
                            @csrf
                            
                           
                                <div class="row mt-2">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="mb-3">
                                            <label class="form-label">Free night:</label>
                                            <input type="text" class="form-control" name="FREE_NIGHT"
                                                value="{{ env('FREE_NIGHT') }}">
                                        </div>
                                    </div>
                                    
                                  

                                </div> 
                             
                            
                                <button type="submit" class="btn btn-dark">Update SMTP settings</button>
                             
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

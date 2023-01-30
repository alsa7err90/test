@extends('layouts.user')

@section('content')
    <div class="container">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Please enter your mobile number </h5>
                        </div>
                        <div class="col-md-2">
                            <a href="" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Step 1</h3>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('phone.store') }}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="validationTooltip01">Country code </label>
                               
                                <input id="phone" type="text" class="form-control" name="phone"  value="{{ $phone }}" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                check
                            </button>
                            </div>
                          
                        </div>

                        <button type="submit" class="btn btn-primary">Continue</button>

                    </form>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pleace enter your code</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <input type="number" class="form-control" >
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

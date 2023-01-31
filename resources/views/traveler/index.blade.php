@extends('layouts.user')

@section('content')
    <div class="d-flex justify-content-center border-bottom">
        <div class="p-3">
            <div class="progresses">
                <div class="steps">
                    <span> 1</span>
                </div>
                <span class="line bg-secondary"></span>
                <div class="steps bg-secondary">
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
        <div class="col-md-6 border-right p-5">
            <div class="text-center order-details">
                <div class="d-flex justify-content-center mb-5 flex-column align-items-center">
                    <span class="check1"><i class="fa fa-phone"></i></span>
                    <span class="font-weight-bold">mobile Confirmed</span>
                    <small class="mt-2">Please enter your mobile number</small>
                </div>
            </div>
        </div>
        <div class="col-md-6 background-muted">
            <div class="p-3  ">
                <form action="{{ route('phone.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="row">
                        <div class="col-md-8 mb-3">
                            <label for="validationTooltip01">MOBILE NUMBER </label>
                            <input id="phone" type="text" class="form-control" name="phone"
                                value="{{ $phone }}" placeholder="+1 9922222222" />
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
                    <input type="number" class="form-control">
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

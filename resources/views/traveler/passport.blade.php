@extends('layouts.user')

@section('content')
<div class="container"> 
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            <h5>Product Detail</h5>
                        </div>
                        <div class="col-md-2">
                            <a href="{{ route('phone') }}" class="btn btn-md btn-success float-right"><i class="fas fa-arrow-left"></i></a>
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
                    <form action="{{ route('passport.store') }}" method="POST"  class="needs-validation" novalidate>
                        @csrf
                        <div class="row">
                            <div class="col-md-4 mb-3">
                              <label for="validationTooltip01">First name</label>
                              <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required> 
                            </div>
                            <div class="col-md-4 mb-3">
                              <label for="validationTooltip02">Last name</label>
                              <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                              </div>
                            <div class="col-md-4 mb-3">
                              <label for="validationTooltipUsername"> Date of birth  </label>
                              <div class="input-group"> 
                                <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
                                
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip03"> Gender </label>
                              <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                              <div class="invalid-tooltip">
                                Please provide a valid city.
                              </div>
                            </div>
                            <div class="col-md-3 mb-3">
                              <label for="validationTooltip04">Place of birth</label>
                              <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required> 
                            </div> 
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip04"> Country of Residency </label>
                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required> 
                              </div>
                          </div>
                          
                          
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip03">Passport No</label>
                              <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                              </div>
                            <div class="col-md-3 mb-3">
                              <label for="validationTooltip04"> Issue date  </label>
                              <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required> 
                            </div> 
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip04"> Place of birth </label>
                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required> 
                              </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip03">Expiry date</label>
                              <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                              </div>
                            <div class="col-md-3 mb-3">
                              <label for="validationTooltip04"> Place of issue   </label>
                              <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required> 
                            </div> 
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip04"> Arrival date  </label>
                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required> 
                              </div>
                          </div>
                          
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip03"> Profession </label>
                              <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                              </div>
                            <div class="col-md-3 mb-3">
                              <label for="validationTooltip04"> Organization  </label>
                              <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required> 
                            </div> 
                            <div class="col-md-3 mb-3">
                                <label for="validationTooltip04"> Visa duration </label>
                                <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required> 
                              </div>
                          </div>

                          
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip03"> Visa status  </label>
                              <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                              </div>
                            
                          </div>
                          Please upload require documents for VISA requirement
                         
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip03"> Visa status  </label>
                              <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                              </div>
                            
                          </div>
                          
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="validationTooltip03"> Visa status  </label>
                              <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                              </div>
                            
                          </div>
                           <button type="submit" class="btn btn-primary" >Continue</button>
                       
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection

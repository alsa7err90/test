<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPassengerSessionModal">
    create Passenger
</button>

<!-- Modal -->
<div class="modal fade" id="addPassengerSessionModal" tabindex="-1" aria-labelledby="addPassengerSessionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPassengerSessionModalLabel">إضافة Passenger Session</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('passengers.store') }}" method="post">
                    @csrf
                    <div class="row ">
                        <div class="col">
                            <x-inputs.text name="FirstName">
                                <x-slot name="label">@lang('First Name')</x-slot>
                            </x-inputs.text>
                        </div>
                        <div class="col">
                            <x-inputs.text name="SecondName">
                                <x-slot name="label">@lang('Second Name')</x-slot>
                            </x-inputs.text>
                        </div>
                    </div>

                    <x-inputs.text name="LastName">
                        <x-slot name="label">@lang('Last Name')</x-slot>
                    </x-inputs.text>
                    <x-inputs.text name="PhoneNumber">
                        <x-slot name="label">@lang('Phone Number')</x-slot>
                        <x-slot name="placeholder">@lang('00964999999999')</x-slot>
                    </x-inputs.text>

                    <x-inputs.password name="password">
                        <x-slot name="label">@lang('password')</x-slot>
                    </x-inputs.password>
                    <x-inputs.email name="Email">
                        <x-slot name="label">@lang('Email')</x-slot>
                    </x-inputs.email>

                    {{-- GenderM --}}
                    <div class="mb-3">
                        <select class="form-select" name="GenderM" aria-label="Default select example">
                            <option value="1">@lang('Male')</option>
                            <option value="0">@lang('Female')</option>
                        </select>
                    </div>
                    {{-- BirthDate --}}
                    <div class="mb-3">
                        <label for="{{ $id ?? '' }}" class="form-label">@lang('Birth Date')</label>
                        <input type="date" class="form-control" name="BirthDate" />
                    </div>

                    <x-inputs.text name="Rank">
                        <x-slot name="label">@lang('Rank')</x-slot>
                    </x-inputs.text>

                    <x-inputs.integer name="Rating">
                        <x-slot name="label">@lang('Rating')</x-slot>
                    </x-inputs.integer>

                    <x-inputs.integer name="Balance">
                        <x-slot name="label">@lang('Balance')</x-slot>
                    </x-inputs.integer>

                    <x-inputs.integer name="Flags" value=0>
                        <x-slot name="label">@lang('Flags')</x-slot>
                    </x-inputs.integer>

                    <div class="mb-3">
                        <select class="form-select" name="Status" aria-label="Default select example">
                            <option value="1">@lang('active')</option>
                            <option value="0">@lang('disable')</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="Language" aria-label="Default select example">
                            @foreach (config('app.locales') as $key => $lang)
                                <option value="{{ $key }}">{{ $lang }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" class="btn btn-primary" value="save" />
                </form>
            </div>
        </div>
    </div>
</div>

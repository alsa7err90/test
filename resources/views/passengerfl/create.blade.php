<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPassengerSessionModal">
    create Passenger  favorite location
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
                <form action="{{ route('passengerfl.store') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <select class="form-select" name="Pass_ID" aria-label="Default select example">
                            @foreach ($passengers as $pass)
                                <option value="{{ $pass->id }}">{{ $pass->Email }}</option>
                            @endforeach
                        </select>
                    </div>

                    <x-inputs.text name="PFav_ID">
                        <x-slot name="label">@lang('PFav_ID')</x-slot>
                    </x-inputs.text>
                    <div class="row ">
                        <div class="col">
                            <x-inputs.text name="PFav_Longitude">
                                <x-slot name="label">@lang('PFav_Longitude')</x-slot>
                            </x-inputs.text>
                        </div>
                        <div class="col">
                            <x-inputs.text name="PFav_Latitude">
                                <x-slot name="label">@lang('PFav_Latitude')</x-slot>
                            </x-inputs.text>
                        </div>
                    </div>

                    <x-inputs.text name="PFav_Name">
                        <x-slot name="label">@lang('PFav_Name')</x-slot>
                    </x-inputs.text>

                    <input type="submit" class="btn btn-primary" value="save" />
                </form>
            </div>
        </div>
    </div>
</div>

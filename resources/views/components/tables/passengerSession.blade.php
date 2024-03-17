<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">@lang('Session ID')</th>
                <th scope="col">@lang('Passenger ID')</th>
                <th scope="col">@lang('Token')</th>
                <th scope="col">@lang('Create Date')</th>
                <th scope="col">@lang('Last Update')</th>
                <th scope="col">@lang('Longitude')</th>
                <th scope="col">@lang('Latitude')</th>
                <th scope="col">@lang('Instance ID')</th>
                <th scope="col">@lang('Actions')</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $pass)
                <tr>
                    <th scope="row">{{ $pass->PSes_ID }}</th>
                    <td>{{ $pass->Pass_ID }}</td>
                    <td>{{ $pass->PSes_Token }}</td>
                    <td>{{ $pass->PSes_CreateDate }}</td>
                    <td>{{ $pass->PSes_LastUpdate }}</td>
                    <td>{{ $pass->PSes_Longitude }}</td>
                    <td>{{ $pass->PSes_Latitude }}</td>
                    <td>{{ $pass->Pses_InstanceID }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <x-links.edit
                                href="{{ route('passengersessions.edit', [$pass->PSes_ID, $pass->Pass_ID]) }}" />
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="text-center">@lang('empty')</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

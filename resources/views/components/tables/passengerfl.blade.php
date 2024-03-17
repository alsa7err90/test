<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">@lang('Passenger ID')</th>
                <th scope="col">@lang('Favorite ID')</th>
                <th scope="col">@lang('Longitude')</th>
                <th scope="col">@lang('Latitude')</th>
                <th scope="col">@lang('Favorite Name')</th>
                <th scope="col">@lang('Actions')</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $pass)
                <tr>
                    <th scope="row">{{ $pass->Pass_ID }}</th>
                    <td>{{ $pass->PFav_ID }}</td>
                    <td>{{ $pass->PFav_Longitude }}</td>
                    <td>{{ $pass->PFav_Latitude }}</td>
                    <td>{{ $pass->PFav_Name }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <x-links.edit href="{{ route('passengerfl.edit', [$pass->PFav_ID, $pass->Pass_ID]) }}" />
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">@lang('empty')</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

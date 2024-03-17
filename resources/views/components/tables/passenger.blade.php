<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">@lang('First Name')</th>
                <th scope="col">@lang('Last Name')</th>
                <th scope="col">@lang('Phone Number')</th>
                <th scope="col">@lang('Email')</th>
                <th scope="col">@lang('Birth Date')</th>
                <th scope="col">@lang('Actions')</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $pass)
                <tr>
                    <th scope="row">{{ $pass->id }}</th>
                    <td>{{ $pass->FirstName }}</td>
                    <td>{{ $pass->SecondName }}</td>
                    <td>{{ $pass->PhoneNumber }}</td>
                    <td>{{ $pass->Email }}</td>
                    <td>{{ $pass->BirthDate }}</td>
                    <td>
                        <div class="d-flex gap-2">
                            <x-links.edit href="{{ route('passengers.edit', $pass->id) }}" />
                            <x-links.show href="{{ route('passengers.show', $pass->id) }}" />
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">@lang('empty')</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@extends('layouts.app')

@section('content')
    <style>
        .action-btn {
            width: 29px;
            height: 28px;
            border-radius: 9.3552px;
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }
    </style>
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

                        <form action="{{ route('send_inv') }}" class="form-inline" method="post">
                            @csrf
                            <div class="form-group row p-3">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="to" placeholder="Email">
                                </div>
                                <div class="col-sm-3">
                                    <input type="submit" class="btn btn-info" value="send invitation">
                                </div>
                            </div>
                        </form>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Mobile No.</th>
                                    <th scope="col">status.</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($travelers as $traveler)
                                    <tr>
                                        <th scope="row">{{ $traveler->id }}</th>
                                        <td>{{ $traveler->email }}</td>
                                        <td>{{ $traveler->first_name }}</td>
                                        <td>{{ $traveler->last_name }}</td>
                                        <td>{{ $traveler->mobile_no }}</td>
                                        <td>{{ $traveler->status }}</td>
                                        <td>
                                            <span>
                                                <div class="action-btn bg-primary ms-2">
                                                    <a href="{{ route('traveler.show', $traveler->id) }}"
                                                        class="mx-3 btn btn-sm align-items-center" data-bs-toggle="tooltip"
                                                        title="View">
                                                        <i class="fa-regular fa-eye  text-white"></i>
                                                    </a>
                                                </div>

                                                <div class="action-btn bg-danger ms-2">
                                                    <form method="POST"
                                                        action="{{ route('traveler.destroy', $traveler->id) }}"
                                                        style="'style' => 'display:inline'">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}

                                                        <div class="form-group">
                                                            <button class="mx-3 btn btn-sm align-items-center ">
                                                                <i class="fa-sharp fa-solid fa-trash text-white"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>
                                            is empty
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">{{ config('app.name', 'test') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">@lang('Home')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('passengers.index') }}">@lang('passenger')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('passengerfl.index') }}">@lang('passengerfavoritelocations')</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('passengersessions.index') }}">@lang('passengersessions')</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

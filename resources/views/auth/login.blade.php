@extends('layouts.backend.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <h5 class="text-dark my-3">Sign In</h5>
    <!-- Email -->
    <div class="form-group mb-2">
        <label for="email" class="text-muted">Email Address</label>
        <input id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} badge-pill bg-light" type="email" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <!-- Password -->
    <div class="form-group mb-2">
        <label for="Password" class="text-muted">Password</label>
        <input id="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} badge-pill bg-light" name="password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <!-- Remember me checkbox -->
    <div class="custom-control custom-checkbox">
        <input class="custom-control-input" type="checkbox" name="remember" value="true" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember" class="custom-control-label">Remember me</label>
    </div>

    <button type="submit" class="btn btn-primary btn-outline-primary badge-pill btn-block w-75 m-auto">Sign in</button>
</form>
@endsection

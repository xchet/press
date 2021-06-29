@extends('auth.layouts.app')

@section('content')

<div class="site-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title mb-5">
                    <h2>Login</h2>
                </div>
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="username">Username / Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <small style="color: red;">{{ $message }}</small>
                                </span>
                            @enderror
                            
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <small style="color: red;">{{ $message }}</small>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="submit" value="Login" class="btn btn-primary">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
                {{-- 
                <div class="row">
                    <div class="col-md-6>
                        image here
                    </div>
                </div>
                --}}
            </div>
        </div>
    </div>
</div>
@endsection

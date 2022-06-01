@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <div class="homepage-collection">
            <div class="grid__item large--one-third push--large--one-third text-center">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="text-center h1"><b>Create Account</b></div>
                    <div class="regform-element">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
                    </div>

                    <div class="regform-element">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    </div>

                    <div class="regform-element">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                    <div class="regform-element">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Password again">

                    </div>
                    <div>
                        <button type="submit" class="btn btn--full">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection


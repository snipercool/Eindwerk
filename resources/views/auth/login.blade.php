@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card col-md-8 row bg-info" style="flex-direction: row;">
            <div class="col-md-5 ">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <span>
                                    <i class="fa fa-user icon text-primary"></i>
                                    <input id="email" type="email" class="form-control px-3  @error('email') is-invalid @enderror" name="email" placeholder=" {{ __('Gebruikersnaam') }}" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </span>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <span>
                                    <i class="fa fa-lock icon text-primary"></i>
                                    <input id="password" type="password" class="form-control px-3 @error('password') is-invalid @enderror" placeholder=" {{ __('Wachtwoord') }}" name="password" required autocomplete="current-password">
                                </span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Gebruikersnaam onthouden') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary col-md-12 mb-2">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <p>
                                <span>
                                    <p class="text-white col-md-12 my-0" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-info-circle mr-1"></i> Hulp nodig?</p>
                                </span>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body bg-info border-0 py-1">
                                   <a class="text-white" href="https://account.kuleuven.be/requestActivationCode.html?language=nl">{{ __('Wachtwoord vergeten') }}</a>
                                   <a class="text-white" href="https://account.kuleuven.be/requestForgottenUserId.html?language=nl">{{ __('Gebruikersnaam vergeten?') }}</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2">
            <div class="firstline"></div>
            <div class="word">of</div>
            <div class="secondline"></div>
            </div>
            <div class="col-md-5">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <a href="" class="btn btn-light px-5 py-3">KU Leuven Authenticator</a>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Mijn toestel onthouden') }}
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <button type="submit" class="btn btn-primary col-md-12 mt-2 mb-0">
                                    {{ __('Login') }}
                                </button>
                            </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <a class="text-white" href="https://admin.kuleuven.be/icts/services/aai/mfa/faq"><i class="fa fa-info-circle mr-1"></i>meer informatie</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
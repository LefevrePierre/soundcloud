@extends('layouts.app')
@section('content')
    <div class="registration__background">
<div class="registration__container">

    <div class="registration__test">
          <div class="registration__back"><a href="/login">Rejoignez Nom aujourd'hui</a></div>
                    <form class="registration__form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <input id="name" type="text" class="registration__form__control" name="name" placeholder="Votre nom" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="registration__form__control" name="email" placeholder="Votre e-mail" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                 <input id="password" type="password" class="registration__form__control" name="password" placeholder="Votre mot de passe" required>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>



                                <input id="password-confirm" type="password" class="registration__form__control" name="password_confirmation" placeholder="Confirmez votre mot de passe" required>
Vous avez déjà un compte ?<a href="/login"> Se connecter</a>


                            <div class="registration__btn__create">
                                <button type="submit" class="registration__btn">
                                    Créer un compte
                                </button>
                            </div>
                    </form>
                            </div>
    </div>
    </div>


@endsection

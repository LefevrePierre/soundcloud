@extends('layouts.app')
@section('content')
    <div class="registration__background">
<div class="registration__container">


    <div class="registration__back"><a href="/"> &#60; Retour à l'acceuil</a></div>


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


                                <input id="email" type="email" class="registration__form__control" name="email" placeholder="votre e-mail" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                                <input id="password" type="password" class="registration__form__control" name="password" placeholder="votre mot de passe" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>



                                <input id="password-confirm" type="password" class="registration__form__control" name="password_confirmation" placeholder="confirmez votre mot de passe" required>
                        <input type="file" name="imgProfil"/><br>


<div class="registration__btn__create">
                                <button type="submit" class="registration__btn">
                                    Créer un compte
                                </button>
</div>
                    </form>
                            </div>
    </div>


@endsection

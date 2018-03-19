@extends('layouts.app')

@section('content')
    <div class="registration__background">
<div class="registration__container">

    <div class="registration__back"> <a href="/">&#60; Retour à l'accueil</a></div>


                    <form autocomplete=off class="registration__form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label>-->


                                <input id="email" type="email" class="registration__form__control" name="email" placeholder="Votre e-email"value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <!-- <label for="password" class="col-md-4 control-label">Password</label>-->


                                <input id="password" type="password" class="registration__form__control" name="password" placeholder="Votre mot de passe" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="login__remember">

                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> <span class="login__remember__me">Se souvenir de moi</span>
                                    </label>








                                <a class="login__forgot" href="{{ route('password.request') }}">
                                    Mot de passe oublié?
                                </a>

</div>
                        <div class="login__btn__right">
                            <button type="submit" data-pjax class="login__btn">
                                Se connecter
                            </button>
                        </div>


                    </form>
                        </div>


                </div>


@endsection

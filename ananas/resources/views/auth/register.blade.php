@extends('layouts.app')
@section('content')
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Регистрация</h1>
            <p class="lead blog-description">Присоединяйтесь к большому сообществу</p>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-8 blog-main">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="username">Имя пользователя</label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Имя пользователя">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input id="password" type="password" class="form-control" name="password" placeholder="Пароль">
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Повторите пароль</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль">
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </form>
            </div>
            <!-- /.blog-main -->
            @include('layouts.statistics')
            <!-- /.row -->
        </div>
@endsection

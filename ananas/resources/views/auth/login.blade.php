@extends('layouts.app')
@section('content')
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Авторизация</h1>
            <p class="lead blog-description">С возвращением в большое сообщество имени великой стены</p>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            @if ($errors->has('email') || $errors->has('password'))
                <span class="alert alert-danger">
                        <strong>{{ 'Вход в систему с указанными данными невозможен' }}</strong>
                    </span>
            @endif
            <div class="col-sm-8 blog-main">
                <form role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input" name="remember">
                            Запомнить меня
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
            <!-- /.blog-main -->
            @include('layouts.statistics')
            <!-- /.row -->
        </div>
        <!-- /.container -->
@endsection

@extends('layouts.app')
@section('content')
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title">Стена</h1>
            <p class="lead blog-description">Место, где каждый может высказаться</p>
        </div>
    </div>
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-8 blog-main">
                @if(Auth::check())
                    <form class="mb-5" method="POST" action="{{route('post.add')}}">
                        {{ csrf_field() }}
                        <h3>Написать на стене</h3>
                        <div class="form-group">
                            <label for="title">Заголовок сообщение</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label for="text">Текст сообщения</label>
                            <textarea name="content" class="form-control" rows="5"></textarea>
                        </div>
                        @foreach($errors->all() as $msg)
                            <div class="alert alert-danger">{!! $msg !!}</div>
                        @endforeach
                        <button type="submit" class="btn btn-primary">Написать</button>
                    </form>
                @endif
                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{ $post->name }}</h2>
                        <p class="blog-post-meta">Опубликован {{ $post->getDate() }} Автор: {{ $post->user->name }}</p>

                        <p>{{ $post->content }}</p>
                    </div>
                @endforeach
                <!-- /.blog-post -->
            </div>
            <!-- /.blog-main -->
        @include('layouts.statistics')
            <!-- /.row -->
        </div>
        <!-- /.container -->
@endsection

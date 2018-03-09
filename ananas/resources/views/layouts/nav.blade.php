
    <div class="blog-masthead">
        <div class="container">
            <nav class="nav">
                <a class="nav-link @if(Request::is('/')) {{ 'active' }} @endif" href="/">Стена</a>
                @if(Auth::check())
                    <span class="nav-link ml-auto">{{ '@' . Auth::user()->name }}</span>
                    <a class="nav-link" href="{{ url('/logout') }}">Выйти</a>
                @else
                    <a class="nav-link @if(Request::is('register')) {{ 'active' }} @endif" href="{{ url('/register') }}">Зарегистрироваться</a>
                    <a class="nav-link @if(Request::is('login')) {{ 'active' }} @endif" href="{{ url('/login') }}">Войти</a>
                @endif
            </nav>
        </div>
    </div>

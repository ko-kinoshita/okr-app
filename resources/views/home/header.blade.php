@section('header')

@if (Auth::check())
<header>
    @unless(\Request::is('/'))
    <div class="dropdown-menu h-index">
        <a href=" {{ url('/') }} ">登録したOKR一覧を見る</a>
    </div>
    @endunless
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        @unless(\Request::is('Home/add'))
        <a href=" {{ url('/Home/add') }} ">新しくOKRを追加する</a>
        @endunless

        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</header>

@else
<header>
    <div class="dropdown-menu">
        <a href="/login" >ログイン</a>
        <a href="/register">登録</a>
    </div>
</header>
@endif
@endsection

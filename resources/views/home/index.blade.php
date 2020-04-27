@extends('home.app')

@section('content')

@if (Auth::check())

<header>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a href=" {{ url('/Home/add') }} ">新しくOKRを追加する</a>

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

<section class="index_okr">
    <h2 class="index_okr_title">登録してるokr一覧</h2>
@foreach($okrs as $okr)
    @if($okr->master_flag == 1)
        <p><a href=" {{ action('HomeController@show' , $okr->id )}} ">{{ $okr->objective }}</a></p>
    @endif
@endforeach
    <h3><a href=" {{ url('/Home/add') }} ">新しくOKRを追加する</a></h2>

</section>


@endsection

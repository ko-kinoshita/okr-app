@extends('home.app')

@section('content')

@if (Auth::check())

<header>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <a href=" {{ url('/Home/add') }} ">OKRを追加する</a>

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

<div class="okr">
    <section class="section_wrap">
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">

            <ul>
                @foreach($okrs as $okr)
                <li class="company key_result top_key_result"  style="margin:20px;background:silver;color:black;">
                    <p class="content">ID：{{ $okr->id }}</p>
                    <p class="content">objective：{{ $okr->objective }}</p>
                    <p class="content">key_result：{{ $okr->key_result }}</p>
                    <p class="content">parent_id：{{ $okr->parent_id }}</p>
                    <p class="content">masterflag：{{ $okr->master_flag }}</p>
                    <a href=" {{ action('HomeController@add_child' , $okr->id )}} ">子要素の追加</a>
                </li>

                @endforeach
            </ul>
        </div>
    </section>


</div>

<!-- 
<div class="okr">
    <section class="section_wrap">
        <h1 class="title">会社</h1>
        
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <div class="company objective">
                @foreach($okrs as $okr)
                    <p class="content">{{ $okr->objective }}</p>
                @endforeach
            </div>

            <ul class="flex">
                @foreach($okrs as $okr)
                <li class="company key_result top_key_result">
                    <p class="content">{{ $okr->key_result }}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">部門</h1>
        <div class="other_than_border_right"></div>
        <ul class="flex">
            @foreach($okrs as $okr)
            <li class="wrap_objective">
                <div class="group objective">
                    <p class="group content">{{ $okr->objective }}</p>
                </div>
            @endforeach
                <ul class="flex ">
                @foreach($okrs as $okr)
                    <li class="group key_result">
                        <p class="content">{{ $okr->key_result }}</p>
                    </li>
                @endforeach
                </ul>
            </li>
        </ul>
    </section>

    <section class="section_wrap">
        <h1 class="title">個人</h1>
        <div class="other_than_border_right"></div>
        <ul class="flex">
        @foreach($okrs as $okr)
            <li class="wrap_objective">
                <div class="individual objective">
                    <p class="content">{{ $okr->objective  }}</p>
                </div>
                <ul class="flex ">
                @foreach($okrs as $okr)
                    <li class="individual key_result">
                        <p class="content">{{ $okr->key_result }}</p>
                    </li>
                @endforeach
                </ul>
            </li>
        @endforeach
        </ul>
    </section>
</div> -->


@endsection

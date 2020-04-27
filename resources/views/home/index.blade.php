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


<div class="okr">
    <section class="section_wrap">
        <h1 class="title">会社</h1>
        
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <ul class="company objective">
            @foreach($okrs as $okr)
            @if($okr->master_flag == 1)
            {{ $parent_id = $okr->id }}
                <li>
                    <p class="content">{{ $okr->objective }}</p>
                </li>

                <li class="company key_result top_key_result">
                    <p class="content">{{ $okr->key_result }}</p>
                </li>
                <a href=" {{ action('HomeController@add_child' , $okr->id )}} ">子要素の追加</a>

            @endif
            @endforeach

            </ul>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">会社</h1>
        
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <div class="flex">
                @foreach($okrs as $okr)
                @if($okr->parent_id == $parent_id)
                {{ $second_parent_id = $okr->id }}
                <ul class="company objective">
                    <li>
                        <p class="content">{{ $okr->objective }}</p>
                    </li>

                    <li class="company key_result top_key_result">
                        <p class="content">{{ $okr->key_result }}</p>
                    </li>
                    <a href=" {{ action('HomeController@add_child' , $okr->id )}} ">子要素の追加</a>
                </ul>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">個人</h1>
        <div class="other_than_border_right"></div>
        <div class="flex">
                @foreach($okrs as $okr)
                @if($second_parent_id == $okr->parent_id)
                <ul class="company objective">
                    <li>
                        <p class="content">{{ $okr->objective }}</p>
                    </li>

                    <li class="company key_result top_key_result">
                        <p class="content">{{ $okr->key_result }}</p>
                    </li>
                </ul>
                @endif
                @endforeach
            </div>
    </section>
</div>


@endsection

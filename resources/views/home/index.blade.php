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
        <h1 class="title">会社</h1>
        
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <div class="company objective">
                @foreach($objects as $object)
                    <p class="content">{{ $object->objective }}</p>
                @endforeach
            </div>

            <ul class="flex">
                @foreach($results as $result)
                <li class="company key_result top_key_result">
                    <p class="content">{{ $result->key_result }}</p>
                </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">部門</h1>
        <div class="other_than_border_right"></div>
        <ul class="flex">
            @foreach($objects as $object)
            <li class="wrap_objective">
                <div class="group objective">
                    <p class="group content">{{ $object->group_objective }}</p>
                </div>
            @endforeach
                <ul class="flex ">
                @foreach($results as $result)
                    <li class="group key_result">
                        <p class="content">{{ $result->group_key_result }}</p>
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
        @foreach($objects as $object)
            <li class="wrap_objective">
                <div class="individual objective">
                    <p class="content">{{ $object->individual_objective  }}</p>
                </div>
                <ul class="flex ">
                @foreach($results as $result)
                    <li class="individual key_result">
                        <p class="content">{{ $result->individual_key_result }}</p>
                    </li>
                @endforeach
                </ul>
            </li>
        @endforeach
        </ul>
    </section>
</div>
@endsection

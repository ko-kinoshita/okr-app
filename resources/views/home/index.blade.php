@extends('home.app')

@section('content')

@if (Auth::check())

<header>
    <!-- <p>User {{ $user->name . '(' . $user->email .')'}}</p> -->
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
                <h2 class="content">objective</h2>
                <p class="content">(目標)</p>
            </div>

            <ul class="flex">
                <li class="company key_result top_key_result">
                    <h2 class="content">Key Result</h2>
                    <p class="content">(主な結果)</p>
                </li>
                <li class="company key_result top_key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </li>
                <li class="company key_result top_key_result">
                    <h2 class="content">Key Resul</h2>
                    <p class="content">(主な結果)</p>
                </li>
            </ul>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">部門</h1>
        <div class="other_than_border_right"></div>
        <ul class="flex">
            <li class="wrap_objective">
                <div class="group objective">
                    <h2 class="group content">objective</h2>
                    <p class="group content">(目標)</p>
                </div>

                <ul class="flex ">
                    <li class="group key_result">
                        <h2 class="content">Key Result</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                    <li class="group key_result">
                        <h2 class="content">Key Resul</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                </ul>
            </li>

            <li class="wrap_objective">
                <div class="group objective">
                    <h2 class="group content">objective</h2>
                    <p class="group content">(目標)</p>
                </div>

                <ul class="flex ">
                    <li class="group key_result">
                        <h2 class="content">Key Result</h2>
                        <p class="content">(主な結果)</p>
                    </li>

                </ul>
            </li>
            <li class="wrap_objective">
                <div class="group objective">
                    <h2 class="group content">objective</h2>
                    <p class="group content">(目標)</p>
                </div>

                <ul class="flex ">
                    <li class="group key_result">
                        <h2 class="content">Key Result</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                    <li class="group key_result">
                        <h2 class="content">Key Resul</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                    <li class="group key_result">
                        <h2 class="content">Key Resul</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                </ul>
            </li>
        </ul>
    </section>

    <section class="section_wrap">
        <h1 class="title">個人</h1>
        <div class="other_than_border_right"></div>
        <ul class="flex">
            <li class="wrap_objective">
                <div class="individual objective">
                    <h2 class="content">objective</h2>
                    <p class="content">(目標)</p>
                </div>

                <ul class="flex ">
                    <li class="individual key_result">
                        <h2 class="content">Key Result</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                    <li class="individual key_result">
                        <h2 class="content">Key Resul</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                    <li class="individual key_result">
                        <h2 class="content">Key Resul</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                </ul>
            </li>
        
            <li class="wrap_objective">
                <div class="individual objective">
                    <h2 class="content">objective</h2>
                    <p class="content">(目標)</p>
                </div>

                <ul class="flex ">
                    <li class="individual key_result">
                        <h2 class="content">Key Result</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                </ul>
            </li>

            <li class="wrap_objective">
                <div class="individual objective">
                    <h2 class="content">objective</h2>
                    <p class="content">(目標)</p>
                </div>

                <ul class="flex ">
                    <li class="individual key_result">
                        <h2 class="content">Key Result</h2>
                        <p class="content">(主な結果)</p>
                    </li>
                    <li class="individual key_result">
                        <h2 class="content">Key Resul</h2>
                        <p class="content">(主な結果)</p>
                    </li>

                </ul>
            </li>
        </ul>
    </section>
</div>
@endsection

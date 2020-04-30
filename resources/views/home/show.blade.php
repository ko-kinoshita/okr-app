@extends('home.app')

@include('home.header')

@section('content')
<div class="okr">
    <section class="section_wrap">
        <h1 class="title">1</h1>
        
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <ul class="okr_set">
            @foreach($okrs as $okr)
            @if($okr->id == $id)
                <li>
                    <p class="content">{{ $okr->objective }}</p>
                </li>

                <li class="key_result top_key_result">
                    <p class="content">{{ $okr->key_result }}</p>
                </li>
                <div class="flex add_okr_son">
                    <a href=" {{ action('HomeController@add_child' , $okr->id )}} " class="button">OKRを追加</a>
                    <form method="post" action="/Home/{{$okr->id}}">
                        {{ csrf_field() }}
                        <input type="submit" value="OKRを削除" class="button" onclick='return confirm("本当に削除しますか？");'>
                    </form>
                </div>
                @endif
            @endforeach
            </ul>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">2</h1>
        
        <div class="other_than_border_right"></div>
        <div class="top_objective company_key_result">
            <div class="flex">
                @foreach($okrs as $okr)
                @if($okr->parent_id == $id)
                <ul class="okr_set">
                    <li>
                        <p class="content">{{ $okr->objective }}</p>

                    <li class="key_result top_key_result">
                        <p class="content">{{ $okr->key_result }}</p>
                    </li>
                    <div class="flex add_okr_son">
                        <a href=" {{ action('HomeController@add_child' , $okr->id )}} " class="button">OKRを追加</a>
                        <form method="post" action="/Home/{{$okr->id }}">
                            {{ csrf_field() }}
                            <input type="submit" value="OKRを削除" class="button" onclick='return confirm("本当に削除しますか？");'>
                        </form>
                    </div>
                </ul>
                {{$parent = $okr->id}}
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="section_wrap">
        <h1 class="title">3</h1>
        <div class="other_than_border_right"></div>
        <div class="flex">
            @foreach($okrs as $okr)
                @empty($parent)
                @else
                    @if($okr->parent_id == $parent)
                    <ul class="okr_set">
                        <li>
                            <p class="content">{{ $okr->objective }}</p>
                        </li>

                        <li class="key_result top_key_result">
                            <p class="content">{{ $okr->key_result }}</p>
                        </li>
                        <form method="post" action="/Home/{{$okr->id}}">
                            {{ csrf_field() }}
                            <input type="submit" value="OKRを削除" class="button" onclick='return confirm("本当に削除しますか？");'>
                        </form>
                    </ul>
                    @endif
                @endempty
            @endforeach
        </div>
    </section>
</div>


@endsection

@extends('home.app')

@include('home.header')

@section('content')
<section class="index_okr">
    <h2>登録したOKR一覧</h2>
    @foreach($okrs as $okr)
        <div class="index_list">
        @if($okr->master_flag == 1)
            <p><a href=" {{ action('HomeController@show' , $okr->id )}} ">{{ $okr->objective }}</a></p>
        @endif
        </div>
    @endforeach
    <a href=" {{ url('/Home/add') }} " class="button">新しくOKRを追加する</a>
</section>

@endsection

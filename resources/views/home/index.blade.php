@extends('home.app')

@include('home.header')

@section('content')
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

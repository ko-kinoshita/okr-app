@extends('home.app')

@include('home.header')

@section('content')
<section class="index_okr">
    <h2>登録したOKR一覧</h2>
    @foreach($okrs as $okr)
    @if($okr->master_flag == 1)
        <div class="index_list">
            <p><a href=" {{ action('HomeController@show' , $okr->id )}} ">{{ $okr->objective }}</a></p>
        </div>
    @endif
    @endforeach
    <a href=" {{ url('/Home/add') }} " class="button add_okr_btn">新しくOKRを追加する</a>
</section>

@endsection

<!-- 大もとのOKR作成画面 -->
@extends('home.app')

@include('home.header')

@section('content')
<div class="add_wrap">
<form action="/Home/add" method="post" class="add_infomation">
    {{ csrf_field() }}
    <p>OBJECTIVE</p><input type="text" name="objective" style="width:500px; height:60px; font-size: 100%;">
    <p>KEY_RESULT</p><input type="text" name="key_result" style="width:500px; height:60px; font-size: 100%;">
    <input type="submit" value="OKRを設定" class="button add_okr_btn">
</form>

<div class="okr_document">
<article >
    <p><span>OBJECTIVE</span>（目標）は、シンプルで覚えやすい定性的なものを設定します</p>
    <p><span>KEY_RESULT</span>（成果指標）は、数値化して測定し、定量的なものを設定します。</p>
    <p>OKR では、目標の <span>60～70% の達成率</span>かつ、</p>
    <p>自分の自身度が<span>10分の5の難易度</span>（自信度1は絶対できない、10は簡単にできる、5はベストを尽くせばできる）がちょうど良い設定です</p>
</article>

<article class="add_example">
    <p>例</p>
    <h1>OBJECTIVE</h1>
    <p>東京で最も人気のラーメン屋を作る</p>
    <h1>KEY_RESULT</h1>
    <p>月の売り上げ1500万達成</p>
</article>
</div>
</div>

@endsection

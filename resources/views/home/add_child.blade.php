add_child
子要素の追加
@extends('home.app')

@section('content')
<div class="add_wrap">

<form action="/Home/{id}/add_child" method="post" class="add_infomation">
    {{ csrf_field() }}
    <p>objective</p><input type="text" name="objective" maxlength="30" style="width:300px;">
    <p>key_result</p><input type="text" name="key_result" maxlength="30" style="width:300px;">
    <input type="text" style="display:none;" name="parent_id" value= {{$id}}>
    <input  type="text" style="display:none;" name="master_flag" value="0">

    <p><input type="submit" value="追加する"></p>
</form>

<section class="okr_document">
    <p>OBJECTIVE（目標）は、場合によっては若干気後れするくらいの高いレベルに設定します。</p>
    <p>KEY_RESULT（成果指標）は、数値化して測定し、簡単に評価できるように設定します。</p>
    <p>OKR では、目標の 60～70% の達成率が理想的です。逆に、達成率が常に 100% の場合、その OKR の設定レベルが低いと言えるので、もっと野心的な目標を立てる必要があります。</p>
</section>
</div>

@endsection

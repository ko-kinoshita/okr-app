add

<form action="/Home/add" method="post" class="add_infomation">
    {{ csrf_field() }}
    <p>objective</p><input type="text" name="objective">
    <p>key_result</p><input type="text" name="key_result">
    {{--<p>master_id</p><input type="checkbox" name="master_id">--}}

    <p><input type="submit" value="送信"></p>
</form>
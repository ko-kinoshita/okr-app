add
OKRの追加

<form action="/Home/add" method="post" class="add_infomation">
    {{ csrf_field() }}
    <p>objective</p><input type="text" name="objective">
    <p>key_result</p><input type="text" name="key_result">
    <input type="text" style="display:none;" name="parent_id" value={{$id}}>
    <input  type="text" style="display:none;" name="master_flag" value="1">

    <p><input type="submit" value="送信"></p>
</form>
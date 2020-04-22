add

<form action="/Home/add" method="post" class="add_infomation">
    {{ csrf_field() }}
    <p>会社：objective</p><input type="text" name="objective">
    <p>会社：key_result</p><input type="text" name="key_result">
    <p>部門：objective</p><input type="text" name="group_objective">
    <p>部門：key_result</p><input type="text" name="group_key_result">
    <p>個人：objective</p><input type="text" name="individual_objective">
    <p>個人：key_result</p><input type="text" name="individual_key_result">
    <input type="submit" value="送信">
</form>

Route::post('Home/add','HomeController@create');
Route::post('Home/add','HomeController@store');
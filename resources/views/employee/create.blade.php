Silahkan isi 
<form method="POST" action="/employee" >
{{ csrf_field()}}
Id      <input type="text" name="txt_id" id="txt_id" />
<br>
Name    <input type="text" name="txt_name" id="txt_id" />
<br>
Address <input type="text" name="txt_address" id="txt_id" />
<br>
Phone Number <input type="text" name="txt_phone" id="txt_phone" />
<br>
<input type="submit" 
        name="sbm_save" 
        id="sbm_save"
        value="save" />

</form>
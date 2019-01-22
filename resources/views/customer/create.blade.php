ini create dari view
<form method="POST" action="/customer" >
{{ csrf_field()}}
<input type="text" name="txt_id" id="txt_id" />
<br>
<input type="text" name="txt_name" id="txt_id" />
<br>
<input type="text" name="txt_address" id="txt_id" />
<br>
<input type="submit" 
        name="sbm_save" 
        id="sbm_save"
        value="save" />

</form>
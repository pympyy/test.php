<form style="width: 400px;margin:0 auto;" name="formAdd" method="post" action="/table/add/?table_name=<?=$_GET["table_name"]?>&Kod=<?=$_GET["Kod"]?>">
<?php
  	echo '
  	<div class="form-group">
  		<label for="Name">Name</label>
    	<input type="text" class="form-control" name="Name" id="Name">
    </div>
    <div class="form-group">
    	<label for="Razdel">Razdel</label>
    	<input type="text" class="form-control" name="Razdel" id="Razdel">
    </div>
    <div class="form-group">
    	<label for="global_id">global_id</label>
    	<input type="text" class="form-control" name="global_id" id="global_id">
    </div>
    <div class="form-group">
    	<label for="Idx">Idx</label>
    	<input type="text" class="form-control" name="Idx" id="Idx">
    </div>
    <div class="form-group">
    	<label for="Kod">Kod</label>
    	<input type="text" class="form-control" name="Kod" id="Kod">
    </div>
    <div class="form-group">
    	<label for="Nomdescr">Nomdescr</label>
    	<input type="text" class="form-control" name="Nomdescr" id="Nomdescr">
    </div>
    <input type="text" class="form-control" name="table_name" hidden id="table_name" value="'.$_GET['table_name'].'">
    ';
?>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
<form style="width: 400px;margin:0 auto;" name="formEdit" method="post" action="/table/edition/">
<?php

foreach($data as $row)
  {
  	echo '
  	<input type="text" class="form-control" hidden name="id" id="id" value="'.$row['id'].'">
  	<div class="form-group">
  		<label for="Name">Name</label>
    	<input type="text" class="form-control" name="Name" id="Name" value="'.$row['Name'].'">
    </div>
    <div class="form-group">
    	<label for="Razdel">Razdel</label>
    	<input type="text" class="form-control" name="Razdel" id="Razdel" value="'.$row['Razdel'].'">
    </div>
    <div class="form-group">
    	<label for="global_id">global_id</label>
    	<input type="text" class="form-control" name="global_id" id="global_id" value="'.$row['global_id'].'">
    </div>
    <div class="form-group">
    	<label for="Idx">Idx</label>
    	<input type="text" class="form-control" name="Idx" id="Idx" value="'.$row['Idx'].'">
    </div>
    <div class="form-group">
    	<label for="Kod">Kod</label>
    	<input type="text" class="form-control" name="Kod" id="Kod" value="'.$row['Kod'].'">
    </div>
    <div class="form-group">
    	<label for="Nomdescr">Nomdescr</label>
    	<input type="text" class="form-control" name="Nomdescr" id="Nomdescr" value="'.$row['Nomdescr'].'">
    </div>
    <input type="text" class="form-control" name="table_name" hidden id="table_name" value="'.$row['table_name'].'">
    ';
  }
?>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
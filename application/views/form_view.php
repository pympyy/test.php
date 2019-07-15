<form style="width: 400px;margin:0 auto;" name="createXmlTable" method="post" action="/form/createtable/" enctype="multipart/form-data">
  <div class="form-group">
    <label for="table_name">Index table name</label>
    <input type="text" class="form-control" name="table_name" id="table_name" placeholder="Enter table name">
    <small id="nameHelp" class="form-text text-muted">Enter name for your XML table in MySQL</small>
  </div>
  <div class="form-group">
    <label for="fileToUpload">Choice u XML file</label>
    <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php 
  echo '<ul style="width: 400px;margin: 30px auto;">';
  foreach ($tableNames as $table_name) {
    echo '<li><a href="/table/index/?table_name='.$table_name['table_name'].'">'.$table_name['table_name'].'</a></li>';
  }
  echo '</ul>';
?>
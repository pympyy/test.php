<!DOCTYPE html>
<html>
<head>
	<title>PHP TestWork</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<form style="width: 400px;margin:0 auto;" name="createXmlTable" method="post" action="createXmlTable.php" enctype="multipart/form-data">
	  <div class="form-group">
	    <label for="table_name">Table name</label>
	    <input type="text" class="form-control" name="table_name" id="table_name" placeholder="Enter table name">
	    <small id="nameHelp" class="form-text text-muted">Enter name for your XML table in MySQL</small>
	  </div>
	  <div class="form-group">
	    <label for="fileToUpload">Choice u XML file</label>
	    <input type="file" class="form-control-file" name="fileToUpload" id="fileToUpload">
	  </div>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>
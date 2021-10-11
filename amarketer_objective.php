<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_files.php?id='+id;
     }
}
</script>
<?php
Include("admin_welcome.php");
include("fileLogicmarketer.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style2.css">
    <title>Files Upload and Download</title>
  </head>
  <style>
    table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th{
	background-color:#04AA6D;
	padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
	color:white;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
  padding:10px;
  font-size: 12px;
  border: 1px solid #ddd;
  
}
tr:nth-child(even){background-color: #f2f2f2;}
tr:hover {background-color: #ddd;}
input[type=text,password], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
    </style>
  <body>
      
    <div class="container">
      <div class="row">
        <form action="amarketer_objective.php" method="post" enctype="multipart/form-data" autocomplete="off">
          <h3>Upload File</h3>
          <h4>Dont Reload this page</h4>
          <label>Objective</label><br>
          
          <input type="file" name="myfile" required> <br>
                  
          <button type="submit" name="save">upload</button><br>
          <a href="admin_home.php">Return to main menu</a>
</form>

		  <table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    
    <th>Action</th>
	<th>Delete</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>

      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
	 <?php echo"<td class='text-center'><a href='#' onclick='deletes($file[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span>delete</a></td>"?>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
        //</form>
      </div>
    </div>
    <script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<script>
$(document).ready(function() { 
 $('form').ajaxForm(function() { 
 }); 
});
</script>
  </body>
</html>

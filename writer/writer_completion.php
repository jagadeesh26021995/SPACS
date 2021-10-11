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
Include("writer_welcome.php");
Include("fileLogicwritercompletion.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style2.css">
    <title>Files Upload and Download</title>
  </head>
  <style>
    
        table, th, td 
        {
  border: 1px solid black;
  text-align:center;
  margin-left:auto;
  margin-right:auto;
}
    
    </style>
  <body>
      <div class="main">
    <div class="container">
      <div class="row">
        <form action="writer_completion.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
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
        </form>
      </div>
    </div>
  </div>
  </body>
</html>

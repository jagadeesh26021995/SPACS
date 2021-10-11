<?php
Include("writer_welcome.php");
Include("../fileLogicwriter.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writer objective</title>
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
<br>
  <h style="color:red">WRITER OBJECTIVE</h>  <br><br>
<table>
<thead>
    <th>ID</th>
    <th>Filename</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?ph echo $file['downloads']; ?></td>
      
      <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>
  </div>
</body>
</html>  

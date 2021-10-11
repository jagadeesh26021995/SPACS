<?php
Include("admin_welcome.php");
Include ("programmer/filelogicprogrammer_completion.php");;?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
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
    <br><br>
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

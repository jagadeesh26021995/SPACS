<?php
Include("admin_welcome.php");
Include ("marketer/filelogicmarketer_finalstatement.php");;?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
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

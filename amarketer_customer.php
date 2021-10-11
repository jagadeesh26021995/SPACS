<?php
Include("admin_welcome.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="style2.css">
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
<label>CUSTOMER DETAILS</label>

<?php
echo"<table class='center'>";
echo"<tr class='success'>";
echo "<th> ID</th>";
echo"<th>Reference mail id</th>";
echo"<th>Customer name</th>";
echo"<th>Customer Address</th>";
echo"<th>Customer phone no</th>";
echo"<th>Status</th>";
echo"<th>delete</th>";
echo"</tr>";
$i=1;
$que=mysqli_query($con,"select * from marketer_customer");
while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
        echo"<td>".$row['email']."</td>";
        echo "<td>".$row['customer_name']."</td>";
        echo "<td>".$row['customer_address']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td class='text-center'><a href='#' onclick='deletes($row[no])'><span class='glyphicon glyphicon-remove' style=color:red;></span>delete</a></td>";
        echo "</tr>";
        $i++;
    }
    ?>
    </div>
</body>
</html>


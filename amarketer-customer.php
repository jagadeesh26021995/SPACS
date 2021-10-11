<?php
Include("admin_welcome.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="style2.css">
</head>
    <body>
<div class="main">
<label>CUSTOMER DETAILS</label>

<?php
echo"<table class='center'>";
echo"<tr class='success'>";
echo "<th> ID</th>";
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
        echo "<td>".$row['customer_name']."</td>";
        echo "<td>".$row['customer_address']."</td>";
        echo "<td>".$row['customer_phone']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td class='text-center'><a href='#' onclick='deletes($row[id])'><span class='glyphicon glyphicon-remove' style=color:red;></span>delete</a></td>";
        echo "</tr>";
        $i++;
    }
    ?>
    </div>
</body>
</html>


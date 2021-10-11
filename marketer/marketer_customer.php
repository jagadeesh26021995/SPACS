<script type="text/javascript">
function deletes(id)
{
	a=confirm('Are You Sure To Remove This Record ?')
	 if(a)
     {
        window.location.href='delete_user.php?id='+id;
     }
}
</script>	
<?php
Include("marketer_welcome.php");
extract($_POST);
$email=$_SESSION['email'];
if(isset($_POST['save']))
{
    $customer_name=$_POST['customer_name'];
    $customer_address=$_POST['customer_address'];
    $customer_phoneno=$_POST['customer_phoneno'];
    $status=$_POST['status'];
    $sql="INSERT INTO marketer_customer(no,email,customer_name,customer_address,phone,status)VALUES(NULL,'$email','$customer_name','$customer_address','$customer_phoneno','$status')";
    if (mysqli_query($con, $sql)) {
		echo "New record created successfully !";
	 } else {
         echo"enter the all details";
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
?>
<html>
    <style>
        table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 1px solid black;
}
</style>
    <body>
<div class="main">
<label>ENTER THE CUSTOMER DETAILS</label>
<hr>
<form method="POST" action="">
    <label>CUSTOMER NAME</label><br>
    <input type="text" name="customer_name" value="" required><br>
    <label>CUSTOMER ADDRESS</label><br>
    <textarea 
      	id="text" 
      	cols="20" 
      	rows="6" 
      	name="customer_address" value=""
      	placeholder="Address" required></textarea><br>
    <label>CUSTOMER PHONE NO</label><br>
    <input type="text" name="customer_phoneno" value="" required><br>
    <label>STATUS</label><br>
    <input type="text" name="status" value="" required><br><br>
    <input type="submit" name="save" value="submit">
</form>

<?php
echo"<table class='center'>";
echo"<tr class='success'>";
echo "<th>Id</th>";
echo"<th>Customer name</th>";
echo"<th>Customer Address</th>";
echo"<th>Customer phone no</th>";
echo"<th>Status</th>";
echo"<th>delete</th>";
echo"</tr>";
$i=1;
$con=mysqli_connect("localhost","root","","octagon_employement");

$que=mysqli_query($con,"SELECT * FROM marketer_customer");
while($row=mysqli_fetch_array($que))
	{
		echo "<tr>";
		echo "<td>".$i."</td>";
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

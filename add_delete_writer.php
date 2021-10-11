<?php
Include("admin_welcome.php");
if(isset($_POST['save']))
{
    $username = $_POST['username'];
	 $password = $_POST['password'];
	 $email = $_POST['email'];
	 $contactno = $_POST['contactno'];
	 $gender = $_POST['gender'];
	 $address = $_POST['address'];
     $sql="INSERT INTO writer(username,password,email,contactno,gender,address)VALUES('$username','".md5($password)."','$email','$contactno','$gender','$Address')";
     if (mysqli_query($con, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($con);
	 }
	 mysqli_close($con);
}
    ?>
    <!DOCTYPE html>
<html>
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
label
{
	color:black;
	text-align:left;
	font-weight:normal;
	font-family: "Times New Roman", Times, serif;
	font-size:0.9em;
	
}
input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
::placeholder {
  
  font-size: 0.7em;
}
</style>
  <body>
      <div class="main">
	  <?php
	  
	  echo"<table class='center'>";
	  echo"<tr class='success'>";
	  
	  echo "<th>Username</th>";
	  echo"<th>Email</th>";
	  echo"<th>Contact number</th>";
	  echo"<th>Gender</th>";
	  echo"<th>Address</th>";
	  echo"<th>delete</th>";
	  echo"</tr>";
	  $i=1;
	  $con=mysqli_connect("localhost","root","","octagon_employement");
	  
	  $que=mysqli_query($con,"SELECT * FROM writer");
	  while($row=mysqli_fetch_array($que))
		  {
			  echo "<tr>";
			  echo "<td>".$i."</td>";
			  echo "<td>".$row['username']."</td>";
			  echo "<td>".$row['contactno']."</td>";
			  echo "<td>".$row['gender']."</td>";
			  echo "<td>".$row['address']."</td>";
			  echo "<td class='text-center'><a href='#' onclick='deletes($row[username])'><span class='glyphicon glyphicon-remove' style=color:red;></span>delete</a></td>";
			  echo "</tr>";
			  $i++;
		  }
		  ?>
	  <label>Add or Delete Writer</label>
		  <hr>
	<form method="post" action="">
        
	<label>Name:&ensp;&emsp;</label>
		<input type="text" name="username" size="30"placeholder="&nbsp;Content writer Name..."><br><br>
		

		<label>Password:&nbsp;</label>
		<input type="password" name="password" size="30"placeholder="&nbsp;Content writer Password..." required><br><br>
		<label>Gender:&ensp;&emsp;</label>
		<input type="radio" name="gender" value="Male"><h style="font-size:0.8em;">&nbsp;Male</h>
  <input type="radio" name="gender" value="Female"><h style="font-size:0.8em;">&nbsp;Female</h>
  <input type="radio" name="gender" value="Others"><h style="font-size:0.8em;">&nbsp;Others</h><br><br>
		
        
		<label>Email:&emsp;&emsp;</label>
		<input type="text" name="email" size="30" placeholder="&nbsp;Content writer Email.."required><br><br>
		
		<label>Contact:&ensp;&emsp;</label>
		<input type="text" name="contactno" size="30"placeholder="&nbsp;Content writer Contact.."required><br><br>
		
		
		<label>Address:&ensp;&emsp;</label>
		<textarea 
      	id="text" 
      	cols="30" 
      	rows="6" 
      	name="address" 
      	placeholder="&nbsp;Address"required></textarea></td><br><br>
		
		
		<input type="submit" name="save" value="submit">
	</form>
</div>
  </body>
</html>


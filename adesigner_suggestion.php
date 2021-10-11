<?php
Include("admin_welcome.php");
if(isset($_POST['save']))
{
$no=$_POST['no'];
$email=$_POST['email'];
$content=$_POST['content'];
$suggestion=$_POST['suggestion'];
$rating=$_POST['rating'];
$sql="INSERT INTO designer_suggestion(no,email,content,suggestion,rating)VALUES('$no','$email','$content','$suggestion','$rating')";
if(mysqli_query($con,$sql))
{
    echo "new row created successfully";

}
else
{
    echo "Error: " . $sql . "
    " . mysqli_error($con);
}
//mysqli_close();
}?>
<!DOCTYPE html>
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
	  <?php
	  
	  echo"<table class='center'>";
	  echo"<tr class='success'>";
	  echo"<th>ID</th>";
	  echo "<th>NO</th>";
	  echo"<th>Email</th>";
	  echo"<th>Content</th>";
	  echo"<th>Suggestion</th>";
	  echo"<th>Rating</th>";
	  echo"<th>delete</th>";
	  echo"</tr>";
	  $i=1;
	  $con=mysqli_connect("localhost","root","","octagon_employement");
	  
	  $que=mysqli_query($con,"SELECT * FROM designer_suggestion");
	  while($row=mysqli_fetch_array($que))
		  {
			  echo "<tr>";
			  echo "<td>".$i."</td>";
			  echo "<td>".$row['no']."</td>";
			  echo "<td>".$row['email']."</td>";
			  echo "<td>".$row['content']."</td>";
			  echo "<td>".$row['suggestion']."</td>";
              echo "<td>".$row['rating']."</td>";
			  echo "<td class='text-center'><a href='#' onclick='deletes($row[no])'><span class='glyphicon glyphicon-remove' style=color:red;></span>delete</a></td>";
			  echo "</tr>";
			  $i++;
		  }
		  ?>
	  <label>Suggest for  Designer</label>
		  <hr>
	<form method="post" action="">
        
	<label>NO</label><br>
		<input type="text" name="no" size="50"><br>
		

		<label>Email</label><br>
		<input type="text" name="email" size="50"><br>
		
        
		<label>Content</label><br>
		<input type="text" name="content" size="50"><br>
		
		<label>Suggestion</label><br>
		<input type="text" name="suggestion" size="50"><br>
		
		<label>Rating</label><br>
		<input type="text" name="rating" size="50" placeholder="Out of 5"><br>
		
		
		 
		<input type="submit" name="save" value="submit">
	</form>
</div>
  </body>
</html>
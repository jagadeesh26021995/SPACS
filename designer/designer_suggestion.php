<html>
	<body>
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
		<div class="main">
<?php
Include("designer_welcome.php");
 
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
</div>
		</body>
		</html>
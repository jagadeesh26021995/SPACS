<?php
Include("config.php");
Include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Admin panel</title>
</head>
<body>
<div class="topnav">
<a href="logout.php"><i class="fa fa-power-off"></i> Logout</a>

    <a href="profile.php"><i class="fa fa-male"></i> Profile</a>
    
    <a href="admin_home.php"><i class="glyphicon glyphicon-home"></i></a>
    
<a href="">ADMIN PANEL</a>


    </div>
    <div class="sidenav">
        <br>
       
    <a href="admin_home.php"><i class="fa fa-fw fa-user"></i>&ensp;Home</a><hr>
    <button class="dropdown-btn"><i class="fa fa-handshake-o"></i>&ensp;Marketer<i class="fa fa-caret-down"></i>
    
  </button>
  <div class="dropdown-container">
  <a href="add_delete_marketer.php"><i class="fa fa-plus-square-o"></i>&ensp;Add/Delete Marketer</a>
    <a href="amarketer_customer.php"><i class="fa fa-handshake-o"></i>&ensp;Customer details</a>
    <a href="amarketer_objective.php"><i class="fa fa-user"></i>&ensp;Objective</a>
    <a href="amarketer_finalstatement.php"><i class="fa fa-newspaper-o"></i>&ensp;Final statement</a>
</div>
<hr>
    <button class="dropdown-btn"><i class="fa fa-camera"></i>&ensp;Designer<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-container">
<a href="add_delete_designer.php"><i class="fa fa-plus-square-o"></i>&ensp;Add/Delete Designer</a>
<a href="designer_objective.php"><i class="	fa fa-book"></i>&ensp;Objective</a>
<a href="#"><i class="fa fa-child"></i>&ensp;Completion</a>
<a href="#"><i class="fa fa-pencil"></i>&ensp;Pending</a>
<a href="adesigner_suggestion.php"><i class="fa fa-group"></i>&ensp;Suggestion</a>
</div>
<hr>
<button class="dropdown-btn"><i class="fa fa-edit"></i>&ensp;Content writer<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-container">
<a href="add_delete_writer.php"><i class="fa fa-plus-square-o"></i>&ensp;Add/Delete writer</a>
<a href="writer_objective.php"><i class="	fa fa-book"></i>&ensp;Objective</a>
<a href="awriter_completion.php"><i class="	fa fa-child"></i>&ensp;Completion</a>
<a href="#"><i class="	fa fa-pencil"></i>&ensp;Pending</a>
</div><hr>
<button class="dropdown-btn"><i class="fa fa-terminal"></i>&ensp;Programmer<i class="fa fa-caret-down"></i>
</button>
<div class="dropdown-container">
<a href="add_delete_programmer.php"><i class="fa fa-plus-square-o"></i>&ensp;Add/Delete Programmer</a>
<a href="programmer_objective.php"><i class="fa fa-book"></i>&ensp;Objective</a>
<a href="#"><i class="	fa fa-archive"></i>Frameworks</a>
<a href="#"><i class="	fa fa-building-o"></i>&ensp;Building</a>
<a href="#"><i class="	fa fa-check-circle"></i>&ensp;Testing</a>
<a href="aprogrammer_completion.php"><i class="	fa fa-child"></i>&ensp;Completion</a>
<a href="#"><i class="	fa fa-pencil"></i>&ensp;Pending</a>
</div></div>

    <script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>

</body>
</html>


   


<?php
Include("marketer_welcome.php");
?>
<div class="main"><?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($con,"update marketer set username='$n',email	='$e',contactno='$c',gender='$g',address='$add', where email='".$_SESSION['email']."'");	

$err="<font color='green'>Faculty Details updated</font>";

	}

$que=mysqli_query($con,"select * from marketer where email='".$_SESSION['email']."'");

$res=mysqli_fetch_assoc($que);	
//print_r($res);
?>


<!--<h3 class="page-header">Update Profile</h3>
--><div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$res['username'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<input type="text" value="<?php echo @$res['contactno'];?>" name="c" class="form-control" required>
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="g" readonly="true" class="form-control" required>
        </div>
    </div>
	
	
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>address:</label>
  <input type="text"  name="add" value="<?php echo @$res['address'];?>" class="form-control" size:40 required>
        </div>
    </div>

    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Profile">
        </div>
  	</div>
	</form>


</div></div>
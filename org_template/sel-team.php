<option value="sel">--Select--</option>
								<?php 
								include('connection.php');
								$str="select * from teamtbl where org_id=".$_REQUEST['id']."";
								$result=mysqli_query($con,$str);
								while($row=mysqli_fetch_array($result))
								{
									?>
									<option  value="<?php echo $row['team_id'] ?>"><?php echo $row['team_name'] ?></option>
	  
									<?php } ?>
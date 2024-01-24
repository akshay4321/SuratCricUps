<thead>
<?php
include("connection.php");

			$str1="select * from playertbl where player_id=".$_REQUEST['id']."";
			$result1=mysqli_query($con,$str1);
			$row1=mysqli_fetch_array($result1);
			?>
			
			<tr>
			<td>
			<img class='aa' src=<?php echo "../upload/$row1[photo]" ; ?> height="100" width="150">
			</td>
			</tr>
			</thead>
			<tbody>
						<tr>
						<td style="font-weight:bold">Player Name:</td>
						<td style="color:blue"><?php echo $row1['player_name'] ; ?></td>
						</tr>
						<tr>
						<td style="font-weight:bold">Date Of Birth:</td>
						<td style="color:blue"><?php echo $row1['dob'] ; ?></td>
						</tr>
						<tr>
						<td style="font-weight:bold">Phone Number:</td>
						<td style="color:blue"><?php echo $row1['phno'] ; ?></td>
						</tr>
						<tr>
						<td style="font-weight:bold">Address:</td>
						<td style="color:blue"><?php echo $row1['address'] ; ?></td>
						</tr>
						<tr>
						<td style="font-weight:bold">Email_id:</td>
						<td style="color:blue"><?php echo $row1['player_emailid'] ; ?></td>
						</tr>
						<tr>
						<td style="font-weight:bold">Playing Role:</td>
						<td style="color:blue"><?php echo $row1['playingrole'] ; ?></td>
						</tr>
						<tr>
						<td style="font-weight:bold">Bowling Arm:</td>
						<td style="color:blue"><?php echo $row1['bowlingarm'] ; ?></td>
						</tr>
						<tr>
						<td style="font-weight:bold">Bowling Pace:</td>
						<td style="color:blue"><?php echo $row1['bowlingpace'] ; ?></td>
						</tr>
						<tr>
						<td style="font-weight:bold">Batting Hand:</td>
						<td style="color:blue"><?php echo $row1['batting'] ; ?></td>
						</tr>
		</tbody>
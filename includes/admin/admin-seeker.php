<?php
include '../services/adminseeker.php.php';
?>

<div id="seekerContainer">
    <div class="seekerSectionHeader">
        <h1>Job Seeker</h1>
        <span></span>
    </div>
    <div class="seekerFormDivContainer">
        <div class="seekerSearchDiv">
            <form action="" method="GET">
                <input type="text" placeholder="Seeker ID">
                <button type="submit" id="btnSearch">Search</button>
            </form>
        </div>
        <div class="seekerProfileDivContainer">
            <form action="" method="GET">
                <img id="seekerProfileSeeker">
                <input type="text" placeholder="Choose"
                       onfocus="(this.type='file')"
                       required
                       id="seekerProfilePic"
                >
                <button type="button" id="seekerBtnRemove">Remove</button>
            </form>
        </div>
        <div>
            <form  method="post" action="adminseeker.php">
                <div>
                    <input type="text" placeholder="User Name" name="userName">
                    <input type="email" placeholder="Email" name="email">
                </div>
                <div>
                    <input type="text" placeholder="First Name" name="firstName">
                    <input type="text" placeholder="Last Name" name="lastName">
                </div>
                <div>
                    <textarea name="Address" id="address" cols="30" rows="10" placeholder="Address"></textarea>
                </div>
                <div>
                    <input type="text" placeholder="Phone Number" name="tel">
                    <input type="text" placeholder="Date Of Birth" name="dob"
                           onfocus="(this.type='date')"
                           required
                    >
                </div>
                <div style="display: flex;">
                    <input type="password" placeholder="Password" name="password"><br>
                    <input type="password" placeholder="Confirm Password" name="conPassword">
                </div>
                <div>
                    <input type="text" placeholder="Upload CV here"
                           onfocus="(this.type='file')"
                           required
                           id="cvFile"
                    >
                    <button type="button" id="btnUpload">Upload</button>
                </div>
                <div class="seekerButtonGroup">
                    <button id="seekerBtnSubmit" type="submit" name="save" >Submit</button>
                    <button id="seekerBtnUpdate">Update</button>
                    <button id="seekerBtnCancel">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <div class="seekerTableDiv">
        <div>
            <div style="display: flex;flex-direction: row;">
                <h1>Job Seeker Table</h1>
                <span></span>
            </div>
            <thead>
            <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>User Name</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Telephone</th>
                    <th>Date Of Birth</th>
                </tr>
                </thead>
				<tbody>

            <?php
				$result = mysqli_query($conn,"SELECT * FROM crud");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["id"]; ?>">
				<td>
							<span class="custom-checkbox">
								<input type="checkbox" class="user_checkbox" data-user-id="<?php echo $row["id"]; ?>">
								<label for="checkbox2"></label>
							</span>
						</td>
					<td><?php echo $i; ?></td>
					<td><?php echo $row["ID"]; ?></td>
					<td><?php echo $row["Image"]; ?></td>
					<td><?php echo $row["User_Name"]; ?></td>
					<td><?php echo $row["First_Name"]; ?></td>
                    <td><?php echo $row["Last_Name"]; ?></td>
                    <td><?php echo $row["Email"]; ?></td>
                    <td><?php echo $row["Address"]; ?></td>
                    <td><?php echo $row["Telephone"]; ?></td>
                    <td><?php echo $row["Date_Of_Birth"]; ?></td>
					<td>
						<a href="#editEmployeeModal" class="edit" data-toggle="modal">
							<i class="material-icons update" data-toggle="tooltip" 
							data-id="<?php echo $row["id"]; ?>"
							data-image="<?php echo $row["image"]; ?>"
							data-userName="<?php echo $row["userName"]; ?>"
							data-firstName="<?php echo $row["firstName"]; ?>"
                            data-lastName="<?php echo $row["lastName"]; ?>"
							data-email="<?php echo $row["email"]; ?>"
                            data-address="<?php echo $row["address"]; ?>"
                            data-telephone="<?php echo $row["telephone"]; ?>"
                            data-dateOfBirth="<?php echo $row["dateOfBirth"]; ?>"
							title="Edit"></i>
						</a>
						<a href="#deleteEmployeeModal" class="delete" data-id="<?php echo $row["id"]; ?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" 
						 title="Delete"></i></a>
                    </td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>

           
        </div>
    </div>
</div>
<script src="../../assets/js/adminSeeker.js"></script>




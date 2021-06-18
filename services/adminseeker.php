<?php
//Linking the config file
require "../config/DBConnection.php";

$method = $_SERVER["REQUEST_METHOD"];

if(isset($_POST['save']))
{	 
	 $id = $_POST['id'];
	 $image = $_POST['image'];
	 $userName = $_POST['userName'];
	 $firstName = $_POST['firstName'];
     $lastName = $_POST['lastName'];
     $email = $_POST['email'];
     $address = $_POST['address'];
     $telephone = $_POST['telephone'];
     $dateOfBirth = $_POST['dateOfBirth'];
    

	 $sql = "INSERT INTO user_r (u_id,image,user_name,first_name,last_name,email,address,dob)
	 VALUES ('$id','$image','$userName','$firstName','$lastName','$email','$address','$dateOfBirth')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

if(count($_POST)>0){
	if($_POST['type']==2){
        $id = $_POST['id'];
        $image = $_POST['image'];
        $userName = $_POST['userName'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $telephone = $_POST['telephone'];

        $dateOfBirth = $_POST['dateOfBirth'];

	$sql = "UPDATE `user_r` SET `image`='$image',`userName`='$userName',`firstName`='$firstName',`lastName`='$lastName',`email`='$email',`address`='$address',`telephone`='$telephone',`dateOfBirth`='$dateOfBirth' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `user_r` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM crud WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
?>


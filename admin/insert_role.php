<?php
session_start();
$conn=mysqli_connect("localhost","root","","dts");
if(!$conn){
	die("Database connection error");
	
}


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $department = $_POST['dept'];
    
    

    $insert = "INSERT INTO roles(id,desk_id,roles_name,department) 
    VALUES ('','','$name','$department')";

     $query = mysqli_query($conn,$insert);

    if($query ==1)
	{
        $id =mysqli_insert_id($conn);
        $invid = str_pad($id,4,'0',STR_PAD_LEFT);
        $docid = "DS".$invid;
        $update = "UPDATE roles SET desk_id='$docid' WHERE id='$id'";
        $query1 = mysqli_query($conn,$update)or die(mysqli_error($conn));
        $Message = "record inserted successfully ";
         header("Location:add_roles.php?Message={$Message}");
	}
	else
	{
		echo"error ";
	}
		mysqli_close($conn);

}
?>
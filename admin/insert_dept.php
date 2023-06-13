<?php
session_start();
$conn=mysqli_connect("localhost","root","","dts");
if(!$conn){
	die("Database connection error");
	
}


if(isset($_POST['submit'])){
    $dept_name = $_POST['name'];
    

    $insert = "INSERT INTO department(id,dept_id,dept_name) 
    VALUES ('','','$dept_name')";

     $query = mysqli_query($conn,$insert);

    if($query ==1)
	{
        $id =mysqli_insert_id($conn);
        $invid = str_pad($id,4,'0',STR_PAD_LEFT);
        $docid = "IN".$invid;
        $update = "UPDATE department SET dept_id='$docid' WHERE id='$id'";
        $query1 = mysqli_query($conn,$update)or die(mysqli_error($conn));
        $Message = "record inserted successfully ";
         header("Location:add_dept.php?Message={$Message}");
	}
	else
	{
		echo"error ";
	}
		mysqli_close($conn);

}
?>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","dts");
if(!$conn){
	die("Database connection error");
	}
?>

<?php 
if(isset($_POST['submit'])){
  $name =$_POST['name'];
  $dob =$_POST['dob'];
  $gender=$_POST['gender'];
  $phn_no = $_POST['phn_no'];
  $email = $_POST['email'];
  $desk_id = $_POST['desc_id'];
  $img_path = $_FILES['image']['name'];
    $address= $_POST['address'];
    $designation=$_POST['designation'];
    $pass=$_POST['psw'];
    $role_as =$_POST['role'];
    $m=date('m');
    $y=date('y');
    $d=date('d');

    $_SESSION['auth_role'] = "$role_as";
    	

    $insert = "INSERT INTO admin(id,name, dob, gender, phn_no, email, desk_id, photo, address,designation,role_as) 
    VALUES ('','$name','$dob','$gender','$phn_no','$email','$desk_id','$img_path','$address','$designation','$role_as')";

    $query1 = mysqli_query($conn,$insert)or die(mysqli_error($conn));

    if($query1)
    {   if($_SESSION['auth_role'] == "admin"){
        move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/".$_FILES["image"]["name"]);}

        elseif($_SESSION['auth_role'] == "User"){
          move_uploaded_file($_FILES["image"]["tmp_name"], "../user/uploads1/".$_FILES["image"]["name"]);}
    
    }

    
    
if($query1==1)
{
  

  $id =mysqli_insert_id($conn);
      $invid = str_pad($id,4,'0',STR_PAD_LEFT);
      $staff_id = "AD".$y.$m.$d.$invid;
      $update = "UPDATE admin SET staff_id='$staff_id' WHERE id='$id'";
      $query2 = mysqli_query($conn,$update)or die(mysqli_error($conn));
      if($query2==1){
        $ins = "INSERT INTO login(staff_id,password,role_as) VALUES('$staff_id','$pass','$role_as')";
        $query3 = mysqli_query($conn,$ins)or die(mysqli_error($conn));

        if($query3==1){
          $Message = "record inserted successfully ";
         header("Location:create_user.php?Message={$Message}");
        }
      }
}
else{
  $Message = "record inserted successfully ";
  header("Location:create_user.php?Message={$Message}");

}


}
?>
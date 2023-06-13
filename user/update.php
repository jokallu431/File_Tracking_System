<?php
session_start();
$conn=mysqli_connect("localhost","root","","dts");
if(!$conn){
	die("Database connection error");
	
}

?>
<?php
if(isset($_POST['submit'])){
    $desk_id = $_POST['desk_id'];
    $doc_id = $_POST['doc_type'];
    $doc_status =$_POST['doc_status'];
    $Remark= $_POST['Remark'];
   # $Department= $_POST['Department'];
    $Forwarded_To= $_POST['Forwarded_To'];
    $UPDATEd_by= $_POST['Updated_by'];
    $m=date('m');
    $y=date('y');
    $d=date('d');
    $date = date("Y-m-d H:i:s");
    
    
    $insert="INSERT INTO doc_update(id, track_id, desk_id, doc_id, doc_status1, remark, forw_to,date,staff_id) 
    VALUES ('','','$desk_id','$doc_id','$doc_status','$Remark','$Forwarded_To','$date','$username') ";

     $query1 = mysqli_query($conn,$insert)or die(mysqli_error($conn));

    
    if($query1==1){
      $id =mysqli_insert_id($conn);
      $invid = str_pad($id,4,'0',STR_PAD_LEFT);
      $track_id = "TR".$y.$m.$d.$invid;
      $update = "UPDATE doc_update SET track_id='$track_id' WHERE id='$id'";
     
     
    
      $query2 = mysqli_query($conn,$update)or die(mysqli_error($conn));
      if($query2==1){
        $Message = "Record Inserted Successfully.... ";
         header("Location:update_file.php?Message={$Message}");
    }
     
    else{
      $Message = "Record Not Inserted.... ";
         header("Location:update_file.php?Message={$Message}");
    }
}
}

?>
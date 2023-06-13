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
    $doc_type= $_POST['doc_type'];
    $doc_status =$_POST['doc_status'];
    $doc_owner = $_POST['doc_owner'];
    $phn_owner = $_POST['phn_owner'];
    $doc_desc = $_POST['doc_desc'];
    $address_to = $_POST['address_to'];
    $no_of_copies = $_POST['no_of_copies'];
    $created_by = $_POST['created_by'];
    $doc_mode = $_POST['doc_mode'];
	$dept_id = $_POST['dept_id'];
	$doc_ref_no = $_POST['doc_ref_no'];
    $m=date('m');
    $y=date('y');
    $d=date('d');


    $insert = "INSERT INTO create_doc(id,doc_id,desk_id,date, doc_type, doc_status, doc_owner,
	  phn_owner, doc_desc,addressed_to,no_of_copies,created_by,doc_mode,doc_ref_no) 
    VALUES ('','','$desk_id',now(),'$doc_type','$doc_status','$doc_owner','$phn_owner','$doc_desc',
	'$address_to','$no_of_copies','$created_by','$doc_mode','$doc_ref_no')";

    $query_run = mysqli_query($conn,$insert);

	if($query_run==1){

        $id =mysqli_insert_id($conn);
        $invid = str_pad($id,4,'0',STR_PAD_LEFT);
        $docid = "IN".$y.$m.$d.$invid;      
        $update = "UPDATE create_doc SET doc_id='$docid' WHERE id='$id'";
       
    
  
        $query1 = mysqli_query($conn,$update)or die(mysqli_error($conn));
        if($query1==1){
            $Message = "record inserted successfully ";
             header( "Location:create_file.php?Message= {$Message}");
        }
		
	
	}else{
		echo "data not inserted successfully";
	}

}
?>
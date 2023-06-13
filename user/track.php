<?php include 'includes/header.php';?>
<?php include 'includes/user_sidebar.php';?>
<?php include 'includes/topbar.php';?>
<?php include 'dbcon.php';?>


<div class="details1">
    <div class="recentFile1">
        <div class="cardHeader">
            <h2>Track Document</h2>
        </div>
        <div class="container2">

            <form method="post">
                <div class="form first">
                    <span class="title">Document Details</span>
                    <div class="fields">

                        <div class="input-field1">
                            <label>Document ID </label>
                            <input type="text" name="name" placeholder="Enter your Document ID" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="nextBtn">
                        <span class="btntext">SUBMIT</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- ========================Recent Departments==================================== -->
    <div class="recentdept">
        <div class="cardHeader">
            <h2>Recent Roles</h2>
        </div>
        <table class="container_1" border="1">
            <thead>
                <tr>
                    <th>Sr no</th>
                    <th>Doc Owner</th>
                    <th>Doc Owner Contact</th>
                    <th>Doc Type</th>
                    <th>Doc Description</th>
                    <th>No Of Copies</th>
                    <th>Doc Date</th>
                    <th>Doc Status</th>
                    <th>View Doc</th>
                </tr>
            </thead>
            <?php 
                    if(isset($_POST['submit'])){
                     $doc_id = $_POST['name'];
                                

		                        $i = 1;
                             
                                $qry = "SELECT * FROM create_doc INNER JOIN doc_update ON create_doc.doc_id = doc_update.doc_id  WHERE doc_update.doc_id = '$doc_id' ORDER BY doc_update.track_id DESC LIMIT 1 ";

                               
		                        $run = $conn -> query($qry);
	                            if($run -> num_rows > 0){
			                    while($row = $run -> fetch_assoc()){
			                   
                                                              
	                 ?>
                                                    
	                    <tr>
                        <td><?php echo $i++; ?></td>
		                <td><?php echo $row['doc_owner']?></td>
		                <td><?php echo $row['phn_owner']?></td>
		                <td><?php echo $row['doc_type']?></td>
                        <td><?php echo $row['doc_desc']?></td>
                        <td><?php echo $row['no_of_copies']?></td>
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['doc_status1']?></td>
                        <td>
                            <button type="button" id="button" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">Track Doc</button>
                        </td>
                      
                        </tr>
                       
	                    <?php 
			
			                        }
		                        }
                            }
                        
	                 ?>
                        
        </table>
        <div id="myModal<?php echo $row['id'] ?>" class="popup" >
            <div class="popup-content">
                <img src="assets/imgs/close.png" alt="Close" class="close">
                <table class="container_1" border="1">
                    <thead>
                        <tr>
                            <th>Sr no</th>
                            <th>Doc Owner</th>
                            <th>Doc Owner Contact</th>
                            <th>Doc Type</th>
                            <th>Doc Description</th>
                            <th>Address To</th>
                            <th>No Of Copies</th>
                            <th>Created By</th>
                            <th>Doc Date</th>
                            <th>Doc Status</th>
                            <th>Track Id</th>
                        </tr>
                    </thead>
                    <?php 
                    if(isset($_POST['submit'])){
                     $doc_id = $_POST['name'];
                     // $docid=$doc_id;

                    

		                        $i = 1;

                              /*  $qry = "SELECT a.id,b.id,b.track_id,a.doc_owner, a.phn_owner, a.doc_type,a.doc_desc,a.no_of_copies,b.doc_status1
                                FROM create_doc a, doc_update b WHERE a.doc_id=b.doc_id" */

		                     /*   $qry = "SELECT a.id,b.id,b.track_id,a.doc_owner, a.phn_owner, a.doc_type,a.doc_desc,a.no_of_copies,b.doc_status1
                                FROM create_doc a, doc_update b
                                ORDER BY b.track_id DESC LIMIT 1"; */

                                $qry = "SELECT * FROM create_doc INNER JOIN doc_update ON create_doc.doc_id = doc_update.doc_id WHERE create_doc.doc_id ='$doc_id' ";

                               /* $qry = "SELECT a.id,b.id,a.doc_owner, a.phn_owner, a.doc_type, a.doc_desc, a.no_of_copies, b.doc_status1
                                FROM create_doc a INNER JOIN doc_update b
                                ON a.doc_id = b.doc_id";*/
          
		                        $run = $conn -> query($qry);
	                            if($run -> num_rows > 0){
			                    while($row = $run -> fetch_assoc()){
                                   
                                    
			                   // $id = $row['doc_id'];
                              
	                 ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
		                <td><?php echo $row['doc_owner']?></td>
		                <td><?php echo $row['phn_owner']?></td>
		                <td><?php echo $row['doc_type']?></td>
                        <td><?php echo $row['doc_desc']?></td>
                        <td><?php echo $row['addressed_to']?></td>
                        <td><?php echo $row['no_of_copies']?></td>
                        <td><?php echo $row['created_by']?></td>
                        <td><?php echo $row['date']?></td>
                        <td><?php echo $row['doc_status1']?></td>
                        <td><?php echo $row['track_id']?></td>
                        </tr>
                        <?php 
			
			                        }
		                        }
                            }
                    
	                    ?>
                        
                </table>
            </div>
        </div>
    </div>



</div>

<script>
document.getElementById("button").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "flex";
})
document.querySelector(".close").addEventListener("click", function() {
    document.querySelector(".popup").style.display = "none";
})
</script>


<?php include 'includes/footer.php';?>
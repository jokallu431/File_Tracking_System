
<?php include 'includes/header.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/topbar.php';?>
<?php $conn=mysqli_connect("localhost","root","","dts");
if(!$conn){
	die("Database connection error");}?>
  <?php /*
    if( $_SESSION['user_role'] != "Admin")
    {
        session_destroy();
        header("location: index(1).php");
    } */ ?>  
              <!-- =============================== content ============================= -->
            <div class="details">
                <div class="recentFile">
                    <div class="cardHeader">
                        <h2>Recent Files</h2>
                        <a href="#" class="btn">View all</a>
                    </div>
                    <div class="table-format">
                    <table>
                        <thead>
                            <tr>
                                <td>Track_id</td>
                                <td>Desk_id</td>
                                <td>Date</td>
                                <td>Doc_id</td>
                                <td>Remark</td>
                                <td>Forw_to</td>
                                <td>Doc_status</td>
                            </tr>
                        </thead>
                        <?php 
		                        $i = 1;
		                        $qry = "select * from doc_update";
		                        $run = $conn->query($qry);
	                            if($run -> num_rows > 0){
			                    while($row = $run -> fetch_assoc()){
			                    $id = $row['id'];
	                    ?>
	
	                    <tr>
		                <td><?php echo $row['track_id']?></td>
		                <td><?php echo $row['desk_id']?></td>
		                <td><?php echo $row['date']?></td>
                        <td><?php echo $row['doc_id']?></td>
                        <td><?php echo $row['remark']?></td>
                        <td><?php echo $row['forw_to']?></td>
                        <td><?php echo $row['doc_status1']?></td>
                        </tr>
	                    <?php 
			
			                        }
		                        }
	
	                    ?>
                    </table>
                    </div>
                </div>
            </div>
        
    <?php include 'includes/footer.php';?>
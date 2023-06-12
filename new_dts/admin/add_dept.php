<?php include 'includes/header.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/topbar.php';
$conn=mysqli_connect("localhost","root","","dts");
if(!$conn){
	die("Database connection error");
	
}
$query="SELECT * FROM  department";
$option = mysqli_query($conn,$query);
?>
<div class="details1">
    <div class="recentFile1">
        <div class="cardHeader">
            <h2>Create Roles</h2>
        </div>
        <div class="container2">
        <form action="insert_dept.php" method="post">
                <div class="form first">
                    <span class="title">Department Details</span>
                    <div class="fields">

                        <div class="input-field1">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Enter your Department name" required>
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
                    <th>Sr no</th>
                    <th>Dept_id</th>
                    <th>Dept Name</th>
                </tr>
            </thead>
            <?php 
		                        $i = 1;
		                        $qry = "select * from department";
		                        $run = $conn->query($qry);
	                            if($run -> num_rows > 0){
			                    while($row = $run -> fetch_assoc()){
			                    $id = $row['id'];
	                    ?>
	
	                    <tr>
                        <td><?php echo $i++;?></td>
		                <td><?php echo $row['dept_id']?></td>
		                <td><?php echo $row['dept_name']?></td>
		                
                        </tr>
	                    <?php 
			
			                        }
		                        }
	
	                    ?>
                        
        </table>
        
    </div>



</div>
<?php include 'includes/footer.php';?>
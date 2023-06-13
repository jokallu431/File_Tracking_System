<?php include 'includes/header.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/topbar.php';
$conn=mysqli_connect("localhost","root","","dts");
if(!$conn){
	die("Database connection error");
	
}
$query="SELECT * FROM roles";
$option = mysqli_query($conn,$query);
?>
<div class="details1">
    <div class="recentFile1">
        <div class="cardHeader">
            <h2>Create Roles</h2>
        </div>
        <div class="container2">
            <form action="insert_role.php" method="post">
                        <div class="form first">
                            <span class="title">Roles Details</span>
                            <div class="fields">

                                <div class="input-field">
                                    <label>Name</label>
                                    <input type="text" name="name" placeholder="Enter your Role name" required>

                                </div>
                                <div class="input-field">
                                    <label>Departments</label>
                                    <select name="dept">
                                        <option hidden value="select">Select</option>
                                        <?php while($row=mysqli_fetch_array($option)):;?>
                                                <option><?php echo $row['department'];?></option>
                                                <?php endwhile;?>
                                    </select>
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
                    <th>Desk_id</th>
                    <th>Role Name</th>
                    <th>Departments</th>
                </tr>
            </thead>
            <?php 
		                        $i = 1;
		                        $qry = "select * from roles";
		                        $run = $conn->query($qry);
	                            if($run -> num_rows > 0){
			                    while($row = $run -> fetch_assoc()){
			                    $id = $row['id'];
	                    ?>
	
	                    <tr>
                        <td><?php echo $i++;?></td>
                        <td><?php echo $row['desk_id']?></td>
		                <td><?php echo $row['roles_name']?></td>
		                <td><?php echo $row['department']?></td>
		                
                        </tr>
	                    <?php 
			
			                        }
		                        }
	
	                    ?>
                        
        </table>
        
    </div>



</div>


<?php include 'includes/footer.php';?>
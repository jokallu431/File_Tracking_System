
<?php include 'includes/header.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/topbar.php';?>
<?php  $user= $_SESSION['id']?>
<?php
if(!$conn){
    die("Database connection error");}
    
    $sql = "SELECT * FROM admin";
    $result = $conn->query($sql);

    ?>

<div class="details">
    <div class="recentFile">
        <div class="cardHeader">
            <h2>Profile</h2>
        </div>
        <div class="profile">
        <?php
             $sql = "SELECT * FROM admin WHERE staff_id='$user'";
             $result = $conn->query($sql);
         
             ?>
        <?php if($result->num_rows > 0){?>
            <?php while($row = $result->fetch_assoc()){?>
              
                <img src="<?php echo"uploads/".$row['photo']; ?>" alt="img" /> 
                
                <?php }?>
                <?php }else{ ?>
                    <p >Image not found....</p>
                    <?php } ?>
        </div>

        <div class="user_details">
            <?php
             $sql = "SELECT * FROM admin WHERE staff_id='$user'";
             $result = $conn->query($sql);
         
             ?>
        <?php if($result->num_rows > 0){?>
            <?php while($row = $result->fetch_assoc()){?>
                <div>
                    Name : <span><?php echo $row['name'];?></span>
                </div>
                <div>
                    Date of Birth :<?php echo $row['dob'];?>
                </div>
                <div>
                    Designation : <span><?php echo $row['designation'];?></span>
                </div>
                <div>
                    Staff_id : <span><?php echo $row['staff_id'];?></span>
                </div>
                <?php }?>
                <?php }else{ ?>
                    <p >Image not found....</p>
                    <?php } ?>
        </div>         
    </div>
</div>


<?php include 'includes/footer.php';?>
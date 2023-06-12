<?php  $user= $_SESSION['id']?>
<?php
  
    if(!$conn){
        die("Database connection error");}

    $sql = "SELECT photo FROM admin";
    $result = $conn->query($sql);
    ?>

<!--Main-->

       <div class="main">
           <div class="topbar">
               <div class="toggle">
                   <ion-icon name="menu-outline"></ion-icon>
               </div>

               <div class="search">
                   <label>
                       <h2>File Tracking System</h2>
                   </label>
               </div>

               <div class="user">
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
                  
                   <!-- if(isset($_SESSION['auth'])){ -->
                    <!-- <?php echo $_SESSION['auth_user']['username'];?> -->
                   <!-- } -->
                   <!-- else{ -->
                    <!-- echo " Not logged In.."; -->
                   <!-- } -->
                   
               </div>

           </div>
           <!-- ====================== cards ===================== -->
           <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers"></div>
				<?php 
						$dashboard_Reverted_Files = "SELECT * FROM doc_update where doc_status1 LIKE 'rej%'";
						$dashboard_Reverted_Files_run = mysqli_query($conn,$dashboard_Reverted_Files);
						if($reverted_files = mysqli_num_rows($dashboard_Reverted_Files_run)){
							echo '<h4 class="numbers">'.$reverted_files.'</h4>';
							
						}
						else{
							echo 'No data';
						}
					   ?>
                <div class="cardName">Reverted Files</div>

                <div class="iconBx">
                <ion-icon name="arrow-undo"></ion-icon>
                </div>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers"></div>
				<?php 
						$dashboard_Reverted_Files = "SELECT * FROM doc_update where doc_status1 LIKE 'under%'";
						$dashboard_Reverted_Files_run = mysqli_query($conn,$dashboard_Reverted_Files);
						if($reverted_files = mysqli_num_rows($dashboard_Reverted_Files_run)){
							echo '<h4 class="numbers">'.$reverted_files.'</h4>';
							
						}
						else{
							echo 'No data';
						}
					   ?>
                <div class="cardName">Pending Files</div>

                <div class="iconBx">
                    <ion-icon name="document"></ion-icon>
                </div>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers"></div>
				<?php 
						$dashboard_Reverted_Files = "SELECT * FROM doc_update where doc_status1 LIKE 'com%'";
						$dashboard_Reverted_Files_run = mysqli_query($conn,$dashboard_Reverted_Files);
						if($reverted_files = mysqli_num_rows($dashboard_Reverted_Files_run)){
							echo '<h4 class="numbers">'.$reverted_files.'</h4>';
							
						}
						else{
							echo 'No data';
						}
					   ?>
                <div class="cardName">Completed Files</div>

                <div class="iconBx">
                    <ion-icon name="folder"></ion-icon>
                </div>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers"></div>
				<?php 
						$dashboard_Reverted_Files = "SELECT * FROM doc_update";
						$dashboard_Reverted_Files_run = mysqli_query($conn,$dashboard_Reverted_Files);
						if($reverted_files = mysqli_num_rows($dashboard_Reverted_Files_run)){
							echo '<h4 class="numbers">'.$reverted_files.'</h4>';
							
						}
						else{
							echo 'No data';
						}
					   ?>
                <div class="cardName">Total Files</div>

                <div class="iconBx">
                    <ion-icon name="file-tray-stacked"></ion-icon>
                    <!-- <img src="assets/imgs/file-tray-stacked.svg" > -->
                </div>
            </div>
        </div>
    </div>
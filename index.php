<?php
//  session_start();

//   if(isset($_SESSION['auth'])){
//   $_SESSION['status'] = " You are already logged In";
//   header('Location:a.php');

//  } 
?> 
<?php include 'user/dbcon.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Track</title>
    <link rel="stylesheet" href="user/assets/css/login.css">
</head> 

<body>
    <div class="login">
        <div class="form-box">
            <div class="button-box">

                <div id="btn"></div>

                    <button type="button" class="toggle-btn" onclick="login()">Login</button>
                    <button type="button" class="toggle-btn" onclick="track()">Track</button>
                
            </div>
            <form action="logincode.php" method="post" class="login-form" id="login">
                <input type="text" class="form-field" name="staff_id" placeholder="Username"  required>
                <input type="password" class="form-field" name="password" placeholder="Password"  required>
                <div class="pass">
                    <a href="forget.php">Forget Password?</a>
                </div>
                <button type="submit" name="submit" class="submit">LogIn</button>
            </form>

            <form method="POST" class="login-form" id="track">
                <input type="text" name="doc_id" class="form-field" placeholder="Enter Document Id" required>
                <div class="pass"> </div>
                <button type="submit" name="track" class="submit">Track</button>

                <div class="recentdept">
                    <div class="cardHeader">
                        <h2>Track Details</h2>
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
                                
                            </tr>
                        </thead>
                        
                        <tr class="mrk">
                        <?php 
                    if(isset($_POST['track'])){
                     $doc_id = $_POST['doc_id'];
                     $docid=$doc_id;

		                        $i = 1;

                              /*  $qry = "SELECT a.id,b.id,b.track_id,a.doc_owner, a.phn_owner, a.doc_type,a.doc_desc,a.no_of_copies,b.doc_status1
                                FROM create_doc a, doc_update b WHERE a.doc_id=b.doc_id" */

		                     /*   $qry = "SELECT a.id,b.id,b.track_id,a.doc_owner, a.phn_owner, a.doc_type,a.doc_desc,a.no_of_copies,b.doc_status1
                                FROM create_doc a, doc_update b
                                ORDER BY b.track_id DESC LIMIT 1"; */

                                $qry = "SELECT * FROM create_doc INNER JOIN doc_update ON create_doc.doc_id = doc_update.doc_id  WHERE doc_update.doc_id = '$doc_id' ORDER BY doc_update.track_id DESC LIMIT 1 ";


                                // $qry = "SELECT * FROM create_doc INNER JOIN doc_update ON create_doc.doc_id = doc_update.doc_id ORDER BY doc_update.track_id DESC LIMIT 1 ";

                               /* $qry = "SELECT a.id,b.id,a.doc_owner, a.phn_owner, a.doc_type, a.doc_desc, a.no_of_copies, b.doc_status1
                                FROM create_doc a INNER JOIN doc_update b
                                ON a.doc_id = b.doc_id";*/
          
		                        $run = $conn -> query($qry);
	                            if($run -> num_rows > 0){
			                    while($row = $run -> fetch_assoc()){
			                    $id = $row['id'];
                              
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
                        
                        </tr>
                       
	                    <?php 
			
			                        }
		                        }
                            }
	                    ?>
                        </tr>
                    </table>
                </div>
                <!-- <button type="submit" name="track" class="submit">Track</button> -->
            </form>
        </div>
    </div>

    <script>
    var x = document.getElementById('login');
    var y = document.getElementById('track');
    var z = document.getElementById('btn');

    function track() {
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
    }

    function login() {
        x.style.left = "50px";
        y.style.left = "400px";
        z.style.left = "0";
    }
    </script>
</body>

</html>
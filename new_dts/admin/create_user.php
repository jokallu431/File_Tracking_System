
<?php include 'includes/header.php';?>
<?php include 'includes/sidebar.php';?>
<?php include 'includes/topbar.php';?>

    <div class="details">
                <div class="recentFile">
                    <div class="cardHeader">
                        <h2>CREATE USER</h2>
                    </div>
                <div class="container1">
                   
                    <form   action="insert1.php" method="POST" enctype="multipart/form-data" onsubmit="return validation();">
                        <div class="form first">
                                <span class="title">User Details</span>

                                <div class="fields">

                                    <div class="input-field">
                                        <label>Name</label>
                                        <input type="text" name="name" id="username" placeholder="Enter your full name" required>
                                                <span id="usererror" style="color:red" ></span> 
                                    </div>
                                    
                                    <div class="input-field">
                                        <label>Date of Birth </label>
                                        <input type="date" name="dob" id="dob" placeholder="Enter birth date" required>
                                        <span id="doberror" style="color:red" ></span> 
                                        </div>

                                    <div class="input-field">
                                            <label>Gender</label>
                                            <select  name="gender" required >
                                                <option hidden value="select">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                           
                                            </select>
                                    </div>

                                    <div class="input-field">
                                        <label>Contact No.</label>
                                        <input type="text" name="phn_no" id="phn_no" placeholder="Enter contact number" required>
                                        <span id="conerror" style="color:red" ></span> 
                                    </div>
                                    <div class="input-field">
                                        <label>Designation</label>
                                        <input type="text" name="designation" id="designation" placeholder="Enter your Designation" required >
                                        <span id="desgerror" style="color:red" ></span> 
                                    </div>
                                    <div class="input-field">
                                        <label>Email  <i class="uil uil-envelope icon"></i></label>
                                        <input type="text" name="email" id="email" placeholder="Enter your email"required >
                                        <span id="emailerror" style="color:red" ></span> 

                                    </div>

                                    <div class="input-field">
                                        <label>Addrress</label>
                                        <input type="text" name="address" id="address" placeholder="Enter your address" required>
                                        <span id="adderror" style="color:red" ></span> 
                                    </div>

                                    <div class="input-field">
                                        <label>Desktop ID</label>
                                        <input type="text" name="desc_id" id="desc_id" placeholder="Enter your desktop ID" required>
                                        <span id="deskerror" style="color:red" ></span> 
                                    </div>

                                    <div class="input-field">
                                        <label>Photo</label>
                                        <input type="file" name="image" id="photo" placeholder="photo" required>
                                        <!-- <span id="photoerror" style="color:red" ></span>  -->
                                    </div>
                                    <div class="input-field">
                                        <label>User Type</label>
                                            <select  name="role" required >
                                                <option value="admin">Admin</option>
                                                <option value="User">User</option>
                                            </select> 
                                    </div>
                                    <div class="input-field">
                                        <label>Password  <i class="uil uil-lock icon"></i></label>
                                        <input type="text" name="psw" id="psw" placeholder="Enter password" required >
                                        <span id="passerror" style="color:red" ></span> 
                                    </div>                                   

                                    <div class="input-field">
                                        <label>Confirm Password  <i class="uil uil-lock icon"></i></label>
                                        <input type="text" name="con_psw" id="con_psw" placeholder="Re-enter your password" required> 
                                        <span id="cpasserror" style="color:red" ></span> 
                                    </div>

                                    
                                </div>

                                <button type="submit" class="nextBtn" name="submit">
                                    <span class="btntext">SUBMIT</span>
                                    
                                </button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    
    function validation(){

        var username = document.getElementById('username').value;
        var usercheck = /^[A-Za-z. ]{3,40}$/;

      
        var contact = document.getElementById('phn_no').value;
        var phncheck= /^[789][0-9]{9}$/;

        var designation = document.getElementById('designation').value;
        var desigcheck= /^[A-Za-z]{3,20}$/;
      
        var email = document.getElementById('email').value;
        var emailcheck= /^[A-Za-z._]{3,}@[A_Za-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;

        var address = document.getElementById('address').value;
        var addcheck= /^[a-zA-Z0-9\s,.'-]{3,}$/;

        var deskid = document.getElementById('desc_id').value;
        var desccheck= /^[A-Za-z0-9]{3,10}$/;

       // var photo = document.getElementById('photo').value;
        //var photocheck= /[^\s]+(.*?).(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/;

        var password = document.getElementById('psw').value;
        var passcheck= /^(?=.*[0-9])(?=.*[.!@#$%^&*])[a-zA-Z0-9!@#$%^&*.]{8,16}$/;

        var conpass = document.getElementById('con_psw').value;
        /* var addcheck= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/; */


        if(usercheck.test(username)){
            document.getElementById('usererror').innerHTML = " ";
        }else{
            document.getElementById('usererror').innerHTML = "** Name is Invalid ";
            return false;
        }
      
        if(phncheck.test(contact)){
            document.getElementById('conerror').innerHTML = " ";
        }else{
            document.getElementById('conerror').innerHTML = "** Number is Invalid ";
            return false;
        }

        if(desigcheck.test(designation)){
            document.getElementById('desgerror').innerHTML = " ";
        }else{
            document.getElementById('desgerror').innerHTML = " ** Invalid";
            return false;
        }

        if(emailcheck.test(email)){
            document.getElementById('emailerror').innerHTML = " ";
        }else{
            document.getElementById('emailerror').innerHTML = "** Email is Invalid ";
            return false;
        }

        if(addcheck.test(address)){
            document.getElementById('adderror').innerHTML = " ";
        }else{
            document.getElementById('adderror').innerHTML = "** Enter valid Address. ";
            return false;
        }

        if(desccheck.test(deskid)){
            document.getElementById('deskerror').innerHTML = " ";
        }else{
            document.getElementById('deskerror').innerHTML = "** Enter desk Id. ";
            return false;
        }

        if(photocheck.test(photo)){
            document.getElementById('photoerror').innerHTML = " ";
        }else{
            document.getElementById('photoerror').innerHTML = "** select image. ";
            return false;
        }

        if(passcheck.test(password)){
            document.getElementById('passerror').innerHTML = " ";
        }else{
            document.getElementById('passerror').innerHTML = "** Password is Invalid ";
            return false;
        }

        if(conpass.match(password)){
            document.getElementById('cpasserror').innerHTML = " ";
        }else{
            document.getElementById('cpasserror').innerHTML = "** Password is not Matching ";
            return false;
        }


    }
    

</script>
    
<?php include 'includes/footer.php';?>
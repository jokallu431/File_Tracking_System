<?php include 'includes/header.php';?>
<?php include 'includes/user_sidebar.php';?>
<?php include 'includes/topbar.php';?>
<?php include 'includes/dbcon.php';
$query="SELECT * FROM department";
$option = mysqli_query($conn,$query);
?>
<!-- ========================= Content =============================== -->

    <div class="details">
                <div class="recentFile">
                    <div class="cardHeader">
                        <h2>CREATE DOCUMENT</h2>
                    </div>
                    <div class="container1">
                        <form action="insert.php" method="post" onsubmit="return formValidation();">
                            <div class="form first">
                                <div class="fields">
                                    <div class="input-field">
                                        <label>Desk No.</label>
                                        <input type="text" name="desk_id" id="desk_id" placeholder="Enter your desk number" required>
                                        <span id="deskerror" style="color:red"></span>
                                    </div> 
                        
                                    <div class="input-field">
                                        <label>Document Type</label>
                                        <select name="doc_type" id="status" required>
                                            <option hidden value="select">Select</option>
                                            <option value="note">Note</option>
                                            <option value="circular">Circular</option>
                                            <option value="letter">Letter</option>
                                            <option value="invoice">Invoice</option>
                                        </select>                          
                                    </div>
                                    <div class="input-field">
                                        <label>Document Status</label>
                                        <select name="doc_status" id="status" required>
                                            <option hidden value="select">Select</option>
                                            <option value="underprocess">Underprocess</option>
                                            <option value="pending">Pending</option>
                                            <option value="completed">Completed</option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <label>Documnet Owner</label>
                                        <input type="text" name="doc_owner" id="doc_id" placeholder="Enter document owner's name"  required>
                                        <span id="DocError" style="color:red"></span>
                                    </div>
                                    <div class="input-field">
                                        <label>Contact No. (Document owner)</label>
                                        <input type="text" name="phn_owner" id="phn_no" placeholder="Enter contact number" autocomplete="off" required>
                                        <span id="conError" style="color:red"></span>
                                    </div>
                                    <div class="input-field">
                                        <label>Description of Document</label>
                                        <textarea  type="text" name="doc_desc" id="doc_desc" placeholder="Description" autocomplete="off" maxlength="50" required>
                                    </textarea>
                                    <span id="descerror" style="color:red"></span>
                                    </div>
                                    <div class="input-field">
                                        <label>Addressed to</label>
                                        <select name="address_to" id="address"required>
                                            <option hidden value="select">Select</option>
                                            <option value="officer1">Officer 1</option>
                                            <option value="officer2">Officer 2</option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <label>Number of Copies</label>
                                        <input type="number" name="no_of_copies" id="copies" placeholder="number of copies" autocomplete="off" required>
                                        
                                    </div>
                                    <div class="input-field">
                                        <label>Document Created By</label>
                                        <input type="text" name="created_by" id="created_by" placeholder="Enter name" autocomplete="off"  required>
                                        <span id="CreateError" style="color:red"></span>
                                    </div>
                                    <div class="input-field">
                                        <label>Mode of Document</label>
                                        <select name="doc_mode" id="status"required>
                                            <option hidden value="select">Select</option>
                                            <option value="public">Public</option>
                                            <option value="general">General</option>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <label>Department ID</label>
                                        <select name="dept_id" id="status"required>
                                            <option>Select</option>
                                            <?php while($row=mysqli_fetch_array($option)):;?>
                                            <option><?php echo $row['dept_id'];?></option>
                                            <?php endwhile;?>
                                        </select>
                                    </div>
                                    <div class="input-field">
                                        <label>Document Reference No.</label>
                                        <input type="text" name="doc_ref_no" id="ref_no" placeholder="Enter reference number" autocomplete="off"  required>
                                        <span id="DocReferror" style="color:red"></span>
                                    </div>
                                </div>
                                <button type="submit"  class="nextBtn" name="submit">
                                    <span class="btntext">SUBMIT</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ===============js validation ==============  -->
<script>
    
    function formValidation(){

        var deskid = document.getElementById('desk_id').value;
        var deskcheck = /^[A-Za-z0-9]{3,}$/ ;
       
      
       var docOwn = document.getElementById('doc_id').value;
        var docOwncheck= /^[A-Za-z .]{3,50}$/ ;

        var contact = document.getElementById('phn_no').value;
        var concheck= /^[789][0-9]{9}$/;
      
        var doc_desc = document.getElementById('doc_desc').value;
        var desccheck= /^[A-Za-z .]{5,50}$/ ; 


        var created_by = document.getElementById('created_by').value;
        var createdbycheck= /^[A-Za-z. ]{3,40}$/ ; 

        if(deskcheck.test(deskid)){
            document.getElementById('deskerror').innerHTML = " ";
        }else{
            document.getElementById('deskerror').innerHTML = "** Desk id is Invalid.";
            return false;
        }
      
        if(docOwncheck.test(docOwn)){
            document.getElementById('DocError').innerHTML = " ";
        }else{
            document.getElementById('DocError').innerHTML = "** Name is Invalid ";
            return false;
        }

        if(concheck.test(contact)){
            document.getElementById('conError').innerHTML = " ";
        }else{
            document.getElementById('conError').innerHTML = " ** Number is Invalid";
            return false;
        }

        if(desccheck.test(doc_desc)){
            document.getElementById('descError').innerHTML = " ";
        }else{
            document.getElementById('descError').innerHTML = "** Enter valid Description";
            return false;
        }

        if(createdbycheck.test(created_by)){
            document.getElementById('CreateError').innerHTML = " ";
        }else{
            document.getElementById('CreateError').innerHTML = "** Enter Full Name";
            return false;
        }


    }
    

</script>

<!-- ========================= End Content =============================== -->
<?php include 'includes/footer.php';?>
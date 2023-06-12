<?php include 'includes/header.php';?>
<?php include 'includes/user_sidebar.php';?>
<?php include 'includes/topbar.php';?>

<!-- ========================= Content =============================== -->

<div class="details">
    <div class="recentFile">
        <div class="cardHeader">
            <h2>Document Details</h2>
        </div>
        <div class="container1">
            <form action="update.php" method="POST">
                <div class="form first">
                    <div class="fields">
                        <div class="input-field">
                            <label>Desktop no.</label>
                            <input type="text" name="desk_id" placeholder="Enter your desktop number" required>
                        </div> 
                        <div class="input-field">
                            <label>Document ID</label>
                            <input type="texy" name="doc_type" id="status" placeholder="Enter your document id" required>
                        </div>
                        <div class="input-field">
                            <label>Document Status</label>
                            <select name="doc_status" id="status">
                                <option  value="select">Select</option>
                                <option  value="underprocess">Underprocess</option>
                                <option value="Rejected">Rejected</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Remark</label>
                            <input type="text" name="Remark" placeholder="Enter remark for document" required>
                        </div>
                        <div class="input-field">
                            <label>Department</label>
                            <select name="Department" id="Department">
                                <option value="select">Select</option>
                                <option value="MCA">MCA</option>
                                <option value="MBA">MBA</option>
                                <option value="BCA">BCA</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <label>Forwarded To</label>
                            <input type="text" name="Forwarded_To" placeholder="Enter your name" required>
                        </div>
                        <div class="input-field">
                            <label>Updated By</label>
                            <input type="text" name="Updated_by" placeholder="Enter name" required>
                        </div>
                    </div>
                    <button type="submit" name="submit" class="nextBtn">
                        <span class="btntext">SUBMIT</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div> 

<!-- ========================= End Content =============================== -->
<?php include 'includes/footer.php';?>
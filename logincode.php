  <?php
  session_start();
  include('user/dbcon.php');

  if(isset($_POST['submit']))
  {

    $username =$_POST['staff_id'];
    $password =$_POST['password'];

    $log_query = "SELECT * FROM login WHERE staff_id = '$username' AND password = '$password' LIMIT 1";
    $log_query_run = mysqli_query($conn,$log_query);

    $_SESSION['id']=$username;

    if(mysqli_num_rows($log_query_run) > 0)
    {
               
                

            foreach($log_query_run as $row)   // fetching and storing authenticated user data from login table
            {
                    $username = $row['staff_id'];
                    $password = $row['password'];
                   // $name =$row['name'];
                    $role_as = $row['role_as']; // 1 = admin ,0 = user
                  

            }
            
          

            $_SESSION['auth'] = true;    // after login provide authentication
            $_SESSION['auth_role'] = "$role_as";
            $_SESSION['auth_user'] = [
                    'username'=>$username,
                    'password'=>$password,
                   // 'name'=>$name,

            ];   // showing logged in or authenticated user data storing it in array.

            if($_SESSION['auth_role'] == "admin")
            {
                $_SESSION['message'] = " Logged In Successfully...!";
                header('Location:admin/admin.php');
                exit(0);
            }
            elseif($_SESSION['auth_role'] == "User")
            {
                $_SESSION['message'] = " Logged In Successfully...!";
                header('Location:user/user.php');
                exit(0);
            }
             
    }
    else
    {
        $_SESSION['message'] = " Invalid Username Or Password...!";
        header('Location: index.php');

    }

}
else
  {

      $_SESSION['message'] = "ACCESS DENIED";
      header('Location: index.php');
  }
   
  ?>    
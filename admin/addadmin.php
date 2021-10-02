<?php include "../shared/head.php"; 
include "../shared/nav.php";
include "../general/configDB.php";



if(isset($_POST["signup"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $insert = "INSERT INTO `admin` VALUES (NULL, '$email', '$password')";
    $i = mysqli_query($conn, $insert);
    
}




?>




<div class="container col-6">
    <h1 class="text-info text-center">sign up page</h1>
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label>User Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>User Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <button name="signup" class="btn btn-info btn-block">Sign Up</button>
            </form>
        </div>
    </div>
</div>
                
                











<?php include "../shared/script.php" ?>
<?php include "../shared/head.php"; 
include "../shared/nav.php";
include "../general/configDB.php";



if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $select = "SELECT * FROM `admin` where email = '$email' and password = '$password'";
    $s = mysqli_query($conn, $select);
    $numRows = mysqli_num_rows($s);
    
}




?>




<div class="container col-6">
    <h1 class="text-info text-center">login page</h1>
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
                <button name="login" class="btn btn-info btn-block">Login</button>
            </form>
        </div>
    </div>
</div>
                
                











<?php include "../shared/script.php" ?>
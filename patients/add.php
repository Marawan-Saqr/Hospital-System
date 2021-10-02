<?php include "../shared/head.php";
include "../shared/nav.php";
include "../general/configDB.php";





if(isset($_POST["send"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $fieldID = $_POST["doctorID"];

    //insert operation (1)
    $insert = "INSERT INTO `patients` VALUES (NULL, '$name', '$email', $fieldID)";
    $i = mysqli_query($conn, $insert);

    //read operation (2)
    $select = "SELECT * FROM `doctors`";
    $s = mysqli_query($conn, $select);

    if(isset($_GET["edit"])){
        $id = $_GET["edit"];
        $select = "SELECT * FROM `doctors` WHERE id = $id";
        $ss = mysqli_query($conn, $select);
        $row = mysqli_fetch_assoc($ss);
        $row["name"];
        $row["email"];
        $row["fieldID"];
    }
}

?>



<div class="container col-6">
    <h1 class="text-info text-center">Add Patients</h1>
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label>Patient name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Patient email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Patient doctorID</label>
                    <select name="doctorID" class="form-control">
                        <?php foreach($s as $data){?>
                        <option value="<?php echo $data['id']?>"><?php echo $data['name']?> </option>
                        <?php }?>
                    </select>
                </div>
                <button name="send" class="btn btn-info">Send Data</button>
            </form>
        </div>
    </div>
</div>


<?php include "../shared/script.php" ?>

<?php include "../shared/head.php"; 
include "../shared/nav.php";
include "../general/configDB.php";

//read operation (2)
$select = "SELECT doctors.id, doctors.name doctor, doctors.email, fields.name field FROM `doctors` JOIN fields ON
doctors.fieldID = fields.id";
$s = mysqli_query($conn, $select);

if(isset($_GET["delete"])){
    $id = $_GET["delete"];
    // delete operation (3)
    $delete = "DELETE From `doctors` WHERE id = $id";
    $d = mysqli_query($conn, $delete);
}
?>


<div class="container col-7">
    <h1 class="text-info text-center">List Doctor</h1>
    <div class="card">
        <div class="card-body">
            <table class="table table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>fieldID</th>
                    <th>Action</th>
                </tr>
                <?php foreach($s as $data){?>
                <tr>
                    <th><?php echo $data['id'] ?></th>
                    <td><?php echo $data['doctor'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['field'] ?></td>
                    <td><a href="add.php?edit=<?php echo $data['id'] ?>" class="btn btn-info">Update</a></td>
                    <td><a href="list.php?delete=<?php echo $data['id'] ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</div>


<?php include "../shared/script.php" ?>
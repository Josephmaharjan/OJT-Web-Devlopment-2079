<?php include "connection/dbcon.php" ?>
<?php include "partials/_header.php" ?>

<?php
if (isset($_POST['update'])) {
     $id = $_GET['id'];
     $name = $_POST['name'];
     $class = $_POST['class'];
     $address = $_POST['address'];
     $sql = "UPDATE `student` SET `name`='$name',`class`='$class',`address`='$address' WHERE sid=$id";
     $s = $con->prepare($sql);
     $s->execute();

     echo "<script>
     window.location='student.php?updated';
     </script>";
}
 if (isset($_POST['cancel'])) {
      echo "<script>
      window.location='student.php';
      </script>";
 }
?>
<div class="card">
     <div class="card-body">
          <h3 class="card-title">Default form</h3>
          <p class="card-description">
               Please insert the information.
          </p>
          <form method="POST" action="" class="forms-sample">
               <?php
               if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $name = $_GET['name'];
                    $class = $_GET['class'];
                    $address = $_GET['address'];
               }

               echo '<div class="form-group">
                                <label for="">Full Name</label>
                                <input type="text" name="name" class="form-control" id="" value="' . $name . '" required>
                            </div>
                            <div class="form-group">
                                <label>Class</label>
                                <input type="number" name="class" class="form-control" id="" value="' . $class . '" placeholder="Enter Class" required>
                            </div>

                            <div class="form-group">
                                <label for="">Adress</label>
                                <input type="text" name="address" class="form-control"  value="' . $address . '" placeholder="Enter Adress" required>
                            </div>';

               ?>

               <button type="submit" value="submit" name="update" class="btn btn-primary me-2">Update</button>
               <button type="submit" class="btn btn-danger" name="cancel">Cancel</button>
          </form>
     </div>
</div>
<?php include "partials/_footer.php" ?>
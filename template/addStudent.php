<?php include "connection/dbcon.php";
include "partials/_header.php"; ?>
<?php
if (isset($_POST['submit'])) {
    $name = ucwords($_POST['name']);
    $class = $_POST['class'];
    $address = $_POST['address'];


    $sql = "INSERT INTO `student`(`name`, `class`, `address`) VALUES ('$name','$class','$address')";
    $stmt = $con->prepare($sql);
    $stmt->execute();

    echo "<script>window.location.href='student.php?insertSuccess=true'</script>";
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
        <form class="forms-sample" action="" method="POST">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="" name="name" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="name">Class</label>
                <input type="number" class="form-control" id="" name="class" placeholder="class" required>
            </div>
            <div class="form-group">
                <label for="name">Address</label>
                <input type="text" class="form-control" id="" name="address" placeholder="address" required>
            </div>

            <button type="submit" class="btn btn-primary me-2" name="submit">Submit</button>
            <button class="btn btn-light" name="cancel">Cancel</button>
        </form>
    </div>
</div>
<?php include "partials/_footer.php" ?>
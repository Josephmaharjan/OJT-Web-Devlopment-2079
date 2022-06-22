<?php include "connection/dbcon.php" ?>
<?php include "partials/_header.php" ?>

<?php
//alert when data is submitted
if (isset($_GET['insertSuccess'])) {
    if (isset($_GET['insertSuccess'])) {
        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your data has been submitted successfully .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Your data was not submitted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
} ?>

<!-- alert when data is deleted -->
<?php
if (isset($_GET['deleteSuccess'])) {
    if (isset($_GET['deleteSuccess'])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   Your data has been deleted successfully .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Your data was not deleted.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
} ?>

<?php if (isset($_GET['updated'])) {
    if (isset($_GET['updated'])) {
        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">
   Your data has been updated successfully .
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Your data was not updated.Please retry it.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
} ?>

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Student Table</h4>
        <p class="card-description">

        </p>
        <div class="table-responsive ">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Name.</th>
                        <th>Class</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>

                    <!-- this sql display the data of database -->
                    <?php
                    $sql = "SELECT * FROM student";
                    $stmt = $con->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($result as $student) {
                        echo '<tr>
                        <td>' . $student->sid . '</td>
                        <td>' . $student->name . '</td>
                        <td>' . $student->class . '</td>
                        <td>' . $student->address . '</td>
                        <td>
                        <a href="edit.php?id= ' . $student->sid . '&name=' . $student->name . '&class=' . $student->class . '&address=' . $student->address . '" class="btn btn-info">Edit</a>
                        <a href="delete.php?id=' . $student->sid . '" class="btn btn-danger" >Delete</a>
                        </td>
                    </tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include "partials/_footer.php" ?>
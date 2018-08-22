<?php
/**
 * Created by PhpStorm.
 * User: Hasiru Kavishan
 * Date: 8/22/2018
 * Time: 10:30 AM
 */
include 'config.php';
?>

<!DOCTYPE html>

<html>
<head>
    <title>Note Application</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <h2>Book List View</h2>
        <p class="lead">Following are the book list created recently</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-striped py-5">
                <thead>
                <tr>
                    <th scope="col">Book Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    while ($row = mysqli_fetch_assoc($result)){
                ?>
                <tr>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td>
                        <a href="newAuthor.php?edit=<?php echo $row['id'];?>" class="btn btn-success btn-sm mr-1">Edit</a>
                        <a href="config.php?delete=<?php echo $row['id']?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row text-right">
        <div class="col-md-10">
            <a href="newAuthor.php" class="btn btn-primary">Add New Note</a>
        </div>
    </div>



</div>
</body>
</html>

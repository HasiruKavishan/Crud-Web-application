<?php
/**
 * Created by PhpStorm.
 * User: Hasiru Kavishan
 * Date: 8/22/2018
 * Time: 10:31 AM
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
        <h2>Create New Book Here</h2>
        <p class="lead">Please fill below details to create new book item</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <form method="post" action="config.php">
                <div class="mb-3">
                    <label class="form-control-label">Book Title</label>
                    <input class="form-control" name="title" type="text">
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Author</label>
                    <input class="form-control" name="name" type="text" >
                </div>
                <div class="mb-3">
                    <button type="submit" name="save" class="btn btn-primary">Save New book</button>
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('.datepicker').datepicker({
        autoclose: "true"
    });
</script>
</body>
</html>


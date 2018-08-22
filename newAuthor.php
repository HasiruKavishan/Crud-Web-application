<?php
/**
 * Created by PhpStorm.
 * User: Hasiru Kavishan
 * Date: 8/22/2018
 * Time: 10:31 AM
 */
include 'config.php';
if (isset($_GET['edit'])){
    $id=$_GET['edit'];
    $edit_status=true;
    $rec= mysqli_query($db,"SELECT * FROM book_author WHERE id=$id");
    $record = mysqli_fetch_assoc($rec);
    $title=$record['title'];
    $name=$record['name'];
    $id=$record['id'];
}
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
    <style>
        .msg{
            margin: 30px auto;
            padding: 10px;
            border-radius: 5px;
            color: #3c763d;
            background: #dff0d8;
            border: 1px solid #3c763d;
            width: 50%;
            text-align: center;
        }
    </style>
</head>
<body>
<?php if(isset($_SESSION['msg'])):?>
    <div class="msg">
        <?php
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
    </div>
<?php endif;?>
<div class="container">
    <div class="py-5 text-center">
        <h2>Create New Book Here</h2>
        <p class="lead">Please fill below details to create new book item</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8 order-md-1">
            <form method="post" action="config.php">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="mb-3">
                    <label class="form-control-label">Book Title</label>
                    <input class="form-control" name="title" type="text" value="<?php echo $title;?>">
                </div>
                <div class="mb-3">
                    <label class="form-control-label">Author</label>
                    <input class="form-control" name="name" type="text" value="<?php echo $name;?>">
                </div>
                <div class="mb-3">
                    <?php if ($edit_status==false):?>
                        <button  type="submit" name="save" class="btn btn-primary">Save New Note</button>
                    <?php else:?>
                        <button  type="submit" name="update" class="btn btn-primary">Update</button>
                    <?php endif;?>
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>


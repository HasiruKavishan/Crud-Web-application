<?php
/**
 * Created by PhpStorm.
 * User: Hasiru Kavishan
 * Date: 8/22/2018
 * Time: 10:31 AM
 */

    session_start();
    $title='';
    $name='';
    $id=0;
$edit_status= false;
    //create the database connection
    $db = mysqli_connect('localhost','root','','author');

    //Save function
    if(isset($_POST['save'])){
        $title=$_POST['title'];
        $name=$_POST['name'];

        $query="INSERT INTO book_author (title, name) VALUES ('$title','$name')";
        mysqli_query($db,$query);
        $_SESSION['msg']="New author added";
        header('location:newAuthor.php');//after inserting data to redirect page

    }

    //get data from database
    $getData = "SELECT * FROM book_author";
    $result= mysqli_query($db,$getData);

    //update Record
    if(isset($_POST['update'])){
        $title = mysqli_real_escape_string($db,$_POST['title']);
        $name = mysqli_real_escape_string($db,$_POST['name']);
        $id = mysqli_real_escape_string($db,$_POST['id']);
//        $updateRecord="UPDATE book_author set title='$title', name='$name' WHERE id='$id'";
        mysqli_query($db,"UPDATE book_author set title='$title', name='$name' WHERE id='$id'");
        $_SESSION['msg']="Successfully updated";
        header('location:newAuthor.php');

    }

if (isset($_GET['delete'])){
    $id=$_GET['delete'];
    mysqli_query($db,"DELETE From book_author WHERE id=$id");
    $_SESSION['msg']="Successfully Deleted";
    header('location: newAuthor.php');

}

?>
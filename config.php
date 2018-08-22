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
    //create the database connection
    $db = mysqli_connect('localhost','root','','author');

    //Save function
    if(isset($_POST['save'])){
        $title=$_POST['title'];
        $name=$_POST['name'];

        $query="INSERT INTO book_author (title, name) VALUES ('$title','$name')";
        mysqli_query($db,$query);
        header('location:newAuthor.php');//after inserting data to redirect page
        $_SESSION['msg']="New author added";
    }

    //get data from database
    $getData = "SELECT * FROM book_author";
    $result= mysqli_query($db,$getData);

?>
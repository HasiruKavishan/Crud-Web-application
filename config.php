<?php
/**
 * Created by PhpStorm.
 * User: Hasiru Kavishan
 * Date: 8/22/2018
 * Time: 10:31 AM
 */


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
    }

?>
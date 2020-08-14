<?php
    include("db.php");

    if(isset($_POST['save_task'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
    
        $query = "INSERT INTO tasks(title,description) values ('$title','$description')";
        $result = mysqli_query($conn,$query);
        if(!$result) {
            die("Query Failed");
        }
    
        $_SESSION['message'] = 'Task Saved Successfully';
        $_SESSION['message-type'] = 'success';
    
        header("Location:index.php");
    }
?>
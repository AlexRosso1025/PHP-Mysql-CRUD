<?php
    include("db.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM tasks WHERE task_id = $id";
        $result = mysqli_query($conn,$query);
        if(!$result) {
            die("Query Failed");
        }

        $_SESSION['message'] = 'Task Removed Successfully';
        $_SESSION['message-type'] = 'danger';

        header("Location: index.php");

    }
?>
<?php
require_once 'config.php';

if(isset($_GET['task_id']) && isset($_GET['new_task'])) {
    $task_id = $_GET['task_id'];
    $new_task = $_GET['new_task'];

    $update_query = "UPDATE `task` SET `task` = '$new_task' WHERE `task_id` = '$task_id'";
    $result = mysqli_query($db, $update_query);

    if($result) {
        header('Location: index.php');
        exit();
    } else {
        echo "Error updating task.";
    }
} else {
    echo "Task ID or new task not provided.";
}
?>

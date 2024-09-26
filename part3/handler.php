

<?php 
include 'connnect.php';
    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "INSERT INTO `todo_info` (`title`, `content`) VALUES ('$title', '$content')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("location:todo.php");
        }
        else{
            die($conn->error);
        }
    }
    if(isset($_POST['deleteAll'])){
        $sql = "DELETE FROM `todo_info`";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("location:todo.php");
        }
        else{
            die($conn->error);
        }
    }
    if(isset($_POST["update"])){
        $sql = "UPDATE `todo_info` SET `title` = '$title', `content` = '$content' WHERE `todo_info`.`id` = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("location:todo.php");
        }
        else{
            die($conn->error);
        }
    }
    if(isset($_POST["deleteById"])){
        $sql = "DELETE FROM `todo_info` WHERE `todo_info`.`id` = $id";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("location:todo.php");
        }
        else{
            die($conn->error);
        }
    }
?>
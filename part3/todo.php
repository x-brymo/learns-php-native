<php><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 3 Todo List</title>
</head>
<body>
    <form action="handler.php" method="POST">
        <input type="text" name="title" value="title">
        <input type="text" name="content" value="content">
        <input type="submit" name="submit">
    </form>

    <?php
    include 'connnect.php';
    $sql = "SELECT * FROM `todo_info`";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        echo "Id todo :".$row['id']."<br>"."Title :"."<br>". $row['title'] . "<br>" . "Content :" . "<br>" . $row['content'] . "<br>" . "<br>";
        
    }
    
    ?>
    <button onclick="">Delete All</button>
    <button onclick="   ">Delete By Id</button>
        
</body>
</html>
</php>


<html>
    <div class="container">
        <div class="header">
            <center> <h1>Add task</h1> </center>
            <a href="create.php"><button type="button">update task</button></a>
        </div>
        <div class="body">
            <form action="add.php" method="POST">
                <label for="task">Task name</label>
                <input type="text" required name="task" placeholder="Update task" value="<?php echo $row['name'];?>">
                <input type="submit" name="send" value="Add task" >
            </form>
        </div>
    </div>

</html>

<html>
    <div class="container">
        <div class="header">
            <center> <h1>Add task</h1> </center>
        </div>
        <div class="body">
            <form action="add.php" method="POST">
                <label for="task">Task name</label>
                <input type="text" required name="task" placeholder="Enter task">
                <input type="submit" name="send" value="Add task" >
            </form>
        </div>
    </div>
</html>
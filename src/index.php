<!DOCTYPE html>

<?php include '../backend/db.php'; 

$sql = "SELECT * FROM tasks";
$rows = $db->query($sql);

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav> 
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="create.php">Create</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="register.php">Register</a></li>
                </ul>
            </nav>
            <center>
                <h1>Crud system</h1>
            </center>
            <a href="../classes/task/add.php"><button type="button">Add task</button></a>
            <button type="button">Print</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Task</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php while($row = $rows->fetch_assoc()): ?>
                            <th><?php echo $row['id'] ?></th>
                            <td><?php echo $row['name'] ?></td>
                            <td><a href="../classes/task/update.php"<?php echo $row['id'];?>><button>Edit</button></a></td>
                            <td><a href="../classes/task/delete.php"<?php echo $row['id'];?>><button>Delete</button></a></td>
                        <?php endwhile; ?> 
                    </tr>
                </body>
            </table>
        </div>
    </div>
</body>

</html>
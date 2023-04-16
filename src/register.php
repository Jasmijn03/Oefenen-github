<html>
    <div class="container">
        <div class="header">
            <center> <h1>Register</h1> </center>
        </div>
        <div class="body">
            <form action="register.php" method="POST">
                <label for="username">Username</label>
                <input type="text" required name="username" placeholder="Enter username">
                <label for="password">Password</label>
                <input type="password" required name="password" placeholder="Enter password">
                <input type="submit" name="register" value="Register" >
            </form>
        </div>
    </div>
</html>

<?php 
if(isset($_POST['register'])){
    $name = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$name', '$password')";
    $val = $db->query($sql);

    if ($val) {
        header('location: login.php');
    }
}


?>
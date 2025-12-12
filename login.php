<?php
    if(isset($_POST ['button'])){
        $username = $_POST['username'];

        $password = $_POST['password'];

        $koneksi = msqli_connect('localhost', 'root', '','datatiga');

        $query ="INSERT users ('username', 'password')";

        mysqli_query(($koneksi,$query));
    }
?>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>facebook</title>
</head>
<body>
    <h1>Facebook</h1>

    <form action="index.php" method="POST">
        <p>Username :
            <input type="text" value="username">
        </p>

        <p>Password :
            <input type="text" value="password">
        </p>

        <button type="submit" value="register">
            Register
        </button>
        

    </form>

    

</body>
</html>
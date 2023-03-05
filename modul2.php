<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = true;

        if($user>7){
            echo "<script>alert('Username lebih dari 7 karakter');</script>";
            $x = false;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "<script>alert('Password harus memiliki setidaknya satu huruf kapital');</script>";
            $x = false;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "<script>alert('Password harus memiliki setidaknya satu huruf kecil');</script>";
            $x = false;
        }
        
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "<script>alert('Password harus memiliki setidaknya satu karakter spesial');</script>";
            $x = false;
        }
        
        if (!preg_match("/[0-9]/", $password)) {
            echo "<script>alert('Password harus memiliki setidaknya satu angka');</script>";
            $x = false;
        }
        if($pass<0){
            echo "<script>alert('Password kurang dari 10 karakter');</script>";
            $x = false;
        }
        if( $x == true ){
            echo "<script>alert('Berhasil!');</script>";
        }   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hiasan/style.css">
    <title>Halaman Pendaftaran</title>
    <script>
        function showAlert(msg) {
            alert(msg);
        }
    </script>
</head>
<body>
    <h1>Halaman Pendaftaran</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="text" name="password" id="password">
            </li>
            <li>
                <button type="submit">Submit</button>
            </li>
        </ul>
    </form>
</body>
</html>

<?php

try {

    $validasi = false;
    if (isset($_SESSION['admin'])) {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $validasi = true;
        }
    }
    
} catch (\Throwable $er) {
    echo (" (validasi_admin.php) pesan: " . $er);

}

?>
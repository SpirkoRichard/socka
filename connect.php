<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $conn = mysqli_connect('localhost', 'root', 'heslo', 'login');

    if (!$conn) {
        die("Connection Failed: " . mysqli_connect_error());
    }

    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phone'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);

        $sql = "INSERT INTO `users` (`name`, `email`, `password`, `phone`)
        VALUES ('$name', '$email', '$password', '$phone')";

        $query = mysqli_query($conn, $sql);

        if ($query) {
            echo 'Prihlásenie úspešné.';
        } else {
            echo 'Prihlásenie neúspešné: ' . mysqli_error($conn);
        }
    } else {
        echo 'Všetky polia musia byť vyplnené.';
    }

    mysqli_close($conn);
}
?>

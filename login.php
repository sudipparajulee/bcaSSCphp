<?php 
session_start();
include 'header.php'; ?>

<form action="" method="POST" class="mt-16 w-1/2 mx-auto p-5 bg-gray-200 text-center rounded-lg shadow-lg">
    <h3 class="text-center text-3xl font-bold">Login</h3>
    <input type="email" placeholder="Enter Email" name="email" class="w-full my-2 p-4 rounded">
    <input type="password" placeholder="Enter Password" name="password" class="w-full my-2 p-4 rounded">
    <input type="submit" value="Login" placeholder="Enter Password" name="login" class="w-1/2 bg-blue-600 text-white my-2 p-3 rounded">
    <p class="text-center">Don't have an account? <a href="register.php" class="text-blue-600">Register</a></p>
</form>

<?php 
include 'footer.php'; 
?>

<?php
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $qry = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    include 'admin/dbconnection.php';
    $res = mysqli_query($conn, $qry);
    $c = mysqli_num_rows($res);
    include 'admin/closeconnection.php';
    if($c > 0)
    {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['name'] = $row['name'];
        $_SESSION['loggedin'] = true;
        echo "<script>window.location.href='admin/dashboard.php';</script>";
    }
    else
    {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}

?>
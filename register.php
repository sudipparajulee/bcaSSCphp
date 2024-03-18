<?php include 'header.php'; ?>

<form action="" method="POST" class="mt-16 w-1/2 mx-auto p-5 bg-gray-200 text-center rounded-lg shadow-lg">
    <h3 class="text-center text-3xl font-bold">Register</h3>
    <input type="text" placeholder="Enter Full Name" name="fullname" class="w-full my-2 p-4 rounded">
    <input type="email" placeholder="Enter Email" name="email" class="w-full my-2 p-4 rounded">
    <input type="password" placeholder="Enter Password" name="password" class="w-full my-2 p-4 rounded">
    <input type="password" placeholder="Confirm Password" name="cpassword" class="w-full my-2 p-4 rounded">
    <input type="submit" value="Register" placeholder="Enter Password" name="register" class="w-1/2 bg-blue-600 text-white my-2 p-3 rounded">
    <p class="text-center">Already have an account? <a href="login.php" class="text-blue-600">Login</a></p>
</form>

<?php include 'footer.php'; 

if(isset($_POST['register']))
{
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password != $cpassword)
    {
        echo "<script>alert('Passwords do not match');</script>";
    }
    else
    {
        $password = md5($password);
        $qry = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
        include 'admin/dbconnection.php';
        $res = mysqli_query($conn, $qry);
        include 'admin/closeconnection.php';
        if($res)
        {
            echo "<script>alert('Registered Successfully');
                window.location.href='login.php';
            </script>";
        }
        else
        {
            echo "<script>alert('Failed to Register');</script>";
        }
    }
}


?>
<?php include 'header.php'; 
$id = $_GET['id'];
$qry = "SELECT * FROM categories WHERE id = $id";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_assoc($result);
include 'closeconnection.php';
?>
    <h1 class="font-semibold text-2xl text-red-600">Edit Category</h1>
    <hr class="bg-blue-500 h-1">

    <form action="actioncategory.php" method="POST" class="mt-5">
        <input type="hidden" name="categoryid" value="<?php echo $row['id']; ?>">
        <input type="text" placeholder="Enter Priority" name="priority" class="w-full p-2 border rounded-lg shadow my-2" value="<?php echo $row['priority']; ?>">
        <input type="text" placeholder="Enter Category Name" name="categoryname" class="w-full p-2 border rounded-lg shadow my-2" value="<?php echo $row['categoryname'];?>">

        <div class="flex justify-center gap-2 mt-5">
            <button name="update" type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow">Update Category</button>
            <a href="categories.php" class="bg-red-600 text-white px-8 py-2 rounded-lg shadow">Exit</a>
        </div>
    </form>
<?php include 'footer.php'; ?>
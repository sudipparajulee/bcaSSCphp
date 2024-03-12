<?php include 'header.php'; 
$qry = "SELECT * FROM categories ORDER BY priority";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
include 'closeconnection.php';
?>
    <h1 class="font-semibold text-2xl text-red-600">Categories</h1>
    <hr class="bg-blue-500 h-1">
    
    <div class="my-5 text-right">
        <a href="createcategory.php" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow">Add Category</a>
    </div>

    <table class="w-full mt-5">
        <tr>
            <th class="p-2 border bg-gray-200">Order</th>
            <th class="p-2 border bg-gray-200">Category Name</th>
            <th class="p-2 border bg-gray-200">Action</th>
        </tr>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td class="p-2 border text-center"><?php echo $row['priority']; ?></td>
            <td class="p-2 border text-center"><?php echo $row['categoryname'] ?></td>
            <td class="p-2 border text-center">
                <a href="editcategory.php?id=<?php echo $row['id'];?>" class="bg-blue-600 text-white px-4 py-1 mx-1 rounded-lg">Edit</a>
                <a onclick="return confirm('Are you sure to delete?')" href="actioncategory.php?deleteid=<?php echo $row['id']; ?>" class="bg-red-600 text-white px-4 py-1 mx-1 rounded-lg">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>

<?php include 'footer.php'; ?>
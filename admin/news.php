<?php include 'header.php'; 
$qry = "SELECT news.*,categories.categoryname FROM news INNER JOIN categories ON news.category_id = categories.id ORDER BY date DESC";
include 'dbconnection.php';
$result = mysqli_query($conn, $qry);
include 'closeconnection.php';
?>

    <h1 class="font-semibold text-2xl text-red-600">News</h1>
    <hr class="bg-blue-500 h-1">
    
    <div class="my-5 text-right">
        <a href="createnews.php" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow">Add News</a>
    </div>

    <table class="w-full">
        <tr>
            <th class="p-2 border bg-gray-200">News Date</th>
            <th class="p-2 border bg-gray-200">Picture</th>
            <th class="p-2 border bg-gray-200">News Title</th>
            <th class="p-2 border bg-gray-200">Description</th>
            <th class="p-2 border bg-gray-200">Category</th>
            <th class="p-2 border bg-gray-200">Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td class="p-2 border"><?php echo $row['date'];?></td>
            <td class="p-2 border"><img src="../uploads/<?php echo $row['photopath'];?>" class="h-24" alt=""></td>
            <td class="p-2 border"><?php echo $row['title']; ?></td>
            <td class="p-2 border"><?php echo $row['description']; ?></td>
            <td class="p-2 border"><?php echo $row['categoryname']; ?></td>
            <td class="p-2 border">
                <a href="" class="bg-blue-600 text-white px-4 py-1 mx-1 rounded-lg">Edit</a>
                <a onclick="return confirm('Are you sure to delete?')" href="" class="bg-red-600 text-white px-4 py-1 mx-1 rounded-lg">Delete</a>
            </td>
        </tr>
        <?php } ?>
    </table>



<?php include 'footer.php'; ?>
<?php include 'header.php'; 
$qry = "SELECT * FROM categories ORDER BY priority";
include 'dbconnection.php';
$result = $conn->query($qry);
include 'closeconnection.php';
?>
    <h1 class="font-semibold text-2xl text-red-600">Create News</h1>
    <hr class="bg-blue-500 h-1">

    <form action="actionnews.php" method="POST" enctype="multipart/form-data" class="mt-5">
        <select name="category_id" id="" class="w-full p-2 border rounded-lg shadow my-2">
            <?php while($row = mysqli_fetch_assoc($result)) {
                ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['categoryname']; ?></option>
            <?php } ?>
        </select>
        <input type="date" placeholder="Enter Date" name="date" class="w-full p-2 border rounded-lg shadow my-2" value="<?php echo date('Y-m-d'); ?>">
        <input type="text" placeholder="Enter Title" name="title" class="w-full p-2 border rounded-lg shadow my-2">
        <textarea name="description" id="" rows="5" class="w-full p-2 border rounded-lg shadow my-2" placeholder="Enter Description"></textarea>
        <input type="file" name="photopath" class="w-full p-2 border rounded-lg shadow my-2">
        <div class="flex justify-center gap-2 mt-5">
            <button name="store" type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow">Add News</button>
            <a href="news.php" class="bg-red-600 text-white px-8 py-2 rounded-lg shadow">Exit</a>
        </div>
    </form>
<?php include 'footer.php'; ?>
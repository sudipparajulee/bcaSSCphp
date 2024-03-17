<?php include 'header.php'; 
$qry = "SELECT * FROM categories ORDER BY priority";
$qrynews = "SELECT * FROM news WHERE id=".$_GET['id'];
include 'dbconnection.php';
$result = $conn->query($qry);
$resultnews = mysqli_query($conn, $qrynews);
$news = mysqli_fetch_assoc($resultnews);
include 'closeconnection.php';
?>
    <h1 class="font-semibold text-2xl text-red-600">Edit News</h1>
    <hr class="bg-blue-500 h-1">

    <form action="actionnews.php" method="POST" enctype="multipart/form-data" class="mt-5">
        <input type="hidden" name="newsid" value="<?php echo $news['id'];?>">
        <select name="category_id" id="" class="w-full p-2 border rounded-lg shadow my-2">
            <?php while($row = mysqli_fetch_assoc($result)) {
                ?>
            <option value="<?php echo $row['id']; ?>" 
            <?php
            if($row['id'] == $news['category_id'])
                echo "selected";
            else
                echo "";
            ?>
            ><?php echo $row['categoryname']; ?></option>
            
            <?php } ?>
        </select>
        <input type="date" placeholder="Enter Date" name="date" class="w-full p-2 border rounded-lg shadow my-2" value="<?php echo $news['date']; ?>">
        <input type="text" placeholder="Enter Title" name="title" class="w-full p-2 border rounded-lg shadow my-2" value="<?php echo $news['title'];?>">
        <textarea name="description" id="" rows="5" class="w-full p-2 border rounded-lg shadow my-2" placeholder="Enter Description"><?php echo $news['description']; ?></textarea>
        <p>Current Picture</p>
        <img src="../uploads/<?php echo $news['photopath'];?>" class="h-24" alt="">
        <input type="file" name="photopath" class="w-full p-2 border rounded-lg shadow my-2">
        <input type="hidden" name="oldpath" value="<?php echo $news['photopath'];?>">
        <div class="flex justify-center gap-2 mt-5">
            <button name="update" type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow">Update News</button>
            <a href="news.php" class="bg-red-600 text-white px-8 py-2 rounded-lg shadow">Exit</a>
        </div>
    </form>
<?php include 'footer.php'; ?>
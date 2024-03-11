<?php include 'header.php'; ?>
    <h1 class="font-semibold text-2xl text-red-600">Add New Category</h1>
    <hr class="bg-blue-500 h-1">

    <form action="actioncategory.php" method="POST" class="mt-5">
        <input type="text" placeholder="Enter Priority" name="priority" class="w-full p-2 border rounded-lg shadow my-2">
        <input type="text" placeholder="Enter Category Name" name="categoryname" class="w-full p-2 border rounded-lg shadow my-2">

        <div class="flex justify-center gap-2 mt-5">
            <button type="submit" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow">Add Category</button>
            <a href="categories.php" class="bg-red-600 text-white px-8 py-2 rounded-lg shadow">Exit</a>
        </div>
    </form>
<?php include 'footer.php'; ?>
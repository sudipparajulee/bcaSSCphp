<?php include 'header.php'; ?>
    <h1 class="font-semibold text-2xl text-red-600">Categories</h1>
    <hr class="bg-blue-500 h-1">
    
    <div class="my-5 text-right">
        <a href="" class="bg-blue-600 text-white px-5 py-2 rounded-lg shadow">Add Category</a>
    </div>

    <table class="w-full mt-5">
        <tr>
            <th class="p-2 border bg-gray-200">Order</th>
            <th class="p-2 border bg-gray-200">Category Name</th>
            <th class="p-2 border bg-gray-200">Action</th>
        </tr>
        <tr>
            <td class="p-2 border text-center">1</td>
            <td class="p-2 border text-center">National</td>
            <td class="p-2 border text-center">
                <a href="" class="bg-blue-600 text-white px-4 py-1 mx-1 rounded-lg">Edit</a>
                <a href="" class="bg-red-600 text-white px-4 py-1 mx-1 rounded-lg">Delete</a>
            </td>
        </tr>
    </table>

<?php include 'footer.php'; ?>
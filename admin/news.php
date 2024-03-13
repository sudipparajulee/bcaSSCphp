<?php include 'header.php'; ?>

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
        <tr>
            <td class="p-2 border">2024-03-13</td>
            <td class="p-2 border">Picture</td>
            <td class="p-2 border">This is title</td>
            <td class="p-2 border">This is description</td>
            <td class="p-2 border">National</td>
            <td class="p-2 border">
            <a href="" class="bg-blue-600 text-white px-4 py-1 mx-1 rounded-lg">Edit</a>
                <a onclick="return confirm('Are you sure to delete?')" href="" class="bg-red-600 text-white px-4 py-1 mx-1 rounded-lg">Delete</a>
            </td>
        </tr>
    </table>



<?php include 'footer.php'; ?>
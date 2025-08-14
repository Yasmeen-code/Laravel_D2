<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Create Post</h1>

        <form action="/create_done" method="" class="space-y-4">
            <div>
                <label for="title" class="block text-gray-700 font-medium mb-1">Title</label>
                <input type="text" name="title" id="title" required
                       class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400">
            </div>

            <div>
                <label for="content" class="block text-gray-700 font-medium mb-1">Content</label>
                <textarea name="content" id="content" required rows="5"
                          class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400"></textarea>
            </div>

            <button type="submit"
                    class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition-colors">
                Create Post
            </button>
        </form>
    </div>

</body>
</html>

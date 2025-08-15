<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Posts</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white shadow-lg rounded-lg w-full max-w-4xl overflow-hidden">
        <div class="px-6 py-4 border-b bg-blue-600">
            <h2 class="text-white text-xl font-semibold">Posts List</h2>
        </div>

        <table class="min-w-full table-auto">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">ID</th>
                    <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Title</th>
                    <th class="py-3 px-4 text-left text-sm font-semibold text-gray-700">Content</th>
                    <th class="py-3 px-4 text-center text-sm font-semibold text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="hover:bg-gray-50 transition">
                        <td class="py-3 px-4 border-b">{{ $post->id }}</td>
                        <td class="py-3 px-4 border-b font-medium">{{ $post->title }}</td>
                        <td class="py-3 px-4 border-b text-gray-600">{{ $post->content }}</td>
                        <td class="py-3 px-4 border-b text-center">
                            <a href="/edit/{{$post->id}}" 
                               class="inline-block bg-blue-500 text-white px-3 py-1 rounded-md text-sm hover:bg-blue-600 transition">
                               Edit
                            </a>
                            <a href="/delete_done/{{$post->id}}" 
                               class="inline-block bg-red-500 text-white px-3 py-1 rounded-md text-sm hover:bg-red-600 transition ml-2">
                               Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

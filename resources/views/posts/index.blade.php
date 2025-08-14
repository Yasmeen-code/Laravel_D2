<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <table class="min-w-full bg-white border border-gray-200 rounded-md overflow-hidden">
    <thead class="bg-gray-100">
        <tr>
            <th class="py-2 px-4 border-b">ID</th>
            <th class="py-2 px-4 border-b">Title</th>
            <th class="py-2 px-4 border-b">Content</th>
            <th class="py-2 px-4 border-b">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr class="hover:bg-gray-50">
                <td class="py-2 px-4 border-b">{{ $post['id'] }}</td>
                <td class="py-2 px-4 border-b">{{ $post['title'] }}</td>
                <td class="py-2 px-4 border-b">{{ $post['content'] }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="/edit/{{$post['id']}}" class="text-blue-500 hover:underline">Edit</a>
                    <a href="/delete_done/{{$post['id']}}" class="text-red-500 hover:underline ml-2">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

    
</body>
</html>
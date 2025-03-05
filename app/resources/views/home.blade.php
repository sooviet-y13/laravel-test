<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

<div class="max-w-3xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
    <h1 class="text-2xl font-bold text-center mb-5">User List</h1>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
        <tr class="bg-gray-200 text-gray-700">
            <th class="py-2 px-4 border">ID</th>
            <th class="py-2 px-4 border">Name</th>
            <th class="py-2 px-4 border">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr class="text-center border-t">
                <td class="py-2 px-4 border">{{ $user->id }}</td>
                <td class="py-2 px-4 border">{{ $user->name }}</td>
                <td class="py-2 px-4 border">{{ $user->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
</head>
<body>
    <table border="1">
        <thead>
        <tr>
            <th>Name</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Mob no</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender }}</td>
                <td>{{ $user->phone }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

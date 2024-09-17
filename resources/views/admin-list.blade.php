<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin List</title>
</head>
<body>
    <table border="1">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Gender</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
            <tr>
                <td>{{ $admin->first_name }}</td>
                <td>{{ $admin->last_name }}</td>
                <td>{{ $admin->email }}</td>
                <td>{{ $admin->gender }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

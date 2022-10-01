<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <title>All user list</title>
</head>
<body>
    <div class="container">
        <h1>All users here</h1>
        <a href="/" class="btn btn-info">Home</a>
        <a href="/users/create" class="btn btn-info">Create A nuew user</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>User Name</th>
                    <th>Email Address</th>
                    <th>Phone</th>
                    <th>Profiles</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alluser as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->fname}}</td>
                        <td>{{$data->lname}}</td>
                        <td>{{$data->uname}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>
                            <a href="/users/{{$data->id}}" class="">Show Profile</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>